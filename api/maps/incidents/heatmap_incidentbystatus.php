<?php

chdir('../../../');
require_once 'include/utils/utils.php';
require_once 'config.inc.php';

$result = $adb->pquery('SELECT vtiger_ticketcf.cf_854 , vtiger_troubletickets.ticket_no 
FROM vtiger_troubletickets 
LEFT JOIN vtiger_ticketcf  ON vtiger_troubletickets.ticketid = vtiger_ticketcf.ticketid
LEFT JOIN vtiger_crmentity ON vtiger_crmentity.crmid = vtiger_troubletickets.ticketid
WHERE vtiger_troubletickets.status = "Completed" AND vtiger_crmentity.deleted = 0 AND CAST(vtiger_crmentity.createdtime as DATE) BETWEEN CAST(? AS DATE) AND CAST(? as DATE)', array($_GET['from'],$_GET['to']));
$coor = array();
for ($x = 0; $adb->num_rows($result) > $x; $x++) {
    $coordinates = explode(",",  $adb->query_result($result, $x, 'cf_854'));
    array_push(
        $coor,
        array(
            "type" => "Feature",
            "properties" => array(
                "dbh" => 10,
                "name" => $adb->query_result($result, $x, 'ticket_no'),
            ),
            "geometry" => array(
                "type" => "Point",
                "coordinates" => [
                    $coordinates[1],
                    $coordinates[0]
                ],
            )
        )
    );
}


$arr = array(
    "type" => "FeatureCollection",
    "features" =>  $coor
);

print_r(json_encode($arr, JSON_PRETTY_PRINT));
