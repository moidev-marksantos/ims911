<?php 

//ini_set('display_errors','on'); error_reporting(E_ALL);
chdir('../../../');
include_once 'modules/API/Mobile/Incident/UploadFile.php';
$uploadfile = new UploadFile();
$result = $uploadfile->upload();

?>