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

//*********************************REGISTER****************************************

//**********************อ่านข้อมูลสมาชิกที่่ลงทะเบียนทั้งหมดมาแสดง
public function Rdall()
{
$query = $this->db->prepare(
"
SELECT *
FROM(member)
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

//ตรวจสอบการเข้าระบบของผู้ลงทะเบียนเพื่อแก้ไขข้อมูลส่วนตัว
public function Login(
$idcd
)
{
$query = $this->db->prepare(
"
SELECT *
FROM member
WHERE idcd=:idcd
"
)
;
$query->bindParam("idcd", $idcd, PDO::PARAM_STR);
$query->execute();
$data = array();
while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
$data[] = $row;
}
return $data;
}

//อ่านข้อมูลผู้ลงทะเบียนเพื่อแก้ไขข้อมูลส่วนตัว
public function Ckregis(
$mid
)
{
$query = $this->db->prepare(
"
SELECT *
FROM member
WHERE mid=:mid
"
)
;
$query->bindParam("mid", $mid, PDO::PARAM_INT);
$query->execute();
$data = array();
while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
$data[] = $row;
}
return $data;
}

//************************แก้ไขข้อมูลส่วนตัว
public function Updateregister
(
$mid,
$pname,
$fname,
$lname,
$tel,
$dep,
$position,
$prv
)
{
$query = $this->db->prepare(
"
UPDATE member SET
pname=:pname,
fname=:fname,
lname=:lname,
tel=:tel,
dep=:dep,
position=:position,
prv=:prv
WHERE mid=:mid
")
;
$query->bindParam("mid", $mid, PDO::PARAM_INT);
$query->bindParam("pname", $pname, PDO::PARAM_STR);
$query->bindParam("fname", $fname, PDO::PARAM_STR);
$query->bindParam("lname", $lname, PDO::PARAM_STR);
$query->bindParam("tel", $tel, PDO::PARAM_STR);
$query->bindParam("dep", $dep, PDO::PARAM_STR);
$query->bindParam("position", $position, PDO::PARAM_STR);
$query->bindParam("prv", $prv, PDO::PARAM_STR);
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

}
?>