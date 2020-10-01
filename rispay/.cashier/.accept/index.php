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
<h5><b>ตอบรับชำระเงิน</b></h5>
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
<!--<th>เลขบัตร</th>
<th>จำนวนเงิน</th>-->
<th>หลักฐาน</th>
<th>ดำเนินการ</th>
</tr>

</thead>

<tbody>

<?php

require '../../db/admin.php';

$object = new CRUD();

$res = $object->Rdslip();
if (count($res) > 0)
{
$i=1;
foreach ($res as $row)
{

?>

<tr>
<td><?php echo $i;?></td>
<td>
<?php echo $row['pname'];?><?php echo $row['fname'];?> <?php echo $row['lname'];?>
</td>
<!--<td><?php echo $row['idcd'];?></td>
<td><?php echo $row['mnnum'];?></td>-->
<!--<td><a href="../../slip/img_slip/<?php echo $row['mnslip']; ?>"  class="btn btn-info" target="_blank"> สลิป</a></td>-->
<td><img src="../../slip/img_slip/<?php echo $row['mnslip']; ?>" class="img-fluid" alt="Responsive image"></td>
<td>


<a href="#" class="btn btn-warning" data-toggle="modal" data-target="#add_new_modal_update<?php echo $row['mnid']; ?>" data-id=""><img src="../../images/accept.png" width="24"></a>
<a href="#" class="btn btn-danger" data-toggle="modal" data-target="#add_new_modal_del<?php echo $row['mnid']; ?>" data-id=""><img src="../../images/Del.png" width="24"></a>

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
background: #fef9f9;
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
</div>

<script>
$( function() {
$( "#jQueryUICalendar1" ).datepicker({
dateFormat: "yy-mm-dd",
changeMonth: true,
changeYear: true,
yearRange: "2020:2060",
maxDate:0,
/*minDate:1,*/
});
} );
</script>

<script type="text/javascript">
$(document).ready(function() {
$('#example').DataTable( {
"pageLength": 25,
} );
} );
</script>

<?php
include('../../h_f/f.html');
?>