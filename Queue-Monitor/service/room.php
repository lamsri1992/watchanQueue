<?php include ('api/R2060761082126.api.php'); ?>
<!-- ห้องตรวจ 10 -->
<style>
.AutoScroll {
    max-height: 530px;
    overflow-y: scroll;
    overflow:  hidden;
}
</style>
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