<?php
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,'http://localhost:3000/servicepoint/240237367895265003');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');

$headers = array();
$headers[] = 'Content-Type: application/json';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

$R240237367895265003 = curl_exec($ch);
if(curl_errno($ch)){ echo 'Error:' . curl_error($ch); }
curl_close($ch);
$R240237367895265003 = (array)json_decode($R240237367895265003);
 
?>