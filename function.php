<?php

require_once __DIR__.'/conn.php';

// FUNGSI AMBIL DATA......>>>


        // resize image
function resize_image($file,$max_resolution){
    if(file_exists($file)){
     $original_image = imagecreatefromjpeg($file);
    //  resolution
        $original_width = imagesx($original_image);
        $original_height = imagesy($original_image);
    // cek width
        $rasio = $max_resolution / $original_width;
        $new_width = $max_resolution;
        $new_height = $original_height * $rasio;
    // cek height
        if($new_height > $max_resolution){
            $rasio = $max_resolution / $original_height;
            $new_height = $max_resolution;
            $new_width = $original_width * $rasio;
        }
        if($original_image){
            $new_image = imagecreatetruecolor($new_width,$new_height);
            imagecopyresampled($new_image,$original_image,0,0,0,0,$new_width,$new_height,$original_width,$original_height);
            imagejpeg($new_image,$file,90);
        }
    }
}

        // input untuk membuat form baru untuk customer
function inputForm()
{
    global $conn;
    global $datetime;
    global $pwd_default;

    $str = "abcdefghijklmnopqrstuvwxyz1234567890";
    $cookie = substr(str_shuffle($str), 0, 20);
    $pwd = password_hash($pwd_default,PASSWORD_DEFAULT);
    $nama = substr(str_shuffle($str), 0, 8);
    $token = "1234567890";
    $token = substr(str_shuffle($token), 0, 6);
    
    $cek = data("SELECT * FROM aa_customer WHERE nama = '$nama' ");
    if (!empty($cek)) {
        return 'form gagal';
        
    }
        $query = "INSERT INTO aa_customer (nama,date,username,pwd,token,cookie,status)
                    VALUES 
                    ('$nama',
                    '$datetime',
                    '$nama',
                    '$pwd',
                    '$token',
                    '$cookie',
                    'queue')";
        mysqli_query($conn, $query);
        $result = mysqli_affected_rows($conn);
        $reason = mysqli_error($conn);
        if ($result > 0) {
            return 'form sukses';
        } else {
            return 'form gagal';
        }
    
    };



// untuk proses input form/
function complateForm($input){
    global $conn;
    global $datetime;
    global $tema_list;
    global $paket_list;
    global $json;
    global $data_kosong;
    $kode = $input['kode'];
    $data = data("SELECT * FROM aa_customer WHERE cookie = '$kode' AND status = 'queue'");
    

// VALIDASI >>>>>>>>>>>>>>>>>>>>>>>>>
    // kode
    if(empty($data)){
        return 'kirim user fail';
        die;
    }
    // nama
    if(empty($input['nama'])){
        return 'kirim nama fail';
        die;
    }
    if (strlen($input['nama']) > 30){
        return 'kirim nama fail';
        die;
    }
    // username / email
    if(empty($input['username'])){
        return 'kirim email fail';
        die;
    }
    $username = $input['username'];
    $cek = data("SELECT * FROM aa_customer WHERE username = '$username' ");
    if (!empty($cek)){
        return 'kirim email fail';
        die;
    }
    if (!filter_var($input['username'], FILTER_VALIDATE_EMAIL) || strlen($input['username']) > 50) {
        return 'kirim email fail';
        die;
      }
    // no wa
    if(empty($input['no_wa'])){
        return 'kirim nomer fail';
        die;
    }
    if (!is_numeric($input['no_wa']) ||
         strlen($input['no_wa']) > 15 ||
         strlen($input['no_wa']) < 8 )  {
        return 'kirim nomer fail';
        die;
    }
    if (substr($input['no_wa'], 0, 1) == 0){
        $input['no_wa'] = '62'.ltrim($input['no_wa'], '0');
    }
    // kota
    if(empty($input['kota'])){
        return 'kirim kota fail';
        die;
    }
    if (strlen($input['kota']) > 20){
        return 'kirim kota fail';
        die;
    }
    
      // paket
    if(empty($input['paket'])){
        return 'kirim paket fail';
        die;
    } 
    $match = 0;
    foreach($paket_list as $paket){
        if($input['paket'] == $paket['name']){
            $match = 1;
            break;
        }
    }
    if($match == 0){
        return 'kirim paket fail';
        die;
    }

    // tema 
    if(!isset($input['tema'])){
        return 'kirim tema fail';
        die;
    }
    if(empty($input['tema'])){
        return 'kirim tema fail';
        die;
    }

    if($input['paket'] == 'hemat' || $input['paket'] == 'basic'){
        $tema_type = 'basic';
    }
    if($input['paket'] == 'pro' || $input['paket'] == 'advance'){
        $tema_type = 'premium';
    }

    $match = 0;
    if($tema_type == 'basic'){
        foreach($tema_list as $tema){
            if($input['tema'] == $tema['name'] && $tema['type'] == $tema_type){
                 $match = 1;
                 break;
            }    
        }
    }
    if($tema_type == 'premium'){
        foreach($tema_list as $tema){
            if($input['tema'] == $tema['name']){
                 $match = 1;
                 break;
            }    
        }
    }

    if($match == 0){
        return 'kirim tema fail';
        die;
    }
    
    // link
    if(empty($input['link'])){
        return 'kirim link fail';
        die;
    }
    $link = $input['link'];
    $cek = data("SELECT * FROM aa_customer WHERE folder_name = '$link' ");
    if (!empty($cek)){
        return 'kirim link fail';
        die;
    }
    if((preg_match('/[\s\'^£$%&*()}{@#~?><>,.!|=_+¬]/', $input['link']))){
        return 'kirim link fail';
        die;
    }

    include_once __DIR__.'/theme/'.$input['tema'].'/preview/default.php';
// >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
    $nama = htmlspecialchars($input['nama']);
    $username = htmlspecialchars($input['username']);
    $no_wa = htmlspecialchars($input['no_wa']);
    $kota = htmlspecialchars($input['kota']);
    $paket = htmlspecialchars($input['paket']);
    $tema = htmlspecialchars($input['tema']);
    $link = htmlspecialchars($input['link']);
    $def = json_encode($default,JSON_PRETTY_PRINT);
    $json = mysqli_real_escape_string($conn,$def);
    $json_default = $default;
    $json_default = $data_kosong[$input['paket']];
    $json_default['layout'] = $default['layout'];
    $json_default['galery_path'] = "../../dari/$link/imgs/galery/";
    $json_default['galery_path2'] = "../../dari/$link/imgs/galery2/";
    $json_kosong = json_encode($json_default,JSON_PRETTY_PRINT);
    $json_kosong = mysqli_real_escape_string($conn,$json_kosong);

    $query = "UPDATE aa_customer SET 
                date = '$datetime',
                nama = '$nama',
                username = '$username',
                no_hp = '$no_wa',
                kota = '$kota',
                tema = '$tema',
                data_use = '$json_kosong',
                data_reset = '$json',
                paket = '$paket',
                folder_name = '$link',
                status = 'pending',
                versi = 1
            WHERE cookie = '$kode' ";
        mysqli_query($conn, $query);
        $result = mysqli_affected_rows($conn);
        if ($result == 0) {
            return 'fail';
            die;
        }
        $createTable = "CREATE TABLE $kode (
            id int(11) AUTO_INCREMENT PRIMARY KEY,
            kode varchar(20) NOT NULL UNIQUE,
            dateAdd datetime NOT NULL,
            dateComment datetime NULL,
            dateReg datetime NULL,
            nama varchar(30) NOT NULL,
            wa varchar(20) NULL,
            hadir varchar(20) NULL,
            comment text NULL,
            status varchar(10) NULL,
            regStatus varchar(10) NULL
          ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;";
        if(!mysqli_query($conn,$createTable)){
            return 'fail';
            die;
        }
                $txt = "<?php header('Location: ../../proses/') ?>";
                    if (!file_exists("../dari/$link")) {
                        mkdir("../dari/$link",0777,true);
                        mkdir("../dari/$link/song",0777,true);
                        mkdir("../dari/$link/imgs/couple",0777,true);
                        mkdir("../dari/$link/imgs/cover",0777,true);
                        mkdir("../dari/$link/imgs/quote",0777,true);
                        mkdir("../dari/$link/imgs/galery",0777,true);
                        mkdir("../dari/$link/imgs/galery2",0777,true);
                        $index = fopen("../dari/$link/index.php",'w');
                        fwrite($index,$txt);
                        fclose($index);
                    }
    $_SESSION['preview'] = true;
    return  'kirim form sukses';
    
}


//proses menambah tamu baru
function tamuBaru ($input){
    global $conn;
    global $datetime;

    $nama = htmlspecialchars($input['nama']);
    $admin = $input['admin'];
    $kode = $input['kode'];

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
            echo 'sukses';
        } else {
            echo 'fail';
        }

}
//proses untuk update tamu
function updateTamu($admin,$key){
    global $conn;
    global $datetime;

    $query = "UPDATE $admin SET 
                dateReg = '$datetime',
                regStatus = 'registered'
            WHERE kode = '$key' ";
        mysqli_query($conn, $query);
        $result = mysqli_affected_rows($conn);
        if ($result > 0) {
            return 'sukses';
        } else {
            return 'add fail';
        }   
}

//proses login pada admin
function admin_login($input){
    global $conn;
    global $datetime;

    $username = $input['username'];
    $pwd = $input['password'];

    $user = data("SELECT * FROM aa_customer WHERE username = '$username'");
    if(empty($user)){
        return 'Username/email tidak terdaftar !';
    }
       
    if(!password_verify($pwd,$user[0]['pwd'])){
        return 'Password tidak cocok !'; 
    }
    $_SESSION['login'] = true;
    $_SESSION['user'] = $user[0]['cookie'];
    $_SESSION['admin'] = true;
    header("Location: ../");
    exit;
}


//proses memfalidasi data di database costumer['data_use']
function insertEmpty ($json,$default,$galery_path,$galery_path2){

    // cover
    (!isset($json['title'])) ? $json['title'] = '' : '';
    (!isset($json['title_name'])) ? $json['title_name'] = '' : '';
    (!isset($json['cover_img'])) ? $json['cover_img'] = '' : '';
    
    // quotes
    (!isset($json['switch_quote'])) ? $json['switch_quote'] = 'off' : '';
    (!isset($json['quote_img'])) ? $json['quote_img'] = $default['quote_img'] : '';
    (!isset($json['quote_isi'])) ? $json['quote_isi'] = '' : '';
    (!isset($json['quote_arti'])) ? $json['quote_arti'] = '' : '';
    (!isset($json['quote_kutip'])) ? $json['quote_kutip'] = '' : '';
    
    // video
    (!isset($json['switch_video'])) ? $json['switch_video'] = 'off' : '';
    (!isset($json['vid_src'])) ? $json['vid_src'] = '' : '';
    (!isset($json['vid_msg'])) ? $json['vid_msg'] = '' : '';
    (!isset($json['vid_kutip'])) ? $json['vid_kutip'] = '' : '';
    
    
    // couple
    (!isset($json['switch_couple'])) ? $json['switch_couple'] = '' : '';
    (!isset($json['boy'])) ? $json['boy'] = '' : '';
    (!isset($json['boy_img'])) ? $json['boy_img'] = '' : '';
    (!isset($json['boy_msg'])) ? $json['boy_msg'] = '' : '';
    (!isset($json['girl'])) ? $json['girl'] = '' : '';
    (!isset($json['girl_img'])) ? $json['girl_img'] = '' : '';
    (!isset($json['girl_msg'])) ? $json['girl_msg'] = '' : '';
    
    // acara
                //Akad Nikah
    (!isset($json['acara_title'])) ? $json['acara_title'] = '' : '';
    (!isset($json['acara_date'])) ? $json['acara_date'] = '' : '';
    (!isset($json['acara_time'])) ? $json['acara_time'] = '' : '';
    (!isset($json['acara_alamat'])) ? $json['acara_alamat'] = '' : '';
    
        //Resepsi
    (!isset($json['switch_acara'])) ? $json['switch_acara'] = 'off' : '';
    (!isset($json['acara_title2'])) ? $json['acara_title2'] = '' : '';
    (!isset($json['acara_date2'])) ? $json['acara_date2'] = '' : '';
    (!isset($json['acara_time2'])) ? $json['acara_time2'] = '' : '';
    (!isset($json['acara_alamat2'])) ? $json['acara_alamat2'] = '' : '';
    
        //Coundown Acara
    (!isset($json['acara_cd'])) ? $json['acara_cd'] = '' : '';
    
    // map
    (!isset($json['switch_map'])) ? $json['switch_map'] = 'off' : '';
    (!isset($json['map_view'])) ? $json['map_view'] = '' : '';
    (!isset($json['map_desc'])) ? $json['map_desc'] = '' : '';
    (!isset($json['map_loc'])) ? $json['map_loc'] = '' : '';
    
    // prokes
    (!isset($json['switch_prokes'])) ? $json['switch_prokes'] = 'off' : '';
    (!isset($json['prokes_msg'])) ? $json['prokes_msg'] = '' : '';
    
    // RSVP
    (!isset($json['switch_rsvp'])) ? $json['switch_rsvp'] = 'off' : '';
    (!isset($json['rsvp_msg'])) ? $json['rsvp_msg'] = '' : '';
    
    
    // Lokasi path galery
    (!isset($json['switch_galery'])) ? $json['switch_galery'] = 'off' : '';
    (!isset($json['galery_path'])) ? $json['galery_path'] = $galery_path : '';
    (!isset($json['galery_path2'])) ? $json['galery_path2'] = $galery_path2 : '';
    
    // gift
    (!isset($json['switch_rek'])) ? $json['switch_rek'] = 'off' : '';
    (!isset($json['gift_barcode'])) ? $json['gift_barcode'] = $default['gift_barcode'] : '';
    (!isset($json['gift_img'])) ? $json['gift_img'] = $default['gift_img'] : '';
    
    //TRF bank
    (!isset($json['bank_rek'])) ? $json['bank_rek'] = '' : '';
    (!isset($json['bank_an'])) ? $json['bank_an'] = '' : '';
    
    //GIFT send
    (!isset($json['gift_title'])) ? $json['gift_title'] = '' : '';
    (!isset($json['gift_alamat'])) ? $json['gift_alamat'] = '' : '';
    
    // thanks
    (!isset($json['thx_txt'])) ? $json['thx_txt'] = '' : '';
    
    $send = json_encode($json,JSON_PRETTY_PRINT);
    return $send;
    }