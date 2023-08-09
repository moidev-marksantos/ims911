<?php 
$sender_id    = $_POST['sender_id'];
$message      = $_POST['message'];
$source       = $_POST['source'];

$name         = $_POST['sender_name'];
$firstname    = $_POST['first_name'];
$lastname     = $_POST['last_name'];

//if(isset($name)){
    
chdir('../../');

include_once 'config.inc.php';
include_once 'includes/main/WebUI.php';
include_once 'include/Webservices/Create.php';
require_once 'includes/main/WebUI.php';
include_once 'include/Webservices/Revise.php';

global $adb, $facebook_token;

date_default_timezone_set('Asia/Manila');
$date = date('m-d-y h:i');

$users = $adb->pquery("SELECT id FROM vtiger_users ORDER BY rand() LIMIT 1", array());
$user = CRMEntity::getInstance('Users');
$user->id = $user->getActiveAdminId(); //$adb->query_result($users,0,"id"); //$user->getActiveAdminId();
$user->retrieve_entity_info($user->id, 'Users');

if($source == 'Facebook'){
    $contacts = $adb->pquery("SELECT vtiger_contactdetails.contactid , vtiger_contactdetails.firstname , vtiger_contactdetails.lastname FROM vtiger_contactscf LEFT JOIN vtiger_contactdetails ON vtiger_contactdetails.contactid = vtiger_contactscf.contactid LEFT JOIN vtiger_crmentity ON vtiger_crmentity.crmid = vtiger_contactdetails.contactid WHERE deleted != 1 AND cf_897 = ?", array($sender_id));
}
if($source == 'Viber'){
    $contacts = $adb->pquery("SELECT vtiger_contactdetails.contactid , vtiger_contactdetails.firstname , vtiger_contactdetails.lastname FROM vtiger_contactscf LEFT JOIN vtiger_contactdetails ON vtiger_contactdetails.contactid = vtiger_contactscf.contactid LEFT JOIN vtiger_crmentity ON vtiger_crmentity.crmid = vtiger_contactdetails.contactid WHERE deleted != 1 AND cf_895 = ?", array($sender_id));
}

$contactname = $adb->query_result($contacts,0,"firstname") . ' ' . $adb->query_result($contacts,0,"lastname");
$contactid = $adb->query_result($contacts,0,"contactid");
$contacts_id_wsid = vtws_getWebserviceEntityId('Contacts', $contactid); 


///CREATE NEW CONTACT
if($contactid == ""){

    if($source == 'Facebook'){
        $getthename   = json_decode(file_get_contents('https://graph.facebook.com/v11.0/'.$sender_id.'?access_token='.$facebook_token), true);
        $firstname    = $getthename['first_name'];
        $lastname     = $getthename['last_name'];
        $contactname  = $firstname . ' ' . $lastname;
    }
    
    $contact['firstname'] = $firstname;
    $contact['lastname']  = $lastname;
    
    if($source == 'Viber'){
         $contact['cf_891'] = $sender_id; 
    }
    
    if($source == 'Facebook'){
         $contact['cf_957'] = $sender_id; 
    }
    
    $contact['assigned_user_id'] = 1;
    $contact['source'] = $source;
    $contactrecord = vtws_create('Contacts', $contact, $user);
    $parts = explode('x', $contactrecord['id']);
    $contactid = $parts[1];  
    $contacts_id_wsid = $parts[1];
}


$vtiger_troubletickets = $adb->pquery("SELECT vt.ticketid , vc.description FROM vtiger_troubletickets vt 
LEFT JOIN vtiger_crmentity vc ON vt.ticketid = vc.crmid 
WHERE vt.contact_id = ? AND deleted != 1 AND vt.status = 'Open' AND vc.source = ?", array($contactid , $source));
$ticketid = $adb->query_result($vtiger_troubletickets,0,"ticketid");

if($ticketid == ""){
    
    $ticket['ticketcategories'] = "Small Problem";
    $ticket['ticket_title'] = $source. " Message From " . $contactname;
 
    $description = $contactname; //empty($name) ? $contactname : $name;
    $description .= "\n";
    $description .= $date;
    $description .= "\n";
    $description .= $message;
    $ticket['description'] = $message;
     
    $ticket['contact_id'] = $contacts_id_wsid;
    $ticket['ticketpriorities'] = 'Normal';
    $ticket['cf_939'] = 'Within';
    $ticket['cf_941'] = '24';
    $ticket['ticketstatus'] = 'Open';
    
    //GET RANDOM USER
    $ticket['assigned_user_id'] = 1; //$adb->query_result($users,0,"id");
    
    $ticket['source'] = $source;
    $record = vtws_create('HelpDesk', $ticket, $user);
    
    if($source == 'Viber'){
        $adb->pquery("UPDATE vtiger_contactscf SET cf_891 = ? WHERE contactid = ?", array($sender_id, $contactid));
    }
    
    if($source == 'Facebook'){
        $adb->pquery("UPDATE vtiger_contactscf SET cf_957 = ? WHERE contactid = ?", array($sender_id, $contactid));
    }
    
}
else{
    $description = $adb->query_result($vtiger_troubletickets,0,"description");
    $description .= "\n\n";
    $description .= "--------------------------------";
    $description .= "\n\n";
    $description .= $contactname;
    $description .= "\n";
    $description .= $date;
    $description .= "\n";
    $description .= $message;
    $adb->pquery("UPDATE vtiger_crmentity SET description = ? , modifiedtime = NOW() WHERE crmid = ?", array($description,$ticketid));

}

//}

?>