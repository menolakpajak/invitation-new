<?php



// informasi________

// HEAD
if($data['folder_name'] == 'sample'){
        include_once 'preview/default.php';
        $switch_galery = 'on';
        
}else{

        $json = json_decode($data['data_use'],true);
        $title_head = $json['title_head'];
        $title_content = $json['title_content'];
        $url_content = $json['url_content'];
        $desc_content = $json['desc_content'];
        $img_content = $json['img_content'];
        
        // BARCODE LINK
        if(!isset($json['switch_barcode'])){
                $switch_barcode = 'off';        
        }else{
                $switch_barcode = $json['switch_barcode'];
        }
        $switch_strict = $json['switch_strict'];
        $url_barcode = $json['url_barcode'];
        
        // Background SONG
        if(!isset($json['song'])){
        $song = '../aasong/Music Travel Love - The Only One.mp3';
        }else{
                $song = $json['song'];
        }
        
        
        // cover
        $title = $json['title'];
        $title_name = $json['title_name'];
        $cover_img = $json['cover_img']."?versi=$versi";
        
        // quotes
        $switch_quote = $json['switch_quote'];
        $quote_img = $json['quote_img'];
        $quote_isi = nl2br($json['quote_isi']);
        $quote_arti = nl2br($json['quote_arti']);
        $quote_kutip = $json['quote_kutip'];
        
        // video
        $switch_video = $json['switch_video'];
        $vid_src = $json['vid_src'];
        $vid_msg = nl2br($json['vid_msg']);
        $vid_kutip = $json['vid_kutip'];
        
        // couple
        $switch_couple = $json['switch_couple'];
        $boy = $json['boy'];
        $boy_img = $json['boy_img'].'?versi='.$versi;
        $boy_msg = nl2br($json['boy_msg']);
        $girl = $json['girl'];
        $girl_img = $json['girl_img'].'?versi='.$versi;
        $girl_msg = nl2br($json['girl_msg']);
        
        
        // acara
                //Akad Nikah
        $switch_acara = $json['switch_acara'];
        $acara_title = $json['acara_title'];
        $acara_date = $json['acara_date'];
        $acara_time = $json['acara_time'];
        $acara_alamat = nl2br($json['acara_alamat']);
                //Resepsi
        $acara_title2 = $json['acara_title2'];
        $acara_date2 = $json['acara_date2'];
        $acara_time2 = $json['acara_time2'];
        $acara_alamat2 = nl2br($json['acara_alamat2']);
                //Coundown Acara
        $acara_cd = $json['acara_cd'];
        
        // map
        $switch_map = $json['switch_map'];
        $map_view = $json['map_view'];
        $map_desc = nl2br($json['map_desc']);
        $map_loc = $json['map_loc'];
        
        // PROKES
        $switch_prokes = $json['switch_prokes'];
        $prokes_msg = nl2br($json['prokes_msg']);
        
        // RSVP
        $rsvp_img1 = $json['rsvp_img1'];
        $rsvp_img2 = $json['rsvp_img2'];
        $switch_rsvp = $json['switch_rsvp'];
        $rsvp_msg = nl2br($json['rsvp_msg']);
        
        // Lokasi path galery
        $switch_galery = $json['switch_galery'];
        $galery_path = $json['galery_path'];
        $switch_galery2 = $json['switch_galery2'];
        $galery_path2 = $json['galery_path2'];
        
        // gift
        $switch_rek = $json['switch_rek'];
        if(file_exists($json['gift_barcode'])){
        $gift_barcode = $json['gift_barcode']."?versi=$versi";
        }else{
        $gift_barcode = "images/barcode.jpg?versi=$versi";
        }
        $gift_img = $json['gift_img'];
                //TRF bank
        $bank_rek = $json['bank_rek'];
        $bank_an = $json['bank_an'];
                //GIFT send
        $gift_title = $json['gift_title'];
        $gift_alamat = nl2br($json['gift_alamat']);
        
        // thanks
        $thx_txt = nl2br($json['thx_txt']);
        
        //layout
        $layout = $json['layout'];
}
