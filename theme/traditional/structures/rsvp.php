<?php
require_once "$ROOT_THEME/components/comment.php";

$comments = [
    [
        'body' => 'Selamat menempuh hidup baru. Semoga cinta dan kebahagiaan selalu mengisi hari-hari kalian dan menjadi keluarga bahagia dunia dan akhirat 🙏🏻',
        'author' => "Anton Prasetiyo dan Shinta ron",
        'status' => "hadir"
    ],
    [
        'body' => 'Selamat menempuh hidup baru. Semoga cinta dan kebahagiaan selalu mengisi hari-hari kalian dan menjadi keluarga bahagia dunia dan akhirat 🙏🏻',
        'author' => "Anton Prasetiyo dan Shinta ron",
        'status' => "ragu"
    ],
    [
        'body' => 'Selamat menempuh hidup baru. Semoga cinta dan kebahagiaan selalu mengisi hari-hari kalian dan menjadi keluarga bahagia dunia dan akhirat 🙏🏻',
        'author' => "Anton Prasetiyo dan Shinta ron",
        'status' => "tidak"
    ],
]

    ?>

<section id="rsvp" class="flex flex-col gap-6 relative isolate section pt-4 pb-[6rem]">
    <div class="container flex flex-col gap-4 items-center">
        <div data-editable="rsvp.title" class="text-[var(--accent)] text-center mb-6 mt-6 font-[Modernline] text-4xl phone:text-2xl">Mohon Doa Restu</div>
        <form class="max-w-[40rem] w-full flex flex-col gap-6" id="rsvp-form" autocomplete="off">
            <div class="flex flex-col gap-4">
                <div data-aos="fade-up" class="flex flex-col gap-2">
                    <label for="nama">Masukan namamu</label>
                    <input class="w-full bg-gray-100 px-4 py-2 rounded-md border-b border-[var(--primary-btn)]" type="text" name="nama" id="nama" required="">
                </div>
                <div data-aos="fade-up" class="flex flex-col gap-2 textarea">
                    <label for="ucapan">Berikan ucapanmu</label>
                    <textarea class="w-full bg-gray-100 px-4 py-2 rounded-md border-b border-[var(--primary-btn)]" rows="3" name="ucapan" id="ucapan"></textarea>
                </div>
                <div data-aos="fade-up" class="flex flex-col gap-2">
                    <label>Kamu akan hadir?</label>
                    <div class="radio-wrapper flex flex-col">
                        <div>
                            <input type="radio" checked="" id="radio-1" name="kehadiran" value="hadir">
                            <label for="radio-1">Hadir</label>
                        </div>
                        <div>
                            <input type="radio" id="radio-2" name="kehadiran" value="tidak">
                            <label for="radio-2">Tidak Hadir</label>
                        </div>
                        <div>
                            <input type="radio" id="radio-3" name="kehadiran" value="ragu">
                            <label for="radio-3">Masih Ragu</label>
                        </div>
                    </div>
                </div>
            </div>
            <button data-aos="fade-up" type="submit" class="btn btn-round bg-[var(--primary-btn)] text-white mx-auto active:bg-[var(--primary-btn-active)]" onclick="SubForm()">Kirim Ucapan</button>
        </form>
    </div>

    <div class="container max-w-[50rem] flex justify-center">
        <div class="w-full" id="kolom-ucapan">
            <div data-editable="rsvp.commentTitle" data-aos="fade-up" class="text-[var(--accent)] text-center mb-6 mt-6 font-[Modernline] text-4xl phone:text-2xl">Ucapan Doa</div>
            <div class="scroll col-md-12 aos-init aos-animate" data-aos="fade-up">
                <div class="flex flex-col gap-4 max-h-[80vh] overflow-y-auto">
                    <?php
                    foreach ($comments as $comment) {
                        echo generateComment($comment);
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>