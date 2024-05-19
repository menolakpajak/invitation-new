<?php 

$folder = $data['folder_name'];
$tema = $data['tema'];
$json = json_decode($data['data_use'],true);

$title_head = $json['title_head'];
$title_content = $json['title_content'];
$url_content = $json['url_content'];
$desc_content = $json['desc_content'];
$img_content = $json['img_content'];

$txt = ' 
<?php
session_start();
if(isset($_SESSION[\'preview\'])){
  unset($_SESSION[\'preview\']);
}

require "../../function.php";

$user = "'.$id.'";


$data = data("SELECT * FROM aa_customer WHERE cookie = \'$user\' ");
 if(empty($data)){
    header(\'Location: ../../error\');
    die;
 }
 if($data[0][\'status\'] == \'suspend\'){
    $go = <<<gos
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"/>
    <title>Akun Suspend</title>
    <iframe style="overflow:hidden;width: 100%; height: 100%;" src="../../suspend" frameborder="0"></iframe>
    gos;
    echo $go;
    die;
 }
 if($data[0][\'status\'] != \'active\'){
    header(\'Location: ../../proses\');
    die;
 }

$data_use = $data[0][\'data_use\'];
$json = json_decode($data_use,true);
$title_head = $json[\'title_head\'];
$title_content = $json[\'title_content\'];
$url_content = $json[\'url_content\'];
$desc_content = $json[\'desc_content\'];
$img_content = $json[\'img_content\'];
 
 $tema = $data[0][\'tema\'];

    //  jika cookie di set
 if(isset($_COOKIE[\'kode\'])){
     $cookie = $_COOKIE[\'kode\'];

     if(isset($_GET[\'kepada\']) && isset($_GET[\'kode\'])){
        $kepada = $_GET[\'kepada\'];
        $kode = $_GET[\'kode\'];
        
        $tamu = data("SELECT * FROM $user WHERE nama = \'$kepada\' AND kode = \'$kode\'");
        if(empty($tamu)){
           $tamu = \'\';
        }else{
            
            if($cookie == $tamu[0][\'kode\']){
                $tamu = \'\';
            }else{
                $tamu = $tamu[0];
                if(empty($tamu[\'status\'])){
                    $query = "UPDATE $user SET
                    status = \'read\'
                    WHERE kode = \'$kode\'
                ";
                    mysqli_query($conn,$query);
               }
            }
        }

    }

}
    // jika tidak di set cookie
if(!isset($_COOKIE[\'kode\'])){
    if(isset($_GET[\'kepada\']) && isset($_GET[\'kode\'])){
       $kepada = $_GET[\'kepada\'];
       $kode = $_GET[\'kode\'];
       
       $tamu = data("SELECT * FROM $user WHERE nama = \'$kepada\' AND kode = \'$kode\'");
       if(empty($tamu)){
          $tamu = \'\';
       }else{
               $tamu = $tamu[0];
               if(empty($tamu[\'status\'])){
                $query = "UPDATE $user SET
                status = \'read\'
                WHERE kode = \'$kode\'
            ";
                mysqli_query($conn,$query);
           }
       }

   }

}

    //jika switch_strict on
if($json[\'switch_strict\'] == \'on\'){
    if(empty($tamu)){
        header(\'Location: ../../error\');
        die;
    }
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
    <link rel="icon" type="image/png" sizes="16x16" href="../../global/assets/img/favicon/16x16.ico">
    <link rel="icon" type="image/png" sizes="24x24" href="../../global/assets/img/favicon/24x24.ico">
    <link rel="icon" type="image/png" sizes="32x32" href="../../global/assets/img/favicon/32x32.ico">
    <link rel="icon" type="image/png" sizes="48x48" href="../../global/assets/img/favicon/48x48.ico">
    <link rel="apple-touch-icon" sizes="64x64" href="../../global/assets/img/favicon/64x64.ico">
    <link rel="apple-touch-icon" sizes="96x96" href="../../global/assets/img/favicon/96x96.ico">
    <link rel="apple-touch-icon" sizes="128x128" href="../../global/assets/img/favicon/128x128.ico">
    <link rel="apple-touch-icon" sizes="192x192" href="../../global/assets/img/favicon/192x192.ico">

</head>
<body style="margin: 0; padding:0; height: 100vh; position: relative; overflow: hidden;">
<?php if(empty($tamu)) :?>
    <?php if(isset($_GET[\'to\']) && !empty($_GET[\'to\'])) :?>
        <iframe style="position: fixed; bottom: 0; height: 100vh; width: 100%;" src="../../theme/<?= $tema; ?>/direct.php?user=<?= $user; ?>&to=<?= urlencode($_GET[\'to\']); ?>" frameborder="0"></iframe>
    <?php endif; ?>
    <?php if(!isset($_GET[\'to\']) || empty($_GET[\'to\'])) :?>
        <iframe style="position: fixed; bottom: 0; height: 100vh; width: 100%;" src="../../theme/<?= $tema; ?>/direct.php?user=<?= $user; ?>" frameborder="0"></iframe>
    <?php endif; ?>
<?php endif;?>
<?php if(!empty($tamu)) :?>    
    <iframe style="position: fixed; bottom: 0; height: 100vh; width: 100%;" src="../../theme/<?= $tema; ?>/direct.php?user=<?= $user; ?>&kepada=<?= urlencode($tamu[\'nama\']); ?>&kode=<?= $tamu[\'kode\']; ?>" frameborder="0"></iframe>
<?php endif;?>
</body>
</html>


';

