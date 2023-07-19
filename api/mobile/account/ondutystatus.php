<?php 

chdir('../../../');
$data = json_decode(file_get_contents('php://input'),true); 
include_once 'modules/API/Mobile/Responder/Profile.php';
$profile = new Profile();
$result = $profile->ondutystatus($data);

?>