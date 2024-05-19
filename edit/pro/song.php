<?php 


$now = 'pro';
require_once '../direct.php';
require_once 'condition.php';
$page = 'song';
$date = date_create($data['date']);
$date = date_format($date,'d/m/Y');
$tema = $data['tema'];
$iframe = "../../theme/$tema/preview.php?user=$user&page=$page";


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

    <title>Data | Music</title>

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
    <!-- Layout wrapper -->
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
    
    <input type="hidden" id="user" name="user" value="<?= $user; ?>">
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
                  <span class="display-6">Customer Detail</span>
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
                  <h4 class="fw-bold px-2 py-2 mb-4 bg-info rounded-2 text-white"><i class='bx bx-check bx-lg'></i> Cant Be Reset !</h4>
              </div>

              <!-- song -->
              <div class="col-md-12 mb-4 order-0">
                <div class="card p-3">
                  <div class="d-flex align-items-md-start row">
                      <!-- input -->
                    <div class="col-sm-6">
                      <div class="card-body">
                        <div style="display:flex; justify-content:space-between;overflow-x:auto;">
                        <h4 class="text-primary">Backgroud Music</h4>
                      </div>
                        <hr />          
                        <div id="data-song" class="text-nowrap">
                          <div class="mb-2 row">
                            <label for="song" class="col-md-3 col-form-label">Sound</label>
                            <div class="col-md-6">
                              <input class="form-control" name="song" type="file" id="song" accept=".mp3" />
                            </div>
                          </div>
                          <div class="mb-2 row">
                            <button class="btn btn-primary w-px-100 " type="button" name="submit" onclick="apply('<?= $user; ?>','song')">Apply</button>
                          </div>
                        </div>                                                         
                      </div>
                    </div>
                      <!-- input -->

                      <!-- preview -->
                    <div id="container" style="padding:0;" class="col-sm-6">
                      <div style="padding:0;" class="card-body">
                        <div>
                        <h4 class="text-warning">
                        Preview
                        </h4>
                      </div>
                        <div id="preview" style="max-width:414px; height: 800px; padding:0;">
                          <iframe 
                          height="800px"
                          style="width: 100%; height: 100%;border-radius:20px;"
                          src="<?= $iframe; ?>"
                          scrolling="no"
                          frameborder="0">
                          </iframe>
                        </div>                                                         
                      </div>
                    </div>
                      <!-- preview -->

                      
                      <!-- input -->
                  </div>
                </div>  
              </div >
              <!-- song -->

              <!-- Submit btn-->
              <div class="col-md-12 mb-4 order-0">
                <div class="card p-3">
                  <div class="d-flex align-items-md-start row">
                    <div class="col-sm-12">
                      <div class="card-body">
                        <!-- navigation -->
                        <div class="d-flex col-12 col-sm-5 col-md-6">
                        <div class="col-6 col-md-3">
                              <a id="prev" href="qrcode.php?user=<?= $user; ?>" class="btn btn-gray" style="background-color: #bb818a;" name="previous"><< prev</a>                              
                            </div>
                            <div class="col-6 col-md-3">
                              <a id="next" href="quote.php?user=<?= $user; ?>" class="btn btn-gray" style="background-color: #bb818a;" name="next">Next >></a>                              
                            </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>  
              </div >
              <!-- Submit btn -->
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
    <script src="../../assets/js/sweetalert2.min.js"></script>
    <script src="alert.js?dev=<?= $versi; ?>"></script>
    <script src="switch.js?dev=<?= $versi; ?>"></script>


    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>

  </body>
</html>
