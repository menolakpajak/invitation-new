<?php
require_once '../akses.php';
require_once '../function.php';
require_once '../../config.php';

$id = $_GET['user'];
$data = data("SELECT * FROM aa_customer WHERE cookie = '$id' ");
if (empty($data)) {
  header('Location: ../../error/');
  die;
}
$data = $data[0];
$date = date_create($data['date']);
$date = date_format($date, 'd/m/Y');
$folder = $data['folder_name'];
$domain = $data['domain'];
$tema = $data['tema'];
$info = $data['data_use'];
$info = json_decode($info, true);


// cek struktur di dari/
if (file_exists("../../dari/$folder/struktur.php")) {
  $filename = "../../dari/$folder/struktur.php";
  $f = fopen($filename, 'r');
  if ($f) {
    $struktur = fread($f, filesize($filename));
    fclose($f);
  }
} else {
  $filename = "../../theme/$tema/struktur.php";
  $f = fopen($filename, 'r');
  if ($f) {
    $struktur = fread($f, filesize($filename));
    fclose($f);
  }
}

// cek style di dari/
if (file_exists("../../dari/$folder/style.css")) {
  $filename = "../../dari/$folder/style.css";
  $f = fopen($filename, 'r');
  if ($f) {
    $style = fread($f, filesize($filename));
    fclose($f);
  }
} else {
  $filename = "../../theme/$tema/css/style.css";
  $f = fopen($filename, 'r');
  if ($f) {
    $style = fread($f, filesize($filename));
    fclose($f);
  }
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

    <title>Customer | Detail</title>

    <meta name="description" content="" />

    <!-- Favicons -->
    <link rel="icon" type="image/png" sizes="16x16" href="../../global/assets/img/favicon/16x16.ico">
    <link rel="icon" type="image/png" sizes="24x24" href="../../global/assets/img/favicon/24x24.ico">
    <link rel="icon" type="image/png" sizes="32x32" href="../../global/assets/img/favicon/32x32.ico">
    <link rel="icon" type="image/png" sizes="48x48" href="../../global/assets/img/favicon/48x48.ico">
    <link rel="apple-touch-icon" sizes="64x64" href="../../global/assets/img/favicon/64x64.ico">
    <link rel="apple-touch-icon" sizes="96x96" href="../../global/assets/img/favicon/96x96.ico">
    <link rel="apple-touch-icon" sizes="128x128" href="../../global/assets/img/favicon/128x128.ico">
    <link rel="apple-touch-icon" sizes="192x192" href="../../global/assets/img/favicon/192x192.ico">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
      rel="stylesheet"
    />
    <link href="https://fonts.googleapis.com/css2?family=Source+Code+Pro&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Encode+Sans+SC&family=Josefin+Sans:wght@300;400&display=swap" rel="stylesheet">

    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="../assets/vendor/fonts/boxicons.css" />

<!-- Core CSS -->
<link rel="stylesheet" href="../../global/assets/vendor/css/core.css" class="template-customizer-core-css" />
<link rel="stylesheet" href="../../global/assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
<link rel="stylesheet" href="../../global/assets/css/demo.css" />

<!-- Vendors CSS -->
<link rel="stylesheet" href="../../global/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />
<link rel="stylesheet" href="../../assets/css/sweetalert2.min.css" />

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
                <div data-i18n="Layouts">Client</div>
              </a>

              <ul class="menu-sub">
                <li class="menu-item active">
                  <a href="./" class="menu-link">
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
                  <span class="display-6">Customer Detail</span>
                </div>
              </div>
              <!-- /Search -->

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
            <div class="ms-auto me-auto container-xxl flex-grow-1 container-p-y row">
              <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Detail /</span> Form</h4>
              <div class="col-md-6 mb-4 order-0">
                <!-- account detail -->
                <div class="col-12 mb-4 order-0">            
                  <div class="card p-3">
                    <div class="d-flex align-items-md-start row">
                      <h4 class="mt-1 card-title text-center text-primary">Account Detail</h4>
                      <div class="col-sm-5 text-center text-sm-left">
                        <div class="card-body pb-0 px-0">
                          <img
                            style="margin-top: -20px !important;"
                            class="rounded-circle"
                            src="https://i.pravatar.cc/300?u=<?= $data['cookie']; ?>"
                            height="140"
                            alt="View Badge User"
                            data-app-dark-img="illustrations/wedding-dark.png"
                            data-app-light-img="illustrations/wedding-light.png"
                          />
                        </div>
                      </div>
                      <div class="col-sm-7">
                        <div class="card-body">
  
                        <div class="mb-2 row">
                            <label style="font-size: .9em; font-weight:800;" for="sign-up" class="col-md-12 col-form-label">Sign up</label>
                            <div class="col-md-12">
                              <input class="form-control" name="sign-up" type="text" id="sign-up" value="<?= $date; ?>" disabled/>
                            </div>
                          </div>
                          <div class="row justify-content-between">
                            <h5 class="col-6">Status :</h5>
                            <?php if ($data['status'] == 'pending'): ?>
                                                  <h5 class="col-6 text-warning float-end"><?= strtoupper($data['status']); ?></h5>
                            <?php endif; ?>
                            <?php if ($data['status'] == 'active'): ?>
                                                  <h5 class="col-6 text-success float-end"><?= strtoupper($data['status']); ?></h5>
                            <?php endif; ?>
                            <?php if ($data['status'] == 'suspend' || $data['status'] == 'expired'): ?>
                                                  <h5 class="col-6 text-danger float-end"><?= strtoupper($data['status']); ?></h5>
                            <?php endif; ?>
                          </div>                       
                        </div>
                      </div>
                      
                    </div>
                  </div>
                </div>
                <!-- account detail -->

                <!-- Paket detail -->
                <div class="col-12 mb-4 order-0">
                  <div class="card p-3">
                    <div class="d-flex align-items-md-start row">
                      <h4 class="mt-1 card-title text-center text-primary">Paket Detail</h4>
                      <div class="col-sm-12">
                        <form id="paket-detail" action="" method="" class="card-body">
                        <input id="paket-id" type="hidden" value="<?= $data['id']; ?>">
                        <div class="mb-2 row">
                          <label style="font-size: .9em; font-weight:800;" for="paket" class="col-md-3 col-form-label">paket</label>
                          <div class="col-md-9">
                            <select 
                              class="form-select" 
                              id="paket"
                              aria-label="Default select example" name="paket">
                                  <option selected class="text-warning" value="<?= $data['paket']; ?>" ><?= ucfirst($data['paket']); ?></option>
                                  <option value="hemat">Hemat</option>
                                  <option value="basic">Basic</option>
                                  <option value="pro">Pro</option>
                                  <option value="advance">Advance</option>
                            </select>
                          </div>
                        </div>

                        <div class="mb-2 row">
                          <label style="font-size: .9em; font-weight:800;" for="tema" class="col-md-3 col-form-label">tema</label>
                          <div class="col-md-9">
                          <input class="form-control" name="tema" list="tema-list" id="tema" maxlength="20" autocomplete="off" value="<?= $tema; ?>" required/>
                          <datalist id="tema-list">
                                  <?php foreach ($tema_list as $temas): ?>
                                                          <?php if ($temas['type'] == 'basic'): ?>
                                                                              <option value="<?= $temas['name']; ?>"></option>
                                                        <?php endif; ?>
                                                        <?php if ($temas['type'] == 'premium'): ?>
                                                                              <option class="text-warning" value="<?= $temas['name']; ?>">⭐PREMIUM⭐</option>
                                                        <?php endif; ?>
                                  <?php endforeach; ?>
                          </datalist>
                          </div>
                        </div>

                        <div class="mb-2 row">
                          <label style="font-size: .9em; font-weight:800;" for="custom" class="col-md-3 col-form-label">Custom</label>
                          <div class="col-md-9">
                            <select 
                              class="form-select" 
                              id="custom"
                              aria-label="Default select example" name="custom">
                              <?php if (!isset($info['custom'])): ?>
                                                        <option class="bg-danger" selected class="text-warning" value="" disabled>NOT SET</option>
                                                        <option value="on">ON</option>
                                                        <option value="off">OFF</option>
                              <?php endif; ?>
                              
                              <?php if (isset($info['custom'])): ?>
                                                        <option class="bg-gray" selected class="text-warning" value="<?= $info['custom']; ?>" disabled><?= strtoupper($info['custom']); ?></option>
                                                        <option value="on">ON</option>
                                                        <option value="off">OFF</option>
                              <?php endif; ?>
                            </select>
                          </div>
                        </div>

                        <!-- <div class="mb-2 row">
                          <label style="font-size: .9em; font-weight:800;" for="dashboard" class="col-md-3 col-form-label">Admin</label>
                          <div class="col-md-9">
                              <?php if (isset($info['custom']) && $info['custom'] == 'on'): ?>
                                                <input class="form-control" name="dashboard" list="dbs-list" id="dashboard" maxlength="20" autocomplete="off" value="<?= $data['paket']; ?>"/>
                                                <datalist id="dbs-list">
                                                    <option value="hemat"></option>
                                                    <option value="basic"></option>
                                                    <option value="pro"></option>
                                                    <option value="advance"></option>
                                                    <option class="text-warning" value="custom1"></option>
                                  
                                            </datalist>
                              <?php endif; ?>
                          </div>
                        </div> -->
                        
                        <div class="mb-2 row">
                          <label style="font-size: .9em; font-weight:800;" for="domain" class="col-md-3 col-form-label">Domain</label>
                          <div class="col-md-9">
                          <input class="form-control" name="domain" id="domain" autocomplete="off" value="<?= $domain; ?>"/>
                          </div>
                        </div>
                        <div class="mb-2 row float-end">
                            <button class="btn btn-primary w-px-100 btn-sm " type="submit" name="submit" >Edit</button>
                          </div>                       
                        </form>
                      </div>
                      
                    </div>
                  </div>  
                </div >
                <!-- Paket detail -->
              </div>

              <!-- Akses detail -->
              <div class="col-md-6 mb-4 order-0">
                <div class="card p-3">
                  <div class="d-flex align-items-md-start row">
                    <h4 class="mt-1 card-title text-center text-primary">Access Detail</h4>
                    <div class="col-sm-12">
                      <form id="access-detail" action="" method="" class="card-body"><input id="access-id" type="hidden" value="<?= $data['id']; ?>">

                      <div class="mb-2 row">
                          <label style="font-size: .8em; font-weight:800;" for="kode" class="col-md-3 col-form-label">kode</label>
                          <div class="col-md-9">
                            <input class="form-control" name="kode" type="text" id="kode" value="<?= $data['cookie']; ?>" readonly/>
                          </div>
                        </div>

                        <div class="mb-2 row">
                          <label style="font-size: .9em; font-weight:800;" for="nama" class="col-md-3 col-form-label">nama</label>
                          <div class="col-md-9">
                            <input class="form-control" name="nama" type="text" id="nama" value="<?= $data['nama']; ?>" required/>
                          </div>
                        </div>

                        <div class="mb-2 row">
                          <label style="font-size:.9em; font-weight:800;" for="no-wa" class="col-md-3 col-form-label">no wa</label>
                          <div class="col-md-9">
                            <input class="form-control" name="no-wa" type="number" id="no-wa" value="<?= $data['no_hp']; ?>" required/>
                          </div>
                        </div>

                        <div class="mb-2 row">
                          <label style="font-size:.9em; font-weight:800;" for="kota" class="col-md-3 col-form-label">kota</label>
                          <div class="col-md-9">
                          <input class="form-control" name="kota" list="data_kota" id="kota" maxlength="20" autocomplete="off" value="<?= ucwords($data['kota']); ?>" required/>
                                <datalist id="data_kota">
                                  <?php foreach ($kota as $kot): ?>
                                                        <option value="<?= ucwords(strtolower($kot)); ?>"></option>
                                  <?php endforeach; ?>
                                </datalist>
                          </div>
                        </div>

                        <div class="mb-2 row">
                          <label style="font-size:.9em; font-weight:800;" for="username" class="col-md-3 col-form-label">email</label>
                          <div class="col-md-9">
                            <input class="form-control" name="username" type="text" id="username" value="<?= $data['username']; ?>" required/>
                          </div>
                        </div>

                        <div class="mb-2 row">
                          <label style="font-size: .8em; font-weight:800;" for="pwd" class="col-md-3 col-form-label">password</label>
                          <div class="col-md-9">
                            <input class="form-control" name="pwd" type="text" id="pwd" value="<?= $data['pwdkey']; ?>" required/>
                          </div>
                        </div>
                        
                        <div class="mb-2 row">
                          <label style="font-size: .9em; font-weight:800;" for="token" class="col-md-3 col-form-label">Token</label>
                          <div class="col-md-9">
                            <input class="form-control" name="token" type="number" id="token" value="<?= $data['token']; ?>" required/>
                          </div>
                        </div>

                        <div class="mb-2 row">
                          <label style="font-size: .9em; font-weight:800;" for="link" class="col-md-3 col-form-label">link</label>
                          <div class="col-md-9">
                            <input class="form-control" name="link" type="text" id="link" value="<?= $data['folder_name']; ?>" required/>
                          </div>
                        </div>

                        <div class="mb-2 row float-end">
                            <button class="btn btn-primary w-px-100 btn-sm " type="submit" name="submit" >Edit</button>
                          </div>             
                      </form>
                    </div>
                    
                  </div>
                </div>  
              </div >
              <!-- akses detail -->

              <!-- STYLE-->
              <div class="col-12 mb-4 order-0">
                      <div class="row">
                        <h3 class="text-primary">STYLE.CSS</h3>
                        <form id="style" action="" method="" class="col-12">
                          <input id="style-id" type="hidden" value="<?= $data['id']; ?>">
                          <textarea
                          style="background-color: black;
                          color:beige;
                          font-family: 'Source Code Pro', sans-serif;" 
                          class="form-control" 
                          name="style" 
                          id="style-input" 
                          rows="50">
                              <?= $style; ?>
                          </textarea>
                          <div class="row mt-2 mb-2">
                            <div class="col-6 col-xl-2">
                              <button id="style-submit" class="btn btn-success w-px-100" type="submit" name="submit">Upload</button>
                            </div>
                            <div class="col-6 col-xl-2">
                              <?php if (empty($info['custom']) || $info['custom'] == 'off'): ?>
                                                      <button id="style-reset" class="btn btn-warning w-px-100" type="button" name="reset">Reset</button>
                              <?php endif; ?>
                            </div>
                          </div>
                        </form>
                      </div>  
              </div >
<hr>
              <!-- STRUKTUR -->
              <div class="col-md-12 mb-4 order-0">
                      <div class="row">
                        <h3 class="text-primary">STRUKTUR.PHP</h3>
                        <form id="struktur" action="" method="" class="col-12">
                        <input id="struktur-id" type="hidden" value="<?= $data['id']; ?>">
                          <textarea
                          style="background-color: black;
                          color:beige;
                          font-family: 'Source Code Pro', sans-serif;" 
                          class="form-control" 
                          name="struktur" 
                          id="struktur-input" 
                          rows="50">
                              <?= str_replace("</textarea>", "&#x003C;/textarea&#x003E;", $struktur); ?>
                          </textarea>
                          <div class="row mt-2 mb-2">
                            <div class="col-6 col-xl-2">
                              <button class="btn btn-success w-px-100" type="submit" name="submit" >Upload</button>
                            </div>
                            <div class="col-6 col-xl-2">
                            <?php if (empty($info['custom']) || $info['custom'] == 'off'): ?>
                                                    <button id="struktur-reset" class="btn btn-warning w-px-100" type="button" name="struktur-reset">Reset</button>
                            <?php endif; ?>
                            </div>
                          </div>
                        </form>
                      </div>  
              </div >

  <hr>
              <!-- JSON EDIT -->
              <div class="col-md-12 mb-4 order-0">
                      <div class="row">
                        <h3 class="text-primary">DATA USE.JSON</h3>
                        <form id="data-use" action="" method="" class="col-12">
                        <input id="data-use-id" type="hidden" value="<?= $data['id']; ?>">
                          <textarea
                          style="background-color: black;
                          color:beige;
                          font-family: 'Source Code Pro', sans-serif;" 
                          class="form-control" 
                          name="data-use" 
                          id="data-use-input" 
                          rows="50">
                              <?= $data['data_use']; ?>
                          </textarea>
                          <div class="row mt-2 mb-2">
                            <div class="col-4 col-xl-2">
                              <button class="btn btn-success w-px-100" type="submit" name="submit" >Upload</button>
                            </div>
                            <div class="col-4 col-xl-2">
                              <button id="json-reset" class="btn btn-warning w-px-100" type="button" name="data-use-reset">Reset</button>      
                            </div>
                            <div class="col-4 col-xl-2">
                              <button id="json-default" class="btn btn-danger " type="button" name="data-use-default">Set Default</button>
                            </div>
                          </div>
                        </form>
                      </div>  
              </div >

            </div>


            <!-- / Content -->

            <!-- Footer -->
            <?php include_once "../../global/struktur/footer.php"; ?>
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
    <script src="../../assets/js/sweetalert2.min.js"></script>
    <script src="ajaxnalert.js?versi="><?= $versi; ?></script>


    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
  </body>
</html>
