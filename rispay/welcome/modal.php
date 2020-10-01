<!-- Bootstrap Modals -->
<!-- Modal - REGISTER -->
<div class="modal fade" id="add_new_modal_0" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">

<div class="modal-dialog modal-lg" role="document">
<div class="modal-content">

<div style="text-align: center;padding: 24px 0px 6px 0px;">
<h3><b>แบบฟอร์มลงทะเบียน</b></h3>
</div>

<div class="modal-body">

<form action="../regis/" method="post">

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

<div style="text-align: center;color: blue;padding: 6px 0px 0px 0px;">
<h6><b>ก่อนบันทึกข้อมูล กรุณาตรวจสอบ ชื่อ - นามสกุล ให้ถูกต้อง เพื่อออกใบเสร็จและจัดทำใบเกียรติบัตร</b></h6>
</div>

<p style="text-align: center;padding: 12px 0px 0px 0px;">
<button type="submit" name="submit" id="submit" class="btn btn-success">
<img src="../images/down.png" width="20">  บันทึก</button>
<a href="" class="btn btn-warning"><img src="../images/cancel.png" width="20"> ยกเลิก</a>
</p>

</form>

</div>
                           
</div>
</div>
</div>

<!--CLOSE Modal-REGISTER -->

<!-- Modal -- แจ้งโอนเงิน -->
<div class="modal fade" id="add_new_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
<div class="modal-dialog modal-lg" role="document">
<div class="modal-content">

<div style="text-align: center;padding: 24px 0px 6px 0px;">
<h3><b>แบบฟอร์มแจ้งโอนเงิน</b></h3>
</div>

<form action="../slip/" method="post" enctype="multipart/form-data">
<input type="hidden"  name="note" value="" />
              
<div class="modal-body">
<label style="font-weight: bold;text-indent: 20px;">จำนวนเงิน</label>
<div class="form-group">
<input type="text" name="mnnum" class="form-control" maxlength="4" placeholder="ยอดเงินที่โอน ไม่ต้องมีคอมม่า ( , )" required>
</div>

<div class="form-group">
<label style="font-weight: bold;text-indent: 20px;">รหัสบัตรประชาชน 13 หลัก</label>
<input type="text" name="idcd" class="form-control" maxlength="13" required>
</div>

<div class="form-group">
<label style="font-weight: bold;text-indent: 20px;">อัปโหลดรูปภาพสลิปการโอนเงิน ไฟล์ .jpg .png .jpeg และ .pdf เท่านั้น</label>
<input type="file" name="mnslip" required>
</div>
                    
<p style="text-align: center;padding: 12px 0px 0px 0px;">
<button type="submit" name="submit" id="submit" class="btn btn-success">
<img src="../images/down.png" width="20">  บันทึก</button>
<a href="" class="btn btn-warning"><img src="../images/cancel.png" width="20"> ยกเลิก</a>
</p>

</div>

</form>

</div>
</div>
</div>

<!--CLOSE Modal-แจ้งโอนเงิน -->

<!-- Modal -- แจ้งโอนเงินเป็นหมู่คณะ -->
<div class="modal fade" id="add_new_modal_1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
<div class="modal-dialog modal-lg" role="document">
<div class="modal-content">

<div style="text-align: center;padding: 24px 0px 6px 0px;">
<h3><b>แบบฟอร์มแจ้งโอนเงินเป็นหมู่คณะ</b></h3>
</div>

<form action="../slip/" method="post" enctype="multipart/form-data">
              
<div class="modal-body">
<div class="form-group">
<label style="font-weight: bold;text-indent: 20px;">ยอดเงินโอน</label>
<input type="text" name="mnnum" class="form-control" maxlength="6" placeholder="ยอดเงินที่โอน ไม่ต้องมีคอมม่า (,) และจุดทศนิยม (.)" required>
</div>

<div class="form-group">
<label style="font-weight: bold;text-indent: 20px;">ระบุจำนวนคน รายชื่อ ให้ตรงกับยอดเงินรวมที่โอน</label>
<textarea name="note" class="form-control" placeholder="พิมพ์ที่นี่..." rows="5" required></textarea>
</div>

<div class="form-group">
<label style="font-weight: bold;text-indent: 20px;">รหัสบัตรประชาชน 13 หลัก</label>
<input type="text" name="idcd" class="form-control" maxlength="13" required>
</div>

<div class="form-group">
<label style="font-weight: bold;text-indent: 20px;">อัปโหลดรูปภาพสลิปการโอนเงิน ไฟล์ .jpg .png .jpeg และ .pdf เท่านั้น</label>
<input type="file" name="mnslip" required>
</div>
                            
<p style="text-align: center;padding: 12px 0px 0px 0px;">
<button type="submit" name="submit" id="submit" class="btn btn-success">
<img src="../images/down.png" width="20">  บันทึก</button>
<a href="" class="btn btn-warning"><img src="../images/cancel.png" width="20"> ยกเลิก</a>
</p>

</div>

</form>

</div>
</div>
</div>

<!--CLOSE Modal-แจ้งโอนเงินเป็นหมู่คณะ -->

<!-- Modal - เข้าสู่ระบบแก้ไขข้อมูลส่วนตัว -->
<div class="modal fade" id="add_new_modal_2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
<div class="modal-dialog modal-lg" role="document">
<div class="modal-content">

<div style="text-align: center;padding: 24px 0px 6px 0px;">
<h4><b>แบบฟอร์มเข้าสู่ระบบ</b></h4>
</div>

<form action="ck.php" method="post">

<div class="form-group">
<div class="input-group">
<div class="container">
<input type="text" name="idcd" class="form-control" placeholder="ป้อน รหัสบัตรประชาชน 13 หลัก" maxlength="13"  required>
</div>
</div>
</div>

<p style="text-align: center;padding: 12px 0px 0px 0px;">
<button type="submit" name="submit" id="submit" class="btn btn-success">
<img src="../images/accept.png" width="20"> ยืนยัน</button>
<a href="" class="btn btn-warning"><img src="../images/cancel.png" width="20"> ยกเลิก</a>
</p>

</form>
</div>
</div>
</div>

<!--CLOSE Modal-เข้าสู่ระบบแก้ไขข้อมูลส่วนตัว -->