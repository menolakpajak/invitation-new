<?php 



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/sweetalert2.min.css">
</head>
<body>
    

<script src="js/sweetalert2.min.js"></script>
<script>
    fetch("index.php").then(r => r.text()).then(res => document.body.innerHTML = res).catch(console.error)
</script>


</body>

</html>