<?php include ("api/R2060761082126.api.php"); ?>
<div class="container-fluid">
    <div id="" class="card">
        <div class="card-body" style="background-color:green;">
            <h1 class="card-title text-center" style="font-size:30px;color:white;">
                <i class="far fa-address-card"></i> พิมพ์บัตรคิวรับบริการ
            </h1>
            <div>
                <?php
                    echo '<table class="table table-striped table-dark" width="100%" style="font-size:16px;">';
                    foreach ($R2060761082126 as $res){
                    echo '<tr>';
                        echo '<td>ID: '.$res->t_visit_id.'</td>';
                        echo '<td>HN: '.(int)$res->visit_hn.'</td>';
                        echo '<td>'.$res->patient_firstname." ".$res->patient_lastname.'</td>';
                        echo '<td><i class="far fa-clock"></i> '.$res->assign_date_time.'</td>';
                        echo '<td><i class="fa fa-caret-right"></i> '.$res->visit_queue_setup_description." ".$res->visit_queue_map_queue.' <i class="fa fa-caret-left"></i></td>';
                        echo '<td><button class="btn btn-sm btn-info"><i class="fa fa-print"></i> พิมพ์บัตรคิว</button></td>';
                        echo '</tr>'; } 
                    echo '</table>'; ?>
            </div>
        </div>
    </div>
</div>