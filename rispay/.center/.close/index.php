<?php
session_start();

include('../../nav/nav/index.php');

if($_SESSION['aid']=='' OR $_SESSION['cls']!=1)
{
echo "<script>window.location='../../admin/'</script>";
}
?>

<div class="row" style="padding: 32px 12px 4px 12px;">

<div class="col-md-3"></div>

<div class="col-md-6" style="text-align: center;">
<h5><b>กำหนดปิดระบบลงทะเบียน</b></h5>
</div>

</div>

<div class="row" style="padding: 0px 12px 0px 12px;">
<div class="col-md-4"></div>
<div class="col-md-4">
<div class="table">

<table id="" class="table table-striped table-bordered" style="width:100%">

<thead>

<tr>
<th>วันที่ปิดระบบ</th>
<th>จำนวนที่รับ</th>
<th>ดำเนินการ</th>
</tr> 

</thead>

<tbody>

<?php

require '../../db/admin.php';

$object = new CRUD();

$res = $object->Rdsetup();
if (count($res) > 0)
{
$i=1;
foreach ($res as $row)
{

?>

<tr>
<td><?php echo substr($row['day'],8,2)?> <?php echo $thaimonth[(substr($row['day'],5,2)-1)]?> <?php echo (substr($row['day'],0,2)+43)?> || เวลา <?php echo $row['hr'] ?> : <?php echo $row['mt'] ?> น.</td>
<td><?php echo $row['num'];?> คน</td>

<td style="text-align: center;">

<a href="#" class="btn btn-warning" data-toggle="modal" data-target="#add_new_modal_update<?php echo $row['sid']; ?>" data-id=""><img src="../../images/upd.png" width="24"></a>


<?php
include('modal.php');
?>

</td>

</tr> 

<?php $i++; } ?>
</tbody>
<?php } ?>

</table>

<style type="text/css">

body{
background: #ffffff;
}
tr th{
text-align: center;
}

tr td{
text-align: center;
}

</style>

</div>
</div>
<div class="col-md-4"></div>
</div>

<script>
$( function() {
$( "#datepicker" ).datepicker({
dateFormat: "yy-mm-dd",
changeMonth: true,
changeYear: true,
yearRange: "2020:2060",
/*maxDate:0,*/
minDate:1,
});
} );
</script>

<?php

include('../../h_f/h_f/f.html');

?>