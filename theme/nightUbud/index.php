<?php
ob_start();
session_start();

require_once 'function.php';
require_once 'config.php';
if (file_exists("../../dari/$table/struktur.php")){
    require_once "../../dari/$table/struktur.php";
}else{
    require_once 'struktur.php';
}

// CEK USER TERDAFTAR ATAU TIDAK

$user = $_COOKIE['user'];
if(isset($_GET['kode'])){
    $data = cek_tamu($user,$_GET['kepada'],$_GET['kode']);  
}else{
    $data = cek_tamu($user,'','',);
}


$cookie = $_COOKIE['kode'];
if(!isset($_SESSION['preview'])){
    $admin = $_COOKIE['admin'];
    $url_barcode .= "?admin=$admin&key=$cookie";
}else{
    $url_barcode = "https://ada-undangan.online";
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="format-detection" content="telephone=no" />
    <title><?= $title_head; ?></title>
    <meta name="title" content="<?= $title_content; ?>" />
    <meta name="description" content="<?= $desc_content; ?>" />

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website" />
    <meta property="og:url" content="<?= $url_content; ?>" />
    <meta property="og:title" content="<?= $title_head; ?>" />
    <meta property="og:description" content="<?= $desc_content; ?>" />
    <meta property="og:image" content="<?= $img_content; ?>" />

    <!-- Favicons -->
    <link rel="icon" type="image/png" sizes="16x16" href="images/icon/16x16.ico">
    <link rel="icon" type="image/png" sizes="24x24" href="images/icon/24x24.ico">
    <link rel="icon" type="image/png" sizes="32x32" href="images/icon/32x32.ico">
    <link rel="icon" type="image/png" sizes="48x48" href="images/icon/48x48.ico">
    <link rel="apple-touch-icon" sizes="64x64" href="images/icon/64x64.ico">
    <link rel="apple-touch-icon" sizes="96x96" href="images/icon/96x96.ico">
    <link rel="apple-touch-icon" sizes="128x128" href="images/icon/128x128.ico">
    <link rel="apple-touch-icon" sizes="192x192" href="images/icon/192x192.ico">

    <!-- css -->
    <link rel="stylesheet" href="../aacss/loading.css?versi=<?= $versi; ?>"/>
    <link rel="stylesheet" href="../aacss/animate.min.css?versi=<?= $versi; ?>"/>
    <link rel="stylesheet" href="../aacss/bootstrap.css?versi=<?= $versi; ?>"/>
    <link rel="stylesheet" href="../aacss/swiper.css?versi=<?= $versi; ?>"/>
    <link rel="stylesheet" href="../aacss/sweetalert2.min.css?versi=<?= $versi; ?>">

    <?php if (file_exists("../../dari/$table/style.css")) :?>
    <link rel="stylesheet" href="../../dari/<?= $table; ?>/style.css?versi=<?= $versi; ?>"/>
    <?php endif; ?>
    <?php if (!file_exists("../../dari/$table/style.css")) :?>
    <link rel="stylesheet" href="css/style.css?versi=<?= $versi; ?>"/>
    <?php endif; ?>

    <!-- font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@800&display=swap" rel="stylesheet">

</head>

<body>
    <main id="app">
        <?php if(isset($_SESSION['preview'])) : ?>
            <?php if($_SESSION['preview'] == true): ?>
            <input type="hidden" id="preview" value="on">
            <?php endif; ?>
        <?php endif; ?>
        <!-- <div class="modal-backdrop modalOverlay gallery fade" style="display: none"></div> -->
        <!-- Loader -->
        <div id="loader" class="loader-wrapper">
            <!-- <div class="clock-loader"></div> -->
            <div class="loading">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="-5 -5 420 256.4">
                    <g>
                        <g>
                            <path class="loading__1" d="M112,246.4H400a5,5,0,0,0,5-5V27.23a5,5,0,0,0-8-4L109,237.39A5,5,0,0,0,112,246.4Z"></path>
                            <path class="loading__2" d="M379.5,0H27.39a5,5,0,0,0-3,9L200.46,139.92a5,5,0,0,0,6,0L382.48,9A5,5,0,0,0,379.5,0Z"></path>
                            <path class="loading__3" d="M0,25.83V241.4a5,5,0,0,0,5,5H61.56a5,5,0,0,0,3-1l116.69-86.76a5,5,0,0,0,0-8L8,21.81A5,5,0,0,0,0,25.83Z"></path>
                        </g>
                    </g>
                </svg>
            </div>
        </div>
        <!-- music -->
        <audio id="music" loop>
            <source src="<?= $song; ?>" />
        </audio>
        <!-- invitation -->
        <div id="artProject" class="swiper not-open" data-guest="<?php 
        if (isset($data['nama'])) {
            echo ucWords($data['nama']);
        } else {
            if(isset($_COOKIE['to'])){
                echo ucWords($_COOKIE['to']);
            }else{
            echo 'Tamu Undangan';
            }
        } ?>">
            <div class="swiper-wrapper invitation__list">
                <!-- struktur undangan -->
                <?= $cover; ?>
                <?php 
                foreach($layout as $lay){
                    if($lay == 'barcode' && $switch_barcode != 'off'){echo $bar; }
                    if($lay == 'quote' && $switch_quote != 'off'){echo $quotes; }
                    if($lay == 'video' && $switch_video != 'off'){echo $video; }
                    if($lay == 'couple'){echo $couple; }
                    if($lay == 'acara'){echo $acara; }
                    if($lay == 'map' && $switch_map != 'off'){echo $map; }
                    if($lay == 'prokes' && $switch_prokes != 'off'){echo $protokol; }
                    if($lay == 'galery' && $switch_galery != 'off'){echo $galery; }
                    if($lay == 'galery' && $switch_galery2 != 'off'){echo $galery2; }
                    if($lay == 'rsvp' && $switch_rsvp != 'off'){echo $rsvp; }
                    if($lay == 'gift' && $switch_rek != 'off'){echo $gift; }
                    
                }
                ?>
                <?= $thx; ?>
                <?= $sup; ?>
                    <!-- ========================== -->
            </div>
        </div>
        <div id="menuSlider" class="swiper">
            <div class="swiper-wrapper menu-list">
                <!-- nav buton -->
                <?= $navCover; ?>
                <?php 
                foreach($layout as $lay){
                    if($lay == 'barcode' && $switch_barcode != 'off'){echo $navbar; }
                    if($lay == 'quote' && $switch_quote != 'off'){echo $navquotes; }
                    if($lay == 'video' && $switch_video != 'off'){echo $navvideo; }
                    if($lay == 'couple'){echo $navcouple; }
                    if($lay == 'acara'){echo $navacara; }
                    if($lay == 'map' && $switch_map != 'off'){echo $navmap; }
                    if($lay == 'prokes' && $switch_prokes != 'off'){echo $navprotocol; }
                    if($lay == 'galery' && $switch_galery != 'off'){echo $navgalery; }
                    if($lay == 'galery' && $switch_galery2 != 'off'){echo $navgalery2; }
                    if($lay == 'rsvp' && $switch_rsvp != 'off'){echo $navrsvp; }
                    if($lay == 'gift' && $switch_rek != 'off'){echo $navgift; }
                }
                ?>
                <?= $navthx; ?>
                <?= $navsup; ?>
                <!-- ========================== -->
            </div>
        </div>
        <!-- end invitation -->
        <div id="music">
            <button id="btnMusic" class="btn btn-music">
                <svg xmlns="http://www.w3.org/2000/svg" height="20" width="20" viewBox="0 0 20 20" fill="currentColor">
                    <path d="M18 3a1 1 0 0 0-1.196-.98l-10 2A1 1 0 0 0 6 5v9.114A4.369 4.369 0 0 0 5 14c-1.657 0-3 .895-3 2s1.343 2 3 2 3-.895 3-2V7.82l8-1.6v5.894A4.37 4.37 0 0 0 15 12c-1.657 0-3 .895-3 2s1.343 2 3 2 3-.895 3-2V3z" />
                </svg>
            </button>
        </div>
        <!-- lightbox -->
        
        <!-- end lightbox -->
        <!-- startRSVPModal -->
        <div id="rsvpModalOverlay" class="modal-backdrop fade" style="display: none"></div>
        <div class="modal fade" id="rsvpModal" tabindex="-1" role="dialog" aria-labelledby="rsvpModal" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content" style="height: 100%">
                    <!-- rsvp form -->
                    <div class="p-4 p-sm-5 rsvp-form">
                        <!---->

                        <div class="mb-4">
                            <div class="font-accent h4 text-center">RSVP</div>
                        </div>
                        <!---->
                        <?php $data = $data = data("SELECT * FROM $user WHERE kode = '$cookie'"); ?>
                        <?php if (!empty($data)) : ?>
                            <?php $data = $data[0]; ?>
                            <?php if ($data['status'] == 'done') : ?>
                                <div class="mt-2">
                                    <h4 style="text-align:center">Terima Kasih sudah mengkonfirmasi kehadiraan Anda</h4>
                                </div>
                            <?php endif; ?>
                            <?php if ($data['status'] !== 'done') : ?>
                                <form id="form">
                                    <input id="kode" type="hidden" value="<?= $data['kode']; ?>">
                                    <div class="form-group">
                                        <input id="nama" type="text" placeholder="Nama" class="form-control" maxlength="30" readonly value="<?= ucwords($data['nama']); ?>" />
                                    </div>

                                    <div class="form-group">
                                        <select id="hadir" placeholder="Kehadiran" class="form-control" required>
                                            <option value="" selected="selected" disabled>--Konfirmasi Kehadiran--</option>
                                            <option value="Hadir">Akan Hadir</option>
                                            <option value="Tidak Hadir">Tidak Hadir</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <textarea id="text" rows="3" placeholder="Tulis Ucapan.." class="form-control" maxlength="200"></textarea>
                                    </div>
                                    <?php if(!isset($_SESSION['preview'])) : ?>
                                            <button id="submit" type="button" class="btn btn-primary btn-block mt-4 mb-3"><span>Kirim</span></button>
                                    <?php endif; ?>
                                </form>
                            <?php endif; ?>
                        <?php endif; ?>
<!-- jika user tidak terdaftar -->
                        <?php if (empty($data)) : ?>

                                <form id="form">
                                    <input id="kode" type="hidden" value="<?= $cookie; ?>">
                                    <div class="form-group">
                                    <?php if(!isset($_COOKIE['to'])): ?>
                                        <input id="nama" type="text" placeholder="Nama" class="form-control" maxlength="30" required />
                                        <?php endif; ?>

                                        <?php if(isset($_COOKIE['to'])): ?>
                                        <input id="nama" type="text" style="background-color:#dfdcdc;" placeholder="Nama" class="form-control" maxlength="30" required value="<?= $_COOKIE['to']; ?>" />
                                        <?php endif; ?> 
                                    </div>

                                    <div class="form-group">
                                        <select id="hadir" placeholder="Kehadiran" class="form-control" required>
                                            <option value="" selected="selected" disabled>--Konfirmasi Kehadiran--</option>
                                            <option value="Hadir">Akan Hadir</option>
                                            <option value="Tidak Hadir">Tidak Hadir</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <textarea id="text" rows="3" placeholder="Komentar" class="form-control" maxlength="200"></textarea>
                                    </div>
                                    <?php if(!isset($_SESSION['preview'])) : ?>
                                        <button id="submit" type="button" class="btn btn-primary btn-block mt-4 mb-3"><span>Kirim</span></button>
                                    <?php endif; ?>
                                </form>
                            
                        <?php endif; ?>
                        <!---->
                        <hr />
                        <div class="mt-4 comment">
                            <div class="mb-3">
                                <?php if ($com != '') : ?>
                                    <?php $no = 0; ?>
                                    <?php foreach ($com as $comm) : ?>
                                        <div class="d-flex">
                                            <img src="https://ui-avatars.com/api/?name=<?= ucwords($comm['nama']) ?><?php if ($no % 2 != 0) {
                                                echo '&background=d7daf1';
                                            } ?>" alt="<?= ucwords($comm['nama']) ?>" class="avatar rounded-circle" style="height: 30px; width: 30px" />
                                            <div class="ml-2 text-left" <?php if ($no % 2 == 0) {
                                                                            echo 'style="background-color: #e2e2e2;padding-left:10px;border-radius:10px;"';
                                                                        } else {
                                                                            echo 'style="background-color: #d7daf1;padding-left:10px;border-radius:10px;"';
                                                                        } ?>>
                                                <h6 class="font-weight-bold" style="margin:0;"><?= ucwords($comm['nama']) ?></h6>
                                                <?php if($comm['hadir'] == 'Hadir'): ?>
                                                <p class="text-right font-weight-100 mb-0 text-success">✔ Hadir</p>
                                                <?php endif; ?>
                                                <hr class="mt-0 mb-1">
                                                <p class="mb-0"><?= ucfirst($comm['comment']) ?></p>
                                                <small><?= $comm['dateComment']; ?></small>
                                            </div>
                                        </div>
                                        <?php $no++ ?>
                                    <?php endforeach; ?>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                    <rsvp-component :invitation_id="3312" code="" overlay="1"> </rsvp-component>
                    <!-- rsvp form -->
                    <button type="button" class="btn btn-close">
                        <svg xmlns="http://www.w3.org/2000/svg" height="42px" width="42px" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18 18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
        <!-- endRSVPModal -->    
    </main>

    <script src="../aajs/swiper.js?versi=<?= $versi; ?>"></script>
    <script src="../aajs/sweetalert2.min.js?versi=<?= $versi; ?>"></script>
    <script src="../aajs/qrCode.js?versi=<?= $versi; ?>"></script>
    <script src="../aajs/adaUndangan.js?versi=<?= $versi; ?>"></script>
    <script src="../aajs/theme.js?versi=<?= $versi; ?>"></script>
    <script src="../aajs/coment.js?versi=<?= $versi; ?>"></script>
    <script src="../aajs/capture.js?versi=<?= $versi; ?>"></script>

    <script>
        // qr-code
if (document.getElementById("qrcode") != null) {
    var qrcode = new QRious({
        element: document.getElementById("qrcode"),
        background: "#ffffff",
        backgroundAlpha: 1,
        foreground: "#958b7b",
        foregroundAlpha: 1,
        level: "H",
        size: 300,
        value: "<?= $url_barcode; ?>",
    });
}
if (document.getElementById("barcode") != null) {
    document.getElementById("download").onclick = function () {
        document.getElementById("download").style.display = "none";
        document.getElementById("bar-code").className = "map";

        const barcode = document.getElementById("barcode");
        html2canvas(barcode).then((canvas) => {
            const urlData = canvas.toDataURL("images/jpeg");
            var ancor = document.createElement("a");
            ancor.setAttribute("href", urlData);
            ancor.setAttribute("download", "barcode.jpg");
            ancor.click();
            ancor.remove();
            // document.getElementById('bar-code').className += " animate__animated animate__fadeInDown animate__slow";
        });
    };
}
    </script>

    <!-- end script -->
</body>

</html>