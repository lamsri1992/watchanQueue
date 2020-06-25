
<!-- ห้องตรวจ 10 -->
<style>
.AutoScroll {
    max-height: 530px;
    overflow-y: scroll;
    overflow:  hidden;
}
</style>
<div class="col-md-3">
    <div class="card-body text-center" style="background-color:purple;border-radius: 25px;">
        <h1 class="card-title" style="font-size:45px;color:white;"><i class="fa fa-user-md"></i> ห้องตรวจ 10</h1>
        <div class="AutoScroll scroller" id="id-1" data-config='{"delay" : 5000 , "amount" : 90}'>
            <?php
                    echo '<table class="table table-striped table-dark" width="100%" style="font-size:35px;">';
                    foreach($R240237361913389938 as $res){
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
<div class="col-md-3">
    <div class="card-body text-center" style="background-color:green;border-radius: 25px;">
        <h1 class="card-title" style="font-size:45px;color:white;"><i class="fa fa-user-md"></i> ห้องตรวจ 7</h1>
        <div class="AutoScroll scroller" id="id-2" data-config='{"delay" : 5000 , "amount" : 100}'>
            <?php
                    echo '<table class="table table-striped table-dark" width="100%" style="font-size:35px;">';
                    foreach($R240237364241304356 as $res){
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
<!-- ห้องตรวจ 3 -->
<div class="col-md-3">
    <div class="card-body text-center" style="background-color:#003366;border-radius: 25px;">
        <h1 class="card-title" style="font-size:45px;color:white;"><i class="fa fa-user-md"></i> ห้องตรวจ 3</h1>
        <div class="AutoScroll scroller" id="id-3" data-config='{"delay" : 5000 , "amount" : 90}'>
            <?php
                    echo '<table class="table table-striped table-dark" width="100%" style="font-size:35px;">';
                    foreach($R2068315875716 as $res){
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
<!-- จุดซักประวัติ -->
<div class="col-md-3">
    <div class="card-body text-center" style="background-color:#17a2b8;border-radius: 25px;">
        <h1 class="card-title" style="font-size:45px;color:white;"><i class="fa fa-notes-medical"></i> จุดซักประวัติ
        </h1>
        <div class="AutoScroll scroller" id="id" data-config='{"delay" : 5000 , "amount" : 90}'>
            <?php
                    echo '<table class="table table-striped table-dark" width="100%" style="font-size:35px;">';
                    foreach($R2060761082126 as $res){
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
<?php $data = count($R2060761082126)+count($R2068315875716)+count($R240237361913389938)+count($R240237364241304356); $data_refresh = ($data * 3) * 1000;?>
<?php if($data_refresh==0){$data_settime = 5000;}else{$data_settime=$data_refresh;}?>
<script src="assets/autoscroll/autoscroll.js"></script>
<script>
$(document).ready(function() {
    var refreshId = setInterval(function() {
        location.reload();
    }, <?=$data_settime?> );
});
</script>