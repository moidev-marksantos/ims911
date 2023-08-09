<?php 

chdir('../../../');
require_once 'config.inc.php';
global $radio_ip;

$data = json_decode(file_get_contents($radio_ip));
foreach ($data as $row) {
    if($row->id == $_GET['id']){
        header("Content-type: image/png");
        $data = $row->icon;
        echo base64_decode($data);
    }
}
?>