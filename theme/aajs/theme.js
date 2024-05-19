var art = document.getElementById("artProject");

// loader
if (document.getElementById("loader") != null) {
    var loader = document.getElementById("loader");

    window.onload = () => {
        loader.style.display = "none";
    };
}

//swiper
let main = new Swiper(art, {
    allowTouchMove: false,
    // centeredSlides: true,
    direction: "vertical",
    effect: "fade",
    speed: 500,
    slidesPerView: 1,
});

const menuElement = document.querySelector("#menuSlider");
let menu = new Swiper(menuElement, {
    // allowTouchMove: false,
    // centeredSlides: true,
    // slideToClickedSlide: true,
    slidesPerView: 5,
});

menuElement.classList.add("d-none");

// tampilkan nama tamu
var guestName = art.dataset.guest;
if (document.getElementById("guestNameSlot")) {
    var guestNameSlot = document.getElementById("guestNameSlot");
    if (guestName) {
        guestNameSlot.innerHTML = guestName;
    }
}

// music
var btnMusic = document.getElementById("btnMusic");
var music = document.getElementById("music") ? document.getElementById("music") : null;

var isPlaying = false;
playMusic = (status) => {
    if (status) {
        if (music) {
            music.play();
            btnMusic.style.animationPlayState = "running";
        }
    } else {
        if (music) {
            if (isPlayed) {
                music.pause();
                btnMusic.style.animationPlayState = "paused";
                return;
            }
            music.style.animationPlayState = "running";
            btnMusic.play();
        }
    }
};

if (music) {
    music.onplaying = function () {
        isPlayed = true;
    };
    music.onpause = function () {
        isPlayed = false;
    };
} else {
    // btnMusic.style = 'display: none;';
}

btnMusic.addEventListener("click", () => playMusic(!isPlayed));

// full screen
openFullScreen = () => {
    if (document.getElementById("preview") == null) {
        if (document.documentElement.requestFullscreen) {
            document.documentElement.requestFullscreen();
        } else if (document.documentElement.webkitRequestFullscreen) {
            /* Safari */
            document.documentElement.webkitRequestFullscreen();
        } else if (document.documentElement.msRequestFullscreen) {
            /* IE11 */
            document.documentElement.msRequestFullscreen();
        }
    }
    return false;
};

// invitation
const setMenuIndex = (index) => {
    let slides = menu.slides;
    let menuLength = slides.length;

    menu.slideTo(index + 2 >= menuLength ? menuLength - 1 : index - 2 < 0 ? 0 : index - 2);
    slides.forEach((e) => {
        e.classList.remove("is-active");
    });
    slides[index].classList.add("is-active");
};

const setActive = (index) => {
    main.slideTo(index);
    //setMenuIndex(index);
};

main.on("slideChange", function (e) {
    setMenuIndex(main.activeIndex);
});

var body = document.querySelector("body");
var rsvpModalOverlay = document.querySelector("#rsvpModalOverlay");

class LightBox {
    constructor(className) {
        const PREFIX = `.lightbox-wrapper.${className}`;
        this.__ready = false;
        this.modal = this.__init(className);
        this.boxWrapper = document.querySelector(PREFIX);
        this.lightboxCloseBtn = document.querySelector(`${PREFIX} .lightboxCloseBtn`);
        this.lightboxNextBtn = document.querySelector(`${PREFIX} .lightboxNextBtn`);
        this.lightboxPrevBtn = document.querySelector(`${PREFIX} .lightboxPrevBtn`);
        this.lightboxList = document.querySelector(`${PREFIX} > .lightbox-list`);
        this.images = Array.from(document.querySelectorAll(`.lightbox.${className}`));

        if (!this.boxWrapper) throw new Error(`Container .${className} does not exist`);

        //Modal
        this.modalOverlay = document.querySelector(`.modalOverlay.${className}`);
        if (this.images.length <= 1) {
            this.lightboxPrevBtn.style.display = "none";
            this.lightboxNextBtn.style.display = "none";
        }

        this.lightboxNextBtn.onclick = () => {
            var i = parseInt(this.lightboxNextBtn.dataset.index) + 1;
            if (i >= this.images.length) {
                i = 0;
            }
            this.showLightbox(i);
        };

        this.lightboxPrevBtn.onclick = () => {
            var i = parseInt(this.lightboxPrevBtn.dataset.index) - 1;
            if (i == -1) {
                i = this.images.length - 1;
            }
            this.showLightbox(i);
        };

        for (let x = 0; x < this.images.length; x++) {
            this.images[x].onclick = () => {
                if (!this.__ready) return;
                // this.showLightbox(i);
                this.showLightbox(x);
            };
        }

        this.lightboxCloseBtn.onclick = () => {
            this.closeLightbox();
        };

        this.toggle(true);
    }

    __init(v) {
        let res = document.createElement("div");
        let wrapper = document.createElement("div");
        let app = document.querySelector("main#app");
        res.classList.add("modalOverlay", "modal-backdrop", "fade", v);
        res.style.display = "none";

        wrapper.classList.add("lightbox-wrapper", "lightboxWrapper", v);
        wrapper.innerHTML = `
            <div class="lightbox-list"></div>
            <a href="#" class="btn-lightbox lightboxCloseBtn">
                <svg xmlns="http://www.w3.org/2000/svg" height="24" width="24" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 0 1 1.414 0L10 8.586l4.293-4.293a1 1 0 1 1 1.414 1.414L11.414 10l4.293 4.293a1 1 0 0 1-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 0 1-1.414-1.414L8.586 10 4.293 5.707a1 1 0 0 1 0-1.414z" clip-rule="evenodd" />
                </svg>
            </a>
            <div class="lightbox-navigation">
                <a href="#"  class="lightbox-arrow lightboxPrevBtn" data-index="0">
                    <svg xmlns="http://www.w3.org/2000/svg" height="24" width="24" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m15 19-7-7 7-7" />
                    </svg>
                </a>
                <a href="#" class="lightbox-arrow lightboxNextBtn" data-index="0">
                    <svg xmlns="http://www.w3.org/2000/svg" height="24" width="24" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m9 5 7 7-7 7" />
                    </svg>
                </a>
            </div>
        `;

        app.appendChild(wrapper);
        app.appendChild(res);

        return res;
    }

    showLightbox(index = 0) {
        this.boxWrapper.classList.add("show");
        this.lightboxList.innerHTML = `<div class="lightbox-inner"><img src="${this.images[index].src}"></div>`;
        this.lightboxNextBtn.dataset.index = index;
        this.lightboxPrevBtn.dataset.index = index;
    }

    closeLightbox() {
        this.boxWrapper.classList.remove("show");
        this.lightboxList.innerHTML = "";
    }

    static showModal(target) {
        body.classList.add("modal-open");
        rsvpModalOverlay.classList.add("show");
        rsvpModalOverlay.style = "display: block;";
        target.classList.add("show");
        target.style = "display: block; overflow: hidden;";
    }

    static closeModal(target) {
        body.classList.remove("modal-open");
        rsvpModalOverlay.classList.remove("show");
        rsvpModalOverlay.style = "display: none;";
        target.classList.remove("show");
        target.style = "display: none;";
    }

    toggle(bol) {
        this.__ready = !!bol;
    }
}

var lightboxes = [new LightBox("gallery1"), new LightBox("gallery2"), new LightBox("photo1"), new LightBox("photo2")];

// invitation
openInvitation = (target) => {
    btnMusic.style.display = "flex";
    btnMusic.classList.add("rotate");
    playMusic(true);
    openFullScreen();

    main.allowTouchMove = true;
    menuElement.classList.remove("d-none");
    let rect = menuElement.getBoundingClientRect();
    let menuHeight = rect.height + "px";

    document.querySelectorAll(".bottom-frame").forEach((e) => (e.style.bottom = menuHeight));

    menu.slides.forEach((slide, i) => {
        // slide.dataset.swiperIndex(i);
        slide.addEventListener("click", () => {
            setActive(i);
        });
    });
};

// toggle open invitation
var invToggle = (e) => {
    this.openInvitation();
    setActive(1);
    art.classList.remove("not-open");
    e.target.style.display = "none";
};

// buka undangan

var btnOpenInvitation = document.getElementsByClassName("btn-open-invitation");

for (var i = 0; i < btnOpenInvitation.length; i++) {
    btnOpenInvitation[i].addEventListener("click", invToggle, false);
}

// tampilkan gift
var btnGift = document.getElementsByClassName("btn-gift");
showGift = (index) => {
    for (var i = 0; i < btnGift.length; i++) {
        if (i != index) {
            giftContainer[i].style.display = "none";
        }
    }

    giftContainer[index].style.display = "inherit";
};

function showClick(no) {
    console.log("index no : " + no);
}

var giftContainer = document.getElementsByClassName("gift-container");
for (var i = 0; i < giftContainer.length; i++) {
    giftContainer[i].style.display = "none";
}

for (let a = 0; a < btnGift.length; a++) {
    btnGift[a].onclick = () => {
        this.showGift(a);
    };
}

// countdown
var countdownElement = document.getElementsByClassName("countdown-wrapper");

displayCountdown = (target) => {
    var countDownDate = new Date(target.dataset.datetime).getTime();
    var daysEl = target.querySelector(".countdown > .day > .number");
    var hoursEl = target.querySelector(".countdown > .hour > .number");
    var minutesEl = target.querySelector(".countdown > .minute > .number");
    var secondsEl = target.querySelector(".countdown > .second > .number");

    // Update the count down every 1 second
    var x = setInterval(function () {
        // Get today's date and time
        var now = new Date().getTime();

        // Find the distance between now and the count down date
        var distance = countDownDate - now;

        // Time calculations for days, hours, minutes and seconds
        var days = Math.floor(distance / (1000 * 60 * 60 * 24));
        var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        var seconds = Math.floor((distance % (1000 * 60)) / 1000);

        daysEl.innerHTML = days;
        hoursEl.innerHTML = hours;
        minutesEl.innerHTML = minutes;
        secondsEl.innerHTML = seconds;

        // If the count down is over, write some text
        if (distance < 0) {
            clearInterval(x);
            daysEl.innerHTML = "00";
            hoursEl.innerHTML = "00";
            minutesEl.innerHTML = "00";
            secondsEl.innerHTML = "00";
        }
    }, 1000);
};

for (var i = 0; i < countdownElement.length; i++) {
    this.displayCountdown(countdownElement[i]);
}

// rsvp
var btnRsvp = document.getElementsByClassName("btn-rsvp");
var rsvpPlaceholder = document.querySelector(".rsvp-placeholder") || null;
var rsvpForm = document.querySelector(".rsvp-form") || null;
var rsvpModal = document.querySelector("#rsvpModal");

rsvpModal.querySelector(".btn.btn-close").onclick = () => LightBox.closeModal(rsvpModal);

for (var i = 0; i < btnRsvp.length; i++) {
    if (rsvpPlaceholder) {
        btnRsvp[i].style.display = "none";
    } else {
        btnRsvp[i].onclick = () => {
            LightBox.showModal(rsvpModal);
        };
    }
}

// inser rsvp to element
if (rsvpForm && rsvpPlaceholder) {
    rsvpPlaceholder.innerHTML = "";
    rsvpPlaceholder.appendChild(rsvpForm);
}

// copy rekening
var accountNumber = document.getElementsByClassName("account-number");

for (var i = 0; i < accountNumber.length; i++) {
    if (accountNumber[i].innerHTML) {
        accountNumber[i].insertAdjacentHTML(
            "afterend",
            `<button type='button' class='btn btn-sm btn-primary mt-2 mb-2 animate__animated animate__fadeInUp animate__slow delay-5' data-text='${accountNumber[i].innerText}' onclick='copyText(event)' style='font-family: sans-serif; border-radius: 4px'>Copy Rekening</button>`
        );
    }
}

copyText = (e) => {
    var newInp = document.createElement("input");
    newInp.autofocus = false;
    newInp.value = e.target.dataset.text;
    document.body.appendChild(newInp);
    newInp.select();
    document.execCommand("copy");
    newInp.remove();
    e.target.innerHTML = "Berhasil Dicopy";
};

// Comment
document.querySelectorAll(".comment > .mb-3 small").forEach(function (e) {
    e.innerHTML = moment(e.innerHTML).fromNow();
});
