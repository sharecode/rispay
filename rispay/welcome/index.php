<?php include('../h_f/h.html');

require '../db/register.php';

$dt=date("Y-m-d H:i:s");

$object = new CRUD();

$res = $object->Rdsetup();
if (count($res) > 0)
{foreach ($res as $row)

$resnum = $object->Rdall();
if (count($resnum)>=$row['num'] || $dt >=$row['day'].' '.$row['hr'].':'.$row['mt']) 
{?>

<!--**************************************************-->

<img style="display: block;margin: auto;" src="../images/logo.jpg" class="img-fluid" alt="Responsive image">

<div class="row" style="padding: 2px 8px 2px 8px;">

<div class="col-md-9" style="text-align: center;display: block;margin: auto;">
<div style="text-align: justify;padding: 12px 0px 12px 2px;"><p>ลงทะเบียน -> <b>ปุ่มสีน้ำเงิน</b> -> ชำระเงิน <font color="red"><b>1,000 บาท</b></font> เข้าบัญชีธนาคาร"**********" <font color="red"><b> เลขที่บัญชี **********</b></font></p>
<p>โอนเงินแล้ว -> <b>แจ้งโอนเงินปุ่มสีแดง</b> -> อัปโหลดสลิป || <b>Link -></b> <a href="#" target="_blank"> หนังสือประชาสัมพันธ์</a> <a href="#" target="_blank"> โปสเตอร์ปชส.</a> <a href="#" target="_blank"> กำหนดการ</a> <a href="#" target="_blank"> แผนที่</a>  || <b>โทร.**********</b></p>
</div>
</div>

<div class="col-md-3" style="text-align: center;display: block;margin: auto;">
<div style="text-align: right;padding: 6px 2px 12px 0px;"><!--<a style="padding: 6px 12px 4px 12px;" href="#" class="btn btn-primary" data-toggle="modal" data-target="#add_new_modal_0" data-id=""> + ลงทะเบียน</a>--> <a style="padding: 6px 12px 4px 12px;" href="#" class="btn btn-danger" data-toggle="modal" data-target="#add_new_modal" data-id=""> + แจ้งโอนเงิน</a>
</div>
</div>
</div>

<div class="row" style="padding: 2px 8px 2px 8px;">
<div class="col-md-2"></div>
<div class="col-md-8">
<h5 style="text-align: center;"><b><font color="red">ปิดรับลงทะเบียน</font></b> <font color="blue">ผู้ลงทะเบียน สถานะรอชำระเงิน แจ้งชำระเงินได้ปกติหรือชำระที่หน้างาน</font></h5>
</div>
<div class="col-md-2"></div>
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
<th>สถานะ</th>
</tr>

</thead>

<tbody>

<?php

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

<div class="row" style="padding: 24px 8px 2px 8px;">
<div class="col-md-2"></div>

<div class="col-md-8">
<p style="text-align: center;"><b>หมายเหตุ :</b> ลำดับการลงทะเบียนจะเปลี่ยนแปลงตามสถานะการลงทะเบียน การแจ้งโอนเงิน การตอบรับชำระเงิน <font color="blue"><b>(ใบเสร็จรับเงิน รับได้ในวันประชุม)</b></font></p>
</div>

<div class="col-md-2"></div>

</div>

<div class="row" style="padding: 2px 8px 2px 8px;">

<div class="col-md-9" style="text-align: center;display: block;margin: auto;">
<!--<div style="text-align: justify;padding: 12px 0px 12px 2px;"><p>แจ้งโอนเงินเป็นกลุ่ม -> <b>ปุ่มสีฟ้า</b> -> <b>ยอดเงินรวม+รายชื่อที่ลงทะเบียนไว้ในระบบ</b> -> เข้าบัญชีธนาคารกรุงไทย <font color="red"><b>**********</b></font> -> อัปโหลดสลิปหลักฐาน</p>
<p>หากพบว่า ชื่อ-นามสกุล ที่ลงทะเบียนสะกดไม่ถูกต้อง แก้ไขข้อมูล -> <b>ปุ่มสีเหลือง</b> -> เข้าระบบโดยใช้รหัสบัตรประชาชน</p>
</div>
-->
</div>

<div class="col-md-3" style="text-align: center;display: block;margin: auto;">
<div style="text-align: right;padding: 6px 2px 12px 0px;"><!--<a style="padding: 6px 12px 4px 12px;" href="#" class="btn btn-info" data-toggle="modal" data-target="#add_new_modal_1" data-id="">โอนเงินเป็นกลุ่ม</a>--> <a style="padding: 6px 12px 4px 12px;" href="#" class="btn btn-warning" data-toggle="modal" data-target="#add_new_modal_2" data-id="">แก้ไขข้อมูล</a>
</div>
</div>

</div>

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
include('modal.php');
include('../h_f/f.html');
?>

<?php } 
else
{
?>

<img style="display: block;margin: auto;" src="../images/logo.jpg" class="img-fluid" alt="Responsive image">

<div class="row" style="padding: 2px 8px 2px 8px;">

<div class="col-md-9" style="text-align: center;display: block;margin: auto;">
<div style="text-align: justify;padding: 12px 0px 12px 2px;"><p>ลงทะเบียน -> <b>ปุ่มสีน้ำเงิน</b> -> ชำระเงิน <font color="red"><b>1,000 บาท</b></font> เข้าบัญชีธนาคาร"**********" <font color="red"><b> เลขที่บัญชี **********</b></font></p>
<p>โอนเงินแล้ว -> <b>แจ้งโอนเงินปุ่มสีแดง</b> -> อัปโหลดสลิป || <b>Link -></b> <a href="#" target="_blank"> หนังสือประชาสัมพันธ์</a> <a href="#" target="_blank"> โปสเตอร์ปชส.</a> <a href="#" target="_blank"> กำหนดการ</a> <a href="#" target="_blank"> แผนที่</a>  || <b>โทร.**********</b></p>
</div>
</div>

<div class="col-md-3" style="text-align: center;display: block;margin: auto;">
<div style="text-align: right;padding: 6px 2px 12px 0px;"><a style="padding: 6px 12px 4px 12px;" href="#" class="btn btn-primary" data-toggle="modal" data-target="#add_new_modal_0" data-id=""> + ลงทะเบียน</a> <a style="padding: 6px 12px 4px 12px;" href="#" class="btn btn-danger" data-toggle="modal" data-target="#add_new_modal" data-id=""> + แจ้งโอนเงิน</a>
</div>
</div>
</div>
<!--
<div class="row" style="padding: 2px 8px 2px 8px;">
<div class="col-md-2"></div>
<div class="col-md-8">
<h5 style="text-align: center;"><font color="red"><b>ปิดรับลงทะเบียนอัตโนมัติ</b></font> <font color="blue">จำนวน 100 คน หรือ ในวันพุธที่ 30 กันยายน 2563 เวลา 13.00 น.</font></h5>
</div>
<div class="col-md-2"></div>
</div>
-->
<div class="row" style="padding: 2px 8px 2px 8px;">
<div class="col-md-2"></div>
<div class="col-md-8">
<table id="example" class="table table-striped table-bordered" style="width:100%">

<thead>

<tr>
<th>No.</th>
<th style="color: red;">ID</th>
<th>ชื่อ - นามสกุล</th> 
<th>สถานะ</th>
</tr>

</thead>

<tbody>

<?php

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

<div class="row" style="padding: 24px 8px 2px 8px;">
<div class="col-md-2"></div>

<div class="col-md-8">
<p style="text-align: center;"><b>หมายเหตุ :</b> ลำดับการลงทะเบียนจะเปลี่ยนแปลงตามสถานะการลงทะเบียน การแจ้งโอนเงิน การตอบรับชำระเงิน <font color="blue"><b>(ใบเสร็จรับเงิน รับได้ในวันประชุม)</b></font></p>
</div>

<div class="col-md-2"></div>

</div>

<div class="row" style="padding: 2px 8px 2px 8px;">

<div class="col-md-9" style="text-align: center;display: block;margin: auto;">
<!--<div style="text-align: justify;padding: 12px 0px 12px 2px;"><p>แจ้งโอนเงินเป็นกลุ่ม -> <b>ปุ่มสีฟ้า</b> -> <b>ยอดเงินรวม+รายชื่อที่ลงทะเบียนไว้ในระบบ</b> -> เข้าบัญชีธนาคารกรุงไทย <font color="red"><b>**********</b></font> -> อัปโหลดสลิปหลักฐาน</p>
<p>หากพบว่า ชื่อ-นามสกุล ที่ลงทะเบียนสะกดไม่ถูกต้อง แก้ไขข้อมูล -> <b>ปุ่มสีเหลือง</b> -> เข้าระบบโดยใช้รหัสบัตรประชาชน</p>
</div>
-->

</div>

<div class="col-md-3" style="text-align: center;display: block;margin: auto;">
<div style="text-align: right;padding: 6px 2px 12px 0px;"><a style="padding: 6px 12px 4px 12px;" href="#" class="btn btn-info" data-toggle="modal" data-target="#add_new_modal_1" data-id="">โอนเงินเป็นกลุ่ม</a> <a style="padding: 6px 12px 4px 12px;" href="#" class="btn btn-warning" data-toggle="modal" data-target="#add_new_modal_2" data-id="">แก้ไขข้อมูล</a>
</div>
</div>

</div>

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
include('modal.php');
include('../h_f/f.html');
?>

<?php } ?>
<?php } ?>