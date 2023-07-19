<?php 

chdir('../../../');
$data = json_decode(file_get_contents('php://input'),true); 
include_once 'modules/API/Mobile/Responder/LoginResponder.php';
$loginResponder = new LoginResponder();
$result = $loginResponder->logout($data);

?>