// search function
if (document.getElementById("form-search") != null) {
    let form = document.getElementById("form-search");
    form.addEventListener("submit", function (e) {
        e.preventDefault();
        let search = document.getElementById("search");

        var find = encodeURIComponent(search.value);
        fetch(`search.php?find=${find}`)
            .then((r) => r.text())
            .then((res) => {
                // console.log(JSON.parse(res)[1]);
                // return;
                if (res == "fail") {
                    Swal.fire({
                        icon: "error",
                        confirmButtonText: "OK",
                        confirmButtonColor: "#f54949",
                        title: "ERROR",
                        text: "Data Tidak Ada !",
                    });
                } else {
                    var json = JSON.parse(res);
                    var contain = document.getElementById("contain");
                    Swal.fire({
                        icon: "success",
                        confirmButtonText: "OK",
                        title: "Success",
                        html: '<strong class="text-primary">' + json[0] + "</strong> Data Berhasil Ditemukan",
                    });
                    contain.innerHTML = json[1];
                }
            })
            .catch((err) => {
                console.error(err);
            });
    });
}

// input baru CUSTOMER FormData.php
function formBaru() {
    Swal.fire({
        title: "Password Default",
        icon: "question",
        html: '<input id="pwd" type="text" class="form-control swal2-input" placeholder="Jika Kosong : (#admin1234)" >',
        showCloseButton: false,
        showCancelButton: true,
        focusConfirm: false,
        confirmButtonText: "OK",
        confirmButtonAriaLabel: "OK",
        cancelButtonText: "Cancel",
        cancelButtonAriaLabel: "Cancel",
    }).then((result) => {
        let pwd = document.getElementById("pwd").value;
        if (result.isConfirmed) {
            // cek jika kolom kosong
            if (pwd == "") {
                pwd = "#admin1234";
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
                            text: "Berhasil menambah Form Baru !",
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
                            text: "Gagal Menambahkan Form !",
                        });
                        return false;
                    }
                }
            };
            ajax.open("POST", `proses.php`, "true");
            ajax.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            ajax.send(`formbaru=${pwd}`);
        }
    });
}

// konfirmasi AKTIVASI CUSTOMER INDEX.php
function active(id) {
    Swal.fire({
        title: "Aktivasi Akun ini?",
        text: "Lakukan Aktivasi Jika Costumer sudah Membayar",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#66db69",
        cancelButtonColor: "#d33",
        confirmButtonText: "Activated",
    }).then((result) => {
        if (result.isConfirmed) {
            var ajax = new XMLHttpRequest();
            //cek kesiapan ajax
            ajax.onreadystatechange = function () {
                if (ajax.readyState == 4 && ajax.status == 200) {
                    var ok = ajax.responseText;
                    // return console.log('status = '+ok)

                    if (ok == "ok") {
                        Swal.fire({
                            icon: "success",
                            confirmButtonColor: "#66db69",
                            title: "Berhasil",
                            text: "Akun Telah Aktif !",
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
                            text: "Gagal Aktivasi Akun !",
                        });
                        return false;
                    }
                }
            };
            ajax.open("POST", `proses.php`, "true");
            ajax.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            ajax.send(`activeid=${id}`);
        }
    });
}

// konfirmasi SUSPEND CUSTOMER INDEX.php
function suspend(id) {
    Swal.fire({
        title: "Suspend Akun ini?",
        text: "Me-Nonaktifkan Akun Sementara ",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#66db69",
        cancelButtonColor: "#d33",
        confirmButtonText: "Suspend",
    }).then((result) => {
        if (result.isConfirmed) {
            var ajax = new XMLHttpRequest();
            //cek kesiapan ajax
            ajax.onreadystatechange = function () {
                if (ajax.readyState == 4 && ajax.status == 200) {
                    var ok = ajax.responseText;
                    // return alert('status = '+ok)
                    if (ok == "ok") {
                        Swal.fire({
                            icon: "success",
                            confirmButtonColor: "#66db69",
                            title: "Berhasil",
                            text: "Akun Telah Ter-Suspend !",
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
                            text: "Gagal Merubah status !",
                        });
                        return false;
                    }
                }
            };
            ajax.open("POST", `proses.php`, "true");
            ajax.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            ajax.send(`suspendid=${id}`);
        }
    });
}

// konfirmasi UNSUSPEND CUSTOMER INDEX.php
function unsuspend(id) {
    Swal.fire({
        title: "Aktifkan Akun ini?",
        text: "Aktifkan Akun dari status Suspend ",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#66db69",
        cancelButtonColor: "#d33",
        confirmButtonText: "Activated",
    }).then((result) => {
        if (result.isConfirmed) {
            var ajax = new XMLHttpRequest();
            //cek kesiapan ajax
            ajax.onreadystatechange = function () {
                if (ajax.readyState == 4 && ajax.status == 200) {
                    var ok = ajax.responseText;
                    // return console.log("status = " + ok);
                    if (ok == "ok") {
                        Swal.fire({
                            icon: "success",
                            confirmButtonColor: "#66db69",
                            title: "Berhasil",
                            text: "Akun Telah Aktif Kembali !",
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
                            text: "Gagal Merubah status !",
                        });
                        return false;
                    }
                }
            };
            ajax.open("POST", `proses.php`, "true");
            ajax.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            ajax.send(`unsuspendid=${id}`);
        }
    });
}

// konfirmasi hapus CUSTOMER INDEX.php
function confirm(id) {
    Swal.fire({
        title: "Yakin akan menghapus?",
        text: "Data akan hilang selamanya..",
        icon: "warning",
        showCancelButton: true,
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
                    // return alert('status = '+ok)
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
            ajax.send(`deleteid=${id}`);
        }
    });
}

// konfirmasi hapus CUSTOM CUSTOMER
function costumConfirm(id) {
    Swal.fire({
        title: "Yakin akan menghapus?",
        text: "Data akan hilang selamanya..",
        icon: "warning",
        showCancelButton: true,
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
                    // return alert('status = '+ok)
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
            ajax.send(`customid=${id}`);
        }
    });
}

// konfirmasi hapus CUSTOMER FORM.php
function formConfirm(id) {
    Swal.fire({
        title: "Yakin akan menghapus?",
        text: "Data akan hilang selamanya..",
        icon: "warning",
        showCancelButton: true,
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
                    // return alert('status = '+ok)
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
            ajax.send(`deleteformid=${id}`);
        }
    });
}


// >>>>>>>>>>> DETAIL.PHP <<<<<<<<<

// Style.CSS
if (document.getElementById("style") != null) {
    let form = document.getElementById("style");
    form.addEventListener("submit", function (e) {
        e.preventDefault();
        let id = document.getElementById("style-id");
        let data = document.getElementById("style-input");
        Swal.fire({
            title: "UPLOAD",
            text: "Upload Style.css ?",
            icon: "question",
            showCancelButton: true,
            confirmButtonColor: "#66db69",
            cancelButtonColor: "#d33",
            confirmButtonText: "UPLOAD",
        }).then((result) => {
            if (result.isConfirmed) {
                let formData = new FormData();
                    formData.append('id', id.value);
                    formData.append('style', data.value);
                var ajax = new XMLHttpRequest();
                            //cek kesiapan ajax
                            ajax.onreadystatechange = function(){
                                if( ajax.readyState == 4 && ajax.status == 200){
                                    var ok = ajax.responseText
                                    if (ok == "ok") {
                                        Swal.fire({
                                            icon: "success",
                                            confirmButtonColor: "#66db69",
                                            title: "Success",
                                            text: "Data Berhasil diUpload !",
                                        })
                                    } else {
                                        Swal.fire({
                                            icon: "error",
                                            confirmButtonText: "Ulangi",
                                            confirmButtonColor: "#f54949",
                                            title: "FAILED",
                                            text: "Data GAGAL diUpload !",
                                        });
                                    }
                                }
                            }
                            ajax.open('POST', `proses.php` , 'true') ;
                            ajax.send(formData);
            }
        })
        

        
    });
}

// RESET Style.CSS
if (document.getElementById("style-reset") != null) {
    let reset = document.getElementById("style-reset");
    reset.addEventListener("click", function (e) {
        e.preventDefault();
        let id = document.getElementById("style-id");
        Swal.fire({
            title: "RESET",
            text: "RESET Style.css ?",
            icon: "question",
            showCancelButton: true,
            confirmButtonColor: "#66db69",
            cancelButtonColor: "#d33",
            confirmButtonText: "RESET",
        }).then((result) => {
            if (result.isConfirmed) {
                let formData = new FormData();
                    formData.append('id', id.value);
                    formData.append('style', true);
                    formData.append('styleReset', true);
                var ajax = new XMLHttpRequest();
                            //cek kesiapan ajax
                            ajax.onreadystatechange = function(){
                                if( ajax.readyState == 4 && ajax.status == 200){
                                    var ok = ajax.responseText
                                    // console.log(ok);
                                    // return;
                                    if (ok == "ok") {
                                        Swal.fire({
                                            icon: "success",
                                            confirmButtonColor: "#66db69",
                                            title: "Success",
                                            text: "Data Berhasil di RESET !",
                                        })
                                    }else if(ok == 'tidak bisa'){
                                        Swal.fire({
                                            icon: "warning",
                                            confirmButtonText: "Back",
                                            title: "WARNING",
                                            text: "Tidak ada Custom Style.css yang Anda UPLOAD !",
                                        });
                                    }else if(ok =='fail'){
                                        Swal.fire({
                                            icon: "error",
                                            confirmButtonText: "Ulangi",
                                            confirmButtonColor: "#f54949",
                                            title: "FAILED",
                                            text: "Data GAGAL di RESET !",
                                        });
                                    }else {
                                        Swal.fire({
                                            icon: "error",
                                            confirmButtonText: "Ulangi",
                                            confirmButtonColor: "#f54949",
                                            title: "ERROR",
                                            text: "CODE :"+ok
                                        });
                                    }
                                }
                            }
                            ajax.open('POST', `proses.php` , 'true') ;
                            ajax.send(formData);
            }
        })
        

        
    });
}

// Struktur.php
if (document.getElementById("struktur") != null) {
    let form = document.getElementById("struktur");
    form.addEventListener("submit", function (e) {
        e.preventDefault();
        let id = document.getElementById("struktur-id");
        let data = document.getElementById("struktur-input");
        Swal.fire({
            title: "UPLOAD",
            text: "Upload Struktur ?",
            icon: "question",
            showCancelButton: true,
            confirmButtonColor: "#66db69",
            cancelButtonColor: "#d33",
            confirmButtonText: "UPLOAD",
        }).then((result) => {
            if (result.isConfirmed) {
                let formData = new FormData();
                    formData.append('id', id.value);
                    formData.append('struktur', data.value);
                var ajax = new XMLHttpRequest();
                            //cek kesiapan ajax
                            ajax.onreadystatechange = function(){
                                if( ajax.readyState == 4 && ajax.status == 200){
                                    var ok = ajax.responseText
                                    if (ok == "ok") {
                                        Swal.fire({
                                            icon: "success",
                                            confirmButtonColor: "#66db69",
                                            title: "Success",
                                            text: "Data Berhasil diUpload !",
                                        })
                                    } else {
                                        Swal.fire({
                                            icon: "error",
                                            confirmButtonText: "Ulangi",
                                            confirmButtonColor: "#f54949",
                                            title: "FAILED",
                                            text: "Data GAGAL diUpload !",
                                        });
                                    }
                                }
                            }
                            ajax.open('POST', `proses.php` , 'true') ;
                            ajax.send(formData);
            }
        })
        

        
    });
}

// RESET STRUKTUR.PHP
if (document.getElementById("struktur-reset") != null) {
    let reset = document.getElementById("struktur-reset");
    reset.addEventListener("click", function (e) {
        e.preventDefault();
        let id = document.getElementById("struktur-id");
        Swal.fire({
            title: "RESET",
            text: "RESET STRUKTUR ?",
            icon: "question",
            showCancelButton: true,
            confirmButtonColor: "#66db69",
            cancelButtonColor: "#d33",
            confirmButtonText: "RESET",
        }).then((result) => {
            if (result.isConfirmed) {
                let formData = new FormData();
                    formData.append('id', id.value);
                    formData.append('struktur', true);
                    formData.append('strukturReset', true);
                var ajax = new XMLHttpRequest();
                            //cek kesiapan ajax
                            ajax.onreadystatechange = function(){
                                if( ajax.readyState == 4 && ajax.status == 200){
                                    var ok = ajax.responseText
                                    // console.log(ok);
                                    // return;
                                    if (ok == "ok") {
                                        Swal.fire({
                                            icon: "success",
                                            confirmButtonColor: "#66db69",
                                            title: "Success",
                                            text: "Data Berhasil di RESET !"
                                        })
                                    }else if(ok == 'tidak bisa'){
                                        Swal.fire({
                                            icon: "warning",
                                            confirmButtonText: "Back",
                                            title: "WARNING",
                                            text: "Tidak ada Custom Struktur yang Anda UPLOAD !"
                                        });
                                    }else if(ok == 'fail'){
                                        Swal.fire({
                                            icon: "error",
                                            confirmButtonText: "Ulangi",
                                            confirmButtonColor: "#f54949",
                                            title: "FAILED",
                                            text: "Data GAGAL di RESET !"
                                        });
                                    }else {
                                        Swal.fire({
                                            icon: "error",
                                            confirmButtonText: "Ulangi",
                                            confirmButtonColor: "#f54949",
                                            title: "ERROR",
                                            text: "CODE :"+ok
                                        });
                                    }
                                }
                            }
                            ajax.open('POST', `proses.php` , 'true') ;
                            ajax.send(formData);
            }
        }) 
    });
}

// DATA-USE.json
if (document.getElementById("data-use") != null) {
    let form = document.getElementById("data-use");
    handleReset();
    form.addEventListener("submit", function (e) {
        e.preventDefault();
        let id = document.getElementById("data-use-id");
        let data = document.getElementById("data-use-input").value;
      
        Swal.fire({
            title: "UPLOAD",
            text: "Upload Data_use.json ?",
            icon: "question",
            showCancelButton: true,
            confirmButtonColor: "#66db69",
            cancelButtonColor: "#d33",
            confirmButtonText: "UPLOAD",
        }).then((result) => {
            if (result.isConfirmed) {
                // cek format json error
                try {
                    JSON.parse(data); 
                } 
                catch(e)  {
                    let index = parseInt(e.message.match(/\d+/)) - 1;
                    let error;
                    if(!isNaN(index)){
                        let firstError = data.slice(index-20, index)
                        let lastError = data.slice(index, index+21)
                        error = firstError+"(~ERR~)"+lastError
                    }else{
                        error = e.message
                    }

                    Swal.fire({
                        icon: "error",
                        confirmButtonText: "Ulangi",
                        confirmButtonColor: "#f54949",
                        title: "FAILED",
                        text: "ERROR = "+error,
                    });
                    return;
                }
                let formData = new FormData();
                    formData.append('id', id.value);
                    formData.append('data-use', data);
                var ajax = new XMLHttpRequest();
                            //cek kesiapan ajax
                            ajax.onreadystatechange = function(){
                                if( ajax.readyState == 4 && ajax.status == 200){
                                    var ok = ajax.responseText
                                    // return console.log(ok);
                                    if (ok == "ok") {
                                        Swal.fire({
                                            icon: "success",
                                            confirmButtonColor: "#66db69",
                                            title: "Success",
                                            text: "Data Berhasil diUpload !",
                                        })
                                    } else {
                                        Swal.fire({
                                            icon: "error",
                                            confirmButtonText: "Ulangi",
                                            confirmButtonColor: "#f54949",
                                            title: "FAILED",
                                            text: ok,
                                        });
                                    }
                                }
                            }
                            ajax.open('POST', `proses.php` , 'true') ;
                            ajax.send(formData);
            }
        })
        

        
    });
}

// RESET data-use.JSON
function handleReset() {
    let reset = document.getElementById("json-reset");
    reset.addEventListener("click", function (e) {
        e.preventDefault();
        let id = document.getElementById("struktur-id");
        Swal.fire({
            title: "RESET",
            text: "Reset data-use.JSON ?",
            icon: "question",
            showCancelButton: true,
            confirmButtonColor: "#66db69",
            cancelButtonColor: "#d33",
            confirmButtonText: "RESET",
        }).then((result) => {
            if (result.isConfirmed) {
                let formData = new FormData();
                    formData.append('id', id.value);
                    formData.append('data-use-reset', true);
                    formData.append('data-use', true);
                var ajax = new XMLHttpRequest();
                            //cek kesiapan ajax
                            ajax.onreadystatechange = function(){
                                if( ajax.readyState == 4 && ajax.status == 200){
                                    var ok = ajax.responseText

                                    if (ok == "ok") {
                                        Swal.fire({
                                            icon: "success",
                                            confirmButtonColor: "#66db69",
                                            title: "Success",
                                            text: "Data Berhasil di RESET !"
                                        })
                                    }else {
                                        Swal.fire({
                                            icon: "error",
                                            confirmButtonText: "Ulangi",
                                            confirmButtonColor: "#f54949",
                                            title: "FAILED",
                                            text: ok,
                                        });
                                    }
                                }
                            }
                            ajax.open('POST', `proses.php` , 'true') ;
                            ajax.send(formData);
            }
        }) 
    });
}

// SET DEFAULT data-use.JSON
function handleReset() {
    let reset = document.getElementById("json-default");
    reset.addEventListener("click", function (e) {
        e.preventDefault();
        let id = document.getElementById("struktur-id");
        Swal.fire({
            title: "DEFAULT",
            text: "Set As Default data-reset.JSON ?",
            icon: "question",
            showCancelButton: true,
            confirmButtonColor: "#66db69",
            cancelButtonColor: "#d33",
            confirmButtonText: "SET",
        }).then((result) => {
            if (result.isConfirmed) {
                let formData = new FormData();
                    formData.append('id', id.value);
                    formData.append('data-use-default', true);
                    formData.append('data-use', true);
                var ajax = new XMLHttpRequest();
                            //cek kesiapan ajax
                            ajax.onreadystatechange = function(){
                                if( ajax.readyState == 4 && ajax.status == 200){
                                    var ok = ajax.responseText

                                    if (ok == "ok") {
                                        Swal.fire({
                                            icon: "success",
                                            confirmButtonColor: "#66db69",
                                            title: "Success",
                                            text: "Data Berhasil di RESET !"
                                        })
                                    }else {
                                        Swal.fire({
                                            icon: "error",
                                            confirmButtonText: "Ulangi",
                                            confirmButtonColor: "#f54949",
                                            title: "FAILED",
                                            text: ok,
                                        });
                                    }
                                }
                            }
                            ajax.open('POST', `proses.php` , 'true') ;
                            ajax.send(formData);
            }
        }) 
    });
}

// PAKET DETAIL
if (document.getElementById("paket-detail") != null) {
    let paketDetail = document.getElementById("paket-detail");
    paketDetail.addEventListener("submit", function (e) {
        e.preventDefault();
        let id = document.getElementById("paket-id");
        let paket = document.getElementById("paket");
        let tema = document.getElementById("tema");
        let domain = document.getElementById("domain");
        Swal.fire({
            title: "EDIT",
            text: "EDIT PAKET ?",
            icon: "question",
            showCancelButton: true,
            confirmButtonColor: "#66db69",
            cancelButtonColor: "#d33",
            confirmButtonText: "EDIT",
        }).then((result) => {
            if (result.isConfirmed) {
                let formData = new FormData();
                    formData.append('id', id.value);
                    formData.append('paket', paket.value);
                    formData.append('tema', tema.value);
                    formData.append('domain', domain.value);
                    formData.append('custom', custom.value);
                var ajax = new XMLHttpRequest();
                            //cek kesiapan ajax
                            ajax.onreadystatechange = function(){
                                if( ajax.readyState == 4 && ajax.status == 200){
                                    var ok = ajax.responseText
                                    // console.log(ok);
                                    // return;
                                    if (ok == 'ok') {
                                        Swal.fire({
                                            icon: "success",
                                            confirmButtonColor: "#66db69",
                                            title: "Success",
                                            text: "Data Berhasil di EDIT !"
                                        }).then((isConfirmed) => {
                                            location.reload()
                                        })
                                    }else if(ok == 'tidak bisa'){
                                        Swal.fire({
                                            icon: "warning",
                                            confirmButtonText: "Back",
                                            title: "WARNING",
                                            text: "Tidak ada Perubahan DATA !"
                                        });
                                    }else if(ok == 'fail'){
                                        Swal.fire({
                                            icon: "error",
                                            confirmButtonText: "Ulangi",
                                            confirmButtonColor: "#f54949",
                                            title: "FAILED",
                                            text: "Data GAGAL di EDIT !"
                                        });
                                    }else {
                                        Swal.fire({
                                            icon: "error",
                                            confirmButtonText: "Ulangi",
                                            confirmButtonColor: "#f54949",
                                            title: "ERROR",
                                            text: "CODE :"+ok
                                        });
                                    }
                                }
                            }
                            ajax.open('POST', `proses.php` , 'true') ;
                            ajax.send(formData);
            }
        })
        

        
    });
}

// AKSES DETAIL
if (document.getElementById("access-detail") != null) {
    let accessDetail = document.getElementById("access-detail");
    accessDetail.addEventListener("submit", function (e) {
        e.preventDefault();
        let id = document.getElementById("access-id");
        let nama = document.getElementById("nama");
        let noWa = document.getElementById("no-wa");
        let kota = document.getElementById("kota");
        let username = document.getElementById("username");
        let pwd = document.getElementById("pwd");
        let token = document.getElementById("token");
        let link = document.getElementById("link");

        Swal.fire({
            title: "EDIT",
            text: "EDIT ACCESS DATA ?",
            icon: "question",
            showCancelButton: true,
            confirmButtonColor: "#66db69",
            cancelButtonColor: "#d33",
            confirmButtonText: "EDIT",
        }).then((result) => {
            if (result.isConfirmed) {
                let formData = new FormData();
                    formData.append('id', id.value);
                    formData.append('nama', nama.value);
                    formData.append('noWa', noWa.value);
                    formData.append('kota', kota.value);
                    formData.append('username', username.value);
                    formData.append('pwd', pwd.value);
                    formData.append('token', token.value);
                    formData.append('link', link.value);
                var ajax = new XMLHttpRequest();
                            //cek kesiapan ajax
                            ajax.onreadystatechange = function(){
                                if( ajax.readyState == 4 && ajax.status == 200){
                                    var ok = ajax.responseText
                                    // console.log(ok);
                                    // return;
                                    if (ok == 'ok') {
                                        Swal.fire({
                                            icon: "success",
                                            confirmButtonColor: "#66db69",
                                            title: "Success",
                                            text: "Data Berhasil di EDIT !"
                                        });
                                    }else {
                                        Swal.fire({
                                            icon: "error",
                                            confirmButtonText: "Ulangi",
                                            confirmButtonColor: "#f54949",
                                            title: "ERROR",
                                            text: "CODE :"+ok
                                        });
                                    }
                                }
                            }
                            ajax.open('POST', `proses.php` , 'true') ;
                            ajax.send(formData);
            }
        })
        

        
    });
}