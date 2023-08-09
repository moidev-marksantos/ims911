<?php
 
header('Content-Type: application/json');

chdir('../../');
require_once 'include/utils/utils.php';
require_once 'config.inc.php';
global $adb;

try {
    $vtiger_users = $adb->pquery("SELECT COUNT(*) as cnt FROM vtiger_users", array());
	
    $vtiger_responder = $adb->pquery("SELECT COUNT(*) as cnt FROM vtiger_responder 
LEFT JOIN vtiger_crmentity ON vtiger_crmentity.crmid = vtiger_responder.responderid
WHERE vtiger_crmentity.deleted != 1;", array());

    $result = array(
                "user" => $adb->query_result($vtiger_users,0,"cnt"),            
                "responder" => $adb->query_result($vtiger_responder,0,"cnt"),            
        );
    
    echo json_encode($result, JSON_PRETTY_PRINT);

} catch (Exception $ex) {
    print_r($ex);
}