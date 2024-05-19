<?php 
ob_start();
require_once '../install/install-data.php';
require_once '../config.php';
require_once '../function.php';


if(!isset($_POST['submit'])){
    echo 'fail';
    die;
  }

  if($_POST['submit'] == true){
      $result = complateForm($_POST);
      echo $result;
  }




?>