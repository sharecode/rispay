<?php

include('../h_f/h.html');

if(isset($_POST['submit'])){

require '../db/slip.php';

$object=new CRUD();

//*ckeck ยอดเงินโอน
$valid_form_mnnum = false;
$ckth_mnnum = (isset($_POST['mnnum']) && $_POST['mnnum']!="")?trim($_POST['mnnum']):NULL;
$charth_mnnum = "/^[0-9\s]+$/";
if(!is_null($ckth_mnnum) && preg_match($charth_mnnum,$ckth_mnnum))
{
$valid_form_mnnum = true;
}
else
{
echo"<script>
swal({
title: 'ยอดเงินโอนต้องเป็นตัวเลขอารบิคเท่านั้น ไม่ต้องใส่เครื่องหมายคอมม่า , หรือจุดทศนิยม . !',
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


//slip
$date1 = date("Ymd_his");
$numrand = (mt_rand());
$mnslip = (isset($_REQUEST['mnslip']) ? $_REQUEST['mnslip'] : '');
$upload=$_FILES['mnslip'];
$path="img_slip/";
$type = strrchr($_FILES['mnslip']['name'],".");
$newname =$numrand.$date1.$type;
$path_copy=$path.$newname;
$path_link="img_slip/".$newname;

$mnip=$_SERVER["REMOTE_ADDR"];
  
$ckmdate = date("Y-m-d H:i:s");

$size=$_FILES['mnslip']['size'];
if($size>2000000)
{
echo"<script>
swal({
title: 'ไฟล์สลิปใหญ่เกินขนาดที่กำหนด!',
text: 'ตรวจสอบขนาดไฟล์',
icon: 'warning'
}).then(function() {
// Redirect the user
history.back();
console.log('The Ok Button was clicked.');
});
</script>";
exit();
}
elseif(($type!=".png")AND($type!=".jpg")AND($type!=".jpeg")AND($type!=".pdf")AND($type!=".PNG")AND($type!=".JPG")AND($type!=".JPEG")AND($type!=".PDF")AND($type!=".Png")AND($type!=".Jpg")AND($type!=".Jpeg")AND($type!=".Pdf")){
echo"<script>
swal({
title: 'หลักฐานการโอนเงิน อัปโหลดได้เฉพาะไฟล์ png, jpg, jpeg และ pdf เท่านั้น!',
text: 'ตรวจสอบประเภทของไฟล์',
icon: 'warning'
}).then(function() {
// Redirect the user
history.back();
console.log('The Ok Button was clicked.');
});
</script>";
exit();
}

$idcd=trim($_POST['idcd']);
      
$ck=$object->Ckidcd($idcd);

if(count($ck)==''){
echo"<script>
swal({
title: 'ไม่สามารถแจ้งโอนเงินได้ เนื่องจากท่านยังไม่ลงทะเบียน! หรือรหัสบัตรประชาชนไม่ถูกต้อง',
text: 'ตรวจสอบรหัสบัตรประชาชนให้ครบ 13 หลัก',
icon: 'warning'
}).then(function() {
// Redirect the user
history.back();
console.log('The Ok Button was clicked.');
});
</script>";
exit();
}

$ckm=$object->Ckmon($idcd);

if(count($ckm)!=''){
echo"<script>
swal({
title: 'ไม่สามารถบันทึกข้อมูลได้ เนื่องจากท่านได้แจ้งโอนเงินไปแล้ว!',
text: 'ตรวจสอบรหัสบัตรประชาชน',
icon: 'warning'
}).then(function() {
// Redirect the user
history.back();
console.log('The Ok Button was clicked.');
});
</script>";
exit();
}

$mnpass='';
$mndate='';
$mnhour='';
$mnminute='';
$note=trim($_POST['note']);

$object->Tran(
$ckth_mnnum,
$mnpass,
$mndate,
$mnhour,
$mnminute,
$newname,
$idcd,
$note,
$mnip,
$ckmdate
)
;

$upd=$object->UPtran($idcd);

move_uploaded_file($_FILES['mnslip']['tmp_name'],$path_copy);

echo"<script>window.location='line/';</script>";

}
include('../h_f/f.html');
?>