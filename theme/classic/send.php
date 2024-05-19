<?php 

if(!isset($_POST)){
    header('Location: /');
}
// echo 'sukses';
// die;

require 'function.php';

if(isset($_POST['nama'])){
    $result = input($_POST);
    }else{
        header('Location: ../');
    }

