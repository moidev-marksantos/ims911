<?php 

//$result = "http://localhost:90/bayan911/test/images/bayan911.png";

$path = 'http://localhost:90/bayan911/test/images/circle.png';
$type = pathinfo($path, PATHINFO_EXTENSION);
$data = file_get_contents($path);
$base64 = base64_encode($data);

header("Content-type: image/png");
print_r($base64);
?>
