
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Database Install</title>
</head>
<body style="background-color: #d9d0cf;">
    <h1 style="text-align:center;margin: 30px auto 30px auto;">
    Installation Status
    </h1>
    <div style="max-width:800px;display:flex;flex-direction:column; margin: 30px auto 30px auto;">
        <div style="background-color:aqua; height:30px;position:relative;">
        <strong style="position: absolute; right:12px; height:30px; margin-right:10px;line-height:30px;">_</strong>
        <a href="../" style="color:black; text-decoration:none; position: absolute; right:0; height:30px; margin-right:10px;line-height:30px;">X</a>
        </div>
        <div style="background-color:black;color:white;padding:20px;">

        <?php 
require_once '../conn.php';
require_once 'install-data.php';

function data($info)
{
    global $conn;
    $result = mysqli_query($conn, $info);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    };
    return $rows;
};

// master info
$m_akses = 'master';
$m_username = 'sangut';
$m_pwd = 'kmzwa8awaa';
$versi = '1.1.4';
$m_pwd = password_hash($m_pwd,PASSWORD_DEFAULT);

// costumer info
$nama = 'sample data';
$username = 'sample@ada-undangan.online';
$table = 'sample';
$pwd = 'sample';
$pwd_key = $pwd;
$tema = 'greenLeave';
$paket = 'basic';
$token = "1234567890";
$token = substr(str_shuffle($token), 0, 6);
$str = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPRSTUVWXYZ";
$cookie =  time(). substr(str_shuffle($str), 0, 6);
$dev = 'master';


if(!$connFirst){
    die('Not Connected to server/user and password false');
}
if($connFirst){
    $query = "CREATE DATABASE IF NOT EXISTS $database";
    mysqli_query($connFirst,$query);
}


// membuat koneksi ke database
$conn = mysqli_connect($server, $userServer, $serverPwd, $database);

// cek table aa_admin
$query = "SHOW TABLES LIKE 'aa_admin' ";
mysqli_query($conn,$query);
    if(mysqli_affected_rows($conn) > 0) {
        echo "✘✘✘ Tabel 'aa_admin' exists";
        echo '<br>';
    }else{
        $createTable = "CREATE TABLE aa_admin (
            id int(11) AUTO_INCREMENT PRIMARY KEY,
            akses varchar(20) NOT NULL,
            username varchar(50) NOT NULL UNIQUE,
            pwd varchar(255) NOT NULL,
            versi varchar(10) NULL
          ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;";
        if(mysqli_query($conn,$createTable)){
            echo "✔✔✔ Table 'aa_admin' created Success !";
            echo '<br>';
        }else{
            echo 'ERROR : ';
            echo '<br>';
            echo '   ↳'.mysqli_error($conn);
            echo '<br>';
        }
    }

    // memasukan default admin
    $query = "INSERT INTO aa_admin (akses,username,pwd,versi)
    VALUES 
    ('$m_akses',
    '$m_username',
    '$m_pwd',
    '$versi')";
mysqli_query($conn, $query);
$result = mysqli_affected_rows($conn);
if ($result > 0) {
echo "✔✔✔ Success to insert data '$m_username' to => 'aa_admin'";
echo '<br>';
} else {
echo "✘✘✘ Tabel data '$m_username' exists ";
echo '<br>';
echo '   ↳'.mysqli_error($conn);
echo '<br>';
}

// cek table aacustomer untuk memuat akses admin
$query = "SHOW TABLES LIKE 'aa_customer' ";
mysqli_query($conn,$query);
    if(mysqli_affected_rows($conn) > 0) {
        echo "✘✘✘ Tabel 'aa_customer' exists";
        echo '<br>';
    }else{
        $createTable = "CREATE TABLE aa_customer (
            id int(11) AUTO_INCREMENT PRIMARY KEY,
            date datetime NOT NULL,
            nama varchar(30) NOT NULL,
            username varchar(50) NOT NULL UNIQUE,
            pwd varchar(255) NOT NULL,
            pwdkey varchar(255) NOT NULL,
            folder_name varchar(100) NULL UNIQUE,
            domain varchar(255) NULL,
            no_hp varchar(15) NULL,
            kota varchar(20) NULL,
            data_use json NULL,
            data_reset json NULL,
            paket varchar(30) NULL,
            tema varchar(30) NULL,
            token int(6) NOT NULL,
            cookie varchar(20) NOT NULL UNIQUE,
            status varchar(10) NULL,
            paid int(10) NULL,
            lang varchar(5) NULL,
            dev varchar(15) NULL,
            versi int(6) NULL
          ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;";
        if(mysqli_query($conn,$createTable)){
            echo "✔✔✔ Table 'aa_customer' created Success !";
            echo '<br>';
        }else{
            echo 'ERROR : ';
            echo '<br>';
            echo '   ↳'. mysqli_error($conn);
            echo '<br>';
            die;
        }
    }
    

// membuat table sesua nama customer
$query = "SHOW TABLES LIKE '$cookie' ";
mysqli_query($conn,$query);
    if(mysqli_affected_rows($conn) > 0) {
        echo "✘✘✘ Table '$table' exists";
        echo '<br>';
    }
    else {
$createTable = "CREATE TABLE $cookie (
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
if(mysqli_query($conn,$createTable)){
    echo "✔✔✔ Table '$table' add Success !";
    echo '<br>';

    // hashing password for _customer
    $pwd = password_hash($pwd,PASSWORD_DEFAULT);
    $json = mysqli_real_escape_string($conn,$json);
    // random token for registration
    $query = "INSERT INTO aa_customer (date,nama,username,no_hp,kota,folder_name,pwd,pwdkey,data_use,data_reset,tema,paket,token,cookie,status,versi,dev)
                    VALUES 
                    ('$datetime',
                    '$nama',
                    '$username',
                    '62817870770',
                    'denpasar',
                    '$table',
                    '$pwd',
                    '$pwd_key',
                    '$json',
                    '$json',
                    '$tema',
                    '$paket',
                    '$token',
                    '$cookie',
                    'active',
                    0,
                    '$dev')";
        mysqli_query($conn, $query);
        $result = mysqli_affected_rows($conn);
        if ($result > 0) {
            echo "✔✔✔ Success to insert data '$table' to => aa_customer";
            echo '<br>';
        } else {
            echo "✘✘✘ Failed to insert data '$table' to => aa_customer";
            echo '<br>';
            echo '   ↳'.mysqli_error($conn);
            echo '<br>';
        }
}else{
    echo '✘✘✘ ERROR : ';
    echo '<br>';
    mysqli_error($conn);
}

    }

$data = data("SELECT * FROM aa_customer WHERE username = '$username'");
if(!empty($data)){
    $cookie = $data[0]['cookie'];
}

require_once 'txt.php';
    if (!file_exists("../dari/$table")) {
        mkdir("../dari/$table",0777,true);
        mkdir("../dari/$table/song",0777,true);
        mkdir("../dari/$table/imgs/couple",0777,true);
        mkdir("../dari/$table/imgs/cover",0777,true);
        mkdir("../dari/$table/imgs/quote",0777,true);
        mkdir("../dari/$table/imgs/galery",0777,true);
        mkdir("../dari/$table/imgs/galery2",0777,true);
        $index = fopen("../dari/$table/index.php",'w');
        fwrite($index,$txt);
        fclose($index);
        echo "✔✔✔ Success make DIR '$table' to => dari/$table";
            echo '<br>';
    }else{
        echo "✘✘✘ DIR '$table' exists !";
        echo '<br>';
    }

?>

        </div>
    </div>
</body>
</html>


