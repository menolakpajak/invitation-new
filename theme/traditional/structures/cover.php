<section id="cover" class="flex full-view relative isolate section max-h-full overflow-hidden">
    <div class="absolute z-[-2] inset-0 w-full h-full after:absolute after:bg-black after:opacity-30 after:inset-0 pointer-events-none after:pointer-events-none">
        <div class="cover-carousel h-full">
            <div class="w-full !h-[100vh]">
                <img src="images/cover/cover.jpg" alt="cover" class="object-cover w-full h-full">
            </div>
            <div class="w-full !h-[100vh]">
                <img src="images/cover/cover.jpg" alt="cover" class="object-cover w-full h-full">
            </div>
            <div class="w-full !h-[100vh]">
                <img src="images/cover/cover.jpg" alt="cover" class="object-cover w-full h-full">
            </div>
        </div>
    </div>
    <div class="flex flex-col font-[Alice] items-center w-full text-white absolute top-[65%] -translate-y-1/2">
        <h2 data-editable="cover.mempelai" class="font-[Modernline] text-5xl tablet:text-3xl leading-relaxed tracking-wider">Komo &amp; Yunitha</h2>
        <p data-editable="cover.tanggal" class="hero_date text-xl">Selasa, 31 Desember 2024</p>
        <div class="text-center mt-2 text-sm leading-5" data-editable="cover.title">
            <p>
                Kepada
                <br>
                Bapak/Ibu/Saudara/i
            </p>
        </div>
        <h2 class="modal-penerima mt-2 text-2xl">Nama Tamu</h2>
        <a data-editable="cover.buka" href="#couple" id="invitation-open" class="btn btn-round mt-4 bg-[var(--primary-btn)] active:bg-[var(--primary-btn-active)] text-xl">Buka Undangan</a>
    </div>
    <?php include "$ROOT_THEME/components/wave.php" ?>
</section>