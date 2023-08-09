<?php 

header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');

chdir('../../');
require_once 'include/utils/utils.php';
require_once 'config.inc.php';
global $adb;

$role = str_replace('%20',' ',$_GET['rolename']);

$tickets = $adb->pquery("SELECT cf_937 as dispatch_to FROM `vtiger_troubletickets` as a 
JOIN vtiger_ticketcf as b ON a.ticketid = b.ticketid
LEFT JOIN vtiger_ticketstatus as c ON a.status = ticketstatus
WHERE a.status = 'Open' AND cf_937 != ''  AND cf_937 LIKE '%$role%'
", array());

$result = array(); 

for ($x = 0; $x < $adb->num_rows($tickets); $x++) {
	array_push($result,
		array(
			"dispatch_to" => $adb->query_result($tickets,$x,"dispatch_to"),                			
        ));
}

echo json_encode($result, JSON_PRETTY_PRINT);
