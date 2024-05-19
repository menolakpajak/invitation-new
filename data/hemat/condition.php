<?php

$def_loc = $data['tema'];
$def_loc = "../../theme/$def_loc/preview/default.php";
// $default = json_decode($data['data_reset'],true);
include_once "$def_loc";
$json = json_decode($data['data_use'],true);


// <<<<<<<<<<<<<<<<<<<<<<<  check  >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>

// cover
if(isset($json['title']) && 
isset($json['title_name']) && 
isset($json['cover_img'])){
    $cover='';
}

//background sound
    $music = '';


// quotes
if(isset($json['switch_quote']) && 
isset($json['quote_img']) &&
isset($json['quote_isi']) &&
isset($json['quote_arti']) && 
isset($json['quote_kutip'])){
    $quote = '';
}


// couple
if(isset($json['switch_couple']) &&
isset($json['boy']) && 
isset($json['boy_img']) && 
isset($json['boy_msg']) && 
isset($json['girl']) && 
isset($json['girl_img']) && 
isset($json['girl_msg'])){
    $couple = '';
}

// acara
if(isset($json['switch_acara']) && 
isset($json['acara_title2']) &&
isset($json['acara_date2']) && 
isset($json['acara_time2']) && 
isset($json['acara_alamat2']) &&
isset($json['acara_cd'])){
    $acara = '';
}

// map
if(isset($json['switch_map']) &&
isset($json['map_view']) && 
isset($json['map_desc']) && 
isset($json['map_loc'])){
    $map = '';
}

// prokes
if(isset($json['switch_prokes']) &&
isset($json['prokes_msg'])){
    $prokes = '';
}


// thanks
if(isset($json['thx_txt'])){
    $thx = '';
}

// finish
if(isset($cover) &&
 isset($music) &&
 isset($quote) &&
 isset($couple) &&
 isset($acara) &&
 isset($map) &&
 isset($prokes) &&
 isset($thx)){
    $finish = '';
 }
// <<<<<<<<<<<<<<<<<<<<<<<<< end Check >>>>>>>>>>>>>>>>>>>>>>>>>>>

// HEAD
(!isset($json['title_head'])) ? $json['title_head'] = $default['title_head'] : '';
(!isset($json['title_content'])) ? $json['title_content'] = $default['title_content'] : '';
(!isset($json['url_content'])) ? $json['url_content'] = $default['url_content'] : '';
(!isset($json['desc_content'])) ? $json['desc_content'] = $default['desc_content'] : '';
(!isset($json['img_content'])) ? $json['img_content'] = $default['img_content'] : '';

//background sound
(!isset($json['song'])) ? $json['song'] = '' : $json['song'];

// cover
(!isset($json['title'])) ? $json['title'] = $default['title'] : '';
(!isset($json['title_name'])) ? $json['title_name'] = $default['title_name'] : '';
(!isset($json['cover_img'])) ? $json['cover_img'] = $default['cover_img'] : '';

// quotes
(!isset($json['switch_quote'])) ? $json['switch_quote'] = $default['switch_quote'] : '';
(!isset($json['quote_img'])) ? $json['quote_img'] = $default['quote_img'] : '';
(!isset($json['quote_isi'])) ? $json['quote_isi'] = $default['quote_isi'] : '';
(!isset($json['quote_arti'])) ? $json['quote_arti'] = $default['quote_arti'] : '';
(!isset($json['quote_kutip'])) ? $json['quote_kutip'] = $default['quote_kutip'] : '';

// video
(!isset($json['switch_video'])) ? $json['switch_video'] = $default['switch_video'] : '';
(!isset($json['vid_src'])) ? $json['vid_src'] = $default['vid_src'] : '';
(!isset($json['vid_msg'])) ? $json['vid_msg'] = $default['vid_msg'] : '';
(!isset($json['vid_kutip'])) ? $json['vid_kutip'] = $default['vid_kutip'] : '';


// couple
(!isset($json['boy'])) ? $json['boy'] = $default['boy'] : '';
(!isset($json['boy_img'])) ? $json['boy_img'] = $default['boy_img'] : '';
(!isset($json['boy_msg'])) ? $json['boy_msg'] = $default['boy_msg'] : '';
(!isset($json['girl'])) ? $json['girl'] = $default['girl'] : '';
(!isset($json['girl_img'])) ? $json['girl_img'] = $default['girl_img'] : '';
(!isset($json['girl_msg'])) ? $json['girl_msg'] = $default['girl_msg'] : '';

// acara
            //Akad Nikah
(!isset($json['switch_acara'])) ? $json['switch_acara'] = $default['switch_acara'] : '';
(!isset($json['acara_title'])) ? $json['acara_title'] = $default['acara_title'] : '';
(!isset($json['acara_date'])) ? $json['acara_date'] = $default['acara_date'] : '';
(!isset($json['acara_time'])) ? $json['acara_time'] = $default['acara_time'] : '';
(!isset($json['acara_alamat'])) ? $json['acara_alamat'] = $default['acara_alamat'] : '';

    //Resepsi
(!isset($json['acara_title2'])) ? $json['acara_title2'] = $default['acara_title2'] : '';
(!isset($json['acara_date2'])) ? $json['acara_date2'] = $default['acara_date2'] : '';
(!isset($json['acara_time2'])) ? $json['acara_time2'] = $default['acara_time2'] : '';
(!isset($json['acara_alamat2'])) ? $json['acara_alamat2'] = $default['acara_alamat2'] : '';

    //Coundown Acara
if(!isset($json['acara_cd'])){ $json['acara_cd'] = '';}

// map
(!isset($json['switch_map'])) ? $json['switch_map'] = $default['switch_map'] : '';
(!isset($json['map_view'])) ? $json['map_view'] = $default['map_view'] : '';
(!isset($json['map_desc'])) ? $json['map_desc'] = $default['map_desc'] : '';
(!isset($json['map_loc'])) ? $json['map_loc'] = $default['map_loc'] : '';

// Prokes
(!isset($json['switch_prokes'])) ? $json['switch_prokes'] = $default['switch_prokes'] : '';
(!isset($json['prokes_msg'])) ? $json['prokes_msg'] = $default['prokes_msg'] : '';

// RSVP
(!isset($json['rsvp_img1'])) ? $json['rsvp_img1'] = $default['rsvp_img1'] : '';
(!isset($json['rsvp_img2'])) ? $json['rsvp_img2'] = $default['rsvp_img2'] : '';
(!isset($json['rsvp_msg'])) ? $json['rsvp_msg'] = $default['rsvp_msg'] : '';

// Lokasi path galery
(!isset($json['switch_galery'])) ? $json['switch_galery'] = $default['switch_galery'] : '';
(!isset($json['galery_path'])) ? $json['galery_path'] = $default['galery_path'] : '';
(!isset($json['switch_galery2'])) ? $json['switch_galery'] = $default['switch_galery2'] : '';
(!isset($json['galery_path2'])) ? $json['galery_path'] = $default['galery_path2'] : '';

// gift
(!isset($json['switch_rek'])) ? $json['switch_rek'] = $default['switch_rek'] : '';
(!isset($json['gift_barcode'])) ? $json['gift_barcode'] = $default['gift_barcode'] : '';
(!isset($json['gift_img'])) ? $json['gift_img'] = $default['gift_img'] : '';

//TRF bank
(!isset($json['bank_rek'])) ? $json['bank_rek'] = $default['bank_rek'] : '';
(!isset($json['bank_an'])) ? $json['bank_an'] = $default['bank_an'] : '';

//GIFT send
(!isset($json['gift_title'])) ? $json['gift_title'] = $default['gift_title'] : '';
(!isset($json['gift_alamat'])) ? $json['gift_alamat'] = $default['gift_alamat'] : '';

// thanks
(!isset($json['thx_txt'])) ? $json['thx_txt'] = $default['thx_txt'] : '';



