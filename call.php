<?php

/*+*******************************************************************************
 * Project		: Bayan911
 * Client 		: SBMA
 * Developer 	: Microbiz One Inc
 ********************************************************************************/

require_once 'include/utils/utils.php';
require_once 'config.inc.php';
include_once 'include/Webservices/Utils.php';
include_once 'include/Webservices/Create.php';
include_once 'include/Webservices/Revise.php';
include_once 'includes/main/WebUI.php';

global $adb;

$number = $_GET['number'];

//CREATE NEW INCIDENT
$results =  $adb->pquery("SELECT vtiger_contactdetails.* FROM vtiger_contactdetails 
LEFT JOIN vtiger_crmentity ON vtiger_contactdetails.contactid = vtiger_crmentity.crmid
WHERE vtiger_contactdetails.phone = ? OR vtiger_contactdetails.mobile = ? AND vtiger_crmentity.deleted != 1 LIMIT 1",  array($number,$number));

$contactid = $adb->query_result($results,0,"contactid");
$firstname = $adb->query_result($results,0,"firstname");
$lastname = $adb->query_result($results,0,"lastname");

if (isset($contactid)) {
	header("Location: index.php?module=HelpDesk&view=Edit&contact_id=$contactid&cf_864=$number&cf_866=$firstname&cf_868=$lastname&app=SUPPORT&cf_995=0");
} else {
	header("Location: index.php?module=HelpDesk&view=Edit&cf_864=" . $number . "&app=SUPPORT&cf_995=0");
}

?>
