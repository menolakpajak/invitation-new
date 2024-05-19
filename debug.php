<?php 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Debuging access</title>
</head>
<body>
<p id="text"></p>
<br>
<hr>
<div id="index-of">

</div>
<script>
function cekWeb(input){
    return navigator.userAgent.indexOf(input); 
}
var cek = navigator.userAgent;
var output = document.getElementById('text')
var ind = document.getElementById('index-of')

output.innerText = cek;
var opera = 'opera = '+cekWeb('Opera')
var apl = 'apple = '+cekWeb('Apple')
var saf = 'safari = '+cekWeb('Safari')

ind.innerHTML += '<span>Apple = '+cekWeb('Apple')+'</span><br>';
ind.innerHTML += '<span>Android = '+cekWeb('Android')+'</span><br>';
ind.innerHTML += '<span>Linux = '+cekWeb('Linux')+'</span><br>';
ind.innerHTML += '<span>Windows = '+cekWeb('Windows')+'</span><br>';
ind.innerHTML += '<span>Chrome = '+cekWeb('Chrome')+'</span><br>';
ind.innerHTML += '<span>Safari = '+cekWeb('Safari')+'</span><br>';
ind.innerHTML += '<span>OPR = '+cekWeb('OPR')+'</span><br>';
ind.innerHTML += '<span>Edg = '+cekWeb('Edg')+'</span><br>';
ind.innerHTML += '<span>UCBrowser = '+cekWeb('UCBrowser')+'</span><br>';
ind.innerHTML += '<span>MiuiBrowser = '+cekWeb('MiuiBrowser')+'</span><br>';
ind.innerHTML += '<span>MSIE = '+cekWeb('MSIE')+'</span><br>';
ind.innerHTML += '<span>UCBrowser = '+cekWeb('UCBrowser')+'</span><br>'; 

</script>    


</body>
</html>