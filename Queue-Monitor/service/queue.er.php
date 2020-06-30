<?php include ('api/R2409144269314.api.php'); ?>
<?php include ('api/R2402024154365.api.php'); ?>
<style>
.AutoScroll {
    max-height: 530px;
    overflow-y: scroll;
    overflow:  hidden;
}
</style>
<div class="col-md-6">
    <div class="card-body text-center" style="background-color:green;border-radius: 25px;">
        <h1 class="card-title" style="font-size:45px;color:white;"><i class="fa fa-user-injured"></i> คิวรอตรวจห้องฉุกเฉิน</h1>
        <div class="AutoScroll scroller" id="id-1" data-config='{"delay" : 5000 , "amount" : 90}'>
            <?php
                    echo '<table class="table table-striped table-dark" width="100%" style="font-size:35px;">';
                    foreach($R2409144269314 as $res){
                    echo '<tr>';
                        echo '<td>'.$res->visit_queue_map_queue.'</td>';
                        echo '<td>'.$res->patient_firstname.'</td>';
                    echo '</tr>';
                    }
                    echo '</table>';
                ?>
        </div>
    </div>
</div>
<!-- ห้องตรวจ 7 -->
<div class="col-md-6">
    <div class="card-body text-center" style="background-color:red;border-radius: 25px;">
        <h1 class="card-title" style="font-size:45px;color:white;"><i class="fa fa-procedures"></i> ผู้ป่วยนอนดูอาการ</h1>
        <div class="AutoScroll scroller" id="id-2" data-config='{"delay" : 5000 , "amount" : 100}'>
            <?php
                    echo '<table class="table table-striped table-dark" width="100%" style="font-size:35px;">';
                    foreach($R2402024154365 as $res){
                    echo '<tr>';
                        echo '<td>'.$res->visit_queue_map_queue.'</td>';
                        echo '<td>'.$res->patient_firstname.'</td>';
                    echo '</tr>';
                    }
                    echo '</table>';
                ?>
        </div>
    </div>
</div>
<?php $data = count($R2409144269314)+count($R2402024154365); $data_refresh = ($data * 3) * 1000;?>
<?php if($data_refresh==0){$data_settime = 5000;}else{$data_settime=$data_refresh;}?>
<script src="assets/autoscroll/autoscroll.js"></script>
<script>
$(document).ready(function() {
    var refreshId = setInterval(function() {
        location.reload();
    }, <?=$data_settime?> );
});
</script>