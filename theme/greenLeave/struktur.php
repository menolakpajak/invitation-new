<?php



// cek ada file di folder galery
$imgs = glob($galery_path.'*');
$imgs2 = glob($galery_path2.'*');
if(!file_exists($quote_img)){
    if (empty($imgs) || empty($quote_img) || $switch_galery == 'off') {
        $rsvp_img1 = 'images/rsvp/img1.jpg';
        $rsvp_img2 = 'images/rsvp/img2.jpg';
        $quote_img = 'images/quote/img.jpg';
    } else {
        $imgs = array_map('basename', $imgs);
        $rsvp_img1 = $galery_path.$imgs[array_rand($imgs)];
        $rsvp_img2 = $galery_path.$imgs[array_rand($imgs)];
        $quote_img = $galery_path.$imgs[array_rand($imgs)];
    }
}else{
    if (empty($imgs) || empty($quote_img)) {
        $rsvp_img1 = 'images/rsvp/img1.jpg';
        $rsvp_img2 = 'images/rsvp/img2.jpg';
    } else {
        $imgs = array_map('basename', $imgs);
        $rsvp_img1 = $galery_path.$imgs[array_rand($imgs)];
        $rsvp_img2 = $galery_path.$imgs[array_rand($imgs)];
    }
    $quote_img = $quote_img."?versi=$versi";
}

$save_date = 'https://calendar.google.com/calendar/u/0/r/eventedit?';
$save_date .= 'text='.urlencode($title.'-'.$title_name);
$tes = str_replace('-','',$acara_cd);
$tes = str_replace(':','',$tes);
$save_date .= '&dates='.urlencode($tes.'/'.$tes);
$save_date .= '&details=&location='.urlencode($map_desc);


$frame = <<<frm
<div class="frame">
    <img class="frame-tl animate__animated animate__fadeInDown animate__slower" src="images/frame/frame-tl.png?versi=$versi" alt="frame" style="width: 70%" />
    <img class="frame-tr animate__animated animate__fadeInRight animate__slower" src="images/frame/frame-tr.png?versi=$versi" alt="frame" style="width: 30%" />
    <img class="frame-bl animate__animated animate__fadeInLeft animate__slower" src="images/frame/frame-bl.png?versi=$versi" alt="frame" style="width: 30%" />
    <img class="frame-br animate__animated animate__fadeInUp animate__slower" src="images/frame/frame-br.png?versi=$versi" alt="frame" style="width: 70%" />
</div>
frm;


// isian
$cover = <<<cover

<!-- cover -->
<li class="swiper-slide invitation__slide">
    <div class="container-mobile" style="background-image: url(images/bg.jpg)">
        $frame
        <div class="d-flex justify-content-center align-items-center" style="height: 100%">
            <div style="width: 100%">
                <div>
                    <div class="text-center animate__animated animate__fadeInDown animate__slower">
                        <div class="mb-2">$title</div>
                        <div class="font-accent color-accent h3 mb-3">$title_name</div>
                        <div
                            class="animate__animated animate__fadeInDown animate__slower"
                            style="height: 160px; width: 160px; margin: auto; border-radius: 100%; overflow: hidden; margin-bottom: 20px"
                        >
                            <img src="$cover_img" style="width: 100%; height: 100%; object-fit: cover" />
                        </div>
                    </div>
                    <div class="text-center">
                        <div class="mb-4 animate__animated animate__fadeInUp animate__slower">Kepada Yth;<br />Bapak/Ibu/Saudara/i</div>
                        <div id="guestNameSlot" class="color-accent h5 font-weight-bold mb-4 animate__animated animate__fadeInUp animate__slower">Tamu Undangan</div>
                        <button type="button" class="btn-open-invitation btn btn-primary rounded-pill mb-4 animate__animated animate__pulse animate__infinite">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="margin-bottom: -5px;fill: #ffffff;"><path d="M20 4H4c-1.103 0-2 .897-2 2v12c0 1.103.897 2 2 2h16c1.103 0 2-.897 2-2V6c0-1.103-.897-2-2-2zm0 2v.511l-8 6.223-8-6.222V6h16zM4 18V9.044l7.386 5.745a.994.994 0 0 0 1.228 0L20 9.044 20.002 18H4z"></path></svg>
                        Buka Undangan
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</li>
cover;


$quotes = <<<quotes

<!-- quotes -->
<li class="swiper-slide invitation__slide">
    <div class="container-mobile" style="background-image: url(images/bg.jpg)">
        $frame
        <div class="d-flex justify-content-center align-items-center" style="height: 100%">
            <div>
                <div class="embed-quote animate__animated animate__fadeInDown animate__slower">
                    <img class=" mb-4" src="$quote_img" style="width: 100%; height: 100%; object-fit: cover" />
                </div>
                <div class="text-center animate__animated animate__fadeInUp animate__slower">
                    <div class="quotes mb-3">
                        $quote_isi
                    </div>
                    <div class="quotes mb-3">
                        $quote_arti
                    </div>
                <div class="font-italic">$quote_kutip</div>

                </div>
            </div>
        </div>
    </div>
</li>
quotes;

$video = <<<vid

<!-- video -->
<li class="swiper-slide invitation__slide">
    <div class="container-mobile" style="background-image: url(images/bg.jpg)">
        $frame
        <div class="d-flex justify-content-center align-items-center" style="height: 100%">
            <div style="width: 100%">
                <div>
                    <div class="embed-video animate__animated animate__fadeInDown animate__slower">
                        <iframe
                            width="560"
                            height="315"
                            src="$vid_src"
                            title="YouTube video player"
                            frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen=""
                        ></iframe>
                    </div>
                    <button class="btn-video btn btn-sm btn-pilled btn-block btn-accent mt-1 mb-4" >Edit Video</button>
                    <div class="text-center animate__animated animate__fadeInUp animate__slower">
                        
                    <div class="quotes mb-3">
                        $vid_msg
                    </div>
                    <div class="font-italic">$vid_kutip</div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</li>
vid;


if($switch_couple == 'on'){
    $couple = <<<coup
    
    <!-- couple -->
    <li class="swiper-slide invitation__slide">
        <div class="container-mobile" style="background-image: url(images/bg.jpg)">
            $frame
            <div class="d-flex justify-content-center align-items-center" style="height: 100%">
                <div>
                    <div>
                        <div class="embed-couple animate__animated animate__fadeInLeft animate__slower">
                            <img src="$boy_img" class="lightbox photo1" style="width: 100%; height: 100%; object-fit: cover" />
                        </div>
                        <div class="text-center mb-4 animate__animated animate__fadeInLeft animate__slower">
                            <div class="font-latin color-accent h4 mb-2">$boy</div>
                            <div>$boy_msg
                            </div>
                        </div>
                        <div class="embed-couple animate__animated animate__fadeInRight animate__slower">
                            <img src="$girl_img" class="lightbox photo2" style="width: 100%; height: 100%; object-fit: cover" />
                        </div>
                        <div class="text-center animate__animated animate__fadeInRight animate__slower">
                            <div class="font-latin color-accent h4 mb-2">$girl</div>
                            <div>$girl_msg</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </li>
    coup;

}else{
    $couple = <<<coup

<!-- couple -->
<li class="swiper-slide invitation__slide">
    <div class="container-mobile" style="background-image: url(images/bg.jpg)">
        $frame
        <div class="d-flex justify-content-center align-items-center" style="height: 100%">
            <div>
                <div>
                    <div style="width:159px;height:159px;"class="embed-couple animate__animated animate__fadeInRight animate__slower">
                        <img src="$girl_img" style="width: 100%; height: 100%; object-fit: cover" />
                    </div>
                    <div class="text-center animate__animated animate__fadeInRight animate__slower">
                        <div class="font-latin color-accent h4 mb-2">$girl</div>
                        <div>$girl_msg</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</li>
coup;
}



if($switch_acara == 'on'){
    $data_acara1 = <<<dataca
    <div class="text-center mb-4 animate__animated animate__fadeInLeft animate__slower">
                <div class="font-latin color-accent h4 mb-2">$acara_title</div>
                <div class="font-weight-bold">$acara_date</div>
                <div class="font-weight-bold">$acara_time</div>
                <div>$acara_alamat</div>
            </div>
    dataca;
}else{
    $data_acara1 = '';
}


$acara = <<<acara

<!-- acara -->
<li class="swiper-slide invitation__slide">
    <div class="container-mobile" style="background-image: url(images/bg.jpg)">
        $frame
        <div class="d-flex justify-content-center align-items-center" style="height: 100%">
            <div style="width: 100%">
                $data_acara1
            <div class="text-center mb-4 animate__animated animate__fadeInRight animate__slower">
                <div class="font-latin color-accent h4 mb-2">$acara_title2</div>
                <div class="font-weight-bold">$acara_date2</div>
                <div class="font-weight-bold">$acara_time2</div>
                <div>$acara_alamat2</div>
            </div>

                <div class="countdown-wrapper d-flex flex-column animate__animated animate__fadeInUp animate__slower" data-datetime="$acara_cd">
                    <div class="countdown text-center">
                        <div class="countdown-item day">
                            <div class="number">00</div>
                            <div class="text">Hari</div>
                        </div>
                        <div class="countdown-item hour">
                            <div class="number">00</div>
                            <div class="text">Jam</div>
                        </div>
                        <div class="countdown-item minute">
                            <div class="number">00</div>
                            <div class="text">Menit</div>
                        </div>
                        <div class="countdown-item second">
                            <div class="number">00</div>
                            <div class="text">Detik</div>
                        </div>
                    </div>
                    <a href="$save_date" target="_blank" class="animate__animated animate__pulse animate__infinite btn-countdown btn btn-sm btn-pilled btn-accent mt-2">Simpan Tanggal</a>
                </div>
            </div>
        </div>
    </div>
</li>
acara;

$map = <<<map

<!-- map -->
<li class="swiper-slide invitation__slide">
    <div class="container-mobile" style="background-image: url(images/bg.jpg)">
        $frame
        <div class="d-flex justify-content-center align-items-center" style="height: 100%">
            <div style="width: 100%">
                <div>
                    <div class="embed-map animate__animated animate__fadeInDown animate__slow">
                        <iframe
                            width="100%"
                            height="100%"
                            style="border: 0; position: absolute"
                            loading="lazy"
                            allowfullscreen=""
                            src="$map_view"
                            class="maps-embed"
                        >
                        </iframe>
                    </div>
                    <button class="btn-maps btn btn-sm btn-pilled btn-block btn-accent mt-1 mb-4" >Edit Denah Lokasi</button>
                    <div class="text-center animate__animated animate__fadeInUp animate__slow">
                        <div class="mb-3">$map_desc</div>
                        <a
                            href="$map_loc"
                            class="btn-maps-link btn btn-primary rounded-pill mb-4 animate__animated animate__pulse animate__infinite"
                            target="_blank"
                            >Petunjuk Ke Lokasi</a
                        >
                    </div>
                </div>
            </div>
        </div>
    </div>
</li>
map;

$protokol = <<<pro

<!-- protokol -->
<li class="swiper-slide invitation__slide">
    <div class="container-mobile" style="background-image: url(images/bg.jpg)">
        $frame
        <div class="d-flex justify-content-center align-items-center" style="height: 100%; width: 100%">
            <div>
                <div class="text-center">
                    <div class="font-latin color-accent h4 mb-2 animate__animated animate__fadeInDown animate__slow">Protokol Kesehatan</div>
                    <div class="mb-4 animate__animated animate__fadeInUp animate__slower">
                        $prokes_msg
                    </div>
                </div>
                <div class="d-flex justify-content-center text-center">
                    <div style="width: 50%" class="p-4 animate__animated animate__fadeInLeft animate__slow delay-4">
                        <div class="color-accent">
                            <svg width="80" height="80" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    id="pakaiMasker"
                                    d="M68.77,48.82c-.2-.16-.24-.59-.24-.9,0-4.12,0-8.25,0-12.38a3.22,3.22,0,0,1,1-2.49,4.7,4.7,0,0,0,1.1-5.46,14.37,14.37,0,0,0-1.45-2.67A46,46,0,0,0,55.8,12.35c-4.6-3-9.52-5-15.14-4.95-1.72.19-3.46.27-5.14.6-4.67.93-8.41,3.21-10.67,7.59a3.8,3.8,0,0,1-1.68,1.59,25.15,25.15,0,0,0-11.1,10.16,19,19,0,0,0-3,7.51,3,3,0,0,0,.91,3,1.83,1.83,0,0,1,.79,1.48c0,.48,0,1,.08,1.44.15,2.48.32,5,.46,7.43a.89.89,0,0,1-.22.65,6.53,6.53,0,0,0-2.28,5.76,9.15,9.15,0,0,0,8.7,8.66c.49,0,.57.25.74.61,1.12,2.34,2.11,4.76,3.45,7a23,23,0,0,0,10.14,8.51,17.13,17.13,0,0,0,10.45,1.81,24.84,24.84,0,0,0,13.16-7c3-2.86,4.57-6.55,6.14-10.24.15-.36.17-.75.75-.71,3.32.27,7.72-2.84,8.54-7.39C71.41,53.19,71.06,50.72,68.77,48.82ZM16.45,61.19A7.34,7.34,0,0,1,11,52.82a4,4,0,0,1,5-3.08.79.79,0,0,1,.47.54c0,.84,0,1.68,0,2.55-.68-.13-1.3-.3-1.93-.37-.82-.08-1.33.3-1.33.95s.44,1,1.14,1.08c1.69.15,2.26.78,2.46,2.48.16,1.39.41,2.78.64,4.3A10.46,10.46,0,0,1,16.45,61.19Zm5.34-3.08c-.57,1.59-1.16,3.17-1.73,4.69a39.32,39.32,0,0,1-1.39-9.31c1.14,1.48,2.12,2.74,3.08,4A.75.75,0,0,1,21.79,58.11ZM55.47,71.25a23.15,23.15,0,0,1-13.15,7.87,14.91,14.91,0,0,1-9.39-1.51,22.38,22.38,0,0,1-9.08-7.2c-2.3-3.21-2.05-6.68-.78-10.19a9.64,9.64,0,0,1,4.79-5.29,24.25,24.25,0,0,1,24.26,0,10.52,10.52,0,0,1,5.67,9.19A9.79,9.79,0,0,1,55.47,71.25Zm4.42-8.48c-.58-1.54-1.17-3.11-1.74-4.69a.63.63,0,0,1,0-.52c1-1.3,2-2.58,3.11-4.06A38.43,38.43,0,0,1,59.89,62.77Zm1.2-13.23c-1.35,2.19-2.73,4.35-4.13,6.57A24.34,24.34,0,0,0,40,49.67,24.31,24.31,0,0,0,23.14,56a32.22,32.22,0,0,1-4.35-6.54,1.73,1.73,0,0,1-.18-.8,36.51,36.51,0,0,1,5-17.33,17.28,17.28,0,0,1,6.88-6.63,3,3,0,0,0,.57-.35c3.54-3,7.66-3.13,11.91-2.33,6.77,1.27,11.26,5.48,14.34,11.4a36.92,36.92,0,0,1,4,15.12A2,2,0,0,1,61.09,49.54Zm2.52,11.62a10.73,10.73,0,0,1-1.14.11c.24-1.82.45-3.56.72-5.28.15-.93,1-1.17,1.73-1.41a3.76,3.76,0,0,1,.75-.1c.62-.06,1-.38,1-1a.94.94,0,0,0-1.11-1c-.7,0-1.39.22-2.15.34,0-.85,0-1.67,0-2.48a.88.88,0,0,1,.58-.59,4,4,0,0,1,5,4.05A7.36,7.36,0,0,1,63.61,61.16ZM55.68,45.74a.93.93,0,0,1,.16,1.36,1,1,0,0,1-1.36.24c-.43-.25-.86-.51-1.24-.75.07,1,.19,2,.17,2.91a2,2,0,0,1-2,1.94,1.94,1.94,0,0,1-2.15-1.72,22.87,22.87,0,0,1,.08-3,2.12,2.12,0,0,0-.3.07,1,1,0,0,1-1.32-.58,1,1,0,0,1,.6-1.31,6.69,6.69,0,0,1,6,0A6.34,6.34,0,0,1,55.68,45.74Zm-23.47.43c-.24.71-.79.81-1.44.61l-.11,0c.05.93.17,1.86.14,2.79a2,2,0,0,1-2,1.9,2,2,0,0,1-2.12-1.77A5,5,0,0,1,27,46.45c-.48.27-1,.52-1.44.82a1,1,0,0,1-1.5-.19,1,1,0,0,1,.31-1.46,6.76,6.76,0,0,1,7.06-.77C32,45.09,32.44,45.49,32.21,46.17Zm1.11-6c-.15.74-.73,1.09-1.8,1a19.35,19.35,0,0,0-6.82.15,1.2,1.2,0,0,1-.75,0c-.38-.22-.88-.49-1-.84s.3-.84.62-1a11.25,11.25,0,0,1,8.47-.92C33,38.86,33.47,39.46,33.32,40.21Zm23.82.43c-.16.64-.7.75-1.27.77a1,1,0,0,1-.25,0,22.6,22.6,0,0,0-7.43-.15,1.21,1.21,0,0,1-1.42-1,1.23,1.23,0,0,1,1-1.52c1.1-.26,2.21-.42,3.32-.63a14.15,14.15,0,0,1,5.26,1.35C56.87,39.66,57.3,40,57.14,40.64ZM54.35,60.45c-.37.53-1,.56-1.63,0A21.6,21.6,0,0,0,42.87,56c-4.72-.85-9,.4-13.08,2.73a23.76,23.76,0,0,0-2.5,1.74c-.57.43-1.1.61-1.65,0s-.32-1.06.34-1.59a23.49,23.49,0,0,1,13.94-5.26A23.5,23.5,0,0,1,54,58.91C54.51,59.33,54.77,59.82,54.35,60.45Z"
                                ></path>
                            </svg>
                        </div>
                        <div>Memakai<br />Masker</div>
                    </div>
                    <div style="width: 50%" class="p-4 animate__animated animate__fadeInRight animate__slow delay-4">
                        <div class="color-accent">
                            <svg width="80" height="80" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    id="cuciTangan"
                                    d="M40.24,8a6.36,6.36,0,1,1-6.36-6.35A6.36,6.36,0,0,1,40.24,8ZM13,10.85a3.49,3.49,0,1,0,3.49,3.49A3.49,3.49,0,0,0,13,10.85ZM37.43,23.34l1.71-1.23.15-.11c1.48-1.06,3-2.15,4.58-3.12,1.24-.76,2.11-.95,2.79-.61a1.16,1.16,0,0,1,.66.88,2.13,2.13,0,0,1-.52,1.74.64.64,0,0,0,.05.9.63.63,0,0,0,.9,0,3.43,3.43,0,0,0,.82-2.83,2.46,2.46,0,0,0-1.34-1.79c-1.46-.73-3,0-4,.67-1.6,1-3.15,2.09-4.65,3.16l-.15.12-1.72,1.23a.64.64,0,0,0,.38,1.15A.65.65,0,0,0,37.43,23.34ZM4,65.44,14,52.09a.35.35,0,0,0,.05-.08,11.78,11.78,0,0,0,1.69-5.86,11.65,11.65,0,0,0-1.2-4.48,10.52,10.52,0,0,1-1.1-3.86c-.06-2,0-3.43.08-5.1,0-.72.07-1.47.1-2.32l0-.77c0-1.16.08-2.36,0-3.54a3,3,0,0,1,.41-1.74,1.54,1.54,0,0,1,1.36-.69.91.91,0,0,1,.44.06c.82.36,1,1.81,1,2.67.12,1.26.26,2,.42,2.95.08.49.17,1,.27,1.71a3.39,3.39,0,0,0,1.77,2.72c2,1,3.29.17,4.68-.73.47-.3.94-.62,1.41-.94a.63.63,0,0,0,.17-.88.64.64,0,0,0-.89-.17L23.4,32c-1.41.91-2.14,1.32-3.41.67a2.09,2.09,0,0,1-1.08-1.78c-.11-.69-.2-1.24-.29-1.74-.15-.88-.28-1.64-.4-2.85s-.29-3.05-1.79-3.71a2.21,2.21,0,0,0-1-.18,2.82,2.82,0,0,0-2.38,1.27,4.12,4.12,0,0,0-.62,2.47c0,1.15,0,2.33-.06,3.46l0,.78c0,.84-.07,1.59-.1,2.3-.08,1.7-.15,3.17-.09,5.19a12,12,0,0,0,1.2,4.33,10.26,10.26,0,0,1,1.1,4,10.61,10.61,0,0,1-1.5,5.2L3,64.68a.64.64,0,0,0,.13.89.66.66,0,0,0,.38.12A.62.62,0,0,0,4,65.44ZM47.6,29.33c3-3,4.82-4.93,5.78-6a3.81,3.81,0,0,0,1.27-2.69,2.48,2.48,0,0,0-1-2,2.93,2.93,0,0,0-2.51-.52A8.79,8.79,0,0,0,48,19.92c-1.83,1.48-3.8,3.13-5.31,4.41a.64.64,0,0,0-.08.9.65.65,0,0,0,.9.08C45,24,47,22.38,48.78,20.91a7.52,7.52,0,0,1,2.71-1.58,1.62,1.62,0,0,1,1.4.28,1.22,1.22,0,0,1,.49,1,2.64,2.64,0,0,1-1,1.87c-1,1.06-2.77,3-5.73,6a.63.63,0,0,0,0,.9.66.66,0,0,0,.45.18A.6.6,0,0,0,47.6,29.33Zm3.72,3.77c1.66-2,2.83-3.42,3.49-4.39a3.9,3.9,0,0,0,.91-2.83A2.53,2.53,0,0,0,54.49,24a3,3,0,0,0-2.56-.19A8.69,8.69,0,0,0,49,26.05a.64.64,0,1,0,.92.88A7.77,7.77,0,0,1,52.41,25a1.67,1.67,0,0,1,1.43.11,1.23,1.23,0,0,1,.61.92,2.64,2.64,0,0,1-.7,2c-.63.92-1.77,2.36-3.4,4.28a.62.62,0,0,0,.07.89.61.61,0,0,0,.41.16A.65.65,0,0,0,51.32,33.1ZM20.15,75.31c2.34-4.07,5.65-9.13,7.78-12.22l.26-.38c1.3-1.9,2.09-3.05,4.06-3.85a.64.64,0,1,0-.48-1.18c-2.32.94-3.29,2.36-4.63,4.31l-.26.38c-2.14,3.11-5.48,8.2-7.84,12.3a.65.65,0,0,0,.23.87.62.62,0,0,0,.32.09A.66.66,0,0,0,20.15,75.31ZM54.46,36.25l.59-.88a3,3,0,0,0,0-3.57A2.36,2.36,0,0,0,54,31a3.17,3.17,0,0,0-3.18.72.64.64,0,0,0,.77,1c.82-.62,1.35-.77,2-.54a1.32,1.32,0,0,1,.53.43,1.8,1.8,0,0,1-.15,2c-.19.29-.38.58-.58.86a.65.65,0,0,0,.17.89.69.69,0,0,0,.36.11A.65.65,0,0,0,54.46,36.25ZM63,75.52a.64.64,0,0,0,.17-.89l-4.59-6.82-.63-1A10.62,10.62,0,0,0,54,62.67a6.94,6.94,0,0,0-4-.45c-.51.05-1,.1-1.48.1h0a32.37,32.37,0,0,1-12.83-3c-1.85-.8-3.81-1.77-6.18-3-.5-.27-1.05-.52-1.63-.79a12.17,12.17,0,0,1-3.1-1.76,1.64,1.64,0,0,1-.59-1.89,1.86,1.86,0,0,1,1.93-1,12.47,12.47,0,0,1,3.57,1,21.83,21.83,0,0,0,2.44.82c1.39.34,2.36.16,2.88-.54,1.14-1.5-.49-4.78-2.41-8.09l-.34-.6c-1.55-2.82-3.37-6.16-5.14-9.58L27,33.64c-.79-1.53-1.6-3.1-2.29-4.68-.55-1.25-.61-2.07-.21-2.65a1.08,1.08,0,0,1,.88-.48,2,2,0,0,1,1.52.7.64.64,0,0,0,.9.08.62.62,0,0,0,.08-.89,3.22,3.22,0,0,0-2.55-1.16,2.35,2.35,0,0,0-1.88,1c-.88,1.28-.37,2.83.09,3.88.7,1.63,1.53,3.22,2.33,4.76l.08.16c1.77,3.43,3.6,6.78,5.15,9.6.08.16.21.37.36.63,2.71,4.67,2.85,6.21,2.49,6.69-.18.24-.74.26-1.55.06a19.89,19.89,0,0,1-2.29-.77,13.67,13.67,0,0,0-3.94-1.07A3.13,3.13,0,0,0,23,51.29a2.89,2.89,0,0,0,.9,3.34,12.74,12.74,0,0,0,3.43,2c.56.26,1.09.5,1.55.75,2.41,1.3,4.4,2.29,6.28,3.1a33.64,33.64,0,0,0,13.34,3.13h0c.55,0,1.09-.05,1.6-.1a5.86,5.86,0,0,1,3.34.31,9.78,9.78,0,0,1,3.38,3.73c.21.33.42.67.64,1l4.59,6.82a.64.64,0,0,0,.53.29A.66.66,0,0,0,63,75.52ZM38.75,43.94a.62.62,0,0,0,.22-.87c-1.44-2.43-3.86-6.22-6.19-9.88S28,25.76,26.61,23.34a6.68,6.68,0,0,1-1.08-2.63A1.44,1.44,0,0,1,26,19.52a1,1,0,0,1,.92-.3c.67.1,1,.44,1.53,1.08,1.53,1.8,5.92,7.8,9.45,12.62,2.59,3.53,4.63,6.32,5.12,6.89a.64.64,0,0,0,1-.83c-.46-.53-2.59-3.44-5.06-6.81-3.54-4.84-8-10.86-9.51-12.69A3.54,3.54,0,0,0,27.07,18a2.36,2.36,0,0,0-2,.63,2.74,2.74,0,0,0-.81,2.26A8,8,0,0,0,25.51,24c1.45,2.43,3.86,6.21,6.2,9.88s4.73,7.43,6.17,9.84a.64.64,0,0,0,.55.31A.62.62,0,0,0,38.75,43.94Zm10-5.49a.65.65,0,0,0,.15-.89c-.47-.65-11.41-15.93-14.42-18.67A3.6,3.6,0,0,0,32,17.68a2.36,2.36,0,0,0-1.89.89,2.73,2.73,0,0,0-.52,2.34,8.25,8.25,0,0,0,1.65,3,.65.65,0,0,0,.9.1.63.63,0,0,0,.1-.89,7.1,7.1,0,0,1-1.41-2.47,1.48,1.48,0,0,1,.27-1.24,1.06,1.06,0,0,1,.87-.42,2.41,2.41,0,0,1,1.66.88C36.5,22.48,47.72,38.15,47.83,38.3a.62.62,0,0,0,.52.27A.63.63,0,0,0,48.72,38.45ZM77.26,65.13a.64.64,0,0,0,.07-.9,119,119,0,0,1-8.2-10.56C68.56,52.82,68,52,67.45,51.1c-.92-1.43-1.87-2.9-2.9-4.3a89.55,89.55,0,0,0-8.32-9.44L45.82,26.59l-.36-.37a15.22,15.22,0,0,0-2.32-2.11,4,4,0,0,0-2.75-.81,2,2,0,0,0-1.82,2.27.64.64,0,0,0,1.27-.13.7.7,0,0,1,.71-.88,2.91,2.91,0,0,1,1.87.6,13.82,13.82,0,0,1,2.12,1.94L55.32,38.24a89.79,89.79,0,0,1,8.2,9.31c1,1.37,1.95,2.83,2.85,4.24.55.85,1.12,1.74,1.7,2.6a122.13,122.13,0,0,0,8.29,10.66.64.64,0,0,0,.49.23A.65.65,0,0,0,77.26,65.13Zm-48.5-26.2a4.73,4.73,0,1,0,4.73,4.72A4.72,4.72,0,0,0,28.76,38.93Zm-8.28,4.72a1.93,1.93,0,1,0,1.93,1.93A1.93,1.93,0,0,0,20.48,43.65Zm.82-8.21A2.74,2.74,0,1,0,24,38.18,2.73,2.73,0,0,0,21.3,35.44Zm38.82,5.32A2.26,2.26,0,1,0,57.19,42,2.25,2.25,0,0,0,60.12,40.76Zm.25,10.85a4.09,4.09,0,1,0-5.31,2.28A4.1,4.1,0,0,0,60.37,51.61Z"
                                ></path>
                            </svg>
                        </div>
                        <div>Mencuci<br />Tangan</div>
                    </div>
                </div>
                <div class="d-flex justify-content-center text-center">
                    <div style="width: 50%" class="p-4 animate__animated animate__fadeInLeft animate__slow delay-8">
                        <div class="color-accent">
                            <svg width="80" height="80" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    id="jagaJarak"
                                    d="M49.42,58.75V56.26H29.05v2.49l-3.19-4.24,3.19-4.23v2.49H49.42V50.28l3.19,4.23ZM28.59,43.18V28.05a6.49,6.49,0,0,0-6.48-6.48H9a6.49,6.49,0,0,0-6.48,6.48V43.18a2.21,2.21,0,0,0,2,2.19h.09a2.07,2.07,0,0,0,2.09-2L7.09,31.3a.79.79,0,0,1,1.58,0V68.74a2.55,2.55,0,0,0,2.1,2.56,2.43,2.43,0,0,0,.38,0A2.48,2.48,0,0,0,13.62,69l.9-25.2a1.06,1.06,0,0,1,2.11,0L17.52,69A2.5,2.5,0,0,0,20,71.33l.38,0a2.56,2.56,0,0,0,2.1-2.56V31.33a.79.79,0,0,1,1.58,0l.36,12.06a2.07,2.07,0,0,0,2.08,2h.09A2.22,2.22,0,0,0,28.59,43.18ZM15.57,19a5.17,5.17,0,1,0-5.17-5.17A5.18,5.18,0,0,0,15.57,19ZM76.68,43.18V28.05a6.49,6.49,0,0,0-6.48-6.48H57.13a6.48,6.48,0,0,0-6.48,6.48V43.18a2.21,2.21,0,0,0,2,2.19h.09a2.08,2.08,0,0,0,2.09-2l.36-12.06a.79.79,0,0,1,1.58,0V68.74a2.55,2.55,0,0,0,2.1,2.56,2.34,2.34,0,0,0,.38,0A2.49,2.49,0,0,0,61.71,69l.9-25.2a1.06,1.06,0,0,1,2.11,0L65.61,69a2.5,2.5,0,0,0,2.48,2.3l.38,0a2.55,2.55,0,0,0,2.09-2.56V31.33a.8.8,0,0,1,.8-.8.79.79,0,0,1,.79.77l.36,12.06a2.06,2.06,0,0,0,2.08,2h.09A2.22,2.22,0,0,0,76.68,43.18ZM63.66,19a5.17,5.17,0,1,0-5.17-5.17A5.18,5.18,0,0,0,63.66,19Z"
                                ></path>
                            </svg>
                        </div>
                        <div>Menjaga<br />Jarak</div>
                    </div>
                    <div style="width: 50%" class="p-4 animate__animated animate__fadeInRight animate__slow delay-8">
                        <div class="color-accent">
                            <svg width="80" height="80" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path id="raksa" d="M43.87,42.61V33a1.68,1.68,0,1,0-3.36,0v9.63a5.12,5.12,0,1,0,3.36,0Z" transform="translate(-5.74 -5.38)" fill="#ed7281" />
                                <path
                                    id="bg"
                                    d="M70.71,25.81c-6-11.15-17.57-19.35-30.19-20.34S14.77,11.21,9,22.46c-10.84,21,7.37,47,28.46,51.41,9,1.9,18.87.23,26.16-5.36C76.05,59,78.12,39.65,70.71,25.81ZM42.77,57.93a4.15,4.15,0,0,1-1.15,0,10.49,10.49,0,0,1-3.91-20V19.7a4.48,4.48,0,1,1,9,0v4.13H43.41a.84.84,0,1,0,0,1.68h3.26v3.28H43.41a.84.84,0,1,0,0,1.68h3.26v3.28H43.41a.84.84,0,0,0,0,1.68h3.26V38a10.49,10.49,0,0,1-3.9,20Z"
                                    transform="translate(-5.74 -5.38)"
                                ></path>
                            </svg>
                        </div>
                        <div>Cek Suhu<br />Tubuh</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</li>
pro;

// ambil foto dari galery
if (empty($imgs)) {
    $galery = '';
} else {
    $imgs = array_map('basename', $imgs);
 
    $galery = <<<gul

<!-- galery -->
<li class="swiper-slide invitation__slide">
    <div class="container-mobile" style="background-image: url(images/bg.jpg)">
        $frame
        <div class="d-flex justify-content-center align-items-center" style="height: 100%">
            <div style="width: 100%">
                <div class="text-center mb-4 animate__animated animate__fadeInDown animate__slower">
                    <div class="font-latin color-accent h4 mb-2">Galeri Foto</div>
                </div>
                <div id="gallery-container" style="height:65vh; overflow-y:auto;">
gul;

    for ($i = 0; $i < count($imgs); $i++) {
        if ($i == (count($imgs) - 1)) {
            if ($i == 3 || $i == 6) {
                $galery .= <<<gak
            <div style="width: 33.333%; overflow: hidden; padding: 4px" class="animate__animated animate__zoomIn animate__slower">
                <div class="" style="overflow: hidden; width: 100%; height: 129px">
                    <img src="$galery_path$imgs[$i]?versi=$versi" style="width: 100%; height: 100%; object-fit: cover" class="lightbox gallery1" loading="lazy" />
                </div>
            </div>
            </div>
                </div>
            </div>
        </div>
    </li>
    gak;
            } elseif ($i == 4 || $i == 5) {
                $galery .= <<<gik
            <div style="width: 66.67%; overflow: hidden; padding: 4px" class="animate__animated animate__zoomIn animate__slower">
                <div class="" style="overflow: hidden; width: 100%; height: 129px">
                    <img src="$galery_path$imgs[$i]?versi=$versi" style="width: 100%; height: 100%; object-fit: cover" class="lightbox gallery1" loading="lazy"/>
                </div>
            </div>
            </div>
                </div>
            </div>
        </div>
    </li>
    gik;
            } else {
                $galery .= <<<gal
                    <div style="width: 33.333%; overflow: hidden; padding: 4px" class="animate__animated animate__zoomIn animate__slower">
                        <div class="" style="overflow: hidden; width: 100%; height: 100px">
                            <img src="$galery_path$imgs[$i]?versi=$versi" style="width: 100%; height: 100%; object-fit: cover" class="lightbox gallery1" loading="lazy"/>
                        </div>
                    </div>
                    </div>
                        </div>
                    </div>
                </div>
            </li>
            gal;
            }
        } elseif ($i == 3 || $i == 6) {
            $galery .= <<<gil
            <div style="width: 33.333%; overflow: hidden; padding: 4px" class="animate__animated animate__zoomIn animate__slower">
                <div class="" style="overflow: hidden; width: 100%; height: 129px">
                    <img src="$galery_path$imgs[$i]?versi=$versi" style="width: 100%; height: 100%; object-fit: cover" class="lightbox gallery1" loading="lazy"/>
                </div>
            </div>
            gil;
        } elseif ($i == 4 || $i == 5) {
            $galery .= <<<gel
        <div style="width: 66.67%; overflow: hidden; padding: 4px" class="animate__animated animate__zoomIn animate__slower">
            <div class="" style="overflow: hidden; width: 100%; height: 129px">
                <img src="$galery_path$imgs[$i]?versi=$versi" style="width: 100%; height: 100%; object-fit: cover" class="lightbox gallery1" loading="lazy"/>
            </div>
        </div>
        gel;
        } else {
            $galery .= <<<gol
        <div style="width: 33.333%; overflow: hidden; padding: 4px" class="animate__animated animate__zoomIn animate__slower">
            <div class="" style="overflow: hidden; width: 100%; height: 100px">
                <img src="$galery_path$imgs[$i]?versi=$versi" style="width: 100%; height: 100%; object-fit: cover" class="lightbox gallery1" loading="lazy"/>
            </div>
        </div>
        gol;
        }
    }
}

// ambil foto dari galery2
if (empty($imgs2)) {
    $galery2 = '';
} else {
    $imgs2 = array_map('basename', $imgs2);
 
    $galery2 = <<<gula

<!-- galery -->
<li class="swiper-slide invitation__slide">
    <div class="container-mobile" style="background-image: url(images/bg.jpg)">
        $frame
        <div class="d-flex justify-content-center align-items-center" style="height: 100%">
            <div style="width: 100%">
                <div class="text-center mb-4 animate__animated animate__fadeInDown animate__slower">
                    <div class="font-latin color-accent h4 mb-2">Galeri Foto</div>
                </div>
                <div id="gallery-container" style="height:65vh; overflow-y:auto;">
gula;

    for ($i = 0; $i < count($imgs2); $i++) {
        if ($i == (count($imgs2) - 1)) {
            if ($i == 3 || $i == 6) {
                $galery2 .= <<<gaka
            <div style="width: 33.333%; overflow: hidden; padding: 4px" class="animate__animated animate__zoomIn animate__slower">
                <div class="" style="overflow: hidden; width: 100%; height: 129px">
                    <img src="$galery_path2$imgs2[$i]?versi=$versi" style="width: 100%; height: 100%; object-fit: cover" class="lightbox gallery2" />
                </div>
            </div>
            </div>
                </div>
            </div>
        </div>
    </li>
    gaka;
            } elseif ($i == 4 || $i == 5) {
                $galery2 .= <<<gika
            <div style="width: 66.67%; overflow: hidden; padding: 4px" class="animate__animated animate__zoomIn animate__slower">
                <div class="" style="overflow: hidden; width: 100%; height: 129px">
                    <img src="$galery_path2$imgs2[$i]?versi=$versi" style="width: 100%; height: 100%; object-fit: cover" class="lightbox gallery2" />
                </div>
            </div>
            </div>
                </div>
            </div>
        </div>
    </li>
    gika;
            } else {
                $galery2 .= <<<gala
                    <div style="width: 33.333%; overflow: hidden; padding: 4px" class="animate__animated animate__zoomIn animate__slower">
                        <div class="" style="overflow: hidden; width: 100%; height: 100px">
                            <img src="$galery_path2$imgs2[$i]?versi=$versi" style="width: 100%; height: 100%; object-fit: cover" class="lightbox gallery2" />
                        </div>
                    </div>
                    </div>
                        </div>
                    </div>
                </div>
            </li>
            gala;
            }
        } elseif ($i == 3 || $i == 6) {
            $galery2 .= <<<gila
            <div style="width: 33.333%; overflow: hidden; padding: 4px" class="animate__animated animate__zoomIn animate__slower">
                <div class="" style="overflow: hidden; width: 100%; height: 129px">
                    <img src="$galery_path2$imgs2[$i]?versi=$versi" style="width: 100%; height: 100%; object-fit: cover" class="lightbox gallery2" />
                </div>
            </div>
            gila;
        } elseif ($i == 4 || $i == 5) {
            $galery2 .= <<<gela
        <div style="width: 66.67%; overflow: hidden; padding: 4px" class="animate__animated animate__zoomIn animate__slower">
            <div class="" style="overflow: hidden; width: 100%; height: 129px">
                <img src="$galery_path2$imgs2[$i]?versi=$versi" style="width: 100%; height: 100%; object-fit: cover" class="lightbox gallery2" />
            </div>
        </div>
        gela;
        } else {
            $galery2 .= <<<gola
        <div style="width: 33.333%; overflow: hidden; padding: 4px" class="animate__animated animate__zoomIn animate__slower">
            <div class="" style="overflow: hidden; width: 100%; height: 100px">
                <img src="$galery_path2$imgs2[$i]?versi=$versi" style="width: 100%; height: 100%; object-fit: cover" class="lightbox gallery2" />
            </div>
        </div>
        gola;
        }
    }
}

$rsvp = <<<rsvp

<!-- rsvp -->
<li class="swiper-slide invitation__slide">
    <div class="container-mobile" style="background-image: url(images/bg.jpg)">
        $frame
        <div class="d-flex justify-content-center align-items-center" style="height: 100%">
            <div style="width: 100%">
                <div>
                    <div class="animate__animated animate__fadeInRight animate__slower">
                        <div class="embed-rsvp-top">
                            <img src="$rsvp_img1" style="width: 100%; height: 100%; object-fit: cover" />
                        </div>
                    </div>
                    <div class="animate__animated animate__fadeInLeft animate__slower">
                        <div class="embed-rsvp-bottom">
                            <img src="$rsvp_img2" style="width: 100%; height: 100%; object-fit: cover" />
                        </div>
                    </div>
                    <div class="text-center">
                        <div class="mb-4 animate__animated animate__fadeInUp animate__slower">$rsvp_msg</div>

                        <button type="button" class="btn-rsvp btn btn-primary rounded-pill mb-4 animate__animated animate__pulse animate__infinite">Kirim Ucapan RSVP</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</li>
rsvp;

            // GIFT
$gift = <<<gift
    
    <!-- gift -->
    <li class="swiper-slide invitation__slide">
        <div class="container-mobile" style="background-image: url(images/bg.jpg)">
            $frame
            <div class="d-flex justify-content-center align-items-center" style="height: 100%">
                <div style="width: 100%" class="text-center">
                    <div class="font-latin color-accent h4 mb-2 animate__animated animate__fadeInDown animate__slower">Kirim Hadiah</div>
                    <div class="mb-4 animate__animated animate__fadeInDown animate__slower">
                        Doa Restu Anda merupakan karunia yang sangat berarti bagi kami. Namun jika Anda ingin memberi hadiah kami sediakan fitur berikut
                    </div>
                    <div style="display: flex">
                        <button type="button" class="btn-gift btn btn-block btn-primary rounded-pill animate__animated animate__pulse animate__infinite" style="max-width: 150px; margin: auto">Amplop Digital</button>
                        <button type="button" class="btn-gift btn btn-block btn-primary rounded-pill animate__animated animate__pulse animate__infinite" style="max-width: 150px; margin: auto">Kirim Kado</button>
                    </div>
                    <div class="gift-container mt-3 p-4 rounded animate__animated animate__zoomIn animate__slow">
                        <div class="embed-gift">
                            <img class="mb-4" src="$gift_barcode" style="width: 100%; height: 100%; object-fit: cover" />
                        </div>
    
                        <div class="text-center mb-2">
                            <div class="font-weight-bold h5 mb-0">$bank_rek</div>
                            <div>$bank_an</div>
                        </div>
                        
                    </div>
                    <div class="gift-container mt-3 p-4 rounded animate__animated animate__zoomIn animate__slow">
                        <div class="embed-gift">
                        <img class="mb-4" src="$gift_img" style="width: 100%; height: 100%; object-fit: cover" />
                        </div>
                        
                        <div class="text-center mb-2">
                            <div class="font-weight-bold h5 color-accent mb-2">$gift_title</div>
                            <div class="mb-0">$gift_alamat</div>
                        </div>
    
                    </div>
                </div>
            </div>
        </div>
    </li>
    gift;


$thx = <<<thx

<!-- thanks -->
<li class="swiper-slide invitation__slide">
    <div class="container-mobile" style="background-image: url(images/bg.jpg)">
        $frame
        <div class="watermark d-flex justify-content-center align-items-center" style="height: 100%">
            <div swtyle="width: 100%">
                <div class="text-center">
                    <div class="quotes mb-3 animate__animated animate__fadeInDown animate__slower">
                        $thx_txt
                    </div>
                    <div class="font-accent h4 color-accent animate__animated animate__fadeInUp animate__slow">$title_name</div>
                    <div class="watermark-placeholder mt-5"></div>
                </div>
            </div>
        </div>
    </div>
</li>
thx;

$sup = <<<sup

<!-- suport -->
<li class="swiper-slide invitation__slide">
    <div class="container-mobile" style="background-image: url(images/bg.jpg)">
        $frame
        <div class="watermark d-flex justify-content-center align-items-center" style="height: 100%">
            <div swtyle="width: 100%">
                <div class="text-center">
                <div class="quotes mb-3 animate__animated animate__fadeInDown animate__slower">
                Supported by
            </div>
            <div class="quotes mb-3">

                    <svg style="width:50px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 405 246.4"><defs><style>.cls-1a{fill:#a27b5c;}.cls-2a{fill:#2c3639;}.cls-3a{fill:#dcd7c9;}</style></defs><g id="Layer_1" data-name="Layer 2"><g id="logo_cerah" data-name="logo cerah">
                        <path class="cls-1a animate__animated animate__bounceInRight animate__slow" d="M112,246.4H400a5,5,0,0,0,5-5V27.23a5,5,0,0,0-8-4L109,237.39A5,5,0,0,0,112,246.4Z"/>
                        <path class="cls-2a animate__animated animate__bounceInDown animate__slower" d="M379.5,0H27.39a5,5,0,0,0-3,9L200.46,139.92a5,5,0,0,0,6,0L382.48,9A5,5,0,0,0,379.5,0Z"/>
                        <path class="cls-3a animate__animated animate__bounceInLeft animate__slow" d="M0,25.83V241.4a5,5,0,0,0,5,5H61.56a5,5,0,0,0,3-1l116.69-86.76a5,5,0,0,0,0-8L8,21.81A5,5,0,0,0,0,25.83Z"/></g></g>
                    </svg>
                    <svg style="width:150px;" class="animate__animated animate__zoomInRight animate__slower" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 292.59 48.62"><defs><style>.cls-1{font-size:40.52px;fill:#404e4f;font-family:Jost-Black, Jost;font-weight:800;}.cls-2{letter-spacing:-0.01em;}.cls-3{fill:#a27b5c;}.cls-4{fill:#dfbf96;}</style></defs><g id="Layer_2" data-name="Layer 2"><g id="logo_cerah" data-name="logo cerah"><text class="cls-1" transform="translate(0 34.44)">IN<tspan class="cls-2" x="47.41" y="0">V</tspan><tspan x="78.4" y="0">OITE</tspan><tspan class="cls-3" x="178.08" y="0">.</tspan><tspan class="cls-4" x="191.7" y="0">COM</tspan></text></g></g></svg>
            </div>
            <div class="font-italic animate__animated animate__fadeInDown animate__slow">
                <a href="https://ada-undangan.online/">invoite.com</a> | jasa pembuatan undangan online
            </div>
                    <div class="watermark-placeholder mt-5"></div>
                </div>
            </div>
        </div>
    </div>
</li>
sup;

$bar = <<<bar

<!-- QRcode -->
<li class="swiper-slide invitation__slide">
    <div id="barcode" class="container-mobile" style="background-image: url(images/bg.jpg)">
        $frame
        <div class="d-flex justify-content-center align-items-center" style="height: 100%">
            <div style="width: 100%">
            <div>
                <div id="bar-code" style="width: 100%; margin: auto; border-radius: 10px; overflow: hidden; margin-bottom: 20px; padding-bottom: 15px;padding-top: 15px; position: relative; background-color:#ffffffad;"
                    class="animate__animated animate__fadeInDown animate__slow map">
                    <div
                        style="position:relative; padding:10px; border-radius:10px; display: flex; margin-left: auto; margin-right:auto;">
                        <img id="qrcode"
                            style="padding:10px; border-radius:10px; display: block; margin-left: auto; margin-right:auto;"></img>
                        <img id="inerLogo" src="images/icon/logo-barcode.png" alt="logo-barcode"
                            style="position:absolute; z-index:900;top:41%;left:41%" ;>
                    </div>
                </div>
                <div class="text-center animate__animated animate__fadeInUp animate__slow">
                    <div class="mb-3">Tunjukan Barcode untuk registrasi</div>
                    <button id="download"
                        class="btn-maps-link btn btn-primary rounded-pill mb-4 animate__animated animate__pulse animate__infinite">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="margin-bottom: -5px;fill: #ffffff;transform: ;msFilter:;"><path d="M19 9h-4V3H9v6H5l7 8zM4 19h16v2H4z"></path></svg>
                        Download
                    </button>
                </div>
            </div>
            </div>
        </div>
    </div>
</li>
bar;

// --------------------------------------------------

// nav buton...

$navCover = <<<opn

<!-- nav_cover -->
<li class="swiper-slide menu-item">
    <svg width="24" height="24" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M3.95709826,8.41510662 L11.47855,3.81866389 C11.7986624,3.62303967 12.2013376,3.62303967 12.52145,3.81866389 L20.0429,8.41510557 C20.6374094,8.77841684 21,9.42493654 21,10.1216692 L21,19.0000642 C21,20.1046337 20.1045695,21.0000642 19,21.0000642 L4.99998155,21.0000673 C3.89541205,21.0000673 2.99998155,20.1046368 2.99998155,19.0000673 C2.99998155,19.0000663 2.99998155,19.0000652 2.99998155,19.0000642 L2.99999828,10.1216672 C2.99999935,9.42493561 3.36258984,8.77841732 3.95709826,8.41510662 Z" opacity="0.5" fill="currentColor"/>
        <path d="M13.8,12 C13.1562,12 12.4033,12.7298529 12,13.2 C11.5967,12.7298529 10.8438,12 10.2,12 C9.0604,12 8.4,12.8888719 8.4,14.0201635 C8.4,15.2733878 9.6,16.6 12,18 C14.4,16.6 15.6,15.3 15.6,14.1 C15.6,12.9687084 14.9396,12 13.8,12 Z" opacity="1" fill="currentColor"/>
    </svg>
    <span>Cover</span>
</li>
opn;

$navquotes = <<<quo

<!-- nav_quotes -->
<li class="swiper-slide menu-item">
    <svg width="24" height="24" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path opacity=".4" d="M16.191 2H7.81C4.77 2 3 3.78 3 6.83v10.33C3 20.26 4.77 22 7.81 22h8.381C19.28 22 21 20.26 21 17.16V6.83C21 3.78 19.28 2 16.191 2" fill="currentColor" />
        <path
            fill-rule="evenodd"
            clip-rule="evenodd"
            d="M8.08 6.65v.01a.78.78 0 0 0 0 1.56h2.989c.431 0 .781-.35.781-.791a.781.781 0 0 0-.781-.779H8.08Zm7.84 6.09H8.08a.78.78 0 0 1 0-1.561h7.84a.781.781 0 0 1 0 1.561Zm0 4.57H8.08c-.3.04-.59-.11-.75-.36a.795.795 0 0 1 .75-1.21h7.84c.399.04.7.38.7.79 0 .399-.301.74-.7.78Z"
            fill="currentColor"
        />
    </svg>
    <span>Quotes</span>
</li>
quo;

$navvideo = <<<vid

<!-- nav_video -->
<li class="swiper-slide menu-item">
    <svg width="24" height="24" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M6,3 L18,3 C19.1045695,3 20,3.8954305 20,5 L20,19 C20,20.1045695 19.1045695,21 18,21 L6,21 C4.8954305,21 4,20.1045695 4,19 L4,5 C4,3.8954305 4.8954305,3 6,3 Z M5.5,5 C5.22385763,5 5,5.22385763 5,5.5 L5,6.5 C5,6.77614237 5.22385763,7 5.5,7 L6.5,7 C6.77614237,7 7,6.77614237 7,6.5 L7,5.5 C7,5.22385763 6.77614237,5 6.5,5 L5.5,5 Z M17.5,5 C17.2238576,5 17,5.22385763 17,5.5 L17,6.5 C17,6.77614237 17.2238576,7 17.5,7 L18.5,7 C18.7761424,7 19,6.77614237 19,6.5 L19,5.5 C19,5.22385763 18.7761424,5 18.5,5 L17.5,5 Z M5.5,9 C5.22385763,9 5,9.22385763 5,9.5 L5,10.5 C5,10.7761424 5.22385763,11 5.5,11 L6.5,11 C6.77614237,11 7,10.7761424 7,10.5 L7,9.5 C7,9.22385763 6.77614237,9 6.5,9 L5.5,9 Z M17.5,9 C17.2238576,9 17,9.22385763 17,9.5 L17,10.5 C17,10.7761424 17.2238576,11 17.5,11 L18.5,11 C18.7761424,11 19,10.7761424 19,10.5 L19,9.5 C19,9.22385763 18.7761424,9 18.5,9 L17.5,9 Z M5.5,13 C5.22385763,13 5,13.2238576 5,13.5 L5,14.5 C5,14.7761424 5.22385763,15 5.5,15 L6.5,15 C6.77614237,15 7,14.7761424 7,14.5 L7,13.5 C7,13.2238576 6.77614237,13 6.5,13 L5.5,13 Z M17.5,13 C17.2238576,13 17,13.2238576 17,13.5 L17,14.5 C17,14.7761424 17.2238576,15 17.5,15 L18.5,15 C18.7761424,15 19,14.7761424 19,14.5 L19,13.5 C19,13.2238576 18.7761424,13 18.5,13 L17.5,13 Z M17.5,17 C17.2238576,17 17,17.2238576 17,17.5 L17,18.5 C17,18.7761424 17.2238576,19 17.5,19 L18.5,19 C18.7761424,19 19,18.7761424 19,18.5 L19,17.5 C19,17.2238576 18.7761424,17 18.5,17 L17.5,17 Z M5.5,17 C5.22385763,17 5,17.2238576 5,17.5 L5,18.5 C5,18.7761424 5.22385763,19 5.5,19 L6.5,19 C6.77614237,19 7,18.7761424 7,18.5 L7,17.5 C7,17.2238576 6.77614237,17 6.5,17 L5.5,17 Z" fill="currentColor" opacity="0.5"/>
        <path d="M11.3521577,14.5722612 L13.9568442,12.7918113 C14.1848159,12.6359797 14.2432972,12.3248456 14.0874656,12.0968739 C14.0526941,12.0460053 14.0088196,12.002002 13.9580532,11.9670814 L11.3533667,10.1754041 C11.1258528,10.0189048 10.8145486,10.0764735 10.6580493,10.3039875 C10.6007019,10.3873574 10.5699997,10.4861652 10.5699997,10.5873545 L10.5699997,14.1594818 C10.5699997,14.4356241 10.7938573,14.6594818 11.0699997,14.6594818 C11.1706891,14.6594818 11.2690327,14.6290818 11.3521577,14.5722612 Z" fill="currentColor"/>
    </svg>
    <span>Video</span>
</li>
vid;

$navcouple = <<<cou

<!-- nav_couple -->
<li class="swiper-slide menu-item">
    <svg width="24" height="24" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path
            opacity=".4"
            d="M11.776 21.837a36.258 36.258 0 0 1-6.328-4.957 12.668 12.668 0 0 1-3.03-4.805C1.278 8.535 2.603 4.49 6.3 3.288A6.282 6.282 0 0 1 12.007 4.3a6.291 6.291 0 0 1 5.706-1.012c3.697 1.201 5.03 5.247 3.893 8.787a12.67 12.67 0 0 1-3.013 4.805 36.58 36.58 0 0 1-6.328 4.957l-.25.163-.24-.163Z"
            fill="currentColor"
        />
        <path
            d="m12.01 22-.234-.163a36.316 36.316 0 0 1-6.337-4.957 12.667 12.667 0 0 1-3.048-4.805c-1.13-3.54.195-7.586 3.892-8.787a6.296 6.296 0 0 1 5.728 1.023V22ZM18.23 10a.719.719 0 0 1-.517-.278.818.818 0 0 1-.167-.592c.022-.702-.378-1.341-.994-1.59-.391-.107-.628-.53-.53-.948.093-.41.477-.666.864-.573a.384.384 0 0 1 .138.052c1.236.476 2.036 1.755 1.973 3.155a.808.808 0 0 1-.23.56.708.708 0 0 1-.537.213Z"
            fill="currentColor"
        />
    </svg>
    <span>Couple</span>
</li>
cou;

$navacara = <<<acr

<!-- nav_acara -->
<li class="swiper-slide menu-item">
    <svg width="24" height="24" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path
            fill-rule="evenodd"
            clip-rule="evenodd"
            d="M3 16.87V9.257h18v7.674C21 20.07 19.024 22 15.863 22H8.127C4.996 22 3 20.03 3 16.87Zm4.96-2.46a.822.822 0 0 1-.85-.799c0-.46.355-.84.81-.861.444 0 .81.351.82.8a.822.822 0 0 1-.78.86Zm4.06 0a.822.822 0 0 1-.85-.799c0-.46.356-.84.81-.861.445 0 .81.351.82.8a.822.822 0 0 1-.78.86Zm4.03 3.68a.847.847 0 0 1-.82-.85.831.831 0 0 1 .81-.849h.01c.465 0 .84.38.84.849 0 .47-.375.85-.84.85Zm-4.88-.85c.02.46.395.821.85.8a.821.821 0 0 0 .78-.859.817.817 0 0 0-.82-.801.855.855 0 0 0-.81.86Zm-4.07 0c.02.46.395.821.85.8a.821.821 0 0 0 .78-.859.817.817 0 0 0-.82-.801.855.855 0 0 0-.81.86Zm8.14-3.639c0-.46.356-.83.81-.84.445 0 .8.359.82.8a.82.82 0 0 1-.79.849.814.814 0 0 1-.84-.799v-.01Z"
            fill="currentColor"
        />
        <path
            opacity=".4"
            d="M3.003 9.257c.013-.587.063-1.752.156-2.127.474-2.11 2.084-3.45 4.386-3.64h8.911c2.282.2 3.912 1.55 4.386 3.64.092.365.142 1.539.155 2.127H3.003Z"
            fill="currentColor"
        />
        <path
            d="M8.305 6.59c.435 0 .76-.329.76-.77V2.771A.748.748 0 0 0 8.306 2c-.435 0-.76.33-.76.771V5.82c0 .441.325.77.76.77ZM15.695 6.59c.425 0 .76-.329.76-.77V2.771a.754.754 0 0 0-.76-.771c-.435 0-.76.33-.76.771V5.82c0 .441.325.77.76.77Z"
            fill="currentColor"
        />
    </svg>
    <span>Event</span>
</li>
acr;

$navmap = <<<map

<!-- nav_map -->
<li class="swiper-slide menu-item">
    <svg width="24" height="24" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path
            fill-rule="evenodd"
            clip-rule="evenodd"
            d="M8.532 2.937a6.89 6.89 0 0 1 7.034.058C17.71 4.327 19.012 6.705 19 9.26c-.05 2.54-1.447 4.929-3.193 6.775a18.727 18.727 0 0 1-3.358 2.82 1.173 1.173 0 0 1-.408.144.82.82 0 0 1-.39-.119 18.515 18.515 0 0 1-4.839-4.547A9.28 9.28 0 0 1 5 9.134c-.001-2.562 1.347-4.928 3.532-6.197Zm1.262 7.258a2.378 2.378 0 0 0 2.198 1.497 2.339 2.339 0 0 0 1.683-.701c.446-.454.696-1.07.694-1.713a2.423 2.423 0 0 0-1.462-2.243 2.346 2.346 0 0 0-2.594.52 2.455 2.455 0 0 0-.519 2.64Z"
            fill="currentColor"
        />
        <ellipse opacity=".4" cx="12" cy="21" rx="5" ry="1" fill="currentColor" />
    </svg>
    <span>Maps</span>
</li>
map;

$navprotocol = <<<pro

<!-- nav_protokol -->
<li class="swiper-slide menu-item">
    <svg width="24" height="24" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path
            opacity=".4"
            d="M12.086 22a.781.781 0 0 1-.359-.086L8.126 20.05c-1.022-.53-1.821-1.124-2.445-1.816a8.243 8.243 0 0 1-2.139-5.474L3.5 6.124a1.813 1.813 0 0 1 1.228-1.712l6.613-2.305c.392-.14.83-.142 1.23-.007l6.637 2.227c.743.248 1.245.93 1.25 1.695l.042 6.64a8.243 8.243 0 0 1-2.066 5.496c-.617.702-1.41 1.305-2.421 1.845l-3.57 1.906a.765.765 0 0 1-.357.091Z"
            fill="currentColor"
        />
        <path
            d="M11.32 14.32a.763.763 0 0 1-.537-.21l-1.916-1.844a.722.722 0 0 1-.006-1.04.77.77 0 0 1 1.068-.007l1.379 1.326 3.368-3.32a.77.77 0 0 1 1.068-.007c.297.286.3.752.007 1.04l-3.9 3.844a.76.76 0 0 1-.532.219Z"
            fill="currentColor"
        />
    </svg>
    <span>ProKes</span>
</li>
pro;

if (empty($imgs)) {
    $navgalery = '';
} else {
    $navgalery = <<<gal
    
    <!-- nav_galery -->
    <li class="swiper-slide menu-item">
        <svg width="24" height="24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path
                d="M22 14.702v1.384c0 .23-.01.461-.03.69-.28 3.16-2.475 5.224-5.641 5.224H7.67c-1.603 0-2.956-.52-3.928-1.464a4.593 4.593 0 0 1-.951-1.232c.33-.402.7-.842 1.062-1.283a98.56 98.56 0 0 0 1.573-1.925c.55-.682 2.004-2.476 4.018-1.634.41.17.771.41 1.102.621.812.542 1.152.702 1.723.391.632-.34 1.043-1.012 1.473-1.714.23-.372.461-.732.712-1.063 1.092-1.423 2.775-1.804 4.178-.962.702.42 1.303.952 1.864 1.493.12.12.24.231.35.341.15.15.652.652 1.153 1.133Z"
                fill="currentColor"
            />
            <path
                opacity=".4"
                d="M16.339 2H7.67C4.275 2 2 4.376 2 7.914v8.172c0 1.232.28 2.326.792 3.218.33-.402.701-.842 1.062-1.284a95.981 95.981 0 0 0 1.573-1.924c.551-.682 2.004-2.476 4.018-1.634.41.17.771.41 1.102.621.812.542 1.152.702 1.723.39.632-.34 1.043-1.011 1.473-1.714.23-.37.461-.73.712-1.062 1.092-1.423 2.775-1.804 4.178-.962.702.42 1.303.952 1.864 1.493.12.12.24.231.35.342.151.149.652.65 1.153 1.133V7.914C22 4.376 19.726 2 16.339 2Z"
                fill="currentColor"
            />
            <path d="M11.454 8.797a2.604 2.604 0 0 1-2.58 2.581c-1.408 0-2.58-1.173-2.58-2.581s1.172-2.582 2.58-2.582c1.407 0 2.58 1.174 2.58 2.582Z" fill="currentColor" />
        </svg>
        <span>Gallery</span>
    </li>
    gal;
}

if (empty($imgs2)) {
    $navgalery2 = '';
} else {
    $navgalery2 = <<<gal
    
    <!-- nav_galery -->
    <li class="swiper-slide menu-item">
        <svg width="24" height="24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path
                d="M22 14.702v1.384c0 .23-.01.461-.03.69-.28 3.16-2.475 5.224-5.641 5.224H7.67c-1.603 0-2.956-.52-3.928-1.464a4.593 4.593 0 0 1-.951-1.232c.33-.402.7-.842 1.062-1.283a98.56 98.56 0 0 0 1.573-1.925c.55-.682 2.004-2.476 4.018-1.634.41.17.771.41 1.102.621.812.542 1.152.702 1.723.391.632-.34 1.043-1.012 1.473-1.714.23-.372.461-.732.712-1.063 1.092-1.423 2.775-1.804 4.178-.962.702.42 1.303.952 1.864 1.493.12.12.24.231.35.341.15.15.652.652 1.153 1.133Z"
                fill="currentColor"
            />
            <path
                opacity=".4"
                d="M16.339 2H7.67C4.275 2 2 4.376 2 7.914v8.172c0 1.232.28 2.326.792 3.218.33-.402.701-.842 1.062-1.284a95.981 95.981 0 0 0 1.573-1.924c.551-.682 2.004-2.476 4.018-1.634.41.17.771.41 1.102.621.812.542 1.152.702 1.723.39.632-.34 1.043-1.011 1.473-1.714.23-.37.461-.73.712-1.062 1.092-1.423 2.775-1.804 4.178-.962.702.42 1.303.952 1.864 1.493.12.12.24.231.35.342.151.149.652.65 1.153 1.133V7.914C22 4.376 19.726 2 16.339 2Z"
                fill="currentColor"
            />
            <path d="M11.454 8.797a2.604 2.604 0 0 1-2.58 2.581c-1.408 0-2.58-1.173-2.58-2.581s1.172-2.582 2.58-2.582c1.407 0 2.58 1.174 2.58 2.582Z" fill="currentColor" />
        </svg>
        <span>Gallery+</span>
    </li>
    gal;
}

$navrsvp = <<<nsr

<!-- nav_rsvp -->
<li class="swiper-slide menu-item">
    <svg width="24" height="24" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path
            opacity=".4"
            d="M12.02 2C6.21 2 2 6.74 2 12c0 1.68.49 3.41 1.35 4.99.16.26.18.59.07.9l-.67 2.24c-.15.54.31.94.82.78l2.02-.6c.55-.18.98.05 1.491.36 1.46.86 3.279 1.3 4.919 1.3 4.96 0 10-3.83 10-10C22 6.65 17.7 2 12.02 2Z"
            fill="currentColor"
        />
        <path
            fill-rule="evenodd"
            clip-rule="evenodd"
            d="M11.98 13.29c-.71-.01-1.28-.58-1.28-1.29 0-.7.58-1.28 1.28-1.27.71 0 1.28.57 1.28 1.28 0 .7-.57 1.28-1.28 1.28Zm-4.61 0c-.7 0-1.28-.58-1.28-1.28 0-.71.57-1.28 1.28-1.28.71 0 1.28.57 1.28 1.28 0 .7-.57 1.27-1.28 1.28Zm7.94-1.28c0 .7.57 1.28 1.28 1.28.71 0 1.28-.58 1.28-1.28 0-.71-.57-1.28-1.28-1.28-.71 0-1.28.57-1.28 1.28Z"
            fill="currentColor"
        />
    </svg>
    <span>RSVP</span>
</li>
nsr;

$navgift = <<<gff

<!-- nav_gift -->
<li class="swiper-slide menu-item">
    <svg width="24" height="24" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M4,6 L20,6 C20.5522847,6 21,6.44771525 21,7 L21,8 C21,8.55228475 20.5522847,9 20,9 L4,9 C3.44771525,9 3,8.55228475 3,8 L3,7 C3,6.44771525 3.44771525,6 4,6 Z M5,11 L10,11 C10.5522847,11 11,11.4477153 11,12 L11,19 C11,19.5522847 10.5522847,20 10,20 L5,20 C4.44771525,20 4,19.5522847 4,19 L4,12 C4,11.4477153 4.44771525,11 5,11 Z M14,11 L19,11 C19.5522847,11 20,11.4477153 20,12 L20,19 C20,19.5522847 19.5522847,20 19,20 L14,20 C13.4477153,20 13,19.5522847 13,19 L13,12 C13,11.4477153 13.4477153,11 14,11 Z" fill="currentColor"/>
        <path d="M14.4452998,2.16794971 C14.9048285,1.86159725 15.5256978,1.98577112 15.8320503,2.4452998 C16.1384028,2.90482849 16.0142289,3.52569784 15.5547002,3.83205029 L12,6.20185043 L8.4452998,3.83205029 C7.98577112,3.52569784 7.86159725,2.90482849 8.16794971,2.4452998 C8.47430216,1.98577112 9.09517151,1.86159725 9.5547002,2.16794971 L12,3.79814957 L14.4452998,2.16794971 Z" fill="#000000" fill="currentColor" opacity="0.3"/>
    </svg>
    <span>Gift</span>
</li>
gff;

$navthx = <<<thx

<!-- nav_thanks -->
<li class="swiper-slide menu-item">
    <svg width="24" height="24" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M18,14 C16.3431458,14 15,12.6568542 15,11 C15,9.34314575 16.3431458,8 18,8 C19.6568542,8 21,9.34314575 21,11 C21,12.6568542 19.6568542,14 18,14 Z M9,11 C6.790861,11 5,9.209139 5,7 C5,4.790861 6.790861,3 9,3 C11.209139,3 13,4.790861 13,7 C13,9.209139 11.209139,11 9,11 Z" fill="currentColor" fill-rule="nonzero" opacity="0.3"/>
        <path d="M17.6011961,15.0006174 C21.0077043,15.0378534 23.7891749,16.7601418 23.9984937,20.4 C24.0069246,20.5466056 23.9984937,21 23.4559499,21 L19.6,21 C19.6,18.7490654 18.8562935,16.6718327 17.6011961,15.0006174 Z M0.00065168429,20.1992055 C0.388258525,15.4265159 4.26191235,13 8.98334134,13 C13.7712164,13 17.7048837,15.2931929 17.9979143,20.2 C18.0095879,20.3954741 17.9979143,21 17.2466999,21 C13.541124,21 8.03472472,21 0.727502227,21 C0.476712155,21 -0.0204617505,20.45918 0.00065168429,20.1992055 Z" fill="currentColor" fill-rule="nonzero"/>
    </svg>
    <span>Thanks</span>
</li>
thx;




$navsup = <<<suport

<!-- nav_suport -->
<li class="swiper-slide menu-item">
    <svg width="24" height="24" fill="none" xmlns="http://www.w3.org/2000/svg">
        <circle fill="currentColor" opacity="0.3" cx="12" cy="12" r="10"/>
        <path d="M12.4208204,17.1583592 L15.4572949,11.0854102 C15.6425368,10.7149263 15.4923686,10.2644215 15.1218847,10.0791796 C15.0177431,10.0271088 14.9029083,10 14.7864745,10 L12,10 L12,7.17705098 C12,6.76283742 11.6642136,6.42705098 11.25,6.42705098 C10.965921,6.42705098 10.7062236,6.58755277 10.5791796,6.84164079 L7.5427051,12.9145898 C7.35746316,13.2850737 7.50763142,13.7355785 7.87811529,13.9208204 C7.98225687,13.9728912 8.09709167,14 8.21352549,14 L11,14 L11,16.822949 C11,17.2371626 11.3357864,17.572949 11.75,17.572949 C12.034079,17.572949 12.2937764,17.4124472 12.4208204,17.1583592 Z" fill="currentColor"/>
    </svg>
    <span>Suported by</span>
</li>
suport;


$navbar = <<<navbar

<!-- nav_suport -->
<li class="swiper-slide menu-item">
    <svg width="24" height="24" fill="none" xmlns="http://www.w3.org/2000/svg">
        <rect x="0" y="0" width="24" height="24"/>
        <rect fill="currentColor" opacity="0.3" x="4" y="4" width="8" height="16"/>
        <path d="M6,18 L9,18 C9.66666667,18.1143819 10,18.4477153 10,19 C10,19.5522847 9.66666667,19.8856181 9,20 L4,20 L4,15 C4,14.3333333 4.33333333,14 5,14 C5.66666667,14 6,14.3333333 6,15 L6,18 Z M18,18 L18,15 C18.1143819,14.3333333 18.4477153,14 19,14 C19.5522847,14 19.8856181,14.3333333 20,15 L20,20 L15,20 C14.3333333,20 14,19.6666667 14,19 C14,18.3333333 14.3333333,18 15,18 L18,18 Z M18,6 L15,6 C14.3333333,5.88561808 14,5.55228475 14,5 C14,4.44771525 14.3333333,4.11438192 15,4 L20,4 L20,9 C20,9.66666667 19.6666667,10 19,10 C18.3333333,10 18,9.66666667 18,9 L18,6 Z M6,6 L6,9 C5.88561808,9.66666667 5.55228475,10 5,10 C4.44771525,10 4.11438192,9.66666667 4,9 L4,4 L9,4 C9.66666667,4 10,4.33333333 10,5 C10,5.66666667 9.66666667,6 9,6 L6,6 Z" fill="currentColor" fill-rule="nonzero"/>

    </svg>
    <span>QR Code</span>
</li>
navbar;
