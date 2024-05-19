if (document.getElementById("result") != null) {
    var result = document.getElementById("result");

    // NORMAL ALERT
    if (result.value == "sukses") {
        Swal.fire({
            icon: "success",
            title: "DONE",
            confirmButtonColor: "#66db69",
            text: "Proses Berhasil",
        }).then(() => {
            if (window.history.replaceState) {
                window.history.replaceState(null, null, window.location.href);
            }
            window.location = window.location.href;
        });
    }
    if (result.value == "fail") {
        Swal.fire({
            icon: "error",
            confirmButtonText: "Ulangi",
            confirmButtonColor: "#f54949",
            title: "FAIL",
            text: "Proses Gagal",
        }).then(() => {
            if (window.history.replaceState) {
                window.history.replaceState(null, null, window.location.href);
            }
            window.location = window.location.href;
        });
    }

    // input form pendaftaran baru
    if (result.value == "form sukses") {
        Swal.fire({
            icon: "success",
            confirmButtonColor: "#66db69",
            title: "Selamat",
            text: "Berhasil membuat form baru !",
        }).then(() => {
            if (window.history.replaceState) {
                window.history.replaceState(null, null, window.location.href);
            }
            window.location = window.location.href;
        });
    }
    if (result.value == "form gagal") {
        Swal.fire({
            icon: "error",
            confirmButtonText: "Ulangi",
            confirmButtonColor: "#f54949",
            title: "Maaf",
            text: "Gagal membuat form baru !",
        }).then(() => {
            if (window.history.replaceState) {
                window.history.replaceState(null, null, window.location.href);
            }
            window.location = window.location.href;
        });
    }

    // hapus form queue customer/form.php
    if (result.value == "hapusformsukses") {
        Swal.fire({
            icon: "success",
            title: "DONE",
            confirmButtonColor: "#66db69",
            text: "Berhasil di Hapus",
        }).then(() => {
            location.href = "form.php";
        });
    }
    if (result.value == "hapusformfail") {
        Swal.fire({
            icon: "error",
            confirmButtonText: "Ulangi",
            confirmButtonColor: "#f54949",
            title: "FAIL",
            text: "Gagal dihapus",
        }).then(() => {
            location.href = "form.php";
        });
    }

    // hapus input user customer/index.php
    if (result.value == "deleteinputsukses") {
        Swal.fire({
            icon: "success",
            title: "DONE",
            confirmButtonColor: "#66db69",
            text: "Berhasil di Hapus",
        }).then(() => {
            location.href = "index.php";
        });
    }
    if (result.value == "deleteinputfail") {
        Swal.fire({
            icon: "error",
            confirmButtonText: "Ulangi",
            confirmButtonColor: "#f54949",
            title: "FAIL",
            text: "Hapus gagal Gagal",
        }).then(() => {
            location.href = "index.php";
        });
    }
}


