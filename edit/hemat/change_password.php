<?php 

if(empty($_POST)){

    header('Location: ../../error');
    die;
}
require_once '../../conn.php';
require_once '../../function.php';
header('Content-type: application/json');


if(empty($_POST['verify'])){
        $old_username = urldecode($_POST['username']);
        $old_password = urldecode($_POST['password']);

        if(!empty(data("SELECT * FROM aa_customer where cookie = '$old_username'")[0])){
            $cek_password = data("SELECT * FROM aa_customer where cookie = '$old_username'")[0]['pwd'];
                if(password_verify($old_password,$cek_password)){
                    // echo json_encode('password ok');
                    echo 'password ok';
                }else{
                    // echo json_encode('password fail');
                    echo 'password fail';
                }
            }else{
                echo json_encode('username fail');
                die;
            }
    }else{
        $user = $_POST['user'];
        $verify = $_POST['verify'];
        if(!empty(data("SELECT * FROM aa_customer where cookie = '$user'")[0])){
            $cek_password = data("SELECT * FROM aa_customer where cookie = '$user'")[0]['pwd'];
        }
        if(password_verify($verify,$cek_password)){
            echo 'password sama';
            die;
        }

        $new_password = password_hash($verify, PASSWORD_DEFAULT);
        
        $query = "UPDATE aa_customer SET
                        pwd = '$new_password',
                        pwdkey = '$verify' 
                WHERE cookie = '$user' ";
        mysqli_query($conn, $query);
        if(mysqli_affected_rows($conn) > 0){
            echo 'sukses';
        }else {
            echo 'gagal';
        }

    }