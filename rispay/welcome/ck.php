<?php

include('../h_f/h.html');

session_start();

if(isset($_POST['submit'])){

$idcd=$_POST['idcd'];
	  	
require("../db/register.php");

$object=new CRUD();

$res=$object->Login($idcd);
if (count($res) > 0) {
foreach ($res as $row) {
$_SESSION['mid']=$row['mid'];
$_SESSION['name']=$row['fname'].' '.$row['lname'];
echo "<script type='text/javascript'>";
//echo "window.location='../gauge/check.php';";
echo "window.location='../update/';";
echo "</script>";
}
}
else
{
echo"<script>
swal({
title: 'รหัสบัตรประชาชนไม่ถูกต้อง!',
text: 'ตรวจสอบรหัสบัตรประชาชน',
icon: 'warning'
}).then(function() {
// Redirect the user
history.back();
console.log('The Ok Button was clicked.');
});
</script>";
}
}

include('../h_f/f.html'); 
?>