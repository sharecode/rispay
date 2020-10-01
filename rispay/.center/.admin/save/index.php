<?php

include('../../../h_f//h_f/h.html');

session_start();
date_default_timezone_set('Asia/Bangkok');

if(isset($_POST['submit'])){
	  	
$apname=trim($_POST['apname']);
$afname=trim($_POST['afname']);
$alname=trim($_POST['alname']);
$uname=trim($_POST['uname']);
$upass=trim($_POST['upass']);
//$h_upass = password_hash($upass, PASSWORD_DEFAULT);
$cls=$_POST['cls'];
$svdate=date("Y-m-d H:i:s");

require("../../../db/admin.php");

$object=new CRUD();

$object->Regisadmin(

$apname,
$afname,
$alname,
$uname,
$upass,
$cls,
$svdate

)
;

echo"<script>
swal({
title: 'บันทึกข้อมูลเรียบร้อยแล้ว',
text: '',
icon: 'success'
}).then(function() {
// Redirect the user
history.back();
console.log('The Ok Button was clicked.');
});
</script>";

}

include('../../../h_f/h_f/f.html');

?>