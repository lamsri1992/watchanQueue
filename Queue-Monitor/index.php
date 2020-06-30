<?php
date_default_timezone_set("Asia/Bangkok");
include ('class/date.class.php');

$p = $_GET['servicepoint'];
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
    <!-- <script src="assets/js/jquery-3.2.1.min.js"></script> -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- <script src='assets/js/responsivevoice.js'></script> -->
    <script src="https://code.responsivevoice.org/responsivevoice.js?key=ZiaVNNQm"></script>
    <script src="assets/sweetalert/sweetalert.min.js"></script>

</head>

<body>
    <?php include ('content/contect-header.php'); ?>
    <main role="main" style="padding-top: 7%;">
        <div class="container-fluid">
            <div id="background"></div>
            <div class="row">
                <?php if ($p=='room'){ include ('service/room.php'); } ?>
                <?php if ($p=='selector'){ include ('service/queue.selector.php'); } ?>
                <?php if ($p=='queuecaller'){ include ('service/queue.caller.php'); } ?>
                <?php if ($p=='triage'){ include ('service/queue.triage.php'); } ?>
                <?php if ($p=='er'){ include ('service/queue.er.php'); } ?>
            </div>
        </div>
    </main>
</body>

</html>