<?php
date_default_timezone_set("Asia/Bangkok");
include ('class/date.class.php');

$id = $_REQUEST['id'];
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,'http://localhost:3000/visit/'.$id.'');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');

$headers = array();
$headers[] = 'Content-Type: application/json';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

$visit = curl_exec($ch);
if(curl_errno($ch)){ echo 'Error:' . curl_error($ch); }
curl_close($ch);
$visit = (array)json_decode($visit);
// print_r($visit);
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Watchan Hospital : Queue-Hos</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap 4 -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/custom.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Mitr&display=swap" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
    <!-- Js -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/sweetalert/sweetalert.min.js"></script>

</head>

<body>
    <div class="col-md-6 border">
        <table class="table">
            <tr>
                <td class="text-left">
                    วันที่เข้ารับบริการ <br> <?=$visit['assign_date_time']?>
                </td>
                <td class="text-right">
                    <h1><?=$visit['visit_queue_setup_description']." ".$visit['visit_queue_map_queue']?></h1>
                </td>
            </tr>
            <tr class="text-center">
                <td colspan="2">
                    <span>HN : <?=$visit['visit_hn']?></span>
                    <h2><?=$visit['patient_firstname']." ".$visit['patient_lastname']?></h2>
                    <img src="https://chart.googleapis.com/chart?chs=150x150&cht=qr&chl=http://172.20.55.203/Queue/Queue-Monitor/qrcode.php?id=<?=$visit['t_visit_id']?>">
                </td>
            </tr>
        </table>
    </div>
    <div class="text-left" id="prt">
        <button class="btn btn-info" onclick="myFunction()">พิมพ์บัตรคิว</button>
    </div>

    <script>
    function myFunction() {
        document.getElementById("prt").style.visibility = 'hidden';
        window.print();
        document.getElementById("prt").style.visibility = 'visible';
    }
    </script>
</body>

</html>