<?php
require_once '../akses.php';
require_once '../function.php';

// fungsi hapus untuk auto input di COSTUMER INDEX.php
if (isset($_POST['deleteformid'])) {
    $id = $_POST['deleteformid'];
    $data = data("SELECT * FROM aa_customer WHERE cookie = '$id' ");
    if (empty($data)) {
        die('fail');
    }

    // delete customer data
    $query = "DELETE FROM aa_customer WHERE cookie = '$id' ";
    if (mysqli_query($conn, $query)) {
        die('ok');
    }

    die('fail');
}


// fungsi AKTIVASI COSTUMER INDEX.php
if (isset($_POST['activeid'])) {
    $id = $_POST['activeid'];
    $data = data("SELECT * FROM aa_customer WHERE cookie = '$id' ");
    if (empty($data)) {
        die('fail');
    }
    $data = $data[0];
    include_once 'active.php';

    if (file_exists("../../dari/$folder/index.php")) {
        $index = fopen("../../dari/$folder/index.php", 'w');
        fwrite($index, $txt);
        fclose($index);
    }
    $versi = $data['versi'] + 1;
    $query = "UPDATE aa_customer SET 
                    date = '$datetime',
                    versi = $versi,
                    status = 'active'
                WHERE cookie = '$id' ";
    mysqli_query($conn, $query);
    $result = mysqli_affected_rows($conn);
    if ($result > 0) {
        die('ok');
    } else {
        die('fail');
    }

}



// fungsi SUSPEND COSTUMER INDEX.php
if (isset($_POST['suspendid'])) {
    $id = $_POST['suspendid'];
    $data = data("SELECT * FROM aa_customer WHERE cookie = '$id' ");
    if (empty($data)) {
        die('fail');
    }
    $query = "UPDATE aa_customer SET
                status = 'suspend'
                    WHERE cookie = '$id' ";
    mysqli_query($conn, $query);
    $result = mysqli_affected_rows($conn);
    if ($result > 0) {
        die('ok');
    } else {
        die('fail');
    }

}

// fungsi UNSUSPEND COSTUMER INDEX.php
if (isset($_POST['unsuspendid'])) {
    $id = $_POST['unsuspendid'];
    $data = data("SELECT * FROM aa_customer WHERE cookie = '$id' ");
    if (empty($data)) {
        die('fail');
    }
    $data = $data[0];
    include_once 'active.php';

    if (file_exists("../../dari/$folder/index.php")) {
        $index = fopen("../../dari/$folder/index.php", 'w');
        fwrite($index, $txt);
        fclose($index);
    }
    $versi = $data['versi'] + 1;
    $query = "UPDATE aa_customer SET
                versi = $versi,
                status = 'active'
                    WHERE cookie = '$id' ";
    mysqli_query($conn, $query);
    $result = mysqli_affected_rows($conn);
    if ($result > 0) {
        die('ok');
    } else {
        die('fail');
    }

}


// fungsi hapus untuk auto input di COSTUMER INDEX.php
if (isset($_POST['deleteid'])) {
    $id = $_POST['deleteid'];
    $data = data("SELECT * FROM aa_customer WHERE cookie = '$id' ");
    if (empty($data)) {
        die('fail');
    }
    $data = $data[0];
    $kode = $data['cookie'];
    $table = $data['folder_name'];
    $path = "../../dari/$table";
    $delete = folderDelete($path);

    if ($delete == 'ok') {

        // delete table coment
        $query = "DROP TABLE $kode";
        if (mysqli_query($conn, $query)) {
            // delete customer data
            $query = "DELETE FROM aa_customer WHERE cookie = '$id' ";
            mysqli_query($conn, $query);
        }
        die('ok');
    } else {
        die('fail');
    }

}

// fungsi hapus untuk COSTUM input di COSTUMER INDEX.php
if (isset($_POST['costumid'])) {
    $id = $_POST['costumid'];
    $data = data("SELECT * FROM aa_customer WHERE cookie = '$id' ");
    if (empty($data)) {
        die('fail');
    }
    $data = $data[0];
    $kode = $data['cookie'];
    $table = $data['folder_name'];

    $delete = folderDelete($table);

    // delete table coment
    $query = "DROP TABLE $kode";
    if (mysqli_query($conn, $query)) {
        // delete customer data
        $query = "DELETE FROM aa_customer WHERE cookie = '$id' ";
        mysqli_query($conn, $query);
        die('ok');
    } else {
        die('fail');
    }
}




//menambah form baru -- COSTUMER/FORM.php
if (isset($_POST['formbaru'])) {
    $pwd = $_POST['formbaru'];
    die(inputForm($pwd));
}

// fungsi WRITE STYLE.css
if (isset($_POST['id']) && isset($_POST['style'])) {
    $id = $_POST['id'];
    $style = $_POST['style'];
    $data = data("SELECT * FROM aa_customer WHERE id = $id ");
    if (empty($data)) {
        die('fail');
    }
    $data = $data[0];
    $folder = $data['folder_name'];

    if (!isset($_POST['styleReset'])) {
        $file = fopen("../../dari/$folder/style.css", 'w');
        fwrite($file, $style);
        fclose($file);
    } else {
        if (file_exists("../../dari/$folder/style.css")) {
            unlink("../../dari/$folder/style.css");
        } else {
            echo 'tidak bisa';
            die;
        }
    }
    $versi = $data['versi'] + 1;
    $query = "UPDATE aa_customer SET 
                    versi = $versi
                WHERE id = $id ";
    mysqli_query($conn, $query);
    $result = mysqli_affected_rows($conn);
    if ($result > 0) {
        die('ok');
    } else {
        die('fail');
    }
}

// fungsi WRITE STRUKTUR.PHP
if (isset($_POST['id']) && isset($_POST['struktur'])) {
    $id = $_POST['id'];
    // $struktur = str_replace("?/textarea?", "</textarea>", $_POST['struktur']);
    $struktur = $_POST['struktur'];
    $data = data("SELECT * FROM aa_customer WHERE id = $id ");
    if (empty($data)) {
        die('fail');
    }
    $data = $data[0];
    $folder = $data['folder_name'];

    if (!isset($_POST['strukturReset'])) {
        $file = fopen("../../dari/$folder/struktur.php", 'w');
        fwrite($file, $struktur);
        fclose($file);
    } else {
        if (file_exists("../../dari/$folder/struktur.php")) {
            unlink("../../dari/$folder/struktur.php");
        } else {
            echo 'tidak bisa';
            die;
        }
    }
    $versi = $data['versi'] + 1;
    $query = "UPDATE aa_customer SET 
                    versi = $versi
                WHERE id = $id ";
    mysqli_query($conn, $query);
    $result = mysqli_affected_rows($conn);
    if ($result > 0) {
        die('ok');
    } else {
        die('fail');
    }
}

// fungsi WRITE DATA-USE.json
if (isset($_POST['id']) && isset($_POST['data-use'])) {
    $id = $_POST['id'];
    $info = $_POST['data-use'];
    $info = json_decode($info, true);
    if ($info === null && json_last_error() !== JSON_ERROR_NONE) {
        echo 'Format json salah';
        die;
    }

    $data = data("SELECT * FROM aa_customer WHERE id = $id ");
    if (empty($data)) {
        die('fail');
    }
    $data = $data[0];
    $versi = $data['versi'] + 1;
    $data_reset = $data['data_reset'];

    if (isset($_POST['data-use-reset'])) {
        $data_send = mysqli_real_escape_string($conn, $data_reset);
        $query = "UPDATE aa_customer SET
    data_use = '$data_send', 
    versi = $versi
    WHERE id = $id";
    } else {
        $json = json_encode($info, JSON_PRETTY_PRINT);
        $send = mysqli_real_escape_string($conn, $json);
        $query = "UPDATE aa_customer SET
                    data_use = '$send', 
                    versi = $versi
                WHERE id = $id ";
    }
    mysqli_query($conn, $query);
    $result = mysqli_affected_rows($conn);
    if ($result > 0) {
        die('ok');
    } else {
        echo mysqli_error($conn);
        die();
    }
}

// fungsi PAKET EDIT
if (isset($_POST['paket']) && isset($_POST['tema'])) {
    $id = $_POST['id'];
    $paket = $_POST['paket'];
    $tema = $_POST['tema'];
    $domain = $_POST['domain'];

    $data = data("SELECT * FROM aa_customer WHERE id = $id ");
    if (empty($data)) {
        die('fail');
    }
    $data = $data[0];
    // if($paket == $data['paket'] && $tema == $data['tema']){
    //     die('tidak bisa');
    // }
    $versi = $data['versi'] + 1;
    $info = $data['data_use'];
    $info = json_decode($info, true);
    if (!empty($_POST['custom'])) {
        $info['custom'] = $_POST['custom'];
        $json = json_encode($info, JSON_PRETTY_PRINT);
        $send = mysqli_real_escape_string($conn, $json);

        $query = "UPDATE aa_customer SET 
                    tema = '$tema',
                    paket = '$paket',
                    data_use = '$send',
                    domain = '$domain',
                    versi = $versi
                WHERE id = $id ";
    } else {
        $query = "UPDATE aa_customer SET 
                    tema = '$tema',
                    paket = '$paket',
                    domain = '$domain',
                    versi = $versi
                WHERE id = $id ";
    }

    mysqli_query($conn, $query);
    $result = mysqli_affected_rows($conn);
    if ($result > 0) {
        die('ok');
    } else {
        die('fail');
    }
}

// fungsi ACCESS DATA
if (
    isset($_POST['nama']) &&
    isset($_POST['noWa']) &&
    isset($_POST['kota']) &&
    isset($_POST['username']) &&
    isset($_POST['pwd']) &&
    isset($_POST['token']) &&
    isset($_POST['link'])
) {

    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $noWa = $_POST['noWa'];
    $kota = $_POST['kota'];
    $username = $_POST['username'];
    $pwdkey = $_POST['pwd'];
    $pwd = password_hash($pwdkey, PASSWORD_DEFAULT);
    $token = $_POST['token'];
    $link = $_POST['link'];

    if (substr($_POST['noWa'], 0, 1) == 0) {
        $noWa = '62' . ltrim($_POST['noWa'], '0');
    }

    $data = data("SELECT * FROM aa_customer WHERE id = $id ");
    if (empty($data)) {
        die('user tidak ada');
    }
    $data = $data[0];
    $versi = $data['versi'] + 1;
    $folder = $data['folder_name'];

    //cek username
    if ($username != $data['username']) {
        $cek = data("SELECT * FROM aa_customer WHERE username = '$username' ");
        if (!empty($cek)) {
            die('email sudah digunkan user lain');
        }

    }
    //cek link
    if ($link != $data['folder_name']) {
        $cek = data("SELECT * FROM aa_customer WHERE folder_name = '$link' ");
        if (!empty($cek)) {
            die('link sudah digunakan user lain');
        }

        if (file_exists("../../dari/$folder")) {
            rename("../../dari/$folder", "../../dari/$link");
        }
        $use = mysqli_real_escape_string($conn, str_replace($folder, $link, $data['data_use']));
        $reset = mysqli_real_escape_string($conn, str_replace($folder, $link, $data['data_reset']));
        $query = "UPDATE IGNORE aa_customer SET 
                    nama = '$nama',
                    username = '$username',
                    pwd = '$pwd',
                    pwdkey = '$pwdkey',
                    folder_name = '$link',
                    no_hp = '$noWa',
                    data_use = '$use',
                    data_reset = '$reset',
                    kota = '$kota',
                    token = $token,
                    versi = $versi
                WHERE id = $id";
    } else {
        $query = "UPDATE IGNORE aa_customer SET 
                    nama = '$nama',
                    username = '$username',
                    pwd = '$pwd',
                    pwdkey = '$pwdkey',
                    folder_name = '$link',
                    no_hp = '$noWa',
                    kota = '$kota',
                    token = $token,
                    versi = $versi
                WHERE id = $id";
    }

    mysqli_query($conn, $query);
    $result = mysqli_affected_rows($conn);
    if ($result > 0) {
        die('ok');
    } else {
        die(mysqli_error($conn));
    }
}