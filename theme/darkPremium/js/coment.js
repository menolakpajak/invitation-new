if (document.getElementById("submit") != null) {
    var kirim = document.getElementById("submit");

    kirim.addEventListener("click", function e() {
        var nama = document.getElementById("nama");
        var hadir = document.getElementById("hadir");
        var text = document.getElementById("text");
        var kode = document.getElementById("kode");

        if (nama.value == "" || hadir.value == "" || text.value == "") {
            Swal.fire({
                icon: "warning",
                title: "Oops..!",
                html: "<p>Looks like something went wrong.<br>Please fill in all sections 😊</p>",
            });
        } else {
            var ajax = new XMLHttpRequest();
            var comment = document.getElementById("comment");
            ajax.onreadystatechange = function () {
                if (ajax.readyState == 4 && ajax.status == 200) {
                    var result = ajax.responseText;
                    if (result == "sukses") {
                        Swal.fire({
                            icon: "success",
                            title: "Sent",
                            text: "Thank you for your confirmation and wishes ✈️",
                        }).then((result) => {
                            if (result.isConfirmed) {
                                var form = document.getElementById("form");
                                var commentContainer = document.querySelector(".comment > .mb-3");
                                var nama = form.querySelector("#nama").value;
                                var text = form.querySelector("#text").value;
                                var hadir = form.querySelector("#hadir").value;

                                commentContainer.innerHTML = `
                                <div class="d-flex">
                                
                                ${
                                    text.trim()
                                        ? `
                                    <img src="https://ui-avatars.com/api/?name=${nama}&background=00a72657" alt="${nama}" class="avatar rounded-circle" style="height: 30px; width: 30px">
                                    <div class="ml-2 text-left" style="background-color: #00a72657 ;padding-left:10px;border-radius:10px;">
                                    <h6 class="font-weight-bold" style="margin:0;">${nama}</h6>
                                    <p class="mb-0">${text}</p>
                                    <small>${moment().fromNow()}</small>
                                    </div>
                                    </div>`
                                        : `<span class="avatar d-flex align-items-center justify-content-center rounded-circle" style="background-color: #00a72657; flex-grow: 0; aspect-ratio: 1; display: inline-block; height: 30px;">✔</span>
                                    <div class="ml-2 text-left" style="background-color: #00a72657 ;padding-left:10px;border-radius:10px;">
                                    <h6 class="font-weight-bold" style="margin:0;">${nama}</h6>
                                    <p class="mb-0">${hadir}</p>
                                    <small>${moment().fromNow()}</small>
                                    </div>
                                    </div>
                                    `
                                }
                                ${commentContainer.innerHTML}
                                `;

                                form.innerHTML = `<div class="mt-4">
                                <h4 style="text-align:center">Thank You</h4>
                                </div>`;
                            }
                        });
                    } else {
                        Swal.fire({
                            icon: "error",
                            confirmButtonText: "Retry",
                            title: "Failed to send",
                            // text: "Something unexpected happened, please try again",
                            text: result,
                        }).then((result) => {
                            if (result.isConfirmed) {
                                location.reload();
                            }
                        });
                    }
                }
            };
            ajax.open("POST", `send.php`, "true");
            ajax.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            ajax.send(`nama=${nama.value}&hadir=${hadir.value}&text=${text.value}&kode=${kode.value}`);
        }
    });
}
