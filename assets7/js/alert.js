if(document.getElementById('result') != null){
    var result = document.getElementById('result');

    
    // NORMAL ALERT
    if (result.value == 'sukses') {
        Swal.fire({
            icon: 'success',
            title: 'DONE',
            confirmButtonColor: '#66db69',
            text: 'Proses Berhasil'
        }).then(() => {    
            if ( window.history.replaceState ) {
                window.history.replaceState( null, null, window.location.href );
            }
            window.location = window.location.href;
        })
            
    }
    if (result.value == 'fail') {
        Swal.fire({
            icon: 'error',
            confirmButtonText: 'Ulangi',
            confirmButtonColor: '#f54949',
            title: 'FAIL',
            text: 'Proses Gagal'
        }).then(() => {    
            if ( window.history.replaceState ) {
                window.history.replaceState( null, null, window.location.href );
            }
            window.location = window.location.href;
        })
            
    }
    
        // input form pendaftaran baru
        if (result.value == 'form sukses') {
            Swal.fire({
                icon: 'success',
                confirmButtonColor: '#66db69',
                title: 'Selamat',
                text: 'Berhasil membuat form baru !'
            }).then(() => {    
                if ( window.history.replaceState ) {
                    window.history.replaceState( null, null, window.location.href );
                }
                window.location = window.location.href;
            })
                
        }
        if (result.value == 'form gagal') {
            Swal.fire({
                icon: 'error',
                confirmButtonText: 'Ulangi',
                confirmButtonColor: '#f54949',
                title: 'Maaf',
                text: 'Gagal membuat form baru !'
            }).then(() => {    
                if ( window.history.replaceState ) {
                    window.history.replaceState( null, null, window.location.href );
                }
                window.location = window.location.href;
            })
                
        }

        // input form dari user
        if (result.value == 'kirim form sukses') {
            var kode = document.getElementById('kode')
            Swal.fire({
                icon: 'success',
                confirmButtonColor: '#66db69',
                title: 'Sukses',
                html: 'Data Anda Telah <strong class="text-success">Terkirim</strong>'
            }).then(() => {    
                if ( window.history.replaceState ) {
                    window.history.replaceState( null, null, window.location.href );
                }
                window.location.href="../proses/?kode="+kode.value;
            })
                
        }
        if (result.value == 'kirim nama fail') {
            Swal.fire({
                icon: 'error',
                confirmButtonText: 'Ulangi',
                confirmButtonColor: '#f54949',
                title: 'Gagal',
                html: 'Nama tidak boleh lebih dari <strong class="text-danger">30 Karakter / Kosong</strong> !'
            }).then(() => {    
                if ( window.history.replaceState ) {
                    window.history.replaceState( null, null, window.location.href );
                }
                window.location = window.location.href;
            })
                
        }
        if (result.value == 'kirim kota fail') {
            Swal.fire({
                icon: 'error',
                confirmButtonText: 'Ulangi',
                confirmButtonColor: '#f54949',
                title: 'Gagal',
                html:
                '<strong class="text-danger">✘</strong> Kolom Kota tidak boleh <strong class="text-danger">Kosong</strong>,</br> ' +
                '<strong class="text-danger">✘</strong> Nama Kota tidak lebih dari <strong class="text-danger">20 Karakter</strong> !,</br> '
            }).then(() => {    
                if ( window.history.replaceState ) {
                    window.history.replaceState( null, null, window.location.href );
                }
                window.location = window.location.href;
            })
                
        }
        if (result.value == 'kirim email fail') {
            Swal.fire({
                icon: 'error',
                confirmButtonText: 'Ulangi',
                confirmButtonColor: '#f54949',
                title: 'Gagal',
                html:
                '<strong class="text-danger">✘</strong> <strong class="text-danger">Format</strong> email salah,</br> ' +
                '<strong class="text-danger">✘</strong> Nama Email Terlalu <strong class="text-danger">Panjang</strong>,</br> ' +
                '<strong class="text-danger">✘</strong> Email <strong class="text-danger">Sudah Digunakan</strong> User Lain</br> '
            }).then(() => {    
                if ( window.history.replaceState ) {
                    window.history.replaceState( null, null, window.location.href );
                }
                window.location = window.location.href;
            })
                
        }
        if (result.value == 'kirim nomer fail') {
            Swal.fire({
                icon: 'error',
                confirmButtonText: 'Ulangi',
                confirmButtonColor: '#f54949',
                title: 'Gagal',
                html:
                '<strong class="text-danger">✘</strong> Nomer WA tidak kurang dari <strong class="text-danger">8 digit</strong>,</br> ' +
                '<strong class="text-danger">✘</strong> Nomer WA tidak lebih dari <strong class="text-danger">15 digit</strong>,</br> ' +
                '<strong class="text-danger">✘</strong> Tidak boleh berisi <strong class="text-danger">Huruf</strong>,</br> ' +
                '<strong class="text-danger">✘</strong> Tidak boleh berisi <strong class="text-danger">Simbol</strong></br> '
            }).then(() => {    
                if ( window.history.replaceState ) {
                    window.history.replaceState( null, null, window.location.href );
                }
                window.location = window.location.href;
            })
                
        }
        if (result.value == 'kirim tema fail') {
            Swal.fire({
                icon: 'error',
                confirmButtonText: 'Ulangi',
                confirmButtonColor: '#f54949',
                title: 'Gagal',
                html:
                '<strong class="text-danger">✘</strong> Kolom Tema tidak boleh <strong class="text-danger">Kosong</strong>,</br> ' +
                '<strong class="text-danger">✘</strong> Nama Tema <strong class="text-danger">Tidak Ada</strong> !</br> '
            }).then(() => {    
                if ( window.history.replaceState ) {
                    window.history.replaceState( null, null, window.location.href );
                }
                window.location = window.location.href;
            })
                
        }
        if (result.value == 'kirim paket fail') {
            Swal.fire({
                icon: 'error',
                confirmButtonText: 'Ulangi',
                confirmButtonColor: '#f54949',
                title: 'Gagal',
                html:
                '<strong class="text-danger">✘</strong> Kolom Paket tidak boleh <strong class="text-danger">Kosong</strong>,</br> ' +
                '<strong class="text-danger">✘</strong> Jenis Paket <strong class="text-danger">Tidak Ada</strong> !</br> '
            }).then(() => {    
                if ( window.history.replaceState ) {
                    window.history.replaceState( null, null, window.location.href );
                }
                window.location = window.location.href;
            })
                
        }
        if (result.value == 'kirim user fail') {
            Swal.fire({
                icon: 'error',
                confirmButtonText: 'Ulangi',
                confirmButtonColor: '#f54949',
                title: 'Gagal',
                html: 'User <strong class="text-danger">Mengisi Form</strong> / form telah <strong class="text-danger">Dikirimkan</strong> !'
            }).then(() => {    
                if ( window.history.replaceState ) {
                    window.history.replaceState( null, null, window.location.href );
                }
                window.location = window.location.href;
            })
                
        }
        if (result.value == 'kirim link fail') {
            Swal.fire({
                icon: 'error',
                confirmButtonText: 'Ulangi',
                confirmButtonColor: '#f54949',
                title: 'Gagal',
                html:
                '<strong class="text-danger">✘</strong> Link tidak boleh <strong class="text-danger">Kosong</strong>,</br> ' +
                '<strong class="text-danger">✘</strong> Link tidak boleh berisi <strong class="text-danger">Huruf Kapital</strong>,</br> ' +
                '<strong class="text-danger">✘</strong> Link tidak boleh berisi <strong class="text-danger">Tanda Baca/Spasi</strong>,</br> ' +
                '<strong class="text-danger">✘</strong> Link tidak boleh lebih dari <strong class="text-danger">100 Karakter</strong>,</br> '
            }).then(() => {    
                if ( window.history.replaceState ) {
                    window.history.replaceState( null, null, window.location.href );
                }
                window.location = window.location.href;
            })
                
        }

        // hapus form queue customer/form.php
        if (result.value == 'hapusformsukses') {
            Swal.fire({
                icon: 'success',
                title: 'DONE',
                confirmButtonColor: '#66db69',
                text: 'Berhasil di Hapus'
            }).then(() => {    
                location.href = "form.php";
            })
                
        }
        if (result.value == 'hapusformfail') {
            Swal.fire({
                icon: 'error',
                confirmButtonText: 'Ulangi',
                confirmButtonColor: '#f54949',
                title: 'FAIL',
                text: 'Gagal dihapus'
            }).then(() => {    
                location.href = "form.php";
            })       
        }

        // hapus input user customer/index.php
        if (result.value == 'deleteinputsukses') {
            Swal.fire({
                icon: 'success',
                title: 'DONE',
                confirmButtonColor: '#66db69',
                text: 'Berhasil di Hapus'
            }).then(() => {    
                location.href = "index.php";
            })
                
        }
        if (result.value == 'deleteinputfail') {
            Swal.fire({
                icon: 'error',
                confirmButtonText: 'Ulangi',
                confirmButtonColor: '#f54949',
                title: 'FAIL',
                text: 'Hapus gagal Gagal'
            }).then(() => {    
                location.href = "index.php";
            })       
        }

}

// fungsi untuk menambah tamu undangan
function tambah(user){
    Swal.fire({
title: 'Input Tamu',
icon: 'question',
html:
'<input id="name" type="text" maxlength="30" class="form-control swal2-input" placeholder="Nama : ">' +
'<input id="noWa" type="number" min="99999999" max="1000000000000000" class="form-control swal2-input" placeholder="No wa : (Opsioanal)" style="max-width:100%;">',
showCloseButton: false,
showCancelButton: true,
focusConfirm: false,
confirmButtonText:
  'OK',
confirmButtonAriaLabel: 'Thumbs up, great!',
cancelButtonText:
  'Cancel',
cancelButtonAriaLabel: 'Thumbs down'
}).then((result) => {
    let nama = document.getElementById('name').value;
    let wa = document.getElementById('noWa').value;
    if(result.isConfirmed){
        // cek jika kolom kosong
        if(nama == ''){
        Swal.fire({
                    icon: 'error',
                    confirmButtonText: 'Ulangi',
                    confirmButtonColor: '#f54949',
                    title: 'FAIL',
                    text: 'Input NAMA tidak boleh kosong !'
                })
                return false;
        }
        // cek jika nama lebih dari 30 char
        if(nama.length > 30){
        Swal.fire({
                    icon: 'error',
                    confirmButtonText: 'Ulangi',
                    confirmButtonColor: '#f54949',
                    title: 'FAIL',
                    text: 'NAMA tidak boleh lebih dari 30 char !'
                })
                return false;
        }
        // cek jika nomer wa <dari 8 dan lebih dari 15
        if(wa !== ''){
        if(wa.length < 8 || wa.length > 15){
            Swal.fire({
                        icon: 'error',
                        confirmButtonText: 'Ulangi',
                        confirmButtonColor: '#f54949',
                        title: 'FAIL',
                        text: 'Nomer Wa tidak kurang dari 8 dan lebih dari 15 digit !'
                    })
                    return false;
        }  
        }
        var ajax = new XMLHttpRequest();
                //cek kesiapan ajax
                ajax.onreadystatechange = function(){
                    if( ajax.readyState == 4 && ajax.status == 200){
                        var ok = ajax.responseText
                        if(ok == 'ok'){
                            Swal.fire({
                                icon: 'success',
                                confirmButtonColor: '#66db69',
                                title: 'Selamat',
                                text: 'Berhasil menambah Tamu Baru !'
                            }).then(() => {    
                                if ( window.history.replaceState ) {
                                    window.history.replaceState( null, null, window.location.href );
                                }
                                window.location = window.location.href;
                            })
                        }else{
                            Swal.fire({
                                icon: 'error',
                                confirmButtonText: 'Ulangi',
                                confirmButtonColor: '#f54949',
                                title: 'FAIL',
                                text: 'Gagal Menambahkan Tamu !'
                            })
                            return false;
                        }
                    }
                }
                ajax.open('POST', `proses.php` , 'true') ;
                ajax.setRequestHeader("Content-type", "application/x-www-form-urlencoded")
                ajax.send(`user=${user}&nama=${nama}&wa=${wa}`)
    
    }

})

}

function edit(user,kode,inputNama,inputWa){
    Swal.fire({
title: 'Edit Tamu',
icon: 'warning',
html:
'<input id="name" type="text" maxlength="30" class="form-control swal2-input" placeholder="Nama : " value="'+inputNama+'">' +
'<input id="noWa" type="number" min="99999999" max="1000000000000000" class="form-control swal2-input" placeholder="No wa : (Opsioanal)" style="max-width:100%;" value="'+inputWa+'">',
showCloseButton: false,
showCancelButton: true,
focusConfirm: false,
confirmButtonText:
  'OK',
confirmButtonAriaLabel: 'Thumbs up, great!',
cancelButtonText:
  'Cancel',
cancelButtonAriaLabel: 'Thumbs down'
}).then((result) => {
    let nama = document.getElementById('name').value;
    let wa = document.getElementById('noWa').value;
    if(result.isConfirmed){
        // cek jika tidak ada perubahan
        if(nama == inputNama && wa == inputWa){
            Swal.fire({
                        icon: 'error',
                        confirmButtonText: 'Ulangi',
                        confirmButtonColor: '#f54949',
                        title: 'FAIL',
                        text: 'Anda Tidak melakukan perubahan !'
                    })
                    return false;
            }
        // cek jika kolom kosong
        if(nama == ''){
        Swal.fire({
                    icon: 'error',
                    confirmButtonText: 'Ulangi',
                    confirmButtonColor: '#f54949',
                    title: 'FAIL',
                    text: 'Input NAMA tidak boleh kosong !'
                })
                return false;
        }
        // cek jika nama lebih dari 30 char
        if(nama.length > 30){
        Swal.fire({
                    icon: 'error',
                    confirmButtonText: 'Ulangi',
                    confirmButtonColor: '#f54949',
                    title: 'FAIL',
                    text: 'NAMA tidak boleh lebih dari 30 char !'
                })
                return false;
        }
        // cek jika nomer wa <dari 8 dan lebih dari 15
        if(wa !== ''){
        if(wa.length < 8 || wa.length > 15){
            Swal.fire({
                        icon: 'error',
                        confirmButtonText: 'Ulangi',
                        confirmButtonColor: '#f54949',
                        title: 'FAIL',
                        text: 'Nomer Wa tidak kurang dari 8 dan lebih dari 15 digit !'
                    })
                    return false;
        }  
    }
        var ajax = new XMLHttpRequest();
                //cek kesiapan ajax
                ajax.onreadystatechange = function(){
                    if( ajax.readyState == 4 && ajax.status == 200){
                        var ok = ajax.responseText
                        
                        if(ok == 'ok'){
                            Swal.fire({
                                icon: 'success',
                                confirmButtonColor: '#66db69',
                                title: 'Selamat',
                                text: 'Berhasil merubah Data Tamu !'
                            }).then(() => {    
                                if ( window.history.replaceState ) {
                                    window.history.replaceState( null, null, window.location.href );
                                }
                                window.location = window.location.href;
                            })
                        }else{
                            Swal.fire({
                                icon: 'error',
                                confirmButtonText: 'Ulangi',
                                confirmButtonColor: '#f54949',
                                title: 'FAIL',
                                text: 'Gagal Merubah Data Tamu !'
                            })
                            return false;
                        }
                    }
                }
                ajax.open('POST', `proses.php` , 'true') ;
                ajax.setRequestHeader("Content-type", "application/x-www-form-urlencoded")
                ajax.send(`user=${user}&kode=${kode}&editnama=${nama}&editwa=${wa}`)
    
    }

})

}


function hapusTamu(user,kode){
    Swal.fire({
        title: 'Yakin akan menghapus?',
        text: "Data akan hilang selamanya..",
        icon: 'warning',
        showCancelButton: false,
        confirmButtonColor: '#66db69',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Hapus'
      }).then((result) => {
        if (result.isConfirmed) {
            var ajax = new XMLHttpRequest();
            //cek kesiapan ajax
            ajax.onreadystatechange = function(){
                if( ajax.readyState == 4 && ajax.status == 200){
                    var ok = ajax.responseText
                    
                    if(ok == 'ok'){
                        Swal.fire({
                            icon: 'success',
                            confirmButtonColor: '#66db69',
                            title: 'Berhasil',
                            text: 'Data Telah Terhapus !'
                        }).then(() => {    
                            if ( window.history.replaceState ) {
                                window.history.replaceState( null, null, window.location.href );
                            }
                            window.location = window.location.href;
                        })
                    }else{
                        Swal.fire({
                            icon: 'error',
                            confirmButtonText: 'Ulangi',
                            confirmButtonColor: '#f54949',
                            title: 'FAILED',
                            text: 'Gagal DiHapus !'
                        })
                        return false;
                    }
                }
            }
            ajax.open('POST', `proses.php` , 'true') ;
            ajax.setRequestHeader("Content-type", "application/x-www-form-urlencoded")
            ajax.send(`hapususer=${user}&hapuskode=${kode}`)

        }
      })
    
}

function detail(tamu){
    const data = JSON.parse(tamu)
    if(typeof data['wa'] == 'undefined' || data['wa'] == null){
        data['wa'] = '---'
    }
    if(typeof data['status'] == 'undefined' || data['status'] == null){
        data['status'] = '---'
    }
    if(typeof data['hadir'] == 'undefined' || data['hadir'] == null){
        data['hadir'] = '---'
    }
    if(typeof data['regStatus'] == 'undefined' || data['regStatus'] == null){
        data['regStatus'] = '---'
    }
    if(typeof data['dateReg'] == 'undefined' || data['dateReg'] == null){
        data['dateReg'] = '---'
    }
    if(typeof data['comment'] == 'undefined' || data['comment'] == null){
        data['comment'] = 'No'
    }else{
        data['comment'] = 'Yes'
    }
    Swal.fire({
        icon: 'info',
        confirmButtonText: 'OK',
        confirmButtonColor: '#41ad4a',
        title: 'Data Tamu',
        html:
        '<div style="display:flex;justify-content:space-between;margin-bottom:-15px;">'+
            '<strong class="text-dark">Date Add : </strong><p>'+data['dateAdd']+'</p>' +
        '</div>'+
        '<div style="display:flex;justify-content:space-between;margin-bottom:-15px;">'+
            '<strong class="text-dark">Date Reg : </strong><p>'+data['dateReg']+'</p>' +
        '</div>'+
        '<div style="display:flex;justify-content:space-between;margin-bottom:-15px;">'+
            '<strong class="text-primary">Nama : </strong><p>'+data['nama']+'</p>' +
        '</div>'+
        '<div style="display:flex;justify-content:space-between;margin-bottom:-15px;">'+
            '<strong class="text-primary">No Wa : </strong><p>'+data['wa']+'</p>' +
        '</div>'+
        '<div style="display:flex;justify-content:space-between;margin-bottom:-15px;">'+
            '<strong class="text-primary">Konfirmasi : </strong><p>'+data['hadir']+'</p>' +
        '</div>'+
        '<div style="display:flex;justify-content:space-between;margin-bottom:-15px;">'+
            '<strong class="text-primary">Ucapan : </strong><p>'+data['comment']+'</p>' +
        '</div>'+
        '<div style="display:flex;justify-content:space-between;margin-bottom:-15px;">'+
            '<strong class="text-success">Status : </strong><p>'+data['status']+'</p>' +
        '</div>'+
        '<div style="display:flex;justify-content:space-between;margin-bottom:-15px;">'+
            '<strong class="text-warning">Registrasi : </strong><p>'+data['regStatus']+'</p>' +
        '</div>'
    })
}