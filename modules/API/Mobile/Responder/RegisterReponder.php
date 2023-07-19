<?php 

include_once 'modules/API/Mobile/API.php';

class RegisterReponder{

    public function register($data){

        $firstname      = $data['data']['firstname'];
        $lastname       = $data['data']['lastname'];
        $middlename     = $data['data']['middlename'];
        $department     = $data['data']['department'];
        $email          = $data['data']['email'];
        $password       = $data['data']['password'];
        $mobileno       = $data['data']['mobileno'];

        //GET ADMIN USER 
        $user = CRMEntity::getInstance('Users');
        $user->id = $user->getActiveAdminId();
        $user->retrieve_entity_info($user->id, 'Users');

        //SET COLUMN DATA
        $responder['responder_tks_firstname']       = $firstname;
        $responder['responder_tks_lastname']        = $lastname;
        $responder['cf_959']                        = $middlename;
        $responder['responder_tks_respondertype']   = $department;
        $responder['responder_tks_emailaddress']    = $email;
        $responder['responder_tks_password']        = $password;
        $responder['responder_tks_contactno']       = $mobileno;
        $responder['cf_961']                        = "Pending";
        $responder['source'] = "MOBILE";
        $responder['assigned_user_id'] = 1;

        //CHECK EMAIL IF EXISTING
        if($this->checkEmail($email)){            
            http_response_code(400);
            print_r(json_encode(array(
                "status"    => "Error",
                "result"   => "The email is already exists. Please try a different email address to register."
            )));
        }
        else{
            //SAVE DATA
            $record = vtws_create('Responder', $responder, $user);
            
            //GET LATEST ID
            $id = explode("x",$record['id'])[1];
            
			global $adb;       
			$adb->pquery("UPDATE vtiger_modtracker_basic SET whodid = ? 
			WHERE module = 'Responder' AND status = 2 AND crmid = ? AND 
			id = (select max(id) from vtiger_modtracker_basic)
			", array('Responder',$id));
			

            //SEND EMAIL FUNCTION
            if($this->sendEmail($email,$id,$firstname,$middlename,$lastname,$mobileno, $department)){
                http_response_code(200);
                print_r(json_encode(array(
                    "status"    => "Success",
                    "result"   => "Successfully registered. Please wait for email confirmation."
                )));
				
			
                //START: LOGS
                $fp = fopen('api-logs.txt', 'a');    
                date_default_timezone_set('Asia/Manila');                
                fwrite($fp, "\n" . date('m/d/Y h:i:s a', time()) . " - REGISTRATION: Responder Id - " . $id . " " . $firstname . " " . $lastname);  
                fclose($fp);
                //END: LOGS

            }else{
                http_response_code(400);
                print_r(json_encode(array(
                    "status"    => "Error",
                    "result"   => "Message not delivered."
                )));
            }
        }
        
    }

    private function sendEmail($email,$id,$firstname,$middlename,$lastname,$mobileno, $department){
        global $site_URL;
        $name = $firstname .' '. $middlename .' '. $lastname;
        //SET THE VERICATION URL
        $verifyURL = "$site_URL/index.php?module=Responder&view=Edit&record=$id&app=MARKETING";

        $body =
            '<table width="75%" border="0" align="center" cellpadding="0" cellspacing="0" style="max-width:600px;background:#fff; border-radius:3px; text-align:center;-webkit-box-shadow:0 6px 18px 0 rgba(0,0,0,.06);-moz-box-shadow:0 6px 18px 0 rgba(0,0,0,.06);box-shadow:0 6px 18px 0 rgba(0,0,0,.06);">
                <tr>
                    <td style="height:40px;">&nbsp;</td>
                </tr>
                <tr>
                    <td style="padding:0 35px;">
                        <h3 style="text-align:center;">BAYAN 911</h3>
                        <h2 style="color:#1e1e2d; font-weight:500; margin:0;font-size:32px;font-family:"Rubik",sans-serif;">New Responder Registration Verification. </h2>
                        <span style="display:inline-block; vertical-align:middle; margin:20px 0 22px; border-bottom:1px solid #cecece; width:100px;"></span>
                        <p style="color:#455056; font-size:15px;line-height:24px; margin:0;">Responder Type :'. $department.'</p>
                        <p style="color:#455056; font-size:15px;line-height:24px; margin:0;">Name :'. $name.'</p>
                        <p style="color:#455056; font-size:15px;line-height:24px; margin:0;">Contact No :'. $mobileno.'</p>
                        <p style="color:#455056; font-size:15px;line-height:24px; margin:0;">Email :'. $email.'</p>
                        <p style="color:#455056; font-size:11px;line-height:24px; margin:0;">
                            To verify new account, click on the link
                        </p>
                        <a href="' . $verifyURL . '" style="background:#20e277;text-decoration:none !important; font-weight:500; margin-top:35px; color:#fff;text-transform:uppercase; font-size:14px;padding:10px 24px;display:inline-block;border-radius:50px;">View Responder</a>
                    </td>
                </tr>
                <tr>
                    <td style="height:40px;">&nbsp;</td>
                </tr>
            </table>';
        $subject = 'BAYAN911 - New Responder Registration Verification';
        $mail = new Vtiger_Mailer();
        $mail->IsHTML();
        $mail->Body = $body;
        $mail->Subject = $subject;
        //TODO: GET EMAIL OF THE WEB USER
        $mail->AddAddress("mark.santos@microbizone.com");
        $status = $mail->Send(true);
            
        if ($status === 1 || $status === true) {
            return true;
        } 
        return false;

    }   
    
    private function checkEmail($email){
        global $adb;
        $result = $adb->pquery("SELECT responder_tks_emailaddress FROM vtiger_responder WHERE responder_tks_emailaddress = ?", array($email));
        if($adb->num_rows($result) > 0){
            return true;
        }
        return false;
    }

}
