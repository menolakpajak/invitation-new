<?php 
session_start();
if(isset($_SESSION['preview'])){
  unset($_SESSION['preview']);
}

if(!isset($_SESSION['login'])){
  die(header('Location: ../login/'));
}

require_once '../../function.php';

$cookie = $_SESSION['user'];
$data = data("SELECT * FROM aa_customer WHERE cookie = '$cookie'");
if(empty($data)){
  die(header('Location: ../login/?logout'));
}
$data = $data[0];
if($data['paket'] == 'hemat'){
  die(header("Location: ../../edit/hemat/?user=<?= $cookie; ?>"));
}
$link = $data['folder_name'];
$use = json_decode($data['data_use'],true);
$hari = $use['acara_date2'];
$jam = $use['acara_time2'];
$tempat = $use['acara_alamat2'];

$data_tamu = data("SELECT * FROM $cookie where comment != '' ORDER BY dateAdd DESC");
$total_tamu = 0;
if(!empty($data_tamu)){
  $total_tamu = number_format(count($data_tamu),0,',','.');
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

    <title>Tamu | Comment</title>

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
    <link rel="stylesheet" href="../../assets/css/sweetalert2.min.css">

    <link rel="stylesheet" href="../../global/assets/vendor/libs/apex-charts/apex-charts.css" />

    <!-- Page CSS -->

    <!-- Helpers -->
    <script src="../../global/assets/vendor/js/helpers.js"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="../../global/assets/js/config.js"></script>
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
                <div data-i18n="Layouts">Tamu Undangan</div>
              </a>

              <ul class="menu-sub">
                <li class="menu-item">
                  <a href="../tamu/" class="menu-link">
                    <div data-i18n="Without menu">Daftar Tamu</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="javascript:void(0)" class="text-warning menu-link d-flex justify-content-between">
                    <div data-i18n="Without navbar">Buku Tamu</div>
                    <i class='bx bxs-lock' data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="top" data-bs-html="true" title="" data-bs-original-title="<i class='bx bxs-lock bx-xs pb-md-2'></i>
                    <span>Upgrade to Pro</span>"></i>
                  </a>
                </li>
                <li class="menu-item active">
                  <a href="javascript:void(0)" class="menu-link d-flex justify-content-between">
                    <div data-i18n="Without menu">Ucapan</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="javascript:void(0)" class="text-warning menu-link d-flex justify-content-between">
                    <div data-i18n="Fluid">Statistik </div>
                    <i class='bx bxs-lock' data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="top" data-bs-html="true" title="" data-bs-original-title="<i class='bx bxs-lock bx-xs pb-md-2'></i>
                    <span>Upgrade to Pro</span>"></i>
                  </a>
                </li>
              </ul>
            </li>

            <li class="menu-header small text-uppercase">
              <span class="menu-header-text">Pages</span>
            </li>
            <li class="menu-item">
              <a href="javascript:void(0)" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-dock-top"></i>
                <div data-i18n="Account Settings">Tema Settings</div>
              </a>
              <ul class="menu-sub">
                <li class="menu-item">
                  <a href="../../edit/hemat/?user=<?= $cookie; ?>" target="_blank" class="menu-link">
                    <div data-i18n="Account">Ubah Data</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="javascript:void(0)" class="menu-link">
                    <div data-i18n="Notifications">Semua Tema</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="javascript:void(0)" class="text-warning menu-link d-flex justify-content-between">
                    <div data-i18n="Connections">Ganti Tema</div>
                    <i class='bx bxs-lock' data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="top" data-bs-html="true" title="" data-bs-original-title="<i class='bx bxs-lock bx-xs pb-md-2'></i>
                    <span>Upgrade to Pro</span>"></i>
                  </a>
                </li>
              </ul>
            </li>
            <li class="menu-item">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bxs-cart-add"></i>
                <div data-i18n="Authentications">Add-ons</div>
              </a>
              <ul class="menu-sub">
                <li class="menu-item">
                  <a href="javascript:void(0)" class="text-warning menu-link d-flex justify-content-between" >
                    <div data-i18n="Basic">Custom Domain</div>
                    <i class='bx bxs-lock' data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="top" data-bs-html="true" title="" data-bs-original-title="<i class='bx bxs-lock bx-xs pb-md-2'></i>
                    <span>Upgrade to Pro</span>"></i>
                  </a>
                </li>
                <!-- <li class="menu-item">
                  <a href="javascript:void(0)" class="menu-link">
                    <div data-i18n="Basic">+ 10 photo</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="javascript:void(0)" class="menu-link">
                    <div data-i18n="Basic">+ 1 Video</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="javascript:void(0)" class="menu-link">
                    <div data-i18n="Basic">+ 1 Story</div>
                  </a>
                </li> -->
                <li class="menu-item">
                  <a href="javascript:void(0)" class="text-warning menu-link d-flex justify-content-between" >
                    <div data-i18n="Basic">+ Qr-Code</div>
                    <i class='bx bxs-lock' data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="top" data-bs-html="true" title="" data-bs-original-title="<i class='bx bxs-lock bx-xs pb-md-2'></i>
                    <span>Upgrade to Pro</span>"></i>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="javascript:void(0)" class="text-warning menu-link d-flex justify-content-between" >
                    <div data-i18n="Basic">White Lable</div>
                    <i class='bx bxs-lock' data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="top" data-bs-html="true" title="" data-bs-original-title="<i class='bx bxs-lock bx-xs pb-md-2'></i>
                    <span>Upgrade to Pro</span>"></i>
                  </a>
                </li>
              </ul>
            </li>
            <li class="menu-item">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-cube-alt"></i>
                <div data-i18n="Misc">Harga Paket</div>
              </a>
              <ul class="menu-sub">
                <li class="menu-item">
                  <a href="javascript:void(0)" class="menu-link">
                    <div data-i18n="Error">Paket Saat ini</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="javascript:void(0)" class="menu-link">
                    <div data-i18n="Error">Lihat Semua Paket</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="javascript:void(0)" class="menu-link">
                    <div data-i18n="Under Maintenance">Request Upgrade</div>
                  </a>
                </li>
              </ul>
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

            <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
              <!-- Search -->
              <div class="navbar-nav align-items-center">
                <div class="nav-item d-flex align-items-center">
                  <i class="bx bx-search fs-4 lh-0"></i>
                  <input
                    onkeyup="searchComment('<?= $cookie; ?>')"
                    id="search"
                    type="text"
                    class="form-control border-0 shadow-none"
                    placeholder="Search..."
                    aria-label="Search..."
                  />
                </div>
              </div>
              <!-- /Search -->

              <ul class="navbar-nav flex-row align-items-center ms-auto">

                <!-- User -->
                <li class="nav-item navbar-dropdown dropdown-user dropdown">
                  <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                    <div class="avatar avatar-online">
                      <img src="https://i.pravatar.cc/300?u=<?= $cookie; ?>" alt class="w-px-40 h-auto rounded-circle" />
                    </div>
                  </a>
                  <ul class="dropdown-menu dropdown-menu-end">
                    <li>
                      <a class="dropdown-item" href="#">
                        <div class="d-flex">
                          <div class="flex-shrink-0 me-3">
                            <div class="avatar avatar-online">
                              <img src="https://i.pravatar.cc/300?u=<?= $cookie; ?>" alt class="w-px-40 h-auto rounded-circle" />
                            </div>
                          </div>
                          <div class="flex-grow-1">
                            <span class="fw-semibold d-block"><?= ucwords($data['nama']); ?></span>
                            <small class="text-muted">Admin</small>
                          </div>
                        </div>
                      </a>
                    </li>
                    <li>
                      <div class="dropdown-divider"></div>
                    </li>
                    <li>
                      <a class="dropdown-item" href="./?my-profile">
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
                      <div class="dropdown-divider"></div>
                    </li>
                    <li>
                      <a class="dropdown-item" href="../login/?logout">
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
              <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Total Comment /</span> <?= $total_tamu; ?></h4>

              <!-- Striped Rows -->
              <div class="card">
              <div class="d-flex justify-content-between">
                  <h4 class="card-header">Detail Ucapan</h4>
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
                      <a class="sort-status dropdown-item" href="javascript:void(0);"
                        ><i class="bx bx-bookmark me-1"></i> Status</a
                      >
                    </div>
                  </div>
                </div>

                <div style="min-height: 300px;" class="table-responsive text-nowrap">
                  <table class="table table-striped">
                    <thead>
                      <tr>
                        <th>Date</th>
                        <th>Nama</th>
                        <th>Comment</th>
                        <th>Actions</th>
                      </tr>
                    </thead>
                    <tbody id="container" class="table-border-bottom-0">
                      <?php if(!empty($data_tamu)) :?>
                        <?php foreach($data_tamu as $tamu): ?>
                      <tr>
                        <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>
                          <?= format_date($tamu['dateAdd'],"d/M/y H:i"); ?></strong></td>
                        <td><?= ucwords($tamu['nama']); ?></td>
                        <td class="text-wrap" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="top" data-bs-html="true" title="" data-bs-original-title="
                    <span><?= $tamu['comment']; ?>"><?= substr($tamu['comment'],0,25).'...' ; ?></td>
                        <td>
                          <div class="dropdown">
                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                              <i class="bx bx-dots-vertical-rounded"></i>
                            </button>
                            <div class="dropdown-menu">

                              <a class="text-warning dropdown-item" href="javascript:void(0);"
                                onclick="editComment('<?= $cookie; ?>',this.dataset.tamu)" data-tamu='<?= json_encode($tamu,JSON_PRETTY_PRINT); ?>'><i class="bx bx-edit-alt me-1"></i> Edit</a>

                              <a onclick="hapusComment('<?= $cookie; ?>','<?= $tamu['kode']; ?>')" class="text-danger dropdown-item" href="javascript:void(0);"
                                ><i class="bx bx-trash me-1"></i> Delete</a>
                            </div>
                          </div>
                        </td>
                      </tr>
                      <?php endforeach; ?>
                    <?php endif; ?>
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
    <script src="../../global/assets/vendor/libs/jquery/jquery.js"></script>
    <!-- <script src="../../global/assets/vendor/libs/popper/popper.js"></script> -->
    <script src="../../global/assets/vendor/js/bootstrap.js"></script>
    <script src="../../global/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="../../assets/js/sweetalert2.min.js"></script>
    <!-- <script src="../../assets/js/alert.js"></script> -->
    <script src="ajax.js"></script>
    <script src="../../global/assets/vendor/js/menu.js"></script>
    <!-- endbuild -->

    <!-- Main JS -->
    <script src="../../global/assets/js/main.js"></script>
    
   

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
  </body>
</html>
