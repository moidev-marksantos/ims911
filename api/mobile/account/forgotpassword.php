<?php 

chdir('../../../');
include_once 'modules/API/Mobile/Responder/Password.php';
$forgotpassword = new Password();
$result = $forgotpassword->forgotpassword($_GET['email']);

?>