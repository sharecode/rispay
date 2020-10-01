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

//*********************************SLIP****************************************

//****************************ตรวจสอบข้อมูลเลขบัตรประชาชนซ้ำ
public function Ckidcd($idcd)
{
$query = $this->db->prepare(
"SELECT *
FROM member
WHERE idcd=:idcd
"
);
$query->bindParam("idcd", $idcd, PDO::PARAM_STR);
$query->execute();
$data = array();
while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
$data[] = $row;
}
return $data;
}

//****************************ตรวจสอบข้อมูลเลขบัตรประชาชนโอนเงิน
public function Ckmon($idcd)
{
$query = $this->db->prepare(
"SELECT *
FROM ckmon
WHERE idcd=:idcd
"
);
$query->bindParam("idcd", $idcd, PDO::PARAM_STR);
$query->execute();
$data = array();
while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
$data[] = $row;
}
return $data;
}

//*****************************บันทึกข้อมูลการโอนเงิน
public function Tran
(
$ckth_mnnum,
$mnpass,
$mndate,
$mnhour,
$mnminute,
$newname,
$idcd,
$note,
$mnip,
$ckmdate
)
{
$query = $this->db->prepare
("
INSERT INTO ckmon
(
mnnum,
mnpass,
mndate,
mnhour,
mnminute,
mnslip,
idcd,
note,
mnip,
ckmdate
)
VALUES
(
:mnnum,
:mnpass,
:mndate,
:mnhour,
:mnminute,
:mnslip,
:idcd,
:note,
:mnip,
:ckmdate
)
");
$query->bindParam("mnnum", $ckth_mnnum, PDO::PARAM_INT);
$query->bindParam("mnpass", $mnpass, PDO::PARAM_STR);
$query->bindParam("mndate", $mndate, PDO::PARAM_STR);
$query->bindParam("mnhour", $mnhour, PDO::PARAM_STR);
$query->bindParam("mnminute", $mnminute, PDO::PARAM_STR);
$query->bindParam("mnslip", $newname, PDO::PARAM_STR);
$query->bindParam("idcd", $idcd, PDO::PARAM_STR);
$query->bindParam("note", $note, PDO::PARAM_STR);
$query->bindParam("mnip", $mnip, PDO::PARAM_STR);
$query->bindParam("ckmdate", $ckmdate, PDO::PARAM_STR);
$query->execute();
return $this->db->lastInsertId();
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
SET chk=1
WHERE idcd=:idcd
")
;
$query->bindParam("idcd", $idcd, PDO::PARAM_STR);
$query->execute();
}


}
?>