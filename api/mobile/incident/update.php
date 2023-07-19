<?php 
ini_set('display_errors','on'); error_reporting(E_ALL);
chdir('../../../');
$data = json_decode(file_get_contents('php://input'),true); 
include_once 'modules/API/Mobile/Incident/UpdateIncident.php';
$updateincident = new UpdateIncident();
$result = $updateincident->update($data);

?>