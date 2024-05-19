// fungsi detail
function detail(tamu) {
    const data = JSON.parse(tamu);
    if (typeof data["wa"] == "undefined" || data["wa"] == null) {
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
    if (typeof data["comment"] == "undefined" || data["comment"] == null) {
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
            '<strong class="text-primary">Ucapan : </strong><p>' +
            data["comment"] +
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
            "</div>",
    }).then(() => {
        location.replace('../scaning/')
    })
    return;
}


// fungsi login
if(document.getElementById('login') != null){
var login = document.getElementById('login');
login.addEventListener('submit',function (e){
    e.preventDefault();
    var admin = document.getElementById('admin').value
    var key = document.getElementById('key').value
    var digit = document.getElementById('digit-1').value
    digit += document.getElementById('digit-2').value
    digit += document.getElementById('digit-3').value
    digit += document.getElementById('digit-4').value
    digit += document.getElementById('digit-5').value
    digit += document.getElementById('digit-6').value

    let formData = new FormData();
    formData.append('admin', admin);
    formData.append('key', key);
    formData.append('digit', digit);
    formData.append('login', true);
    var ajax = new XMLHttpRequest();
    ajax.onreadystatechange = function () {
        if (ajax.readyState == 4 && ajax.status == 200) {
            var ok = ajax.responseText;
            // console.log(ok)
            // return;
            if(ok == 'ok'){
                Swal.fire({
                icon: 'success',
                title: 'LOGIN SUKSES'
            }).then(() => {
                if(key == ''){
                    window.location.replace(`../scaning/`)
                }else{
                    window.location.replace(`../scaning/?key=${key}`)
                }
                return;
                })
            }else{
                Swal.fire({
                    icon: 'error',
                    title: 'FAIL',
                    text: ok
                }).then(() => {
                    location.reload();
                })  
            }
        }
    };
    ajax.open("POST", `proses.php`, "true");
    ajax.send(formData);

    })
}

if(document.getElementById('input-tamu') != null){
    var admin = document.getElementById('admin').value
    var key = document.getElementById('input-tamu').value
    let formData = new FormData();
    formData.append('admin', admin);
    formData.append('key', key);
    var ajax = new XMLHttpRequest();
    ajax.onreadystatechange = function () {
        if (ajax.readyState == 4 && ajax.status == 200) {
            var ok = ajax.responseText;
            // console.log(ok)
            // return;
            if(ok == 'ok'){
                Swal.fire({
                icon: 'success',
                title: 'REGISTRASI SUKSES'
            }).then(() => {
                // kalau ok
                location.replace(`../scaning/`)
                })
            }else if(ok == 'kosong'){
                // >>>>>>>
                Swal.fire({
                    icon: 'warning',
                    title: "oops..",
                    text: "Tamu Undangan Belum Terdaftar",
                    input: 'text' ,
                    inputPlaceholder: 'Nama Tamu...',
                    showCancelButton: false ,
                    confirmButtonText: 'NEXT'       
                }).then((result) => {
                    if (result.isConfirmed){
                        if(result.value.length > 30){
                            Swal.fire({
                                icon: 'error',
                                title: 'FAIL',
                                text: 'Nama tidak boleh lebih dari 30 character !'
                            }).then(() => {
                                    location.reload()
                                    })
                        }else{
                            let formData = new FormData();
                            formData.append('admin', admin);
                            formData.append('nama', result.value);
                            formData.append('key', key);
                            formData.append('input', true);
                            var ajax = new XMLHttpRequest();
                            ajax.onreadystatechange = function () {
                                if (ajax.readyState == 4 && ajax.status == 200) {
                                    var ok = ajax.responseText;
                                    if(ok == 'ok'){
                                        Swal.fire({
                                        icon: 'success',
                                        title: 'Registrasi SUKSES'
                                    }).then(() => {
                                        location.replace(`../scaning/`)
                                        return;
                                        })
                                    }else{
                                        Swal.fire({
                                            icon: 'error',
                                            title: 'FAIL',
                                            text: ok
                                        }).then(() => {
                                            location.reload();
                                            return;
                                        })  
                                    }
                                }
                            }
                            ajax.open("POST", `proses.php`, "true");
                            ajax.send(formData);

                        }
                    return;
                    }
                    location.reload()
                })
                // >>>>>>>
                // jika sudah teregristasi
            }else if(ok == 'fail'){
                Swal.fire('ERROR', ok, 'error')
            }else{
                // ok = JSON.parse(ok);
                Swal.fire({
                icon: 'warning',
                title: 'registered',
                text: 'Tidak Dapat Me-Registrasi Tamu 2 Kali',
                showConfirmButton: true,
                showCloseButton: true,
                confirmButtonText: "Detail",
            }).then((result) => {
                if (result.isConfirmed){
                    detail(ok)
                    return;
                }
                location.replace('../scaning/')
            })    
                
            }
        }
    };
    ajax.open("POST", `proses.php`, "true");
    ajax.send(formData);
}
// if(document.getElementById('result') != null){
//     var int = document.getElementById('result');

//     //menampilkan notif
//     if(int.value == 'sukses'){
//         const tamu = document.getElementById('data-tamu')
//         tamu.style.display = 'none';
//         Swal.fire({
//             icon: 'success',
//             title: 'SUKSES',
//             text: 'Berhasil meregristasi tamu undangan'
//         }).then(() => {
//             tamu.style.display = 'block';
//                 })
//     }
//     if(int.value == 'add fail'){
//         const tamu = document.getElementById('data-tamu')
//         tamu.style.display = 'none';
//         Swal.fire({
//             icon: 'error',
//             title: 'FAIL',
//             text: 'Gagal meregristasi tamu undangan',
//             confirmButtonText: 'Ulangi Proses'
//         }).then(() => {
//             location.reload()
//             })
//     }

//     if(int.value == 'sudah terdaftar'){
//         const tamu = document.getElementById('data-tamu')
//         const nama = document.getElementById('admin')
//         const kode = document.getElementById('kode')
//         const tgl = document.getElementById('tgl')
//         tamu.style.display = 'none';
//         Swal.fire({
//             icon: 'warning',
//             title: 'SUDAH TERDAFTAR',
//             html: '<h4 style="margin:0;text-align:left;">Nama    : <span>'+nama.value+'</span></h4><h4 style="margin:0;text-align:left;">Tgl Reg : <span>'+tgl.value+'</span></h4><h4 style="margin:0;text-align:left;">Kode : <span>'+kode.value+'</span></h4><p>Tidak dapat meregristasi tamu dua kali !</p>',
//             showConfirmButton: false,
//         })
//     }

//     if(int.value == 'fail'){
//         const form = document.getElementsByTagName('form')[0];
//         const prompt = document.getElementsByClassName('prompt')[0];
    
//         form.style.display = 'none';
//         prompt.style.display = 'none';
//         Swal.fire({
//             icon: 'error',
//             title: 'TOKEN SALAH',
//             text: 'Gagal meregristasi tamu undangan'
//         }).then(() => {
//             form.style.display = 'inherit';
//             prompt.style.display = 'inherit';
//                 })
//     }
//     if(int.value == 'input'){
//         const tamu = document.getElementById('data-tamu')
//         tamu.style.display = 'none';
//         Swal.fire({
//             icon: 'warning',
//             title: "oops..",
//             text: "Tamu Undangan Belum Terdaftar",
//             input: 'text' ,
//             inputPlaceholder: 'Input Nama Tamu...',
//             showCancelButton: false ,
//             confirmButtonText: 'NEXT'       
//         }).then((result) => {
//             if(result.value.length > 30){
//                 Swal.fire({
//                     icon: 'error',
//                     title: 'FAIL',
//                     text: 'Nama tidak boleh lebih dari 30 character !'
//                 }).then(() => {
//                         location.reload()
//                         })
//             }else{
//                 var ajax = new XMLHttpRequest();
//                 const admin = document.getElementById('admin')
//                 const kode = document.getElementById('kode')
//             //cek kesiapan ajax
//                 ajax.onreadystatechange = function(){
//                 if( ajax.readyState == 4 && ajax.status == 200){
//                     var ok = ajax.responseText
//                         //lakukan jika berhasil meregistrasi tamu
//                         if(ok == 'sukses'){
//                             Swal.fire({
//                                 icon: 'success',
//                                 title: 'SUKSES',
//                                 text: 'Berhasil meregristasi tamu undangan'
//                             }).then(() => {
//                                 tamu.style.display = 'block'; //mengembalikan display page
//                                     var ajax = new XMLHttpRequest();
//                                     ajax.onreadystatechange = function(){
//                                         if( ajax.readyState == 4 && ajax.status == 200){
//                                             tamu.innerHTML = ajax.responseText;
//                                         }
//                                     }
//                 ajax.open('POST', `dataReg.php` , 'true') ;
//                 ajax.setRequestHeader("Content-type", "application/x-www-form-urlencoded")
//                 ajax.send(`admin=${admin.value}&kode=${kode.value}`)
//                                 })
//                         }
//                         //jika gagal registrasi
//                         if(ok == 'fail'){
//                             Swal.fire({
//                                 icon: 'error',
//                                 title: 'FAIL',
//                                 text: 'Gagal meregristasi tamu undangan'
//                             }).then(() => {
//                                     location.reload()
//                                     })
//                         }
//                     }
//                 }
//                 ajax.open('POST', `tamuBaru.php` , 'true') ;
//                 ajax.setRequestHeader("Content-type", "application/x-www-form-urlencoded")
//                 ajax.send(`nama=${result.value}&admin=${admin.value}&kode=${kode.value}`)
//             }
//         })
//     }

// }

//input token logic
if($('.digit-group')!= null){

    $('.digit-group').find('input').each(function() {
        $(this).attr('maxlength', 1);
        $(this).on('keyup', function(e) {
            var parent = $($(this).parent());
    
            if(e.keyCode === 8 || e.keyCode === 37 ) {
                var prev = parent.find('input#' + $(this).data('previous'));
    
                if(prev.length) {
                    $(prev).select();
                }
            } else if(e.keyCode === 39){
                var prev = parent.find('input#' + $(this).data('next'));
                
                if(prev.length) {
                    $(prev).select();
                }
            }
            else if (e.keyCode < 48 || e.keyCode > 57) {
                this.value = '';
                // prevent default behaviour
                e.preventDefault();
        
                return false;
            }else{
                    var next = parent.find('input#' + $(this).data('next'));
                    var last = document.getElementById('digit-6')
                    var btn = document.getElementById('btn')
                    if(next.length) {
                        $(next).select();
                    } else {
                        if(parent.data('autosubmit')) {
                            parent.submit();
                        }
                    }
                    if(last.value != ''){
                        btn.click();
                    }
                }
            
        });
    });

}

