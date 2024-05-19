<?php 
session_start();
require_once '../install/install-data.php';
require_once '../config.php';
require_once '../function.php';
$result = '';

if(!isset($_GET['kode'])){
  header('Location: ../error/');
}
$kode = $_GET['kode'];
$data = data("SELECT * FROM aa_customer WHERE cookie = '$kode' ");
if(empty($data) || $data[0]['status'] != 'queue'){
  header('Location: ../error/');
}

// if(isset($_POST['submit'])){
//   $result = complateForm($_POST);
// }


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

    <title>Web | Basic Form</title>

    <meta name="description" content="" />
    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://ada-undangan.online/forms/?kode=<?= $kode; ?>" />
    <meta property="og:title" content="BASIC FORM" />
    <meta property="og:description" content="Form Registrasi Baru" />
    <meta property="og:image" content="https://ada-undangan.online/global/assets/img/illustrations/registration.jpg" />

    <!-- Favicons -->
    <link rel="icon" type="image/png" sizes="16x16" href="../global/assets/img/favicon/16x16.ico">
    <link rel="icon" type="image/png" sizes="24x24" href="../global/assets/img/favicon/24x24.ico">
    <link rel="icon" type="image/png" sizes="32x32" href="../global/assets/img/favicon/32x32.ico">
    <link rel="icon" type="image/png" sizes="48x48" href="../global/assets/img/favicon/48x48.ico">
    <link rel="apple-touch-icon" sizes="64x64" href="../global/assets/img/favicon/64x64.ico">
    <link rel="apple-touch-icon" sizes="96x96" href="../global/assets/img/favicon/96x96.ico">
    <link rel="apple-touch-icon" sizes="128x128" href="../global/assets/img/favicon/128x128.ico">
    <link rel="apple-touch-icon" sizes="192x192" href="../global/assets/img/favicon/192x192.ico">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
      rel="stylesheet"
    />

    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="../global/assets/vendor/fonts/boxicons.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="../global/assets/vendor/css/core.css?dev=<?= $versi; ?>" class="template-customizer-core-css" />
    <link rel="stylesheet" href="../global/assets/vendor/css/theme-default.css?dev=<?= $versi; ?>" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="../global/assets/css/demo.css?dev=<?= $versi; ?>" />

    <!-- Vendors CSS -->
    <!-- <link rel="stylesheet" href="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" /> -->
    <link rel="stylesheet" href="../assets/css/sweetalert2.min.css">

    <!-- Page CSS -->

    <!-- Helpers -->
    <script src="../global/assets/vendor/js/helpers.js"></script>

    <script src="../global/assets/js/config.js"></script>
  </head>

  <body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">
        <!-- Menu -->

        <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
          <div class="app-brand main">
            <a href="https://ada-undangan.online" class="app-brand-link">
              <span class="app-brand-logo main">
              <?php include '../global/struktur/logo-dashboard.php'; ?>
              </span>
            </a>

            <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
              <i class="bx bx-chevron-left bx-sm align-middle"></i>
            </a>
          </div>

          <div class="menu-inner-shadow"></div>

          <ul class="menu-inner py-1">

            <!-- Misc -->
            <li class="menu-header small text-uppercase"><span class="menu-header-text">Misc</span></li>
            <li class="menu-item">
                <a
                  href="https://ada-undangan.online/"
                  target="_blank"
                  class="menu-link"
                >
                  <i class="menu-icon tf-icons bx bx-globe"></i>
                  <div data-i18n="Support">Website</div>
                </a>
              </li>
            <li class="menu-item">
              <a
                href="https://ada-undangan.online/support/"
                target="_blank"
                class="menu-link"
              >
                <i class="menu-icon tf-icons bx bx-support"></i>
                <div data-i18n="Support">Support</div>
              </a>
            </li>
            <li class="menu-item">
              <a
                href="https://ada-undangan.online/donation/"
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
                  <!-- <i class="text-primary bx bxs-user-rectangle fs-4 lh-0"></i> -->
                  <span class="display-6">Basic Information</span>
                </div>
              </div>
              <!-- /Search -->

            </div>
          </nav>

          <!-- / Navbar -->

          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
              <!-- input -->
              <div class="col-md-12 mb-4 order-0">
                <div class="card p-3">
                  <div class="d-flex align-items-md-start row">
                    <div class="col-sm-12">
                      <div class="card-body">
                        <h4 class="text-primary">Customer Info</h4>
                      <hr />
                      <form action="" method="">
                          <div class="card-body">
                            <div class="mb-3 row">
                              <label for="nama" class="col-md-2 col-form-label"><strong>Nama</strong></label>
                              <div class="col-md-10">
                                <input class="form-control" name="nama" type="text" id="nama" maxlength="30"/>
                              </div>
                            </div>
                            <div class="mb-3 row">
                              <label for="username" class="col-md-2 col-form-label"><strong>Email</strong></label>
                              <div class="col-md-10">
                                <input class="form-control" name="username" type="email" id="username" maxlength="50" onkeyup="cekUserName()"/>
                                <div id="cek" class="ms-2 mt-2">
                                  
                                </div>
                              </div>
                            </div>
                            <div class="mb-3 row">
                              <label for="no_wa" class="col-md-2 col-form-label"><strong>No. WA</strong></label>
                              <div class="col-md-10">
                                <input class="form-control" name="no_wa" type="number" id="no_wa"/>
                              </div>
                            </div>
                            <div class="mb-3 row">
                              <label for="kota" class="col-md-2 col-form-label"><strong>Kota</strong></label>
                              <div class="col-md-10">
                                <input class="form-control" name="kota" list="data_kota" id="kota" maxlength="20" autocomplete="off"/>
                                <datalist id="data_kota">
                                  <?php foreach($kota as $kot) :?>
                                  <option value="<?= ucwords(strtolower($kot)); ?>"></option>
                                  <?php endforeach; ?>
                                </datalist>
                              </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="paket" class="col-md-2 col-form-label"><strong>Paket Harga</strong></label>
                                <div class="col-md-10">
                                  <select 
                                  class="form-select" 
                                  id="paket"
                                  onchange="cekTema(this.value)"
                                  aria-label="Default select example" name="paket">
                                      <option selected value="" disabled>--Pilihan Paket Harga--</option>
                                      <?php foreach($paket_list as $paket) :?>
                                      <option value="<?= $paket['name']; ?>"><?= $paket['value']; ?></option>
                                      <?php endforeach; ?>
                                    </select>
                                    <a class="ms-2 mt-2" href="https://ada-undangan.online/#pricing" target="_blank">Lihat Semua Paket..</a>
                                </div>
                              </div>
                              <div class="mb-3 row">
                                <label for="tema" class="col-md-2 col-form-label"><strong>Pilih Tema</strong></label>
                                <div class="col-md-10">
                                  <select 
                                  class="form-select" 
                                  id="tema"
                                  aria-label="Default select example" name="tema">
                                      <option selected value="" disabled>--Pilihan Tema--</option>
                                      <option class="text-danger" value="" disabled>Paket Harga Belum Dipilih !</option>
                                    </select>
                                    <a class="ms-2 mt-2" href="https://ada-undangan.online/#tema" target="_blank">Lihat Semua Tema..</a>
                                </div>
                              </div>
                              <div class="mb-3 row">
                              <label for="link" class="col-md-2 col-form-label"><strong>Link Undangan</strong></label>
                              <div class="col-md-10">
                                <input class="form-control" name="link" type="text" id="link" maxlength="100" placeholder="ex: lauraandgary" onkeyup="cekLink(event)" onkeydown="onlyLeter(event)" autocomplete="off"/>
                                <div id="ceklink" class="ms-2 mt-2">  
                                </div>
                                <p>https://ada-undangan.online/dari/<strong id="linkvalue" class="text-primary">...</strong></p>
                              </div>
                            </div>
                  
                            <div class="mb-3 w-50">
                            <button id="submit" type="button" name="submit" class="btn btn-primary " onclick="kirim('<?= $kode; ?>')"><i class='bx bx-envelope'></i> Kirim</button>  
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
            <?php include_once '../global/struktur/footer.php' ?>
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
    <script src="../global/assets/vendor/libs/jquery/jquery.js"></script>
    <script src="../global/assets/vendor/libs/popper/popper.js"></script>
    <script src="../global/assets/vendor/js/bootstrap.js"></script>
    <script src="../global/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="../assets/js/sweetalert2.min.js"></script>
    <script src="alert.js?dev=<?= $versi; ?>"></script>

    <script src="../global/assets/vendor/js/menu.js"></script>
    <!-- endbuild -->

    <!-- Main JS -->
    <script src="../global/assets/js/main.js"></script>
    <script defer src="script.js"></script>


    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
  </body>
</html>
