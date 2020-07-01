<?php
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,'http://172.20.55.10:5550/servicepoint/2060761082126');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');

$headers = array();
$headers[] = 'Content-Type: application/json';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

$R2060761082126 = curl_exec($ch);
if(curl_errno($ch)){ echo 'Error:' . curl_error($ch); }
curl_close($ch);
$R2060761082126 = (array)json_decode($R2060761082126);
 
?>