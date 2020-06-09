<div class="container card-body border">
    <div class="row">
        <div class="col-md-6 text-center">
            <img src="assets/img/bg-q.jpg" alt="" width="100%">
            <span>
                <i class="fa fa-exclamation-circle"></i>
                อย่าลืม Discharge คนไข้ในระบบหลังเลิกงานหลัง 16:00 น. ด้วยนะจ๊ะ
            </span>
        </div>
        <div class="col-md-6">
            <form class="form-horizontal" method="post" action="?servicepoint=queuecaller" target="_blank">
                <fieldset>
                    <legend>ระบบเรียกคิวเข้ารับบริการ</legend>
                    <div class="form-group">
                        <div class="col-md-12">
                            <select id="svpoint" name="svpoint" class="form-control" required>
                                <option value="">+++++ กรุณาเลือกจุดบริการ +++++</option>
                                <option value="2060761082126,240237367895265003,จุดซักประวัติผู้ป่วย">- จุดซักประวัติผู้ป่วย</option>
                                </option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12 text-right">
                            <button name="btnSubmit" class="btn btn-success btn-block">
                                <i class="fa fa-sign-out-alt"></i> เริ่มใช้งานโปรแกรม
                            </button>
                            <a href="#Howto" class="btn btn-info btn-block" data-toggle="modal">
                                <i class="fa fa-book"></i> คู่มือการใช้งานระบบคิว
                            </a>
                            <a href="?servicepoint=triage" target="_blank" class="btn btn-danger btn-block">
                                <i class="fa fa-print"></i> พิมพ์บัตรคิว (จุด Triage)
                            </a>
                        </div>
                    </div>
                </fieldset>
            </form>
        </div>
    </div>
</div>

<!-- Modal How To -->
<div class="modal fade" id="Howto" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"><i class="fa fa-book"></i> คู่มือการใช้งาน
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <span>1. เลือกจุดบริการที่ต้องการเรียกคิว</span><br>
                <span>2. กดปุ่ม "เริ่มใช้งานโปรแกรม"</span><br>
                <span>3. กดปุ่มเพื่อเรียกคิว</span><br>
                <span>4. ข้ามคิวโดยกดปุ่มข้าม</span><br>
                <span>5. รายชื่อที่ถูกข้ามจะอยู่ในคิวตกค้าง</span><br>
                <span>6. สามารถย้อนกลับคิวเข้ามาในคิวรอรับบริการได้</span><br>
                <span>7. กรุณา Discharge รายชื่อผู้เข้ารับบริการหลัง 16:00 น. ทุกครั้ง</span>
                <hr>
                <div class="text-center">
                    <small>พบปัญหาการใช้งาน กรุณาแจ้งงานไอที</small>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">ปิดหน้าต่าง</button>
            </div>
        </div>
    </div>
</div>