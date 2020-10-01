<?php

include('../../../h_f/h_f/h.html');

if(isset($_POST['submit'])){
$aid=$_POST['aid'];
$apname=trim($_POST['apname']);
$afname=trim($_POST['afname']);
$alname=trim($_POST['alname']);
$uname=trim($_POST['uname']);
$upass=trim($_POST['upass']);
$cls=$_POST['cls'];

require("../../../db/admin.php");

$object=new CRUD();

$object->Updateadmin(
$aid,
$apname,
$afname,
$alname,
$uname,
$upass,
$cls
)
;

echo"<script>
swal({
title: 'อัปเดทข้อมูลเรียบร้อยแล้ว',
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