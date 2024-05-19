<?php

require_once dirname(__DIR__,2). '/conn.php';

// Hapus ini jika mau manual >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>

    if(!isset($_COOKIE['user'])){
        if(!isset($_GET['user'])){
            header('Location: direct.php');
            die;
        }
        $user = $_GET['user'];
        header("Location: direct.php?user=$user");
        die;
    }
    
    $user = $_COOKIE['user'];
    $data = data("SELECT * FROM aa_customer WHERE cookie = '$user' ");
    if(empty($data)){
        header('Location: direct.php');
        die;
    }
$data = $data[0];
if(!isset($_SESSION['preview'])){
    if($data['status'] != 'active'){
        header('Location: ../../error/');
    }
}
$versi .= $data['versi'];
$table = $data['folder_name'];
// >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>

// cek data di table untuk memuat comentar
$com = data("SELECT * FROM $user WHERE comment != '' ORDER BY dateComment DESC ");
if(empty($com)){
    $com = '';
}


function input($input)
{
    global $conn;
    global $datetime;
    global $user;

    $nama = htmlspecialchars($input['nama']);
    $hadir = htmlspecialchars($input['hadir']);
    $text = htmlspecialchars($input['text']);
    // $text = htmlentities($input['text'], ENT_QUOTES, 'UTF-8');
    $kod = $input['kode'];

    $cek = data("SELECT * FROM $user WHERE kode = '$kod' ");
    if ($cek != null) {
        $query = "UPDATE $user SET 
                dateComment = '$datetime',
                hadir = '$hadir',
                comment = '$text',
                status = 'done'
            WHERE kode = '$kod' ";
        mysqli_query($conn, $query);
        $result = mysqli_affected_rows($conn);
        $reason = mysqli_error($conn);
        if ($result > 0) {
            echo 'sukses';
        } else {
            echo 'gagal';
        }
    } else {
        $query = "INSERT INTO $user (kode,dateAdd,dateComment,nama,wa,hadir,comment,status)
                    VALUES 
                    ('$kod',
                    '$datetime',
                    '$datetime', 
                    '$nama',
                    '',
                    '$hadir',
                    '$text',
                    'done')";
        mysqli_query($conn, $query);
        $result = mysqli_affected_rows($conn);
        $reason = mysqli_error($conn);
        if ($result > 0) {
            echo 'sukses';
        } else {
            echo 'gagal';
        }
    }
}

function cek_tamu($cookie,$kepada,$kode){
    global $user;
    $code = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890";
    $acak = substr(str_shuffle($code), 0, 20);

    // jika tidak ada query tamu
    if(!empty($kepada) && !empty($kode)){
        $data = data("SELECT * FROM $user WHERE nama = '$kepada' AND kode = '$kode'");
        if(empty($data)){
            setcookie('kode', $acak, time() + (2629800 * 6), '/');
            header('Location: ?notRegistered');
            die;
        }
        $data= $data[0];
        setcookie('kode', $data['kode'], time() + (2629800 * 6), '/');
        die(header('Location: ?Registered'));
    }
    // jika cookie kode tidak ada
    if(empty($_COOKIE['kode'])){
        setcookie('kode', $acak, time() + (2629800 * 6), '/');
        die(header('Location: ?notRegistered'));
    }
    $cookie = $_COOKIE['kode'];
    $data = data("SELECT * FROM $user WHERE kode = '$cookie'");
        if(!empty($data)){
            return $data[0];
        }
    
    return '';
}
