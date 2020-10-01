<?php

include('../../../h_f/h_f/h.html');

if(isset($_POST['submit'])){
$mid=$_POST['mid'];
$pname=$_POST['pname'];
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$idcd=$_POST['idcd'];
$tel=$_POST['tel'];
$dep=$_POST['dep'];
$position=$_POST['position'];
$prv=$_POST['prv'];
$chk=$_POST['chk'];

require("../../../db/admin.php");

$object=new CRUD();

$object->Updateregister(
$mid,
$pname,
$fname,
$lname,
$idcd,
$tel,
$dep,
$position,
$prv,
$chk
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