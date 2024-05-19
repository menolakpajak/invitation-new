<?php

require_once dirname(__DIR__,1).'/conn.php';

        // input untuk keperluan mengirim form untuk customer
function inputForm($password)
{
    global $conn;
    global $datetime;

    $str = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPRSTUVWXYZ";
    $cookie =  time(). substr(str_shuffle($str), 0, 6);
    $pwd = password_hash($password,PASSWORD_DEFAULT);
    $pwd_key = $password;
    $nama = substr(str_shuffle($str), 0, 8);
    $token = "1234567890";
    $token = substr(str_shuffle($token), 0, 6);
    
    $cek = data("SELECT * FROM aa_customer WHERE nama = '$nama' ");
    if (!empty($cek)) {
        return 'form gagal';
        
    }
        $query = "INSERT INTO aa_customer (nama,date,username,pwd,pwdkey,token,cookie,status,dev,versi)
                    VALUES 
                    ('$nama',
                    '$datetime',
                    '$nama',
                    '$pwd',
                    '$pwd_key',
                    '$token',
                    '$cookie',
                    'queue',
                    'master',
                    0)";
        mysqli_query($conn, $query);
        $result = mysqli_affected_rows($conn);
        $reason = mysqli_error($conn);
        if ($result > 0) {
            return 'ok';
        } else {
            return 'fail';
        }
    
    }

function folderDelete($path){
    if (is_dir($path) === true){
        $files = array_diff(scandir($path), array('.', '..'));    
        foreach ($files as $file){
            folderDelete(realpath($path) . '/' . $file);
        }    
        rmdir($path);
        return 'ok';
    }else if (is_file($path) === true){
        return unlink($path);
    }
    return 'fail';
}

function master_login($input){
    global $conn;

    $username = $input['username'];
    $pwd = $input['password'];

    $user = data("SELECT * FROM aa_admin WHERE username = '$username'");
    if(empty($user)){
        return 'Username/email tidak terdaftar !';
    }
       
    if(!password_verify($pwd,$user[0]['pwd'])){
        return 'Password tidak cocok !'; 
    }

    if($user[0]['akses'] != 'master'){
        return 'Anda Tidak memiliki MASTER akses untuk Login !'; 
    }
    $_SESSION['login'] = true;
    $_SESSION['user'] = $user[0]['username'];
    $_SESSION['akses'] = $user[0]['akses'];
    header("Location: ../");
    exit;
}