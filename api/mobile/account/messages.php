<?php

header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');

chdir('../../../');
require_once 'include/utils/utils.php';
require_once 'config.inc.php';
global $adb;

try {
    $messages = $adb->pquery("SELECT * FROM _responder_messages WHERE responder_id = ? AND message != ''", array($_GET['responder_id']));
    $result = array();   
    for ($x = 0; $x < $adb->num_rows($messages); $x++) {              
        array_push($result,
            array(
                "id" => $adb->query_result($messages,$x,"id"),                
                "responder_id" => $adb->query_result($messages,$x,"responder_id"),                
                "message" => $adb->query_result($messages,$x,"message"),
                "createddatetime" => $adb->query_result($messages,$x,"createddatetime")
            )
        );
    }
    
    print_r(json_encode(array(
        "status"    => "Success",
        "result"    => $result 
    )));

} catch (Exception $ex) {
    print_r($ex);
}