<?php
session_start();

require_once '../conn.php';
require_once '../function.php';
$result = '';

if(!isset($_GET['kode'])){
  header('Location: ../error/');
}
$kode = $_GET['kode'];
$data = data("SELECT * FROM aa_customer WHERE cookie = '$kode' ");
if(empty($data)){
  header('Location: ../error/');
  die;
}
$data = $data[0];
if($data['paket'] != 'hemat'){
  $_SESSION['login'] = true;
  $_SESSION['user'] = $kode;
  $_SESSION['admin'] = true;
  header('Location: ../admin');
  die;  
}
if($data['status'] != 'active'){
  header('Location: ../error/');
  die;
}
$folder = $data['folder_name'];

$link = "https://ada-undangan.online/dari/$folder/";
$link_edit = "https://ada-undangan.online/dari/$folder/edit/";

?>


<!DOCTYPE html>

<html
  lang="en"
  class="light-style"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="../assets/"
  data-template="vertical-menu-template-free"
>
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"
    />

    <title>Link Active</title>

    <meta name="description" content="" />

    <!-- Favicons -->
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/img/icon/16x16.ico">
    <link rel="icon" type="image/png" sizes="32x32" href="../assets/img/icon/32x32.ico">
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/icon/76x76.ico">
    <link rel="apple-touch-icon" sizes="120x120" href="../assets/img/icon/120x120.ico">
    <link rel="apple-touch-icon" sizes="152x152" href="../assets/img/icon/152x152.ico">
    <link rel="apple-touch-icon" sizes="180x180" href="../assets/img/icon/180x180.ico">


    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
      rel="stylesheet"
    />

    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="../assets/css/boxicons.css" />

    <!-- CSS -->
    <link rel="stylesheet" href="../error/error.css" />
  </head>

  <body>
    <!-- Content -->

    <!--Under Maintenance -->
    <div class="container-xxl container-p-y">
      <div class="misc-wrapper">
        <h2 class="mb-2 mx-2">Link Active</h2>
        <p class="mb-4 mx-2">Selamat Link Undangan anda sekarang sudah aktif 😊</p>
        <a href="<?= $link; ?>" style="color:white; background-color:#696cff; border-radius:20px; padding: 8px;" target="_blank"><i class='bx bx-link-external bx-sm'></i> Link Undangan</a>
        <a href="<?= $link_edit; ?>" style="margin-top:10px; color:white; background-color:#ff7e69; border-radius:20px; padding: 8px;" target="_blank"><i class='bx bxs-edit bx-sm'></i> Edit Undangan</a>
        <div class="mt-4">
          <img
            src="active.png"
            alt="girl-doing-yoga-light"
            width="500"
            class="img-fluid"
            data-app-dark-img="illustrations/girl-doing-yoga-dark.png"
            data-app-light-img="illustrations/girl-doing-yoga-light.png"
          />
        </div>
      </div>
    </div>
    <!-- /Under Maintenance -->

    <!-- / Content -->

  </body>
</html>
