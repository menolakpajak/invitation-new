<?php

$json = json_decode($data['data_use'],true);
$reset = json_decode($data['data_reset'],true);


// <<<<<<<<<<<<<<<<<<<<<<<  check  >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>

// cover
if($json['title'] != $reset['title'] ||
$json['title_name'] != $reset['title_name']){
    $cover='';
}

//qrcode
if($json['switch_barcode'] != $reset['switch_barcode'] ||
$json['switch_strict'] != $reset['switch_strict']){
    $qrcode='';
}

//background sound
    $music = '';


// quotes
if($json['switch_quote'] != $reset['switch_quote'] ||
$json['quote_img'] != $reset['quote_img'] ||
$json['quote_isi'] != $reset['quote_isi'] ||
$json['quote_arti'] != $reset['quote_arti'] ||
$json['quote_kutip'] != $reset['quote_kutip']
){
    $quote='';
}

// video
if($json['switch_video'] != $reset['switch_video'] ||
$json['vid_src'] != $reset['vid_src'] ||
$json['vid_msg'] != $reset['vid_msg'] ||
$json['vid_kutip'] != $reset['vid_kutip']
){
    $video='';
}


// couple
if($json['switch_couple'] != $reset['switch_couple'] ||
$json['boy'] != $reset['boy'] ||
$json['boy_img'] != $reset['boy_img'] ||
$json['boy_msg'] != $reset['boy_msg'] ||
$json['girl'] != $reset['girl'] ||
$json['girl_img'] != $reset['girl_img'] ||
$json['girl_msg'] != $reset['girl_msg']
){
    $couple='';
}

// acara
if($json['switch_acara'] != $reset['switch_acara'] ||
$json['acara_title'] != $reset['acara_title'] ||
$json['acara_date'] != $reset['acara_date'] ||
$json['acara_time'] != $reset['acara_time'] ||
$json['acara_alamat'] != $reset['acara_alamat'] ||
$json['acara_title2'] != $reset['acara_title2'] ||
$json['acara_date2'] != $reset['acara_date2'] ||
$json['acara_time2'] != $reset['acara_time2'] ||
$json['acara_alamat2'] != $reset['acara_alamat2'] ||
$json['acara_cd'] != $reset['acara_cd']
){
    $acara='';
}

// map
if($json['switch_map'] != $reset['switch_map'] ||
$json['map_view'] != $reset['map_view'] ||
$json['map_desc'] != $reset['map_desc'] ||
$json['map_loc'] != $reset['map_loc']
){
    $map='';
}

// prokes
if($json['switch_prokes'] != $reset['switch_prokes'] ||
$json['prokes_msg'] != $reset['prokes_msg']
){
    $prokes='';
}


// Lokasi path galery
if($json['switch_galery'] != $reset['switch_galery'] ||
$json['galery_path'] != $reset['galery_path'] 
){
    $galery='';
}
// Lokasi path galery2
if($json['switch_galery2'] != $reset['switch_galery2'] ||
$json['galery_path2'] != $reset['galery_path2'] 
){
    $galery2='';
}

// rsvp
if($json['switch_rsvp'] != $reset['switch_rsvp'] ||
$json['rsvp_msg'] != $reset['rsvp_msg'] 
){
    $rsvp='';
}


//GIFT send
if($json['switch_rek'] != $reset['switch_rek'] ||
$json['bank_rek'] != $reset['bank_rek'] ||
$json['bank_an'] != $reset['bank_an'] ||
$json['gift_title'] != $reset['gift_title'] ||
$json['gift_alamat'] != $reset['gift_alamat']
){
    $gift='';
}

// thanks
if($json['thx_txt'] != $reset['thx_txt']){
    $thx='';
}

// layout
if($json['layout'] != $reset['layout']){
    $layout='';
}

// finish
if(isset($cover) ||
isset($qrcode) ||
 isset($quote) ||
 isset($video) ||
 isset($couple) ||
 isset($acara) ||
 isset($map) ||
 isset($prokes) ||
 isset($galery) ||
 isset($galery2) ||
 isset($rsvp) ||
 isset($gift) ||
 isset($thx)){
    $finish = '';
 }
// <<<<<<<<<<<<<<<<<<<<<<<<< end Check >>>>>>>>>>>>>>>>>>>>>>>>>>>

