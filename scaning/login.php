<?php
session_start();

require_once '../conn.php';


//cek $_GET
if(!isset($_COOKIE['reg'])){
    if(!isset($_GET['admin'])){
        header('Location: forbiden/');
        die;
    }
    $admin = $_GET['admin'];
}else{
    $admin = $_COOKIE['reg'];
}

if(!isset($_GET['key'])){
    $_GET['key'] = '';
}



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi Barcode</title>

    <!-- Favicons -->
    <link rel="icon" type="image/png" sizes="16x16" href="../global/assets/img/favicon/16x16.ico">
    <link rel="icon" type="image/png" sizes="24x24" href="../global/assets/img/favicon/24x24.ico">
    <link rel="icon" type="image/png" sizes="32x32" href="../global/assets/img/favicon/32x32.ico">
    <link rel="icon" type="image/png" sizes="48x48" href="../global/assets/img/favicon/48x48.ico">
    <link rel="apple-touch-icon" sizes="64x64" href="../global/assets/img/favicon/64x64.ico">
    <link rel="apple-touch-icon" sizes="96x96" href="../global/assets/img/favicon/96x96.ico">
    <link rel="apple-touch-icon" sizes="128x128" href="../global/assets/img/favicon/128x128.ico">
    <link rel="apple-touch-icon" sizes="192x192" href="../global/assets/img/favicon/192x192.ico">

    <!-- css -->
    <link rel="stylesheet" href="../assets/css/sweetalert2.min.css">
    <link rel="stylesheet" href="index.css">



</head>
<body>
    <input id="result" type="hidden" value="wait">
    <div class="prompt">
	Input TOKEN anda !
</div>

<form id="login" method="post" action="" class="digit-group" data-group-name="digits" data-autosubmit="false" autocomplete="off">
	<input type="text" id="digit-1" name="digit-1" data-next="digit-2" />
	<input type="text" id="digit-2" name="digit-2" data-next="digit-3" data-previous="digit-1" />
	<input type="text" id="digit-3" name="digit-3" data-next="digit-4" data-previous="digit-2" />
	<span class="splitter">&ndash;</span>
	<input type="text" id="digit-4" name="digit-4" data-next="digit-5" data-previous="digit-3" />
	<input type="text" id="digit-5" name="digit-5" data-next="digit-6" data-previous="digit-4" />
	<input type="text" id="digit-6" name="digit-6" data-previous="digit-5" />
    <input type="hidden" id="admin" name="admin" value="<?= $admin; ?>">
    <input type="hidden" id="key" name="key" value="<?= $_GET['key']; ?>">
    <button id="btn" style="display: none;" type="submit"></button>
</form>


</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<script src="../assets/js/sweetalert2.min.js"></script>
<script src="index.js"></script>


</html>