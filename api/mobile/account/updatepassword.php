<?php 

chdir('../../../');
//$data = json_decode(file_get_contents('php://input'),true); 
include_once 'modules/API/Mobile/Responder/Password.php';
$updatepassword = new Password();
$result = $updatepassword->updatepassword($_POST["password"],$_POST["responderid"]);

?>