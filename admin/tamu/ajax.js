
// initial tooltip
function initTooltips(){
    const tool = document.querySelectorAll('[data-bs-toggle="tooltip"]');
    tool.forEach((Element) => {
        new bootstrap.Tooltip(Element);
    })
}

// fungsi cari tamu
function search(user) {
    const search = document.getElementById("search");
    let div = document.getElementById("container");
    var ajax = new XMLHttpRequest();
    //cek kesiapan ajax
    ajax.onreadystatechange = function () {
        if (ajax.readyState == 4 && ajax.status == 200) {
            var ok = ajax.responseText;
            div.innerHTML = ok;
            initTooltips();
        }
    };
    ajax.open("POST", `ajax.php`, "true");
    ajax.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    ajax.send(`user=${user}&nama=${search.value}`);
}

// fungsi cari komentar
function searchComment(user){
    const search = document.getElementById("search");
    let div = document.getElementById("container");
    var ajax = new XMLHttpRequest();
    //cek kesiapan ajax
    ajax.onreadystatechange = function () {
        if (ajax.readyState == 4 && ajax.status == 200) {
            var ok = ajax.responseText;
            div.innerHTML = ok;
            initTooltips();
        }
    };
    ajax.open("POST", `ajax comment.php`, "true");
    ajax.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    ajax.send(`user=${user}&nama=${search.value}`);
}

function simple() {
    var simple = document.getElementById("simple");
    simple.classList.toggle("d-none");
}


//fungsi template
function template(user) {
    fetch(`template.php?tem&user=${user}`)
    .then((r) => r.text())
    .then((res) => {
                // console.log(JSON.parse(res));
                // console.log(res);
                // return;
                let tem = res;
                Swal.fire({
                    title: "Edit Template",
                    html:
                        `<textarea id="template-form" class="form-control" name="template-form" rows="25" >${tem}</textarea>
                        <a class="text-dark text-wrap" href="javascript:void(0)">●<i class="text-dark"> Gunakan <span class="text-primary">#hari#</span> / <span class="text-primary">#jam#</span> / <span class="text-primary">#tempat#</span> / <span class="text-primary">#link#</span> Untuk Memuat data secara otomatis !</i></a>`,
                        showCloseButton: false,
                    showDenyButton: true,
                    showCancelButton: true,
                    focusConfirm: false,
                    confirmButtonText: "EDIT",
                    denyButtonText: `RESET`,
                    cancelButtonText: "Cancel"

                }).then((result) => {
                    /* Read more about isConfirmed, isDenied below */
                    if (result.isConfirmed) {
                        var tem = document.getElementById("template-form").value;
                        let formData = new FormData();
                        formData.append('user', user);
                        formData.append('tem', tem);
                        formData.append('edit', true);
                        var ajax = new XMLHttpRequest();
                        ajax.onreadystatechange = function () {
                            if (ajax.readyState == 4 && ajax.status == 200) {
                                var ok = ajax.responseText;
                                if(ok == 'ok'){
                                      Swal.fire('Saved!', 'Edit Success', 'success')
                                }else if(ok == 'fail'){
                                        Swal.fire('Failed!', 'Edit Fail', 'error')
                                }else{
                                    Swal.fire('ERROR', ok, 'error')
                                }
                            }
                        };
                        ajax.open("POST", `template.php`, "true");
                        ajax.send(formData);
                } else if (result.isDenied) {
                    let formData = new FormData();
                        formData.append('user', user);
                        formData.append('tem', tem);
                        formData.append('reset', true);
                        var ajax = new XMLHttpRequest();
                        ajax.onreadystatechange = function () {
                            if (ajax.readyState == 4 && ajax.status == 200) {
                                var ok = ajax.responseText;
                                if(ok == 'ok'){
                                    Swal.fire('Saved!', 'Reset Success', 'success')
                                }else if(ok == 'fail'){
                                        Swal.fire('Failed!', 'Reset Fail', 'error')
                                }else{
                                    Swal.fire('ERROR', ok, 'error')
                                }
                            }
                        };
                        ajax.open("POST", `template.php`, "true");
                        ajax.send(formData);
                    //   Swal.fire('Changes are not saved', '', 'info')
                    }
                  })
                })
            .catch((err) => {
                console.error(err);
                Swal.fire({
                    title: "ERROR",
                    icon: "error",
                    text: err.toString(),
                    focusConfirm: false,
                    confirmButtonText: "BACK"
                })
            });
            return;
    
        }

        // fungsi untuk menambah tamu undangan
function tambah(user) {
    Swal.fire({
        title: "Input Tamu",
        icon: "question",
        html:
            '<input id="name" type="text" maxlength="30" class="form-control swal2-input" placeholder="Nama : ">' +
            '<input id="noWa" type="number" min="99999999" max="1000000000000000" class="form-control swal2-input" placeholder="No wa : (Opsioanal)" style="max-width:100%;">',
        showCloseButton: false,
        showCancelButton: true,
        focusConfirm: false,
        confirmButtonText: "OK",
        confirmButtonAriaLabel: "Thumbs up, great!",
        cancelButtonText: "Cancel",
        cancelButtonAriaLabel: "Thumbs down",
    }).then((result) => {
        var nama = document.getElementById("name");
        var nama = encodeURIComponent(nama.value);
        var wa = document.getElementById("noWa").value;
        if (result.isConfirmed) {
            // cek jika kolom kosong
            if (nama == "") {
                Swal.fire({
                    icon: "error",
                    confirmButtonText: "Ulangi",
                    confirmButtonColor: "#f54949",
                    title: "FAIL",
                    text: "Input NAMA tidak boleh kosong !",
                });
                return false;
            }
            // cek jika nama lebih dari 30 char
            if (nama.length > 50) {
                Swal.fire({
                    icon: "error",
                    confirmButtonText: "Ulangi",
                    confirmButtonColor: "#f54949",
                    title: "FAIL",
                    text: "NAMA tidak boleh lebih dari 30 char !",
                });
                return false;
            }
            // cek jika nomer wa <dari 8 dan lebih dari 15
            if (wa !== "") {
                if (wa.length < 8 || wa.length > 15) {
                    Swal.fire({
                        icon: "error",
                        confirmButtonText: "Ulangi",
                        confirmButtonColor: "#f54949",
                        title: "FAIL",
                        text: "Nomer Wa tidak kurang dari 8 dan lebih dari 15 digit !",
                    });
                    return false;
                }
            }
            var ajax = new XMLHttpRequest();
            //cek kesiapan ajax
            ajax.onreadystatechange = function () {
                if (ajax.readyState == 4 && ajax.status == 200) {
                    var ok = ajax.responseText;
                    if (ok == "ok") {
                        Swal.fire({
                            icon: "success",
                            confirmButtonColor: "#66db69",
                            title: "Selamat",
                            text: "Berhasil menambah Tamu Baru !",
                        }).then(() => {
                            if (window.history.replaceState) {
                                window.history.replaceState(null, null, window.location.href);
                            }
                            window.location = window.location.href;
                        });
                    } else {
                        Swal.fire({
                            icon: "error",
                            confirmButtonText: "Ulangi",
                            confirmButtonColor: "#f54949",
                            title: "FAIL",
                            text: "Gagal Menambahkan Tamu !",
                        });
                        return false;
                    }
                }
            };
            ajax.open("POST", `proses.php`, "true");
            ajax.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            ajax.send(`user=${user}&wa=${wa}&nama=${nama}`);
        }
    });
}
// fungsi edit tamu
function edit(user, kode, inputNama, inputWa) {
    Swal.fire({
        title: "Edit Tamu",
        icon: "warning",
        html:
            '<input id="name" type="text" maxlength="30" class="form-control swal2-input" placeholder="Nama : " value="' +
            inputNama +
            '">' +
            '<input id="noWa" type="number" min="99999999" max="1000000000000000" class="form-control swal2-input" placeholder="No wa : (Opsioanal)" style="max-width:100%;" value="' +
            inputWa +
            '">',
        showCloseButton: false,
        showCancelButton: true,
        focusConfirm: false,
        confirmButtonText: "OK",
        confirmButtonAriaLabel: "Thumbs up, great!",
        cancelButtonText: "Cancel",
        cancelButtonAriaLabel: "Thumbs down",
    }).then((result) => {
        var nama = document.getElementById("name");
        var nama = encodeURIComponent(nama.value);
        var wa = document.getElementById("noWa").value;
        if (result.isConfirmed) {
            // cek jika tidak ada perubahan
            if (nama == inputNama && wa == inputWa) {
                Swal.fire({
                    icon: "error",
                    confirmButtonText: "Ulangi",
                    confirmButtonColor: "#f54949",
                    title: "FAIL",
                    text: "Anda Tidak melakukan perubahan !",
                });
                return false;
            }
            // cek jika kolom kosong
            if (nama == "") {
                Swal.fire({
                    icon: "error",
                    confirmButtonText: "Ulangi",
                    confirmButtonColor: "#f54949",
                    title: "FAIL",
                    text: "Input NAMA tidak boleh kosong !",
                });
                return false;
            }
            // cek jika nama lebih dari 30 char
            if (nama.length > 50) {
                Swal.fire({
                    icon: "error",
                    confirmButtonText: "Ulangi",
                    confirmButtonColor: "#f54949",
                    title: "FAIL",
                    text: "NAMA tidak boleh lebih dari 30 char !",
                });
                return false;
            }
            // cek jika nomer wa <dari 8 dan lebih dari 15
            if (wa !== "") {
                if (wa.length < 8 || wa.length > 15) {
                    Swal.fire({
                        icon: "error",
                        confirmButtonText: "Ulangi",
                        confirmButtonColor: "#f54949",
                        title: "FAIL",
                        text: "Nomer Wa tidak kurang dari 8 dan lebih dari 15 digit !",
                    });
                    return false;
                }
            }
            var ajax = new XMLHttpRequest();
            //cek kesiapan ajax
            ajax.onreadystatechange = function () {
                if (ajax.readyState == 4 && ajax.status == 200) {
                    var ok = ajax.responseText;

                    if (ok == "ok") {
                        Swal.fire({
                            icon: "success",
                            confirmButtonColor: "#66db69",
                            title: "Selamat",
                            text: "Berhasil merubah Data Tamu !",
                        }).then(() => {
                            if (window.history.replaceState) {
                                window.history.replaceState(null, null, window.location.href);
                            }
                            window.location = window.location.href;
                        });
                    } else {
                        Swal.fire({
                            icon: "error",
                            confirmButtonText: "Ulangi",
                            confirmButtonColor: "#f54949",
                            title: "FAIL",
                            text: "Gagal Merubah Data Tamu !",
                        });
                        return false;
                    }
                }
            };
            ajax.open("POST", `proses.php`, "true");
            ajax.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            ajax.send(`user=${user}&kode=${kode}&editnama=${nama}&editwa=${wa}`);
        }
    });
}
// fungsi hapus tamu
function hapusTamu(user, kode) {
    Swal.fire({
        title: "Yakin akan menghapus?",
        text: "Data akan hilang selamanya..",
        icon: "warning",
        showCancelButton: false,
        confirmButtonColor: "#66db69",
        cancelButtonColor: "#d33",
        confirmButtonText: "Hapus",
    }).then((result) => {
        if (result.isConfirmed) {
            var ajax = new XMLHttpRequest();
            //cek kesiapan ajax
            ajax.onreadystatechange = function () {
                if (ajax.readyState == 4 && ajax.status == 200) {
                    var ok = ajax.responseText;

                    if (ok == "ok") {
                        Swal.fire({
                            icon: "success",
                            confirmButtonColor: "#66db69",
                            title: "Berhasil",
                            text: "Data Telah Terhapus !",
                        }).then(() => {
                            if (window.history.replaceState) {
                                window.history.replaceState(null, null, window.location.href);
                            }
                            window.location = window.location.href;
                        });
                    } else {
                        Swal.fire({
                            icon: "error",
                            confirmButtonText: "Ulangi",
                            confirmButtonColor: "#f54949",
                            title: "FAILED",
                            text: "Gagal DiHapus !",
                        });
                        return false;
                    }
                }
            };
            ajax.open("POST", `proses.php`, "true");
            ajax.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            ajax.send(`hapususer=${user}&hapuskode=${kode}`);
        }
    });
}

// fungsi hapus comment
function hapusComment(user, kode) {
    Swal.fire({
        title: "Yakin akan menghapus?",
        text: "Data akan hilang selamanya..",
        icon: "warning",
        showCancelButton: false,
        confirmButtonColor: "#66db69",
        cancelButtonColor: "#d33",
        confirmButtonText: "Hapus",
    }).then((result) => {
        if (result.isConfirmed) {
            var ajax = new XMLHttpRequest();
            //cek kesiapan ajax
            ajax.onreadystatechange = function () {
                if (ajax.readyState == 4 && ajax.status == 200) {
                    var ok = ajax.responseText;

                    if (ok == "ok") {
                        Swal.fire({
                            icon: "success",
                            confirmButtonColor: "#66db69",
                            title: "Berhasil",
                            text: "Komentar Telah Terhapus !",
                        }).then(() => {
                            if (window.history.replaceState) {
                                window.history.replaceState(null, null, window.location.href);
                            }
                            window.location = window.location.href;
                        });
                    } else {
                        Swal.fire({
                            icon: "error",
                            confirmButtonText: "Ulangi",
                            confirmButtonColor: "#f54949",
                            title: "FAILED",
                            text: ok,
                        });
                        return false;
                    }
                }
            };
            ajax.open("POST", `proses.php`, "true");
            ajax.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            ajax.send(`hapusComment=${user}&hapuskode=${kode}`);
        }
    });
}

// fungsi edit comment
function editComment(user,tamu) {
    const data = JSON.parse(tamu);
    let comment = data['comment'];
    let kode = data['kode'];
// console.log(comment);
// return;
    Swal.fire({
        title: "Edit Ucapan ?",
        icon: "warning",
        html:
            '<textarea name="comment" id="comment" cols="30" rows="10">'+
            comment +'</textarea>',
        showCloseButton: false,
        showCancelButton: true,
        focusConfirm: false,
        confirmButtonText: "OK",
        confirmButtonAriaLabel: "Thumbs up, great!",
        cancelButtonText: "Cancel",
        cancelButtonAriaLabel: "Thumbs down",
    }).then((result) => {
        var komen = document.getElementById("comment").value;
        if (result.isConfirmed) {
            // cek jika nama lebih dari 30 char
            var ajax = new XMLHttpRequest();
            //cek kesiapan ajax
            ajax.onreadystatechange = function () {
                if (ajax.readyState == 4 && ajax.status == 200) {
                    var ok = ajax.responseText;

                    if (ok == "ok") {
                        Swal.fire({
                            icon: "success",
                            confirmButtonColor: "#66db69",
                            title: "Selamat",
                            text: "Edit Comment Berhail !",
                        }).then(() => {
                            location.reload()
                        });
                    } else {
                        Swal.fire({
                            icon: "error",
                            confirmButtonText: "Ulangi",
                            confirmButtonColor: "#f54949",
                            title: "FAIL",
                            text: ok,
                        });
                        return false;
                    }
                }
            };
            ajax.open("POST", `proses.php`, "true");
            ajax.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            ajax.send(`user=${user}&kode=${kode}&komen=${komen}`);
        }
    });
}
// fungsi detail
function detail(tamu) {
    const data = JSON.parse(tamu);

    if (typeof data["wa"] == "undefined" || data["wa"] == null || data["wa"] == '') {
        data["wa"] = "---";
    }
    if (typeof data["status"] == "undefined" || data["status"] == null) {
        data["status"] = "---";
    }
    if (typeof data["hadir"] == "undefined" || data["hadir"] == null) {
        data["hadir"] = "---";
    }
    if (typeof data["regStatus"] == "undefined" || data["regStatus"] == null) {
        data["regStatus"] = "---";
    }
    if (typeof data["dateReg"] == "undefined" || data["dateReg"] == null) {
        data["dateReg"] = "---";
    }
    if (typeof data["comment"] == "undefined" || data["comment"] == null || data["comment"] == '') {
        data["comment"] = "No";
    } else {
        data["comment"] = "Yes";
    }
    Swal.fire({
        icon: "info",
        confirmButtonText: "OK",
        confirmButtonColor: "#41ad4a",
        title: "Data Tamu",
        html:
            '<div style="display:flex;justify-content:space-between;margin-bottom:-15px;">' +
            '<strong class="text-dark">Kode : </strong><p>' +
            data["kode"] +
            "</p>" +
            "</div>" +
            '<div style="display:flex;justify-content:space-between;margin-bottom:-15px;">' +
            '<strong class="text-dark">Date Add : </strong><p>' +
            data["dateAdd"] +
            "</p>" +
            "</div>" +
            '<div style="display:flex;justify-content:space-between;margin-bottom:-15px;">' +
            '<strong class="text-dark">Date Reg : </strong><p>' +
            data["dateReg"] +
            "</p>" +
            "</div>" +
            '<div style="display:flex;justify-content:space-between;margin-bottom:-15px;">' +
            '<strong class="text-primary">Nama : </strong><p>' +
            data["nama"] +
            "</p>" +
            "</div>" +
            '<div style="display:flex;justify-content:space-between;margin-bottom:-15px;">' +
            '<strong class="text-primary">No Wa : </strong><p>' +
            data["wa"] +
            "</p>" +
            "</div>" +
            '<div style="display:flex;justify-content:space-between;margin-bottom:-15px;">' +
            '<strong class="text-primary">Konfirmasi : </strong><p>' +
            data["hadir"] +
            "</p>" +
            "</div>" +
            '<div style="display:flex;justify-content:space-between;margin-bottom:-15px;">' +
            '<strong class="text-success">Status : </strong><p>' +
            data["status"] +
            "</p>" +
            "</div>" +
            '<div style="display:flex;justify-content:space-between;margin-bottom:-15px;">' +
            '<strong class="text-warning">Registrasi : </strong><p>' +
            data["regStatus"] +
            "</p>" +
            "</div>" +
            '<div style="display:flex;justify-content:space-between;margin-bottom:-15px;">' +
            '<strong class="text-primary">Ucapan : </strong><p>' +
            data["comment"] +
            "</p>" +
            "</div>",
    });
}


// fungsi kirim template lewat wa

function sendWa(user,kode){
    let formData = new FormData();
                        formData.append('user', user);
                        formData.append('kode', kode);
                        var ajax = new XMLHttpRequest();
                        ajax.onreadystatechange = function () {
                            if (ajax.readyState == 4 && ajax.status == 200) {
                                var ok = ajax.responseText;
                                // console.log(ok);
                                window.open(ok, '_blank');
                            }
                        };
                        ajax.open("POST", `template.php`, "true");
                        ajax.send(formData);
}

