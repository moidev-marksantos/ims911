<?php

chdir('../../../');
require_once 'include/utils/utils.php';
require_once 'config.inc.php';

$result = $adb->pquery('SELECT * FROM vtiger_ticketstatus', array());
$classification = array();
for ($x = 0; $adb->num_rows($result) > $x; $x++) {
    array_push(
        $classification,
        array(
            "id" => $adb->query_result($result, $x, 'ticketstatus_id'),
            "ticketstatus" => $adb->query_result($result, $x, 'ticketstatus'),
            "color" => $adb->query_result($result, $x, 'color'),
        )
    );
}
print_r(json_encode($classification, JSON_PRETTY_PRINT));
