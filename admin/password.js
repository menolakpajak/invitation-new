

var pwd = document.getElementById('change-password');

// pwd.addEventListener('mouseover',function(){
//         if(this.innerHTML == '<h5 class="text-warning">Password :</h5>'){
//             this.innerHTML = '<h5 class="text-danger">Change Password ?</h5>';
//         }
// },false)

// pwd.addEventListener('mouseleave',function(){
//         this.innerHTML = '<h5 class="text-warning">Password :</h5>';
// },false)

// change password

    pwd.addEventListener('click', password);

function password(){
    
    Swal.fire({
        icon: 'question',
        title: "UBAH PASSWORD",
        text: "Masukkan password lama anda:",
        input: 'password' ,
        showCancelButton: true ,
        confirmButtonText: 'NEXT'       
    }).then((result) => {
        if (result.value) {
            // var password = encodeURI(result.value);
            var ajax = new XMLHttpRequest();
            var user = document.getElementById('user').value
            //cek kesiapan ajax
            ajax.onreadystatechange = function(){
                if( ajax.readyState == 4 && ajax.status == 200){
                    var ok = ajax.responseText 
                    // console.log(ok)
                    // return
                    if(ok == "password ok"){                        // jika password benar
                        Swal.fire({
                            icon: 'question',
                            title: "PASSWORD BARU",
                            text: "Masukan password baru anda:",
                            input: 'password',
                            confirmButtonColor: '#ffb53e',
                            showCancelButton: true,
                            confirmButtonText: 'NEXT'        
                        }).then((result) => {
                            if (result.value) {         // input password baru
                                var passwordSatu = result.value
                                Swal.fire({
                                    icon: 'question',
                                    title: "PASSWORD VERIFY",
                                    text: "Masukan password baru anda lagi:",
                                    input: 'password',
                                    confirmButtonColor: '#f71212',
                                    showCancelButton: true,
                                    confirmButtonText: 'NEXT'        
                                }).then((result) => {
                                    if (result.value) {         // verify password baru
                                        passwordDua = result.value
                                        if(passwordSatu == passwordDua){     // cek kesamaan password baru
                                            var ajax = new XMLHttpRequest()
                                            var user = document.getElementById('user').value
                                            //cek kesiapan ajax
                                            ajax.onreadystatechange = function(){
                                                if( ajax.readyState == 4 && ajax.status == 200){
                                                    var ok = ajax.responseText ;
                                                    if(ok == 'sukses'){         //jika ganti password sukses
                                                        Swal.fire({
                                                            icon: 'success',
                                                            title: 'PASSWORD DIUBAH',
                                                            text: 'Pergantian password berhasil dilakukan',
                                                        }).then((result) => {
                                                            location.href = 'login/?logout';
                                                        })
                                                        
                                                    }else if(ok == 'password sama'){
                                                        Swal.fire({
                                                            icon: 'warning',
                                                            title: 'TIDAK ADA PERUBAHAN',
                                                            text: 'Password baru anda sama dengan password lama',
                                                        })
                                                        
                                                    }else{
                                                    //jika ganti password gagal
                                                    
                                                        Swal.fire({
                                                            icon: 'error',
                                                            title: 'PASSWORD GAGAL DIUBAH',
                                                            text: 'Password anda tidak berubah !',
                                                        })

                                                    }
                                                }
                                            }
                                        
                                                  // jalankan ajaxnya
                                            ajax.open('POST', `change_password.php` , 'true') ;
                                            ajax.setRequestHeader("Content-type", "application/x-www-form-urlencoded")
                                            ajax.send(`user=${user}&verify=${passwordSatu}`) ;
                                        
                                        }else{                                  // jika password tidak sama
                                            Swal.fire({
                                                icon: 'error',
                                                title: 'PROSES GAGAL',
                                                text: 'Password yang anda masukan tidak cocok !',
                                            })
                                        }
                                    }
                                });     
                            }
                        });
                    }else if(ok == "password fail"){                // jika password salah    
                        Swal.fire({
                            icon: 'error',
                            title: 'PROSES GAGAL',
                            text: 'Password lama anda SALAH !',
                        })
                    
                    }
                }
            }
        
                  // jalankan ajaxnya

            ajax.open('POST', `change_password.php` , 'true') ;
            ajax.setRequestHeader("Content-type", "application/x-www-form-urlencoded")
            ajax.send(`username=${user}&password=${result.value}`)

        }else{                                  // jika tidak mengimputkan apapun diawal
            Swal.fire({
                icon: 'warning',
                title: 'TIDAK ADA PERUBAHAN',
                text: 'anda tidak menginputkan apapun !',
            })
            // .then(okay => {
            //     window.location.href = ""
            // })
        }
    });

}