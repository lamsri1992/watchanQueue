<?php
date_default_timezone_set("Asia/Bangkok");
include ('api/pg.db.php');
include ('api/er.class.php');

$pdo = connect();
$fnc = new ER();
$hos = "2409144269314";
$observ = "2402024154365";
$res = $fnc->getQueueER($pdo, $hos);
$obs = $fnc->getQueueER($pdo, $observ);
?>
<style>
.AutoScroll {
    max-height: 530px;
    overflow-y: scroll;
    overflow: hidden;
}
</style>
<div class="col-md-6">
    <div class="card-body text-center" style="background-color:green;border-radius: 25px;">
        <h1 class="card-title" style="font-size:45px;color:white;"><i class="fa fa-user-injured"></i>
            คิวรอตรวจห้องฉุกเฉิน</h1>
        <div class="AutoScroll scroller" id="id-1" data-config='{"delay" : 5000 , "amount" : 90}'>
            <table class="table table-striped table-dark" width="100%" style="font-size:22px;">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>ชื่อ - นามสกุล</th>
                        <th class="text-center"><i class="far fa-clock"></i> เวลาเข้ารับบริการ</th>
                        <th class="text-center"><i class="fas fa-exclamation-circle"></i> ระดับความรุนแรง</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i=0; foreach ($res as $rs){ $i++;?>
                    <tr>
                        <td><?=$i?></td>
                        <td><?=$rs['patient_firstname']." ".substr($rs['patient_lastname'],1,10);?></td>
                        <td class="text-center"><?=substr($rs['assign_date_time'],11,10)?></td>
                        <td class="text-center">
                            <?php 
                            if($rs['f_emergency_status_id']==0){echo "<div style='background-color:white;color:red;border-radius: 25px;'>รอซักประวัติ</div>";}
                            else if ($rs['f_emergency_status_id']==1){echo "<div style='background-color:black;color:white;border-radius: 25px;'>Non Urgent</div>";}
                            else if ($rs['f_emergency_status_id']==2){echo "<div style='background-color:yellow;color:black;border-radius: 25px;'>Urgent</div>";}
                            else if ($rs['f_emergency_status_id']==3){echo "<div style='background-color:pink;color:black;border-radius: 25px;'>Emergency</div>";}
                            else if ($rs['f_emergency_status_id']==4){echo "<div style='background-color:red;color:white;border-radius: 25px;'>Resuscitation</div>";}
                            else if ($rs['f_emergency_status_id']==5){echo "<div style='background-color:green;color:white;border-radius: 25px;'>Semi-Urgency</div>";}
                            else {echo "<div style='background-color:white;color:red;border-radius: 25px;'>รอซักประวัติ</div>";}
                            ?>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<!-- ห้องตรวจ 7 -->
<div class="col-md-6">
    <div class="card-body text-center" style="background-color:red;border-radius: 25px;">
        <h1 class="card-title" style="font-size:45px;color:white;"><i class="fa fa-procedures"></i> ผู้ป่วยนอนดูอาการ
        </h1>
        <div class="AutoScroll scroller" id="id-2" data-config='{"delay" : 5000 , "amount" : 100}'>
            <table class="table table-striped table-dark" width="100%" style="font-size:22px;">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>ชื่อ - นามสกุล</th>
                        <th class="text-center"><i class="far fa-clock"></i> เวลาเข้ารับบริการ</th>
                        <th class="text-center"><i class="fas fa-exclamation-circle"></i> ระดับความรุนแรง</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i=0; foreach ($obs as $os){ $i++;?>
                    <tr>
                        <td><?=$i?></td>
                        <td><?=$os['patient_firstname']." ".substr($os['patient_lastname'],1,10);?></td>
                        <td class="text-center"><?=substr($os['assign_date_time'],11,10)?></td>
                        <td class="text-center">
                            <?php 
                            if($os['f_emergency_status_id']==0){echo "<div style='background-color:green;color:white;'>Undefine</div>";}
                            else if ($os['f_emergency_status_id']==1){echo "<div style='background-color:black;color:white;border-radius: 25px;'>Non Urgent</div>";}
                            else if ($os['f_emergency_status_id']==2){echo "<div style='background-color:yellow;color:dark;border-radius: 25px;'>Urgent</div>";}
                            else if ($os['f_emergency_status_id']==3){echo "<div style='background-color:pink;color:dark;border-radius: 25px;'>Emergency</div>";}
                            else if ($os['f_emergency_status_id']==4){echo "<div style='background-color:red;color:white;border-radius: 25px;'>Resuscitation</div>";}
                            else if ($os['f_emergency_status_id']==5){echo "<div style='background-color:green;color:white;border-radius: 25px;'>Semi-Urgency</div>";}
                            else {echo "<div style='background-color:green;color:white;border-radius: 25px;'>Undefine</div>";}
                            ?>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?php $data = count($res)+count($obs); $data_refresh = ($data * 5) * 1000;?>
<?php if($data_refresh==0){$data_settime = 5000;}else{$data_settime=$data_refresh;} ?>
<script src="assets/autoscroll/autoscroll.js"></script>
<script>
$(document).ready(function() {
    var refreshId = setInterval(function() {
        location.reload();
    }, <?=$data_settime?> );
});
</script>