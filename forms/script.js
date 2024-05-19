
      
function cekUserName (){
  var username = document.getElementById('username')
  var ajax = new XMLHttpRequest();
  ajax.onreadystatechange = function () {
    if(ajax.readyState == 4 && ajax.status == 200){
      var ok = ajax.responseText
      var cek = document.getElementById('cek');
      var btn = document.getElementById('submit')
      // return console.log(ok)
      if(ok == 'fail'){
        cek.innerHTML = '●<i class="text-danger"> Email tidak bisa digunakan/telah terdaftar !</i>'
        btn.setAttribute('disabled',true);
      }else{
        cek.innerHTML = '';
        btn.removeAttribute('disabled');
      }
    }
  }
  ajax.open('POST', `ajax.php` , 'true') ;
  ajax.setRequestHeader("Content-type", "application/x-www-form-urlencoded")
  ajax.send(`username=${username.value}`)
}

function onlyLeter (e){
  if((e.keyCode > 65 && e.keyCode < 90) || (e.keyCode >48 && e.keyCode <57) || e.keyCode != 32){
    return false;
  }else{
    e.preventDefault()

  }
  
}

function cekLink (e){
  
  // else{

    var link = document.getElementById('link')
    var ajax = new XMLHttpRequest();
    ajax.onreadystatechange = function () {
      if(ajax.readyState == 4 && ajax.status == 200){
        var ok = ajax.responseText
        var cek = document.getElementById('ceklink')
        var linkval = document.getElementById('linkvalue');
        var btn = document.getElementById('submit')
        
          if(ok == 'fail'){
            cek.innerHTML = '●<i class="text-danger"> Link sudah digunakan user lain !</i>'
            linkval.innerText = link.value
            linkval.className = "text-danger text-decoration-line-through"
            btn.setAttribute('disabled',true);
          }else{
            cek.innerHTML = ''
            linkval.innerText = link.value
            linkval.className = "text-primary"
            btn.removeAttribute('disabled');
          }
      }
    }
    ajax.open('POST', `ajax.php` , 'true') ;
    ajax.setRequestHeader("Content-type", "application/x-www-form-urlencoded")
    ajax.send(`link=${link.value}`)
  // }
}


function cekTema (e){
    var tema = document.getElementById('tema')
    var ajax = new XMLHttpRequest();
    ajax.onreadystatechange = function () {
      if(ajax.readyState == 4 && ajax.status == 200){
        var ok = ajax.responseText
        tema.innerHTML = ok
      }
    }
    ajax.open('POST', `tema.php` , 'true') ;
    ajax.setRequestHeader("Content-type", "application/x-www-form-urlencoded")
    ajax.send(`paket=${e}`)

  }