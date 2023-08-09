<?php

include_once 'modules/API/Mobile/API.php';

class Password
{

    public function forgotpassword($email)
    {
        global $adb , $site_URL;
        $result = $adb->pquery("SELECT vtiger_responder.* , vtiger_respondercf.* FROM vtiger_responder LEFT JOIN vtiger_respondercf ON 
        vtiger_responder.responderid = vtiger_respondercf.responderid
        WHERE responder_tks_emailaddress = ?", array($email));

        if ($adb->num_rows($result) > 0) {
            if ($adb->query_result($result, 0, "cf_961") == 'Active') {
                
                // SEND EMAIL
                $body =
                    '<table width="95%" border="0" align="center" cellpadding="0" cellspacing="0"
                style="max-width:670px;background:#fff; border-radius:3px; text-align:center;-webkit-box-shadow:0 6px 18px 0 rgba(0,0,0,.06);-moz-box-shadow:0 6px 18px 0 rgba(0,0,0,.06);box-shadow:0 6px 18px 0 rgba(0,0,0,.06);">
                <tr>
                    <td style="height:40px;">&nbsp;</td>
                </tr>
                <tr>
                    <td style="padding:0 35px;">
                        <h1 style="text-align:center;">BAYAN 911</h1>
                        <h2 style="color:#1e1e2d; font-weight:500; margin:0;font-size:32px;font-family:"Rubik",sans-serif;">You have
                            requested to reset your password</h2>
                        <span
                            style="display:inline-block; vertical-align:middle; margin:29px 0 26px; border-bottom:1px solid #cecece; width:100px;"></span>
                        <p style="color:#455056; font-size:15px;line-height:24px; margin:0;">
                            We cannot simply send you your old password. A unique link to reset your
                            password has been generated for you. To reset your password, click the
                            following link and follow the instructions.
                        </p>
                        <a href="'.$site_URL.'resetpassword.php?responder_id='.$adb->query_result($result,0,"responderid").'" style="background:#20e277;text-decoration:none !important; font-weight:500; margin-top:35px; color:#fff;text-transform:uppercase; font-size:14px;padding:10px 24px;display:inline-block;border-radius:50px;">Reset Password</a>
                    </td>
                </tr>
                <tr>
                    <td style="height:40px;">&nbsp;</td>
                </tr>
                </table>';
                //

                $mail = new Vtiger_Mailer();
                $mail->IsHTML();
                $mail->Body = $body;
                $mail->Subject = "Bayan911 - Reset Password";
                $mail->AddAddress($email);
                $status = $mail->Send(true);

                if ($status === 1 || $status === true) {
                    http_response_code(200);
                    print_r(json_encode(array(
                        "status"    => "Success",
                        "result"    => "Email password reset sent. Please check your email."
                    )));
                }
                
            } else {
                http_response_code(400);
                print_r(json_encode(array(
                    "status"    => "Error",
                    "result"    => "Your account is pending verification. Please contact administrator for more details."
                )));
            }
        } else {

            http_response_code(400);
            print_r(json_encode(array(
                "status"    => "Error",
                "result"    => "Email record not found."
            )));
        }
    }

    public function updatepassword($_password,$_responderid)
    {
        $password           = $_password;
        $responderid        = $_responderid;
        
        $user = CRMEntity::getInstance('Users');
        $user->id = $user->getActiveAdminId();
        $user->retrieve_entity_info($user->id, 'Users');
        $record_id = vtws_getWebserviceEntityId('Responder', $responderid);

        $data = array(
            'responder_tks_password' => $password,
            'assigned_user_id' => 1,
            'id' => $record_id
        );
        $responder = vtws_revise($data, $user);

        http_response_code(200);
        print_r(json_encode(array(
            "status"    => "Success",
            "result"    => "Your password has been successfully updated."
        )));

        global $adb;
        $adb->pquery("UPDATE vtiger_modtracker_basic SET whodid = ? 
        WHERE module = 'Responder' AND status = 0 AND crmid = ? AND 
        id = (select max(id) from vtiger_modtracker_basic)
        ", array('Responder',$_responderid));

        //START: LOGS
        $fp = fopen('api-logs.txt', 'a');
        date_default_timezone_set('Asia/Manila');
        fwrite($fp, "\n" . date('m/d/Y h:i:s a', time()) . " - PASSWORD UPDATE: Responder Id - " . $responderid);
        fclose($fp);
        //END: LOGS

    }
}
