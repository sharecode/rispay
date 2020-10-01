<!-- Bootstrap Modals -->
<!-- Modal - UPDATE SYSTEM -->
<div class="modal fade" id="add_new_modal_update<?php echo $row['sid']?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">

<div class="modal-dialog modal-lg" role="document">
<div class="modal-content">

<div style="text-align: center;padding: 24px 0px 12px 0px;">
<h3><b>อัปเดทข้อมูล ปิดระบบลงทะเบียน</b></h3>
</div>

<div class="modal-body">

<form action="update/" method="post">
<input type="hidden"  name="sid" value="<?php echo $row['sid']; ?>" />

<div class="form-group">
<div style="text-align: left;font-weight: bold;text-indent: 20px;">วันที่ปิดระบบ :</div>
<input type="text" size="30" value="<?php echo $row['day'] ?>" name="day" id="datepicker" class="form-control"  placeholder="กรุณาคลิกเลือกวันที่ (ที่ระบุในใบทำรายการ)" required>
</div>

<div class="form-group">
<div style="text-align: left;font-weight: bold;text-indent: 20px;">เวลาที่ปิดระบบ (ชั่วโมง) :</div>
<select name="hr" id="hr" class="form-control" required>
<option value="<?php echo $row['hr'] ?>"><?php echo $row['hr'] ?></option>
<option value="00">00</option>
<option value="01">01</option>
<option value="02">02</option>
<option value="03">03</option>
<option value="04">04</option>
<option value="05">05</option>
<option value="06">06</option>
<option value="07">07</option>
<option value="08">08</option>
<option value="09">09</option>
<option value="10">10</option>
<option value="11">11</option>
<option value="12">12</option>
<option value="13">13</option>
<option value="14">14</option>
<option value="15">15</option>
<option value="16">16</option>
<option value="17">17</option>
<option value="18">18</option>
<option value="19">19</option>
<option value="20">20</option>
<option value="21">21</option>
<option value="22">22</option>
<option value="23">23</option>
<option value="24">24</option>
</select>
</div>

<div class="form-group">
<div style="text-align: left;font-weight: bold;text-indent: 20px;">เวลาที่ปิดระบบ (นาที) :</div>
<select name="mt" id="mt" class="form-control" required>
<option value="<?php echo $row['mt'] ?>"><?php echo $row['mt'] ?></option>
<option value="00">00</option>
<option value="01">01</option>
<option value="02">02</option>
<option value="03">03</option>
<option value="04">04</option>
<option value="05">05</option>
<option value="06">06</option>
<option value="07">07</option>
<option value="08">08</option>
<option value="09">09</option>
<option value="10">10</option>
<option value="11">11</option>
<option value="12">12</option>
<option value="13">13</option>
<option value="14">14</option>
<option value="15">15</option>
<option value="16">16</option>
<option value="17">17</option>
<option value="18">18</option>
<option value="19">19</option>
<option value="20">20</option>
<option value="21">21</option>
<option value="22">22</option>
<option value="23">23</option>
<option value="24">24</option>
<option value="25">25</option>
<option value="26">26</option>
<option value="27">27</option>
<option value="28">28</option>
<option value="29">29</option>
<option value="30">30</option>
<option value="31">31</option>
<option value="32">32</option>
<option value="33">33</option>
<option value="34">34</option>
<option value="35">35</option>
<option value="36">36</option>
<option value="37">37</option>
<option value="38">38</option>
<option value="39">39</option>
<option value="40">40</option>
<option value="41">41</option>
<option value="42">42</option>
<option value="43">43</option>
<option value="44">44</option>
<option value="45">45</option>
<option value="46">46</option>
<option value="47">47</option>
<option value="48">48</option>
<option value="49">49</option>
<option value="50">50</option>
<option value="51">51</option>
<option value="52">52</option>
<option value="53">53</option>
<option value="54">54</option>
<option value="55">55</option>
<option value="56">56</option>
<option value="57">57</option>
<option value="58">58</option>
<option value="59">59</option>
<option value="60">60</option>
</select>
</div>

<div class="form-group">
<div style="text-align: left;font-weight: bold;text-indent: 20px;">จำนวนที่รับ :</div>
<input type="text" name="num" class="form-control" value="<?php echo $row['num']; ?>" required>
</div>

<p style="text-align: center;padding: 2px 0px 0px 0px;">
<button type="submit" name="submit" id="submit" class="btn btn-success">
<img src="../../images/down.png" width="20">  บันทึก</button>
<a href="" class="btn btn-warning"><img src="../../images/cancel.png" width="20"> ยกเลิก</a>
</p>


</form>

</div>
                           
</div>
</div>
</div>

<!--ปิด Modal Close/Open-->