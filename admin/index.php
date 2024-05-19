<?php 
session_start();
if(isset($_SESSION['preview'])){
  unset($_SESSION['preview']);
}
if(!isset($_SESSION['login']) || !isset($_SESSION['admin'])){
  die(header('Location: login/?logout'));
}
if(isset($_COOKIE['user'])){
  setcookie('user', '', time() + (-9000), '/');
}

// >>>>>>>>>>>>>>>>>>>>>>>>>>>>>

require_once '../function.php';

$cookie = $_SESSION['user'];
$data = data("SELECT * FROM aa_customer WHERE cookie = '$cookie'");
if(empty($data)){
  die(header('Location: login/?logout'));
}
if($data[0]['status'] != 'active'){
  die(header('Location: login/?logout'));
}
if($data[0]['paket'] == 'hemat'){
  die(header("Location: ../edit/hemat/?user=$cookie"));
}
$tema = $data[0]['tema'];
$link = $data[0]['folder_name'];
$domain = $data[0]['domain'];
if(!empty($domain)){
  $dlink = $domain;
}else{
  $dlink = "https://ada-undangan.online/dari/$link";
}
$data_tamu = data("SELECT * FROM $cookie");
$jumlah_tamu = count($data_tamu);
$read = count(data("SELECT * FROM $cookie WHERE status = 'read' OR status = 'done' " ));
$ignore = count(data("SELECT * FROM $cookie WHERE status IS NULL " ));
$hadir = count(data("SELECT * FROM $cookie WHERE hadir = 'Hadir'"));
$tidakHadir = count(data("SELECT * FROM $cookie WHERE hadir = 'Tidak Hadir'"));

require_once '../config.php';
for($i=0;$i<count($tema_list); $i++){
    if(array_search($tema,$tema_list[$i]) != false){
      break;
    }
}
if($i >= count($tema_list)){
  $pro_tema = 0;
  $tema_value = $tema;
  $tema_use = 0;
}else{
  $tema = $tema_list[$i];
  $pro_tema = protema($total_use,$tema['use']);
  $tema_value = $tema['value'];
  $tema_use = $tema['use'];
}

if(isset($_GET['my-profile'])){
  include_once 'my-profile.php';
  die;
}

if($data[0]['paket'] == 'basic') 
include_once 'basic.php';

if($data[0]['paket'] == 'pro') 
include_once 'pro.php';

if($data[0]['paket'] == 'advance') 
include_once 'pro.php';


?>


