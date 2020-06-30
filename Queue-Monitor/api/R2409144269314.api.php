<?php
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,'http://172.20.55.10:3000/servicepoint/2409144269314');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');

$headers = array();
$headers[] = 'Content-Type: application/json';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

$R2409144269314 = curl_exec($ch);
if(curl_errno($ch)){ echo 'Error:' . curl_error($ch); }
curl_close($ch);
$R2409144269314 = (array)json_decode($R2409144269314);
 
?>