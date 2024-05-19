<?php 
require_once '../akses.php';
require_once '../function.php';
$result = '';

if(isset($_GET['status'])){
  $result = $_GET['status'];
}


$data = data("SELECT * FROM aa_customer WHERE status = 'queue' ORDER BY date DESC LIMIT 100");

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
    <link rel="stylesheet" href="../../global/assets/vendor/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="../../global/assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="../../global/assets/css/demo.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="../../global/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />
    
    <link rel="stylesheet" href="../../assets/css/sweetalert2.min.css">

    <!-- Page CSS -->

    <!-- Helpers -->
    <script src="../assets/vendor/js/helpers.js"></script>
    <script src="../assets/js/config.js"></script>
  </head>

  <body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">
        <!-- Menu -->

        <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
          <div class="app-brand main">
            <a href="javascript:void(0)" class="app-brand-link">
              <span class="app-brand-logo main">
              <?php include '../../global/struktur/logo-dashboard.php'; ?>
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
                  <a href="../customer/" class="menu-link">
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

              <ul class="navbar-nav flex-row align-items-center ms-auto">

                <!-- User -->
                <li class="nav-item navbar-dropdown dropdown-user dropdown">
                  <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                    <div class="avatar avatar-online">
                      <img src="https://i.pravatar.cc/300?img=<?= $_SESSION['user']; ?>" alt class="w-px-40 h-auto rounded-circle" />
                    </div>
                  </a>
                  <ul class="dropdown-menu dropdown-menu-end">
                    <li>
                      <a class="dropdown-item" href="#">
                        <div class="d-flex">
                          <div class="flex-shrink-0 me-3">
                            <div class="avatar avatar-online">
                              <img src="https://i.pravatar.cc/300?img=<?= $_SESSION['user']; ?>" alt class="w-px-40 h-auto rounded-circle" />
                            </div>
                          </div>
                          <div class="flex-grow-1">
                            <span class="fw-semibold d-block"><?= $_SESSION['user']; ?></span>
                            <small class="text-muted"><?= $_SESSION['akses']; ?></small>
                          </div>
                        </div>
                      </a>
                    </li>
                    <li>
                      <div class="dropdown-divider"></div>
                    </li>
                    <li>
                      <a class="dropdown-item" href="javascript:void(0)">
                        <i class="bx bx-user me-2"></i>
                        <span class="align-middle">My Profile</span>
                      </a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="javascript:void(0)">
                        <i class="bx bx-cog me-2"></i>
                        <span class="align-middle">Settings</span>
                      </a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="javascript:void(0)">
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
              <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Master /</span> Customer</h4>


              <!-- Striped Rows -->
              <div class="card">
                <div class="d-flex justify-content-between">
                  <h4 class="card-header">Form Data</h4>
                  <div class="card-header dropdown">
                    <h5 class="d-inline-block">Sort By</h5>
                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                      <i class="bx bx-menu-alt-right"></i>
                    </button>
                    <div class="dropdown-menu">
                      <a class="sort-date dropdown-item" href="javascript:void(0);"
                      ><i class="bx bx-calendar me-1"></i> Date</a>
                      <a class="sort-name dropdown-item" href="javascript:void(0);"
                        ><i class="bx bx-user me-1"></i> Name</a>
                    </div>
                  </div>
                </div>
                <div style="max-width: 310px;" class="ms-2 d-flex row justify-content-between" >
                  <input id="result" type="hidden" value="<?= $result; ?>">
                  <a class="btn btn-primary float-start w-px-150" onclick="formBaru()" href="javascript:void(0);"><i class='bx bx-list-plus'></i> Form Baru</a>
                  <a class="btn btn-success float-start w-px-150" href="../customer/"><i class='bx bx-list-ul'></i> Cust Data</a>
                </div>
                <div style="min-height: 300px;"class="table-responsive text-nowrap">
                  <table class="table table-striped">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Date</th>
                        <th>Kode</th>
                        <th>Actions</th>
                      </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
<?php if(!empty($data)) { $i=1; ?>
  <?php foreach($data as $datas) {  ?>
                      <tr>
                        <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong><?= $i; ?></strong></td>
                        <td><?= format_date($datas['date'],'d/M/y H:m'); ?></td>
                        <td><?= $datas['cookie']; ?></td>
                        <td>
                          <div class="dropdown">
                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                              <i class="bx bx-dots-vertical-rounded"></i>
                            </button>
                            <div class="dropdown-menu">
                              <a class="text-primary dropdown-item" href="https://ada-undangan.online/forms/?kode=<?= $datas['cookie']; ?>" onclick="copyURI(event)"
                                ><i class="bx bx-copy me-1"></i> Copy Link</a>
                              <a class="text-dark dropdown-item" href="../../forms/?kode=<?= $datas['cookie']; ?>" target="_blank"><i class="bx bx-link-external me-1"></i> Go..</a>
                              <a class="text-danger dropdown-item" href="javascript:void(0);" onclick="formConfirm('<?= $datas['cookie']; ?>')"
                                ><i class="bx bx-trash me-1"></i> Delete</a
                              >
                            </div>
                          </div>
                        </td>
                      </tr>
  <?php $i++; } ?>
<?php } ?>
                    </tbody>
                  </table>
                </div>
              </div>
              <!--/ Striped Rows -->
              <hr class="my-5" />

            </div>
            <!-- / Content -->

            <!-- Footer -->
            <?php include_once '../../global/struktur/footer.php'; ?>
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
    <script src="../../assets/js/sweetalert2.min.js"></script>
    <script src="ajaxnalert.js"></script>

    <script src="../assets/vendor/js/menu.js"></script>
    <!-- endbuild -->

    <!-- Main JS -->
    <script src="../assets/js/main.js"></script>


    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <script defer>
      // copy URL
        function copyURI(evt) {
          evt.preventDefault();
          navigator.clipboard.writeText(evt.target.getAttribute('href')).then(() => {
                /* clipboard write Success */
                const toastCopy = document.querySelector('#toastCopy')
                let toastPlacement;
                toastPlacement = new bootstrap.Toast(toastCopy);
                toastPlacement.show();
          }, () => {
            /* clipboard write failed */
          });
        }
    </script>
  </body>
</html>
