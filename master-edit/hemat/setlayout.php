<?php 

$layouts = $json['layout'];

function cekLayout($cek,$json){
  if($cek == 'barcode' && $json['switch_barcode'] == 'on'){
    return '<div class="grid__container">
    <div class="grid__element" data-layout="barcode">
    <i style="color:#b98890 ;" class="menu-icon bx bx-qr-scan"></i>QR-Code</div>
    </div>';
  }

  if($cek == 'quote' && $json['switch_quote'] == 'on'){
    return '<div class="grid__container">
    <div class="grid__element" data-layout="quote">
    <i style="color:#b98890 ;" class="menu-icon bx bxs-spreadsheet"></i>Quote</div>
    </div>';
  }

  if($cek == 'video'&& $json['switch_video'] == 'on'){
    return '<div class="grid__container">
    <div class="grid__element" data-layout="video">
    <i style="color:#b98890 ;" class="menu-icon bx bxs-movie-play"></i>Video</div>
    </div>';
  }

  if($cek == 'couple'){
    return '<div class="grid__container">
    <div class="grid__element" data-layout="couple">
    <i style="color:#b98890 ;" class="menu-icon bx bxs-heart-circle"></i>Host</div>
    </div>';
  }

  if($cek == 'acara'){
    return '<div class="grid__container">
    <div class="grid__element" data-layout="acara">
    <i style="color:#b98890 ;" class="menu-icon bx bxs-calendar"></i>Acara</div>
    </div>';
  }

  if($cek == 'map' && $json['switch_map'] == 'on'){
    return '<div class="grid__container">
    <div class="grid__element" data-layout="map">
    <i style="color:#b98890 ;" class="menu-icon bx bxs-map"></i>Map</div>
    </div>';
  }

  if($cek == 'prokes' && $json['switch_prokes'] == 'on'){
    return '<div class="grid__container">
    <div class="grid__element" data-layout="prokes">
    <i style="color:#b98890 ;" class="menu-icon bx bx-check-shield"></i>Prokes</div>
    </div>';
  }

  if($cek == 'galery' && $json['switch_galery'] == 'on'){
    return '<div class="grid__container">
    <div class="grid__element" data-layout="galery">
    <i style="color:#b98890 ;" class="menu-icon bx bxs-image"></i>Galery</div>
    </div>';
  }

  if($cek == 'galery2' && $json['switch_galery2'] == 'on'){
    return '<div class="grid__container">
    <div class="grid__element" data-layout="galery">
    <i style="color:#b98890 ;" class="menu-icon bx bxs-image"></i>Galery +</div>
    </div>';
  }

  if($cek == 'rsvp' && $json['switch_rsvp'] == 'on'){
    return '<div class="grid__container">
    <div class="grid__element" data-layout="rsvp">
    <i style="color:#b98890 ;" class="menu-icon bx bxs-message-rounded-dots"></i>Rsvp</div>
  </div>';
  }

  if($cek == 'gift' && $json['switch_rek'] == 'on'){
    return '<div class="grid__container">
    <div class="grid__element" data-layout="gift">
    <i style="color:#b98890 ;" class="menu-icon bx bxs-gift"></i>Gift</div>
    </div>';
  }
}


?>

    <div class="grid">
        <div class="grid__fix">
          <div class="grid__element__fix" data-layout="cover" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="right" data-bs-html="true" title="" data-bs-original-title="<span>Cant Be Move !</span>">
          <i style="color:#b98890 ;" class="menu-icon bx bxs-book-content"></i> Cover</div>
        </div>
        <?php foreach($layouts as $layout){
          echo cekLayout($layout,$json);
        } ?>
        
        <div class="grid__fix">
          <div class="grid__element__fix" data-layout="thx" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="right" data-bs-html="true" title="" data-bs-original-title="<span>Cant Be Move !</span>">
          <i style="color:#b98890 ;" class="menu-icon bx bxs-badge-check"></i>Thanks</div>
        </div>
      </div>


      