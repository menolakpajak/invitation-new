<?php
session_start();

if($_SESSION['akses'] != 'master'){
  die(header('Location: ../../error/'));
}
if(!isset($_SESSION['preview'])){
  $_SESSION['preview'] = true;
}

if(!isset($_GET['user'])){
    header('Location: ../../error/');
    die;
  }
  
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

  // mengembalikan folder yang terhpus
if(isset($_GET['restore'])){
  $folder = $data['folder_name'];
  if(!file_exists("../../dari/$folder/")){
    $cookie = $data['cookie'];
    require_once '../../install/txt.php';
    mkdir("../../dari/$folder",0777,true);
          mkdir("../../dari/$folder/song",0777,true);
          mkdir("../../dari/$folder/imgs/couple",0777,true);
          mkdir("../../dari/$folder/imgs/cover",0777,true);
          mkdir("../../dari/$folder/imgs/quote",0777,true);
          mkdir("../../dari/$folder/imgs/galery",0777,true);
          mkdir("../../dari/$folder/imgs/galery2",0777,true);
          touch("../../dari/$folder/index.php",0777,true);
          $index = fopen("../../dari/$folder/index.php",'w');
          fwrite($index,$txt);
          fclose($index);
  }
}

$paket = $data['paket'];

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

?>