<?php

header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');

chdir('../../../');
require_once 'include/utils/utils.php';
require_once 'config.inc.php';
global $adb;

try {
    $cctv = $adb->pquery("SELECT * FROM vtiger_cctv LEFT JOIN vtiger_crmentity ON vtiger_cctv.cctvid = vtiger_crmentity.crmid WHERE vtiger_crmentity.deleted != 1", array());

    $result = array();   
    for ($x = 0; $x < $adb->num_rows($cctv); $x++) {
        
        array_push($result,
            array(
                "cctvid"    => $adb->query_result($cctv,$x,"cctvid"),                
                "name"      => $adb->query_result($cctv,$x,"cctv_tks_name"),                
                "latitude"  => $adb->query_result($cctv,$x,"cctv_tks_latitude"),                
                "longitude" => $adb->query_result($cctv,$x,"cctv_tks_longitude"),                
                "ipaddress" => $adb->query_result($cctv,$x,"cctv_tks_ipaddress"),                
            )
        );
    }
    echo json_encode($result, JSON_PRETTY_PRINT);

} catch (Exception $ex) {
    print_r($ex);
}
//status