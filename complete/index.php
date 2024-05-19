<?php 

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

if($data['status'] == 'active'){
  header("Location: ../active/?kode=$kode");
  die;
}
if($data['status'] != 'complete'){
  header('Location: ../error/');
  die;
}
$nama = $data['nama'];
$kode = $data['cookie'];

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

    <title>Payment</title>

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
    <link rel="stylesheet" href="../assets/css/boxicons.css">
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

    <!-- CSS -->
    <link rel="stylesheet" href="../error/error.css" />
  </head>

  <body>
    <!-- Content -->

    <!--Under Maintenance -->
    <div class="container-xxl container-p-y">
      <div class="misc-wrapper">
          <h2 class="mb-2 mx-2">Payment</h2>
          <p class="mb-1 mx-2">Lakukan Pembayaran dan Konfirmasi Melalui Link Di bawah ini</p>
          <p class="mb-4 mx-2 text-danger">Jika Pembayaran tidak dilakukan <br>dalam jeda waktu 3 Hari setelah konfirmasi, <br>maka link undangan anda akan terhapus secara otomatis.</p>
          <a class="animate__animated animate__pulse animate__slower animate__infinite" href="https://api.whatsapp.com/send?phone=628980000703&text=Hallo%20Kak,
Saya%20<?= $nama; ?>%20ingin%20melakukan%20pembayaran
%20dengan%20order%20id%20--<?= $kode; ?>--" style="color:white; background-color:#696cff; border-radius:20px; padding: 8px;" target="_blank"><i class='bx bxl-whatsapp bx-md'></i> WhatsApp</a>
        <div class="mt-4">
          <img
            src="payment.svg"
            alt="payment image"
            width="300"
            class="img-fluid"
          />
        </div>
      </div>
    </div>
    <!-- /Under Maintenance -->

    <!-- / Content -->

  </body>
</html>
