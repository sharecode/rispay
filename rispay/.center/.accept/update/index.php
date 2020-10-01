<?php

include('../../../h_f/h_f/h.html');

if(isset($_POST['submit'])){

$mnid=$_POST['mnid'];
$idcd=$_POST['idcd'];
$mnnum=$_POST['mnnum'];
$mnpass=$_POST['mnpass'];
$mndate=$_POST['mndate'];
$mnhour=$_POST['mnhour'];
$mnminute=$_POST['mnminute'];
$note=$_POST['note'];

require("../../../db/admin.php");

$object=new CRUD();

$object->Updatetransfer(
$mnid,
$mnnum,
$mnpass,
$mndate,
$mnhour,
$mnminute,
$note
)
;

$upd=$object->UPtran($idcd);

echo"<script>
swal({
title: 'อัปเดทข้อมูลการแจ้งโอนเงินเรียบร้อย',
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