<?php 

?>

<!DOCTYPE html>

<html
  lang="en"
  class="light-style layout-menu-fixed"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="../assets/"
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
    <link rel="stylesheet" href="assets/vendor/fonts/boxicons.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="../global/assets/vendor/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="../global/assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="../global/assets/css/demo.css" />
    <link rel="stylesheet" href="../global/assets/css/sweetalert2.min.css">

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
                    <span>Upgrade to Pro</span>"></i>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="javascript:void(0)" class="text-warning menu-link d-flex justify-content-between">
                    <div data-i18n="Container">Ucapan</div>
                    <i class='bx bxs-lock' data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="top" data-bs-html="true" title="" data-bs-original-title="<i class='bx bxs-lock bx-xs pb-md-2'></i>
                    <span>Upgrade to Pro</span>"></i>
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
                  <span class="display-6">My Profile</span>
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
          <input type="hidden" id="user" name="user" value="<?= $data[0]['cookie']; ?>">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
              <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Account Settings /</span> Account</h4>

              <div class="row">
                <div class="col-md-12">
                  <!-- <ul class="nav nav-pills flex-column flex-md-row mb-3">
                    <li class="nav-item">
                      <a class="nav-link active" href="javascript:void(0);"><i class="bx bx-user me-1"></i> Account</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="pages-account-settings-notifications.html"
                        ><i class="bx bx-bell me-1"></i> Notifications</a
                      >
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="pages-account-settings-connections.html"
                        ><i class="bx bx-link-alt me-1"></i> Connections</a
                      >
                    </li>
                  </ul> -->
                  <div class="card mb-4">
                    <h5 class="card-header">Profile Details</h5>
                    <!-- Account -->
                    <div class="card-body">
                      <div class="d-flex align-items-start align-items-sm-center gap-4">
                        <img
                          src="https://i.pravatar.cc/300?u=<?= $cookie; ?>"
                          alt="user-avatar"
                          class="d-block rounded"
                          height="100"
                          width="100"
                          id="uploadedAvatar"
                        />
                        <div class="button-wrapper">
                          <label for="upload" class="btn btn-primary me-2 mb-4" tabindex="0">
                            <span class="d-none d-sm-block">Upload new photo</span>
                            <i class="bx bx-upload d-block d-sm-none"></i>
                            <input
                              type="file"
                              id="upload"
                              class="account-file-input"
                              hidden
                              accept="image/png, image/jpeg"
                            />
                          </label>
                          <button type="button" class="btn btn-outline-secondary account-image-reset mb-4">
                            <i class="bx bx-reset d-block d-sm-none"></i>
                            <span class="d-none d-sm-block">Reset</span>
                          </button>

                          <p class="text-muted mb-0">Allowed JPG, GIF or PNG. Max size of 800K</p>
                        </div>
                      </div>
                    </div>
                    <hr class="my-0" />
                    <div class="card-body">
                      <form id="formAccountSettings" method="POST" onsubmit="return false">
                        <div class="row">
                          <div class="mb-3 col-md-6">
                            <label for="nama" class="form-label">Nama</label>
                            <input
                              class="form-control"
                              type="text"
                              id="nama"
                              name="nama"
                              value="<?= $data[0]['nama']; ?>"
                              autofocus
                            />
                          </div>
                          <div class="mb-3 col-md-6">
                            <label for="usrname" class="form-label">E-mail</label>
                            <input
                              class="form-control"
                              type="text"
                              id="usrname"
                              name="usrname"
                              value="<?= $data[0]['username']; ?>"
                              placeholder="john.doe@example.com"
                            />
                          </div>
                          <div class="mb-3 col-md-6">
                            <label for="password" class="form-label">Password</label>
                            <input
                              type="password"
                              class="form-control"
                              id="password"
                              name="password"
                              value="<?= $data[0]['pwdkey']; ?>"
                            />

                            <a class="text-dark text-wrap" id="change-password" href="javascript:void(0)">●<i class="text-danger"> Ganti Password ?</i></a><br>
                          </div>
                          <div class="mb-3 col-md-6">
                            <label class="form-label" for="no_wa">Phone Number</label>
                              <input
                                type="text"
                                id="no_wa"
                                name="no_wa"
                                class="form-control"
                                value="<?= $data[0]['no_hp']; ?>"
                                placeholder="202 555 0111"
                              />
                          </div>
                          <div class="mb-3 col-md-6">
                            <label for="kota" class="form-label">Kota</label>
                            <input class="form-control" type="text" id="kota" name="kota" value="<?= $data[0]['kota']; ?>" />
                          </div>
                          <div class="mb-3 col-md-6">
                            <label for="link" class="form-label">Link</label>
                            <input
                              type="text"
                              class="form-control"
                              id="link"
                              name="link"
                              value="https://ada-undangan.online/dari/<?= $data[0]['folder_name']; ?>"
                              disabled
                            />
                          </div>
                          <div class="mb-3 col-md-6">
                            <label class="form-label" for="paket">Paket</label>
                            <select id="paket" class="select2 form-select" disabled>
                              <option value="<?= $data[0]['paket']; ?>" selected><?= $data[0]['paket']; ?></option>
                            </select>
                          </div>
                          <div class="mb-3 col-md-6">
                            <label for="tema" class="form-label">Tema</label>
                            <select id="tema" class="select2 form-select" disabled>
                              <option selected value="<?= $data[0]['tema']; ?>"><?= $data[0]['tema']; ?></option>
                            </select>
                          </div>
                          
                        </div>
                        <div class="mt-2">
                          <button type="submit" class="btn btn-primary me-2">Save changes</button>
                          <button type="reset" class="btn btn-outline-secondary">Cancel</button>
                        </div>
                      </form>
                    </div>
                    <!-- /Account -->
                  </div>
                  <div class="card">
                    <h5 class="card-header">Delete Account</h5>
                    <div class="card-body">
                      <div class="mb-3 col-12 mb-0">
                        <div class="alert alert-warning">
                          <h6 class="alert-heading fw-bold mb-1">Are you sure you want to delete your account?</h6>
                          <p class="mb-0">Once you delete your account, there is no going back. Please be certain.</p>
                        </div>
                      </div>
                      <form id="formAccountDeactivation" onsubmit="return false">
                        <div class="form-check mb-3">
                          <input
                            class="form-check-input"
                            type="checkbox"
                            name="accountActivation"
                            id="accountActivation"
                          />
                          <label class="form-check-label" for="accountActivation"
                            >I confirm my account deactivation</label
                          >
                        </div>
                        <button type="submit" class="btn btn-danger deactivate-account">Deactivate Account</button>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
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
                  <a style="color: #f76980;" href="https://ada-undangan.online" target="_blank" class="footer-link fw-bolder"> Ada-Undangan.online</a>
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

    <!-- <div class="buy-now">
    <a
        href="javascript:void(0)"
        class="btn btn-danger btn-buy-now"
        >Upgrade to Pro</a
      >
    </div> -->

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
    <script src="../global/assets/js/sweetalert2.min.js"></script>
    <script src="password.js"></script>


    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
  </body>
</html>
