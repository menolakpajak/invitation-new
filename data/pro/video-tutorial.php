<?php 


$now = 'pro';
require_once '../direct.php';
require_once 'condition.php';
$page = 'video';
$date = date_create($data['date']);
$date = date_format($date,'d/m/Y');
$tema = $data['tema'];
$view = "../../theme/$tema/preview.php?user=$user&page=$page";
$iframe = "../../theme/$tema/preview.php?user=$user&page=$page";
$cek = 'checked';
$hide = '';
$cek_val = 'on';
if(isset($json['switch_video'])){
    if($json['switch_video'] == 'off'){
      $cek = '';
      $hide = 'd-none';
      $iframe = '../../error';
      $cek_val = 'off';
    }
}
?>
<!DOCTYPE html>

<html
  lang="en"
  class="light-style layout-menu-fixed"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="assets/"
  data-template="vertical-menu-template-free"
>
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"
    />

    <title>Video Tutorial</title>

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
    <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.6.1/css/all.css'>
    <link rel="stylesheet" href="css/progressBar.css">

    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="../../global/assets/vendor/fonts/boxicons.css" />
    <!-- Core CSS -->
    <link rel="stylesheet" href="../../global/assets/vendor/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="../../global/assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="../../global/assets/css/demo.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="../../global/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />
    <link rel="stylesheet" href="../../assets/css/sweetalert2.min.css">
    <link rel="stylesheet" href="switch.css">

    <!-- Page CSS -->

    <!-- Helpers -->
    <script src="../../global/assets/vendor/js/helpers.js"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="../../global/assets/js/config.js"></script>
  </head>

  <body>
    <!-- proges box -->
<div id="progress-box">
  <div class="backcolor"></div>
  <div id="wrapper">
    <div class="loader"></div>
    <div class="loading-bar">
      <div class="progress-bar"></div>
    </div>
    <div class="status">
      <div class="state"></div>
      <div class="percentage">0%</div>
    </div>
  </div>
</div>
<!-- proges box -->
    <!-- Layout wrapper -->
    <input type="hidden" id="user" name="user" value="<?= $user; ?>">
    <input type="hidden" id="view" name="view" value="<?= $view; ?>">
    <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">
        <!-- Menu -->

        <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
          <div class="app-brand main">
            <a href="https://ada-undangan.online" class="app-brand-link">
              <span class="app-brand-logo main">
              <?php include '../../global/struktur/logo-dashboard.php'; ?>
              </span>
            </a>

            <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
              <i class="bx bx-chevron-left bx-sm align-middle"></i>
            </a>
          </div>

          <div class="menu-inner-shadow"></div>
          <ul id="page" class="menu-inner py-1">
            <?php include 'page.php'; ?>
          </ul>
        </aside>
        <!-- / Menu -->

        <!-- Layout container -->
        <div class="layout-page">
          <!-- Navbar -->

          <nav
            class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
            id="layout-navbar">
            <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
              <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                <i class="bx bx-menu bx-sm"></i>
              </a>
            </div>

            <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
              <!-- Search -->
              <div class="navbar-nav align-items-center">
                <div class="nav-item d-flex align-items-center">
                  <span class="display-6">Video Tutorial</span>
                </div>
              </div>
              <!-- /Search -->  
            </div>
          </nav>

          <!-- / Navbar -->

          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->
            <div class="ms-auto me-auto container-xxl flex-grow-1 container-p-y row">
              <div id="status">
              </div>

              <!-- Video -->
              <div class="col-md-12 mb-4 order-0">
                <div class="card p-3">
                  <div class="d-flex align-items-md-start row">
                      <!-- input -->
                    <div class="col-md-12">
                      <div class="card-body">
                        <div style="overflow-x:auto;">
                        <h3 class="mb-3 text-primary">Get URL Embeded Youtube Video</h3>
                      </div>
                        <hr />
                                  
                        <div id="data-video" class="input-box text-nowrap">
                          <div>
                            <h4>From Desktop :</h4>
                          </div>
                          <div>
                            <p class="mb-0 text-wrap text"><strong>1.</strong> Buka Aplikasi <strong class="text-primary">GOOGLE CHROME</strong> pada Komputer Anda.</p>
                            <img loading="lazy" class="img-fluid mb-4 rounded-3" src="../img/video/1.jpg" alt="upload video">
                            <p class="mb-0 text-wrap"><strong>2.</strong> Dalam Kolom Url masukan <strong class="text-primary">www.youtube.com</strong>.</p>
                            <img loading="lazy" class="img-fluid mb-4 border border-3 border-dark rounded-3" src="../img/video/2.jpg" alt="upload video">
                            <p class="mb-0 text-wrap"><strong>3.</strong> Dalam Kolom Pencarian <strong class="text-primary">youtube</strong> Carilah Video Yang ingin Anda Tampilkan di Undangan Anda</p>
                            <img loading="lazy" class="img-fluid mb-4 border border-3 border-dark rounded-3" src="../img/video/3.jpg" alt="upload video">
                            <p class="mb-0 text-wrap"><strong>4.</strong> Klik icon/tombol <strong class="text-primary">SHARE</strong> lalu pilih icon <strong class="text-primary">EMBED</strong>.</p>
                            <img loading="lazy" class="img-fluid mb-4 rounded-3" src="../img/video/4.jpg" alt="upload video">
                            <p class="mb-0 text-wrap"><strong>5.</strong> Perhatikan di dalam tag <strong class="text-primary">IFRAME</strong> youtube Anda akan menemukan <strong class="text-primary">src="https://www.youtube.com/embed/XxxxxxxxxxX"</strong>, Copy link tersebut tanpa tanda petik("").</p>
                              <img loading="lazy" class="img-fluid mb-4 rounded-3" src="../img/video/5.jpg" alt="upload video">
                            <p class="mb-0 text-wrap"><strong>6.</strong> Kembali ke halaman <strong class="text-primary">EDIT VIDEO</strong> lalu anda dapat meletakkan link yang sudah anda copy tadi di kolom <strong class="text-primary">VIDEO URL</strong>.</p>
                            <p class="mb-0 text-wrap"><strong>7.</strong> Terakhir klik <strong class="text-primary">APPLY</strong> untuk memastikan video yang anda ingin tampilkan telah Tertampil dengan Baik.</p>
                            <img loading="lazy" class="img-fluid mb-4 border border-3 border-dark rounded-3" src="../img/video/6.jpg" alt="upload video">
                          </div>
                          <div class="mb-2 row">
                            <a class="btn btn-primary w-px-100 " href="video.php?user=<?= $user; ?>" >Back</a>
                          </div>
                        </div>                                                         
                      </div>
                    </div>
                      <!-- input -->

                  </div>
                </div>  
              </div >
              <!-- video -->

              <hr class="my-5" />

            </div>


            <!-- / Content -->

            <!-- Footer -->
            <?php include_once '../../global/struktur/footer.php' ?>
            <!-- / Footer -->

            <div class="content-backdrop fade"></div>
          </div>
          <!-- Content wrapper -->
        </div>
        <!-- / Layout page -->
      </div>

      <!-- Overlay -->
      <div class="layout-overlay layout-menu-toggle"></div>
    </div>
    <!-- / Layout wrapper -->

    <!-- Toast with Placements -->
    <div
    id="toastCopy"
    class="bs-toast toast toast-placement-ex m-2 bg-primary"
    role="alert"
    aria-live="assertive"
    aria-atomic="true"
    data-delay="2000"
    data-autohide="true"
    style="top: 0; left: 0;"
  >
    <div class="toast-header">
      <i class="bx bx-bell me-2"></i>
      <div class="me-auto fw-semibold">Ok</div>
      <!-- <small>11 mins ago</small> -->
      <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
    </div>
    <div class="toast-body">Link Berhasil dicopy!</div>
  </div>

    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="../../global/assets/vendor/libs/jquery/jquery.js"></script>
    <script src="../../global/assets/vendor/libs/popper/popper.js"></script>
    <script src="../../global/assets/vendor/js/bootstrap.js"></script>
    <script src="../../global/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

    <script src="../../global/assets/vendor/js/menu.js"></script>
    <!-- endbuild -->

    <!-- Main JS -->
    <script src="../../global/assets/js/main.js"></script>


    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>

  </body>
</html>
