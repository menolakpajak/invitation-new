const elementor = document.querySelectorAll("[data-about-reason]");
const elementorList = document.querySelectorAll("[data-about-list]");
const cards = document.querySelectorAll("#features .cards .card");
const templates = document.querySelectorAll("#theme .theme-container .theme-item");

elementor.forEach((el) =>
    el.addEventListener("click", (e) => {
        let parent = e.target.parentNode;

        elementorList.forEach((el) => el !== parent && el.classList.remove("active"));
        parent.classList.toggle("active");
    }),
);

cards.forEach((e, i) => {
    e.dataset.aos = "fade-up";
    e.dataset.aosDelay = `${(i / 5) * 1000}`;
});

templates.forEach((e, i) => {
    e.dataset.aos = "fade-up";
    e.dataset.aosDelay = `${(i / 4) * 1000}`;
});

const testimoni = new Swiper("[data-swiper-testimonial]", {
    speed: 600,
    spaceBetween: 20,
    loop: true,
    slidesPerView: 1,
    breakpoints: {
        800: {
            slidesPerView: 3,
        },
    },
    autoplay: {
        delay: 5000,
        disableOnInteraction: false,
    },
    pagination: {
        el: "[data-swiper-testimonial-pagination]",
        type: "bullets",
        dynamicBullets: true,
        dynamicMainBullets: 4,
        clickable: true,
    },
});
