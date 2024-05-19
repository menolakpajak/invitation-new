
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

    <title>Dashboard | Home</title>

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
            <li class="menu-item active">
              <a href="javascript:void(0)" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div data-i18n="Analytics">Dashboard</div>
              </a>
            </li>

            <!-- Layouts -->
            <li class="menu-item">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bxs-user-rectangle"></i>
                <div data-i18n="Layouts">Tamu Undangan</div>
              </a>

              <ul class="menu-sub">
                <li class="menu-item">
                  <a href="tamu/" class="menu-link">
                    <div data-i18n="Without menu">Daftar Tamu</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="javascript:void(0)" class="text-warning menu-link d-flex justify-content-between">
                    <div data-i18n="Without navbar">Buku Tamu</div>
                    <i class='bx bxs-lock' data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="top" data-bs-html="true" title="" data-bs-original-title="<i class='bx bxs-lock bx-xs pb-md-2'></i>
                    <span>Maintenance</span>"></i>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="tamu/comment.php" class="menu-link d-flex justify-content-between">
                    <div data-i18n="Container">Ucapan</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="javascript:void(0)" class="text-warning menu-link d-flex justify-content-between">
                    <div data-i18n="Fluid">Statistik </div>
                    <i class='bx bxs-lock' data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="top" data-bs-html="true" title="" data-bs-original-title="<i class='bx bxs-lock bx-xs pb-md-2'></i>
                    <span>Maintenance</span>"></i>
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
                  <a href="../edit/hemat/?user=<?= $cookie; ?>" class="menu-link">
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
                    <span>Maintenance</span>"></i>
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
                    <span>Maintenance</span>"></i>
                  </a>
                </li>
                <!-- <li class="menu-item">
                  <a href="auth-login-basic.html" class="menu-link" >
                    <div data-i18n="Basic">+ 10 photo</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="auth-login-basic.html" class="menu-link" >
                    <div data-i18n="Basic">+ 1 Video</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="auth-register-basic.html" class="menu-link" >
                    <div data-i18n="Basic">+ 1 Story</div>
                  </a>
                </li> -->
                <li class="menu-item">
                  <a href="javascript:void(0)" class="text-warning menu-link d-flex justify-content-between" >
                    <div data-i18n="Basic">+ Qr-Code</div>
                    <i class='bx bxs-lock' data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="top" data-bs-html="true" title="" data-bs-original-title="<i class='bx bxs-lock bx-xs pb-md-2'></i>
                    <span>Maintenance</span>"></i>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="javascript:void(0)" class="text-warning menu-link d-flex justify-content-between" >
                    <div data-i18n="Basic">White Lable</div>
                    <i class='bx bxs-lock' data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="top" data-bs-html="true" title="" data-bs-original-title="<i class='bx bxs-lock bx-xs pb-md-2'></i>
                    <span>Maintenance</span>"></i>
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
                  <a href="javascript:void(0);" class="menu-link">
                    <div data-i18n="Error">Paket Saat ini</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="javascript:void(0);" class="menu-link">
                    <div data-i18n="Error">Lihat Semua Paket</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="javascript:void(0);" class="menu-link">
                    <div data-i18n="Under Maintenance">Request Upgrade</div>
                  </a>
                </li>
              </ul>
            </li>
            <!-- Misc -->
            <li class="menu-header small text-uppercase"><span class="menu-header-text">Misc</span></li>
            <li class="menu-item">
              <a
                href="javascript:void(0);"
                target="_blank"
                class="menu-link"
              >
                <i class="menu-icon tf-icons bx bx-support"></i>
                <div data-i18n="Support">Support</div>
              </a>
            </li>
            <li class="menu-item">
              <a
                href="javascript:void(0);"
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
                  <!-- <i class="bx bx-search fs-4 lh-0"></i>
                  <input
                    type="text"
                    class="form-control border-0 shadow-none"
                    placeholder="Search..."
                    aria-label="Search..."
                  /> -->
                  <span class="display-6">Dashboard</span>
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
                            <span class="fw-semibold d-block"><?= ucwords($data[0]['nama']); ?></span>
                            <small class="text-muted">Customer</small>
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
                    </li>
                    <li>
                      <div class="dropdown-divider"></div>
                    </li>
                    <li>
                      <a class="dropdown-item" href="login/?logout">
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
              <div class="row">
                <div class="col-lg-8 mb-4 order-0">
                  <div class="card">
                    <div class="d-flex align-items-end row">
                      <div class="col-sm-7">
                        <div class="card-body">
                          <h5 class="card-title text-primary">Selamat <?= ucwords($data[0]['nama']) ; ?> ! 🎉</h5>
                          <p class="mb-4">
                            Undangan Online Anda  <span class="link-success fw-bold">Sudah Aktif</span> Anda bisa melihatnya dengan meng-Klik tombol di bawah
                          </p>

                          <a href="<?= $dlink; ?>" class="btn btn-sm btn-outline-primary mb-1" target="_blank">Lihat Undangan</a>
                          <a href="<?= $dlink; ?>" onclick="copyURI(event)" class="btn btn-sm btn-secondary mb-1">Copy Link</a>
                        </div>
                      </div>
                      <div class="col-sm-5 text-center text-sm-left">
                        <div class="card-body pb-0 px-0 px-md-4">
                          <img
                            src="../global/assets/img/illustrations/wedding.png"
                            height="140"
                            alt="View Badge User"
                            data-app-dark-img="illustrations/wedding-dark.png"
                            data-app-light-img="illustrations/wedding-light.png"
                          />
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 col-md-4 order-1">
                  <div class="row">
                    <div class="col-lg-6 col-md-12 col-6 mb-4">
                      <div class="card">
                        <div class="card-body">
                          <div class="card-title d-flex align-items-start justify-content-between">
                            <div class="avatar flex-shrink-0">
                              <img
                                src="../global/assets/img/icons/unicons/user-detail-solid.png"
                                alt="chart success"
                                class="rounded"
                              />
                            </div>
                            <div class="dropdown">
                              <button
                                class="btn p-0"
                                type="button"
                                id="cardOpt3"
                                data-bs-toggle="dropdown"
                                aria-haspopup="true"
                                aria-expanded="false"
                              >
                                <i class="bx bx-dots-vertical-rounded"></i>
                              </button>
                              <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt3">
                                <a class="dropdown-item" href="tamu">Lihat Semua</a>
                              </div>
                            </div>
                          </div>
                          <span class="fw-semibold d-block mb-1">Tamu</span>
                          <h3 class="card-title mb-2"><?= number_format($jumlah_tamu,0,',','.'); ?></h3>
                          <small class="text-primary fw-semibold"><i class="bx bx-user"></i>  Orang</small>
                        </div>
                      </div>
                    </div>

                    <div class="col-lg-6 col-md-12 col-6 mb-4">
                      <div class="card">
                        <div class="card-body">
                          <div class="card-title d-flex align-items-start justify-content-between">
                            <div class="avatar flex-shrink-0">
                              <img
                                src="../global/assets/img/icons/unicons/calendar-check-solid.png"
                                alt="Credit Card"
                                class="rounded"
                              />
                            </div>
                            <div class="dropdown">
                              <button
                                class="btn p-0"
                                type="button"
                                id="cardOpt6"
                                data-bs-toggle="dropdown"
                                aria-haspopup="true"
                                aria-expanded="false"
                              >
                                <i class="bx bx-dots-vertical-rounded"></i>
                              </button>
                              <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt6">
                                <a class="dropdown-item" href="tamu/?status=read">Lihat Detail</a>
                              </div>
                            </div>
                          </div>
                          <span class="fw-semibold d-block mb-1">Dilihat</span>
                          <h3 class="card-title mb-2"><?= number_format($read,0,',','.'); ?></h3>
                          <small class="text-primary fw-semibold"><i class="bx bx-envelope-open"></i> Klik</small>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Total Revenue -->
                <div class="col-12 col-lg-8 order-2 order-md-3 order-lg-2 mb-4">
                  <div class="card">
                    <div class="row row-bordered g-0">
                      <div class="col-md-8">
                        <h5 class="card-header m-0 me-2 pb-3">Tema Dipilih</h5>
                        <!-- <div id="totalRevenueChart" class="px-2"></div> -->
                        <h6 class="card-body m-0 me-2 pb-3 text-primary"><?= $tema_value; ?></h6>
                        <div class="card-body">
                          <div class="text-center">
                            <div class="dropdown">
                              <button
                                class="btn btn-sm btn-outline-primary dropdown-toggle"
                                type="button"
                                id="growthReportId"
                                data-bs-toggle="dropdown"
                                aria-haspopup="true"
                                aria-expanded="false"
                              >
                                2022
                              </button>
                              <div class="dropdown-menu dropdown-menu-end" aria-labelledby="growthReportId">
                                <a class="dropdown-item" href="javascript:void(0);">2021</a>
                                <a class="dropdown-item" href="javascript:void(0);">2020</a>
                                <a class="dropdown-item" href="javascript:void(0);">2019</a>
                              </div>
                            </div>
                          </div>
                        </div>
                          <div id="growthChart" data-tema="<?= $pro_tema; ?>"></div>
                          <div class="text-center fw-semibold pt-3 mb-2"><?= number_format($tema_use,0,',','.'); ?> Kali Digunakan</div>
                      </div>
                      <div class="col-md-4">
                        <img class="w-100 p-1 rounded-3" src="../theme/<?= $data[0]['tema']; ?>/images/preview.png" alt="preview.jpg">
                        
                      </div>
                    </div>
                  </div>
                </div>
                <!--/ Total Revenue -->
                <div class="col-12 col-md-8 col-lg-4 order-3 order-md-2">
                  <div class="row">
                    <div class="col-6 mb-4">
                      <div class="card">
                        <div class="card-body">
                          <div class="card-title d-flex align-items-start justify-content-between">
                            <div class="avatar flex-shrink-0">
                              <img src="../global/assets/img/icons/unicons/user-check-solid.png" alt="Credit Card" class="rounded" />
                            </div>

                            <div class="dropdown">
                              <button
                                class="btn p-0"
                                type="button"
                                id="cardOpt4"
                                data-bs-toggle="dropdown"
                                aria-haspopup="true"
                                aria-expanded="false"
                              >
                                <i class="bx bx-dots-vertical-rounded"></i>
                              </button>
                              <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt4">
                                <a class="dropdown-item" href="tamu/?status=hadir">Lihat Detail</a>
                              </div>
                            </div>
                          </div>
                          <span class="fw-semibold d-block mb-1">Akan Hadir</span>
                          <h3 class="card-title mb-2"><?= number_format($hadir,0,',','.'); ?></h3>
                          <small class="text-success fw-semibold"><i class="bx bx-user-plus"></i> Orang</small>
                        </div>
                      </div>
                    </div>
                    <div class="col-6 mb-4">
                      <div class="card">
                        <div class="card-body">
                          <div class="card-title d-flex align-items-start justify-content-between">
                            <div class="avatar flex-shrink-0">
                              <img src="../global/assets/img/icons/unicons/user-x-solid.png" alt="Credit Card" class="rounded" />
                            </div>
                            <div class="dropdown">
                              <button
                                class="btn p-0"
                                type="button"
                                id="cardOpt1"
                                data-bs-toggle="dropdown"
                                aria-haspopup="true"
                                aria-expanded="false"
                              >
                                <i class="bx bx-dots-vertical-rounded"></i>
                              </button>
                              <div class="dropdown-menu" aria-labelledby="cardOpt1">
                                <a class="dropdown-item" href="tamu/?status=nohadir">Lihat Detail</a>
                              </div>
                            </div>
                          </div>
                          <span class="fw-semibold d-block mb-1">Tidak Hadir</span>
                          <h3 class="card-title mb-2"><?= number_format($tidakHadir,0,',','.'); ?></h3>
                          <small class="text-danger fw-semibold"><i class="bx bx-user-minus"></i> Orang</small>
                        </div>
                      </div>
                    </div>
                    <!-- </div>
    <div class="row"> -->
                    <div class="col-12 mb-4">
                      <div class="card">
                        <div class="card-body">
                          <div class="d-flex justify-content-between flex-sm-row flex-column gap-3">
                            <div class="d-flex flex-sm-column flex-row align-items-start justify-content-between">
                              <div class="card-title">
                                <h5 class="text-nowrap mb-2">Tamu Terdaftar</h5>
                                <span class="p-md-1 bg-label-warning rounded-pill">Rasio perKlik</span>
                              </div>
                              <div class="mt-1">
                                <small class="text-success text-nowrap fw-semibold" style="font-size: 2rem;"
                                  ><i class="bx bx-chevron-up"></i><?php
                                  if(!empty($jumlah_tamu)){
                                    echo round(($read/$jumlah_tamu*100),3);    
                                  }else{
                                    echo 0.00;
                                  }
                                  ?> %</small
                                >
                              </div>
                            </div>
                            <div id="profileReportChart"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              
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

    <script src="../global/assets/vendor/js/menu.js"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->
    <script src="../global/assets/vendor/libs/apex-charts/apexcharts.js"></script>

    <!-- Main JS -->
    <script src="../global/assets/js/main.js"></script>

    <!-- Page JS -->
    <script>
      let total = Number(<?= $jumlah_tamu; ?>)
      let read = Number(<?= $read; ?>)
      let ignore = Number(<?= $ignore; ?>)
      if(total != 0){
        read = read/total*100
        read = Number(read.toFixed(2))
        ignore = ignore/total*100
        ignore = Number(ignore.toFixed(2))
      }else{
        read = 0
        ignore = 0
      }

    </script>
    <script src="assets/js/dashboards-analytics.js"></script>


    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
  </body>
</html>