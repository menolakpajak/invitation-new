<?php
$acara_cd = "2024-11-10T16:00:00.000Z";
?>
<section id="acara-date" class="flex relative isolate section pb-12">
    <div class="-z-[1] absolute select-none pointer-events-none w-[10rem] h-auto top-[12rem] left-0 frame-bg">
        <img src="images/frame/floating-1.png" class="w-full h-auto" data-aos="fade-right" />
    </div>
    <div class="container pt-12 flex flex-col items-center gap-4">
        <div data-editable="acara2.body" data-aos="fade-up class=" text-center max-w-[50rem] italic">
            <div>Merupakan suatu kebahagiaan dan kehormatan bagi kami, apabila Bapak/ Ibu/ Saudara/i, berkenan hadir untuk memberikan doa restu.</div>
            <br>
            <div>Atas kehadiran dan doa restunya kami ucapkan terimakasih</div>
        </div>
        <div data-editable="acara2.title" data-aos="fade-up" class="text-[var(--accent)] mt-4 text-center mb-6 font-[Modernline] text-2xl phone:text-lg">Om Shanti Shanti Shanti Om</div>
        <div data-editable="acara2.body2" data-aos="fade-up" class="text-center font-bold text-xl">
            <p>Kami yang berbahagia</p>
            <p>Kel. I Nyoman Ratep</p>
            <p>&</p>
            <p>Kel. I Wayan Riwa Aryasa</p>
        </div>
        <div data-editable="acara2.title2" data-aos="fade-up" class="text-[var(--accent)] text-center mb-6 font-[Modernline] mt-[3rem] text-4xl phone:text-2xl">Hari Bahagia</div>

        <div data-aos="fade-up" class="countdown-wrapper flex flex-col" data-datetime="<?= $acara_cd ?>">
            <div class="countdown text-center flex gap-2 phone:text-sm text-lg">
                <div class="countdown-item day flex flex-col rounded-md bg-[var(--primary-btn)] py-4 px-8 phone:py-1 phone:px-4 text-white">
                    <div class="number phone:text-2xl text-4xl">00</div>
                    <div class="text">Hari</div>
                </div>
                <div class="countdown-item hour flex flex-col rounded-md bg-[var(--primary-btn)] py-4 px-8 phone:py-1 phone:px-4 text-white">
                    <div class="number phone:text-2xl text-4xl">00</div>
                    <div class="text">Jam</div>
                </div>
                <div class="countdown-item minute flex flex-col rounded-md bg-[var(--primary-btn)] py-4 px-8 phone:py-1 phone:px-4 text-white">
                    <div class="number phone:text-2xl text-4xl">00</div>
                    <div class="text">Menit</div>
                </div>
                <div class="countdown-item second flex flex-col rounded-md bg-[var(--primary-btn)] py-4 px-8 phone:py-1 phone:px-4 text-white">
                    <div class="number phone:text-2xl text-4xl">00</div>
                    <div class="text">Detik</div>
                </div>
            </div>
        </div>
    </div>
</section>