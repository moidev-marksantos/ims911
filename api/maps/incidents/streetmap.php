<?php

header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');

chdir('../../../');
require_once 'include/utils/utils.php';
require_once 'config.inc.php';
global $adb;

try {
    $tickets = $adb->pquery("SELECT * FROM _streetsbma", array());

    //$result = array();   
    
    $result->type = "FeatureCollection";
    $result->features = array();

    for ($x = 0; $x < $adb->num_rows($tickets); $x++) {    
        $coordinates = explode(",", $adb->query_result($tickets,$x,"coordinates"));
        $longitude = $coordinates[0];
        $latitude  = $coordinates[1];
        
        array_push(
            $result->features,
            array(
                "type" => "Feature",
                "properties" => array(
                    "title"             => $adb->query_result($tickets,$x,"place_name"),
                    "street"            => $adb->query_result($tickets,$x,"street"),                    
                    "address"           => $adb->query_result($tickets,$x,"place_name")                   
                ),
                "geometry" => array(
                    "type" => "Point",
                    "coordinates" => array(
                        //(float) $adb->query_result($tickets,$x,"longitude"), 
						//(float) $adb->query_result($tickets,$x,"latitude")
						(float) $longitude, 
						(float) $latitude
                    )
                ),
            )
        );

        
    }
    echo json_encode($result, JSON_PRETTY_PRINT);

} catch (Exception $ex) {
    print_r($ex);
}