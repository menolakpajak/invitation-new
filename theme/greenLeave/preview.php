<?php
ob_start();

// CEK USER TERDAFTAR ATAU TIDAK

$user = $_GET['user'];
$page = $_GET['page'];
require_once '../aapreview/config.php';

if (file_exists("../../dari/$table/struktur.php")){
    require_once "../../dari/$table/struktur.php";
}else{
    require_once 'struktur.php';
}

$head = <<<hat

<!-- head -->
<li class="swiper-slide invitation__slide">
    <div class="container-mobile" style="background-image: url(images/bg.jpg)">
        
        <div class="d-flex justify-content-center align-items-center" style="height: 100%">
            <div style="width: 100%">
                <div>
                    <div class="text-left animate__animated animate__fadeInDown animate__slower">
                        -- Open Graph / Facebook --
                        <div>meta property="og:type" content="<span class="text-primary">website</span>"</div>
                        <div>meta property="og:title" content="<span class="text-primary">$title_head</span>"</div>
                        <div>meta property="og:url" content="<span class="text-primary">$url_content</span>"</div>
                        <div>meta property="og:description" content="<span class="text-primary">$desc_content</span>"</div>
                        <div>meta property="og:description"
                        content="
                        <span class="text-primary text-wrap">$img_content</span>"</div>
                        </div>
                        <div
                            class="animate__animated animate__fadeInDown animate__slower"
                            style="height: 200px; width: 200px; margin: auto; overflow: hidden; margin-bottom: 20px"
                        >
                            <img src="$img_content?versi=$versi" style="width: 100%; height: 100%; object-fit: cover" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</li>
hat;
$songname = explode('/',$song);
$songname = end($songname);
$backsong = <<<song
<!-- song -->
<li class="swiper-slide invitation__slide">
    <div class="container-mobile" style="background-image: url(images/bg.jpg)">
        $frame
        <div class="d-flex justify-content-center align-items-center" style="height: 100%">
            <div style="width: 100%">
                <div>
                    <div class="text-center animate__animated animate__fadeInDown animate__slower">
                        <div class="color-accent h3 mb-3">Preview</div>
                        <div class="mb-2">$songname</div>
                        <div
                            class="animate__animated animate__fadeInDown animate__slower"
                            style="; overflow: hidden; margin-bottom: 20px"
                        >
                        <audio controls>
                            <source src="$song" type="audio/mpeg">
                        </audio>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</li>

song;


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
    <link rel="stylesheet" href="../aacss/swiper.css?versi=<?= $versi; ?>" />
    <link rel="stylesheet" href="../aacss/animate.min.css?versi=<?= $versi; ?>"/>
    <link rel="stylesheet" href="../aacss/bootstrap.css?versi=<?= $versi; ?>"/>
    <link rel="stylesheet" href="../aacss/sweetalert2.min.css?versi=<?= $versi; ?>">

    <?php if (file_exists("../../dari/$table/style.css")) :?>
    <link rel="stylesheet" href="../../dari/<?= $table; ?>/style.css?versi=<?= $versi; ?>"/>
    <?php endif; ?>
    <?php if (!file_exists("../../dari/$table/style.css")) :?>
    <link rel="stylesheet" href="css/style.css?versi=<?= $versi; ?>"/>
    <?php endif; ?>


</head>

<body>
<div style="padding:20px; position: relative; top:0;margin-left:auto;margin-right:auto; width:100%; height:fit-comtent; background-color:#4240409e;z-index:2;color:white;">
                <p>Data Pada preview ini secara default adalah contoh</p>
            </div>
    <main id="app">
        
        <!-- Loader -->
        <div id="loader" class="loader-wrapper">
            <div class="clock-loader"></div>
            <div class="status">Loading
                <span class="status__dot">.</span>
                <span class="status__dot">.</span>
                <span class="status__dot">.</span>
            </div>
        </div>
        <!-- invitation -->
        <div id="artProject" class="swiper not-open" data-guest="Tamu Undangan">
                

                <div class="swiper-wrapper invitation__list">
                    <!-- head -->
                    <?php if($page == 'head'){ echo $head;}?>
                    <!-- struktur undangan -->

                    <?php if($page == 'cover'){ echo $cover;}?>
                    <?php if($page == 'qrcode'){ echo $bar;}?>
                    <?php if($page == 'song'){ echo $backsong;}?>
                    <?php if($page == 'quote'){ echo $quotes;}?>
                    <?php if($page == 'video'){ echo $video;}?>
                    <?php if($page == 'couple'){ echo $couple;}?>
                    <?php if($page == 'acara'){ echo $acara;}?>
                    <?php if($page == 'map'){ echo $map;}?>
                    <?php if($page == 'prokes'){ echo $protokol;}?>
                    <?php if($page == 'galery'){ echo $galery;}?>
                    <?php if($page == 'galery2'){ echo $galery2;}?>
                    <?php if($page == 'rsvp'){ echo $rsvp;}?>
                    <?php if($page == 'gift'){ echo $gift;}?>
                    <?php if($page == 'thx'){ echo $thx;}?>
                    <!-- ========================== -->
                </div>
            </div>
        </div>
        <div id="menuSlider" class="swiper">
            
                <div class="swiper-wrapper menu-list">
                    <!-- head -->
                    <?php if($page == 'head'){ echo $navCover;}?>
                    <!-- nav buton -->
                    <?php if($page == 'cover'){ echo $navCover;}?>
                    <?php if($page == 'qrcode'){ echo $navbar;}?>
                    <?php if($page == 'quote'){ echo $navquotes;}?>
                    <?php if($page == 'video'){ echo $navvideo;}?>
                    <?php if($page == 'couple'){ echo $navcouple;}?>
                    <?php if($page == 'acara'){ echo $navacara;}?>
                    <?php if($page == 'map'){ echo $navmap;}?>
                    <?php if($page == 'prokes'){ echo $navprotokol;}?>
                    <?php if($page == 'galery'){ echo $navgalery;}?>
                    <?php if($page == 'galery2'){ echo $navgalery2;}?>
                    <?php if($page == 'rsvp'){ echo $navrsvp;}?>
                    <?php if($page == 'gift'){ echo $navgift;}?>
                    <?php if($page == 'thx'){ echo $navthx;}?>
                    
                    <!-- ========================== -->
                </div>
            
        </div>
        <!-- end invitation -->
        <div id="music" style="display:none">
            <button id="btnMusic" onclick="playMusic()" class="btn btn-music">
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

                                <form id="form">
                                    <input id="kode" type="hidden" value="<?= $user; ?>">
                                    <div class="form-group">
                                        <input id="nama" type="text" placeholder="Nama" class="form-control" maxlength="30" required />
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
                                    <button id="submit" style="display:none"></button>
                                    <button type="button" class="btn btn-primary btn-block mt-4 mb-3"><span>Kirim</span></button>
                                </form>

                        <!---->
                        <hr />
                        <div class="mt-4 comment">
                            <div class="mb-3"> 
                                <div class="d-flex">
                                    <img src="https://ui-avatars.com/api/?name=Bapak+Jokowi&background=d7daf1" alt="Bapak Jokowi" class="avatar rounded-circle" style="height: 30px; width: 30px" />
                                    <div class="ml-2 text-left" style="background-color: #e2e2e2;padding-left:10px;border-radius:10px;">
                                        <h6 class="font-weight-bold" style="margin:0;">Bapak Jokowi</h6>
                                        <p class="text-right font-weight-100 mb-0 text-success">✔ Hadir</p>
                                        <hr class="mt-0 mb-1">
                                        <p class="mb-0">Selamat Menempuh Hidup baru</p>
                                        <small>2022-02-03 16:35:59</small>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3"> 
                                <div class="d-flex">
                                    <img src="https://ui-avatars.com/api/?name=Ibu+Negara&background=d7daf1" alt="Bapak Jokowi" class="avatar rounded-circle" style="height: 30px; width: 30px" />
                                    <div class="ml-2 text-left" style="background-color: #d7daf1;padding-left:10px;border-radius:10px;">
                                        <h6 class="font-weight-bold" style="margin:0;">Ibu Negara</h6>
                                        <hr class="mt-0 mb-1">
                                        <p class="mb-0">Selamat Atas Hari yang berbahagia</p>
                                        <small>2022-01-03 16:35:59</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <rsvp-component :invitation_id="3312" code="" overlay="1"> </rsvp-component>
                    <!-- rsvp form -->
                    <button onclick="closeModal(rsvpModal)" type="button" class="btn btn-close">
                        <svg xmlns="http://www.w3.org/2000/svg" height="42px" width="42px" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18 18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
        <!-- endRSVPModal -->
        <div id="waterMark" class="mt-5"></div>
    </main>

    <script src="../aajs/adaUndangan.js?versi=<?= $versi; ?>"></script>
    <script src="../aajs/swiper.js?versi=<?= $versi; ?>"></script>
    <script src="../aajs/theme.js?versi=<?= $versi; ?>"></script>
    <script src="../aajs/sweetalert2.min.js?versi=<?= $versi; ?>"></script>
    <script src="../aajs/coment.js?versi=<?= $versi; ?>"></script>
    <script src="../aajs/qrCode.js?versi=<?= $versi; ?>"></script>
    <script src="../aajs/capture.js?versi=<?= $versi; ?>"></script>

    <script type="text/javascript">
        if (document.getElementById("qrcode") != null) {
            var qrcode = new QRious({
                element: document.getElementById("qrcode"),
                background: '#ffffff',
                backgroundAlpha: 1,
                foreground: '#958b7b',
                foregroundAlpha: 1,
                level: 'H',
                size: 300,
                value: '<?= $url_barcode; ?>'
            });
        }
    </script>
    <script>
        if(document.getElementById('barcode') != null){

            document.getElementById('download').onclick = function (){
            document.getElementById('download').style.display = "none";
            document.getElementById('bar-code').className = "map";
    
            const barcode = document.getElementById('barcode');
            html2canvas(barcode).then((canvas) => {
                const urlData = canvas.toDataURL("images/jpeg")
                var ancor =document.createElement('a')
                ancor.setAttribute("href",urlData);
                ancor.setAttribute("download","barcode.jpg")
                ancor.click();
                ancor.remove();
                // document.getElementById('bar-code').className += " animate__animated animate__fadeInDown animate__slow";
                })
            };
        }
    </script>
    <!-- end script -->
</body>

</html>