<?php 
session_start();
if(!isset($_SESSION['login'])){
  http_response_code(403);
  die;
}

require_once '../../conn.php';
include_once 'txt.php';


if(isset($_POST['user'])){
    $user = $_POST['user'];
    if(isset($_POST['tem'])){
        $tem = $_POST['tem'];
    }

    $data = data("SELECT * FROM aa_customer WHERE cookie = '$user'");
    if(empty($data)){
        http_response_code(403);
        die;
    }
    $use = json_decode($data[0]['data_use'],true);
    $link = $data[0]['folder_name'];
    $domain = $data[0]['domain'];
    $hari = $use['acara_date2'];
    $jam = $use['acara_time2'];
    $tempat = $use['acara_alamat2'];

    if(!empty($domain)){
        $tlink = $domain;
    }else{
        $tlink = "https://ada-undangan.online/dari/$link/";
    }

    // kirim template lewat wa
    if(isset($_POST['kode'])){
        $kode = $_POST['kode'];
        $tamu = data("SELECT * FROM $user WHERE kode = '$kode'");
        if(empty($tamu)){
            http_response_code(403);
            die;
        }
        $tamu = $tamu[0];
        $kepada = $tamu['nama'];
        $wa = $tamu['wa'];
        if(isset($use['template']) && !empty($use['template'])){
            $text = $use['template'];
        }
        $send = str_replace('#hari#',$hari,$text);
        $send = str_replace('#jam#',$jam,$send);
        $send = str_replace('#tempat#',$tempat,$send);
        $send = str_replace('#link#',"$tlink?kepada=$kepada&kode=$kode",$send);
$send = urlencode($send);
$wa_send = "https://api.whatsapp.com/send?phone=$wa&text=$send";

        echo $wa_send;
        die;
    }

    $text = $tem;
   
        // edit template
    if(isset($_POST['edit'])){
        $use['template'] = $text;
        $use = json_encode($use);
        $send_use = mysqli_real_escape_string($conn,$use);
        $query = "UPDATE aa_customer SET
                    data_use = '$send_use'
                    WHERE cookie = '$user'";
                mysqli_query($conn, $query);
                $result = mysqli_affected_rows($conn);
                if ($result > 0) {
                    echo 'ok';
                } else {
                    echo 'fail';
                }
        die;
    }
    // reset template
    if(isset($_POST['reset'])){
        $use['template'] = '';
        $use = json_encode($use);
        $send_use = mysqli_real_escape_string($conn,$use);
        $query = "UPDATE aa_customer SET
                    data_use = '$send_use'
                    WHERE cookie = '$user'";
                mysqli_query($conn, $query);
                $result = mysqli_affected_rows($conn);
                if ($result > 0) {
                    echo 'ok';
                } else {
                    echo 'fail';
                }
        die;
    }

}

$user = $_GET['user'];
$data = data("SELECT * FROM aa_customer WHERE cookie = '$user'");
if(empty($data)){
    http_response_code(403);
    die;
}

$link = $data[0]['folder_name'];
$use = json_decode($data[0]['data_use'],true);
$hari = $use['acara_date2'];
$jam = $use['acara_time2'];
$tempat = $use['acara_alamat2'];





if(isset($use['template']) && !empty($use['template'])){
    $text = $use['template'];
}

$send = str_replace('#hari#',$hari,$text);
$send = str_replace('#jam#',$jam,$send);
$send = str_replace('#tempat#',$tempat,$send);
$send = str_replace('#link#','https://ada-undangan.online/dari/'.$link.'/',$send);

if(isset($_GET['tem'])){
    echo $text;
}

?>

