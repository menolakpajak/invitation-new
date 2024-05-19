<?php
session_start();
if(isset($_SESSION['preview'])){
  unset($_SESSION['preview']);
}

if(!isset($_SESSION['login'])){
  die(header('Location: ../login/'));
}

require_once '../../function.php';

$cookie = $_SESSION['user'];
$data = data("SELECT * FROM aa_customer WHERE cookie = '$cookie'");
if(empty($data)){
  die(header('Location: ../login/?logout'));
}


$data = $data[0];
if($data['paket'] == 'hemat'){
  die(header("Location: ../../edit/hemat/?user=<?= $cookie; ?>"));
}

if($data['paket'] == 'basic'){
  include_once 'basic.php';
}
if($data['paket'] == 'pro' || $data['paket'] == 'advance'){
  if(isset($_GET['status'])){
    include_once 'status.php';
  }else{
    include_once 'pro.php';
  }
}

?>