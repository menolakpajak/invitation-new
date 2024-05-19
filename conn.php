<?php

date_default_timezone_set("Asia/Hong_Kong");
$datetime = date('Y-m-d H:i:s');

// $server = 'localhost';
// $userServer = 'invy5182_invoite';
// $serverPwd = 'Kmzwa8aw@@';
// $database = 'invy5182_adaundangan';

$server = 'localhost';
$userServer = 'root';
$serverPwd = '';
$database = 'invitation';

// password default untuk costumer
$pwd_default = 'admin1234';



$connFirst = mysqli_connect($server, $userServer, $serverPwd);

function format_date($date, $format)
{
    $date = date_create($date);
    return date_format($date, $format);
}

// >>>>>>>>>>>>> cek ada atau tidak database  <<<<<<<<<<<<<<<<
$sistem = "SELECT COUNT(*) AS `exists` FROM INFORMATION_SCHEMA.SCHEMATA WHERE SCHEMATA.SCHEMA_NAME='$database'";
$query = mysqli_query($connFirst, $sistem);
$row = $query->fetch_object();
$dbExists = (bool) $row->exists;

if ($dbExists) {
    $conn = mysqli_connect($server, $userServer, $serverPwd, $database) or die('koneksi gagal : periksa nama database atau koneksi ke server !');

    function data($info)
    {
        global $conn;
        $result = mysqli_query($conn, $info);
        $rows = [];
        while ($row = mysqli_fetch_assoc($result)) {
            $rows[] = $row;
        }
        ;
        return $rows;
    }
    ;

    $query = "SHOW TABLES LIKE 'aa_admin' ";
    mysqli_query($conn, $query);
    if (mysqli_affected_rows($conn) > 0) {
        $versi = data("SELECT * FROM aa_admin WHERE id = 1")[0]['versi'];
    }

}