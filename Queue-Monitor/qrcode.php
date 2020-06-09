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

$ch2 = curl_init();
curl_setopt($ch2, CURLOPT_URL,'http://localhost:3000/servicepoint/'.$visit['b_service_point_id'].'');
curl_setopt($ch2, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch2, CURLOPT_CUSTOMREQUEST, 'GET');

$headers = array();
$headers[] = 'Content-Type: application/json';
curl_setopt($ch2, CURLOPT_HTTPHEADER, $headers);

$check = curl_exec($ch2);
if(curl_errno($ch2)){ echo 'Error:' . curl_error($ch2); }
curl_close($ch2);
$check = (array)json_decode($check);
$count = count($check);

if(!isset($visit['b_service_point_id'])){ header("Location: qrcode-null.php"); }
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
    <div class="container-fluid">
        <div class="container" style="padding-bottom: 15px;padding-top: 15px;">
            <div class="text-center">
                <img src="assets/img/logo.png" alt="โรงพยาบาลวัดจันทร์เฉลิมพระเกียรติ ๘๐ พรรษา" width="50%">
            </div>
            <div class="text-center">
                <small class="text-center">โรงพยาบาลวัดจันทร์เฉลิมพระเกียรติ ๘๐ พรรษา</small>
            </div>
            <div class="card text-center">
                <div class="card-header">
                    <h2>
                        <?=$visit['visit_queue_setup_description']." - ".$visit['visit_queue_map_queue']?>
                    </h2>
                </div>
                <div class="card-body text-center">
                    <p>HN : <?=(int)$visit['visit_hn']?></p>
                    <p><i class="far fa-user"></i> คุณ<?=$visit['patient_firstname']." ".$visit['patient_lastname']?>
                    </p>
                    <p><i class="far fa-hospital"></i> จุดรับบริการ : <?=$visit['service_point_description']?></p>
                    <small><i class="far fa-clock"></i> เวลาเข้ารับบริการ : <?=$visit['assign_date_time']?></small>
                </div>
                <div class="card-body collapse text-left" id="collapseQueue">
                    <?php
                    $i = 0;
                    echo '<table class="table table-sm">';
                    echo '<tr>';
                    echo '<th colspan="2"><i class="far fa-clock"></i> คิวรอรับบริการ</th>';
                    echo '</tr>';
                    foreach($check as $res){ 
                        if($visit['patient_firstname']==$res->patient_firstname){
                            $wait = $i*5;
                            $bg="class='bg-danger' style='color:white;'"; $q = "<small class='badge badge-light text-right'>อีกประมาณ $wait นาทีจะถึงคิวของคุณ</small>";
                        }else{ $bg = ""; $q="";}
                        $i++;
                        echo '<tr '.$bg.'>';
                        echo '<td>'.$i.'</td>';
                        echo '<td>'.$res->patient_firstname." ".$res->patient_lastname."  ".$q.'</td>';
                        echo '</tr>';
                    }
                    echo '</table>';
                    ?>
                </div>
                <div class="card-footer">
                    <a data-toggle="collapse" href="#collapseQueue">
                        ทั้งหมด <?=$count?> คิว <i class="fa fa-plus-circle"></i>
                    </a>
                </div>
                <div class="card-body">
                    <button class="btn btn-success btn-block" onclick='window.location.reload();'>
                        <i class="fa fa-sync-alt"></i> Refresh Data
                    </button>
                </div>
            </div>
        </div>
    </div>
</body>

</html>