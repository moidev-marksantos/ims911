<?php 

chdir('../../../');
include_once 'modules/API/Mobile/Incident/Dropdown.php';
$dropdown = new Dropdown();
$result = $dropdown->get($_GET['name']);

#Dropdown List
//status
//department

?>