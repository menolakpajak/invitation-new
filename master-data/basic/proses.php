<?php 
session_start();

$user = $_POST['user'];
$page = $_POST['page'];



require_once '../../conn.php';
require_once '../../function.php';

$data = data("SELECT * FROM aa_customer WHERE cookie = '$user'");
if(empty($data)){
    echo 'fail';
    die;
}

$data = $data[0];
require_once 'condition.php';
$data_use = $data['data_use'];
$data_reset = mysqli_real_escape_string($conn,$data['data_use']);
$data_use = json_decode($data_use,true);
$folder_name = $data['folder_name'];
$tema = $data['tema'];
$versi = $data['versi'];

// FINISH
if($page == 'finish'){
  if(!isset($finish)){
    header("Location: ./?user=$user");
    die;
  }

  $versi = $versi + 1;
  $query = "UPDATE aa_customer SET
                  status = 'complete',
                  data_reset = '$data_reset',
                  versi = $versi
                  WHERE cookie = '$user'
              ";
  mysqli_query($conn,$query);
  $result = mysqli_affected_rows($conn);
  if($result > 0){
    unset($_SESSION['preview']);
    setcookie('user', '', time() + (-9000), '/');
    echo 'ok';
  }else{
    echo 'fail';
  }
  die;
}


  // COVER
    if($page == 'cover'){
      $iframe = "../../theme/$tema/preview.php?user=$user&page=cover";
            // head
        $desc_content = 'Tanpa Mengurangi Rasa Hormat. Kami Bermaksud Mengundang Bapak/Ibu/Saudara/i, Pada Acara Pernikahan Putra &amp; Putri Kami';
        $img_content = "https://ada-undangan.online/theme/$tema/images/rsvp/img1.jpg";
            // PATH IMAGE COVER
        $cover_path = "../../dari/$folder_name/imgs/cover/";
        $cover_img = $cover_path.'cover.jpg';
        
                        // resize cover image
        if(isset($_FILES['cover_img']) && $_FILES['cover_img']['type'] == 'image/jpeg'){
            $file = $cover_img;
                    if($_FILES["cover_img"]['size'] > 300000){
                        move_uploaded_file($_FILES['cover_img']['tmp_name'],$file);
                    //  fungsi resize gambar argumen kanan untuk max resolution
                        resize_image($file,"1200");
                    }
                move_uploaded_file($_FILES['cover_img']['tmp_name'],$file);
        }
        // if(!file_exists($cover_img)){
        //   $tema = 'images/cover/cover.jpg';
        // }
        
            $data_use['title_head'] = ucwords($_POST['title_cover']);
            $data_use['title_content'] = ucfirst($_POST['cover_name']);
            $data_use['url_content'] = "https://ada-undangan.online/dari/$folder_name";
            $data_use['desc_content'] = $desc_content;
            $data_use['img_content'] = $img_content;
            $data_use['title'] = $_POST['title_cover'];
            $data_use['title_name'] = $_POST['cover_name'];
            $data_use['cover_img'] = $cover_img;

            $json = json_encode($data_use,JSON_PRETTY_PRINT);
            $send = mysqli_real_escape_string($conn,$json);
            $versi = $versi + 1;
                // input database
                    $query = "UPDATE aa_customer SET
                    data_use = '$send',
                    versi = $versi
                    WHERE cookie = '$user'
                ";
                mysqli_query($conn,$query);

$txt = <<<isiini
    <div style="padding:0;" class="card-body">
                        <div>
                        <h4 class="text-warning">
                        Preview
                        </h4>
                        </div>
                        <div id="preview" 
                        style="max-width:414px;
                        height: 800px; padding:0;">
                          <iframe 
                          height="800px"
                          style="width: 100%; height: 100%;border-radius:20px;"
                          src="$iframe"
                          scrolling="no"
                          frameborder="0">
                          </iframe>
                        </div>                                                         
                      </div> 
isiini;

echo $txt;

}

  // QR-CODE
  if($page == 'qrcode'){
    $iframe = "../../theme/$tema/preview.php?user=$user&page=video";
    $data_use['switch_barcode'] = $_POST['switch_barcode'];
    $data_use['switch_strict'] = $_POST['switch_strict'];
  
  if($data_use['switch_barcode'] == 'off'){
    $iframe = '../../error';
  }
  
    $json = json_encode($data_use,JSON_PRETTY_PRINT);
    $send = mysqli_real_escape_string($conn,$json);
  
        // input database
            $query = "UPDATE aa_customer SET
            data_use = '$send'
            WHERE cookie = '$user'
        ";
        mysqli_query($conn,$query);
  
  
  $txt = <<<isiini
      <div style="padding:0;" class="card-body">
                          <div>
                          <h4 class="text-warning">
                          Preview
                          </h4>
                          </div>
                          <div id="preview" style="max-width:414px;height: 800px; padding:0;">
                            <iframe 
                            height="800px"
                            style="width: 100%; height: 100%;border-radius:20px;"
                            src="$iframe"
                            scrolling="no"
                            frameborder="0">
                            </iframe>
                          </div>                                                         
                        </div>
  isiini;
  
  echo $txt;
  
  }

  // SONG
  if($page == 'song'){
    $iframe = "../../theme/$tema/preview.php?user=$user&page=song";

          // PATH IMAGE COVER
      $song_path = "../../dari/$folder_name/song/";
      $song = $song_path.'audio.mp3';
                      // move audio file
      if(isset($_FILES['song']) && $_FILES['song']['type'] == 'audio/mpeg'){
          move_uploaded_file($_FILES['song']['tmp_name'],$song);
      }
          
          $data_use['song'] = $song;

          $json = json_encode($data_use,JSON_PRETTY_PRINT);
          $send = mysqli_real_escape_string($conn,$json);
          $versi = $versi + 1;
              // input database
                  $query = "UPDATE aa_customer SET
                  data_use = '$send',
                  versi = $versi
                  WHERE cookie = '$user'
              ";
              mysqli_query($conn,$query);

$txt = <<<isiini
  <div style="padding:0;" class="card-body">
                      <div>
                      <h4 class="text-warning">
                      Preview
                      </h4>
                      </div>
                      <div id="preview" style="max-width:414px;height: 800px; padding:0;">
                        <iframe 
                        height="800px"
                        style="width: 100%; height: 100%;border-radius:20px;"
                        src="$iframe"
                        scrolling="no"
                        frameborder="0">
                        </iframe>
                      </div>                                                         
                    </div> 
isiini;

echo $txt;

}

  // QUOTE
if($page == 'quote'){
  $iframe = "../../theme/$tema/preview.php?user=$user&page=quote";
  // PATH IMAGE QUOTE
$quote_path = "../../dari/$folder_name/imgs/quote/";
$quote_img = $quote_path.'quote.jpg';

              // resize cover image
if(isset($_FILES['quote_img']) && $_FILES['quote_img']['type'] == 'image/jpeg'){
  $file = $quote_img;
          if($_FILES["quote_img"]['size'] > 300000){
              move_uploaded_file($_FILES['quote_img']['tmp_name'],$file);
          //  fungsi resize gambar argumen kanan untuk max resolution
              resize_image($file,"1200");
          }
      move_uploaded_file($_FILES['quote_img']['tmp_name'],$file);
}


  $data_use['switch_quote'] = $_POST['switch_quote'];
  $data_use['quote_isi'] = $_POST['quote_isi'];
  $data_use['quote_arti'] = $_POST['quote_arti'];
  $data_use['quote_kutip'] = $_POST['quote_kutip'];
  $data_use['quote_img'] = $quote_img;

if($data_use['switch_quote'] == 'off'){
  $iframe = '../../error';
  
}

  $json = json_encode($data_use,JSON_PRETTY_PRINT);
  $send = mysqli_real_escape_string($conn,$json);
  $versi = $versi + 1;
      // input database
          $query = "UPDATE aa_customer SET
          data_use = '$send',
          versi = $versi
          WHERE cookie = '$user'
      ";
      mysqli_query($conn,$query);


$txt = <<<isiini
    <div style="padding:0;" class="card-body">
                        <div>
                        <h4 class="text-warning">
                        Preview
                        </h4>
                        </div>
                        <div id="preview" style="max-width:414px;height: 800px; padding:0;">
                          <iframe 
                          height="800px"
                          style="width: 100%; height: 100%;border-radius:20px;"
                          src="$iframe"
                          scrolling="no"
                          frameborder="0">
                          </iframe>
                        </div>                                                         
                      </div>
isiini;

echo $txt;

}

  // VIDEO
if($page == 'video'){
  $iframe = "../../theme/$tema/preview.php?user=$user&page=video";
  $data_use['switch_video'] = $_POST['switch_video'];
  $data_use['vid_src'] = $_POST['vid_src'];
  $data_use['vid_msg'] = $_POST['vid_msg'];
  $data_use['vid_kutip'] = $_POST['vid_kutip'];

if($data_use['switch_video'] == 'off'){
  $iframe = '../../error';
}

  $json = json_encode($data_use,JSON_PRETTY_PRINT);
  $send = mysqli_real_escape_string($conn,$json);

      // input database
          $query = "UPDATE aa_customer SET
          data_use = '$send'
          WHERE cookie = '$user'
      ";
      mysqli_query($conn,$query);


$txt = <<<isiini
    <div style="padding:0;" class="card-body">
                        <div>
                        <h4 class="text-warning">
                        Preview
                        </h4>
                        </div>
                        <div id="preview" style="max-width:414px;height: 800px; padding:0;">
                          <iframe 
                          height="800px"
                          style="width: 100%; height: 100%;border-radius:20px;"
                          src="$iframe"
                          scrolling="no"
                          frameborder="0">
                          </iframe>
                        </div>                                                         
                      </div>
isiini;

echo $txt;

}

// COUPLE
if($page == 'couple'){
  $iframe = "../../theme/$tema/preview.php?user=$user&page=couple";

  // PATH IMAGE COUPLE
  $couple_path = "../../dari/$folder_name/imgs/couple/";
  $boy_img = $couple_path.'boy.jpg';
  $girl_img = $couple_path.'girl.jpg';
  
              // resize boy image
if(isset($_FILES['boy_img']) && $_FILES['boy_img']['type'] == 'image/jpeg'){
  $file = $boy_img;
          if($_FILES["boy_img"]['size'] > 300000){
              move_uploaded_file($_FILES['boy_img']['tmp_name'],$file);
          //  fungsi resize gambar argumen kanan untuk max resolution
              resize_image($file,"1200");
          }
      move_uploaded_file($_FILES['boy_img']['tmp_name'],$file);
}
              // resize girl image
if(isset($_FILES['girl_img']) && $_FILES['girl_img']['type'] == 'image/jpeg'){
  $file = $girl_img;
          if($_FILES["girl_img"]['size'] > 300000){
              move_uploaded_file($_FILES['girl_img']['tmp_name'],$file);
          //  fungsi resize gambar argumen kanan untuk max resolution
              resize_image($file,"1200");
          }
      move_uploaded_file($_FILES['girl_img']['tmp_name'],$file);
}
  $data_use['switch_couple'] = $_POST['switch_couple'];
  $data_use['boy'] = $_POST['boy'];
  $data_use['boy_msg'] = $_POST['boy_msg'];
  $data_use['boy_img'] = $boy_img;
  $data_use['girl'] = $_POST['girl'];
  $data_use['girl_msg'] = $_POST['girl_msg'];
  $data_use['girl_img'] = $girl_img;

  if($data_use['switch_couple'] == 'off'){
    $iframe = $iframe.'&couple';
  }


  $json = json_encode($data_use,JSON_PRETTY_PRINT);
  $send = mysqli_real_escape_string($conn,$json);
  $versi = $versi +1 ;
      // input database
          $query = "UPDATE aa_customer SET
          data_use = '$send',
          versi = $versi
          WHERE cookie = '$user'
      ";
      mysqli_query($conn,$query);


$txt = <<<isiini
    <div style="padding:0;" class="card-body">
                        <div>
                        <h4 class="text-warning">
                        Preview
                        </h4>
                        </div>
                        <div id="preview" style="max-width:414px;height: 800px; padding:0;">
                          <iframe 
                          height="800px"
                          style="width: 100%; height: 100%;border-radius:20px;"
                          src="$iframe"
                          scrolling="no"
                          frameborder="0">
                          </iframe>
                        </div>                                                         
                      </div>
isiini;

echo $txt;

}


  // ACARA
  if($page == 'acara'){
    $iframe = "../../theme/$tema/preview.php?user=$user&page=acara";
    $data_use['switch_acara'] = $_POST['switch_acara'];
    $data_use['acara_title'] = $_POST['acara_title'];
    $data_use['acara_date'] = $_POST['acara_date'];
    $data_use['acara_time'] = $_POST['acara_time'];
    $data_use['acara_alamat'] = $_POST['acara_alamat'];
    $data_use['acara_title2'] = $_POST['acara_title2'];
    $data_use['acara_date2'] = $_POST['acara_date2'];
    $data_use['acara_time2'] = $_POST['acara_time2'];
    $data_use['acara_alamat2'] = $_POST['acara_alamat2'];
    $data_use['acara_cd'] = $_POST['acara_cd'];
  
  
  if($data_use['switch_acara'] == 'off'){
    $iframe = $iframe.'&acara';
  }
  
    $json = json_encode($data_use,JSON_PRETTY_PRINT);
    $send = mysqli_real_escape_string($conn,$json);
  
        // input database
            $query = "UPDATE aa_customer SET
            data_use = '$send'
            WHERE cookie = '$user'
        ";
        mysqli_query($conn,$query);
        $acara_title = $data_use['acara_title'];
        $acara_date = $data_use['acara_date'];
        $acara_time = $data_use['acara_time'];
        $acara_alamat =  $data_use['acara_alamat'];
        $acara_title2 =  $data_use['acara_title2'];
        $acara_date2 = $data_use['acara_date2'] ;
        $acara_time2 = $data_use['acara_time2'] ;
        $acara_alamat2 =  $data_use['acara_alamat2']; 
  
  $txt = <<<isiini
    <div style="padding:0;" class="card-body">
                        <div>
                        <h4 class="text-warning">
                        Preview
                        </h4>
                        </div>
                        <div id="preview" style="max-width:414px;height: 800px; padding:0;">
                          <iframe 
                          height="800px"
                          style="width: 100%; height: 100%;border-radius:20px;"
                          src="$iframe"
                          scrolling="no"
                          frameborder="0">
                          </iframe>
                        </div>                                                         
                      </div>
  isiini;
  
  echo $txt;
  
  }

    // MAP
if($page == 'map'){
  $iframe = "../../theme/$tema/preview.php?user=$user&page=map";
  $data_use['switch_map'] = $_POST['switch_map'];
  $data_use['map_view'] = $_POST['map_view'];
  $data_use['map_desc'] = $_POST['map_desc'];
  $data_use['map_loc'] = $_POST['map_loc'];

if($data_use['switch_map'] == 'off'){
  $iframe = '../../error';
}

  $json = json_encode($data_use,JSON_PRETTY_PRINT);
  $send = mysqli_real_escape_string($conn,$json);

      // input database
          $query = "UPDATE aa_customer SET
          data_use = '$send'
          WHERE cookie = '$user'
      ";
      mysqli_query($conn,$query);
$txt = <<<isiini
    <div style="padding:0;" class="card-body">
                        <div>
                        <h4 class="text-warning">
                        Preview
                        </h4>
                        </div>
                        <div id="preview" style="max-width:414px;height: 800px; padding:0;">
                          <iframe 
                          height="800px"
                          style="width: 100%; height: 100%;border-radius:20px;"
                          src="$iframe"
                          scrolling="no"
                          frameborder="0">
                          </iframe>
                        </div>                                                         
                      </div>
isiini;

echo $txt;

}

// Prokes
if($page == 'prokes'){
  $iframe = "../../theme/$tema/preview.php?user=$user&page=prokes";
  $data_use['switch_prokes'] = $_POST['switch_prokes'];
  $data_use['prokes_msg'] = $_POST['prokes_msg'];

if($data_use['switch_prokes'] == 'off'){
  $iframe = '../../error';
}

  $json = json_encode($data_use,JSON_PRETTY_PRINT);
  $send = mysqli_real_escape_string($conn,$json);

      // input database
          $query = "UPDATE aa_customer SET
          data_use = '$send'
          WHERE cookie = '$user'
      ";
      mysqli_query($conn,$query);
$txt = <<<isiini
    <div style="padding:0;" class="card-body">
                        <div>
                        <h4 class="text-warning">
                        Preview
                        </h4>
                        </div>
                        <div id="preview" style="max-width:414px;height: 800px; padding:0;">
                          <iframe 
                          height="800px"
                          style="width: 100%; height: 100%;border-radius:20px;"
                          src="$iframe"
                          scrolling="no"
                          frameborder="0">
                          </iframe>
                        </div>                                                         
                      </div>
isiini;

echo $txt;

}


    // GALERY
if($page == 'galery'){
  $iframe = "../../theme/$tema/preview.php?user=$user&page=galery";
  // PATH IMAGE QUOTE
$galery_path = "../../dari/$folder_name/imgs/galery/";

if(isset($_POST['delete'])){
  $delete =  explode('??',$_POST['delete']);
    foreach($delete as $del){
      $file_delete = $galery_path.$del;
      if(file_exists($file_delete)){
        unlink($file_delete);
      }
    }
}
              // resize cover image
if(isset($_FILES) && !empty($_FILES)){
  $no = 1;
  foreach($_FILES as $files){
    if($files['type'] == 'image/jpeg' ){

      $file = $galery_path.'img_'.$no.$files['name'];
      if($files['size'] > 300000){
        move_uploaded_file($files['tmp_name'],$file);
        //  fungsi resize gambar argumen kanan untuk max resolution
              resize_image($file,"1200");
          }
      move_uploaded_file($files['tmp_name'],$file);
      
      $no++;
    }
  }
}

  $data_use['switch_galery'] = $_POST['switch_galery'];
  $data_use['galery_path'] = $galery_path;

if($data_use['switch_galery'] == 'off'){
  $iframe = '../../error';
  
}

  $json = json_encode($data_use,JSON_PRETTY_PRINT);
  $send = mysqli_real_escape_string($conn,$json);
  $versi = $versi + 1;
      // input database
          $query = "UPDATE aa_customer SET
          data_use = '$send',
          versi = $versi
          WHERE cookie = '$user'
      ";
      mysqli_query($conn,$query);


$txt = <<<isiini
    <div style="padding:0;" class="card-body">
                        <div>
                        <h4 class="text-warning">
                        Preview
                        </h4>
                        </div>
                        <div id="preview" style="max-width:414px;height: 800px; padding:0;">
                          <iframe 
                          height="800px"
                          style="width: 100%; height: 100%;border-radius:20px;"
                          src="$iframe"
                          scrolling="no"
                          frameborder="0">
                          </iframe>
                        </div>                                                         
                      </div>
isiini;

echo $txt;

}


    // GALERY
    if($page == 'galery2'){
      $iframe = "../../theme/$tema/preview.php?user=$user&page=galery2";
      // PATH IMAGE QUOTE
    $galery_path = "../../dari/$folder_name/imgs/galery2/";
    
    if(isset($_POST['delete'])){
      $delete =  explode('??',$_POST['delete']);
        foreach($delete as $del){
          $file_delete = $galery_path.$del;
          if(file_exists($file_delete)){
            unlink($file_delete);
          }
        }
    }
                  // resize cover image
    if(isset($_FILES) && !empty($_FILES)){
      $no = 1;
      foreach($_FILES as $files){
        if($files['type'] == 'image/jpeg' ){
    
          $file = $galery_path.'img_'.$no.$files['name'];
          if($files['size'] > 300000){
            move_uploaded_file($files['tmp_name'],$file);
            //  fungsi resize gambar argumen kanan untuk max resolution
                  resize_image($file,"1200");
              }
          move_uploaded_file($files['tmp_name'],$file);
          
          $no++;
        }
      }
    }
    
      $data_use['switch_galery2'] = $_POST['switch_galery2'];
      $data_use['galery_path2'] = $galery_path;
    
    if($data_use['switch_galery2'] == 'off'){
      $iframe = '../../error';
      
    }
    
      $json = json_encode($data_use,JSON_PRETTY_PRINT);
      $send = mysqli_real_escape_string($conn,$json);
      $versi = $versi + 1;
          // input database
              $query = "UPDATE aa_customer SET
              data_use = '$send',
              versi = $versi
              WHERE cookie = '$user'
          ";
          mysqli_query($conn,$query);
    
    
    $txt = <<<isiini
        <div style="padding:0;" class="card-body">
                            <div>
                            <h4 class="text-warning">
                            Preview
                            </h4>
                            </div>
                            <div id="preview" style="max-width:414px;height: 800px; padding:0;">
                              <iframe 
                              height="800px"
                              style="width: 100%; height: 100%;border-radius:20px;"
                              src="$iframe"
                              scrolling="no"
                              frameborder="0">
                              </iframe>
                            </div>                                                         
                          </div>
    isiini;
    
    echo $txt;
    
    }

      // RSVP
if($page == 'rsvp'){
  $iframe = "../../theme/$tema/preview.php?user=$user&page=rsvp";

  $data_use['switch_rsvp'] = $_POST['switch_rsvp'];
  $data_use['rsvp_msg'] = $_POST['rsvp_msg'];
  
if($data_use['switch_rsvp'] == 'off'){
  $iframe = '../../error';
  
}

  $json = json_encode($data_use,JSON_PRETTY_PRINT);
  $send = mysqli_real_escape_string($conn,$json);
  $versi = $versi + 1;
      // input database
          $query = "UPDATE aa_customer SET
          data_use = '$send',
          versi = $versi
          WHERE cookie = '$user'
      ";
      mysqli_query($conn,$query);


$txt = <<<isiini
    <div style="padding:0;" class="card-body">
                        <div>
                        <h4 class="text-warning">
                        Preview
                        </h4>
                        </div>
                        <div id="preview" 
                        style="max-width:414px;
                        height: 800px; padding:0;">
                          <iframe 
                          height="800px"
                          style="width: 100%; height: 100%;border-radius:20px;"
                          src="$iframe"
                          scrolling="no"
                          frameborder="0">
                          </iframe>
                        </div>                                                         
                      </div>
isiini;

echo $txt;

}



    // GIFT
if($page == 'gift'){
  
  $iframe = "../../theme/$tema/preview.php?user=$user&page=gift";

  $data_use['switch_rek'] = $_POST['switch_rek'];

  // PATH IMAGE QUOTE
  $gift_path = "../../dari/$folder_name/imgs/";
  $gift_barcode = $gift_path.'rek.jpg';

  if($data_use['switch_rek'] == 'off'){
    $iframe = '../../error';
    
  }
              // resize cover image
if(isset($_FILES['gift_barcode']) && $_FILES['gift_barcode']['type'] == 'image/jpeg'){
  $file = $gift_barcode;
          if($_FILES["gift_barcode"]['size'] > 300000){
              move_uploaded_file($_FILES['gift_barcode']['tmp_name'],$file);
          //  fungsi resize gambar argumen kanan untuk max resolution
              resize_image($file,"1200");
          }
      move_uploaded_file($_FILES['gift_barcode']['tmp_name'],$file);
}


  $data_use['switch_rek'] = $_POST['switch_rek'];
  $data_use['bank_rek'] = $_POST['bank_rek'];
  $data_use['bank_an'] = $_POST['bank_an'];
  $data_use['gift_title'] = $_POST['gift_title'];
  $data_use['gift_alamat'] = $_POST['gift_alamat'];
  $data_use['gift_barcode'] = $gift_barcode;


  $json = json_encode($data_use,JSON_PRETTY_PRINT);
  $send = mysqli_real_escape_string($conn,$json);
  $versi = $versi +1;
      // input database
          $query = "UPDATE aa_customer SET
          data_use = '$send',
          versi = $versi
          WHERE cookie = '$user'
      ";
      mysqli_query($conn,$query);


$txt = <<<isiini
    <div style="padding:0;" class="card-body">
                        <div>
                        <h4 class="text-warning">
                        Preview
                        </h4>
                        </div>
                        <div id="preview"
                        style="max-width:414px;
                        height: 800px; padding:0;">
                          <iframe 
                          height="800px"
                          style="width: 100%; height: 100%;border-radius:20px;"
                          src="$iframe"
                          scrolling="no"
                          frameborder="0">
                          </iframe>
                        </div>                                                         
                      </div>
isiini;

echo $txt;

}

    // THX
    if($page == 'thx'){
  
      $iframe = "../../theme/$tema/preview.php?user=$user&page=thx";    
    
      $data_use['thx_txt'] = $_POST['thx_txt'];
    
      $json = json_encode($data_use,JSON_PRETTY_PRINT);
      $send = mysqli_real_escape_string($conn,$json);
    
          // input database
              $query = "UPDATE aa_customer SET
              data_use = '$send'
              WHERE cookie = '$user'
          ";
          mysqli_query($conn,$query);
    
    
    $txt = <<<isiini
        <div style="padding:0;" class="card-body">
                            <div>
                            <h4 class="text-warning">
                            Preview
                            </h4>
                            </div>
                            <div id="preview" 
                            style="max-width:414px;
                            height: 800px; padding:0;">
                              <iframe 
                              height="800px"
                              style="width: 100%; height: 100%;border-radius:20px;"
                              src="$iframe"
                              scrolling="no"
                              frameborder="0">
                              </iframe>
                            </div>                                                         
                          </div>
    isiini;
    
    echo $txt;
    
    }

    // layout
    if($page == 'layout'){
      $data_use['layout'] = json_decode($_POST['layout'],true);
    
      $json = json_encode($data_use,JSON_PRETTY_PRINT);
      $send = mysqli_real_escape_string($conn,$json);
    
          // input database
              $query = "UPDATE aa_customer SET
              data_use = '$send'
              WHERE cookie = '$user'
          ";
          mysqli_query($conn,$query);
    }