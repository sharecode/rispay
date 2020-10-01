<?php include('../h_f/h.html'); ?>

<p><img style="display: block;margin: auto;" src="../images/logo.jpg" class="img-fluid" alt="Responsive image"></p>

<div class="row" style="padding: 2px 8px 2px 8px;">

<div class="col-md-12" style="text-align: center;display: block;margin: auto;">
<div style="text-align: center;padding: 6px 0px 6px 0px;"><a style="padding: 6px 24px 6px 24px;font-size: 18px;" href="#" class="btn btn-success" data-toggle="modal" data-target="#add_new_modal_admin" data-id=""><img src="../images/login.png" width="24"> เข้าสู่ระบบ</a>
</div>
</div>
</div>

<div class="row" style="padding: 2px 8px 2px 8px;">
<div class="col-md-2"></div>
<div class="col-md-8">
<table id="example" class="table table-striped table-bordered" style="width:100%">

<thead>

<tr>

<th>No.</th>
<th style="color: red;">ID</th>

<th>ชื่อ - นามสกุล</th> 
<!--<th>หน่วยงาน</th>
<th>วันที่</th>-->
<th>สถานะ</th>

</tr>

</thead>

<tbody>

<?php

require '../db/register.php';

$object = new CRUD();

$res = $object->Rdall();
if (count($res) > 0)
{
$i=1;
foreach ($res as $row)
{

?>

<tr>

<td><?php echo $i;?></td>
<td style="color: red;"><?php echo $row['mid'];?></td>
<td style="text-align: justify;"><?php echo $row['pname'];?><?php echo $row['fname'];?> <?php echo $row['lname'];?></td>

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

</div>
<div class="col-md-2"></div>
</div>

<!-- Modal - ADMIN -->
<div class="row">
<div class="col-md-4"></div>

<div class="col-md-4">
<div class="modal fade" id="add_new_modal_admin" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
<div class="modal-dialog modal-lg" role="document">

<div class="modal-content">
<div class="row" style="padding: 50px 50px 50px 50px;">
<div class="col-md-12">

<h4 style="text-align: center;padding: 0px 0px 25px 0px"><b>เข้าสู่ระบบ สำหรับผู้ดูแลระบบ</b></h4>

<form id="form" action="cklogin.php" method="post" enctype="multipart/form-data">

<div class="row">
<div class="col-md-1"></div>
<div class="col-md-10">
<div class="form-group">
<div class="input-group">
<input type="text" autocapitalize="off"  name="uname" id="uname" class="form-control" placeholder="USERNAME" required>
</div>
</div>
</div>
<div class="col-md-1"></div>
</div>

<div class="row">
<div class="col-md-1"></div>
<div class="col-md-10">
<div class="form-group">
<div class="input-group">
<input type="Password" autocapitalize="off"  name="upass" id="upass" class="form-control" placeholder="PASSWORD" required>
</div>
</div>
</div>
<div class="col-md-1"></div>
</div>
                          
<div style="text-align: center;display: block;margin: auto;padding: 25px 0px 0px 0px;">
<input class="btn btn-success" type="submit" value="ยืนยัน">
<button type="button" class="btn btn-warning" data-dismiss="modal">ยกเลิก</button>
</div>
</form>

</div>
</div>
</div>

</div>
</div>
</div>

<div class="col-md-4"></div>
</div>

</div>

<style type="text/css">

tr th{
text-align: center;
}
tr td{
text-align: center;
}

</style>

</style>

<script type="text/javascript">
$(document).ready(function() {
$('#example').DataTable( {
"pageLength": 25,
} );
} );
</script>

<?php
include('../h_f/f.html');
?>