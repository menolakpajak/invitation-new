<?php

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <div style="position:relative; padding:10px; border-radius:10px; display: flex; margin-left: auto; margin-right:auto;">
    <img id="qrcode" style="padding:10px; border-radius:10px; display: block; margin-left: auto; margin-right:auto;"></img>
    <img id="inerLogo" src="images/icon/76x76.ico" alt="icon" style="position:absolute; z-index:900;top:41%;left:42.5%" ;>
  </div>
</body>
<script src="js/qrCode.js"></script>
<script type="text/javascript">
  var qrcode = new QRious({
    element: document.getElementById("qrcode"),
    background: '#ffffff',
    backgroundAlpha: 1,
    foreground: '#000000',
    foregroundAlpha: 1,
    level: 'H',
    size: 300,
    value: 'https://preview.keenthemes.com/metronic/demo2/features/icons/svg.html'
  });
</script>

</html>