<?php
error_reporting(E_ALL ^ E_NOTICE);
$result = $_REQUEST['svpoint'];
$result_explode = explode(',', $result);

$svpoint = "R".$result_explode[0];
$svacross = "R".$result_explode[1];
$svname = $result_explode[2];

include ("api/$svpoint.api.php");
include ("api/$svacross.api.php");
?>
<div class="col-md-6">
    <div id="" class="card">
        <div class="card-body" style="background-color:green;">
            <h1 class="card-title text-center" style="font-size:30px;color:white;">
                <i class="fa fa-user-clock"></i> คิวรอรับบริการ
            </h1>
            <div>
                <?php $i=0;
                    echo '<table class="table table-striped table-dark" width="100%" style="font-size:14px;">';
                    foreach ($$svpoint as $res){ $i++;
                    echo '<tr>';
                        echo '<td>HN: '.(int)$res->visit_hn.'</td>';
                        echo '<td>'.$res->assign_date_time.'</td>';
                        echo '<td>'.$res->visit_queue_setup_description." ".$res->visit_queue_map_queue.'</td>';
                        echo '<td>'.$res->patient_firstname." ".$res->patient_lastname.'</td>'; ?>
                        <td>
                            <button class="btn btn-sm btn-info"
                                onclick='responsiveVoice.speak("เชิญคุณ<?=$res->patient_firstname.$res->patient_lastname?>,ที่<?=$res->service_point_description?>ค่ะ","Thai Female",{rate: 0.9});'>
                                <i class="fa fa-volume-up"></i> เรียก
                            </button>
                        </td>
                        <?php if($i==1){ ?>
                        <td>
                            <a id="skipQ" href="#" class="btn btn-sm btn-danger">
                                <i class="fa fa-angle-double-right"></i> ข้าม
                            </a>
                        </td>
                        <?php }else{ ?>
                            <td></td>
                        <?php } ?>
                <?php echo '</tr>'; } echo '</table>'; ?>
            </div>
        </div>
    </div>
</div>

<div class="col-md-6">
    <div id="" class="card">
        <div class="card-body" style="background-color:purple;">
            <h1 class="card-title text-center" style="font-size:30px;color:white;">
                <i class="fa fa-user-times"></i> คิวที่เรียกไปแล้ว
            </h1>
            <div>
                <?php
                    echo '<table class="table table-striped table-dark" width="100%" style="font-size:16px;">';
                    foreach($R240237367895265003 as $res){
                    echo '<tr>';
                        echo '<td>HN: '.$res->visit_hn.'</td>';
                        echo '<td>'.$res->visit_queue_setup_description." ".$res->visit_queue_map_queue.'</td>';
                        echo '<td>'.$res->patient_firstname." ".$res->patient_lastname.'</td>';
                    echo '</tr>';
                    }
                    echo '</table>';
                ?>
            </div>
        </div>
    </div>
</div>

<?php $data = count($R2060761082126)+count($R240237367895265003); $data_refresh = ($data * 3) * 1000;?>
<?php if($data_refresh==0){$data_settime = 5000;}else{$data_settime=$data_refresh;}?>
<script>
$(document).ready(function() {
    var refreshId = setInterval(function() {
        location.reload();
    }, <?=$data_settime?> );
});

$('#skipQ').on("click", function(event) {
    event.preventDefault();
    swal({
            title: "ยืนยันการข้ามคิว ?",
            text: "รายชื่อจะไปอยู่ที่ 'คิวที่เรียกแล้ว : OPD' ในระบบ Hospital-OS",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        })
        // .then((createCnf) => {
        //     if (createCnf) {
        //         document.getElementById("btnApprove").disabled = true;
        //         $.ajax({
        //             url: "pages/query_leave.php?id=<?=$data['leave_id']?>",
        //             method: "POST",
        //             data: $('#unitHead').serialize(),
        //             success: function(data) {
        //                 swal('Success!',
        //                     'บันทึกรายการแล้ว',
        //                     'success', {
        //                         closeOnClickOutside: false,
        //                         closeOnEsc: false,
        //                         buttons: false,
        //                         timer: 3000,
        //                     });
        //                 window.setTimeout(function() {
        //                     location.replace('?')
        //                 }, 2000);
        //             }
        //         });
        //     }
        // });
});
</script>