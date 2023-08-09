<?php

chdir('../../../');
require_once 'config.inc.php';
//global $radio_ip;
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');

//if (!$data = @file_get_contents($radio_ip, false, $context)) {
    //$error = error_get_last();
    //echo "HTTP request failed. Error was: " . $error['message'];
    $result->type = "FeatureCollection";
    $result->features = array(
        "type" => "Feature",
        "properties" => array(
            "id" => 0,
            "title" => 0,
            "description" => 0,
            "ico" => 0,
            "icon" => 0,
        ),
        "geometry" => array(
            "type" => "Point",
            "coordinates" => array(
                0, 0
            )
        ),
    );
    echo json_encode($result, JSON_PRETTY_PRINT);
// }
// else{
// $data = json_decode($data);
// $result->type = "FeatureCollection";
// $result->features = array();

// foreach ($data as $row) {
    // array_push(
        // $result->features,
        // array(
            // "type" => "Feature",
            // "properties" => array(
                // "id" => $row->id,
                // "title" => $row->radioname,
                // "description" => $row->radioname,
                // "ico" => $row->icon,
                // "icon" => "icon_radio_" . $row->id,
            // ),
            // "geometry" => array(
                // "type" => "Point",
                // "coordinates" => array(
                    // (float) $row->longitude, (float)$row->latitude
                // )
            // ),
        // )
    // );
// }
// echo json_encode($result, JSON_PRETTY_PRINT);
}
