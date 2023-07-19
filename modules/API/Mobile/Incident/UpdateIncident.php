<?php

include_once 'modules/API/Mobile/API.php';

class UpdateIncident{

    public function update($data){

        $token              = $data['data']['token']; 
        $remarks            = $data['data']['remarks'];
        $status             = $data['data']['status'];
        $incidentid         = $data['data']['incidentid'];

        if(!$this->checkToken($token)[0]){
            http_response_code(400);
            print_r(json_encode(array(
                "status"    => "Error",
                "result"    => "Invalid token. Please try to login again!"
            )));
        }
        else{                    
            $result = $this->insertresponderlogs($this->checkToken($token)[1], $incidentid, $remarks, $status, $this->checkToken($token)[2]);    

            if($this->checkStatus($incidentid)[1] != "Completed"){
                $this->updatestatus($incidentid,$status,$this->checkToken($token)[2]);
            }

            http_response_code(200);
            print_r(json_encode(array(
                "status"    => "Success",
                "result"    => "Successfully change status to " . $this->checkStatus($incidentid)[1]
            )));
            
            //START: LOGS
            $fp = fopen('api-logs.txt', 'a+');    
            date_default_timezone_set('Asia/Manila');                
            fwrite($fp, "\n" . date('m/d/Y h:i:s a', time()) . " - UPDATE INCIDENT: " . "Incident Id - " . $incidentid ." - ". $status . " by " . $this->checkToken($token)[2]);  
            fclose($fp); 
            //END: LOGS
        }

    }

    private function updatestatus($incidentid,$status,$name)
    {

        global $adb;
        $incident_id = vtws_getWebserviceEntityId('HelpDesk', $incidentid);
        $user = CRMEntity::getInstance('Users');    
        $user->retrieve_entity_info(1, 'Users');        
        $data = array(
            'ticketstatus' => $status,
            'id' => $incident_id
        );
        $incident = vtws_revise($data, $user);
        
        $adb->pquery("UPDATE vtiger_modtracker_basic SET whodid = ? 
        WHERE module = 'HelpDesk' AND status = 0 AND crmid = ? AND 
        id = (select max(id) from vtiger_modtracker_basic)
        ", array('Responder: ' . $name,$incidentid));

        return array(
            "status" => $incident['ticketstatus'] 
        );
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

    private function insertresponderlogs($responderid, $incidentid, $remarks, $status, $name)
    {
		global $adb;
		
		$result = $adb->pquery("SELECT solution FROM vtiger_troubletickets WHERE ticketid = ? ", array($incidentid));
		$solution = $adb->query_result($result,0,"solution");
		
		$format  = 'Responder Name: ' . $name . PHP_EOL;
		$format .= 'Date & Time: ' . date('m/d/Y H:i ', time()) . PHP_EOL;
		$format .= 'Status: ' . $status . PHP_EOL;
		$format .= 'Remarks: ' . $remarks . PHP_EOL;
		$format .= '------------------------------------------' . PHP_EOL;
		$format .= $solution;		
		$adb->pquery("UPDATE vtiger_troubletickets SET solution = ? WHERE ticketid = ? ", array($format,$incidentid));
		
        $user = CRMEntity::getInstance('Users'); 
        $user->id = $user->getActiveAdminId();   
        $user->retrieve_entity_info($user->id, 'Users');        
       
        $responder_id = vtws_getWebserviceEntityId('Responder', $responderid);
        $incident_id  = vtws_getWebserviceEntityId('HelpDesk',  $incidentid);

        $responderlogs['responderlogs_tks_responder']       = $responder_id;
        $responderlogs['responderlogs_tks_incident']        = $incident_id;
        $responderlogs['responderlogs_tks_status']          = $status;
        $responderlogs['responderlogs_tks_remarks']         = $remarks;        
        $responderlogs['source'] = "MOBILE";
        $responderlogs['assigned_user_id'] = 1;
        $record = vtws_create('Responderlogs', $responderlogs, $user);

        return $record;
    }

}

?>