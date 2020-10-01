<?php
session_start();

include('../.nav/index.php');

if($_SESSION['aid']=='')
{
echo "<script>window.location='../../admin/'</script>";
}
?>


<div class="row" style="padding: 12px 12px 4px 12px;">

<div class="col-md-3"></div>

<div class="col-md-6" style="text-align: center;">
<h5><b>รายชื่อลงทะเบียน</b></h5>
</div>

<div class="col-md-3" style="text-align: right;">
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
<th>หน่วยงาน</th>
<th>จังหวัด</th>
<th>วันที่</th>
<th>สถานะ</th>
<th>ดำเนินการ</th>
</tr> 

</thead>

<tbody>

<?php

require '../../db/admin.php';

$object = new CRUD();

$res = $object->Rdall();
if (count($res) > 0)
{
$i=1;
foreach ($res as $row)
{

?>

<tr>
<td style="text-align: center;"><?php echo $i;?></td>
<td><?php echo $row['pname'];?><?php echo $row['fname'];?> <?php echo $row['lname'];?></td>
<td><?php echo $row['dep'];?></td>
<td><?php echo $row['prv'];?></td>
<td><?php echo substr($row['svd'],8,2)?> <?php echo $thaimonth[(substr($row['svd'],5,2)-1)]?> <?php echo (substr($row['svd'],0,2)+43)?> || เวลา <?php echo substr($row['svd'],11,9)?> น.</td>
<?php if($row['chk']=='0')
{
echo '<td align="center" style="color:blue;"><b>รอชำระเงิน<b></td>'; 
} 
elseif($row['chk']=='1')
{
echo '<td align="center" style="color:purple;"><b>โอนเงินแล้ว</b></td>'; 
} 
else
{
echo '<td align="center" style="color:red"><b>ชำระเงินแล้ว</b></td>'; 
}
?>

<td style="text-align: center;">

<a href="#" class="btn btn-warning" data-toggle="modal" data-target="#add_new_modal_update<?php echo $row['mid']; ?>" data-id=""><img src="../../images/upd.png" width="24"></a>

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
text-align: justify;
}

</style>

</div>
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

include('../../h_f/f.html');

?>