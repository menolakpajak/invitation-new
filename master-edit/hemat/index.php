<?php 

$now = 'hemat';
require_once '../direct.php';
require_once 'condition.php';
$page = 'detail';
$date = date_create($data['date']);
$date = date_format($date,'d/m/Y');
$tema = $data['tema'];

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

    <title>Data | Detail</title>

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
              <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Detail /</span> Form</h4>
              <!-- account detail -->
              <div class="col-md-6 mb-4 order-0">            
                <div class="card p-3">
                  <div class="d-flex align-items-md-start row">
                    <h4 class="mt-1 card-title text-center text-primary">Account Detail</h4>
                    <div class="col-sm-5 text-center text-sm-left">
                      <div class="card-body pb-0 px-0">
                        <img
                          style="margin-top: -20px !important;"
                          class="rounded-circle"
                          src="https://i.pravatar.cc/300?u=<?= $user; ?>"
                          height="140"
                        />
                      </div>
                    </div>
                    <div class="col-sm-7">
                      <div class="card-body">
                        <div class="d-flex justify-content-between mb-n3">
                          <h5>Sign Up :</h5>
                          <p><?= $date; ?></p>
                        </div>
                        <div class="d-flex justify-content-between mb-n3">
                          <h5>Nama :</h5>
                          <p><?= ucwords($data['nama']); ?></p>
                        </div>
                        
                        <div class="d-flex justify-content-between mb-n3">
                          <h5>No. Wa :</h5>
                          <p><?= $data['no_hp']; ?></p>
                        </div>
                        <div class="d-flex justify-content-between mb-n3">
                          <h5>Kota :</h5>
                          <p><?= ucfirst($data['kota']); ?></p>
                        </div>
                        <div class="d-flex justify-content-between mb-n3">
                          <h5>Kode :</h5>
                          <p><?= $data['cookie']; ?></p>
                        </div>                      
                      </div>
                    </div>
                    
                  </div>
                </div>
              </div>
              <!-- account detail -->

              <!-- Akses detail -->
              <div class="col-md-6 mb-4 order-0">
                <div class="card p-3">
                  <div class="d-flex align-items-md-start row">
                    <h4 class="mt-1 card-title text-center text-primary">Access Detail</h4>
                    <div class="col-sm-12">
                      <div class="card-body">
                        <div class="d-flex justify-content-between mb-n3">
                          <h5>Qr-Scaner Token :</h5>
                          <p><?= $data['token']; ?></p>
                        </div>
                        <div class="d-flex justify-content-between mb-n3">
                          <h5>Link Folder :</h5>
                          <p>/<?= $data['folder_name']; ?></p>
                        </div>
                        <div class="d-flex justify-content-between mb-n3">
                          <h5>User Name :</h5>
                          <p><?= $data['username']; ?></p>
                        </div>
                        <div class="d-flex justify-content-between mb-n3">
                          <a id="change-password" href="javascript:void(0)"><h5 class="text-warning">Password :</h5></a>
                          <!-- <h5>Password :</h5> -->
                          <p>******</p>
                        </div>
                        
                        <div class="d-flex justify-content-between mb-n3">
                          <h5>Status :</h5>
                          <p class="text-success"><?= ucfirst($data['status']); ?></p>
                        </div>                       
                      </div>
                    </div>
                    
                  </div>
                </div>  
              </div >
              <!-- akses detail -->

              <!-- Paket detail -->
              <div class="col-md-8 mb-4 order-0">
                <div class="card p-3">
                  <div class="d-flex align-items-md-start row">
                    <h4 class="mt-1 card-title text-center text-primary">Paket Detail</h4>
                    <div class="col-sm-12">
                      <div class="card-body">
                        <div class="d-flex justify-content-between mb-n3">
                          <h5>Paket :</h5>
                          <p><?= $data['paket']; ?></p>
                        </div>
                        <div class="d-flex justify-content-between mb-n3">
                          <h5>Tema :</h5>
                          <p><?= $tema; ?></p>
                        </div>
                        <div class="d-flex justify-content-between mb-n3">
                          <h5>Add-ons :</h5>
                          <p>No</p>
                        </div>                                               
                      </div>
                    </div>
                    
                  </div>
                </div>  
              </div >
              <!-- Paket detail -->

              <!-- Add-ons -->
              <div class="col-md-4 mb-4 order-0">
                <div class="card p-3">
                  <div class="d-flex align-items-md-start row">
                    <h4 class="mt-1 card-title text-center text-primary">Add-ons</h4>
                    <div class="col-sm-12">
                      <div class="card-body">
                        <div class="d-flex justify-content-between mb-n3">
                          <h5>Domain :</h5>
                          <p>Default</p>
                        </div>
                        <div class="d-flex justify-content-between mb-n3">
                          <h5>Galery :</h5>
                          <p>Default</p>
                        </div>
                        <div class="d-flex justify-content-between mb-n3">
                          <h5>Qr-Code :</h5>
                          <p>Default</p>
                        </div>                                               
                      </div>
                    </div>
                    
                  </div>
                </div>  
              </div >
              <!-- Add-ons -->


              <!-- Submit btn-->
              <div class="col-md-12 mb-4 order-0">
                <div class="card p-3">
                  <div class="d-flex align-items-md-start row">
                    <div class="col-sm-12">
                      <div class="card-body">
                        <div class="d-flex col-6">
                            <div class="col-md-3">
                              <a id="next" href="head.php?user=<?= $user; ?>" class="btn btn-gray" style="background-color: #bb818a;" name="next">Next >></a>                              
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
            <footer class="text-center content-footer footer bg-footer-theme">
              <div class="container-xxl d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column">
                <div class="mb-2 mb-md-0">
                  ©
                  <script>
                    document.write(new Date().getFullYear());
                  </script>
                  , made with ❤️ by
                  <a href="https://ada-undangan.online" target="_blank" class="footer-link fw-bolder">Ada-Undangan.online</a>
                </div>
              </div>
            </footer>
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
    <script src="password.js"></script>


    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>

  </body>
</html>
