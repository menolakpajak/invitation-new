<?php



// cek ada file di folder galery
$imgs = glob($galery_path . '*');
$imgs2 = glob($galery_path2 . '*');
if (!file_exists($quote_img)) {
    if (empty($imgs) || empty($quote_img) || $switch_galery == 'off') {
        $rsvp_img1 = 'images/rsvp/img1.jpg';
        $rsvp_img2 = 'images/rsvp/img2.jpg';
        $quote_img = 'images/quote/img.jpg';
    } else {
        $imgs = array_map('basename', $imgs);
        $rsvp_img1 = $galery_path . $imgs[array_rand($imgs)];
        $rsvp_img2 = $galery_path . $imgs[array_rand($imgs)];
        $quote_img = $galery_path . $imgs[array_rand($imgs)];
    }
} else {
    if (empty($imgs) || empty($quote_img)) {
        $rsvp_img1 = 'images/rsvp/img1.jpg';
        $rsvp_img2 = 'images/rsvp/img2.jpg';
    } else {
        $imgs = array_map('basename', $imgs);
        $rsvp_img1 = $galery_path . $imgs[array_rand($imgs)];
        $rsvp_img2 = $galery_path . $imgs[array_rand($imgs)];
    }
    $quote_img = $quote_img . "?versi=$versi";
}

$save_date = 'https://calendar.google.com/calendar/u/0/r/eventedit?';
$save_date .= 'text=' . urlencode($title . '-' . $title_name);
$tes = str_replace('-', '', $acara_cd);
$tes = str_replace(':', '', $tes);
$save_date .= '&dates=' . urlencode($tes . '/' . $tes);
$save_date .= '&details=&location=' . urlencode($map_desc);

$komentar = "";
if (!empty($com)) {
    foreach ($com as $comm) {
        $cName = ucwords($comm['nama']);
        $cKom = ucfirst($comm['comment']);
        $komentar .= "<div class=\"comment-lists animate__animated animate__fadeInUp animate__slower\">
                        <div class=\"g-comment\">
                            <div class=\"text-center\">
                            \"$cKom\"
                            </div>
                            <div class=\"text-center fw-bold\">
                                $cName
                            </div>
                        </div>
                    </div>";
    }
}


$frame = <<<frm
<div class="frame">
</div>
frm;

// <img class="frame-tl animate__animated animate__fadeInDown animate__slower" src="images/frame/frame-tl.png?versi=$versi" alt="frame" style="width: 70%" />
// <img class="frame-tr animate__animated animate__fadeInRight animate__slower" src="images/frame/frame-tr.png?versi=$versi" alt="frame" style="width: 30%" />
// <img class="frame-bl animate__animated animate__fadeInLeft animate__slower" src="images/frame/frame-bl.png?versi=$versi" alt="frame" style="width: 30%" />
// <img class="frame-br animate__animated animate__fadeInUp animate__slower" src="images/frame/frame-br.png?versi=$versi" alt="frame" style="width: 70%" />
// isian

$cover = <<<cover

<!-- cover -->
<li class="invitation__slide" id="cover" style="background-image: url('$cover_img');">
    <div class="container-mobile" style="height: 100%; background-size: cover;background-repeat: no-repeat;">
        <div style="display: flex; flex-direction: column; justify-content: space-between; align-items: center; height: 100%;">
            <div style="flex-grow: 1; display: flex; gap: .5rem; flex-direction: column; justify-content: flex-start; align-items: center;" class="text-center animate__animated animate__fadeInDown animate__slower cover-head">
                <div class="text-white font-latin" style="font-size: 1.35rem; text-transform: uppercase">$title</div>
                <div class="font-accent text-white" style="font-size: 2.5rem;">$title_name</div>
                <div style="font-size: 1rem;" class="font-latin text-white animate__animated animate__fadeInUp animate__slower">17 • DECEMBER • 2023</div>
                <div style="margin-top: 2rem; font-size: 1.2rem; min-width: 40vmin; padding: 0 1rem; background-color: rgb(255 255 255 / .5); border-radius: .5rem;" class="font-latin text-white font-weight-bold mb-4 animate__animated animate__fadeInUp animate__slower" >
                    <div style="font-weight: 400;">To:</div>
                    <div id="guestNameSlot">Guest</div>
                </div>
            </div>
            <div class="text-center animate__animated animate__fadeInUp animate__slower" style="margin-top: 5rem;">
                <button type="button" style="font-size: 1rem;" class="font-latin btn-open-invitation btn rounded-pill mb-4 animate__animated animate__pulse animate__infinite">
                OPEN INVITATION
                </button>
            </div>
        </div>
    </div>
</li>

<!-- fake cover -->
<li class="invitation__slide fake-cover" id="cover" style="background-image: url('$cover_img');">
    <div class="container-mobile" style="height: 100%; background-size: cover;background-repeat: no-repeat;">
        <div style="display: flex; flex-direction: column; justify-content: space-between; align-items: center; height: 100%;">
            <div style="flex-grow: 1; display: flex; gap: .5rem; flex-direction: column; justify-content: flex-start; align-items: center;" class="text-center animate__animated animate__fadeInDown animate__slower cover-head">
                <div class="text-white font-latin" style="font-size: 1.35rem; text-transform: uppercase">$title</div>
                <div class="font-accent text-white" style="font-size: 2.5rem;">$title_name</div>
                <div style="font-size: 1rem;" class="font-latin text-white animate__animated animate__fadeInUp animate__slower">17 • DECEMBER • 2023</div>
                <div style="margin-top: 2rem; font-size: 1.2rem; min-width: 40vmin; padding: 0 1rem; background-color: rgb(255 255 255 / .5); border-radius: .5rem;" class="font-latin text-white font-weight-bold mb-4 animate__animated animate__fadeInUp animate__slower" >
                    <div style="font-weight: 400;">To:</div>
                    <div id="guestNameSlot">Guest</div>
                </div>
            </div>
            <div class="text-center animate__animated animate__fadeInUp animate__slower" style="margin-top: 5rem;">
                <button type="button" style="font-size: 1rem;" class="font-latin btn-open-invitation btn rounded-pill mb-4 animate__animated animate__pulse animate__infinite">
                OPEN INVITATION
                </button>
            </div>
        </div>
    </div>
</li>
cover;


$quotes = <<<quotes

<!-- Wedding Passport -->
<li class="invitation__slide">
    <div class="container-mobile">
        $frame
        <div class="d-flex justify-content-center align-items-center" style="min-height: 100%">
            <div style="width: 100%">
            <div>
                <div class="header animate__animated animate__fadeInDown animate__slower text-center">
                    <p style="font-size: 2rem; margin: 0;" class="font-latin fw-bold">WEDDING</p>
                    <p style="font-size: 1.2rem;" class="font-latin fw-bold">PASSPORT</p>
                </div>
                <div class="compass animate__animated animate__fadeInUp animate__slower" style="aspect-ratio: 1/1; width: 100%; height: auto;">
                    
                    <svg id="Layer_1" style="width: 100%; height: auto; opacity: .5" width="1263" height="1263" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 800 800"><defs><style>.cls-1{opacity:0.72;}.cls-2{fill:#231f20;}.cls-3{fill:#fff;}</style></defs><g class="cls-1">
<path class="cls-2" d="M392.22,16.2h8.42l6.53,25.58h.13V16.2h6V58.93h-6.9l-8.06-31.19h-.12V58.93h-6Z"/></g><g class="cls-1"><path class="cls-2" d="M395.24,792q-2.5-2.78-2.5-8v-2.45h6.35v2.93q0,4.15,3.48,4.16a3.28,3.28,0,0,0,2.59-1,4.9,4.9,0,0,0,.89-3.27,9,9,0,0,0-1.23-4.73,22.34,22.34,0,0,0-4.51-4.91,27,27,0,0,1-5.8-6.62,13.51,13.51,0,0,1-1.65-6.69c0-3.37.86-6,2.57-7.84s4.19-2.78,7.44-2.78,5.65.93,7.3,2.78,2.47,4.51,2.47,8v1.77h-6.35v-2.2a4.94,4.94,0,0,0-.85-3.2,3.1,3.1,0,0,0-2.51-1c-2.24,0-3.35,1.36-3.35,4.09a8,8,0,0,0,1.25,4.33,23.94,23.94,0,0,0,4.54,4.88,25,25,0,0,1,5.8,6.66,14.72,14.72,0,0,1,1.59,7q0,5.25-2.59,8t-7.54,2.81Q397.74,794.73,395.24,792Z"/></g><g class="cls-1"><path class="cls-2" d="M20.61,382h6.47l3,32.84h.13L33.37,382h7.32l3.18,32.84H44L47,382h5.8l-4.33,42.72H40.08l-3-28.8h-.12l-3,28.8H25Z"/></g><g class="cls-1"><path class="cls-2" d="M769.42,382h18.31v6.1h-11.6v11.29h9.22v6.11h-9.22v13.12h11.6v6.1H769.42Z"/></g><g class="cls-1"><path class="cls-2" d="M408.58,404.29a6.57,6.57,0,0,0-.53-1.14,1.35,1.35,0,0,0-.14-.22,4,4,0,0,0-.35-.49,1.44,1.44,0,0,0-.22-.31,9.35,9.35,0,0,0-.89-.89,7.68,7.68,0,0,0-1-.71,7.17,7.17,0,0,0-2.34-.85l-.53-.07c-.22,0-.46,0-.67,0h0a7.06,7.06,0,0,0-1.24.11,5.88,5.88,0,0,0-1.2.32,5.64,5.64,0,0,0-1.14.53,7.8,7.8,0,0,0-1,.71c-.15.16-.31.29-.45.43s-.27.3-.43.46l0,.05a8.34,8.34,0,0,0-.67,1,7.17,7.17,0,0,0-.85,2.34,6.22,6.22,0,0,0-.11,1.24v0c0,.22,0,.45,0,.67a4.85,4.85,0,0,0,.08.53,7.17,7.17,0,0,0,.85,2.34,7.8,7.8,0,0,0,.71,1,5.21,5.21,0,0,0,.71.7,1.49,1.49,0,0,1,.17.18,1.81,1.81,0,0,0,.32.22,3.9,3.9,0,0,0,.71.49,5.64,5.64,0,0,0,1.14.53,5.88,5.88,0,0,0,1.2.32,7.06,7.06,0,0,0,1.24.11c.24,0,.47,0,.71,0a3.35,3.35,0,0,0,.53-.07h0a5.7,5.7,0,0,0,1.18-.32,5.91,5.91,0,0,0,1.14-.53,7.68,7.68,0,0,0,1-.71c.16-.16.32-.29.46-.43a2.64,2.64,0,0,0,.35-.4s0,0,.08-.05a7.8,7.8,0,0,0,.71-1,6.57,6.57,0,0,0,.53-1.14,5.12,5.12,0,0,0,.31-1.18v0a4.85,4.85,0,0,0,.08-.53c0-.24,0-.47,0-.71a6.21,6.21,0,0,0-.12-1.24A5.29,5.29,0,0,0,408.58,404.29Z"/><path class="cls-2" d="M667.3,398.41a264,264,0,0,0-73.6-174.2l7-9.58c1.59-2.17,6.71-8.65,7.2-10a2,2,0,0,0-2.34-2.68.89.89,0,0,0-.29.12,1.28,1.28,0,0,0-.28.16s0,0-.06,0a.1.1,0,0,1,0,0l-19.1,14a263.93,263.93,0,0,0-171.91-73.51l-11.47-62-10.14,62A264,264,0,0,0,219,216.66l-18.72-14.31-.08-.06-.15-.09-.15-.09a1.89,1.89,0,0,0-1.31-.18l-.14,0-.12,0-.25.12s-.08.07-.12.1-.11,0-.15.07-.08.1-.13.14-.11.07-.15.12a2,2,0,0,0-.12.19,1.83,1.83,0,0,0-.16.26s0,0,0,.07a.54.54,0,0,0-.08.19.57.57,0,0,0-.06.27.66.66,0,0,0,0,.14,1.13,1.13,0,0,0,0,.18,2.22,2.22,0,0,0,0,.38.19.19,0,0,1,0,.07l0,.09a.61.61,0,0,0,0,.13l.12.26a1.27,1.27,0,0,0,.17.27l14.37,18.81a263.94,263.94,0,0,0-73.92,173.57l-62,10.16s62,8.88,62,8.89a264,264,0,0,0,73.61,174.2l-14,19.1a2.05,2.05,0,0,0,.32,2.82c1.92,1.48,6.22-2.8,7.71-3.88l9.48-6.94a49.79,49.79,0,0,1,4.37-3.19,263.89,263.89,0,0,0,171.91,73.5l11.32,62.06,10.3-62a264.07,264.07,0,0,0,173.28-73.9L605,612.61a1.9,1.9,0,0,0,.34.2,2,2,0,0,0,.88.19,1.88,1.88,0,0,0,.46-.06s0,0,.08,0l.13,0,.12,0a1.93,1.93,0,0,0,.4-.25,2.16,2.16,0,0,0,.27-.25,1.08,1.08,0,0,0,.11-.18,2.46,2.46,0,0,0,.17-.27s0,0,0-.06a.64.64,0,0,0,.08-.19.57.57,0,0,0,.06-.27.68.68,0,0,0,0-.14,1.11,1.11,0,0,0,0-.19,1.91,1.91,0,0,0-.06-.43.88.88,0,0,0,0-.15.94.94,0,0,0-.07-.22c0-.08-.07-.18-.11-.26s-.08-.1-.1-.14l-.09-.1S593.35,591,593.36,591a264,264,0,0,0,73.9-173.56l62-10.16ZM265.83,247.56l9.43,11.23-.53.46h0l-11.88-9.07Q264.38,248.79,265.83,247.56ZM541,249.05l-7.78,5.69,6-7.19C539.87,248,540.45,248.54,541,249.05Zm37.51,191.42L593,443a191.8,191.8,0,0,1-21.69,59.57l-12.72-7.34A176.45,176.45,0,0,0,578.54,440.47Zm-21.91,58.2L569.34,506a191.43,191.43,0,0,1-19.83,27.64l-9.13-11.95A175.55,175.55,0,0,0,556.63,498.67Zm-115.16-11,47.07,36a142.65,142.65,0,0,1-20.94,13h0a7.53,7.53,0,1,0-13.33,5.89h0A140.81,140.81,0,0,1,432,549.06l9.51-61.38Zm87.12,66.9-.75-.9h0l.94.72ZM334.43,588.85a192.64,192.64,0,0,1-54.87-31.75l5.62-6.7,4.94-3.61A177.73,177.73,0,0,0,339.45,575ZM254.27,532.1A192.67,192.67,0,0,1,235.77,506l12.71-7.34a181.41,181.41,0,0,0,14.73,21.21h0Zm-27.7-157.69-14.47-2.56a191.72,191.72,0,0,1,21.7-59.58l12.71,7.35A176.61,176.61,0,0,0,226.57,374.41Zm21.91-58.2-12.71-7.34a192.27,192.27,0,0,1,19.84-27.64l9.12,11.94A177,177,0,0,0,248.48,316.21Zm28-55.91.76.91-1-.73ZM470.68,226a192.59,192.59,0,0,1,54.88,31.75l-5.63,6.7L515,268.09a177.64,177.64,0,0,0-49.34-28.25Zm80.16,56.75a190.92,190.92,0,0,1,18.5,26.09l-12.71,7.34A178.37,178.37,0,0,0,541.91,295h0ZM420.76,352.59l-7,19.33v0a35.51,35.51,0,0,0-4.79-1.26v0l3.57-20.28a55.68,55.68,0,0,1,8.24,2.2Zm-36.64,22a0,0,0,0,1,0,0L373.82,356.7h0a57.43,57.43,0,0,1,7.72-3.6h0l7,19.32s0,0,0,0A38.19,38.19,0,0,0,384.12,374.55Zm3-47,3.69,20.93h0c-.42.06-.83.15-1.22.23a53.52,53.52,0,0,0-7.36,2.05l-7.27-20A76.6,76.6,0,0,1,387.14,327.53Zm4.09,23.21-.39-.29h0l.31-.05h0Zm1.39-.61a55,55,0,0,1,8.49-.73V370c-.6,0-1.2,0-1.79.07a29.68,29.68,0,0,0-3.13.36v0Zm-15,28.91,0,0c-.62.55-1.24,1.1-1.82,1.67s-1.12,1.2-1.67,1.82c0,0,0,0,0,0l-15.56-13-.11-.11-.08-.07h0c.22-.26.44-.51.65-.77.73-.81,1.48-1.59,2.23-2.36,1-1,2-1.95,3.15-2.87h0Zm-45.19-13.23a80.64,80.64,0,0,1,7.2-10.3L356,369.17c-.1.14-.22.27-.33.4a58.89,58.89,0,0,0-4.76,6.87Zm-3.95,7.58.36.47-.61.09C328.34,373.76,328.42,373.57,328.51,373.39Zm19.71,13a54.44,54.44,0,0,1,3.6-7.71h0L369.64,389h0a38.19,38.19,0,0,0-2.1,4.48l0,0-19.32-7Zm-5.67,21.05h0a49.66,49.66,0,0,0,.32,5.59,32.27,32.27,0,0,0,.45,3.23h0L322.38,420a80.76,80.76,0,0,1-1.1-12.53Zm5.16,18.17a53,53,0,0,1-2.19-8.22h0l20.26-3.58h0a34.74,34.74,0,0,0,1.26,4.79h0l-19.33,7ZM357.45,443a56.84,56.84,0,0,1-4.88-7h0l17.81-10.29,0,0a34.73,34.73,0,0,0,2.84,4.06h0L357.45,443Zm45.13.45c1,0,2.05-.08,3.07-.17.62-.06,1.23-.17,1.85-.27v0l3.58,20.28a52.64,52.64,0,0,1-8.48.73h0V443.47Zm17-4.56a0,0,0,0,1,0,0l10.28,17.82a52,52,0,0,1-7.71,3.62h0l-7-19.34,0,0A38.19,38.19,0,0,0,419.58,438.91ZM412.87,465h0c.3,0,.59-.09.89-.15a59,59,0,0,0,7.68-2.12l7.27,20a79,79,0,0,1-12.15,3.23Zm13.18-30.59s0,0,0,0c.62-.55,1.24-1.09,1.82-1.67s1.13-1.2,1.66-1.83l0,0,15.74,13.21h0c-.88,1.07-1.85,2.11-2.87,3.15s-2,1.95-3.15,2.88h0Zm45.19,13.23A80.64,80.64,0,0,1,464,458l-16.3-13.67a53.16,53.16,0,0,0,5.08-7.26h0ZM455.5,427a52.06,52.06,0,0,1-3.62,7.72l-17.82-10.29h0a38.19,38.19,0,0,0,2.1-4.48l0,0,19.34,7Zm-38.65-18.36c0,.22-.06.45-.1.67a12.88,12.88,0,0,1-.69,2.56,15.8,15.8,0,0,1-1.1,2.4,14,14,0,0,1-1.52,2.14.28.28,0,0,1-.06.08,11.61,11.61,0,0,1-.82.91,10.37,10.37,0,0,1-1,.88,14.56,14.56,0,0,1-2.14,1.52,15.8,15.8,0,0,1-2.4,1.1,12.88,12.88,0,0,1-2.56.69c-.22,0-.46.08-.67.1-.42.06-.83.1-1.24.12h-.71a14.19,14.19,0,0,1-2.62-.23,12.88,12.88,0,0,1-2.56-.69,15.8,15.8,0,0,1-2.4-1.1,14,14,0,0,1-2.14-1.52.7.7,0,0,1-.24-.21,9.89,9.89,0,0,1-.94-.89,5.59,5.59,0,0,1-.69-.77,13.38,13.38,0,0,1-1.52-2.14,14.88,14.88,0,0,1-1.1-2.4,15.41,15.41,0,0,1-.91-4.47c0-.24,0-.47,0-.71s0-.43,0-.65a12.91,12.91,0,0,1,.22-2,12.24,12.24,0,0,1,.69-2.56,14.88,14.88,0,0,1,1.1-2.4,14.7,14.7,0,0,1,1.48-2.1s0,0,0,0a11.28,11.28,0,0,1,1.87-1.87,14,14,0,0,1,2.14-1.52,15.8,15.8,0,0,1,2.4-1.1,14.76,14.76,0,0,1,4.53-.9c.22,0,.43,0,.65,0s.47,0,.71,0a12.13,12.13,0,0,1,1.91.21,12.88,12.88,0,0,1,2.56.69,15.8,15.8,0,0,1,2.4,1.1,14.56,14.56,0,0,1,2.14,1.52,11.56,11.56,0,0,1,1.65,1.63.64.64,0,0,1,.22.24,6.89,6.89,0,0,1,.61.77,12.52,12.52,0,0,1,.91,1.37,15.8,15.8,0,0,1,1.1,2.4,12.88,12.88,0,0,1,.69,2.56,15.19,15.19,0,0,1,.23,2.62c0,.24,0,.47,0,.71C416.94,407.85,416.9,408.27,416.85,408.68ZM458.17,396h0l-20.27,3.58h0a35.12,35.12,0,0,0-1.26-4.79h0L456,387.8A54.71,54.71,0,0,1,458.17,396Zm3,9.95c0-.86,0-1.68-.1-2.53a50.64,50.64,0,0,0-.69-6.29h0l20.93-3.69a80.57,80.57,0,0,1,1.1,12.52Zm-14.92-35.55s0,0,0,0l.14.2,0,0a53.16,53.16,0,0,1,4.68,6.72l-17.82,10.29s0,0,0,0a34.6,34.6,0,0,0-2.7-3.89,2.09,2.09,0,0,0-.14-.17h0l15.76-13.22Zm-15.08-13a57.61,57.61,0,0,1,7,4.88h0l-13.22,15.76a0,0,0,0,0,0,0,35.59,35.59,0,0,0-4.06-2.84l0,0,10.29-17.82Zm-65.64,43.63h0c-.16,1-.29,2.08-.36,3.13-.05.59-.06,1.19-.07,1.79H344.52a55.47,55.47,0,0,1,.73-8.49Zm7,54.93a51.15,51.15,0,0,1-7-4.88h0l13.22-15.76s0,0,0,0a34.73,34.73,0,0,0,4.06,2.84l0,0L372.55,456Zm18.62,7.05a54.75,54.75,0,0,1-8.24-2.19L390,441.54v0a34.74,34.74,0,0,0,4.79,1.26,0,0,0,0,0,0,0l-3.58,20.27Zm47-50.68h0c.1-.61.21-1.23.27-1.85.09-1,.17-2,.17-3.07h20.59a53.43,53.43,0,0,1-.73,8.48Zm142.28-25.57c-.34-3-.74-5.83-1.19-8.53l14.44-2.55c.72,4.38,1.3,8.76,1.7,13.07Zm-1.91-12.4a176.52,176.52,0,0,0-19.94-54.79l12.72-7.35A192,192,0,0,1,593,371.85Zm-39-76.11a176.88,176.88,0,0,1,14.76,21.56A173,173,0,0,1,575.05,377c.53,2.93,1,6,1.37,9.24L547,382.33h0a144.3,144.3,0,0,0-8.2-29.09l0,0a7.49,7.49,0,0,0-5.6-12.32v0a143.39,143.39,0,0,0-11.28-18.48Zm-8.42,42.82v0a7.52,7.52,0,1,0,6.13,13.51h0A142.34,142.34,0,0,1,545,382.05h0l-60.78-8.12h0l36.49-49.87A143.74,143.74,0,0,1,531.07,341.12Zm-53.84,37.12.07.19v0l-20,7.28a54.12,54.12,0,0,0-3.76-8L472,367.09a76.9,76.9,0,0,1,3.88,7.76C476.35,376,476.81,377.1,477.23,378.24ZM446.81,368c-.66-.78-1.43-1.61-2.31-2.51a54,54,0,0,0-4-3.74h0l13.65-16.29c1.93,1.66,3.72,3.33,5.32,5l0,0,0,.05h0c1.21,1.24,2.37,2.52,3.48,3.81ZM378.73,229.94a178.91,178.91,0,0,0-35.58,8.54l-5-13.81a193.47,193.47,0,0,1,42.94-9.8Zm-39.28,9.9A177,177,0,0,0,289,269l-9.44-11.25A192.72,192.72,0,0,1,334.43,226Zm3.17,3,.13-.05A174.29,174.29,0,0,1,378.1,234l-4.61,29.74a143.15,143.15,0,0,0-24.13,7.07h0A7.51,7.51,0,0,0,336,275.58a8.13,8.13,0,0,0,.12,1.22h0A143.51,143.51,0,0,0,314.94,290L291.5,272.07A173.07,173.07,0,0,1,342.62,242.84Zm-5.95,35.87h0a7.53,7.53,0,0,0,13.74-6.16h0a140.92,140.92,0,0,1,22.75-6.73l-9.51,61.37-47.09-36A142.81,142.81,0,0,1,336.67,278.71Zm24.26,58.63,10.63,18.4a54.3,54.3,0,0,0-7.26,5.09l-13.67-16.29A80.25,80.25,0,0,1,360.93,337.34ZM224.66,428.07c.35,3,.74,5.82,1.2,8.53l-14.44,2.55c-.73-4.4-1.3-8.78-1.7-13.08Zm1.91,12.4a176.42,176.42,0,0,0,19.94,54.79L233.8,502.6A191.53,191.53,0,0,1,212.1,443Zm39.05,76.11A175.67,175.67,0,0,1,250.87,495h0a172.78,172.78,0,0,1-20.8-57.15h0c-.53-2.94-1-6-1.37-9.24l29.43,3.94h0a144.32,144.32,0,0,0,7.42,27h0a7.53,7.53,0,0,0,5.16,13c.18,0,.35,0,.53-.05l0,0a144.68,144.68,0,0,0,12,19.92Zm7.62-44.43h0a7.52,7.52,0,0,0-2.53-14.61,7.38,7.38,0,0,0-3.47.88l0,0a138.7,138.7,0,0,1-7-25.54h0L321,441h0l-36.49,49.87A143.23,143.23,0,0,1,273.24,472.15Zm54.06-34.83c-.32-.77-.62-1.56-.91-2.34l20-7.27a54.3,54.3,0,0,0,3.78,8l-18.41,10.63c-1.15-2-2.22-4.08-3.25-6.33a1,1,0,0,0-.07-.15C328,439.05,327.66,438.21,327.3,437.32Zm29.59,8.1h0a0,0,0,0,1,0,0,2.41,2.41,0,0,0,.41.47c1.18,1.34,2.26,2.48,3.31,3.47s1.73,1.65,2.52,2.3h0L349.5,468c-1.31-1.12-2.62-2.3-3.88-3.55,0,0,0,0,0,0h0l0,0c-1.63-1.58-3.29-3.37-4.94-5.27Zm69.49,139.52A178.34,178.34,0,0,0,462,576.39l5,13.82A192.89,192.89,0,0,1,424.05,600ZM465.66,575a176.68,176.68,0,0,0,50.46-29.19l9.44,11.25a192.58,192.58,0,0,1-54.88,31.76Zm-3.17-3-.13,0A174,174,0,0,1,427,580.87l4.62-29.74A142,142,0,0,0,455.81,544h0a7.5,7.5,0,0,0,11.81-5.24h0a143.42,143.42,0,0,0,22.52-13.88l23.43,17.92A173.32,173.32,0,0,1,462.49,572.05Zm-19.72-95.93-10.63-18.4a53.4,53.4,0,0,0,7.26-5.09l13.67,16.29A80.05,80.05,0,0,1,442.77,476.12ZM597.4,389.07c-.4-4.51-1-9.1-1.77-13.68l14.45-2.55c1,6.06,1.76,12.17,2.22,18.23ZM595,371.51A193.67,193.67,0,0,0,573,311.29l12.7-7.33a207,207,0,0,1,23.66,65Zm-23.9-63.63a194.42,194.42,0,0,0-19-26.73l0,0L561,269a210.24,210.24,0,0,1,22.82,31.55Zm-11.82-43.24,0,.08-21.32,29.12-18.44,25.21-1.22,1.66-38.5,52.62h0l-.25,0v0a85.21,85.21,0,0,0-12.88-20.87c-.93-1.11-1.92-2.21-2.93-3.28l42.5-42.49,1.39-1.4,72.51-72.51,1.43,1.5Zm-32.41-8.37a194.71,194.71,0,0,0-55.47-32.09l5-13.78a208.74,208.74,0,0,1,59.88,34.65Zm-59.16-33.45a195.46,195.46,0,0,0-42.9-9.84v0L422.44,198a208.87,208.87,0,0,1,50.23,11Zm-.67,1.85-5,13.81a178.35,178.35,0,0,0-34.56-8.39L425.07,215A193.36,193.36,0,0,1,467,224.67Zm-4.6,18.13.1,0A173.93,173.93,0,0,1,511.7,270.5l-24.08,17.62h0a144.31,144.31,0,0,0-26.75-15.18h0A7.53,7.53,0,0,0,448,267.41c-.16.16-.27.34-.41.5h0a140.57,140.57,0,0,0-14.9-3.93L428,234.16A173.75,173.75,0,0,1,462.39,242.8Zm-15.93,26.84h0a7.52,7.52,0,1,0,14,5.29l0,0a144,144,0,0,1,25.38,14.39h0l-44.33,32.43L433,266Q439.87,267.52,446.46,269.64Zm-5.87,66.42v0h0l.86.5L430.86,355a54.3,54.3,0,0,0-8-3.78l7.26-20c.79.29,1.58.59,2.36.92A83.6,83.6,0,0,1,440.59,336.06Zm-25.48-8.8-3.69,20.94h0c-1-.2-2.06-.33-3.22-.45a48.71,48.71,0,0,0-5.55-.32h-.05V326.16A81.66,81.66,0,0,1,415.11,327.26ZM381.38,212.85a195.12,195.12,0,0,0-43.92,10l-5-13.77a208.66,208.66,0,0,1,51.25-11.13Zm-52.63-2.45,5,13.78a194.79,194.79,0,0,0-55.48,32.1l-9.41-11.23A209.07,209.07,0,0,1,328.75,210.4Zm-70.22,41.42.1.08,53.08,40.57,1.62,1.22L363,331.62v.08l-.21.1c-1.07.56-2.14,1.15-3.15,1.74A84.3,84.3,0,0,0,347.53,342c-1.33,1.11-2.68,2.34-4,3.62v0l-41.75-41.74-1.39-1.4-72.51-72.5c.3-.28.59-.57.89-.87Zm-4.14,27.81a193.74,193.74,0,0,0-20.32,28.26l-12.72-7.35a209.26,209.26,0,0,1,23.94-32.82Zm-35,24.33,12.7,7.33a193.76,193.76,0,0,0-21.93,60.22L195.73,369A207.53,207.53,0,0,1,219.39,304ZM195,372.84l14.45,2.55c-.7,4.26-1.26,8.5-1.66,12.68h0l-14.9,2h0C193.37,384.34,194.08,378.57,195,372.84Zm16.39,2.89,14.44,2.55c-.41,2.41-.76,4.9-1.08,7.53l-14.95,2C210.22,383.83,210.75,379.79,211.42,375.73ZM230.07,377h0a172.77,172.77,0,0,1,20.8-57.16h0a171.88,171.88,0,0,1,16.32-23.47l17.91,23.44a144.56,144.56,0,0,0-16.43,27.92v0a7.46,7.46,0,0,0-6.13,2.13,7.54,7.54,0,0,0,0,10.67,7.29,7.29,0,0,0,.87.71v0a140.3,140.3,0,0,0-5.1,20l-29.49,3.94C229.18,382.38,229.59,379.66,230.07,377Zm35.1-14.75h0a7.53,7.53,0,0,0,5.45-14h0a142.63,142.63,0,0,1,15.72-26.76l38.53,50.42c-.09.2-.18.39-.26.59h0l-64.23,8.58A138.2,138.2,0,0,1,265.17,362.27Zm60.73,17.59,20,7.27a54.07,54.07,0,0,0-2.05,7.34c-.08.41-.18.83-.24,1.24h0L322.64,392A76.53,76.53,0,0,1,325.9,379.86ZM207.71,425.8c.41,4.5,1,9.09,1.77,13.69L195,442c-1-6.06-1.75-12.17-2.21-18.23Zm2.45,17.57a193.76,193.76,0,0,0,21.93,60.22l-12.7,7.33a207.4,207.4,0,0,1-23.66-65ZM234.07,507a193.39,193.39,0,0,0,19,26.73l0,0-8.87,12.14a210.24,210.24,0,0,1-22.82-31.55Zm11.81,43.25,0-.08L267.23,521l18.44-25.22,1.22-1.65L325.05,442c1.15,2.47,2.33,4.76,3.61,7a84.22,84.22,0,0,0,8.45,12.08c1.44,1.7,2.89,3.25,4.32,4.71l0,0L299,508.24l-1.4,1.4-72.5,72.5-1.44-1.49Zm18.23,15.57,7.77-5.68-6,7.18Q265,566.58,264.11,565.81Zm14.18-7.2a194.84,194.84,0,0,0,55.47,32.09l-5,13.78a209,209,0,0,1-59.88-34.65Zm59.17,33.44a194.43,194.43,0,0,0,42.91,9.85v0l2.3,14.94a209.25,209.25,0,0,1-50.23-11Zm.67-1.84,5-13.81a178.44,178.44,0,0,0,34.57,8.39l2.34,15.09A193.31,193.31,0,0,1,338.13,590.21Zm4.64-18.11-.07,0-.07,0a173.91,173.91,0,0,1-49.22-27.68l24.08-17.61h0a146.22,146.22,0,0,0,25.35,14.57h0a7.49,7.49,0,0,0,12.54,4.94h0a144.36,144.36,0,0,0,17,4.64l4.62,29.79A174.81,174.81,0,0,1,342.77,572.1Zm14-27.47h0A7.53,7.53,0,1,0,343,539.22h0a143.93,143.93,0,0,1-23.8-13.68h0l44.35-32.44h0l8.64,55.73A132.18,132.18,0,0,1,356.8,544.63Zm7.53-66.6c-.71-.36-1.42-.76-2.12-1.17l10.63-18.41a54.49,54.49,0,0,0,8,3.76l-7.28,20-.2-.07A77.2,77.2,0,0,1,364.33,478Zm27.95-12.77h0a51.11,51.11,0,0,0,6.28.69c.86.06,1.71.08,2.55.1v21.24a80.57,80.57,0,0,1-12.52-1.1ZM423.73,602a194.54,194.54,0,0,0,43.93-10l5,13.78A208.76,208.76,0,0,1,421.42,617Zm52.63,2.46-5-13.78a194.66,194.66,0,0,0,55.48-32.1l9.41,11.23A209.07,209.07,0,0,1,476.36,604.48Zm62.92-37.16-9.43-11.24.54-.46h0l11.88,9.09C541.25,565.64,540.24,566.51,539.28,567.32Zm7.56-4.07-.12-.1-.3-.23-53-40.51-1.59-1.24-49.66-37.94h0l.38-2.42.23-.12,1.34-.77a83.65,83.65,0,0,0,12.06-8.44c1.34-1.11,2.69-2.34,4-3.62v0L503.36,511l1.4,1.4,72.5,72.5c-.29.27-.59.57-.88.86Zm3.89-28A193.74,193.74,0,0,0,571.05,507l12.72,7.35a209.73,209.73,0,0,1-23.94,32.82Zm35-24.33L573,503.59A193.85,193.85,0,0,0,595,443.37l14.43,2.54A207.09,207.09,0,0,1,585.72,510.92ZM610.08,442l-14.45-2.55c.71-4.25,1.26-8.49,1.66-12.68h0l14.89-2h0C611.75,430.54,611,436.31,610.08,442Zm-16.38-2.89-14.44-2.55c.4-2.4.76-4.9,1.07-7.53l15-2C594.89,431.07,594.36,435.11,593.7,439.15Zm-18.65-1.29a173.66,173.66,0,0,1-37.13,80.63L520,495.05h0a146,146,0,0,0,17.06-29.39h0a7.49,7.49,0,0,0,4.63-12.07v0a144.92,144.92,0,0,0,5.08-20l29.48-3.94h0C575.94,432.51,575.53,435.22,575.05,437.86ZM540.14,452h0a7.54,7.54,0,0,0-9.64,11.51,7.42,7.42,0,0,0,4.44,2.13v0a144.77,144.77,0,0,1-16.16,27.69v0l-38.89-50.91h0l64.89-8.68A139.91,139.91,0,0,1,540.14,452Zm-62.33-18.45-20-7.27a57.62,57.62,0,0,0,2.13-7.66c0-.32.11-.61.15-.91h0l20.93,3.69A78.2,78.2,0,0,1,477.81,433.59ZM651.46,396.3h0l-35.17-4.7a213.52,213.52,0,0,0-28.11-91.34,213.76,213.76,0,0,0-24.86-34.53h0l20.92-28.6A248.26,248.26,0,0,1,651.46,396.3ZM572.87,225.75h0l-28.59,20.92c-1.27-1.13-2.55-2.23-3.8-3.25h0l0,0-.14-.12A212.86,212.86,0,0,0,421.81,194v0l-5.48-35.3A248.07,248.07,0,0,1,572.87,225.75ZM404.53,108.25l5.33,34.39,2.46,15.82,5.84,37.71,5.59,36,4.81,31,.31,2,9.35,60.22v.06l0,.14v0l.81,5.17v0c-1.67-.82-3.36-1.6-5.08-2.3-1.06-.45-2.16-.88-3.22-1.26a82.74,82.74,0,0,0-14.14-3.77l-.1,0a86.53,86.53,0,0,0-12-1.21v-214Zm-14.74,50.37-5.47,35.29a212.78,212.78,0,0,0-119.49,49.35h0l-.07,0,0,0c-1.61,1.31-3.3,2.79-5.08,4.38h0l-28-21.41A248.31,248.31,0,0,1,389.79,158.62ZM221.43,236.5l21.42,28a214.36,214.36,0,0,0-25.91,35.73,211.34,211.34,0,0,0-25.47,70c-1.19,6.77-2,13.62-2.57,20.39l-35.2,4.71A248.36,248.36,0,0,1,221.43,236.5ZM137.72,401.42l15.82-2.11v0l37.19-5h0l.37,0,66.5-8.89,2.05-.28,63.21-8.44h0c-.15.38-.32.75-.46,1.15A80.33,80.33,0,0,0,318.65,392s0,.07,0,.11a86.28,86.28,0,0,0-1.24,13.4h-210Zm15.94,17.16h0l35.16,4.71a213.74,213.74,0,0,0,53,125.87h0l-20.92,28.59A248.16,248.16,0,0,1,153.66,418.58Zm78.58,170.55h0l28.59-20.92c1.26,1.11,2.53,2.2,3.79,3.24l0,.06.15.1a212.66,212.66,0,0,0,118.5,49.26v0l5.47,35.31A248.15,248.15,0,0,1,232.24,589.13ZM400.59,706.62l-5.33-34.38-2.44-15.82L387,618.71l-10.37-67-.32-2.05-9.36-60.36-.93-6.06v0h0c2,.94,4,1.83,6.18,2.64.29.11.57.22.77.28A81.56,81.56,0,0,0,387.18,490a84.34,84.34,0,0,0,13.41,1.26V706.62Zm14.73-50.36L420.8,621a212.85,212.85,0,0,0,119.49-49.35c1.63-1.33,3.34-2.81,5.18-4.46h0l28,21.39A248.24,248.24,0,0,1,415.32,656.26Zm168.36-77.9h0l-21.41-28a214.18,214.18,0,0,0,25.92-35.72,211.32,211.32,0,0,0,25.46-70c1.19-6.76,2.05-13.6,2.57-20.37h0l35.21-4.73A248.25,248.25,0,0,1,583.68,578.36Zm83.72-164.9-15.82,2.13-37.14,5-.38,0-35.87,4.8L547.5,429.5l-2,.28-65.29,8.73q.6-1.47,1.11-2.88a82.86,82.86,0,0,0,3.79-14.23,84.3,84.3,0,0,0,1.23-12H697.71Z"/><circle class="cls-2" cx="400.89" cy="405.82" r="103.09"/></g><path class="cls-3" d="M343.23,431.37q-4.35-4.83-4.35-13.85v-4.25h11v5.1q0,7.22,6.05,7.22a5.71,5.71,0,0,0,4.52-1.76c1-1.16,1.54-3.06,1.54-5.68a15.74,15.74,0,0,0-2.13-8.23c-1.42-2.37-4-5.22-7.86-8.54Q344.83,395,342,389.85a23.36,23.36,0,0,1-2.87-11.62q0-8.82,4.46-13.65t12.95-4.83q8.4,0,12.69,4.83t4.3,13.86v3.08h-11V377.7q0-3.82-1.49-5.58a5.38,5.38,0,0,0-4.35-1.75q-5.83,0-5.84,7.11A14,14,0,0,0,353,385a41.33,41.33,0,0,0,7.91,8.5q7.32,6.36,10.09,11.57a25.7,25.7,0,0,1,2.76,12.21q0,9.13-4.52,14t-13.11,4.88Q347.59,436.2,343.23,431.37Z"/><path class="cls-3" d="M382.94,431.85q-3.29-4.35-3.29-12.64v-7.75a21.2,21.2,0,0,1,2-9.77,12,12,0,0,1,6.58-5.73v-.21a11.59,11.59,0,0,1-6.1-5.47,21,21,0,0,1-2-9.72v-1.38q0-9,4.36-13.7t13.06-4.67H411v10.62H397.81a5.67,5.67,0,0,0-4.41,1.7c-1,1.13-1.54,3-1.54,5.52v4.57q0,4.25,1.76,6a7,7,0,0,0,5.25,1.81h4.57v-8.29H414.9v8.29h3.3v10.61h-3.3v24.43a50.11,50.11,0,0,0,.22,5.15,12.7,12.7,0,0,0,1.06,3.87H404.5a20.76,20.76,0,0,1-1.06-5.84h-.21a14.7,14.7,0,0,1-4.41,5.21,10.83,10.83,0,0,1-6.21,1.69Q386.24,436.2,382.94,431.85Zm20.5-13V401.69H399q-4,0-5.84,2.18t-1.81,7.28v7.53q0,3.72,1.49,5.31a5.39,5.39,0,0,0,4.14,1.6Q402.48,425.59,403.44,418.9Z"/><path class="cls-3" d="M424.67,360.81H442q9,0,13.17,4.2t4.14,12.9v4.56q0,11.58-7.64,14.66v.21a9.15,9.15,0,0,1,6,5.2,26.38,26.38,0,0,1,1.75,10.52v13.06a50.55,50.55,0,0,0,.21,5.15,12.7,12.7,0,0,0,1.06,3.87H448.78a16.48,16.48,0,0,1-.85-3.39,51.93,51.93,0,0,1-.21-5.74V412.42q0-5.1-1.65-7.12t-5.68-2h-4v31.85H424.67Zm15.93,31.86a7,7,0,0,0,5.26-1.81q1.75-1.8,1.75-6.05v-5.73q0-4-1.43-5.84a5.41,5.41,0,0,0-4.52-1.81h-5.31v21.24Z"/>
</svg>
                </div>
                <div class="text-center animate__animated animate__fadeInUp animate__slower">
                    <p style="font-weight: bold; font-size: 1.5rem; text-transform: uppercase; letter-spacing: 2px">$title_name</p>
                    <p style="font-weight: bold; font-size: .5rem; text-transform: uppercase; letter-spacing: 2.5px">"DISTANCE SHOWS US HOW FAR LOVE CAN TRAVEL"</p>
                </div>
                </div>
            </div>
        </div>
    </div>
</li>
quotes;



$video = <<<vid

<!-- video -->
<li class="invitation__slide">
    <div class="container-mobile" style="">
        $frame
        <div class="d-flex justify-content-center align-items-center" style="min-height: 100%">
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


if ($switch_couple == 'on') {
    $couple = <<<coup

    <!-- Marriage Passport -->
    <li class="invitation__slide" style="overflow-x: hidden">
        <div class="container-mobile" style="padding-top: 0; position: relative; padding-bottom: 5rem; overflow: visible;">
            $frame

            <div class="bg-absolute text-center">
                <img class="animate__animated animate__fadeInLeft animate__slower" style="transform: rotate(-15deg); left: 10%; width: 5rem; top: 4rem;" class="label-1" src="images/detail/1.png?versi=$versi" />
                <img class="animate__animated animate__fadeInRight animate__slower" style="transform: rotate(-25deg); top: 14rem; right: 1rem; width: 7rem;" class="label-2" src="images/detail/2.png?versi=$versi" />
                <img class="animate__animated animate__fadeInLeft animate__slower" style="transform: rotate(-15deg); left: 1rem; top: 45%; width: 6rem;" class="label-3" src="images/detail/3.png?versi=$versi" />
                <img class="animate__animated animate__fadeInRight animate__slower" style="transform: rotate(-15deg); top: calc(76% - 6rem); right: -.5rem; width: 6rem;" class="label-4" src="images/detail/4.png?versi=$versi" />
                <img class="animate__animated animate__fadeInLeft animate__slower" style="transform: rotate(15deg); left: 10%; bottom: 0; width: 6rem;" class="label-5" src="images/detail/5.png?versi=$versi" />
            </div>

            <div class="d-flex justify-content-center align-items-center" style="min-height: 100%">
                <div style="width: 100%">
                <div>
                    <div class="header animate__animated animate__fadeInDown animate__slower text-center font-latin">
                        <p style="font-size: 1.6rem; margin: 0; letter-spacing: 1px;">PASSPORT TO MARRIAGE</p>
                        <p style="font-size: 1.2rem;">UNDANGAN PERNIKAHAN</p>
                    </div>


                    <div style="margin-top: 4rem; display: grid; grid-template-columns: repeat(3, 1fr); align-items: start" class="animate__animated animate__fadeInDown animate__slower text-center">
                        <div>
                            <p class="m-0" style="font-weight: bold; font-size: .7rem; ">PASSPORT</p>
                            <p style="margin-top: -.25rem; font-weight: bold; font-size: .7rem; ">PASPOR</p>
                        </div>

                        <div>
                            <p class="m-0" style="font-weight: bold; font-size: .7rem; ">COUNTRY CODE</p>
                            <p style="margin-top: -.25rem; font-size: .7rem; font-weight: bold; ">KODE NEGARA</p>
                            <p style="font-size: .8rem; font-weight: bold; ">IDN</p>
                        </div>

                        <div>
                            <p class="m-0" style="font-weight: bold; font-size: .7rem; ">PASSPORT NUMBER</p>
                            <p style="margin-top: -.25rem; font-size: .7rem; font-weight: bold; ">NOMOR PASPOR</p>
                            <p style="font-size: .7rem; font-weight: bold; ">IDN17122023</p>
                        </div>
                    </div>
                    
                    <div class="outer-cpl-av animate__animated animate__fadeInUp animate__slower">
                        <div class="cpl-av-container" style="margin-block: 1rem;">
                        <img src="$boy_img" class="cpl-avatar lightbox photo1" />
                        </div>
                    </div>
                    
                    <div class="d-flex cpl-list">
                        <div class="text-center animate__animated animate__fadeInDown animate__slower">
                            <div>
                                <div>
                                    <div class="cpl-title">THE GROOM / MEMPELAI PRIA <br/>$boy</div>
                                    <div class="cpl-info">$boy_msg</div>
                                </div>
                            </div>
                        </div>

                        <div class="text-center animate__animated animate__fadeInDown animate__slower">
                            <div>
                                <div>
                                    <div class="cpl-title">THE BRIDE / MEMPELAI WANITA <br/>$girl</div>
                                    <div class="cpl-info">$girl_msg</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>  
        </div>
    </li>
    coup;

} else {
    $couple = <<<coup

<!-- couple -->
<li class="invitation__slide">
    <div class="container-mobile" style="">
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



if ($switch_acara == 'on') {
    $data_acara1 = <<<dataca
            <div class="ceremony-data animate__animated animate__fadeInUp animate__slower">
                <div class="ceremony-group">
                    <p>Ceremony Time:</p>
                    <div>$acara_time</div>
                </div>

                <div class="ceremony-group">
                    <p>Reception Time:</p>
                    <div>$acara_time2</div>
                </div>

                <div class="ceremony-group">
                    <p>Date:</p>
                    <div>$acara_date</div>
                </div>

                <div class="ceremony-group">
                    <p>Location:</p>
                    <div>$acara_alamat</div>
                </div>
            </div>
    dataca;
} else {
    $data_acara1 = '';
}


$acara = <<<acara

<!-- Wedding Pass -->
<li class="invitation__slide" style="justify-content: flex-start; background-color: #E5E2D9; padding-top: 0; margin-top: 0; position: relative; isolation: isolate; overflow: hidden; min-height: 0; !important;">
    <div class="wed-header animate__animated animate__fadeInDown animate__slower">
        <div>WEDDING PASS</div>
    </div>
    <div style="z-index: -1;  opacity: .5; position: absolute; top: 0%; left: 0; right: 0; display: flex; flex-direction: column; gap: 2rem;">
        <img class="wed-bg1" style="width: 200vw; height: auto; transform: translateX(50%)" src="images/dummy.svg" />
        <img class="wed-bg2" style="width: 200vw; height: auto; transform: translateX(50%)" src="images/dummy.svg" />
        <img class="wed-bg3" style="" src="images/dummy.svg" />
    </div>
    <div class="container-mobile" style="style="height: unset !important;">
        <div class="wed-names">
            <div class="animate__animated animate__fadeInRight animate__slower">Stefan</div>
            <div class="animate__animated animate__zoomIn animate__slower">&</div>
            <div class="animate__animated animate__fadeInLeft animate__slower">Rachel</div>
        </div>

        <div class="d-flex justify-content-center align-items-center">
            <div style="width: 100%">
                $data_acara1
            </div>
        </div>
    </div>
</li>
acara;

$map = <<<map

<!-- map -->
<li class="invitation__slide" style="justify-content: flex-start; background-color: #E5E2D9; padding-top: 0; margin-top: 0; position: relative; isolation: isolate; overflow: hidden; min-height: 0 !important;">
    <div class="container-mobile" style="min-height: 100vh !important;">
        <div style="display: flex; flex-direction: column; justify-content: flex-start; align-items: center;">
            <div style="width: 100%">
                <div style="display: flex; flex-direction: column; justify-content: flex-start; align-items: center; padding-top: 2rem; min-height: 100vh;">
                    <img class="wed-bg3 animate__animated animate__fadeInDown animate__slower" style="margin-bottom: 4rem; margin-top: 2rem; width:120%;" src="images/bali.png?versi=$versi" />
                    <a
                        href="$map_loc"
                        class="btn-maps-link btn rounded-pill mb-4 animate__animated animate__pulse animate__infinite"
                        target="_blank"
                    >Check Location</a>
                </div>
            </div>
        </div>
    </div>
</li>
map;

$protokol = <<<pro

<!-- Countdown -->
<li class="invitation__slide" style="justify-content: flex-start; background-color: #E5E2D9; padding-block: 0; margin-top: 0; position: relative; isolation: isolate; overflow: hidden;  min-height: 0 !important;">
    <div class="container-mobile" style="display: flex;">
            <div style="width: 100%;">            
                <div style="font-size: 1.75rem; margin-bottom: 1rem;" class="count-quote animate__animated animate__fadeInUp animate__slower">Save The Date</div>
                <div class="countdown-wrapper d-flex flex-column animate__animated animate__fadeInUp animate__slower" data-datetime="$acara_cd">
                    <div class="countdown text-center">
                        <div class="countdown-item day">
                            <div class="number">00</div>    
                            <div class="text">Days</div>
                        </div>
                        <div class="countdown-item hour">
                            <div class="number">00</div>
                            <div class="text">Hours</div>
                        </div>
                        <div class="countdown-item minute">
                            <div class="number">00</div>
                            <div class="text">Minutes</div>
                        </div>
                        <div class="countdown-item second">
                            <div class="number">00</div>
                            <div class="text">Seconds</div>
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
    $photos = "";

    foreach ($imgs as $img) {
        $photos .= <<<pht
            <div style="overflow: hidden; height: 100%;" class="animate__animated animate__zoomIn animate__slower">
                <div class="" style="overflow: hidden; width: 100%; height: 100%;">
                    <img src="$galery_path$img?versi=$versi" style="width: 100%; height: 100%; object-fit: cover" class="lightbox gallery1" />
                </div>
            </div>
        pht;
    }

    $galery = <<<gul

<!-- galery -->
<li class="invitation__slide" style="background-color: #e5e2d9; padding-block: 0; min-height: 0 !important; justify-content: flex-start !important;">
    <div class="">
        <div class="d-flex justify-content-center align-items-center" style="height: 100%; width: 100%;">
            <div style="width: 100%">
                <div class="text-center mb-4 animate__animated animate__slower animate__fadeInDown" data-fade-in-down="null">
                    <!-- <div class="font-latin color-accent h4 mb-2">Galeri Foto</div> -->
                </div>
                <div id="gallery-container" style="min-height: 65vh">
                    $photos
                </div>
            </div>
        </div>
    </div>
</li>
gul;


}

// ambil foto dari galery2
if (empty($imgs2)) {
    $galery2 = '';
} else {
    $imgs2 = array_map('basename', $imgs2);

    $galery2 = <<<gula

<!-- galery -->
<li class="invitation__slide">
    <div class="container-mobile" style="">
        $frame
        <div class="d-flex justify-content-center align-items-center" style="height: 100%">
            <div style="width: 100%">
                <div class="text-center mb-4 animate__animated animate__fadeInDown animate__slower">
                    <div class="font-latin color-accent h4 mb-2">Galeri Foto</div>
                </div>
                <div id="gallery-container" style="min-height:65vh; overflow-y:auto;">
gula;

    for ($i = 0; $i < count($imgs2); $i++) {
        if ($i == (count($imgs2) - 1)) {
            if ($i == 3 || $i == 6) {
                $galery2 .= <<<gaka
            <div style="width: 33.333%; overflow: hidden; padding: 4px" class="animate__animated animate__zoomIn animate__slower">
                <div class="" style="overflow: hidden; width: 100%; height: 129px;">
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

// $cookie = $_COOKIE['kode'] ?? "";
// $user = $_COOKIE['user'] ?? "";
// $rsvpData = data("SELECT * FROM $user WHERE kode = '$cookie'");
// die(json_encode(data("SELECT * FROM $user WHERE kode = '$cookie'")));
// $rsvpData = $rsvpData[0];
$rsvp_btn = !isset($_SESSION['preview']) ? "<button class='btn-maps-link btn btn-primary w-100 font-latin btn btn-primary btn-block mt-4 mb-3 animate__animated animate__pulse animate__infinite' style='font-size: 1rem;' id='submit' type='button'><span>SUBMIT</span></button>" : "";
// $ucw = ucwords($rsvpData['nama']);
// $is_ucw = isset($rsvpData['nama']);

$rsvp = <<<rsvp

<!-- rsvp -->
<li class="invitation__slide" style="background-color: #E5E2D9;">
    <div>
        <img src="images/plane.png?versi=$versi" style="width: 80%; object-fit: cover; aspect-ratio: none;" class="animate__animated animate__fadeInLeft animate__slower"></img>
    </div>
    <div class="container-mobile" style="">
        <div class="d-flex justify-content-center align-items-center" style="height: 100%">
            <div style="width: 100%">
                <div style="display: flex; flex-direction: column; gap: 2rem; align-items: center;">
                    <div class="rsvp-head mt-4 font-latin">
                        <div class="animate__animated animate__fadeInUp animate__slower" style="font-weight: 500; font-size: 1.6rem; letter-spacing: 2px; text-align: center;">
                            RSVP
                        </div>
                        <div class="animate__animated animate__fadeInUp animate__slower" style="font-size: .8rem; letter-spacing: 1px; text-align: center; width: 100%;">
                            $rsvp_msg
                        </div>
                    </div>

                    <div class="rsvp-head mt-4 font-latin animate__animated animate__fadeInUp animate__slower">
                        <div style="font-size: .8rem; letter-spacing: 2px; text-align: center;">
                            DRESS CODE
                        </div>
                        <div style="font-size: .6rem; letter-spacing: 1px; text-align: center; width: 100%;">
                            SEMI FORMAL
                        </div>
                    </div>

                    <form id="form" style="width: 100%;">
                        <input id="kode" type="hidden" value="$cookie">
                        <div class="form-group animate__animated animate__fadeInUp animate__slower">
                            <label class="star-label" for="nama">NAME</label>
                            <input id="nama" type="text" class="form-control" maxlength="30" />
                        </div>
                            
                        <div class="form-group animate__animated animate__fadeInUp animate__slower">
                            <label class="star-label">CONFIRMATION OF ATTENDANCE</label>
                            <div class="d-flex" style="gap: .5rem;">
                                <div class="rsvp-radio">
                                <input type="radio" required id="radioHadir" name="kehadiran" value="Hadir">
                                    <label for="radioHadir">SEE YOU</label>
                                </div>

                                <div class="rsvp-radio">
                                    <input type="radio" required id="radioNonHadir" name="kehadiran" value="Tidak Hadir">
                                    <label for="radioNonHadir">CAN'T COME</label>
                                </div>
                            </div>

                            <select hidden id="hadir" placeholder="Kehadiran" class="form-control" required>
                                <option value="">--Konfirmasi Kehadiran--</option>
                                <option value="Hadir">Akan Hadir</option>
                                <option value="Tidak Hadir">Tidak Hadir</option>
                            </select>
                        </div>

                        <div class="form-group animate__animated animate__fadeInUp animate__slower">
                            <label class="star-label" for="text">WISHES</label>
                            <textarea id="text" rows="3" class="form-control" maxlength="200"></textarea>
                        </div>
                        $rsvp_btn
                    </form>
                </div>
            </div>
        </div>
    </div>
</li>
rsvp;

// GIFT
$gift = <<<gift
    
    <!-- Comment -->
    <li class="invitation__slide" style="justify-content: flex-start; padding-top: 0; background-color: #E5E2D9;">
        <div style="overflow: hidden;">
            <img src="images/plane r.png?versi=$versi" style="width: 100%; object-fit: cover; aspect-ratio: none;" class="animate__animated animate__fadeInRight animate__slower"></img>
        </div>
        <div class="container-mobile" style="padding-top: 0; position: relative; padding-bottom: 5rem; height: auto !important;">
            <div class="d-flex justify-content-center align-items-center" style="min-height: 100%;">
                <div style="width: 100%">
                <div>
                    <div class="header animate__animated animate__fadeInDown animate__slower text-center font-latin" >
                        <p style="font-size: 1.6rem; margin: 0; letter-spacing: 1px;">THANK YOU FOR ALL</p>
                        <p style="font-size: 1.2rem; margin-bottom: 0;">THE WISHES</p>
                        <div style="margin-top: 1rem; font-size: 1.2rem;" class="count-quote">WE CAN'T WAIT TO CELEBRATE WITH YOU</div>
                    </div>

                    <div class="comment-lists animate__animated animate__fadeInUp animate__slower">
                        <div class="g-comment">
                            <div class="text-center">
                                "DISTANCE SHOWS US HOW FAR LOVE CAN TRAVEL"
                            </div>
                            <div class="text-center fw-bold">
                                STEFAN & RACHEL
                            </div>
                        </div>
                    </div>
                    $komentar

                </div>
            </div>  
        </div>
    </li>
    gift;


$thx = <<<thx

<!-- thanks -->
<li class="invitation__slide" style="display: none;">
    <div class="container-mobile" style="">
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
<li class="invitation__slide" style="display: none;"s>
    <div class="container-mobile">
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
<li class="invitation__slide">
    <div id="barcode" class="container-mobile" style="">
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
                        <img id="inerLogo" src="images/icon/logo-barcode.png?versi=$versi" alt="logo-barcode"
                            style="position:absolute; z-index:900;top:41%;left:41%" ;>
                    </div>
                </div>
                <div class="text-center animate__animated animate__fadeInUp animate__slow">
                    <div class="mb-3">Tunjukan Barcode untuk registrasi</div>
                    <button id="download"
                        class="btn-maps-link btn btn-primary rounded-pill mb-4 animate__animated animate__pulse animate__infinite">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="margin-bottom: -5px;fill: var(--btn-color);transform: ;msFilter:;"><path d="M19 9h-4V3H9v6H5l7 8zM4 19h16v2H4z"></path></svg>
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