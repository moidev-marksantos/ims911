<?php

header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');

chdir('../../../');
require_once 'include/utils/utils.php';
require_once 'config.inc.php';
global $adb;

try {
    $responder = $adb->pquery("SELECT * FROM (SELECT  createddatetime,latitude,longitude, CONCAT(responder_tks_firstname,' ', responder_tks_lastname) as name , responder_tks_respondertype, responder_tks_contactno, responderid,  row_number() OVER (PARTITION BY responderid  order by createddatetime DESC)as rn FROM  _responder_location LEFT JOIN vtiger_responder ON vtiger_responder.responderid  =  _responder_location.responder_id LEFT JOIN vtiger_crmentity ON vtiger_crmentity.crmid = vtiger_responder.responderid WHERE vtiger_crmentity.deleted = 0)X where rn=1;", array());
	
    $result->type = "FeatureCollection";
    $result->features = array();

    for ($x = 0; $x < $adb->num_rows($responder); $x++) {    
        $coordinates = explode(",", $adb->query_result($responder,$x,"cf_854"));
        array_push(
            $result->features,
            array(
                "type" => "Feature",
                "properties" => array(
                    "id"            => $adb->query_result($responder,$x,"responderid"),                                        
                    "name"          => $adb->query_result($responder,$x,"name"),                                        
                    "type"          => $adb->query_result($responder,$x,"responder_tks_respondertype"),                                        
                    "contactno"     => $adb->query_result($responder,$x,"responder_tks_contactno"),                                        
                ),
                "geometry" => array(
                    "type" => "Point",
                    "coordinates" => array(
                        (float) $adb->query_result($responder,$x,"longitude"), (float) $adb->query_result($responder,$x,"latitude")
                    )
                ),
            )
        );

        
    }
    echo json_encode($result, JSON_PRETTY_PRINT);

} catch (Exception $ex) {
    print_r($ex);
}