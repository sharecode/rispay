<?php

include('../h_f/h.html');

session_start();

require("../db/admin.php");

$uname=$_POST['uname'];
$upass=$_POST['upass'];

$object=new CRUD();

$res=$object->Login($uname,$upass);
if(count($res)>0){
foreach($res as $row){
if($row['cls']==1)
{
$_SESSION['aid']=$row['aid'];
$_SESSION['cls']=$row['cls'];
$_SESSION['aname']=$row['afname'].' '.$row['alname'];
echo "<script type='text/javascript'>";
echo "window.location='../.center/.main/';";
echo "</script>";
}
elseif($row['cls']==2)
{
$_SESSION['aid']=$row['aid'];
$_SESSION['cls']=$row['cls'];
$_SESSION['aname']=$row['afname'].' '.$row['alname'];
echo "<script type='text/javascript'>";
echo "window.location='../.cashier/.main/';";
echo "</script>";
}
}
}
else
{
echo"<script>
swal({
title: 'ชื่อผู้ใช้งานหรือรหัสผ่านไม่ถูกต้อง!',
text: 'ตรวจสอบ username / password',
icon: 'warning'
}).then(function() {
// Redirect the user
history.back();
console.log('The Ok Button was clicked.');
});
</script>";
}

include('../h_f/f.html');

?>