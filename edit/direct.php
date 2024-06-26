<?php
session_start();
if(!isset($_SESSION['login'])){
  die(header('Location: ../../admin/login'));
}
if(!isset($_SESSION['preview'])){
  $_SESSION['preview'] = true;
}

if(!isset($_GET['user'])){
    header('Location: ../../error/');
    die;
  }
  
  require_once '../../conn.php';
  require_once '../../function.php';
  $user = $_GET['user'];
  $data = data("SELECT * FROM aa_customer WHERE cookie = '$user' ");

  if(empty($data)){
    header('Location: ../../error/');
    die;
  }

  if(!isset($_COOKIE['user'])){
    setcookie('user', $user, time() + (2629800 * 6), '/');
  }else{
    if($_COOKIE['user'] != $user){
      setcookie('user', $user, time() + (2629800 * 6), '/');
    }
  }

  $data=$data[0];
  $info = $data['data_use'];
  $info = json_decode($info,true);
  
  if(empty($data['status'])){
    header('Location: ../../error');
    die;
  }
  if($data['status'] == 'queue'){
    header('Location: ../../error');
    die;
  }
  if($data['status'] == 'pending'){
    header("Location: ../../proses/?kode=$user");
    die;
  }
  if($data['status'] == 'complete'){
    header("Location: ../../complete/?kode=$user");
    die;
  }

$paket = $data['paket'];

if(!isset($info['custom']) || $info['custom'] == 'off'){
  if($now != $paket){
    
    if($paket == 'hemat'){
        header("Location: ../hemat?user=$user");
        die;
    }
    if($paket == 'basic'){
        header("Location: ../basic?user=$user");
        die;
    }
    if($paket == 'pro'){
        header("Location: ../pro?user=$user");
        die;
    }
    if($paket == 'advance'){
        header("Location: ../advance?user=$user");
        die;
    }
  }
}

if(isset($info['custom']) && $info['custom'] == 'on'){
  header('Location: ../../403');
        die;
}

?>