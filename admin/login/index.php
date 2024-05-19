<?php
session_start();
if(isset($_SESSION['preview'])){
  unset($_SESSION['preview']);
}

if(isset($_GET['logout'])){
  $_SESSION = [];
  session_unset();
  session_destroy();
  if(isset($_COOKIE['user'])){
    setcookie('user', '', time() + (-9000), '/');
  }
  die(header('Location: ./'));
}

if(isset($_SESSION['login']) && isset($_SESSION['admin'])){
  die(header('Location: ../'));
}

require_once '../../conn.php';
require_once '../../function.php';

$result = '';
if(isset($_POST['submit'])){
  $result = admin_login($_POST);
}

// var_dump($_SESSION);

?>

<!DOCTYPE html>

<html
  lang="en"
  class="light-style customizer-hide"
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

    <title>Login Access</title>

    <meta name="description" content="" />

    <!-- Favicons -->
    <link rel="icon" type="image/png" sizes="16x16" href="../../global/assets/img/favicon/16x16.ico">
    <link rel="icon" type="image/png" sizes="32x32" href="../../global/assets/img/favicon/32x32.ico">
    <link rel="apple-touch-icon" sizes="76x76" href="../../global/assets/img/favicon/76x76.ico">
    <link rel="apple-touch-icon" sizes="120x120" href="../../global/assets/img/favicon/120x120.ico">
    <link rel="apple-touch-icon" sizes="152x152" href="../../global/assets/img/favicon/152x152.ico">
    <link rel="apple-touch-icon" sizes="180x180" href="../../global/assets/img/favicon/180x180.ico">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
      rel="stylesheet"
    />

    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="../../global/assets/vendor/fonts/boxicons.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="../../global/assets/vendor/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="../../global/assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="../../global/assets/css/demo.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="../../global/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />

    <!-- Page CSS -->
    <!-- Page -->
    <link rel="stylesheet" href="../../global/assets/vendor/css/pages/page-auth.css" />
    <!-- Helpers -->
    <script src="../../global/assets/vendor/js/helpers.js"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="../../global/assets/js/config.js"></script>
  </head>

  <body>
    <!-- Content -->

    <div class="container-xxl">
      <div class="authentication-wrapper authentication-basic container-p-y">
        <div class="authentication-inner">
          <!-- Register -->
          <div class="card">
            <div class="card-body">
              <!-- Logo -->
              <div class="app-brand justify-content-center">
                <a href="https://ada-undangan.online" class="app-brand-link gap-2">
                  <span class="app-brand-logo demo">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 405 246.4"><defs><style>.cls-1a{fill:#a27b5c;}.cls-2a{fill:#2c3639;}.cls-3a{fill:#dcd7c9;}</style></defs><g id="Layer_2" data-name="Layer 2"><g id="logo_cerah" data-name="logo cerah">
                      <path class="cls-1a animate__animated animate__fadeInRight animate__slow" d="M112,246.4H400a5,5,0,0,0,5-5V27.23a5,5,0,0,0-8-4L109,237.39A5,5,0,0,0,112,246.4Z"/>
                      <path class="cls-2a animate__animated animate__fadeInDown animate__slow" d="M379.5,0H27.39a5,5,0,0,0-3,9L200.46,139.92a5,5,0,0,0,6,0L382.48,9A5,5,0,0,0,379.5,0Z"/>
                      <path class="cls-3a animate__animated animate__fadeInLeft animate__slow" d="M0,25.83V241.4a5,5,0,0,0,5,5H61.56a5,5,0,0,0,3-1l116.69-86.76a5,5,0,0,0,0-8L8,21.81A5,5,0,0,0,0,25.83Z"/></g></g></svg>
                      <!-- text -->
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 292.59 48.62"><defs><style>.cls-1{font-size:40.52px;fill:#404e4f;font-family:Jost-Black, Jost;font-weight:800;}.cls-2{letter-spacing:-0.01em;}.cls-3{fill:#a27b5c;}.cls-4{fill:#dfbf96;}</style></defs><g id="Layer_2" data-name="Layer 2"><g id="logo_cerah" data-name="logo cerah">
                        <text class="cls-1" transform="translate(0 34.44)">IN<tspan class="cls-2" x="47.41" y="0">V</tspan><tspan x="78.4" y="0">OITE</tspan><tspan class="cls-3" x="178.08" y="0">.</tspan><tspan class="cls-4" x="191.7" y="0">COM</tspan></text></g></g></svg>
                  </span>
                </a>
              </div>
              <!-- /Logo -->
              <h4 class="mb-1">Welcome 👋</h4>
              <p class="mb-3">Please sign-in to your account</p>

              <form id="formAuthentication" class="mb-3" action="" method="POST">
                <div class="mb-3">
                  <label for="email" class="form-label">Email or Username</label>
                  <input
                    type="text"
                    class="form-control"
                    id="email"
                    name="username"
                    placeholder="Enter your email or username"
                    autofocus
                    required
                  />
                </div>
                <div class="mb-3 form-password-toggle">
                  <div class="d-flex justify-content-between">
                    <label class="form-label" for="password">Password</label>
                    <!-- <a href="javascript:void(0)">
                      <small>Forgot Password?</small>
                    </a> -->
                    
                  </div>
                  <div class="input-group input-group-merge">
                    <input
                      type="password"
                      id="password"
                      class="form-control"
                      name="password"
                      placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                      aria-describedby="password"
                      required
                    />
                    <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                  </div>
                </div>
                <i style="color: red;"><?= $result; ?></i>
                <div class="mb-3">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="remember-me" name="remember"/>
                    <label class="form-check-label" for="remember-me"> Remember Me </label>
                  </div>
                </div>
                <div class="mb-3">
                  <button name="submit" class="btn btn-primary d-grid w-100" type="submit">Log in</button>
                </div>
              </form>

              <!-- <p class="text-center">
                <span>New on our platform?</span>
                <a href="auth-register-basic.html">
                  <span>Create an account</span>
                </a>
              </p> -->
            </div>
          </div>
          <!-- /Register -->
        </div>
      </div>
    </div>

    <!-- / Content -->

    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="../../global/assets/vendor/libs/jquery/jquery.js"></script>
    <script src="../../global/assets/vendor/libs/popper/popper.js"></script>
    <script src="../../global/assets/vendor/js/bootstrap.js"></script>
    <script src="../../global/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

    <script src="../../global/assets/vendor/js/menu.js"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->

    <!-- Main JS -->
    <script src="../../global/assets/js/main.js"></script>

    <!-- Page JS -->

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
  </body>
</html>
