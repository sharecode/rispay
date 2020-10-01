<?php

include('../h_f/h.html');

session_start();
date_default_timezone_set('Asia/Bangkok');

if(isset($_POST['submit'])){
	  	
$pname=trim($_POST['pname']);

//**********check thai name
$valid_form_fname = false;
$ckth_fname = (isset($_POST['fname']) && $_POST['fname']!="")?trim($_POST['fname']):NULL;
$charth_fname = "/^[ก-๙,เ\s]+$/";
if(!is_null($ckth_fname) && preg_match($charth_fname,$ckth_fname))
{
$valid_form_fname = true;
}
else
{
echo"<script>
swal({
title: 'ชื่อ ต้องเป็นอักขระภาษาไทยเท่านั้น!',
text: 'ตรวจสอบการป้อนข้อมูล',
icon: 'warning'
}).then(function() {
// Redirect the user
history.back();
console.log('The Ok Button was clicked.');
});
</script>";
exit();
}

$valid_form_lname = false;
$ckth_lname = (isset($_POST['lname']) && $_POST['lname']!="")?trim($_POST['lname']):NULL;
$charth_lname = "/^[ก-๙,เ\s]+$/";
if(!is_null($ckth_lname) && preg_match($charth_lname,$ckth_lname))
{
$valid_form_lname = true;
}
else
{
echo"<script>
swal({
title: 'นามสกุล ต้องเป็นอักขระภาษาไทยเท่านั้น!',
text: 'ตรวจสอบการป้อนข้อมูล',
icon: 'warning'
}).then(function() {
// Redirect the user
history.back();
console.log('The Ok Button was clicked.');
});
</script>";
exit();
}

//*check รหัสบัตรประชาชน
$valid_form_idcd = false;
$ckth_idcd = (isset($_POST['idcd']) && $_POST['idcd']!="")?trim($_POST['idcd']):NULL;
$charth_idcd = "/^[0-9\s]+$/";
if(!is_null($ckth_idcd) && preg_match($charth_idcd,$ckth_idcd))
{
$valid_form_idcd = true;
}
else
{
echo"<script>
swal({
title: 'รหัสบัตรประชาชน ต้องเป็นตัวเลขอารบิคเท่านั้น!',
text: 'ตรวจสอบการป้อนข้อมูล',
icon: 'warning'
}).then(function() {
// Redirect the user
history.back();
console.log('The Ok Button was clicked.');
});
</script>";
exit();
}

$ckth_idcd_num=strlen($_POST['idcd']);
if(strlen($ckth_idcd_num!=13))
{
echo"<script>
swal({
title: 'ป้อนรหัสบัตรประชาชนไม่ครบ 13 หลัก!',
text: 'ตรวจสอบการป้อนข้อมูล',
icon: 'warning'
}).then(function() {
// Redirect the user
history.back();
console.log('The Ok Button was clicked.');
});
</script>";
exit();
}

$idcd_=trim($_POST['idcd_']);

if($idcd_!=$ckth_idcd)
{
echo"<script>
swal({
title: 'รหัสบัตรประชาชนไม่ตรงกัน!',
text: 'ตรวจสอบข้อมูลบัตรให้ตรงกันทั้งสองช่อง',
icon: 'warning'
}).then(function() {
// Redirect the user
history.back();
console.log('The Ok Button was clicked.');
});
</script>";
exit();
}

//check หมายเลขโทรศัพท์
$valid_form_tel = false;
$ckth_tel = (isset($_POST['tel']) && $_POST['tel']!="")?trim($_POST['tel']):NULL;
$charth_tel = "/^[0-9\s]+$/";
if(!is_null($ckth_tel) && preg_match($charth_tel,$ckth_tel))
{
$valid_form_tel = true;
}
else
{
echo"<script>
swal({
title: 'หมายเลขโทรศัพท์ ต้องเป็นตัวเลขอารบิคเท่านั้น!',
text: 'ตรวจสอบการป้อนข้อมูล',
icon: 'warning'
}).then(function() {
// Redirect the user
history.back();
console.log('The Ok Button was clicked.');
});
</script>";
exit();
}

$ckth_tel_num=strlen($_POST['tel']);
if(strlen($ckth_tel_num!=10))
{
echo"<script>
swal({
title: 'ป้อนหมายเลขโทรศัพท์ไม่ครบ 10 หลัก!',
text: 'ตรวจสอบการป้อนข้อมูล',
icon: 'warning'
}).then(function() {
// Redirect the user
history.back();
console.log('The Ok Button was clicked.');
});
</script>";
exit();
}
	
$dep=trim($_POST['dep']);
$position=trim($_POST['position']);
$prv=trim($_POST['prv']);
$ip=$_SERVER["REMOTE_ADDR"];
$svd=date("Y-m-d H:i:s");

require("../db/register.php");

$object=new CRUD();

$ck=$object->Ckidcd($ckth_idcd);

if(count($ck)!=''){
echo"<script>
swal({
title: 'ไม่สามารถบันทึกข้อมูลได้ เนื่องจากท่านได้ลงทะเบียนไปแล้ว!',
text: 'ตรวจสอบหมายเลขบัตรประชาชนที่ลงทะเบียน',
icon: 'warning'
}).then(function() {
// Redirect the user
history.back();
console.log('The Ok Button was clicked.');
});
</script>";
exit();
}

else

{

$object->Regis(

$pname,
$ckth_fname,
$ckth_lname,
$ckth_idcd,
$ckth_tel,
$dep,
$position,
$prv,
$ip,
$svd

)
;

echo"<script>window.location='line/';</script>";

}

}
include('../h_f/f.html');
?>