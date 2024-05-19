function deleteImg(img, name) {
    let image = document.getElementById(img);
    let del = document.getElementById("del");
    let count = document.getElementById("count");
    let total = count.value;

    if (del.value == "") {
        del.value = name;
    } else {
        del.value += "??" + name;
    }
    image.style.display = "none";
    count.value = total - 1;
}

function apply(user, page) {
    var box = document.getElementById("progress-box");
    var wrap = document.getElementById("wrapper");
    var loader = document.querySelector("#wrapper > .loader");
    var progressBar = document.querySelector("#wrapper > .loading-bar > .progress-bar");
    var state = document.querySelector("#wrapper > .status > .state");
    var percentage = document.querySelector("#wrapper > .status > .percentage");
    var status = document.getElementById("status");

    // URL VALIDATION
    function validURL(str) {
        var urlregex =
            /^(https?|ftp):\/\/([a-zA-Z0-9.-]+(:[a-zA-Z0-9.&%$-]+)*@)*((25[0-5]|2[0-4][0-9]|1[0-9]{2}|[1-9][0-9]?)(\.(25[0-5]|2[0-4][0-9]|1[0-9]{2}|[1-9]?[0-9])){3}|([a-zA-Z0-9-]+\.)*[a-zA-Z0-9-]+\.(com|edu|gov|int|mil|net|org|biz|arpa|info|name|pro|aero|coop|museum|[a-zA-Z]{2}))(:[0-9]+)*(\/($|[a-zA-Z0-9.,?'\\+&%$#=~_-]+))*$/;
        return urlregex.test(str);
    }

    // cover
    if (page == "cover") {
        var container = document.getElementById("container");
        var title_cover = document.getElementById("title_cover");
        var cover_name = document.getElementById("cover_name");
        var cover_img = document.getElementById("cover_img").files;
        var cover_img = cover_img[0];
        var pageNav = document.getElementById("page");

        if (typeof cover_img != "undefined") {
            if (cover_img["size"] > 20000000 || cover_img["type"] != "image/jpeg") {
                Swal.fire({
                    icon: "error",
                    confirmButtonText: "OK",
                    confirmButtonColor: "#f54949",
                    title: "FAIL",
                    text: "Format Gambar harus *.jpg dan tidak boleh lebih besar dari 20mb !",
                });
                return;
            }
        }
        let formData = new FormData();
        formData.append("user", user);
        formData.append("page", page);
        formData.append("title_cover", title_cover.value);
        formData.append("cover_name", cover_name.value);
        formData.append("cover_img", cover_img);
        var ajax = new XMLHttpRequest();
        //cek kesiapan ajax
        ajax.onreadystatechange = function () {
            if (ajax.readyState == 4 && ajax.status == 200) {
                document.getElementById("cover_img").value = "";
                var ok = ajax.responseText;
                container.innerHTML = ok;
                if (status.innerText == "") {
                    status.innerHTML = '<h4 class="status-show fw-bold px-2 py-2 mb-4 bg-green rounded-2 text-white"><i class="bx bx-check bx-lg"></i> Complete</h4>';

                    var ajaxPage = new XMLHttpRequest();
                    ajaxPage.onreadystatechange = function () {
                        if (ajaxPage.readyState == 4 && ajax.status == 200) {
                            pageNav.innerHTML = ajaxPage.responseText;
                        }
                    };
                    ajaxPage.open("GET", "pageajax.php?pagecomplete=" + page + "&pageuser=" + user, "false");
                    ajaxPage.send();
                }
            }
        };
        ajax.open("POST", `proses.php`, "true");
        ajax.upload.addEventListener("progress", (e) => {
            const persen = e.lengthComputable ? (e.loaded / e.total) * 100 : 0;
            progressBar.style.width = persen.toFixed(2) + "%";
            percentage.textContent = persen.toFixed(2) + "%";

            state.textContent = "Uploading...";
            loader.textContent = "";
            loader.style.animation = "rotationInf 1s infinite forwards linear";
            box.style.animation = "in 0.3s forwards ease";
            box.style.transform = "scale(1)";

            if (persen == 100) {
                state.textContent = "Complete";
                state.style.animation = "fadeLeft 0.5s forwards ease";
                state.style.animation = "fadeLeft2 0.5s forwards ease";
                loader.style.animation = "rotation 0.3s forwards linear";
                loader.textContent = "";
                box.style.animation = "out 0.3s forwards ease";
                box.style.animationDelay = "3s";
            }
        });
        ajax.send(formData);
        return;
    }

    // QR-Code
    if (page == "qrcode") {
        var container = document.getElementById("container");
        var switch_barcode = document.getElementById("sw-input");
        var switch_strict = document.getElementById("sw-strict");
        var pageNav = document.getElementById("page");

        let formData = new FormData();
        formData.append("user", user);
        formData.append("page", page);
        formData.append("switch_barcode", switch_barcode.value);
        formData.append("switch_strict", switch_strict.value);
        var ajax = new XMLHttpRequest();
        //cek kesiapan ajax
        ajax.onreadystatechange = function () {
            if (ajax.readyState == 4 && ajax.status == 200) {
                var ok = ajax.responseText;
                container.innerHTML = ok;
                if (status.innerText == "") {
                    status.innerHTML = '<h4 class="status-show fw-bold px-2 py-2 mb-4 bg-green rounded-2 text-white"><i class="bx bx-check bx-lg"></i> Complete</h4>';

                    var ajaxPage = new XMLHttpRequest();
                    ajaxPage.onreadystatechange = function () {
                        if (ajaxPage.readyState == 4 && ajax.status == 200) {
                            pageNav.innerHTML = ajaxPage.responseText;
                        }
                    };
                    ajaxPage.open("GET", "pageajax.php?pagecomplete=" + page + "&pageuser=" + user, "false");
                    ajaxPage.send();
                }
            }
        };
        ajax.open("POST", `proses.php`, "true");
        ajax.upload.addEventListener("progress", (e) => {
            const persen = e.lengthComputable ? (e.loaded / e.total) * 100 : 0;
            progressBar.style.width = persen.toFixed(2) + "%";
            percentage.textContent = persen.toFixed(2) + "%";

            state.textContent = "Uploading...";
            loader.textContent = "";
            loader.style.animation = "rotationInf 1s infinite forwards linear";
            box.style.animation = "in 0.3s forwards ease";
            box.style.transform = "scale(1)";

            if (persen == 100) {
                state.textContent = "Complete";
                state.style.animation = "fadeLeft 0.5s forwards ease";
                state.style.animation = "fadeLeft2 0.5s forwards ease";
                loader.style.animation = "rotation 0.3s forwards linear";
                loader.textContent = "";
                box.style.animation = "out 0.3s forwards ease";
                box.style.animationDelay = "3s";
            }
        });
        ajax.send(formData);
        return;
    }

    // song
    if (page == "song") {
        var del = document.getElementById("del");
        var container = document.getElementById("container");
        var audio = document.getElementById("song");
        let song = audio.files[0];

        let formData = new FormData();
        formData.append("user", user);
        formData.append("page", page);
        formData.append("song", song);

        if (typeof song == "undefined") {
            Swal.fire({
                icon: "error",
                confirmButtonText: "OK",
                confirmButtonColor: "#f54949",
                title: "FAIL",
                text: "Input File Tidak bolej Kosong !",
            });
            return false;
        }

        // cek jika file audio bukan mp3
        if (!song.name.match(/\.(mp3)$/i)) {
            Swal.fire({
                icon: "error",
                confirmButtonText: "OK",
                confirmButtonColor: "#f54949",
                title: "FAIL",
                text: "Format Audio harus *.mp3 !",
            });
            return false;
        }

        // cek jika file audio lebih dari 10mb
        if (song["size"] > 5000000 || song["type"] != "audio/mpeg") {
            Swal.fire({
                icon: "error",
                confirmButtonText: "OK",
                confirmButtonColor: "#f54949",
                title: "FAIL",
                text: "Audio tidak boleh lebih besar dari 5mb !",
            });
            return false;
        }

        var ajax = new XMLHttpRequest();
        //cek kesiapan ajax
        ajax.onreadystatechange = function () {
            if (ajax.readyState == 4 && ajax.status == 200) {
                location.reload();
            }
        };
        ajax.open("POST", `proses.php`, "true");
        ajax.upload.addEventListener("progress", (e) => {
            const persen = e.lengthComputable ? (e.loaded / e.total) * 100 : 0;
            progressBar.style.width = persen.toFixed(2) + "%";
            percentage.textContent = persen.toFixed(2) + "%";

            state.textContent = "Uploading...";
            loader.textContent = "";
            loader.style.animation = "rotationInf 1s infinite forwards linear";
            box.style.animation = "in 0.3s forwards ease";
            box.style.transform = "scale(1)";

            if (persen == 100) {
                state.textContent = "Complete";
                state.style.animation = "fadeLeft 0.5s forwards ease";
                state.style.animation = "fadeLeft2 0.5s forwards ease";
                loader.style.animation = "rotation 0.3s forwards linear";
                loader.textContent = "";
                box.style.animation = "out 0.3s forwards ease";
                box.style.animationDelay = "3s";
            }
        });
        ajax.send(formData);
    }

    // quote
    if (page == "quote") {
        var container = document.getElementById("container");
        var switch_quote = document.getElementById("sw-input");
        var quote_isi = document.getElementById("quote_isi");
        var quote_arti = document.getElementById("quote_arti");
        var quote_kutip = document.getElementById("quote_kutip");
        var quote_img = document.getElementById("quote_img").files;
        var quote_img = quote_img[0];
        var pageNav = document.getElementById("page");

        if (typeof quote_img != "undefined") {
            if (quote_img["size"] > 20000000 || quote_img["type"] != "image/jpeg") {
                Swal.fire({
                    icon: "error",
                    confirmButtonText: "OK",
                    confirmButtonColor: "#f54949",
                    title: "FAIL",
                    text: "Format Gambar harus *.jpg dan tidak boleh lebih besar dari 20mb !",
                });
                return false;
            }
        }
        let formData = new FormData();
        formData.append("user", user);
        formData.append("page", page);
        formData.append("switch_quote", switch_quote.value);
        formData.append("quote_isi", quote_isi.value);
        formData.append("quote_arti", quote_arti.value);
        formData.append("quote_kutip", quote_kutip.value);
        formData.append("quote_img", quote_img);
        var ajax = new XMLHttpRequest();
        //cek kesiapan ajax
        ajax.onreadystatechange = function () {
            if (ajax.readyState == 4 && ajax.status == 200) {
                document.getElementById("quote_img").value = "";
                var ok = ajax.responseText;
                container.innerHTML = ok;
                if (status.innerText == "") {
                    status.innerHTML = '<h4 class="status-show fw-bold px-2 py-2 mb-4 bg-green rounded-2 text-white"><i class="bx bx-check bx-lg"></i> Complete</h4>';

                    var ajaxPage = new XMLHttpRequest();
                    ajaxPage.onreadystatechange = function () {
                        if (ajaxPage.readyState == 4 && ajax.status == 200) {
                            pageNav.innerHTML = ajaxPage.responseText;
                        }
                    };
                    ajaxPage.open("GET", "pageajax.php?pagecomplete=" + page + "&pageuser=" + user, "false");
                    ajaxPage.send();
                }
            }
        };
        ajax.open("POST", `proses.php`, "true");
        ajax.upload.addEventListener("progress", (e) => {
            const persen = e.lengthComputable ? (e.loaded / e.total) * 100 : 0;
            progressBar.style.width = persen.toFixed(2) + "%";
            percentage.textContent = persen.toFixed(2) + "%";

            state.textContent = "Uploading...";
            loader.textContent = "";
            loader.style.animation = "rotationInf 1s infinite forwards linear";
            box.style.animation = "in 0.3s forwards ease";
            box.style.transform = "scale(1)";

            if (persen == 100) {
                state.textContent = "Complete";
                state.style.animation = "fadeLeft 0.5s forwards ease";
                state.style.animation = "fadeLeft2 0.5s forwards ease";
                loader.style.animation = "rotation 0.3s forwards linear";
                loader.textContent = "";
                box.style.animation = "out 0.3s forwards ease";
                box.style.animationDelay = "3s";
            }
        });
        ajax.send(formData);
    }

    // VIDEO
    if (page == "video") {
        var container = document.getElementById("container");
        var switch_video = document.getElementById("sw-input");
        var vid_src = document.getElementById("video_url");
        var vid_msg = document.getElementById("video_msg");
        var vid_kutip = document.getElementById("video_kutip");
        var pageNav = document.getElementById("page");

        if (validURL(vid_src.value) == false) {
            Swal.fire({
                icon: "error",
                confirmButtonText: "OK",
                confirmButtonColor: "#f54949",
                title: "FAIL",
                text: "Format URL di Video Url Salah !",
            });
            return;
        }

        let formData = new FormData();
        formData.append("user", user);
        formData.append("page", page);
        formData.append("switch_video", switch_video.value);
        formData.append("vid_src", vid_src.value);
        formData.append("vid_msg", vid_msg.value);
        formData.append("vid_kutip", vid_kutip.value);
        var ajax = new XMLHttpRequest();
        //cek kesiapan ajax
        ajax.onreadystatechange = function () {
            if (ajax.readyState == 4 && ajax.status == 200) {
                var ok = ajax.responseText;
                container.innerHTML = ok;
                if (status.innerText == "") {
                    status.innerHTML = '<h4 class="status-show fw-bold px-2 py-2 mb-4 bg-green rounded-2 text-white"><i class="bx bx-check bx-lg"></i> Complete</h4>';

                    var ajaxPage = new XMLHttpRequest();
                    ajaxPage.onreadystatechange = function () {
                        if (ajaxPage.readyState == 4 && ajax.status == 200) {
                            pageNav.innerHTML = ajaxPage.responseText;
                        }
                    };
                    ajaxPage.open("GET", "pageajax.php?pagecomplete=" + page + "&pageuser=" + user, "false");
                    ajaxPage.send();
                }
            }
        };
        ajax.open("POST", `proses.php`, "true");
        ajax.upload.addEventListener("progress", (e) => {
            const persen = e.lengthComputable ? (e.loaded / e.total) * 100 : 0;
            progressBar.style.width = persen.toFixed(2) + "%";
            percentage.textContent = persen.toFixed(2) + "%";

            state.textContent = "Uploading...";
            loader.textContent = "";
            loader.style.animation = "rotationInf 1s infinite forwards linear";
            box.style.animation = "in 0.3s forwards ease";
            box.style.transform = "scale(1)";

            if (persen == 100) {
                state.textContent = "Complete";
                state.style.animation = "fadeLeft 0.5s forwards ease";
                state.style.animation = "fadeLeft2 0.5s forwards ease";
                loader.style.animation = "rotation 0.3s forwards linear";
                loader.textContent = "";
                box.style.animation = "out 0.3s forwards ease";
                box.style.animationDelay = "3s";
            }
        });
        ajax.send(formData);
        return;
    }

    // COUPLE
    if (page == "couple") {
        var container = document.getElementById("container");
        var switch_couple = document.getElementById("sw-couple");
        var boy = document.getElementById("boy");
        var boy_msg = document.getElementById("boy_msg");
        var girl = document.getElementById("girl");
        var girl_msg = document.getElementById("girl_msg");
        var boy_img = document.getElementById("boy_img").files;
        var boy_img = boy_img[0];
        var girl_img = document.getElementById("girl_img").files;
        var girl_img = girl_img[0];
        var pageNav = document.getElementById("page");

        if (typeof boy_img != "undefined") {
            if (boy_img["size"] > 20000000 || boy_img["type"] != "image/jpeg") {
                Swal.fire({
                    icon: "error",
                    confirmButtonText: "OK",
                    confirmButtonColor: "#f54949",
                    title: "FAIL",
                    text: "Format Gambar Pria harus *.jpg dan tidak boleh lebih besar dari 20mb !",
                });
                return;
            }
        }
        if (typeof girl_img != "undefined") {
            if (girl_img["size"] > 20000000 || girl_img["type"] != "image/jpeg") {
                Swal.fire({
                    icon: "error",
                    confirmButtonText: "OK",
                    confirmButtonColor: "#f54949",
                    title: "FAIL",
                    text: "Format Gambar Wanita harus *.jpg dan tidak boleh lebih besar dari 20mb !",
                });
                return;
            }
        }
        let formData = new FormData();
        formData.append("user", user);
        formData.append("page", page);
        formData.append("switch_couple", switch_couple.value);
        formData.append("boy", boy.value);
        formData.append("boy_msg", boy_msg.value);
        formData.append("boy_img", boy_img);
        formData.append("girl", girl.value);
        formData.append("girl_msg", girl_msg.value);
        formData.append("girl_img", girl_img);
        var ajax = new XMLHttpRequest();
        //cek kesiapan ajax
        ajax.onreadystatechange = function () {
            if (ajax.readyState == 4 && ajax.status == 200) {
                document.getElementById("boy_img").value = "";
                document.getElementById("girl_img").value = "";
                var ok = ajax.responseText;
                container.innerHTML = ok;
                if (status.innerText == "") {
                    status.innerHTML = '<h4 class="status-show fw-bold px-2 py-2 mb-4 bg-green rounded-2 text-white"><i class="bx bx-check bx-lg"></i> Complete</h4>';

                    var ajaxPage = new XMLHttpRequest();
                    ajaxPage.onreadystatechange = function () {
                        if (ajaxPage.readyState == 4 && ajax.status == 200) {
                            pageNav.innerHTML = ajaxPage.responseText;
                        }
                    };
                    ajaxPage.open("GET", "pageajax.php?pagecomplete=" + page + "&pageuser=" + user, "false");
                    ajaxPage.send();
                }
            }
        };
        ajax.open("POST", `proses.php`, "true");
        ajax.upload.addEventListener("progress", (e) => {
            const persen = e.lengthComputable ? (e.loaded / e.total) * 100 : 0;
            progressBar.style.width = persen.toFixed(2) + "%";
            percentage.textContent = persen.toFixed(2) + "%";

            state.textContent = "Uploading...";
            loader.textContent = "";
            loader.style.animation = "rotationInf 1s infinite forwards linear";
            box.style.animation = "in 0.3s forwards ease";
            box.style.transform = "scale(1)";

            if (persen == 100) {
                state.textContent = "Complete";
                state.style.animation = "fadeLeft 0.5s forwards ease";
                state.style.animation = "fadeLeft2 0.5s forwards ease";
                loader.style.animation = "rotation 0.3s forwards linear";
                loader.textContent = "";
                box.style.animation = "out 0.3s forwards ease";
                box.style.animationDelay = "3s";
            }
        });
        ajax.send(formData);

        return;
    }

    // ACARA
    if (page == "acara") {
        var container = document.getElementById("container");
        var switch_acara = document.getElementById("sw-acara");
        var acara_title = document.getElementById("acara_title");
        var acara_date = document.getElementById("acara_date");
        var acara_time = document.getElementById("acara_time");
        var acara_alamat = document.getElementById("acara_alamat");
        var acara_title2 = document.getElementById("acara_title2");
        var acara_date2 = document.getElementById("acara_date2");
        var acara_time2 = document.getElementById("acara_time2");
        var acara_alamat2 = document.getElementById("acara_alamat2");
        var acara_cd = document.getElementById("acara_cd");
        var pageNav = document.getElementById("page");

        if (switch_acara == "on") {
            if (acara_title.value == "" || acara_date.value == "" || acara_time.value == "" || acara_alamat.value == "") {
                Swal.fire({
                    icon: "error",
                    confirmButtonText: "OK",
                    confirmButtonColor: "#f54949",
                    title: "FAIL",
                    text: "Semua Input di Acara 1 tidak boleh kosong !",
                });
                return;
            }
        }
        if (acara_title2.value == "" || acara_date2.value == "" || acara_time2.value == "" || acara_alamat2.value == "") {
            Swal.fire({
                icon: "error",
                confirmButtonText: "OK",
                confirmButtonColor: "#f54949",
                title: "FAIL",
                text: "Semua Input di Acara 2 tidak boleh kosong !",
            });
            return;
        }
        if (acara_cd.value == "") {
            Swal.fire({
                icon: "error",
                confirmButtonText: "OK",
                confirmButtonColor: "#f54949",
                title: "FAIL",
                text: "Input Countdown tidak boleh kosong !",
            });
            return;
        }

        let formData = new FormData();
        formData.append("user", user);
        formData.append("page", page);
        formData.append("switch_acara", switch_acara.value);
        formData.append("acara_title", acara_title.value);
        formData.append("acara_date", acara_date.value);
        formData.append("acara_time", acara_time.value);
        formData.append("acara_alamat", acara_alamat.value);
        formData.append("acara_title2", acara_title2.value);
        formData.append("acara_date2", acara_date2.value);
        formData.append("acara_time2", acara_time2.value);
        formData.append("acara_alamat2", acara_alamat2.value);
        formData.append("acara_cd", acara_cd.value);

        var ajax = new XMLHttpRequest();
        //cek kesiapan ajax
        ajax.onreadystatechange = function () {
            if (ajax.readyState == 4 && ajax.status == 200) {
                var ok = ajax.responseText;
                container.innerHTML = ok;
                if (status.innerText == "") {
                    status.innerHTML = '<h4 class="status-show fw-bold px-2 py-2 mb-4 bg-green rounded-2 text-white"><i class="bx bx-check bx-lg"></i> Complete</h4>';

                    var ajaxPage = new XMLHttpRequest();
                    ajaxPage.onreadystatechange = function () {
                        if (ajaxPage.readyState == 4 && ajax.status == 200) {
                            pageNav.innerHTML = ajaxPage.responseText;
                        }
                    };
                    ajaxPage.open("GET", "pageajax.php?pagecomplete=" + page + "&pageuser=" + user, "false");
                    ajaxPage.send();
                }
            }
        };
        ajax.open("POST", `proses.php`, "true");
        ajax.upload.addEventListener("progress", (e) => {
            const persen = e.lengthComputable ? (e.loaded / e.total) * 100 : 0;
            progressBar.style.width = persen.toFixed(2) + "%";
            percentage.textContent = persen.toFixed(2) + "%";

            state.textContent = "Uploading...";
            loader.textContent = "";
            loader.style.animation = "rotationInf 1s infinite forwards linear";
            box.style.animation = "in 0.3s forwards ease";
            box.style.transform = "scale(1)";

            if (persen == 100) {
                state.textContent = "Complete";
                state.style.animation = "fadeLeft 0.5s forwards ease";
                state.style.animation = "fadeLeft2 0.5s forwards ease";
                loader.style.animation = "rotation 0.3s forwards linear";
                loader.textContent = "";
                box.style.animation = "out 0.3s forwards ease";
                box.style.animationDelay = "3s";
            }
        });
        ajax.send(formData);
        return;
    }
    // MAP
    if (page == "map") {
        var container = document.getElementById("container");
        var switch_map = document.getElementById("sw-input");
        var map_desc = document.getElementById("map_desc");
        var pageNav = document.getElementById("page");
        var map = document.getElementById("mapPicker");

        let formData = new FormData();
        formData.append("user", user);
        formData.append("page", page);
        formData.append("switch_map", switch_map.value);
        formData.append("map_desc", map_desc.value);
        formData.append("lat", map.dataset.lat);
        formData.append("lon", map.dataset.lon);
        var ajax = new XMLHttpRequest();
        //cek kesiapan ajax
        ajax.onreadystatechange = function () {
            if (ajax.readyState == 4 && ajax.status == 200) {
                var ok = ajax.responseText;
                if (ok == "fail") {
                    Swal.fire({
                        icon: "error",
                        confirmButtonText: "OK",
                        confirmButtonColor: "#f54949",
                        title: "FAIL",
                        text: "Lokasi Tidak Ditemukan !",
                    });
                    return;
                }
                container.innerHTML = ok;
                if (status.innerText == "") {
                    status.innerHTML = '<h4 class="status-show fw-bold px-2 py-2 mb-4 bg-green rounded-2 text-white"><i class="bx bx-check bx-lg"></i> Complete</h4>';

                    var ajaxPage = new XMLHttpRequest();
                    ajaxPage.onreadystatechange = function () {
                        if (ajaxPage.readyState == 4 && ajax.status == 200) {
                            pageNav.innerHTML = ajaxPage.responseText;
                        }
                    };
                    ajaxPage.open("GET", "pageajax.php?pagecomplete=" + page + "&pageuser=" + user, "false");
                    ajaxPage.send();
                }
            }
        };
        ajax.open("POST", `proses.php`, "true");
        ajax.upload.addEventListener("progress", (e) => {
            const persen = e.lengthComputable ? (e.loaded / e.total) * 100 : 0;
            progressBar.style.width = persen.toFixed(2) + "%";
            percentage.textContent = persen.toFixed(2) + "%";

            state.textContent = "Uploading...";
            loader.textContent = "";
            loader.style.animation = "rotationInf 1s infinite forwards linear";
            box.style.animation = "in 0.3s forwards ease";
            box.style.transform = "scale(1)";

            if (persen == 100) {
                state.textContent = "Complete";
                state.style.animation = "fadeLeft 0.5s forwards ease";
                state.style.animation = "fadeLeft2 0.5s forwards ease";
                loader.style.animation = "rotation 0.3s forwards linear";
                loader.textContent = "";
                box.style.animation = "out 0.3s forwards ease";
                box.style.animationDelay = "3s";
            }
        });
        ajax.send(formData);
        return;
    }
    // PROKES
    if (page == "prokes") {
        var container = document.getElementById("container");
        var switch_prokes = document.getElementById("sw-input");
        var prokes_msg = document.getElementById("prokes_msg");
        var pageNav = document.getElementById("page");

        let formData = new FormData();
        formData.append("user", user);
        formData.append("page", page);
        formData.append("switch_prokes", switch_prokes.value);
        formData.append("prokes_msg", prokes_msg.value);
        var ajax = new XMLHttpRequest();
        //cek kesiapan ajax
        ajax.onreadystatechange = function () {
            if (ajax.readyState == 4 && ajax.status == 200) {
                var ok = ajax.responseText;
                container.innerHTML = ok;
                if (status.innerText == "") {
                    status.innerHTML = '<h4 class="status-show fw-bold px-2 py-2 mb-4 bg-green rounded-2 text-white"><i class="bx bx-check bx-lg"></i> Complete</h4>';

                    var ajaxPage = new XMLHttpRequest();
                    ajaxPage.onreadystatechange = function () {
                        if (ajaxPage.readyState == 4 && ajax.status == 200) {
                            pageNav.innerHTML = ajaxPage.responseText;
                        }
                    };
                    ajaxPage.open("GET", "pageajax.php?pagecomplete=" + page + "&pageuser=" + user, "false");
                    ajaxPage.send();
                }
            }
        };
        ajax.open("POST", `proses.php`, "true");
        ajax.upload.addEventListener("progress", (e) => {
            const persen = e.lengthComputable ? (e.loaded / e.total) * 100 : 0;
            progressBar.style.width = persen.toFixed(2) + "%";
            percentage.textContent = persen.toFixed(2) + "%";

            state.textContent = "Uploading...";
            loader.textContent = "";
            loader.style.animation = "rotationInf 1s infinite forwards linear";
            box.style.animation = "in 0.3s forwards ease";
            box.style.transform = "scale(1)";

            if (persen == 100) {
                state.textContent = "Complete";
                state.style.animation = "fadeLeft 0.5s forwards ease";
                state.style.animation = "fadeLeft2 0.5s forwards ease";
                loader.style.animation = "rotation 0.3s forwards linear";
                loader.textContent = "";
                box.style.animation = "out 0.3s forwards ease";
                box.style.animationDelay = "3s";
            }
        });
        ajax.send(formData);
        return;
    }
    // galery
    if (page == "galery") {
        var del = document.getElementById("del");
        var container = document.getElementById("container");
        var switch_galery = document.getElementById("sw-input");
        var images = document.querySelectorAll(".uploadFile");
        let imgCount = 1;

        let formData = new FormData();
        formData.append("user", user);
        formData.append("page", page);
        formData.append("switch_galery", switch_galery.value);
        for (let a = 0; a < images.length; a++) {
            if (typeof images[a].files[0] != "undefined") {
                let gal = images[a].files[0];
                if (!gal.name.match(/\.(jpg|jpeg)$/i)) {
                    Swal.fire({
                        icon: "error",
                        confirmButtonText: "OK",
                        confirmButtonColor: "#f54949",
                        title: "FAIL",
                        text: "Format Gambar harus *.jpg atau *.jpeg",
                    });
                    return false;
                }
                // cek jika size gambar lebih dari 20mb
                if (gal["size"] > 20000000 || gal["type"] != "image/jpeg") {
                    Swal.fire({
                        icon: "error",
                        confirmButtonText: "OK",
                        confirmButtonColor: "#f54949",
                        title: "FAIL",
                        text: "Format Gambar harus *.jpg dan tidak boleh lebih besar dari 20mb !",
                    });
                    return false;
                }
                formData.append("image" + imgCount, gal);
                imgCount++;
            }
        }

        if (del.value != "") {
            formData.append("delete", del.value);
        }

        var ajax = new XMLHttpRequest();
        //cek kesiapan ajax
        ajax.onreadystatechange = function () {
            if (ajax.readyState == 4 && ajax.status == 200) {
                var ok = ajax.responseText;
                // container.innerHTML = ok;
                location.reload();
            }
        };
        ajax.open("POST", `proses.php`, "true");
        ajax.upload.addEventListener("progress", (e) => {
            const persen = e.lengthComputable ? (e.loaded / e.total) * 100 : 0;
            progressBar.style.width = persen.toFixed(2) + "%";
            percentage.textContent = persen.toFixed(2) + "%";

            state.textContent = "Uploading...";
            loader.textContent = "";
            loader.style.animation = "rotationInf 1s infinite forwards linear";
            box.style.animation = "in 0.3s forwards ease";
            box.style.transform = "scale(1)";

            if (persen == 100) {
                state.textContent = "Complete";
                state.style.animation = "fadeLeft 0.5s forwards ease";
                state.style.animation = "fadeLeft2 0.5s forwards ease";
                loader.style.animation = "rotation 0.3s forwards linear";
                loader.textContent = "";
                box.style.animation = "out 0.3s forwards ease";
                box.style.animationDelay = "3s";
            }
        });
        ajax.send(formData);
    }

    // galery
    if (page == "galery2") {
        var del = document.getElementById("del");
        var container = document.getElementById("container");
        var switch_galery2 = document.getElementById("sw-input");
        var images = document.querySelectorAll(".uploadFile");
        let imgCount = 1;

        let formData = new FormData();
        formData.append("user", user);
        formData.append("page", page);
        formData.append("switch_galery2", switch_galery2.value);
        for (let a = 0; a < images.length; a++) {
            if (typeof images[a].files[0] != "undefined") {
                let gal = images[a].files[0];
                if (!gal.name.match(/\.(jpg|jpeg)$/i)) {
                    Swal.fire({
                        icon: "error",
                        confirmButtonText: "OK",
                        confirmButtonColor: "#f54949",
                        title: "FAIL",
                        text: "Format Gambar harus *.jpg atau *.jpeg",
                    });
                    return false;
                }
                // cek jika size gambar lebih dari 20mb
                if (gal["size"] > 20000000 || gal["type"] != "image/jpeg") {
                    Swal.fire({
                        icon: "error",
                        confirmButtonText: "OK",
                        confirmButtonColor: "#f54949",
                        title: "FAIL",
                        text: "Format Gambar harus *.jpg dan tidak boleh lebih besar dari 20mb !",
                    });
                    return false;
                }
                formData.append("image" + imgCount, gal);
                imgCount++;
            }
        }

        if (del.value != "") {
            formData.append("delete", del.value);
        }

        var ajax = new XMLHttpRequest();
        //cek kesiapan ajax
        ajax.onreadystatechange = function () {
            if (ajax.readyState == 4 && ajax.status == 200) {
                var ok = ajax.responseText;
                // container.innerHTML = ok;
                location.reload();
            }
        };
        ajax.open("POST", `proses.php`, "true");
        ajax.upload.addEventListener("progress", (e) => {
            const persen = e.lengthComputable ? (e.loaded / e.total) * 100 : 0;
            progressBar.style.width = persen.toFixed(2) + "%";
            percentage.textContent = persen.toFixed(2) + "%";

            state.textContent = "Uploading...";
            loader.textContent = "";
            loader.style.animation = "rotationInf 1s infinite forwards linear";
            box.style.animation = "in 0.3s forwards ease";
            box.style.transform = "scale(1)";

            if (persen == 100) {
                state.textContent = "Complete";
                state.style.animation = "fadeLeft 0.5s forwards ease";
                state.style.animation = "fadeLeft2 0.5s forwards ease";
                loader.style.animation = "rotation 0.3s forwards linear";
                loader.textContent = "";
                box.style.animation = "out 0.3s forwards ease";
                box.style.animationDelay = "3s";
            }
        });
        ajax.send(formData);
    }

    // rsvp
    if (page == "rsvp") {
        var container = document.getElementById("container");
        var switch_rsvp = document.getElementById("sw-input");
        var rsvp_msg = document.getElementById("rsvp_msg");
        var pageNav = document.getElementById("page");

        let formData = new FormData();
        formData.append("user", user);
        formData.append("page", page);
        formData.append("switch_rsvp", switch_rsvp.value);
        formData.append("rsvp_msg", rsvp_msg.value);

        var ajax = new XMLHttpRequest();
        //cek kesiapan ajax
        ajax.onreadystatechange = function () {
            if (ajax.readyState == 4 && ajax.status == 200) {
                var ok = ajax.responseText;
                container.innerHTML = ok;
                if (status.innerText == "") {
                    status.innerHTML = '<h4 class="status-show fw-bold px-2 py-2 mb-4 bg-green rounded-2 text-white"><i class="bx bx-check bx-lg"></i> Complete</h4>';

                    var ajaxPage = new XMLHttpRequest();
                    ajaxPage.onreadystatechange = function () {
                        if (ajaxPage.readyState == 4 && ajax.status == 200) {
                            pageNav.innerHTML = ajaxPage.responseText;
                        }
                    };
                    ajaxPage.open("GET", "pageajax.php?pagecomplete=" + page + "&pageuser=" + user, "false");
                    ajaxPage.send();
                }
            }
        };
        ajax.open("POST", `proses.php`, "true");
        ajax.upload.addEventListener("progress", (e) => {
            const persen = e.lengthComputable ? (e.loaded / e.total) * 100 : 0;
            progressBar.style.width = persen.toFixed(2) + "%";
            percentage.textContent = persen.toFixed(2) + "%";

            state.textContent = "Uploading...";
            loader.textContent = "";
            loader.style.animation = "rotationInf 1s infinite forwards linear";
            box.style.animation = "in 0.3s forwards ease";
            box.style.transform = "scale(1)";

            if (persen == 100) {
                state.textContent = "Complete";
                state.style.animation = "fadeLeft 0.5s forwards ease";
                state.style.animation = "fadeLeft2 0.5s forwards ease";
                loader.style.animation = "rotation 0.3s forwards linear";
                loader.textContent = "";
                box.style.animation = "out 0.3s forwards ease";
                box.style.animationDelay = "3s";
            }
        });
        ajax.send(formData);
    }

    // GIFT
    if (page == "gift") {
        var container = document.getElementById("container");
        var switch_rek = document.getElementById("sw-input");
        var bank_rek = document.getElementById("bank_rek");
        var bank_an = document.getElementById("bank_an");
        var gift_title = document.getElementById("gift_title");
        var gift_alamat = document.getElementById("gift_alamat");
        var gift_barcode = document.getElementById("gift_barcode").files;
        var gift_barcode = gift_barcode[0];
        var pageNav = document.getElementById("page");

        if (typeof gift_barcode != "undefined") {
            if (gift_barcode["size"] > 20000000 || gift_barcode["type"] != "image/jpeg") {
                Swal.fire({
                    icon: "error",
                    confirmButtonText: "OK",
                    confirmButtonColor: "#f54949",
                    title: "FAIL",
                    text: "Format Gambar harus *.jpg dan tidak boleh lebih besar dari 20mb !",
                });
                return false;
            }
        }

        let formData = new FormData();
        formData.append("user", user);
        formData.append("page", page);
        formData.append("switch_rek", switch_rek.value);
        formData.append("bank_rek", bank_rek.value);
        formData.append("bank_an", bank_an.value);
        formData.append("gift_title", gift_title.value);
        formData.append("gift_alamat", gift_alamat.value);
        formData.append("gift_barcode", gift_barcode);

        var ajax = new XMLHttpRequest();
        //cek kesiapan ajax
        ajax.onreadystatechange = function () {
            if (ajax.readyState == 4 && ajax.status == 200) {
                document.getElementById("gift_barcode").value = "";
                var ok = ajax.responseText;
                container.innerHTML = ok;
                if (status.innerText == "") {
                    status.innerHTML = '<h4 class="status-show fw-bold px-2 py-2 mb-4 bg-green rounded-2 text-white"><i class="bx bx-check bx-lg"></i> Complete</h4>';

                    var ajaxPage = new XMLHttpRequest();
                    ajaxPage.onreadystatechange = function () {
                        if (ajaxPage.readyState == 4 && ajax.status == 200) {
                            pageNav.innerHTML = ajaxPage.responseText;
                        }
                    };
                    ajaxPage.open("GET", "pageajax.php?pagecomplete=" + page + "&pageuser=" + user, "false");
                    ajaxPage.send();
                }
            }
        };
        ajax.open("POST", `proses.php`, "true");
        ajax.upload.addEventListener("progress", (e) => {
            const persen = e.lengthComputable ? (e.loaded / e.total) * 100 : 0;
            progressBar.style.width = persen.toFixed(2) + "%";
            percentage.textContent = persen.toFixed(2) + "%";

            state.textContent = "Uploading...";
            loader.textContent = "";
            loader.style.animation = "rotationInf 1s infinite forwards linear";
            box.style.animation = "in 0.3s forwards ease";
            box.style.transform = "scale(1)";

            if (persen == 100) {
                state.textContent = "Complete";
                state.style.animation = "fadeLeft 0.5s forwards ease";
                state.style.animation = "fadeLeft2 0.5s forwards ease";
                loader.style.animation = "rotation 0.3s forwards linear";
                loader.textContent = "";
                box.style.animation = "out 0.3s forwards ease";
                box.style.animationDelay = "3s";
            }
        });
        ajax.send(formData);
        return;
    }
    // THANKS
    if (page == "thx") {
        var container = document.getElementById("container");
        var thx_txt = document.getElementById("thx_txt");

        let formData = new FormData();
        formData.append("user", user);
        formData.append("page", page);
        formData.append("thx_txt", thx_txt.value);

        var ajax = new XMLHttpRequest();
        //cek kesiapan ajax
        ajax.onreadystatechange = function () {
            if (ajax.readyState == 4 && ajax.status == 200) {
                var ok = ajax.responseText;
                container.innerHTML = ok;
                location.reload();
            }
        };
        ajax.open("POST", `proses.php`, "true");
        ajax.upload.addEventListener("progress", (e) => {
            const persen = e.lengthComputable ? (e.loaded / e.total) * 100 : 0;
            progressBar.style.width = persen.toFixed(2) + "%";
            percentage.textContent = persen.toFixed(2) + "%";

            state.textContent = "Uploading...";
            loader.textContent = "";
            loader.style.animation = "rotationInf 1s infinite forwards linear";
            box.style.animation = "in 0.3s forwards ease";
            box.style.transform = "scale(1)";

            if (persen == 100) {
                state.textContent = "Complete";
                state.style.animation = "fadeLeft 0.5s forwards ease";
                state.style.animation = "fadeLeft2 0.5s forwards ease";
                loader.style.animation = "rotation 0.3s forwards linear";
                loader.textContent = "";
                box.style.animation = "out 0.3s forwards ease";
                box.style.animationDelay = "3s";
            }
        });
        ajax.send(formData);
        return;
    }

    // LAYOUT
    if (page == "layout") {
        var layout = [];
        var list = document.querySelectorAll(".grid__element");
        for (i = 0; i < list.length; i++) {
            layout.push(list[i].dataset.layout);
        }
        var json_layout = JSON.stringify(layout);

        let formData = new FormData();
        formData.append("user", user);
        formData.append("page", page);
        formData.append("layout", json_layout);

        var ajax = new XMLHttpRequest();
        //cek kesiapan ajax
        ajax.onreadystatechange = function () {
            if (ajax.readyState == 4 && ajax.status == 200) {
                var ok = ajax.responseText;
                // console.log(ok)
                location.reload();
            }
        };
        ajax.open("POST", `proses.php`, "true");
        ajax.upload.addEventListener("progress", (e) => {
            const persen = e.lengthComputable ? (e.loaded / e.total) * 100 : 0;
            progressBar.style.width = persen.toFixed(2) + "%";
            percentage.textContent = persen.toFixed(2) + "%";

            state.textContent = "Uploading...";
            loader.textContent = "";
            loader.style.animation = "rotationInf 1s infinite forwards linear";
            box.style.animation = "in 0.3s forwards ease";
            box.style.transform = "scale(1)";

            if (persen == 100) {
                state.textContent = "Complete";
                state.style.animation = "fadeLeft 0.5s forwards ease";
                state.style.animation = "fadeLeft2 0.5s forwards ease";
                loader.style.animation = "rotation 0.3s forwards linear";
                loader.textContent = "";
                box.style.animation = "out 0.3s forwards ease";
                box.style.animationDelay = "3s";
            }
        });
        ajax.send(formData);
        return;
    }

    // FINISH
    if (page == "finish") {
        Swal.fire({
            title: "FINISH ?",
            text: "Lanjutkan Ke Proses Payment",
            icon: "question",
            showCancelButton: true,
            confirmButtonColor: "#66db69",
            cancelButtonColor: "#d33",
            confirmButtonText: "Finish",
        }).then((result) => {
            if (result.isConfirmed) {
                let formData = new FormData();
                formData.append("user", user);
                formData.append("page", page);

                var ajax = new XMLHttpRequest();
                //cek kesiapan ajax
                ajax.onreadystatechange = function () {
                    if (ajax.readyState == 4 && ajax.status == 200) {
                        var ok = ajax.responseText;
                        if (ok == "ok") {
                            Swal.fire({
                                icon: "success",
                                confirmButtonText: "NEXT",
                                confirmButtonColor: "#696cff",
                                title: "OK",
                                text: "Data Berhasil Tersimpan !",
                            }).then((result) => {
                                if (window.history.replaceState) {
                                    window.history.replaceState(null, null, window.location.href);
                                }
                                location.reload();
                            });
                        } else {
                            Swal.fire({
                                icon: "error",
                                confirmButtonText: "RETRY",
                                confirmButtonColor: "#f54949",
                                title: "FAIL",
                                text: "Data Gagal Tersimpan !",
                            }).then((result) => {
                                location.reload();
                            });
                        }
                    }
                };
                ajax.open("POST", `proses.php`, "true");
                ajax.send(formData);
            } else {
            }
        });
    }
} // Function END
