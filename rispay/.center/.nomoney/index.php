<?php
session_start();

include('../../nav/nav/index.php');

if($_SESSION['aid']=='' OR $_SESSION['cls']!=1)
{
echo "<script>window.location='../../admin/'</script>";
}
?>

<div class="row" style="padding: 12px 12px 4px 12px;">

<div class="col-md-12" style="text-align: center;">
<h5><b>รายชื่อรอชำระเงิน เรียงตามอักษร</b></h5>
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
<th>เลขบัตร</th>
<th>ตำแหน่ง</th>
<th>หน่วยงาน</th>
<th>โทรศัพท์</th>
<th>จังหวัด</th>
<th>สถานะ</th>
</tr> 

</thead>

<tbody>

<?php

require '../../db/admin.php';

$object = new CRUD();

$res = $object->Nomoney();
if (count($res) > 0)
{
$i=1;
foreach ($res as $row)
{

?>

<tr>
<td style="text-align: center;"><?php echo $i;?></td>
<td><?php echo $row['pname'];?><?php echo $row['fname'];?> <?php echo $row['lname'];?></td>
<td><?php echo $row['idcd'];?></td>
<td><?php echo $row['position'];?></td>
<td><?php echo $row['dep'];?></td>
<td><?php echo $row['tel'];?></td>
<td><?php echo $row['prv'];?></td>
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


</tr> 

<?php $i++; } ?>
</tbody>
<?php } ?>

</table>

<style type="text/css">

body{
background: #fcfcf2;
}
tr th{
text-align: center;
}

tr td{
text-align: justify;
}

</style>

<script type="text/javascript">
$(document).ready(function() {
    var table = $('#example').DataTable( {
    	"pageLength": 25,
        lengthChange: false,
        buttons: [ 'copy', 'excel' ]
    } );
 
    table.buttons().container()
        .appendTo( '#example_wrapper .col-md-6:eq(0)' );
} );
</script>

</div>
</div>

<?php
include('../../h_f/h_f/f.html');
?>