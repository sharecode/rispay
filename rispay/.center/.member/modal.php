<!-- Bootstrap Modals -->
<!-- Modal - REGISTER -->
<div class="modal fade" id="add_new_modal_0" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">

<div class="modal-dialog modal-lg" role="document">
<div class="modal-content">

<div style="text-align: center;padding: 24px 0px 12px 0px;">
<h3><b>แบบฟอร์มลงทะเบียน</b></h3>
</div>

<div class="modal-body">

<form action="save/" method="post">

<div class="form-group">
<div class="input-group">
<select name="pname" class="form-control" required>
<option value="">คลิกเลือก (คำนำหน้าตามบัตรประชาชน)</option>
<option value="นาย">นาย</option>
<option value="นาง">นาง</option>
<option value="นางสาว">นางสาว</option>
</select>
</div>
</div>

<div class="form-group">
<div class="input-group">
<input type="text" name="fname" class="form-control" placeholder="ป้อน ชื่อ" required>
</div>
</div>

<div class="form-group">
<div class="input-group">
<input type="text" name="lname" class="form-control" placeholder="ป้อน นามสกุล" required>
</div>
</div>

<div class="form-group">
<div class="input-group">
<input type="text" name="idcd" class="form-control" placeholder="ป้อน รหัสบัตรประชาชน 13 หลัก" maxlength="13"  required>
</div>
</div>

<div class="form-group">
<div class="input-group">
<input type="password" name="idcd_" class="form-control" placeholder="ป้อน รหัสบัตรประชาชน 13 หลัก อีกครั้ง" maxlength="13"  required>
</div>
</div>

<div class="form-group">
<div class="input-group">
<input type="text" name="position" class="form-control" placeholder="ป้อน ตำแหน่ง" required>
</div>
</div>

<div class="form-group">
<div class="input-group">
<input type="text" name="tel" class="form-control" placeholder="ป้อน หมายเลขโทรศัพท์ 10 หลัก" maxlength="10" required>
</div>
</div>

<div class="form-group">
<div class="input-group">
<input type="text" name="dep" class="form-control" placeholder="ป้อน ชื่อหน่วยงานต้นสังกัด" required>
</div>
</div>

<div class="form-group">
<div class="input-group">
<select name="prv" class="form-control" required>
<option value="">คลิกเลือก (จังหวัด)</option>
<option value="กรุงเทพมหานคร">กรุงเทพมหานคร</option>
<option value="กระบี่">กระบี่</option>
<option value="กาญจนบุรี">กาญจนบุรี</option>
<option value="กาฬสินธุ์">กาฬสินธุ์</option>
<option value="กำแพงเพชร">กำแพงเพชร</option>
<option value="ขอนแก่น">ขอนแก่น</option>
<option value="จันทบุรี">จันทบุรี</option>
<option value="ฉะเชิงเทรา">ฉะเชิงเทรา</option>
<option value="ชัยนาท">ชัยนาท</option>
<option value="ชัยภูมิ">ชัยภูมิ</option>
<option value="ชุมพร">ชุมพร</option>
<option value="ชลบุรี">ชลบุรี</option>
<option value="เชียงใหม่">เชียงใหม่</option>
<option value="เชียงราย">เชียงราย</option>
<option value="ตรัง">ตรัง</option>
<option value="ตราด">ตราด</option>
<option value="ตาก">ตาก</option>
<option value="นครนายก">นครนายก</option>
<option value="นครปฐม">นครปฐม</option>
<option value="นครพนม">นครพนม</option>
<option value="นครราชสีมา">นครราชสีมา</option>
<option value="นครศรีธรรมราช">นครศรีธรรมราช</option>
<option value="นครสวรรค์">นครสวรรค์</option>
<option value="นราธิวาส">นราธิวาส</option>
<option value="น่าน">น่าน</option>
<option value="นนทบุรี">นนทบุรี</option>
<option value="บึงกาฬ">บึงกาฬ</option>
<option value="บุรีรัมย์">บุรีรัมย์</option>
<option value="ประจวบคีรีขันธ์">ประจวบคีรีขันธ์</option>
<option value="ปทุมธานี">ปทุมธานี</option>
<option value="ปราจีนบุรี">ปราจีนบุรี</option>
<option value="ปัตตานี">ปัตตานี</option>
<option value="พะเยา">พะเยา</option>
<option value="พระนครศรีอยุธยา">พระนครศรีอยุธยา</option>
<option value="พังงา">พังงา</option>
<option value="พิจิตร">พิจิตร</option>
<option value="พิษณุโลก">พิษณุโลก</option>
<option value="เพชรบุรี">เพชรบุรี</option>
<option value="เพชรบูรณ์">เพชรบูรณ์</option>
<option value="แพร่">แพร่</option>
<option value="พัทลุง">พัทลุง</option>
<option value="ภูเก็ต">ภูเก็ต</option>
<option value="มหาสารคาม">มหาสารคาม</option>
<option value="มุกดาหาร">มุกดาหาร</option>
<option value="แม่ฮ่องสอน">แม่ฮ่องสอน</option>
<option value="ยโสธร">ยโสธร</option>
<option value="ยะลา">ยะลา</option>
<option value="ร้อยเอ็ด">ร้อยเอ็ด</option>
<option value="ระนอง">ระนอง</option>
<option value="ระยอง">ระยอง</option>
<option value="ราชบุรี">ราชบุรี</option>
<option value="ลพบุรี">ลพบุรี</option>
<option value="ลำปาง">ลำปาง</option>
<option value="ลำพูน">ลำพูน</option>
<option value="เลย">เลย</option>
<option value="ศรีสะเกษ">ศรีสะเกษ</option>
<option value="สกลนคร">สกลนคร</option>
<option value="สงขลา">สงขลา</option>
<option value="สมุทรสาคร">สมุทรสาคร</option>
<option value="สมุทรปราการ">สมุทรปราการ</option>
<option value="สมุทรสงคราม">สมุทรสงคราม</option>
<option value="สระแก้ว">สระแก้ว</option>
<option value="สระบุรี">สระบุรี</option>
<option value="สิงห์บุรี">สิงห์บุรี</option>
<option value="สุโขทัย">สุโขทัย</option>
<option value="สุพรรณบุรี">สุพรรณบุรี</option>
<option value="สุราษฎร์ธานี">สุราษฎร์ธานี</option>
<option value="สุรินทร์">สุรินทร์</option>
<option value="สตูล">สตูล</option>
<option value="หนองคาย">หนองคาย</option>
<option value="หนองบัวลำภู">หนองบัวลำภู</option>
<option value="อำนาจเจริญ">อำนาจเจริญ</option>
<option value="อุดรธานี">อุดรธานี</option>
<option value="อุตรดิตถ์">อุตรดิตถ์</option>
<option value="อุทัยธานี">อุทัยธานี</option>
<option value="อ่างทอง">อ่างทอง</option>
<option value="อุบลราชธานี">อุบลราชธานี</option>
<option value="อื่นๆ">อื่นๆ</option>
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
<div class="modal fade" id="add_new_modal_update<?php echo $row['mid']?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">

<div class="modal-dialog modal-lg" role="document">
<div class="modal-content">

<div style="text-align: center;padding: 24px 0px 12px 0px;">
<h3><b>อัปเดทข้อมูลสมาชิกลงทะเบียน</b></h3>
</div>

<div class="modal-body">

<form action="update/" method="post">
<input type="hidden"  name="mid" value="<?php echo $row['mid']; ?>" />

<div class="form-group">
<div class="input-group">
<!--<div style="text-align: right;padding: 6px 20px 0px 0px;font-weight: bold;width: 200px;">
คำนำหน้า ->
</div>-->
<select name="pname" class="form-control" required>
<option value="<?php echo $row['pname'] ?>"><?php echo $row['pname'] ?></option>
<option value="นาย">นาย</option>
<option value="นาง">นาง</option>
<option value="นางสาว">นางสาว</option>
</select>
</div>
</div>

<div class="form-group">
<div class="input-group">
<!--<div style="text-align: right;padding: 6px 20px 0px 0px;font-weight: bold;width: 200px;">
ชื่อ ->
</div>-->
<input type="text" name="fname" class="form-control" value="<?php echo $row['fname']; ?>" required>
</div>
</div>

<div class="form-group">
<div class="input-group">
<!--<div style="text-align: right;padding: 6px 20px 0px 0px;font-weight: bold;width: 200px;">
นามสกุล ->
</div>-->
<input type="text" name="lname" class="form-control" value="<?php echo $row['lname']; ?>" required>
</div>
</div>

<div class="form-group">
<div class="input-group">
<!--<div style="text-align: right;padding: 6px 20px 0px 0px;font-weight: bold;width: 200px;">
รหัสบัตรประชาชน ->
</div>-->
<input type="text" name="idcd" class="form-control" value="<?php echo $row['idcd']; ?>" maxlength="13"  required>
</div>
</div>

<div class="form-group">
<div class="input-group">
<!--<div style="text-align: right;padding: 6px 20px 0px 0px;font-weight: bold;width: 200px;">
หมายเลขโทรศัพท์ ->
</div>-->
<input type="text" name="position" class="form-control" value="<?php echo $row['position']; ?>" maxlength="10" required>
</div>
</div>

<div class="form-group">
<div class="input-group">
<!--<div style="text-align: right;padding: 6px 20px 0px 0px;font-weight: bold;width: 200px;">
หมายเลขโทรศัพท์ ->
</div>-->
<input type="text" name="tel" class="form-control" value="<?php echo $row['tel']; ?>" maxlength="10" required>
</div>
</div>

<div class="form-group">
<div class="input-group">
<!--<div style="text-align: right;padding: 6px 20px 0px 0px;font-weight: bold;width: 200px;">
สังกัด (หน่วยงาน) ->
</div>-->
<input type="text" name="dep" class="form-control" value="<?php echo $row['dep']; ?>" required>
</div>
</div>

<div class="form-group">
<div class="input-group">
<select name="prv" class="form-control" required>
<option value="<?php echo $row['prv'] ?>"><?php echo $row['prv'] ?></option>
<option value="กระบี่">กระบี่</option>
<option value="กาญจนบุรี">กาญจนบุรี</option>
<option value="กาฬสินธุ์">กาฬสินธุ์</option>
<option value="กำแพงเพชร">กำแพงเพชร</option>
<option value="ขอนแก่น">ขอนแก่น</option>
<option value="จันทบุรี">จันทบุรี</option>
<option value="ฉะเชิงเทรา">ฉะเชิงเทรา</option>
<option value="ชัยนาท">ชัยนาท</option>
<option value="ชัยภูมิ">ชัยภูมิ</option>
<option value="ชุมพร">ชุมพร</option>
<option value="ชลบุรี">ชลบุรี</option>
<option value="เชียงใหม่">เชียงใหม่</option>
<option value="เชียงราย">เชียงราย</option>
<option value="ตรัง">ตรัง</option>
<option value="ตราด">ตราด</option>
<option value="ตาก">ตาก</option>
<option value="นครนายก">นครนายก</option>
<option value="นครปฐม">นครปฐม</option>
<option value="นครพนม">นครพนม</option>
<option value="นครราชสีมา">นครราชสีมา</option>
<option value="นครศรีธรรมราช">นครศรีธรรมราช</option>
<option value="นครสวรรค์">นครสวรรค์</option>
<option value="นราธิวาส">นราธิวาส</option>
<option value="น่าน">น่าน</option>
<option value="นนทบุรี">นนทบุรี</option>
<option value="บึงกาฬ">บึงกาฬ</option>
<option value="บุรีรัมย์">บุรีรัมย์</option>
<option value="ประจวบคีรีขันธ์">ประจวบคีรีขันธ์</option>
<option value="ปทุมธานี">ปทุมธานี</option>
<option value="ปราจีนบุรี">ปราจีนบุรี</option>
<option value="ปัตตานี">ปัตตานี</option>
<option value="พะเยา">พะเยา</option>
<option value="พระนครศรีอยุธยา">พระนครศรีอยุธยา</option>
<option value="พังงา">พังงา</option>
<option value="พิจิตร">พิจิตร</option>
<option value="พิษณุโลก">พิษณุโลก</option>
<option value="เพชรบุรี">เพชรบุรี</option>
<option value="เพชรบูรณ์">เพชรบูรณ์</option>
<option value="แพร่">แพร่</option>
<option value="พัทลุง">พัทลุง</option>
<option value="ภูเก็ต">ภูเก็ต</option>
<option value="มหาสารคาม">มหาสารคาม</option>
<option value="มุกดาหาร">มุกดาหาร</option>
<option value="แม่ฮ่องสอน">แม่ฮ่องสอน</option>
<option value="ยโสธร">ยโสธร</option>
<option value="ยะลา">ยะลา</option>
<option value="ร้อยเอ็ด">ร้อยเอ็ด</option>
<option value="ระนอง">ระนอง</option>
<option value="ระยอง">ระยอง</option>
<option value="ราชบุรี">ราชบุรี</option>
<option value="ลพบุรี">ลพบุรี</option>
<option value="ลำปาง">ลำปาง</option>
<option value="ลำพูน">ลำพูน</option>
<option value="เลย">เลย</option>
<option value="ศรีสะเกษ">ศรีสะเกษ</option>
<option value="สกลนคร">สกลนคร</option>
<option value="สงขลา">สงขลา</option>
<option value="สมุทรสาคร">สมุทรสาคร</option>
<option value="สมุทรปราการ">สมุทรปราการ</option>
<option value="สมุทรสงคราม">สมุทรสงคราม</option>
<option value="สระแก้ว">สระแก้ว</option>
<option value="สระบุรี">สระบุรี</option>
<option value="สิงห์บุรี">สิงห์บุรี</option>
<option value="สุโขทัย">สุโขทัย</option>
<option value="สุพรรณบุรี">สุพรรณบุรี</option>
<option value="สุราษฎร์ธานี">สุราษฎร์ธานี</option>
<option value="สุรินทร์">สุรินทร์</option>
<option value="สตูล">สตูล</option>
<option value="หนองคาย">หนองคาย</option>
<option value="หนองบัวลำภู">หนองบัวลำภู</option>
<option value="อำนาจเจริญ">อำนาจเจริญ</option>
<option value="อุดรธานี">อุดรธานี</option>
<option value="อุตรดิตถ์">อุตรดิตถ์</option>
<option value="อุทัยธานี">อุทัยธานี</option>
<option value="อ่างทอง">อ่างทอง</option>
<option value="อุบลราชธานี">อุบลราชธานี</option>
<option value="อื่นๆ">อื่นๆ</option>
</select>
</div>
</div>

<div class="form-group">
<div class="input-group">
<!--<div style="text-align: right;padding: 6px 20px 0px 0px;font-weight: bold;width: 200px;">
ตำแหน่ง ->
</div>-->
<select name="chk" class="form-control" required>
<option value="<?php echo $row['chk'] ?>"><?php if($row['chk']==0){echo "รอชำระเงิน";}elseif($row['chk']==1){echo "โอนเงินแล้ว";}else{echo "ชำระเงินแล้ว";} ?></option>
<option value="0">รอชำระเงิน</option>
<option value="1">โอนเงินแล้ว</option>
<option value="2">ชำระเงินแล้ว</option>
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
<div class="modal fade" id="add_new_modal_del<?php echo $row['mid']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
<div class="modal-dialog modal-lg" role="document">

<div class="modal-content">
<div class="row" style="padding: 24px 24px 24px 24px">

<div style="display: block;margin: auto;padding: 0px 0px 12px 0px;font-weight: bold;">
<h4>ลบข้อมูลสมาชิกลงทะเบียน</h4>
</div>

<div class="col-md-12">

<form action="del/" method="post">
<input type="hidden"  name="mid" value="<?php echo $row['mid']; ?>" />
<div class="card">

<div class="card-body">
<h5 class="card-title">
<p><?php echo $row['pname'];?><?php echo $row['fname'];?> <?php echo $row['lname'];?></p>

<p><?php echo $row['dep'];?></p>
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