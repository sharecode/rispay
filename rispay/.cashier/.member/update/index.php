<?php

include('../../../h_f/h_f/h.html');

if(isset($_POST['submit'])){
$mid=$_POST['mid'];
$chk=$_POST['chk'];

require("../../../db/admin.php");

$object=new CRUD();

$object->Updatestatus(
$mid,
$chk
)
;
echo"<script>
swal({
title: 'อัปเดทข้อมูลสำเร็จ',
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