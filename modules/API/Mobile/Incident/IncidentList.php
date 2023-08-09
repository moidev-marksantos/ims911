<?php 

include_once 'modules/API/Mobile/API.php';

class IncidentList{

    public function get($data)    
    {
        $token              = $data['data']['token'];
        $department         = $data['data']['department'];
        $status             = $data['data']['status'];

        //CHECK TOKEN IF EXIST
        if(!$this->checkToken($token)[0]){
            http_response_code(400);
            print_r(json_encode(array(
                "status"    => "Error",
                "result"    => "Invalid token. Please try to login again!"
            )));
        }
        else{
            date_default_timezone_set('Asia/Manila');
            $datetoday = date('m-d-Y', time());
            //GET DATA BASED ON DEPARTMENT
            $incidentlist = $this->list($department,$status);
            if(!isset($incidentlist)){
                http_response_code(200);
                print_r(json_encode(array(
                    "status"    => "Success",
                    "result"    => "No $status incidents"
                )));
                
                //START: LOGS
                $fp = fopen("logs/api-logs-incident-list-$datetoday.txt", 'a+');
                date_default_timezone_set('Asia/Manila');
                fwrite($fp, "\n" . date('m/d/Y h:i:s a', time()) . " - GET INCIDENT: " . "- Department - ". $department . " - Status - " . $status . " - by - " . $this->checkToken($token)[2] . " - Count - " . count($incidentlist));  
                fclose($fp); 
                //END: LOGS
            }
            else{
                http_response_code(200);
                print_r(json_encode(array(
                    "status"    => "Success",
                    "result"    => $incidentlist
                )));

                //START: LOGS
                $fp = fopen("logs/api-logs-incident-list-$datetoday.txt", 'a+');
                date_default_timezone_set('Asia/Manila');
                fwrite($fp, "\n" . date('m/d/Y h:i:s a', time()) . " - GET INCIDENT: " . "- Department - ". $department . " - Status - " . $status . " - by - " . $this->checkToken($token)[2] . " - Count - " . count($incidentlist));  
                fclose($fp); 
                //END: LOGS
            }
            
        }
    }

    private function checkToken($token)
    {
        global $adb;
        $result = $adb->pquery("SELECT responderid , token , CONCAT(responder_tks_firstname,' ',responder_tks_lastname) as name FROM vtiger_responder WHERE token = ?", array($token));
        if($adb->num_rows($result) > 0){
            return array(
                true, $adb->query_result($result,0,"responderid") ,  $adb->query_result($result,0,"name")
            );
        }
        return array(
            false, 0 , 0
        );;
    }
    
    private function list($department,$status)
    {
        global $adb;
        $result = $adb->pquery("SELECT 
        vtiger_troubletickets.ticketid,
        vtiger_troubletickets.ticket_no,
        vtiger_troubletickets.category as incidenttype,
        vtiger_troubletickets.status,
        vtiger_ticketcf.*,
        vtiger_crmentity.description,
        vtiger_crmentity.createdtime
        FROM vtiger_troubletickets 
        LEFT JOIN vtiger_ticketcf   ON vtiger_troubletickets.ticketid = vtiger_ticketcf.ticketid
        LEFT JOIN vtiger_crmentity  ON vtiger_troubletickets.ticketid = vtiger_crmentity.crmid
        WHERE
        vtiger_troubletickets.status = ? AND vtiger_crmentity.deleted != 1 AND 
        vtiger_ticketcf.cf_937 LIKE '%$department%'
        ", array($status));
        $incident_arr = array();
        if($adb->num_rows($result) > 0){          
            for($index = 0; $index < $adb->num_rows($result); $index++){
                array_push($incident_arr,
                    array(
                        "id"                => $adb->query_result($result,$index,"ticketid"),
                        "incidentno"        => $adb->query_result($result,$index,"ticket_no"),
                        "incidenttype"      => $adb->query_result($result,$index,"incidenttype"),
                        "description"       => $adb->query_result($result,$index,"description"),
                        "status"            => $adb->query_result($result,$index,"status"),
                        "location"          => $adb->query_result($result,$index,"cf_860"). ' Nearest Landmark '.$adb->query_result($result,$index,"cf_862"),
                        "coordinates"       => $adb->query_result($result,$index,"cf_854"), //Coordinates
                        "createddatetime"   => $adb->query_result($result,$index,"createdtime"),
                    )
                );
            }
            return $incident_arr;
        }
        return null;
    }
}

?>