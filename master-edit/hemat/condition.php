<?php

$json = json_decode($data['data_use'],true);
$reset = json_decode($data['data_reset'],true);

// <<<<<<<<<<<<<<<<<<<<<<<  check  >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>

// head
if($json['title_head'] != $reset['title_head'] ||
    $json['title_content'] != $reset['title_content'] ||
    $json['url_content'] != $reset['url_content'] ||
    $json['desc_content'] != $reset['desc_content'] ||
    $json['img_content'] != $reset['img_content']
    ){
    $head='';
}

// cover
if($json['title'] != $reset['title'] ||
$json['title_name'] != $reset['title_name']){
    $cover='';
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


// thanks
if($json['thx_txt'] != $reset['thx_txt']){
    $thanks='';
}

// layout
if($json['layout'] != $reset['layout']){
    $layout='';
}


// reset
if(isset($head) ||
isset($cover) ||
 isset($quote) ||
 isset($couple) ||
 isset($acara) ||
 isset($map) ||
 isset($prokes) ||
 isset($thanks) ||
 isset($layout)){
    $finish = '';
 }

  // <<<<<<<<<<<<<<<<<<<<<<<<< end Check >>>>>>>>>>>>>>>>>>>>>>>>>>>