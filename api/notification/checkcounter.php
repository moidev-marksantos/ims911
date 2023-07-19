<?php 

chdir('../../');
require_once 'include/utils/utils.php';
require_once 'config.inc.php';
global $adb;

$role = str_replace('%20',' ',$_GET['rolename']);
$tickets = $adb->pquery("SELECT hasnotification FROM _notification WHERE dispatch_to LIKE '%$role%'", array());
echo $adb->query_result($tickets,0,"hasnotification");

?>