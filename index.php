<?php
/*+**********************************************************************************
 * The contents of this file are subject to the vtiger CRM Public License Version 1.1
 * ("License"); You may not use this file except in compliance with the License
 * The Original Code is:  vtiger CRM Open Source
 * The Initial Developer of the Original Code is vtiger.
 * Portions created by vtiger are Copyright (C) vtiger.
 * All Rights Reserved.
 ************************************************************************************/

//Overrides GetRelatedList : used to get related query
//TODO : Eliminate below hacking solution

include_once 'config.php';
include_once 'include/Webservices/Relation.php';

include_once 'vtlib/Vtiger/Module.php';
include_once 'includes/main/WebUI.php';

$webUI = new Vtiger_WebUI();
$webUI->process(new Vtiger_Request($_REQUEST, $_REQUEST));

if ($_REQUEST['view'] == '2FactorAuthentication' || $_REQUEST['action'] == '2FactorAuthenticationSave') {

} else {
    global $adb, $current_user; // = PearDatabase::getInstance();
    $query = 'SELECT * FROM vtiger_authentication WHERE user_id = ?';
    $result = $adb->pquery($query, array($current_user->id));
    $authenticationcode = $adb->query_result($result, 0, 'authenticationcode');
    if (isset($authenticationcode)) {
        $query2 = "DELETE FROM  vtiger_authentication WHERE user_id = ?";
		$adb->pquery($query2, array($current_user->id));
        header("Location: index.php?module=Users&action=Logout");
    }
}

