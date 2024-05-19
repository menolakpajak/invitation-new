<?php 


$now = 'pro';
require_once '../direct.php';
require_once 'condition.php';
$page = 'layout';
$date = date_create($data['date']);
$date = date_format($date,'d/m/Y');
$tema = $data['tema'];
$iframe = "../../theme/$tema/?user=$user";

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

    <title>Data | Layout</title>

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
    <link rel="stylesheet" href="dragndrop/style.css">
    

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
    <input type="hidden" id="page" name="page" data-page="cover">
    <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">
        <!-- Menu -->

        <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
          <div class="app-brand main">
            <a href="https://ada-undangan.online" class="app-brand-link">
              <span class="app-brand-logo main">
                <img src="../../global/assets/img/icons/brands/ada-undangan.png" alt="ada-undangan.online-logo">
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
                  <!-- <i class="bx bx-search fs-4 lh-0"></i> -->
                  <!-- <input
                    type="text"
                    class="form-control border-0 shadow-none"
                    placeholder="Search..."
                    aria-label="Search..."
                  /> -->
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
      
              <!-- finish -->
              <div class="col-md-12 mb-4 order-0">
                <div class="card p-3">
                  <div class="d-flex align-items-md-start row">
                      <!-- Confirmasi -->
                    <div class="col-sm-6">
                      <div class="card-body">
                        <div >
                        <h4 class="text-primary text-center">Layout Setting</h4>
                      </div>
                        <hr />
                        
                        <!-- layout -->
                        <div id="data-song" class="text-nowrap">
                          <div class="mb-2 row">
                            <label class="col-md-3 col-form-label mb-0">Layout :</label>
                            <p>Drag Item to set Layout !</p>
                            <div class="col-md-6">
                              <?php include_once 'setlayout.php'; ?>
                            </div>
                          </div>
                          <div class="mb-2 row justify-content-around rounded-3 p-2 bg-footer-theme">
                            <button id="save" class="btn btn-primary w-px-100 " type="button" name="submit" onclick="apply('<?= $user; ?>','layout')">Apply</button>
                            <button class="btn btn-warning w-px-100" type="button" name="submit" onclick="apply('<?= $user; ?>','finish')">Finish</button>
                          </div>
                        </div>
                        <!-- ------- -->                                                         
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
                          <!-- <div style="max-width:414px; background-color:#c9c7c440; border-radius:50px;" class="mt-2 p-2">
                              <div class="d-flex col-12">
                              <div class="col-6 text-center">
                                    <button id="prev" data-klik="none" class="btn d-none" style="color: #af9677;" type="button"><i class='bx bxs-left-arrow'></i></button>                              
                                  </div>
                                  <div class="col-6 text-center">
                                    <button id="next" data-klik="on" class="btn" style="color: #af9677;" type="button"><i class='bx bxs-right-arrow'></i></button>                              
                                  </div>
                              </div>
                          </div> -->
                      </div>
                    </div>
                      <!-- preview -->

                      
                      <!-- input -->
                  </div>
                </div>  
              </div >
              <!-- finish -->

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


    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="../../global/assets/vendor/libs/jquery/jquery.js"></script>
    <script src="../../global/assets/vendor/libs/popper/popper.js"></script>
    <script src="../../global/assets/vendor/js/bootstrap.js"></script>
    <script src="../../global/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="dragndrop/swappable.js"></script>

    <script src="../../global/assets/vendor/js/menu.js"></script>
    <!-- endbuild -->

    <!-- Main JS -->
    <script src="../../global/assets/js/main.js"></script>
    <script src="../../assets/js/sweetalert2.min.js"></script>
    <script src="alert.js?dev=<?= $versi; ?>"></script>
    <script src="dragndrop/main.js?dev=<?= $versi; ?>"></script>
    
    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    
  </body>
</html>
