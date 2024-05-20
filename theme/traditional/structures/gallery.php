<?php
require_once "$ROOT_THEME/components/galleries.php";

$imgs = [
    "a.jpg",
    "b.jpg",
    "c.jpg",
    "d.jpg",
    "e.jpg",
    "f.jpg",
    "g.jpg",
    "h.jpg",
    "i.jpg",
    "j.jpg",
]
?>


<section id="gallery" class="flex relative isolate section py-[3rem] mt-6 bg-cover bg-gray-100" style="background-image: url('images/cover/cover-bg.png');">
    <div class="container flex flex-col">
        <h2 class="font-[Modernline] my-[3rem] mx-auto text-4xl tablet:text-3xl leading-relaxed tracking-wider text-[var(--accent)]">Momen Bahagia</h2>
        <div class="gallery">
            <?= generateImage($imgs, "gallery1"); ?>
        </div>
    </div>
</section>