<?php

include('../../../h_f/h_f/h.html');

if(isset($_POST['submit'])){
$sid=$_POST['sid'];
$day=trim($_POST['day']);
$hr=trim($_POST['hr']);
$mt=trim($_POST['mt']);
$num=trim($_POST['num']);

require("../../../db/admin.php");

$object=new CRUD();

$object->Updateclose(
$sid,
$day,
$hr,
$mt,
$num
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