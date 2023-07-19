<?php

include_once 'modules/API/Mobile/API.php';

class AcceptIncident{
    
    public function accept($data)
    {
        $token              = $data['data']['token'];
        $incidentid         = $data['data']['incidentid'];
      
        //CHECK TOKEN IF EXIST
        if(!$this->checkToken($token)[0]){
            http_response_code(400);
            print_r(json_encode(array(
                "status"    => "Error",
                "result"    => "Invalid token. Please try to login again!"
            )));
        }
        else{
            //UPDATE TICKET
            http_response_code(200);
            $success = "";

            if($this->checkStatus($incidentid)[1] != 'Closed'){                
                $logs    = $this->insertLogs($this->checkToken($token)[1], $incidentid);
                $result  = $this->updatestatus($incidentid,$this->checkToken($token)[2]); 
                $success = "Insert logs success";
            }else{                     
                $logs    = $this->insertLogs($this->checkToken($token)[1], $incidentid);       
                $success = "Insert logs success & update status";         
            }   
            
            print_r(json_encode(array(
                "status"    => "Success",
                "message"   =>  $success ,
                "result"    => $this->checkStatus($incidentid)[1]
            )));

            //START: LOGS
            $fp = fopen('api-logs.txt', 'a+');    
            date_default_timezone_set('Asia/Manila');                
            fwrite($fp, "\n" . date('m/d/Y h:i:s a', time()) . " - ACCEPT INCIDENT: " . "Incident Id - " .$incidentid . " - Accept by " . $this->checkToken($token)[2]);  
            fclose($fp); 
            //END: LOGS
            
        }
    }

    private function checkStatus($incidentid){
        global $adb;
        $result = $adb->pquery("SELECT status FROM vtiger_troubletickets WHERE ticketid = ?", array($incidentid));
        if($adb->num_rows($result) > 0){
            return array(
                true, $adb->query_result($result,0,"status")
            );
        }
        return array(
            false, 0
        );
    }

    private function checkToken($token)
    {
        global $adb;
        $result = $adb->pquery("SELECT responderid,token , CONCAT(responder_tks_firstname,' ',responder_tks_lastname) as name FROM vtiger_responder WHERE token = ?", array($token));
        if($adb->num_rows($result) > 0){
            return array(
                true, $adb->query_result($result,0,"responderid"), $adb->query_result($result,0,"name")
            );
        }
        return array(
            false, 0 , 0
        );
    }

    private function updatestatus($incidentid,$name)
    {
        $incident_id = vtws_getWebserviceEntityId('HelpDesk', $incidentid);

        $user = CRMEntity::getInstance('Users');    
        $user->id = $user->getActiveAdminId();
        $user->retrieve_entity_info($user->id, 'Users'); 

        $data = array(
            'ticketstatus' => 'In Progress',     
            'id' =>  $incident_id
        );        
        $incident = vtws_revise($data, $user);

        global $adb;       
        $adb->pquery("UPDATE vtiger_modtracker_basic SET whodid = ? 
        WHERE module = 'HelpDesk' AND status = 0 AND crmid = ? AND 
        id = (select max(id) from vtiger_modtracker_basic)
        ", array('Responder: ' . $name,$incidentid));

        return array(
            "status" => $incident['ticketstatus'] 
        );
    }

    private function insertLogs($responderid, $incidentid){

        $user = CRMEntity::getInstance('Users');
        $user->id = $user->getActiveAdminId();    
        $user->retrieve_entity_info($user->id, 'Users');        
       
        $responder_id = vtws_getWebserviceEntityId('Responder', $responderid);
        $incident_id = vtws_getWebserviceEntityId('HelpDesk', $incidentid);

        $responderlogs['responderlogs_tks_responder']       = $responder_id;
        $responderlogs['responderlogs_tks_incident']        = $incident_id ;
        $responderlogs['responderlogs_tks_status']          = "Accepted";
        $responderlogs['responderlogs_tks_remarks']         = "";        
        $responderlogs['source'] = "MOBILE";
        $responderlogs['assigned_user_id'] = 1;
        return vtws_create('Responderlogs', $responderlogs, $user);
    }

}

?>