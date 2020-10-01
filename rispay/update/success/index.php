<?php

include('../../h_f/h.html');

if(isset($_POST['submit'])){
$mid=$_POST['mid'];
$pname=$_POST['pname'];
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$tel=$_POST['tel'];
$dep=$_POST['dep'];
$position=$_POST['position'];
$prv=$_POST['prv'];


require("../../db/register.php");

$object=new CRUD();

$object->Updateregister(
$mid,
$pname,
$fname,
$lname,
$tel,
$dep,
$position,
$prv
)
;
echo"<script>
swal({
title: 'แก้ไขข้อมูลสำเร็จ',
text: '',
icon: 'success'
}).then(function() {
// Redirect the user
window.location='../cklogout.php';
console.log('The Ok Button was clicked.');
});
</script>";

}

include('../../h_f/f.html');

?>