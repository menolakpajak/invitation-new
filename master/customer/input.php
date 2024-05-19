<?php 
require_once '../akses.php';

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

    <title>Master | Customer</title>

    <meta name="description" content="" />

    <!-- Favicons -->
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/img/favicon/16x16.ico">
    <link rel="icon" type="image/png" sizes="32x32" href="../assets/img/favicon/32x32.ico">
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/favicon/76x76.ico">
    <link rel="apple-touch-icon" sizes="120x120" href="../assets/img/favicon/120x120.ico">
    <link rel="apple-touch-icon" sizes="152x152" href="../assets/img/favicon/152x152.ico">
    <link rel="apple-touch-icon" sizes="180x180" href="../assets/img/favicon/180x180.ico">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
      rel="stylesheet"
    />

    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="../assets/vendor/fonts/boxicons.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="../assets/vendor/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="../assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="../assets/css/demo.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />
    <link rel="stylesheet" href="../assets/vendor/libs/apex-charts/apex-charts.css" />

    <!-- Page CSS -->

    <!-- Helpers -->
    <script src="../assets/vendor/js/helpers.js"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="../assets/js/config.js"></script>
  </head>

  <body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">
        <!-- Menu -->

        <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
          <div class="app-brand main">
            <a href="" class="app-brand-link">
              <span class="app-brand-logo main">
                <img src="../assets/img/icons/brands/ada-undangan.png" alt="ada-undangan.online-logo">
              </span>
            </a>

            <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
              <i class="bx bx-chevron-left bx-sm align-middle"></i>
            </a>
          </div>

          <div class="menu-inner-shadow"></div>

          <ul class="menu-inner py-1">
            <!-- Dashboard -->
            <li class="menu-item">
              <a href="../" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div data-i18n="Analytics">Dashboard</div>
              </a>
            </li>

            <!-- Layouts -->
            <li class="menu-item active open">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bxs-user-rectangle"></i>
                <div data-i18n="Layouts">Client</div>
              </a>

              <ul class="menu-sub">
                <li class="menu-item active">
                  <a href="javascript:void(0)" class="menu-link">
                    <div data-i18n="Without menu">Customer</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="../patner/" class="menu-link">
                    <div data-i18n="Without navbar">Patner</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="../statistik/" class="menu-link">
                    <div data-i18n="Fluid">Statistik </div>
                  </a>
                </li>
              </ul>
            </li>

            <!-- Misc -->
            <li class="menu-header small text-uppercase"><span class="menu-header-text">Misc</span></li>
            <li class="menu-item">
              <a
                href="https://github.com/themeselection/sneat-html-admin-template-free/issues"
                target="_blank"
                class="menu-link"
              >
                <i class="menu-icon tf-icons bx bx-support"></i>
                <div data-i18n="Support">Support</div>
              </a>
            </li>
            <li class="menu-item">
              <a
                href="https://themeselection.com/demo/sneat-bootstrap-html-admin-template/documentation/"
                target="_blank"
                class="menu-link"
              >
                <i class="menu-icon tf-icons bx bxs-donate-heart"></i>
                <div data-i18n="Documentation">Donasi</div>
              </a>
            </li>
          </ul>
        </aside>
        <!-- / Menu -->

        <!-- Layout container -->
        <div class="layout-page">
          <!-- Navbar -->

          <nav
            class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
            id="layout-navbar"
          >
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
                  <span class="display-6">Input Customer</span>
                </div>
              </div>
              <!-- /Search -->

              <ul class="navbar-nav flex-row align-items-center ms-auto">

                <!-- User -->
                <li class="nav-item navbar-dropdown dropdown-user dropdown">
                  <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                    <div class="avatar avatar-online">
                      <img src="../assets/img/avatars/1.png" alt class="w-px-40 h-auto rounded-circle" />
                    </div>
                  </a>
                  <ul class="dropdown-menu dropdown-menu-end">
                    <li>
                      <a class="dropdown-item" href="#">
                        <div class="d-flex">
                          <div class="flex-shrink-0 me-3">
                            <div class="avatar avatar-online">
                              <img src="../assets/img/avatars/1.png" alt class="w-px-40 h-auto rounded-circle" />
                            </div>
                          </div>
                          <div class="flex-grow-1">
                            <span class="fw-semibold d-block">John Doe</span>
                            <small class="text-muted">Admin</small>
                          </div>
                        </div>
                      </a>
                    </li>
                    <li>
                      <div class="dropdown-divider"></div>
                    </li>
                    <li>
                      <a class="dropdown-item" href="my-profile.html">
                        <i class="bx bx-user me-2"></i>
                        <span class="align-middle">My Profile</span>
                      </a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#">
                        <i class="bx bx-cog me-2"></i>
                        <span class="align-middle">Settings</span>
                      </a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#">
                        <span class="d-flex align-items-center align-middle">
                          <i class="flex-shrink-0 bx bx-credit-card me-2"></i>
                          <span class="flex-grow-1 align-middle">Billing</span>
                          <span class="flex-shrink-0 badge badge-center rounded-pill bg-danger w-px-20 h-px-20">4</span>
                        </span>
                      </a>
                    </li>
                    <li>
                      <div class="dropdown-divider"></div>
                    </li>
                    <li>
                      <a class="dropdown-item" href="auth-login-basic.html">
                        <i class="bx bx-power-off me-2"></i>
                        <span class="align-middle">Log Out</span>
                      </a>
                    </li>
                  </ul>
                </li>
                <!--/ User -->
              </ul>
            </div>
          </nav>

          <!-- / Navbar -->

          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
              <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Customer /</span> New Input</h4>

              <!-- Information -->
              <div class="col-md-12 mb-4 order-0">
                <div class="card p-3">
                  <h4 class="mt-1 card-title text-center text-primary">Information</h4>
                </div>
              </div>
              <!-- Information -->

              

              <!-- input -->
              <div class="col-md-12 mb-4 order-0">
                <div class="card p-3">
                  <div class="d-flex align-items-md-start row">
                    <div class="col-sm-12">
                      <div class="card-body">
                        <h4 class="text-primary">Customer Info</h4>
                      <hr />
                      <form action="" method="post">
                          <div class="card-body">
                            <div class="mb-3 row">
                              <label for="nama" class="col-md-2 col-form-label">Nama</label>
                              <div class="col-md-10">
                                <input class="form-control" name="nama" type="text" id="nama" maxlength="30" required/>
                              </div>
                            </div>
                            <div class="mb-3 row">
                              <label for="username" class="col-md-2 col-form-label">Email</label>
                              <div class="col-md-10">
                                <input class="form-control" name="username" type="email" id="username" maxlength="30" required/>
                              </div>
                            </div>
                            <div class="mb-3 row">
                              <label for="no_wa" class="col-md-2 col-form-label">No. WA</label>
                              <div class="col-md-10">
                                <input class="form-control" name="no_wa" type="number" id="no_wa" maxlength="15" required/>
                              </div>
                            </div>
                            <div class="mb-3 row">
                              <label for="kota" class="col-md-2 col-form-label">Kota</label>
                              <div class="col-md-10">
                                <input class="form-control" name="kota" type="text" id="kota" maxlength="20" required/>
                              </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="paket" class="col-md-2 col-form-label">Paket Harga</label>
                                <div class="col-md-10">
                                  <select 
                                  class="form-select" 
                                  id="paket"
                                  aria-label="Default select example" required>
                                      <option selected="" disabled>--Pilihan Paket Harga--</option>
                                      <option value="hemat">Hemat 149K</option>
                                      <option value="pro">Pro 235k</option>
                                      <option value="advance">Advance 399k</option>
                                    </select>
                                    <a class="ms-2 mt-2" href="">Lihat Paket Lainnya..</a>
                                </div>
                              </div>
                              <div class="mb-3 row">
                                <label for="paket" class="col-md-2 col-form-label">Paket Tema</label>
                                <div class="col-md-10">
                                  <select 
                                  class="form-select" 
                                  id="paket"
                                  aria-label="Default select example" required>
                                      <option selected="" disabled>--Pilihan Paket Harga--</option>
                                      <option value="greenLeave">Green Leave</option>
                                      <option value="roseGold">Rose Gold</option>
                                      <option value="clasicChrome">Clasic Chrome</option>
                                    </select>
                                    <a class="ms-2 mt-2" href="">Lihat Semua Tema..</a>
                                </div>
                              </div>
                            
                  
                            <div class="mb-3 w-50">
                            <button type="submit" name="submit" class="btn btn-primary ">Input</button>  
                            </div>  
                          </div>                                                         
                      </form>          
                      </div>
                    </div>
                  </div>
                </div>  
              </div >
              <!-- input -->
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
    <script src="../assets/vendor/libs/jquery/jquery.js"></script>
    <script src="../assets/vendor/libs/popper/popper.js"></script>
    <script src="../assets/vendor/js/bootstrap.js"></script>
    <script src="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

    <script src="../assets/vendor/js/menu.js"></script>
    <!-- endbuild -->

    <!-- Main JS -->
    <script src="../assets/js/main.js"></script>


    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
  </body>
</html>
