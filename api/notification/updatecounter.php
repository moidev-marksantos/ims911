<?php
chdir('../../');
require_once 'include/utils/utils.php';
require_once 'config.inc.php';

global $adb;
$tickets = $adb->pquery("UPDATE _notification SET hasnotification = 0 , dispatch_to = ''", array());

?>