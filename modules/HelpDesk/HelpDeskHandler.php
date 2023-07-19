<?php
/*+***********************************************************************************
 * The contents of this file are subject to the vtiger CRM Public License Version 1.0
 * ("License"); You may not use this file except in compliance with the License
 * The Original Code is:  vtiger CRM Open Source
 * The Initial Developer of the Original Code is vtiger.
 * Portions created by vtiger are Copyright (C) vtiger.
 * All Rights Reserved.
 *************************************************************************************/

require_once 'modules/Emails/mail.php';

class HelpDeskHandler extends VTEventHandler {

	function handleEvent($eventName, $entityData) {
		global $log, $adb;

		if($eventName == 'vtiger.entity.aftersave.final') {
			$moduleName = $entityData->getModuleName();
			if ($moduleName == 'HelpDesk') {
				$ticketId = $entityData->getId();
				$adb->pquery('UPDATE vtiger_ticketcf SET from_portal=0 WHERE ticketid=?', array($ticketId));
			}
		}
	}
}

function HelpDesk_nofifyOnPortalTicketCreation($entityData) {
	global $HELPDESK_SUPPORT_NAME,$HELPDESK_SUPPORT_EMAIL_ID;
	$adb = PearDatabase::getInstance();
	$moduleName = $entityData->getModuleName();
	$wsId = $entityData->getId();
	$parts = explode('x', $wsId);
	$entityId = $parts[1];

	$ownerIdInfo = getRecordOwnerId($entityId);
	if(!empty($ownerIdInfo['Users'])) {
		$ownerId = $ownerIdInfo['Users'];
		$to_email = getUserEmailId('id',$ownerId);
	}
	if(!empty($ownerIdInfo['Groups'])) {
		$ownerId = $ownerIdInfo['Groups'];
		$to_email = implode(',', getDefaultAssigneeEmailIds($ownerId));
	}
	$wsParentId = $entityData->get('contact_id');
	$parentIdParts = explode('x', $wsParentId);
	$parentId = $parentIdParts[1];

	$subject = '[From Portal] ' .$entityData->get('ticket_no'). " [ Ticket Id : $entityId ] " .$entityData->get('ticket_title');
	$contents = ' Ticket No : '.$entityData->get('ticket_no'). '<br> Ticket ID : '.$entityId.'<br> Ticket Title : '.
							$entityData->get('ticket_title').'<br><br>'.$entityData->get('description');

	//get the contact email id who creates the ticket from portal and use this email as from email id in email
	$result = $adb->pquery("SELECT email, concat (firstname,' ',lastname) as name FROM vtiger_contactdetails WHERE contactid=?", array($parentId));
	$contact_email = $adb->query_result($result,0,'email');
	$name = $adb->query_result($result, 0, 'name');
	$from_email = $contact_email;

	//send mail to assigned to user
	$mail_status = send_mail('HelpDesk',$to_email,$name,$HELPDESK_SUPPORT_EMAIL_ID,$subject,$contents);

	//send mail to the customer(contact who creates the ticket from portal)
	$mail_status = send_mail('Contacts',$contact_email,$HELPDESK_SUPPORT_NAME,$HELPDESK_SUPPORT_EMAIL_ID,$subject,$contents);
}

function HelpDesk_notifyOnPortalTicketComment($entityData) {
	$adb = PearDatabase::getInstance();
	$moduleName = $entityData->getModuleName();
	$wsId = $entityData->getId();
	$parts = explode('x', $wsId);
	$entityId = $parts[1];

	$ownerIdInfo = getRecordOwnerId($entityId);

	if(!empty($ownerIdInfo['Users'])) {
		$ownerId = $ownerIdInfo['Users'];
		$ownerName = getOwnerName($ownerId);
		$to_email = getUserEmailId('id',$ownerId);
	}
	if(!empty($ownerIdInfo['Groups'])) {
		$ownerId = $ownerIdInfo['Groups'];
		$groupInfo = getGroupName($ownerId);
		$ownerName = $groupInfo[0];
		$to_email = implode(',', getDefaultAssigneeEmailIds($ownerId));
	}
	
	$wsParentId = $entityData->get('contact_id');
	$parentIdParts = explode('x', $wsParentId);
	$parentId = $parentIdParts[1];

	$entityDelta = new VTEntityDelta();
	$oldComments = $entityDelta->getOldValue($entityData->getModuleName(), $entityId, 'comments');
	$newComments = $entityDelta->getCurrentValue($entityData->getModuleName(), $entityId, 'comments');
	$commentDiff = str_replace($oldComments, '', $newComments);
	$latestComment = strip_tags($commentDiff);

	//send mail to the assigned to user when customer add comment
	$subject = getTranslatedString('LBL_RESPONSE_TO_TICKET_NUMBER', $moduleName). ' : ' .$entityData->get('ticket_no'). ' ' .getTranslatedString('LBL_CUSTOMER_PORTAL', $moduleName);
	$contents = getTranslatedString('Dear', $moduleName)." ".$ownerName.","."<br><br>"
						.getTranslatedString('LBL_CUSTOMER_COMMENTS', $moduleName)."<br><br>
						<b>".$latestComment."</b><br><br>"
						.getTranslatedString('LBL_RESPOND', $moduleName)."<br><br>"
						.getTranslatedString('LBL_REGARDS', $moduleName)."<br>"
						.getTranslatedString('LBL_SUPPORT_ADMIN', $moduleName);

	//get the contact email id who creates the ticket from portal and use this email as from email id in email
	$result = $adb->pquery("SELECT lastname, firstname, email FROM vtiger_contactdetails WHERE contactid=?", array($parentId));
	$customername = $adb->query_result($result,0,'firstname').' '.$adb->query_result($result,0,'lastname');
	$customername = decode_html($customername);//Fix to display the original UTF-8 characters in sendername instead of ascii characters
	$from_email = $adb->query_result($result,0,'email');

	send_mail('HelpDesk',$to_email,'',$from_email,$subject,$contents);
}

function HelpDesk_notifyParentOnTicketChange($entityData) {
	global $HELPDESK_SUPPORT_NAME,$HELPDESK_SUPPORT_EMAIL_ID;
	$adb = PearDatabase::getInstance();
	$moduleName = $entityData->getModuleName();
	$wsId = $entityData->getId();
	$parts = explode('x', $wsId);
	$entityId = $parts[1];

	$isNew = $entityData->isNew();

	if(!$isNew) {
		$reply = 'Re : ';
	} else {
		$reply = '';
	}

	$subject = $entityData->get('ticket_no') . " [ Ticket Id : $entityId ] " . $reply . $entityData->get('ticket_title');
	$emailoptout = 0;
	$wsContactId = $entityData->get('contact_id');
	$contactId = explode('x', $wsContactId);
	$wsAccountId = $entityData->get('parent_id');
	$accountId = explode('x', $wsAccountId);
	//To get the emailoptout vtiger_field value and then decide whether send mail about the tickets or not
	if(!empty($contactId[0])) {
		$result = $adb->pquery('SELECT email, emailoptout, lastname, firstname FROM vtiger_contactdetails WHERE
						contactid=?', array($contactId[1]));
		$emailoptout = $adb->query_result($result,0,'emailoptout');
		$parent_email = $contact_mailid = $adb->query_result($result,0,'email');
		$parentname = $adb->query_result($result,0,'firstname').' '.$adb->query_result($result,0,'firstname');

		//Get the status of the vtiger_portal user. if the customer is active then send the vtiger_portal link in the mail
		if($parent_email != '') {
			$sql = "SELECT * FROM vtiger_portalinfo WHERE user_name=?";
			$isPortalUser = $adb->query_result($adb->pquery($sql, array($contact_mailid)),0,'isactive');
		}
	} elseif(!empty($accountId[0])) {
		$result = $adb->pquery("SELECT accountname, emailoptout, email1 FROM vtiger_account WHERE accountid=?",
									array($accountId[1]));
		$emailoptout = $adb->query_result($result,0,'emailoptout');
		$parent_email = $adb->query_result($result,0,'email1');
		$parentname = $adb->query_result($result,0,'accountname');
	}
	//added condition to check the emailoptout(this is for contacts and vtiger_accounts.)
	if($emailoptout == 0) {
		if($isPortalUser == 1) {
			$email_body = HelpDesk::getTicketEmailContents($entityData);
		} else {
			$email_body = HelpDesk::getTicketEmailContents($entityData);
		}

		if($isNew) {
			send_mail('HelpDesk',$parent_email,$HELPDESK_SUPPORT_NAME,$HELPDESK_SUPPORT_EMAIL_ID,$subject,$email_body);
		} else {
			$entityDelta = new VTEntityDelta();
			$statusHasChanged = $entityDelta->hasChanged($entityData->getModuleName(), $entityId, 'ticketstatus');
			$solutionHasChanged = $entityDelta->hasChanged($entityData->getModuleName(), $entityId, 'solution');
			$descriptionHasChanged = $entityDelta->hasChanged($entityData->getModuleName(), $entityId, 'description');

			if(($statusHasChanged && $entityData->get('ticketstatus') == "Closed") || $solutionHasChanged || $descriptionHasChanged) {
				send_mail('HelpDesk',$parent_email,$HELPDESK_SUPPORT_NAME,$HELPDESK_SUPPORT_EMAIL_ID,$subject,$email_body);
			}
		}
	}
}

function HelpDesk_notifyOwnerOnTicketChange($entityData) {
	global $HELPDESK_SUPPORT_NAME,$HELPDESK_SUPPORT_EMAIL_ID;

	$moduleName = $entityData->getModuleName();
	$wsId = $entityData->getId();
	$parts = explode('x', $wsId);
	$entityId = $parts[1];

	$isNew = $entityData->isNew();

	if(!$isNew) {
		$reply = 'Re : ';
	} else {
		$reply = '';
	}

	$subject = getTranslatedString('LBL_TICKET_NUMBER', $moduleName). ' : ' .$entityData->get('ticket_no'). ' ' .$reply.$entityData->get('ticket_title');

	$email_body = HelpDesk::getTicketEmailContents($entityData, true);
	if(PerformancePrefs::getBoolean('NOTIFY_OWNER_EMAILS', true) === true){
		//send mail to the assigned to user and the parent to whom this ticket is assigned
		require_once('modules/Emails/mail.php');
		$wsAssignedUserId = $entityData->get('assigned_user_id');
		$userIdParts = explode('x', $wsAssignedUserId);
		$ownerId = $userIdParts[1];
		$ownerType = vtws_getOwnerType($ownerId);

		if($ownerType == 'Users') {
			$to_email = getUserEmailId('id',$ownerId);
		}
		if($ownerType == 'Groups') {
			$to_email = implode(',', getDefaultAssigneeEmailIds($ownerId));
		}
		if($to_email != '') {
			if($isNew) {
				$mail_status = send_mail('HelpDesk',$to_email,$HELPDESK_SUPPORT_NAME,$HELPDESK_SUPPORT_EMAIL_ID,$subject,$email_body);
			} else {
				$entityDelta = new VTEntityDelta();
				$statusHasChanged = $entityDelta->hasChanged($entityData->getModuleName(), $entityId, 'ticketstatus');
				$solutionHasChanged = $entityDelta->hasChanged($entityData->getModuleName(), $entityId, 'solution');
				$ownerHasChanged = $entityDelta->hasChanged($entityData->getModuleName(), $entityId, 'assigned_user_id');
				$descriptionHasChanged = $entityDelta->hasChanged($entityData->getModuleName(), $entityId, 'description');
				if(($statusHasChanged && $entityData->get('ticketstatus') == "Closed") || $solutionHasChanged || $ownerHasChanged || $descriptionHasChanged) {
					$mail_status = send_mail('HelpDesk',$to_email,$HELPDESK_SUPPORT_NAME,$HELPDESK_SUPPORT_EMAIL_ID,$subject,$email_body);
				}
			}
			$mail_status_str = $to_email."=".$mail_status."&&&";

		} else {
			$mail_status_str = "'".$to_email."'=0&&&";
		}

		if ($mail_status != '') {
			$mail_error_status = getMailErrorString($mail_status_str);
		}
	}
}

function HelpDesk_updateDuration($entityData){
	
	global $adb;
	$created_time = $entityData->get('createdtime');
	$completed_time= $entityData->get('modifiedtime');   

	$d1 = new DateTime($created_time);
	$d2 = new DateTime($completed_time);
	$interval = $d2->diff($d1);

	$wsId = $entityData->getId();
	$parts = explode('x', $wsId);
	$entityId = $parts[1];
	$adb->pquery("UPDATE vtiger_ticketcf SET cf_852 = ? WHERE ticketid = ?", array($interval->format('%d day/s, %H:%I:%S'),$entityId));
	
}

function HelpDesk_updateTitle($entityData){
	global $adb;

	//Ticket No + Priority + Category + Place
	$ticket_no = $entityData->get('ticket_no');
	$priority  = $entityData->get('ticketpriorities') ?: '';   
	$category  = $entityData->get('ticketcategories') ?: '';   
	$cf_860    = $entityData->get('cf_860') ?: '';  //Street Name
	//$cf_858    = $entityData->get('cf_858') ?: '';  //Barangay
	//$cf_856    = $entityData->get('cf_856') ?: '';  //Municipality

	$wsId = $entityData->getId();
	$parts = explode('x', $wsId);
	$entityId = $parts[1];
	$title = $ticket_no . '~[' . $priority . ']-' . $category . '-' . $cf_860;
	$adb->pquery("UPDATE vtiger_troubletickets SET title = ? WHERE ticketid = ?", array($title,$entityId));
}

function HelpDesk_updateNotification($entityData){
	global $adb;
	$dispatch_to = $entityData->get('cf_937');
	$adb->pquery("UPDATE _notification SET hasnotification = 1 , dispatch_to = ? WHERE 1", array($dispatch_to));	
}

function HelpDesk_SLAUpdateStatus($entityData){
   
	global $adb;
    
    date_default_timezone_set('Asia/Manila');
    
    $timestamp = strtotime($entityData->get('createdtime'));
    $slahrs = (int)$entityData->get('cf_941'); //SLA Hrs

    $cDate = strtotime(date('Y-m-d H:i:s'));
    $oldDate = $timestamp + 60*60*$slahrs; 

    $wsId = $entityData->getId();
	$parts = explode('x', $wsId);
	$entityId = $parts[1];
	
    if ($oldDate > $cDate) {
        $adb->pquery("UPDATE vtiger_ticketcf SET cf_939 = ? WHERE ticketid = ?", array("Overdue",$entityId));
    }
}
function HelpDesk_sendvibermessage($entityData){
    
    global $adb ,$current_user , $viber_auth_token , $viber_sender_name , $viber_sender_avatar;
    
    $contactidwithmodule = $entityData->get('contact_id');
	$parts = explode('x', $contactidwithmodule);
	$contactid = $parts[1];
	
    $contactdetails = $adb->pquery("SELECT cf_891 FROM vtiger_contactscf WHERE contactid = ?", array($contactid));
    $viberid = $adb->query_result($contactdetails,0,"cf_891");
    
    $data = array(
        "auth_token" => $viber_auth_token,
        "receiver" => $viberid,
        "min_api_version" => 1,
        "sender" => array(
                        "name" => $viber_sender_name,
                        "avatar" => $viber_sender_avatar
                    ),
        "tracking_data" => "tracking data",
        "type" => "text",
        "text" => $entityData->get('solution')
        );
    $data_string = json_encode($data);        

    $ch = curl_init('https://chatapi.viber.com/pa/send_message');                                                                      
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");                                                                     
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);                                                                  
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);                                                                      
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(                                                                          
        'Content-Type: application/json',                                                                                
        'Content-Length: ' . strlen($data_string))                                                                       
    );                                                                                                                   
                                                                                                                         
    $result = curl_exec($ch);
    
    $wsId = $entityData->getId();
	$parts = explode('x', $wsId);
	$entityId = $parts[1];
	
	$user = $adb->pquery("SELECT CONCAT(first_name,' ',last_name) as name FROM vtiger_users WHERE id = ?", array($current_user->id));
    $user_name = $adb->query_result($user,0,"name");
    
    date_default_timezone_set('Asia/Manila');
    $date = date('m-d-y h:i');
    $description = $entityData->get('description');
    $description .= "\n\n";
    $description .= "--------------------------------";
    $description .= "\n\n";
    $description .= $user_name; 
    $description .= "\n";
    $description .= $date;
    $description .= "\n";
    $description .= $entityData->get('solution');
    $adb->pquery("UPDATE vtiger_crmentity SET description = ? WHERE crmid = ?", array($description,$entityId));
    $adb->pquery("UPDATE vtiger_troubletickets SET solution = '' WHERE ticketid = ?", array($entityId));
}

function HelpDesk_sendReplyviaFacebook($entityData){
    global $adb ,$current_user, $facebook_token , $facebook_api_link;
    
    $contactidwithmodule = $entityData->get('contact_id');
	$parts = explode('x', $contactidwithmodule);
	$contactid = $parts[1];
	
    $contactdetails = $adb->pquery("SELECT cf_957 FROM vtiger_contactscf WHERE contactid = ?", array($contactid));
    $facebookid = $adb->query_result($contactdetails,0,"cf_957");
    
    $data = array(
        "messaging_type" => "RESPONSE",
        "recipient" => array(
            "id" => $facebookid
        ),
        "message" => array(
            "text" => $entityData->get('solution')
        )
    );
    $data_string = json_encode($data);        

    $ch = curl_init($facebook_api_link.$facebook_token);                                                                      
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");                                                                     
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);                                                                  
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);                                                                      
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(                                                                          
        'Content-Type: application/json',                                                                                
        'Content-Length: ' . strlen($data_string))                                                                       
    );                                                                                                                   
                                                                                                                        
    $result = curl_exec($ch);
    
    $wsId = $entityData->getId();
	$parts = explode('x', $wsId);
	$entityId = $parts[1];
	
	$user = $adb->pquery("SELECT CONCAT(first_name,' ',last_name) as name FROM vtiger_users WHERE id = ?", array($current_user->id));
    $user_name = $adb->query_result($user,0,"name");
    
    date_default_timezone_set('Asia/Manila');
    $date = date('m-d-y h:i');
    $description = $entityData->get('description');
    $description .= "\n\n";
    $description .= "--------------------------------";
    $description .= "\n\n";
    $description .= $user_name;
    $description .= "\n";
    $description .= $date;
    $description .= "\n";
    $description .= $entityData->get('solution');
    $adb->pquery("UPDATE vtiger_crmentity SET description = ? WHERE crmid = ?", array($description,$entityId));
    $adb->pquery("UPDATE vtiger_troubletickets SET solution = '' WHERE ticketid = ?", array($entityId));
}

function HelpDesk_createContact($entityData){
	
	global $adb;
	
	$wsId = $entityData->getId();
	$parts = explode('x', $wsId);
	$entityId = $parts[1];
	$callertype = $entityData->get('cf_870');
	$gender 	= $entityData->get('cf_997');
	
	$contacts_result = $adb->pquery("SELECT * FROM vtiger_contactdetails WHERE firstname = ? AND lastname = ?", 
	array($entityData->get('cf_866'), $entityData->get('cf_868')));
	$contactid = $adb->query_result($contacts_result, 0, "contactid");

	$adb->pquery("UPDATE vtiger_troubletickets SET contact_id = ? WHERE ticketid = ?", array($contactid,$entityId));
	$adb->pquery("UPDATE vtiger_contactscf SET cf_993 = ? , cf_999 = ? WHERE contactid = ?", array($callertype, $gender ,$contactid));
}


?>
