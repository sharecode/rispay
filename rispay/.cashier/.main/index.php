<?php
session_start();
include('../.nav/index.php');

if($_SESSION['aid']=='')
{
echo "<script>window.location='../../admin/'</script>";
}

require '../../db/admin.php';

$object = new CRUD();

$resrdslip = $object->Rdslip();

$resall = $object->Rdall();

$rescash = $object->Cash();

$resnot = $object->Nomoney();

$resslip = $object->Slip();


?>

<div style="padding: 50px 50px 50px 50px;">

<div class="card-deck">

<div class="card bg-light">
<div class="card-body text-center">
<p class="card-text"><h4 class="card-title"><b>แจ้งชำระเงิน</b></h4></p>
<p class="card-text"><img src="../../images/transfer.png" height="100"><h5> จำนวน <?php echo count($resrdslip); ?> คน</h5></p>
<p><a href="../.accept/" class="btn btn-danger" style="padding: 6px 50px 6px 50px;"> คลิก </a></p>
</div>
</div>

<div class="card bg-light">
<div class="card-body text-center">
<p class="card-text"><h4 class="card-title"><b>สมาชิก</b></h4></p>
<p class="card-text"><img src="../../images/member.png" height="100"><h5> จำนวน <?php echo count($resall); ?> คน</h5></p>
<p><a href="../.member/" class="btn btn-primary" style="padding: 6px 50px 6px 50px;"> คลิก </a></p>
</div>
</div>

</div>


<div class="card-deck">

<div class="card bg-light">
<div class="card-body text-center">
<p class="card-text"><h4 class="card-title"><b>สลิปหลักฐาน</b></h4></p>
<p class="card-text"><img src="../../images/slip.png" height="100"><h5> จำนวน <?php echo count($resslip); ?> ไฟล์/ชิ้น</h5></p>
<p><a href="../.slip/" class="btn btn-info" style="padding: 6px 50px 6px 50px;"> คลิก </a></p>
</div>
</div>

<div class="card bg-light">
<div class="card-body text-center">
<p class="card-text"><h4 class="card-title"><b>ออกจากระบบ</b></h4></p>
<p class="card-text"><img src="../../images/power.png" height="140"></p>
<p><a href="../../admin/cklogout.php" class="btn btn-danger" style="padding: 6px 50px 6px 50px;"> คลิก </a></p>
</div>
</div>

</div>

</div>

<style type="text/css">

body{
background: #eaeae6;
}

.card-deck{
padding: 10px 0px 0px 0px;
}
</style>

<?php
include('../../h_f/f.html');
?>