<?php 
session_start();
if(isset($_GET['kode'])){
  $kode = $_GET['kode'];
}else{
  $kode = '';
}



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

    <title>On Progress</title>

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
    <link rel="stylesheet" href="../assets/css/animate.css/animate.min.css">

    <!-- CSS -->
    <link rel="stylesheet" href="../error/error.css" />
  </head>

  <body>
    <!-- Content -->

    <!--Under Maintenance -->
    <div class="container-xxl container-p-y">
      <div class="misc-wrapper">
        <?php if($kode == '') :?>
          <h2 class="mb-2 mx-2">On Progress!</h2>
          <p class="mb-4 mx-2">Your request is in process, please wait until it's finished</p>
          <a href="../" style="color:white; background-color:#696cff; border-radius:20px; padding: 8px;">Back to home</a>
        <?php endif; ?>
        <?php if($kode != '') :?>
          <h2 class="mb-2 mx-2">Keep Goin !</h2>
          <p class="mb-4 mx-2">Thank you for submiting form </p>
          <a class="animate__animated animate__pulse animate__infinite	infinite" href="../data/basic/?user=<?= $kode; ?>" style="color:white; background-color:#814f3c; border-radius:20px; padding: 8px;">Go to Next Step</a>
        <?php endif; ?>
        <div class="mt-4">
          <img
            src="process.png"
            alt="girl-doing-yoga-light"
            width="500"
            class="img-fluid"
          />
        </div>
      </div>
    </div>
    <!-- /Under Maintenance -->

    <!-- / Content -->

  </body>
</html>
