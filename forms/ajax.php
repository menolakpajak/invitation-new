<?php 
require_once '../conn.php';
require_once '../function.php';


if(isset($_POST['username'])){
    $username = $_POST['username'];
    $data = data("SELECT * FROM aa_customer WHERE username = '$username' ");
    if(!empty($data)){
        echo 'fail';
    }
die;
}

if(isset($_POST['link'])){
    $link = $_POST['link'];
    $data = data("SELECT * FROM aa_customer WHERE folder_name = '$link' ");
    if(!empty($data)){
        echo 'fail';
    }
die;
}


?>