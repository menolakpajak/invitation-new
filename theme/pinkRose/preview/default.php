<?php


// dataBase table name...
// ada di conn.php


// informasi________

// HEAD
$title_head = 'Preview Pink Rose';
$title_content = 'Preview Pink Rose';
$url_content = 'https://ada-undangan.online/theme/pinkRose/preview.html';
$desc_content = 'Tanpa Mengurangi Rasa Hormat. Kami Bermaksud Mengundang Bapak/Ibu/Saudara/i, Pada Acara Pernikahan Putra &amp; Putri Kami';
$img_content = 'https://ada-undangan.online/theme/pinkRose/images/preview.png';

// BARCODE LINK
$switch_strict = 'off';
$switch_barcode = 'off';
$url_barcode = "https://www.ada-undangan.online/scaning/?kode=";

// Background SONG
$song = '../aasong/Music Travel Love - The Only One.mp3';

// cover
$title = 'Wedding Invitation';
$title_name = 'Komang &amp; Rina';
$cover_img = 'images/cover/cover.jpg';

// quotes
$switch_quote = 'on';
$quote_img = 'images/quote/img.jpg';
$quote_isi = '<h3 class="font-accent color-accent">Om Swastyastu</h3>';
$quote_arti = 'Atas Asung Kertha Wara Nugraha
Ida Sang Hyang Widhi Wasa/Tuhan Yang Maha Esa, perkenankan kami mengundang Bapak/Ibu/Saudara/i
pada Upacara Pawiwahan
putra-putri kami.';
$quote_kutip = '';

// video
$switch_video = 'on';
$vid_src = 'https://www.youtube.com/embed/PepIHc79qvQ';
$vid_msg = 'Jika melangkah tingkat tertinggi beruntunglah yang tetap bertahan dan menjadikan cinta hanya ujian dan kesabaran sebagai penjaganya.';
$vid_kutip = 'By Anonim';

// couple
$switch_couple = 'on';
$boy = 'Komang Sanjaya';
$boy_img ="images/couple/boy.jpg";
$boy_msg = 'Putra pertama dari
Jorge William, SH. &amp; Ni Ketut Pantau.';
$girl = 'Rina Asih';
$girl_img = "images/couple/girl.jpg";
$girl_msg = 'Putri pertama dari
I Made Gercep &amp; Gwenn Spascky, S.Pd., M.Pd';


// acara
        //Akad Nikah
$acara_title = 'Pawiwahan';
$acara_date = 'Minggu, 30 Maret 2022';
$acara_time = 'Pukul 09:00 WITA sd 14.00 WITA';
$acara_alamat = 'Grand Inna Bali Beach
Jl. Hang Tuah Jalan Inna Grand Bali Beach, Sanur Kaja, South Denpasar, Sanur Kaja, Denpasar Selatan,Kota Denpasar, Bali';
        //Resepsi
$switch_acara = 'on';
$acara_title2 = 'Resepsi';
$acara_date2 = 'Minggu, 31 Maret 2022';
$acara_time2 = 'Pukul 18:00 Wita sd Selesai';
$acara_alamat2 = 'Grand Inna Bali Beach
Jl. Hang Tuah Jalan Inna Grand Bali Beach, Sanur Kaja, South Denpasar, Sanur Kaja, Denpasar Selatan, Kota Denpasar, Bali';
        //Coundown Acara
$acara_cd = '2024-07-13T09:00';

// map
$switch_map = 'on';
$map_view = 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3944.1026480523515!2d115.26023981486917!3d-8.681788093762183!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd241a24d9064f3%3A0x5ab8288967d18308!2sInna%20Bali%20Beach%20Resort!5e0!3m2!1sen!2sid!4v1677139559353!5m2!1sen!2sid';
$map_desc = 'Grand Inna Bali Beach
Jl. Hang Tuah Jalan Inna Grand Bali Beach, Sanur Kaja, South Denpasar, Sanur Kaja, Denpasar Selatan, Kota Denpasar, Bali';
$map_loc = 'https://goo.gl/maps/H13Zseqwix4xaeA39';

// Prokes
$switch_prokes = 'on';
$prokes_msg = 'Bapak/Ibu/Saudara/i tamu undangan yang terhormat, kami menghimbau agar tetap memperhatikan protokol kesehatan. Terima kasih.';

// RSVP
$rsvp_img1 = 'images/rsvp/img1.jpg';
$rsvp_img2 = 'images/rsvp/img2.jpg';
$switch_rsvp = 'on';
$rsvp_msg = 'Kirim ucapan untuk mempelai
dan konfirmasi kehadiran';

// Lokasi path galery
$switch_galery = 'off';
$galery_path = 'images/galery/';
$switch_galery2 = 'off';
$galery_path2 = 'images/galery2/';

// gift
$switch_rek = 'on';
$gift_barcode = 'images/barcode.jpg';
$gift_img = 'images/no-image.png';
        //TRF bank
$bank_rek = '12345678';
$bank_an = 'BCA : Atas Nama Rekening';
        //GIFT send
$gift_title = 'Kirim Kado';
$gift_alamat = 'Anda dapat mengirim kado ke:
        Jl. Moch. Yamin 5 no 8, Denpasar Bali';

// thanks
$thx_txt = 'Merupakan suatu kehormatan dan kebahagiaan bagi kami, apabila Bapak/Ibu/Saudara/i, berkenan hadir dan memberikan do\'a restu serta menjadi bagian dari momen berharga kami.

<h5 class="font-accent color-accent">Om Santih, Santih, Santih Om</h5>
<div class="font-italic">Hormat Kami Yang Mengundang</div>';

//layout
$layout = [
        "barcode",
        "quote",
        "video",
        "couple",
        "acara",
        "map",
        "prokes",
        "galery",
        "galery2",
        "rsvp",
        "gift"
];

// data json
$default =['title_head'=>$title_head,
        'title_content'=>$title_content,
        'url_content'=>$url_content,
        'desc_content'=>$desc_content,
        'img_content'=>$img_content,
        'switch_strict'=>$switch_strict,
        'switch_barcode'=>$switch_barcode,
        'url_barcode'=>$url_barcode,
        'song'=>$song,
        'title'=>$title,
        'title_name'=>$title_name,
        'cover_img'=>$cover_img,
        'switch_quote'=>$switch_quote,
        'quote_img'=>$quote_img,
        'quote_isi'=>$quote_isi,
        'quote_arti'=>$quote_arti,
        'quote_kutip'=>$quote_kutip,
        'switch_video'=>$switch_video,
        'vid_src'=>$vid_src,
        'vid_msg'=>$vid_msg,
        'vid_kutip'=>$vid_kutip,
        'switch_couple'=>$switch_couple,
        'boy'=>$boy,
        'boy_img'=>$boy_img,
        'boy_msg'=>$boy_msg,
        'girl'=>$girl,
        'girl_img'=>$girl_img,
        'girl_msg'=>$girl_msg,
        'acara_title'=>$acara_title,
        'acara_date'=>$acara_date,
        'acara_time'=>$acara_time,
        'acara_alamat'=>$acara_alamat,
        'switch_acara'=>$switch_acara,
        'acara_title2'=>$acara_title2,
        'acara_date2'=>$acara_date2,
        'acara_time2'=>$acara_time2,
        'acara_alamat2'=>$acara_alamat2,
        'acara_cd'=>$acara_cd,
        'switch_map'=>$switch_map,
        'map_view'=>$map_view,
        'map_desc'=>$map_desc,
        'map_loc'=>$map_loc,
        'switch_prokes'=>$switch_prokes,
        'prokes_msg'=>$prokes_msg,
        'rsvp_img1'=>$rsvp_img1,
        'rsvp_img2'=>$rsvp_img2,
        'switch_galery'=>$switch_galery,
        'galery_path'=>$galery_path,
        'switch_galery2'=>$switch_galery2,
        'galery_path2'=>$galery_path2,
        'switch_rsvp'=>$switch_rsvp,
        'rsvp_msg'=>$rsvp_msg,
        'switch_rek'=>$switch_rek,
        'gift_barcode'=>$gift_barcode,
        'gift_img'=>$gift_img,
        'bank_rek'=>$bank_rek,
        'bank_an'=>$bank_an,
        'gift_title'=>$gift_title,
        'gift_alamat'=>$gift_alamat,
        'thx_txt'=>$thx_txt,
        'layout'=>$layout
];



