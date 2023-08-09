<?php

header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');

chdir('../../');
require_once 'include/utils/utils.php';
require_once 'config.inc.php';
global $adb;

try {
    $tickets = $adb->pquery("SELECT a.* , b.* , c.color FROM `vtiger_troubletickets` as a 
    JOIN vtiger_ticketcf as b ON a.ticketid = b.ticketid
    LEFT JOIN vtiger_ticketstatus as c ON a.status = ticketstatus
    LEFT JOIN vtiger_crmentity vc ON a.ticketid = vc.crmid
    WHERE vc.deleted = 0 AND a.status != 'Closed'", array());

    $result = array();   

    for ($x = 0; $x < $adb->num_rows($tickets); $x++) {
        
        $coordinates = explode(",", $adb->query_result($tickets,$x,"cf_854"));              
        array_push($result,
            array(
                "title" => $adb->query_result($tickets,$x,"category"),                
                "status" => $adb->query_result($tickets,$x,"status"),                
                "location" => $adb->query_result($tickets,$x,"cf_856") . ' ' .$adb->query_result($tickets,$x,"cf_858"). ' ' .$adb->query_result($tickets,$x,"cf_860") ,       
                "longtitude" => (float)$coordinates[0],
                "latitude" => (float)$coordinates[1],
                "color" => $adb->query_result($tickets,$x,"color"),
                "id" => $adb->query_result($tickets,$x,"ticketid")
            )
        );
    }
    echo json_encode($result, JSON_PRETTY_PRINT);

} catch (Exception $ex) {
    print_r($ex);
}