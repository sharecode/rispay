<!-- Bootstrap Modals -->
<!-- Modal - NOTE -->
<div class="modal fade" id="add_new_modal_note<?php echo $row['mnid']?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">

<div class="modal-dialog modal-lg" role="document">
<div class="modal-content">


<div style="text-align: center;padding: 24px 0px 12px 0px;">
<h3><b>รายละเอียดเพิ่มเติม</b></h3>
</div>

<div class="modal-body">

<div class="form-group">
<p style="text-align: left;font-weight: bold;text-indent: 20px;">Note :</p>
<textarea name="note" class="form-control" rows="5"><?php echo $row['note'] ?></textarea>
</div>


<button type="button" class="btn btn-danger" data-dismiss="modal">ปิด</button>

</div>
           
</div>
</div>
</div>

<!--ปิด Modal Close/Open-->

<!-- Modal - DELETE -->
<div class="modal fade" id="add_new_modal_del<?php echo $row['mnid']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
<div class="modal-dialog modal-lg" role="document">

<div class="modal-content">
<div class="row" style="padding: 24px 24px 24px 24px">

<div style="display: block;margin: auto;padding: 0px 0px 12px 0px;font-weight: bold;">
<h4>ลบข้อมูลการแจ้งโอนเงิน</h4>
</div>

<div class="col-md-12">

<form action="del/" method="post">
<input type="hidden"  name="mnid" value="<?php echo $row['mnid']; ?>" />
<input type="hidden"  name="idcd" value="<?php echo $row['idcd']; ?>" />
<div class="card">

<div class="card-body">
<h5 class="card-title">
<p><?php echo $row['pname'];?><?php echo $row['fname'];?> <?php echo $row['lname'];?></p>

<p><?php echo $row['dep'];?></p>
</h5>
</div>
</div>

<div class="modal-footer" style="text-align: center;display: block;margin: auto;">
<p style="text-align: center;padding: 2px 0px 0px 0px;">
<button type="submit" name="submit" id="submit" class="btn btn-danger">
<img src="../../images/Del.png" width="20"> ลบ</button>
<a href="" class="btn btn-warning"><img src="../../images/cancel.png" width="20"> ยกเลิก</a>
</p>
</div>

</form>

</div>       



</div>

</div>
</div>
</div>

<!--ปิด Modal DELETE-->