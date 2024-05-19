<?php 
session_start();
if(!isset($_SESSION['login'])){
  die(header('Location: ../login/'));
}

require_once '../../function.php';

        // ajax input data
if(isset($_POST['user']) && isset($_POST['nama']) && isset($_POST['wa'])){

    $user = $_POST['user'];
    $nama = $_POST['nama'];
    $wa = $_POST['wa'];
    
    if(!empty($wa)){
        if (substr($wa, 0, 1) == 0){
            $wa = '62'.ltrim($wa, '0');
        }    
    }
    
    $data = data("SELECT * FROM aa_customer WHERE cookie = '$user'");
    if(empty($data)){
        die('fail');
    }
    $data = $data[0];
    $tamu = $data['cookie'];
    $str = "abcdefghijklmnopqrstuvwxyz1234567890";
    $kode = substr(str_shuffle($str), 0, 20);
    
    $query = "INSERT INTO $tamu (kode,dateAdd,nama,wa)
                        VALUES 
                        ('$kode',
                        '$datetime', 
                        '$nama',
                        '$wa')";
            mysqli_query($conn, $query);
            $result = mysqli_affected_rows($conn);
            if ($result > 0) {
                echo 'ok';
            } else {
                echo 'fail';
            }
}
        // ajax edit data
if(isset($_POST['user']) && isset($_POST['kode']) && isset($_POST['editnama']) && isset($_POST['editwa'])){

    $user = $_POST['user'];
    $kode = $_POST['kode'];
    $nama = $_POST['editnama'];
    $wa = $_POST['editwa'];
    
    if(!empty($wa)){
        if (substr($wa, 0, 1) == 0){
            $wa = '62'.ltrim($wa, '0');
        }    
    }
    
    $data = data("SELECT * FROM aa_customer WHERE cookie = '$user'");
    if(empty($data)){
        die('fail');
    }
    $data = $data[0];
    $tamu = $data['cookie']; 
    $query = "UPDATE $tamu SET
                nama = '$nama',
                wa = '$wa'
                WHERE kode = '$kode'";
            mysqli_query($conn, $query);
            $result = mysqli_affected_rows($conn);
            if ($result > 0) {
                echo 'ok';
            } else {
                echo 'fail';
            }
}

// ajax hapus data
if(isset($_POST['hapususer']) && isset($_POST['hapuskode'])){
    $user = $_POST['hapususer'];
    $kode = $_POST['hapuskode'];
    $data = data("SELECT * FROM aa_customer WHERE cookie = '$user'");
    if(empty($data)){
        die('fail');
    }
        $tamu = $data[0]['cookie'];

            $query = "DELETE FROM $tamu WHERE kode = '$kode'";
                mysqli_query($conn, $query);
                $result = mysqli_affected_rows($conn);
                if ($result > 0) {
                    echo 'ok';
                } else {
                    echo 'fail';
                }

}

        // ajax edit komentar
        if(isset($_POST['user']) && isset($_POST['kode']) && isset($_POST['komen'])){

            $user = $_POST['user'];
            $kode = $_POST['kode'];
            // $comment = htmlspecialchars($_POST['komen']);
            $comment = htmlentities($_POST['komen'],ENT_QUOTES); 
            
            $data = data("SELECT * FROM aa_customer WHERE cookie = '$user'");
            if(empty($data)){
                die('data tidak ada');
            }
            $data = $data[0];
            $tamu = $data['cookie']; 
            $query = "UPDATE $user SET
                        comment = '$comment'
                        WHERE kode = '$kode'";
                    mysqli_query($conn, $query);
                    $result = mysqli_affected_rows($conn);
                    if ($result > 0) {
                        echo 'ok';
                    } else {
                        echo 'fail';
                    }
        }

        // delete komentar
        if(isset($_POST['hapusComment']) && isset($_POST['hapuskode'])){

            $user = $_POST['hapusComment'];
            $kode = $_POST['hapuskode'];
            // $comment = htmlspecialchars($_POST['komen']);
            $comment = ''; 
            
            $data = data("SELECT * FROM aa_customer WHERE cookie = '$user'");
            if(empty($data)){
                die('data tidak ada');
            }
            $data = $data[0];
            $tamu = $data['cookie']; 
            $query = "UPDATE $user SET
                        comment = '$comment'
                        WHERE kode = '$kode'";
                    mysqli_query($conn, $query);
                    $result = mysqli_affected_rows($conn);
                    if ($result > 0) {
                        echo 'ok';
                    } else {
                        echo 'fail';
                    }
        }

?>