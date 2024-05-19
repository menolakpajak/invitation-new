<?php 
session_start();
require_once ('../conn.php');


$admin = $_POST['admin'];
$data = data("SELECT * FROM aa_customer WHERE cookie = '$admin'");
if(empty($data[0])){
    die('FAILED : USER NOT FOUND !');
}
$data = $data[0];

// fungsi login
if(isset($_POST['login'])){
    $token = $_POST['digit'];
    if($token !== $data['token']){
        if(isset($_COOKIE['reg'])){
            setcookie('reg', $data['cookie'], time() - 3000, '/');
        }
        if(isset($_SESSION['token'])){
            unset($_SESSION['token']);
        }
        die('FAILED : you enter wrong TOKEN !');
    }
    setcookie('reg', $data['cookie'], time() + (3600 * 24), '/');
    $_SESSION['token'] = $token;
    die('ok');
}

// mulai manipulasi data
if(isset($_POST['key'])){
    $kode = $_POST['key'];
    // jika tamu tidak terdftar
    if(isset($_POST['input'])){
        $tamu = data("SELECT * FROM $admin WHERE kode = '$kode' ");
        if(!empty($tamu)){
            die('FAIL : Tamu Sudah TerRegristasi !');
        }
        $nama = htmlspecialchars($_POST['nama']);

        $query = "INSERT INTO $admin (kode,dateAdd,dateReg,nama,regStatus)
                    VALUES 
                    ('$kode',
                    '$datetime',
                    '$datetime', 
                    '$nama',
                    'registered')";
        mysqli_query($conn, $query);
        $result = mysqli_affected_rows($conn);
        if ($result > 0) {
            echo 'ok';
        } else {
            echo mysqli_error($conn);
        }
    die;
    }

    $tamu = data("SELECT * FROM $admin WHERE kode = '$kode' ");
    if(empty($tamu)){
        die('kosong');
    }
    $tamu = $tamu[0];

    if($tamu['regStatus'] == 'registered'){
        $tamu['wa'] = substr_replace($tamu['wa'], 'xxxx',-4);
        echo json_encode($tamu,JSON_PRETTY_PRINT);
        die;
    }

    $query = "UPDATE $admin SET 
                dateReg = '$datetime',
                regStatus = 'registered'
            WHERE kode = '$kode' ";
        mysqli_query($conn, $query);
        $result = mysqli_affected_rows($conn);
        if ($result > 0) {
            die('ok');
        } else {
            die('fail');
        }
}

?>