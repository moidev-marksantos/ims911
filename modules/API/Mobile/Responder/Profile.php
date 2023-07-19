<?php

include_once 'modules/API/Mobile/API.php';

class Profile{

    public function update($data)
    {
        $firstname      = $data['data']['firstname'];
        $lastname       = $data['data']['lastname'];
        $middlename     = $data['data']['middlename'];
        $department     = $data['data']['department'];
        $email          = $data['data']['email'];       
        $mobileno       = $data['data']['mobileno'];
        $token          = $data['data']['token'];

        $password       = $data['data']['password'];

        //CHECK TOKEN IF EXIST
        if(!$this->checkToken($token)[0]){
            http_response_code(400);
            print_r(json_encode(array(
                "status"    => "Error",
                "result"    => "Invalid token. Please try to login again!"
            )));
        }
        else{
            //TODO: CHECK IF EMAIL IS EXISTING
            if($this->checkEmail($email, $this->checkToken($token)[1])){            
                http_response_code(400);
                print_r(json_encode(array(
                    "status"    => "Error",
                    "result"   => "The email is already exists. Please try a different email address."
                )));
            }
            else{
                $responder_id = vtws_getWebserviceEntityId('Responder', $this->checkToken($token)[1]);

                $user = CRMEntity::getInstance('Users');    
                $user->id = $user->getActiveAdminId();  
                $user->retrieve_entity_info($user->id, 'Users');

                $data = array(
                    'responder_tks_firstname'       => $firstname,
                    'responder_tks_lastname'        => $lastname,
                    'cf_959'                        => $middlename,
                    'responder_tks_respondertype'   => $department,
                    'responder_tks_emailaddress'    => $email,
                    'responder_tks_contactno'       => $mobileno,
                    'id' => $responder_id
                );
                $responder = vtws_revise($data, $user);

                global $adb;

                $adb->pquery("UPDATE vtiger_modtracker_basic SET whodid = ? 
                WHERE module = 'Responder' AND status = 0 AND crmid = ? AND 
                id = (select max(id) from vtiger_modtracker_basic)
                ", array('Responder',$this->checkToken($token)[1]));

                if($password != ''){
                    $data = array(
                        'responder_tks_password'   => $password,                    
                        'id' => $responder_id
                    );
                    $responder = vtws_revise($data, $user);
                    $adb->pquery("UPDATE vtiger_modtracker_basic SET whodid = ? 
                    WHERE module = 'Responder' AND status = 0 AND crmid = ? AND 
                    id = (select max(id) from vtiger_modtracker_basic)
                    ", array('Responder',$this->checkToken($token)[1]));
                }
            
                print_r(json_encode(array(
                    "status"    => "Success",
                    "result"    => $responder
                )));

                //START: LOGS
                $fp = fopen('api-logs.txt', 'w+');    
                date_default_timezone_set('Asia/Manila');                
                fwrite($fp, "\n" . date('m/d/Y h:i:s a', time()) . " - PROFILE UPDATE: " . $this->checkToken($token)[1] . " " . $firstname . " " . $lastname);  
                fclose($fp);
                //END: LOGS
            
            }
        }
    }

    public function location($data)
    {
        $latitude           = $data['data']['latitude'];
        $longitude          = $data['data']['longitude'];
        $responder_id       = $data['data']['responder_id'];
        $token              = $data['data']['token'];

        if(!$this->checkToken($token)[0]){
            http_response_code(400);
            print_r(json_encode(array(
                "status"    => "Error",
                "result"    => "Invalid token. Please try to login again!"
            )));
        }
        else{
            global $adb;
            $adb->pquery("DELETE FROM _responder_location WHERE responder_id = ?", array($responder_id));
            $adb->pquery("INSERT INTO _responder_location(responder_id, longitude, latitude) VALUES (?,?,?)", array($responder_id,$longitude,$latitude));
            http_response_code(200);
            print_r(json_encode(array(
                "status"    => "Success",
                "result"    => "Location successfully save."                
            )));
        }

    }

    public function ondutystatus($data)
    {
        $ondutystatus       = $data['data']['ondutystatus'];
        $responder_id       = $data['data']['responder_id'];
        $token              = $data['data']['token'];

        if(!$this->checkToken($token)[0]){
            http_response_code(400);
            print_r(json_encode(array(
                "status"    => "Error",
                "result"    => "Invalid token. Please try to login again!"
            )));
        }
        else{

           
        }

    }

    private function checkToken($token)
    {
        global $adb;
        $result = $adb->pquery("SELECT responderid , token FROM vtiger_responder WHERE token = ?", array($token));
        if($adb->num_rows($result) > 0){
            return array(
                true, $adb->query_result($result,0,"responderid")
            );
        }
        return array(
            false, 0
        );;
    }

    private function checkEmail($email, $responderid){
        global $adb;
        $result = $adb->pquery("SELECT responder_tks_emailaddress FROM vtiger_responder WHERE responder_tks_emailaddress = ? AND responderid != ?", array($email, $responderid));
        if($adb->num_rows($result) > 0){
            return true;
        }
        return false;
    }

}

?>