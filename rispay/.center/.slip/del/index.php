<?php

include('../../../h_f/h_f/h.html');

if(isset($_POST['submit'])){

$mnid=$_POST['mnid'];
$idcd=$_POST['idcd'];

require("../../../db/admin.php");

$object=new CRUD();
	
$object->Delslip(
$mnid
)
;

$upd=$object->UPnewslip($idcd);

echo"<script>
swal({
title: 'ลบข้อมูลเรียบร้อยแล้ว',
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