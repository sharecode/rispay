<?php

// DATABASE connection script  

// database Connection variables
define('HOST', 'localhost'); // Database host name ex. localhost
define('USER', 'root'); // Database user. ex. root ( if your on local server)
define('PASSWORD', ''); // Database user password  (if password is not set for user then keep it empty )
define('DATABASE', 'rispay'); // Database name
define('CHARSET', 'utf8');

function DB()
{
    static $instance;
    if ($instance === null) {
        $opt = array(
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES => FALSE,
        );
        $dsn = 'mysql:host=' . HOST . ';dbname=' . DATABASE . ';charset=' . CHARSET;
        $instance = new PDO($dsn, USER, PASSWORD, $opt);
    }
    return $instance;
}
//$thaimonth=array("มกราคม","กุมภาพันธ์","มีนาคม","เมษายน","พฤษภาคม","มิถุนายน","กรกฎาคม","สิงหาคม","กันยายน","ตุลาคม","พฤศจิกายน","ธันวาคม");
$thaimonth=array("ม.ค.","ก.พ.","มี.ค.","เม.ย.","พ.ค.","มิ.ย.","ก.ค.","ส.ค.","ก.ย.","ต.ค.","พ.ย.","ธ.ค.");
date_default_timezone_set('Asia/Bangkok');
?>