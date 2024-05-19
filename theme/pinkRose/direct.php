<?php 
session_start();

            // MANUAL INPUT
// default password for user
// $pwd = 'admin1234';
// table untuk customer baru baru yang nantinya disimpan di local storage bersama data lain;
// $table = 'bonyokdankolok';

        // AUTO INPUT
        
if(!isset($_GET['user'])){
    die(header('Location: ../../error/'));
}
if(isset($_GET['kepada']) && isset($_GET['kode'])) {
    $kepada = $_GET['kepada'];
    $kode = $_GET['kode'];
}

//cek jika ada nama tamu yang diinput dari simple link
if(isset($_GET['to']) && !empty($_GET['to'])){
    if(!isset($_COOKIE['to'])){
        setcookie('to', $_GET['to'], time() + (365000), '/');
    }else{
        if($_COOKIE['to'] != $_GET['to']){
            setcookie('to', $_GET['to'], time() + (365000), '/');
        }
    }
}else{
    if(isset($_COOKIE['to'])){
        setcookie('to', '', time() + (-9000), '/');
    }
}
//--------------------------------------------------------

$get_cookie = $_GET['user'];

require_once dirname(__DIR__,2). '/conn.php';

    // cek jika cookie['user'] tidak ada
    if(!isset($_COOKIE['user'])){
        $data = data("SELECT * FROM aa_customer WHERE cookie = '$get_cookie' ");
            if(empty($data)){
                die (header('Location: ../../error/'));
            }
        $data = $data[0];
        $table = $data['folder_name'];
        setcookie('user', $data['cookie'], time() + (2629800 * 6), '/');
        setcookie('admin', $table, time() + (2629800 * 6), '/');
        if(isset($kepada) && isset($kode)){
            die(header("Location: index.php?kepada=$kepada&kode=$kode"));    
        }
        die(header('Location: index.php'));
    }

// cek jika cookie['user'] ada cek terdaftar atau tidak
    if($_COOKIE['user'] != $get_cookie){
        $data = data("SELECT * FROM aa_customer WHERE cookie = '$get_cookie' ");
            if(empty($data)){
                setcookie('user', '', time() + (-9000), '/');
                die (header('Location: ../../error/'));
            }
        $data = $data[0];
        $table = $data['folder_name'];
        setcookie('user', $data['cookie'], time() + (2629800 * 6), '/');
        setcookie('admin', $table, time() + (2629800 * 6), '/');
        if(isset($kepada) && isset($kode)){
            $kepada = urlencode($kepada);
            die(header("Location: index.php?kepada=$kepada&kode=$kode"));    
        }
        die(header('Location: index.php'));
    }

    // jika cookie['user'] sama
    $data = data("SELECT * FROM aa_customer WHERE cookie = '$get_cookie' ");
    if(empty($data)){
        die (header('Location: ../../error/'));
    }
    if(isset($kepada) && isset($kode)){
        die(header("Location: index.php?kepada=$kepada&kode=$kode"));    
    }
    die(header('Location: index.php'));

// CLOSE AUTO INPUT>>>>>>>>>>>>>>>>>>>>>>>>>>>
?>