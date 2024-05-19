<?php 

require_once '../conn.php';


if(!isset($_COOKIE['reg'])){
  if(isset($_GET['admin']) && isset($_GET['key'])){
    $admin = $_GET['admin'];
    $kode = $_GET['key'];
    header("Location: login.php?admin=$admin&key=$kode");
    die;
  }elseif(isset($_GET['admin'])){
    header("Location: login.php?admin=$admin");
    die;
  }else{
    header("Location: login.php");
    die;
  }
}
$admin = $_COOKIE['reg'];
// $key = $_GET['key'];

$data = data("SELECT * FROM $admin WHERE regStatus = 'registered' ORDER BY id DESC");


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

    <title>Scaning | Data</title>

    <meta name="description" content="" />

    <!-- Favicons -->
    <link rel="icon" type="image/png" sizes="16x16" href="../global/assets/img/favicon/16x16.ico">
    <link rel="icon" type="image/png" sizes="32x32" href="../global/assets/img/favicon/32x32.ico">
    <link rel="apple-touch-icon" sizes="76x76" href="../global/assets/img/favicon/76x76.ico">
    <link rel="apple-touch-icon" sizes="120x120" href="../global/assets/img/favicon/120x120.ico">
    <link rel="apple-touch-icon" sizes="152x152" href="../global/assets/img/favicon/152x152.ico">
    <link rel="apple-touch-icon" sizes="180x180" href="../global/assets/img/favicon/180x180.ico">

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
    <link rel="stylesheet" href="../global/assets/vendor/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="../global/assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="../global/assets/css/demo.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="../global/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />
    <link rel="stylesheet" href="../assets/css/sweetalert2.min.css">

    <link rel="stylesheet" href="../global/assets/vendor/libs/apex-charts/apex-charts.css" />

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
            <a href="" class="app-brand-link">
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
            <!-- Dashboard -->
            <li class="menu-item active open">
              <a href="javascript:void(0)" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div data-i18n="Analytics">Dashboard</div>
              </a>
            </li>

            <!-- Misc -->
            <li class="menu-header small text-uppercase"><span class="menu-header-text">Misc</span></li>
            <li class="menu-item">
              <a
                href="javascript:void(0)"
                target="_blank"
                class="menu-link"
              >
                <i class="menu-icon tf-icons bx bx-support"></i>
                <div data-i18n="Support">Support</div>
              </a>
            </li>
            <li class="menu-item">
              <a
                href="javascript:void(0)"
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
            id="layout-navbar" style="z-index:1000;"
          >
            <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
              <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                <i class="bx bx-menu bx-sm"></i>
              </a>
            </div>

          </nav>

          <!-- / Navbar -->

          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
              <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Total Tamu /</span> <?= count($data); ?></h4>

              <!-- Striped Rows -->
              <div class="card">
              <div class="d-flex justify-content-between">
                  <h4 class="card-header">Data Tamu</h4>
                </div>
                <?php if(!isset($_GET['key']) || empty($_GET['key'])) :?>
                <div style="min-height: 300px;" class="table-responsive text-nowrap">
                  <table class="table table-striped">
                    <thead>
                      <tr>
                        <th>Reg Date</th>
                        <th>Nama</th>
                        <th>No Wa</th>
                        <th>Status</th>
                        <th>Actions</th>
                      </tr>
                    </thead>
                    <tbody id="container" class="table-border-bottom-0">
                      <?php if(!empty($data)) :?>
                        <?php foreach($data as $tamu): ?>
                          <?php $tamu['wa'] = substr_replace($tamu['wa'], 'xxxx',-4); ?>
                      <tr>
                        <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>
                          <?= format_date($tamu['dateReg'],"d/M/y H:i"); ?></strong></td>
                        <td><?= ucwords($tamu['nama']); ?></td>
                        <td><?php if($tamu['wa'] == 'xxxx'){
                          echo '---';
                        }else{
                          
                          echo $tamu['wa'];
                        } 
                        ?></td>
                        <td><span class="badge bg-label-primary me-1"><?php if(empty($tamu['status'])){
                          echo '---';
                        }else{
                          echo $tamu['status'];
                        } 
                        ?></span></td>
                        <td>
                          <div class="dropdown">
                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                              <i class="bx bx-dots-vertical-rounded"></i>
                            </button>
                            <div class="dropdown-menu">
                              <a onclick="detail(this.dataset.tamu)"
                              data-tamu='<?= json_encode($tamu,JSON_PRETTY_PRINT); ?>' class="text-primary dropdown-item" href="javascript:void(0);"
                                ><i class="bx bx-detail me-1"></i> Detail</a>
                            </div>
                          </div>
                        </td>
                      </tr>
                      <?php endforeach; ?>
                    <?php endif; ?>
                    </tbody>
                  </table>
                </div>
                <?php endif; ?>
                <?php if(isset($_GET['key']) && !empty($_GET['key'])):?>
                  <input id="admin" type="hidden" value="<?= $admin; ?>">
                  <input id="input-tamu" type="hidden" value="<?= $_GET['key']; ?>">
                <?php endif; ?>
              </div>
              <!--/ Striped Rows -->
              <hr class="my-5" />
            </div>
            <!-- / Content -->

            <!-- Footer -->
            <?php include_once '../global/struktur/footer.php'; ?>
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

    <!-- <div class="buy-now">
      <a
        href="javascript:void(0)"
        class="btn btn-danger btn-buy-now"
        >Upgrade to Pro</a
      >
    </div> -->

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
    <script src="../global/assets/vendor/js/bootstrap.js"></script>
    <script src="../global/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="../assets/js/sweetalert2.min.js"></script>
    <script src="../global/assets/vendor/js/menu.js"></script>
    <script src="index.js"></script>
    <!-- endbuild -->

    <!-- Main JS -->
    <script src="../global/assets/js/main.js"></script>
    
   

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
  </body>
</html>
