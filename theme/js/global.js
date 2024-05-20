const invitationBtn = document.querySelector("#invitation-open");

invitationBtn.addEventListener("click", (e) => {
    document.body.classList.add("open");
});

window.location.hash = "";
setTimeout(() => {
    window.scrollTo(0, 0);
    window.scroll({ behavior: "smooth", top: 0, left: 0 });

    // AOS.init();
}, 250);

const countdownElement = document.querySelector(".countdown-wrapper");
displayCountdown(countdownElement);

function displayCountdown(target) {
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
}

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
            <a href="javascript:void(0)" class="btn-lightbox lightboxCloseBtn">
                <svg xmlns="http://www.w3.org/2000/svg" height="24" width="24" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 0 1 1.414 0L10 8.586l4.293-4.293a1 1 0 1 1 1.414 1.414L11.414 10l4.293 4.293a1 1 0 0 1-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 0 1-1.414-1.414L8.586 10 4.293 5.707a1 1 0 0 1 0-1.414z" clip-rule="evenodd" />
                </svg>
            </a>
            <div class="lightbox-navigation">
                <a href="javascript:void(0)" class="lightbox-arrow lightboxPrevBtn" data-index="0">
                    <svg xmlns="http://www.w3.org/2000/svg" height="24" width="24" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m15 19-7-7 7-7" />
                    </svg>
                </a>
                <a href="javascript:void(0)" class="lightbox-arrow lightboxNextBtn" data-index="0">
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

const lightboxes = [new LightBox("gallery1")];
