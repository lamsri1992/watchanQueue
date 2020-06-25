<?php include ("api/R2064028169980.api.php"); ?>
<div class="container-fluid">
    <div id="" class="card" style="background-color:green;border-radius: 25px;">
        <div class="card-body" style="background-color:green;border-radius: 25px;">
            <h1 class="card-title text-center" style="font-size:30px;color:white;">
                <i class="far fa-address-card"></i> พิมพ์บัตรคิวรับบริการ
            </h1>
            <div>
                <?php
                    echo '<table class="table table-striped table-dark" width="100%" style="font-size:16px;">';
                    foreach ($R2064028169980 as $res){
                    echo '<tr>';
                        echo '<td>ID: '.$res->t_visit_id.'</td>';
                        echo '<td>HN: '.(int)$res->visit_hn.'</td>';
                        echo '<td>'.$res->patient_firstname." ".$res->patient_lastname.'</td>';
                        echo '<td><i class="far fa-clock"></i> '.$res->assign_date_time.'</td>';
                        echo '<td><i class="fa fa-caret-right"></i> '.$res->visit_queue_setup_description." ".$res->visit_queue_map_queue.' <i class="fa fa-caret-left"></i></td>';
                        echo '<td><a href="print-queue.php?id='.$res->t_visit_id.'" class="btn btn-sm btn-info" target="_blank"><i class="fa fa-print"></i> พิมพ์บัตรคิว</a></td>';
                        echo '</tr>'; }
                    echo '</table>'; ?>
            </div>
        </div>
    </div>
</div>