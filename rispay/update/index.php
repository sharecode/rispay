<?php include('../h_f/h.html');
session_start();
$mid=$_SESSION['mid'];
?>

<img style="display: block;margin: auto;" src="../images/logo.jpg" class="img-fluid" alt="Responsive image">

<div class="row" style="padding: 2px 8px 2px 8px;">
<div class="col-md-9" style="text-align: center;display: block;margin: auto;">
<div style="text-align: justify;padding: 12px 0px 12px 2px;">ลงทะเบียน -> <b>ปุ่มสีน้ำเงิน</b> -> ชำระเงิน <font color="red"><b>1,000 บาท</b></font> เข้าบัญชีธนาคารกรุงไทย "สมาคมศิษย์เก่าวิทยาลัยพยาบาลบรมราชชนนี สรรพสิทธิประสงค์" <font color="red"><b> เลขที่บัญชี 3220602762</b></font><br>โอนเงินแล้ว -> <b>แจ้งโอนเงินปุ่มสีแดง</b> -> อัปโหลดสลิปหลักฐาน || <a href="https://drive.google.com/file/d/1I1uxJT8M7QWKvBOY0a7BEcxE_FTyvRtq/view?usp=sharing" target="_blank"> หนังสือประชาสัมพันธ์</a>  <a href="https://drive.google.com/file/d/1xn16XWma5hfkaga6yWdWXvoI7w86lcAp/view?usp=sharing" target="_blank"> กำหนดการ</a> <!-- <a href="https://drive.google.com/file/d/1s3rQhuzMdvEOGCiXWULGXqzl8xQ7rVyj/view?usp=sharing" target="_blank"> แบบฟอร์มลงทะเบียน</a> ||--> <a href="https://drive.google.com/file/d/1xn16XWma5hfkaga6yWdWXvoI7w86lcAp/view?usp=sharing" target="_blank"> <!--เทมเพลต บทคัดย่อและโปสเตอร์--></a> พบปัญหาลงทะเบียนแจ้ง -> <font color="blue"><b>0825725180</b></font> <!-- -->

</div>

</div>

<div class="col-md-3" style="text-align: center;display: block;margin: auto;">
<div style="text-align: right;padding: 6px 2px 12px 0px;"><a style="padding: 6px 12px 4px 12px;" href="#" class="btn btn-primary" data-toggle="modal" data-target="#add_new_modal_0" data-id=""> + ลงทะเบียน</a> <a style="padding: 6px 12px 4px 12px;" href="#" class="btn btn-danger" data-toggle="modal" data-target="#add_new_modal" data-id=""> + แจ้งโอนเงิน</a>
</div>
</div>
</div>

<div class="row" style="padding: 2px 8px 2px 8px;">
<div class="col-md-2"></div>
<div class="col-md-8">
<table id="example" class="table table-striped table-bordered" style="width:100%">

<thead>

<tr>

<th>No.</th>
<th style="color: red;">ID</th>

<th>ชื่อ - นามสกุล</th> 
<!--<th>หน่วยงาน</th>
<th>วันที่</th>-->
<th>สถานะ</th>

</tr>

</thead>

<tbody>

<?php

require '../db/register.php';

$object = new CRUD();

$res = $object->Rdall();
if (count($res) > 0)
{
$i=1;
foreach ($res as $row)
{

?>

<tr>

<td><?php echo $i;?></td>
<td style="color: red;"><?php echo $row['mid'];?></td>
<td style="text-align: justify;"><?php echo $row['pname'];?><?php echo $row['fname'];?> <?php echo $row['lname'];?></td>

<?php if($row['chk']=='0')
{
echo '<td align="center" style="color:blue;"><b>รอชำระเงิน<b></td>'; 
} 
elseif($row['chk']=='1')
{
echo '<td align="center" style="color:purple;"><b>โอนเงินแล้ว</b></td>'; 
} 
else
{
echo '<td align="center" style="color:red"><b>ชำระเงินแล้ว</b></td>'; 
}
?>

</tr>

<?php $i++; } ?>
</tbody>
<?php } ?>

</table>

</div>
<div class="col-md-2"></div>
</div>

<br>

<p style="text-align: center;"><b>ต้องการแจ้งโอนเงินเป็นหมู่คณะ ->
<a style="padding: 4px 24px 4px 24px;" href="#" class="btn btn-danger" data-toggle="modal" data-target="#add_new_modal_1" data-id=""> คลิก </a> : <b>ต้องแก้ไขข้อมูลส่วนตัว ->
<a style="padding: 4px 24px 4px 24px;" href="#" class="btn btn-warning" data-toggle="modal" data-target="#add_new_modal_2" data-id=""> คลิก </a></b></p>

<p style="text-align: center;"><b>หมายเหตุ :</b> ลำดับการลงทะเบียนจะเปลี่ยนแปลงตามสถานะการลงทะเบียน การแจ้งโอนเงิน การตอบรับชำระเงิน <font color="blue"><b>(ใบเสร็จรับเงิน รับได้ในวันประชุม)</b></font></p>

</div>

<?php $res1 = $object->Ckregis($mid);
if (count($res1) > 0)
{
foreach ($res1 as $row1)
{
?>

<!-- Modal - UPDATE-REGISTER -->
<div class="modal fade" id="add_new_modal_3" tabindex="-1" data-keyboard="false" data-backdrop="static" role="dialog" aria-labelledby="myModalLabel">

<div class="modal-dialog modal-lg" role="document">
<div class="modal-content">

<div style="text-align: center;padding: 24px 0px 12px 0px;">
<h3><b>แบบฟอร์มแก้ไขข้อมูล</b></h3>
</div>

<div class="modal-body">

<form action="success/" method="post">
<input type="hidden"  name="mid" value="<?php echo $mid; ?>" />

<div class="form-group">
<div class="input-group">
<!--<div style="text-align: right;padding: 6px 20px 0px 0px;font-weight: bold;width: 200px;">
คำนำหน้า ->
</div>-->
<select name="pname" class="form-control" required>
<option value="<?php echo $row1['pname'] ?>"><?php echo $row1['pname'] ?></option>
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
<input type="text" name="fname" class="form-control" value="<?php echo $row1['fname']; ?>" required>
</div>
</div>

<div class="form-group">
<div class="input-group">
<!--<div style="text-align: right;padding: 6px 20px 0px 0px;font-weight: bold;width: 200px;">
นามสกุล ->
</div>-->
<input type="text" name="lname" class="form-control" value="<?php echo $row1['lname']; ?>" required>
</div>
</div>

<div class="form-group">
<div class="input-group">
<!--<div style="text-align: right;padding: 6px 20px 0px 0px;font-weight: bold;width: 200px;">
รหัสบัตรประชาชน ->
</div>-->
<input type="text" name="idcd" class="form-control" value="<?php echo $row1['idcd']; ?>" maxlength="13" disabled="" required>
</div>
</div>

<div class="form-group">
<div class="input-group">
<!--<div style="text-align: right;padding: 6px 20px 0px 0px;font-weight: bold;width: 200px;">
หมายเลขโทรศัพท์ ->
</div>-->
<input type="text" name="position" class="form-control" value="<?php echo $row1['position']; ?>" maxlength="10" required>
</div>
</div>

<div class="form-group">
<div class="input-group">
<!--<div style="text-align: right;padding: 6px 20px 0px 0px;font-weight: bold;width: 200px;">
หมายเลขโทรศัพท์ ->
</div>-->
<input type="text" name="tel" class="form-control" value="<?php echo $row1['tel']; ?>" maxlength="10" required>
</div>
</div>

<div class="form-group">
<div class="input-group">
<!--<div style="text-align: right;padding: 6px 20px 0px 0px;font-weight: bold;width: 200px;">
สังกัด (หน่วยงาน) ->
</div>-->
<input type="text" name="dep" class="form-control" value="<?php echo $row1['dep']; ?>" required>
</div>
</div>

<div class="form-group">
<div class="input-group">
<select name="prv" class="form-control" required>
<option value="<?php echo $row1['prv'] ?>"><?php echo $row1['prv'] ?></option>
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

<div style="text-align: center;color: blue;">
<h6><b>ก่อนบันทึกข้อมูล กรุณาตรวจสอบ ชื่อ - นามสกุล ให้ถูกต้อง เพื่อออกใบเสร็จและจัดทำใบเกียรติบัตร</b></h6>
</div>



<div class="modal-footer" style="text-align: center;display: block;margin: auto;">
<p style="text-align: center;padding: 2px 0px 0px 0px;">
<button type="submit" name="submit" id="submit" class="btn btn-success">
<img src="../images/down.png" width="20">  บันทึก</button>
<a href="cklogout.php" class="btn btn-warning"><img src="../images/cancel.png" width="20"> ยกเลิก</a>
</p>
</div>


</form>

</div>
                           
</div>
</div>
</div>

<?php } ?>
<?php } ?>
<!--CLOSE Modal UPDATE-REGISTER -->

<script type="text/javascript">

$(document).ready(function(){
$('#add_new_modal_3').modal('show','backdrop:static')
});


</script>

<style type="text/css">

tr th{
text-align: center;
}
tr td{
text-align: center;
}

</style>

<script type="text/javascript">
$(document).ready(function() {
$('#example').DataTable( {
"pageLength": 25,
} );
} );
</script>

<?php
include('../h_f/f.html');
?>