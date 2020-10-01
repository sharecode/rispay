<?php
session_start();

include('../.nav/index.php');

if($_SESSION['aid']=='')
{
echo "<script>window.location='../../admin/'</script>";
}
?>

<div class="row" style="padding: 12px 12px 4px 12px;">

<div class="col-md-12" style="text-align: center;">
<h5><b>Slip หลักฐาน เรียงตามวันที่และเวลาชำระเงิน</b></h5>
</div>

</div>

<div class="row" style="padding: 0px 12px 0px 12px;">
<div class="col-md-12">
<div class="table">

<table id="example" class="table table-striped table-bordered" style="width:100%">

<thead>

<tr>
<th>ลำดับ</th>
<th>ชื่อ - นามสกุล</th>
<th>จำนวนเงิน</th>
<th>วิธีชำระ</th>
<th>วันที่ชำระเงิน</th>
<th>วันที่แจ้ง</th>
<th>หลักฐาน</th>
</tr> 

</thead>

<tbody>

<?php

require '../../db/admin.php';

$object = new CRUD();

$res = $object->Slip();
if (count($res) > 0)
{
$i=1;
foreach ($res as $row)
{

?>

<tr>
<td><?php echo $i;?></td>
<td style="text-align: justify;">
<?php echo $row['pname'];?><?php echo $row['fname'];?> <?php echo $row['lname'];?>
</td>
<td><?php echo $row['mnnum'];?></td>
<td><?php echo $row['mnpass'];?></td>
<td><?php echo substr($row['mndate'],8,2)?> <?php echo $thaimonth[(substr($row['mndate'],5,2)-1)]?> <?php echo (substr($row['mndate'],0,2)+43)?> || เวลา <?php echo $row['mnhour'];?>:<?php echo $row['mnminute'];?> น.</td>
<td><?php echo substr($row['ckmdate'],8,2)?> <?php echo $thaimonth[(substr($row['ckmdate'],5,2)-1)]?> <?php echo (substr($row['ckmdate'],0,2)+43)?> || เวลา <?php echo substr($row['ckmdate'],11,5)?> น.</td>
<td>
<a href="../../slip/img_slip/<?php echo $row['mnslip']; ?>"  class="btn btn-success" target="_blank">สลิป</a>

<?php
if($row['note']!='')
{
?>
<a href="#" class="btn btn-info" data-toggle="modal" data-target="#add_new_modal_note<?php echo $row['mnid']; ?>" data-id="">NOTE</a>
<?php } ?>

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

tr th{
text-align: center;
}

tr td{
text-align: center;
}

</style>

</div>
</div>

<script type="text/javascript">
$(document).ready(function() {
$('#example').DataTable( {
"pageLength": 25,
} );
} );
</script>

<?php
include('../../h_f/h_f/f.html');
?>