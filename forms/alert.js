function kirim(kode) {
    let id = kode;
    Swal.fire({
        title: "KIRIM DATA ?",
        text: "Pastikan Input form sudah terisi dengan benar!",
        icon: "question",
        showCancelButton: true,
        confirmButtonColor: "#66db69",
        cancelButtonColor: "#d33",
        confirmButtonText: "Kirim",
    }).then((result) => {
        if (result.isConfirmed) {
            let formData = new FormData();
            formData.append("kode", kode);
            formData.append("submit", true);
            formData.append("nama", nama.value);
            formData.append("username", username.value);
            formData.append("no_wa", no_wa.value);
            formData.append("kota", kota.value);
            formData.append("paket", paket.value);
            formData.append("tema", tema.value);
            formData.append("link", link.value);

            var ajax = new XMLHttpRequest();
            ajax.onreadystatechange = function () {
                if (ajax.readyState == 4 && ajax.status == 200) {
                    result = ajax.responseText;
                    // console.log(result);
                    // return;
                    // >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
                    // jika gagal
                    if (result == "fail") {
                        Swal.fire({
                            icon: "error",
                            confirmButtonText: "Ulangi",
                            confirmButtonColor: "#f54949",
                            title: "FAIL",
                            text: "Proses Gagal",
                        }).then(() => {
                            return;
                        });
                    }

                    // input form dari user
                    if (result == "kirim user fail") {
                        Swal.fire({
                            icon: "error",
                            confirmButtonText: "Ulangi",
                            confirmButtonColor: "#f54949",
                            title: "Failed",
                            html: 'Form telah<strong class="text-danger"> Terhapus</strong> / form telah <strong class="text-danger">Dikirimkan</strong> !',
                        }).then(() => {
                            if (window.history.replaceState) {
                                window.history.replaceState(null, null, "../error/");
                            }
                            window.location.href = "../error/";
                            return;
                        });
                    }
                    if (result == "kirim form sukses") {
                        var kode = document.getElementById("kode");
                        Swal.fire({
                            icon: "success",
                            confirmButtonColor: "#66db69",
                            title: "Success",
                            html: '<strong class="text-primary">Data</strong> Anda Telah <strong class="text-success">Terkirim</strong>',
                        }).then(() => {
                            if (window.history.replaceState) {
                                window.history.replaceState(null, null, "../proses/?kode=" + id);
                            }
                            window.location.href = "../proses/?kode=" + id;
                            return;
                        });
                    }
                    if (result == "kirim nama fail") {
                        Swal.fire({
                            icon: "error",
                            confirmButtonText: "Ulangi",
                            confirmButtonColor: "#f54949",
                            title: "Failed",
                            html: '<strong class="text-primary">Nama</strong> tidak boleh lebih dari <strong class="text-danger">30 Karakter / Kosong</strong> !',
                        }).then(() => {
                            return;
                        });
                    }
                    if (result == "kirim email fail") {
                        Swal.fire({
                            icon: "error",
                            confirmButtonText: "Ulangi",
                            confirmButtonColor: "#f54949",
                            title: "Failed",
                            html:
                                '<strong class="text-danger">✘</strong> Kolom <strong class="text-primary">Email</strong> tidak boleh <strong class="text-danger">Kosong</strong>,</br> ' +
                                '<strong class="text-danger">✘</strong> Format <strong class="text-primary">Email</strong> salah,</br> ' +
                                '<strong class="text-danger">✘</strong> Nama <strong class="text-primary">Email</strong> Terlalu <strong class="text-danger">Panjang</strong>,</br> ' +
                                '<strong class="text-danger">✘</strong> <strong class="text-primary">Email</strong> <strong class="text-danger">Sudah Digunakan</strong> User Lain</br> ',
                        }).then(() => {
                            return;
                        });
                    }
                    if (result == "kirim nomer fail") {
                        Swal.fire({
                            icon: "error",
                            confirmButtonText: "Ulangi",
                            confirmButtonColor: "#f54949",
                            title: "Failed",
                            html:
                                '<strong class="text-danger">✘</strong> <strong class="text-primary">Nomer WA</strong> tidak kurang dari <strong class="text-danger">8 digit</strong>,</br> ' +
                                '<strong class="text-danger">✘</strong> <strong class="text-primary">Nomer WA</strong> tidak lebih dari <strong class="text-danger">15 digit</strong>,</br> ' +
                                '<strong class="text-danger">✘</strong> Tidak boleh berisi <strong class="text-danger">Huruf</strong>,</br> ' +
                                '<strong class="text-danger">✘</strong> Tidak boleh berisi <strong class="text-danger">Simbol</strong></br> ',
                        }).then(() => {
                            return;
                        });
                    }
                    if (result == "kirim kota fail") {
                        Swal.fire({
                            icon: "error",
                            confirmButtonText: "Ulangi",
                            confirmButtonColor: "#f54949",
                            title: "Failed",
                            html:
                                '<strong class="text-danger">✘</strong> Kolom <strong class="text-primary">Kota</strong> tidak boleh <strong class="text-danger">Kosong</strong>,</br> ' +
                                '<strong class="text-danger">✘</strong> Nama <strong class="text-primary">Kota</strong> tidak lebih dari <strong class="text-danger">20 Karakter</strong> !,</br> ',
                        }).then(() => {
                            return;
                        });
                    }
                    if (result == "kirim paket fail") {
                        Swal.fire({
                            icon: "error",
                            confirmButtonText: "Ulangi",
                            confirmButtonColor: "#f54949",
                            title: "Failed",
                            html:
                                '<strong class="text-danger">✘</strong> Kolom <strong class="text-primary">Paket</strong> tidak boleh <strong class="text-danger">Kosong</strong>,</br> ' +
                                '<strong class="text-danger">✘</strong> Jenis <strong class="text-primary">Paket</strong> <strong class="text-danger">Tidak Ada</strong> !</br> ',
                        }).then(() => {
                            return;
                        });
                    }
                    if (result == "kirim tema fail") {
                        Swal.fire({
                            icon: "error",
                            confirmButtonText: "Ulangi",
                            confirmButtonColor: "#f54949",
                            title: "Failed",
                            html:
                                '<strong class="text-danger">✘</strong> Kolom <strong class="text-primary">Tema</strong> tidak boleh <strong class="text-danger">Kosong</strong>,</br> ' +
                                '<strong class="text-danger">✘</strong> Nama <strong class="text-primary">Tema</strong> <strong class="text-danger">Tidak Ada</strong> !</br> ',
                        }).then(() => {
                            return;
                        });
                    }
                    if (result == "kirim link fail") {
                        Swal.fire({
                            icon: "error",
                            confirmButtonText: "Ulangi",
                            confirmButtonColor: "#f54949",
                            title: "Failed",
                            html:
                                '<strong class="text-danger">✘</strong> <strong class="text-primary">Link</strong> tidak boleh <strong class="text-danger">Kosong</strong>,</br> '+
                                '<strong class="text-danger">✘</strong> <strong class="text-primary">Link</strong> tidak boleh berisi <strong class="text-danger">Tanda Baca/Spasi</strong>,</br> ' +
                                '<strong class="text-danger">✘</strong> <strong class="text-primary">Link</strong> tidak boleh lebih dari <strong class="text-danger">100 Karakter</strong>,</br> ',
                        }).then(() => {
                            return;
                        });
                    }
                    // >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
                }
            };
            ajax.open("POST", `submit.php`, "true");
            ajax.send(formData);
        }
    });
}
