<?php
/*+***********************************************************************************
 * The contents of this file are subject to the vtiger CRM Public License Version 1.0
 * ("License"); You may not use this file except in compliance with the License
 * The Original Code is:  vtiger CRM Open Source
 * The Initial Developer of the Original Code is vtiger.
 * Portions created by vtiger are Copyright (C) vtiger.
 * All Rights Reserved.
 *************************************************************************************/
include_once 'vtlib/Vtiger/Mailer.php';

class ResponderHandler extends VTEventHandler
{

	function handleEvent($eventName, $entityData)
	{
		global $log, $adb;

		if ($eventName == 'vtiger.entity.aftersave.final') {
			// 	$moduleName = $entityData->getModuleName();
			// 	if ($moduleName == 'HelpDesk') {
			// 		$ticketId = $entityData->getId();
			// 		$adb->pquery('UPDATE vtiger_ticketcf SET from_portal=0 WHERE ticketid=?', array($ticketId));
			// 	}
		}
	}
}

function Responder_SendMessage($entityData)
{
	global $adb;

	$wsId = $entityData->getId();
	$parts = explode('x', $wsId);
	$entityId = $parts[1];

	$result = $adb->pquery("SELECT * FROM vtiger_modcomments WHERE related_to = ? ORDER BY modcommentsid DESC LIMIT 1", array($entityId));
	$message = $adb->query_result($result, 0, 'commentcontent');

	$adb->pquery("INSERT _responder_messages(message,responder_id) VALUES(?,?)", array($message, $entityId));
}

function Responder_SendEmail($entityData)
{

	$email = $entityData->get('responder_tks_emailaddress');
	$body =
		'<table width="95%" border="0" align="center" cellpadding="0" cellspacing="0"
                style="max-width:670px;background:#fff; border-radius:3px; text-align:center;-webkit-box-shadow:0 6px 18px 0 rgba(0,0,0,.06);-moz-box-shadow:0 6px 18px 0 rgba(0,0,0,.06);box-shadow:0 6px 18px 0 rgba(0,0,0,.06);">
                <tr>
                    <td style="height:40px;">&nbsp;</td>
                </tr>
                <tr>
                    <td style="padding:0 35px;">
                        <h1 style="text-align:center;">BAYAN 911</h1>
                        <h2 style="color:#1e1e2d; font-weight:500; margin:0;font-size:32px;font-family:"Rubik",sans-serif;">Your account has been activated</h2>
                        <span
                            style="display:inline-block; vertical-align:middle; margin:29px 0 26px; border-bottom:1px solid #cecece; width:100px;"></span>
                        <p style="color:#455056; font-size:15px;line-height:24px; margin:0;">
                            Please open the Bayan911 app and login your credentials. 
                        </p>                       
                    </td>
                </tr>
                <tr>
                    <td style="height:40px;">&nbsp;</td>
                </tr>
                </table>';
	$mail = new Vtiger_Mailer();
	$mail->IsHTML();
	$mail->Body = $body;
	$mail->Subject = "Bayan911 - Registration Activated";
	$mail->AddAddress($email);
	$status = $mail->Send(true);
}
