<?php 

chdir('../../../');
$data = json_decode(file_get_contents('php://input'),true); 
include_once 'modules/API/Mobile/Responder/RegisterReponder.php';
$registerResponder = new RegisterReponder();
$result = $registerResponder->register($data);

?>