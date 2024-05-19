<?php 


$now = 'advance';
require_once '../direct.php';
require_once 'condition.php';
$page = 'map';
$date = date_create($data['date']);
$date = date_format($date,'d/m/Y');
$tema = $data['tema'];
$view = "../../theme/$tema/preview.php?user=$user&page=$page";
$iframe = "../../theme/$tema/preview.php?user=$user&page=$page";
$cek = 'checked';
$hide = '';
$cek_val = 'on';
if(isset($json['switch_map'])){
    if($json['switch_map'] == 'off'){
      $cek = '';
      $hide = 'd-none';
      $iframe = '../../error';
      $cek_val = 'off';
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

    <title>Map Tutorial</title>

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

    <style>
      #map-phone{
        display:none;
      }

      @media (max-width: 767.98px) {
    #map-phone {
        display: inherit;
    }
    #map-desktop {
        display: none;
    }
}
    </style>

    <!-- Helpers -->
    <script src="../../global/assets/vendor/js/helpers.js"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="../../global/assets/js/config.js"></script>
  </head>

  <body>
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
    <!-- Layout wrapper -->
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
                  <span class="display-6">Map Tutorial</span>
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
              <div id="status">
              </div>

              <!-- Map -->
              <div class="col-md-12 mb-4 order-0">
                <div class="card p-3">
                  <div class="d-flex align-items-md-start row">
                      <!-- input -->
                    <div class="col-md-12">
                      <div class="card-body">
                        <div style="overflow-x:auto;">
                        <h3 class="mb-3 text-primary">Get URL Embeded Google Map</h3>
                      </div>
                        <hr />
                                  
                        <!-- phone -->
                        <div id="map-phone" class="input-box text-nowrap">
                          <div>
                            <h4>From Phone :</h4>
                          </div>
                          <div>
                            <p class="mb-0 text-wrap text"><strong>1.</strong> Buka Aplikasi <strong class="text-primary">GOOGLE MAP</strong> pada Perangkat Ponsel Anda.</p>
                            <img loading="lazy" class="img-fluid mb-4 rounded-3" src="../img/map/phone-1.jpg" alt="map upload">
                            <p class="mb-0 text-wrap"><strong>2.</strong> Dalam Kolom search masukan  <strong class="text-primary">alamat / nama tempat</strong> yang ingin ditampilakan, Atau dapat juga dengan menekan lama pada peta sampai <strong class="text-primary">titik point map</strong> Muncul.</p>
                            <img loading="lazy" class="img-fluid mb-4 border border-3 border-dark rounded-3" src="../img/map/phone-2.jpg" alt="map upload">
                            <p class="mb-0 text-wrap"><strong>3.</strong> Lihat Pada bagian bawah google map, <strong class="text-primary">Swipe Ke Atas</strong> sampai <strong class="text-primary">informasi detail</strong> tentang lokasi tertampil.</p>
                            <img loading="lazy" class="img-fluid mb-4 border border-3 border-dark rounded-3" src="../img/map/phone-3.jpg" alt="map upload">
                            <p class="mb-0 text-wrap"><strong>4.</strong> Copy Pada bagian <strong class="text-primary">Alamat Lengkap</strong> seperti gambar dibawah ini. Anda bisa meng-Copy alamat dengan menyentuh kolom alamat selama 3 detik sampai muncul pop up <strong class="text-primary">"Alamat Telah Disalin"</strong>.</p>
                            <img loading="lazy" class="img-fluid mb-4 border border-3 border-dark rounded-3" src="../img/map/phone-4.jpg" alt="map upload">
                            <p class="mb-0 text-wrap"><strong>5.</strong> Setelah muncul tampilan map kecil di jendela share, lalu klik tombol <strong class="text-primary">COPY HTML</strong>.</p>
                              <img loading="lazy" class="img-fluid mb-4 rounded-3" src="../img/map/4.jpg" alt="map upload">
                            <p class="mb-0 text-wrap"><strong>6.</strong> Paste <strong class="text-primary">Alamat lengkap</strong> tadi ke dalam kolom dibawah ini lalu klik tombol <strong class="text-primary">Generate Link</strong>.
                            
                              <div class="mb-1 row">
                                <label for="embed_link" class="col-md-3 col-form-label">Link Generator</label>
                                <div class="col-md-8">
                                  <textarea class="form-control" name="embed_link" type="text" rows="4" id="embed_link" placeholder="Paste Alamat Lengkap di Sini.." autocomplete="off"></textarea>
                                </div>
                              </div>
                              <div class="mb-2 col-md-8">
                              <button class="btn btn-success" type="button" name="submit" onclick="generate()">Generate Link !</button>
                              </div>
      
                            <p class="mb-0 text-wrap"><strong>7.</strong> Jika Kolom Result sudah mengenerate link, tekan tombol <strong class="text-primary">Copy Link</strong> .</p>
                              <div class="mb-1 row">
                                <label for="result_link" class="col-md-3 col-form-label">Link Result</label>
                                <div class="col-md-8">
                                  <textarea class="form-control" name="result_link" type="text" rows="4" id="result_link" placeholder="Belum Ada Link" autocomplete="off" disabled></textarea>
                                </div>
                              </div>
                              <div class="mb-2 col-md-8">
                                <a id="linkCopy" class="btn btn-primary" href="" onclick="linkResult(event)">Copy Link</a>
                              </div>
                            
                            <p class="mb-0 text-wrap"><strong>8.</strong> Terakhir <strong class="text-primary">Tempelkan</strong> link yang sudah anda copy tadi, dan klik <strong class="text-primary">APPLY</strong> untuk memastikan MAP yang anda ingin tampilkan telah Tertampil dengan Baik.</p>
                            <img loading="lazy" class="img-fluid mb-4 border border-3 border-dark rounded-3" src="../img/map/phone-5.jpg" alt="map upload">
                          </div>
                          <div class="mb-2 row">
                            <a class="btn btn-primary w-px-100 " href="map.php?user=<?= $user; ?>" >Back</a>
                          </div>
                        </div> 
                        <!-- desktop     -->
                        <div id="map-desktop" class="input-box text-nowrap">
                          <div>
                            <h4>From Desktop :</h4>
                          </div>
                          <div>
                            <p class="mb-0 text-wrap text"><strong>1.</strong> Buka Aplikasi <strong class="text-primary">GOOGLE CHROME</strong> pada Komputer Anda.</p>
                            <img loading="lazy" class="img-fluid mb-4 rounded-3" src="../img/video/1.jpg" alt="map upload">
                            <p class="mb-0 text-wrap"><strong>2.</strong> Dalam Kolom Url masukan kata kunci <strong class="text-primary">GOOGLE MAP</strong>, Lalu klik hasil pencarian <strong class="text-primary">GOOGLE MAPS</strong>.</p>
                            <img loading="lazy" class="img-fluid mb-4 border border-3 border-dark rounded-3" src="../img/map/1.jpg" alt="map upload">
                            <p class="mb-0 text-wrap"><strong>3.</strong> Masukkan <strong class="text-primary">ALAMAT</strong> yang ingin anda tampilkan di map atau tentukan <strong class="text-primary">TITIK POINT</strong> dengan mengklik salah satu tempat dalam map.</p>
                            <img loading="lazy" class="img-fluid mb-4 border border-3 border-dark rounded-3" src="../img/map/2.jpg" alt="map upload">
                            <p class="mb-0 text-wrap"><strong>4.</strong> Klik icon/tombol <strong class="text-primary">SHARE</strong> lalu pilih icon <strong class="text-primary">EMBED A MAP</strong>.</p>
                            <img loading="lazy" class="img-fluid mb-4 rounded-3" src="../img/map/3.jpg" alt="map upload">
                            <p class="mb-0 text-wrap"><strong>5.</strong> Setelah muncul tampilan map kecil di jendela share, lalu klik tombol <strong class="text-primary">COPY HTML</strong>.</p>
                              <img loading="lazy" class="img-fluid mb-4 rounded-3" src="../img/map/4.jpg" alt="map upload">
                            <p class="mb-0 text-wrap"><strong>6.</strong> Kembali ke halaman <strong class="text-primary">EDIT MAP</strong> lalu anda dapat menempelkan link yang sudah anda copy tadi di kolom <strong class="text-primary">MAP VIEW</strong></p>
                            <img loading="lazy" class="img-fluid mb-4 border border-3 border-dark rounded-3" src="../img/map/5.jpg" alt="map upload">
                            <p class="mb-0 text-wrap"><strong>7.</strong> Dalam kolom <strong class="text-primary">MAP VIEW</strong> Perhatikan link dalam tag <strong class="text-primary">SRC="__"</strong>, Copy link Tersebut tanpa tanda petik(").</p>
                            <img loading="lazy" class="img-fluid mb-4 border border-3 border-dark rounded-3" src="../img/map/6.jpg" alt="map upload">
                            <p class="mb-0 text-wrap"><strong>8.</strong> Terakhir hapus semua input dalam kolom <strong class="text-primary">MAP VIEW</strong> lalu tempelkan link yang sudah anda copy tadi, dan klik <strong class="text-primary">APPLY</strong> untuk memastikan MAP yang anda ingin tampilkan telah Tertampil dengan Baik.</p>
                            <img loading="lazy" class="img-fluid mb-4 border border-3 border-dark rounded-3" src="../img/map/7.jpg" alt="map upload">
                          </div>
                          <div class="mb-2 row">
                            <a class="btn btn-primary w-px-100 " href="map.php?user=<?= $user; ?>" >Back</a>
                          </div>
                        </div>                                                                          
                      </div>
                    </div>
                      <!-- input -->

                  </div>
                </div>  
              </div >
              <!-- MAp -->

              <hr class="my-5" />

            </div>


            <!-- / Content -->

            <!-- Footer -->
            <?php include_once '../../global/struktur/footer.php' ?>
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
    <script>
      function generate(){
        var hrefLink = document.getElementById('linkCopy')
        var embedLink = document.getElementById('embed_link')
        var resultLink = document.getElementById('result_link')
        var embedGoogle = "https://www.google.com/maps/embed/v1/place?key=AIzaSyDxEGM2bDJDR-7e5axUDMyWa-AELydyqaY&q=";
        var linkText = encodeURI(embedLink.value);
        var send = embedGoogle + linkText;
        resultLink.value = send;
        hrefLink.setAttribute('href',send);
        
      }

      function linkResult(evt) {
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


    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>

  </body>
</html>
