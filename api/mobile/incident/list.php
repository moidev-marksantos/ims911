<?php 

chdir('../../../');
$data = json_decode(file_get_contents('php://input'),true); 
include_once 'modules/API/Mobile/Incident/IncidentList.php';
$incidentlist = new IncidentList();
$result = $incidentlist->get($data);

?>