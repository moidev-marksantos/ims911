<?php 

include_once 'modules/API/Mobile/API.php';

class LoginResponder{

    public function login($data){

        $email          = $data['data']['email'];
        $password       = $data['data']['password'];


        $responderdata = $this->check($email,$password);        
        if(!isset($responderdata)) {
            http_response_code(400);
            print_r(json_encode(array(
                "status"    => "Error",
                "result"    => "The email or password you entered is incorrect."
            )));
        }
        else{
            if($this->checkIfAlreadyLogin($responderdata['responderid'])){
                http_response_code(400);
                print_r(json_encode(array(
                    "status"    => "Error",
                    "result"    => "Your account is already login to other device."
                )));
            }
            else{
                if($responderdata['status'] != 'Active'){
                    http_response_code(400);    
                    print_r(json_encode(array(
                        "status"    => "Error",
                        "result"    => "Your account is pending verification. Please contact administrator for more details."
                    )));
                }
                else {
                    http_response_code(200);
                    print_r(json_encode(array(
                        "status"    => "Success",
                        "result"    => $responderdata,
                        "token"     => $this->token($responderdata['responderid'])
                    )));

                    //START: LOGS
                    $fp = fopen('api-logs.txt', 'a+');    
                    date_default_timezone_set('Asia/Manila');                
                    fwrite($fp, "\n" . date('m/d/Y h:i:s a', time()) . " - LOGIN: Responder Id - " . $responderdata['responderid'] . " " .$responderdata['firstname'] . " " . $responderdata['lastname']);  
                    fclose($fp); 
                    //END: LOGS
                }
            }
        }

    }

    public function logout($data){
        
        $token = $data['data']['token'];
		$check = $this->checkToken($token);
        if(!$check[0]){
            http_response_code(400);
            print_r(json_encode(array(
                "status"    => "Error",
                "result"    => "Invalid token!"
            )));
        }       
        else{
            
            global $adb;            
			$adb->pquery("UPDATE vtiger_responder SET token_date = NULL, token = NULL WHERE token  = ?", array($token));                    
            $adb->pquery("DELETE FROM _responder_location WHERE responder_id = ?", array($check[1]));                    
			http_response_code(200);
            print_r(json_encode(array(
                "status"    => "Success",
                "result"    => "Succesfully logout.",
            )));    
			
			//START: LOGS
            $fp = fopen('api-logs.txt', 'a+');    
            date_default_timezone_set('Asia/Manila');                
            fwrite($fp, "\n" . date('m/d/Y h:i:s a', time()) . " - LOGOUT: Responder Id - " . $check[1] . " ". $check[2]);  
            fclose($fp); 
            //END: LOGS			
        }
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


    private function check($email,$password){
        global $adb;
        $result = $adb->pquery("SELECT vtiger_responder.* , cf_961 as status , cf_959 as middlename
        FROM vtiger_responder 
        LEFT JOIN  vtiger_respondercf ON vtiger_responder.responderid = vtiger_respondercf.responderid  
		LEFT JOIN vtiger_crmentity ON vtiger_crmentity.crmid = vtiger_responder.responderid
        WHERE responder_tks_emailaddress = ? AND responder_tks_password = ? AND vtiger_crmentity.deleted != 1", array($email,$password));
        if($adb->num_rows($result) > 0){
            return array(
                "responderid"   => $adb->query_result($result,0,"responderid"),
                "firstname"     => $adb->query_result($result,0,"responder_tks_firstname"),
                "middlename"    => $adb->query_result($result,0,"middlename"),
                "lastname"      => $adb->query_result($result,0,"responder_tks_lastname"),
                "department"    => $adb->query_result($result,0,"responder_tks_respondertype"),
                "email"         => $adb->query_result($result,0,"responder_tks_emailaddress"),
                "email"         => $adb->query_result($result,0,"responder_tks_emailaddress"),
                "contactno"     => $adb->query_result($result,0,"responder_tks_contactno"),
                "status"        => $adb->query_result($result,0,"status")                
            );
        }
        return null;
    }

    private function checkIfAlreadyLogin($id){
        /*global $adb;
        $result  = $adb->pquery("SELECT * FROM vtiger_responder 
        WHERE responderid = ? AND token_date >= NOW() - INTERVAL 8 HOUR", array($id));        
        if($adb->num_rows($result) > 0){
            return true;
        }
		*/
        return false;
    }

    private function token($id){
        global $adb;
        $length = 30;
		$characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
		$charactersLength = strlen($characters);
		$randomString = '';
		for ($i = 0; $i < $length; $i++) {
			$randomString .= $characters[rand(0, $charactersLength - 1)];
		}
        $token = strtoupper($randomString);
        $adb->pquery("UPDATE vtiger_responder SET token_date = NOW() , token = ? WHERE responderid  = ?", array($token,$id));            
		return $token;
    }

}
