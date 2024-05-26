<?php
require_once "config.php";

$customProp = "
--primary-btn: hsl(114, 16%, 49%);
--primary-btn-active: hsl(114, 16%, 44%);
--accent: rgb(194, 155, 78);
";

$editable = true;
$editableAttr = $editable ? "data-mode='editable'" : "";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="format-detection" content="telephone=no" />
    <title>Undangan Online</title>
    <!-- <meta name="title" content="<?= $title_content; ?>" />
    <meta name="description" content="<?= $desc_content; ?>" /> -->

    <!-- Open Graph / Facebook -->
    <!-- <meta property="og:type" content="website" />
    <meta property="og:url" content="<?= $url_content; ?>" />
    <meta property="og:title" content="<?= $title_head; ?>" />
    <meta property="og:description" content="<?= $desc_content; ?>" />
    <meta property="og:image" content="<?= $img_content; ?>" /> -->

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
    <link rel="stylesheet" type="text/css" href="../css/slick.css" />
    <link rel="stylesheet" type="text/css" href="../css/aos.css" />
    <link rel="stylesheet" href="../css/glightbox.css">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="../css/tailwind.css">
    <!-- <link rel="stylesheet" href="../aacss/loading.css?versi" />
    <link rel="stylesheet" href="../aacss/animate.min.css?versi" />
    <link rel="stylesheet" href="../aacss/bootstrap.css?versi" />
    <link rel="stylesheet" href="../aacss/swiper.css?versi" />
    <link rel="stylesheet" href="../aacss/sweetalert2.min.css?versi"> -->

    <!-- font -->


</head>

<body <?= $editableAttr ?> style="<?= $customProp ?>" class="[&:not(.open)]:overflow-hidden relative">
    <?php if ($editable) {
        include_once "components/editable.php";
    }
    ?>
    <!-- BGM -->
    <?php include_once "components/music.php"; ?>

    <main id="app" class="font-[Alice]">
        <!-- Greet -->
        <?php include "structures/cover.php"; ?>
        <!-- Greet -->
        <?php include "structures/greet.php"; ?>
        <!-- Couple -->
        <?php include "structures/couple.php"; ?>
        <!-- Quote -->
        <?php include "structures/quote.php"; ?>
        <!-- Acara -->
        <?php include "structures/acara.php"; ?>
        <!-- Map -->
        <?php include "structures/map.php"; ?>
        <!-- Acara Date -->
        <?php include "structures/acara-date.php"; ?>
        <!-- Gallery -->
        <?php include "structures/gallery.php"; ?>
        <!-- Video -->
        <?php include "structures/video.php"; ?>
        <!-- RSVP -->
        <?php include "structures/rsvp.php"; ?>
        <!-- Gift -->
        <?php include "structures/gift.php"; ?>
        <!-- Footer -->
        <?php include "structures/footer.php"; ?>
    </main>



    <!-- JS -->
    <script type="text/javascript" src="../js/jquery.js"></script>
    <script type="text/javascript" src="../js/slick.js"></script>
    <script type="text/javascript" src="../js/aos.js"></script>
    <script type="text/javascript" src="../js/glightbox.js"></script>
    <script type="text/javascript" src="../js/boxicon.js"></script>

    <script src="../js/global.js"></script>
    <script src="../js/editable.js"></script>
    <script>
        $('.cover-carousel').slick({
            infinite: true,
            speed: 1000,
            fade: true,
            slidesToShow: 1,
            // adaptiveHeight: true,
            autoplay: true,
            autoplaySpeed: 4000,
            arrows: false,
        });
    </script>
</body>

</html>