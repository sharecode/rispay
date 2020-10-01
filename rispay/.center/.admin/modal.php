<!-- Bootstrap Modals -->
<!-- Modal - REGISTER -->
<div class="modal fade" id="add_new_modal_0" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">

<div class="modal-dialog modal-lg" role="document">
<div class="modal-content">

<div style="text-align: center;padding: 24px 0px 12px 0px;">
<h3><b>แบบฟอร์มเพิ่ม Admin</b></h3>
</div>

<div class="modal-body">

<form action="save/" method="post">

<div class="form-group">
<div class="input-group">
<select name="apname" class="form-control" required>
<option value="">คลิกเลือก (คำนำหน้าตามบัตรประชาชน)</option>
<option value="นาย">นาย</option>
<option value="นาง">นาง</option>
<option value="นางสาว">นางสาว</option>
<option value="Mr.">Mr.</option>
<option value="Mrs.">Mrs.</option>
<option value="Miss.">Miss.</option>
</select>
</div>
</div>

<div class="form-group">
<div class="input-group">
<input type="text" name="afname" class="form-control" placeholder="ป้อน ชื่อ" required>
</div>
</div>

<div class="form-group">
<div class="input-group">
<input type="text" name="alname" class="form-control" placeholder="ป้อน นามสกุล" required>
</div>
</div>

<div class="form-group">
<div class="input-group">
<input type="text" name="uname" class="form-control" placeholder="ป้อน Username" required>
</div>
</div>

<div class="form-group">
<div class="input-group">
<input type="text" name="upass" class="form-control" placeholder="ป้อน Password" required>
</div>
</div>

<div class="form-group">
<div class="input-group">
<select name="cls" class="form-control" required>
<option value="">คลิกเลือก (ระดับผู้ใช้งาน)</option>
<option value="1">Admin หลัก</option>
<option value="2">Admin การเงิน</option>
</select>
</div>
</div>

<p style="text-align: center;padding: 2px 0px 0px 0px;">
<button type="submit" name="submit" id="submit" class="btn btn-success">
<img src="../../images/down.png" width="20">  บันทึก</button>
<a href="" class="btn btn-warning"><img src="../../images/cancel.png" width="20"> ยกเลิก</a>
</p>



</form>

</div>
                           
</div>
</div>
</div>

<!--CLOSE Modal-REGISTER -->

<!-- Modal - UPDATE REGISTER -->
<div class="modal fade" id="add_new_modal_update<?php echo $row['aid']?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">

<div class="modal-dialog modal-lg" role="document">
<div class="modal-content">

<div style="text-align: center;padding: 24px 0px 12px 0px;">
<h3><b>อัปเดทข้อมูล Admin</b></h3>
</div>

<div class="modal-body">

<form action="update/" method="post">
<input type="hidden"  name="aid" value="<?php echo $row['aid']; ?>" />

<div class="form-group">
<div class="input-group">
<select name="apname" class="form-control" required>
<option value="<?php echo $row['apname']; ?>"><?php echo $row['apname']; ?></option>
<option value="นาย">นาย</option>
<option value="นาง">นาง</option>
<option value="นางสาว">นางสาว</option>
<option value="Mr.">Mr.</option>
<option value="Mrs.">Mrs.</option>
<option value="Miss.">Miss.</option>
</select>
</div>
</div>

<div class="form-group">
<div class="input-group">
<input type="text" name="afname" class="form-control" value="<?php echo $row['afname']; ?>" required>
</div>
</div>

<div class="form-group">
<div class="input-group">
<input type="text" name="alname" class="form-control" value="<?php echo $row['alname']; ?>" required>
</div>
</div>

<div class="form-group">
<div class="input-group">
<input type="text" name="uname" class="form-control" value="<?php echo $row['uname']; ?>" required>
</div>
</div>

<div class="form-group">
<div class="input-group">
<input type="text" name="upass" class="form-control" value="<?php echo $row['upass']; ?>" required>
</div>
</div>

<div class="form-group">
<div class="input-group">
<select name="cls" class="form-control" required>
<option value="<?php echo $row['cls'] ?>"><?php if($row['cls']==1){echo "Admin หลัก";}else{echo "Admin การเงิน";} ?></option>
<option value="1">Admin หลัก</option>
<option value="2">Admin การเงิน</option>
</select>
</div>
</div>

<div class="modal-footer" style="text-align: center;display: block;margin: auto;">
<p style="text-align: center;padding: 2px 0px 0px 0px;">
<button type="submit" name="submit" id="submit" class="btn btn-success">
<img src="../../images/down.png" width="20">  บันทึก</button>
<a href="" class="btn btn-warning"><img src="../../images/cancel.png" width="20"> ยกเลิก</a>
</p>
</div>

</form>

</div>
                           
</div>
</div>
</div>

<!--ปิด Modal Close/Open-->

<!-- Modal - DELETE -->
<div class="modal fade" id="add_new_modal_del<?php echo $row['aid']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
<div class="modal-dialog modal-lg" role="document">

<div class="modal-content">
<div class="row" style="padding: 24px 24px 24px 24px">

<div style="display: block;margin: auto;padding: 0px 0px 12px 0px;font-weight: bold;">
<h4>ลบข้อมูล Admin</h4>
</div>

<div class="col-md-12">

<form action="del/" method="post">
<input type="hidden"  name="aid" value="<?php echo $row['aid']; ?>" />
<div class="card">

<div class="card-body">
<h5 class="card-title">
<p style="text-align: center;"><?php echo $row['apname'];?><?php echo $row['afname'];?> <?php echo $row['alname'];?></p>
</h5>
</div>
</div>

<div class="modal-footer" style="text-align: center;display: block;margin: auto;">
<p style="text-align: center;padding: 2px 0px 0px 0px;">
<button type="submit" name="submit" id="submit" class="btn btn-danger">
<img src="../../images/Del.png" width="20"> ลบ</button>
<a href="" class="btn btn-warning"><img src="../../images/cancel.png" width="20"> ยกเลิก</a>
</p>
</div>

</form>

</div>       



</div>

</div>
</div>
</div>

<!--ปิด Modal DELETE-->