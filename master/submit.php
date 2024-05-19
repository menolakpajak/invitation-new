<?php 
require_once 'function.php';

if(isset($_POST['version'])){
    $post_versi = $_POST['version'];
    $query = "UPDATE aa_admin SET 
                    versi = '$post_versi'
                WHERE id = 1 ";
            mysqli_query($conn, $query);
            $result = mysqli_affected_rows($conn);
            if ($result == 0) {
                echo 'fail';
                die;
            }else{
                echo 'sukses';
            }
}else{
    echo 'fail';
}