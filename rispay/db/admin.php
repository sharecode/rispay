<?php

require __DIR__ . '/connection.php';


class CRUD
{

//เชื่อมต่อฐานข้อมูล
protected $db;
function __construct()
{
$this->db = DB();
}

//ยกเลิกการเชื่อมต่อฐานข้อมูล
function __destruct()
{
$this->db = null;
}

//ตรวจสอบการเข้าระบบ ADMIN
public function Login(
$uname,
$upass
)
{
$query = $this->db->prepare(
"
SELECT *
FROM admin
WHERE uname=:uname AND upass=:upass
"
)
;
$query->bindParam("uname", $uname, PDO::PARAM_STR);
$query->bindParam("upass", $upass, PDO::PARAM_STR);
$query->execute();
$data = array();
while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
$data[] = $row;
}
return $data;
}

//*********************************MEMBER****************************************

//อ่านข้อมูลสมาชิกที่่ลงทะเบียนทั้งหมดมาแสดง
public function Rdall()
{
$query = $this->db->prepare(
"
SELECT *
FROM member
ORDER BY upd DESC
"
)
;
$query->execute();
$data = array();
while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
$data[] = $row;
}
return $data;
}

//อ่านข้อมูลสมาชิกที่่ลงทะเบียนทั้งหมดมาแสดง เรียงตามอักษร
public function Rdall_()
{
$query = $this->db->prepare(
"
SELECT *
FROM member
ORDER BY CONVERT(fname USING tis620),CONVERT(lname USING tis620) ASC
"
)
;
$query->execute();
$data = array();
while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
$data[] = $row;
}
return $data;
}

//****************************ตรวจสอบข้อมูลเลขบัตรประชาชนซ้ำ
public function Ckidcd($ckth_idcd)
{
$query = $this->db->prepare(
"SELECT *
FROM member
WHERE idcd=:ckth_idcd
"
);
$query->bindParam("ckth_idcd", $ckth_idcd, PDO::PARAM_STR);
$query->execute();
$data = array();
while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
$data[] = $row;
}
return $data;
}

//*****************************ลงทะเบียน
public function Regis
(
$pname,
$ckth_fname,
$ckth_lname,
$ckth_idcd,
$ckth_tel,
$dep,
$position,
$prv,
$ip,
$svd
)
{
$query = $this->db->prepare
("
INSERT INTO member
(
pname,
fname,
lname,
idcd,
tel,
dep,
position,
prv,
ip,
svd
)
VALUES
(
:pname,
:fname,
:lname,
:idcd,
:tel,
:dep,
:position,
:prv,
:ip,
:svd
)
");
$query->bindParam("pname", $pname, PDO::PARAM_STR);
$query->bindParam("fname", $ckth_fname, PDO::PARAM_STR);
$query->bindParam("lname", $ckth_lname, PDO::PARAM_STR);
$query->bindParam("idcd", $ckth_idcd, PDO::PARAM_STR);
$query->bindParam("tel", $ckth_tel, PDO::PARAM_STR);
$query->bindParam("dep", $dep, PDO::PARAM_STR);
$query->bindParam("position", $position, PDO::PARAM_STR);
$query->bindParam("prv", $prv, PDO::PARAM_STR);
$query->bindParam("ip", $ip, PDO::PARAM_STR);
$query->bindParam("svd", $svd, PDO::PARAM_STR);
$query->execute();
return $this->db->lastInsertId();
}

//************************แก้ไขข้อมูลสมาชิก
public function Updateregister
(
$mid,
$pname,
$fname,
$lname,
$idcd,
$tel,
$dep,
$position,
$prv,
$chk
)
{
$query = $this->db->prepare(
"
UPDATE member SET
pname=:pname,
fname=:fname,
lname=:lname,
idcd=:idcd,
tel=:tel,
dep=:dep,
position=:position,
prv=:prv,
chk=:chk
WHERE mid=:mid
")
;
$query->bindParam("mid", $mid, PDO::PARAM_INT);
$query->bindParam("pname", $pname, PDO::PARAM_STR);
$query->bindParam("fname", $fname, PDO::PARAM_STR);
$query->bindParam("lname", $lname, PDO::PARAM_STR);
$query->bindParam("idcd", $idcd, PDO::PARAM_STR);
$query->bindParam("tel", $tel, PDO::PARAM_STR);
$query->bindParam("dep", $dep, PDO::PARAM_STR);
$query->bindParam("position", $position, PDO::PARAM_STR);
$query->bindParam("prv", $prv, PDO::PARAM_STR);
$query->bindParam("chk", $chk, PDO::PARAM_STR);
$query->execute();
}

//************************แก้ไขข้อมูลสมาชิก
public function Updatestatus
(
$mid,
$chk
)
{
$query = $this->db->prepare(
"
UPDATE member SET
chk=:chk
WHERE mid=:mid
")
;
$query->bindParam("mid", $mid, PDO::PARAM_INT);
$query->bindParam("chk", $chk, PDO::PARAM_STR);
$query->execute();
}

//******************************ลบข้อมูลสมาชิก
public function Delregister
(
$mid
)
{
$query = $this->db->prepare(
"
DELETE
FROM member
WHERE mid=:mid
")
;
$query->bindParam("mid", $mid, PDO::PARAM_INT);
$query->execute();
}

//**********************อ่านข้อมูลสมาชิกที่่แจ้งโอนเงินมาแสดงทั้งหมด
public function Rdslip()
{
$query = $this->db->prepare(
"
SELECT *
FROM(member)
INNER JOIN(ckmon)
ON member.idcd=ckmon.idcd
WHERE member.idcd=ckmon.idcd AND chk=1
ORDER BY upd ASC
"
)
;
$query->execute();
$data = array();
while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
$data[] = $row;
}
return $data;
}

//**********************อ่านข้อมูลสมาชิกที่่แจ้งโอนเงินมาแสดงเพื่อตอบรับ
public function Slip()
{
$query = $this->db->prepare(
"
SELECT *
FROM(member)
INNER JOIN(ckmon)
ON member.idcd=ckmon.idcd
WHERE member.idcd=ckmon.idcd AND member.chk=2
ORDER BY mndate ASC,mnhour ASC,mnminute ASC
"
)
;
$query->execute();
$data = array();
while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
$data[] = $row;
}
return $data;
}

//************************อัปเดทข้อมูลการโอนเงินของสมาชิก
public function Updatetransfer
(
$mnid,
$mnnum,
$mnpass,
$mndate,
$mnhour,
$mnminute,
$note
)
{
$query = $this->db->prepare(
"
UPDATE ckmon SET
mnnum=:mnnum,
mnpass=:mnpass,
mndate=:mndate,
mnhour=:mnhour,
mnminute=:mnminute,
note=:note
WHERE mnid=:mnid
")
;
$query->bindParam("mnid", $mnid, PDO::PARAM_INT);
$query->bindParam("mnnum", $mnnum, PDO::PARAM_INT);
$query->bindParam("mnpass", $mnpass, PDO::PARAM_STR);
$query->bindParam("mndate", $mndate, PDO::PARAM_STR);
$query->bindParam("mnhour", $mnhour, PDO::PARAM_STR);
$query->bindParam("mnminute", $mnminute, PDO::PARAM_STR);
$query->bindParam("note", $note, PDO::PARAM_STR);
$query->execute();
}

//******************************ลบข้อมูล Slip การโอนเงินที่ไม่ถูกต้องสมบูรณ์
public function Delslip
(
$mnid
)
{
$query = $this->db->prepare(
"
DELETE
FROM ckmon
WHERE mnid=:mnid
")
;
$query->bindParam("mnid", $mnid, PDO::PARAM_INT);
$query->execute();
}

//*************************************อัปเดทข้อมูลการแจ้่งโอนเงิน
public function UPtran
(
$idcd
)
{
$query = $this->db->prepare(
"
UPDATE member
SET chk=2
WHERE idcd=:idcd
")
;
$query->bindParam("idcd", $idcd, PDO::PARAM_STR);
$query->execute();
}

//*************************************อัปเดทข้อมูลการแจ้่งโอนเงินที่ไม่ถูกต้องสมบูรณ์
public function UPnewslip
(
$idcd
)
{
$query = $this->db->prepare(
"
UPDATE member
SET chk=0
WHERE idcd=:idcd
")
;
$query->bindParam("idcd", $idcd, PDO::PARAM_STR);
$query->execute();
}

//***************อ่านข้อมูลสมาชิกที่่ชำระเงินมาแสดง
public function Cash()
{
$query = $this->db->prepare(
"
SELECT *
FROM(member)
WHERE chk=2
ORDER BY CONVERT(fname USING tis620),CONVERT(lname USING tis620) ASC
"
)
;
$query->execute();
$data = array();
while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
$data[] = $row;
}
return $data;
}

//***************อ่านข้อมูลสมาชิกที่่รอชำระเงินมาแสดง
public function Nomoney()
{
$query = $this->db->prepare(
"
SELECT *
FROM member
WHERE chk!=2
ORDER BY CONVERT(fname USING tis620),CONVERT(lname USING tis620) ASC
"
)
;
$query->execute();
$data = array();
while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
$data[] = $row;
}
return $data;
}

//อ่านข้อมูล Admin ทั้งหมดมาแสดง
public function Rdadmin()
{
$query = $this->db->prepare(
"
SELECT *
FROM admin
ORDER BY upddate DESC
"
)
;
$query->execute();
$data = array();
while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
$data[] = $row;
}
return $data;
}

//*****************************เพิ่มข้อมูล Admin
public function Regisadmin
(
$apname,
$afname,
$alname,
$uname,
$upass,
$cls,
$svdate
)
{
$query = $this->db->prepare
("
INSERT INTO admin
(
apname,
afname,
alname,
uname,
upass,
cls,
svdate
)
VALUES
(
:apname,
:afname,
:alname,
:uname,
:upass,
:cls,
:svdate
)
");
$query->bindParam("apname", $apname, PDO::PARAM_STR);
$query->bindParam("afname", $afname, PDO::PARAM_STR);
$query->bindParam("alname", $alname, PDO::PARAM_STR);
$query->bindParam("uname", $uname, PDO::PARAM_STR);
$query->bindParam("upass", $upass, PDO::PARAM_STR);
$query->bindParam("cls", $cls, PDO::PARAM_STR);
$query->bindParam("svdate", $svdate, PDO::PARAM_STR);
$query->execute();
return $this->db->lastInsertId();
}

//************************แก้ไขข้อมูลสมาชิก
public function Updateadmin
(
$aid,
$apname,
$afname,
$alname,
$uname,
$upass,
$cls
)
{
$query = $this->db->prepare(
"
UPDATE admin SET
apname=:apname,
afname=:afname,
alname=:alname,
uname=:uname,
upass=:upass,
cls=:cls
WHERE aid=:aid
")
;
$query->bindParam("aid", $aid, PDO::PARAM_INT);
$query->bindParam("apname", $apname, PDO::PARAM_STR);
$query->bindParam("afname", $afname, PDO::PARAM_STR);
$query->bindParam("alname", $alname, PDO::PARAM_STR);
$query->bindParam("uname", $uname, PDO::PARAM_STR);
$query->bindParam("upass", $upass, PDO::PARAM_STR);
$query->bindParam("cls", $cls, PDO::PARAM_STR);
$query->execute();
}

//******************************ลบข้อมูลสมาชิก
public function Deladmin
(
$aid
)
{
$query = $this->db->prepare(
"
DELETE
FROM admin
WHERE aid=:aid
")
;
$query->bindParam("aid", $aid, PDO::PARAM_INT);
$query->execute();
}

//อ่านข้อมูล การตั้งค่า
public function Rdsetup()
{
$query = $this->db->prepare(
"
SELECT *
FROM setup
WHERE sid=1
"
)
;
$query->execute();
$data = array();
while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
$data[] = $row;
}
return $data;
}

//************************แก้ไขข้อมูลสมาชิก
public function Updateclose
(
$sid,
$day,
$hr,
$mt,
$num
)
{
$query = $this->db->prepare(
"
UPDATE setup SET
day=:day,
hr=:hr,
mt=:mt,
num=:num
WHERE sid=:sid
")
;
$query->bindParam("sid", $sid, PDO::PARAM_INT);
$query->bindParam("day", $day, PDO::PARAM_STR);
$query->bindParam("hr", $hr, PDO::PARAM_STR);
$query->bindParam("mt", $mt, PDO::PARAM_STR);
$query->bindParam("num", $num, PDO::PARAM_INT);
$query->execute();
}

}
?>