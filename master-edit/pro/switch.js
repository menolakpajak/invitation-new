

// fungsi tombol switch diklik


const off = document.querySelectorAll('.sw-off');
const on = document.querySelectorAll('.sw-on');
let input = document.querySelector('.input-box')
const hideBtn = document.querySelectorAll('.hide-btn');
const iframe = document.getElementsByTagName('iframe');



if(document.querySelectorAll('#sw-input').length > 0 ){
  const sw = document.querySelectorAll('#sw-input');
  const linkDefault = document.getElementById('view').value;
  const linkError = '../../error';
  
  for(let a=0; a < sw.length; a++){
    sw[a].addEventListener('click',function(){
        if(sw[a].value == 'on'){
          sw[a].value = 'off'
          on[a].classList.add('text-hide');
          off[a].classList.remove('text-hide');
          hideBtn[0].classList.remove('d-none')
          input.classList.add('d-none');
          iframe[0].setAttribute('src',linkError)
          return;
        }
        if(sw[a].value == 'off'){
          sw[a].value = 'on'
          on[a].classList.remove('text-hide');
          off[a].classList.add('text-hide');
          hideBtn[0].classList.add('d-none')
          input.classList.remove('d-none');
          iframe[0].setAttribute('src',linkDefault)
          return;
        }
    })
  }
}
    
      // switch acara
if(document.querySelectorAll('#sw-acara').length > 0 ){
  const sw = document.querySelectorAll('#sw-acara');
  
  
  for(let a=0; a < sw.length; a++){
    sw[a].addEventListener('click',function(){
      let link = iframe[0].getAttribute('src');

        if(sw[a].value == 'on'){
          sw[a].value = 'off'
          on[a].classList.add('text-hide');
          off[a].classList.remove('text-hide');
          input.classList.add('d-none');
          iframe[0].setAttribute('src',link+'&acara')
          return;
        }
        if(sw[a].value == 'off'){
          sw[a].value = 'on'
          on[a].classList.remove('text-hide');
          off[a].classList.add('text-hide');
          input.classList.remove('d-none');
          let ceklink = link.split("page")[0]
          if(link == ceklink+'page=acara&acara'){
            iframe[0].setAttribute('src',ceklink+'page=acara')
          }    
          return;
        }
    })
  }
}

// switch couple
if(document.querySelectorAll('#sw-couple').length > 0 ){
  const sw = document.querySelectorAll('#sw-couple');
  
  for(let a=0; a < sw.length; a++){
    sw[a].addEventListener('click',function(){
      let link = iframe[0].getAttribute('src');
        if(sw[a].value == 'on'){
          sw[a].value = 'off'
          on[a].classList.add('text-hide');
          off[a].classList.remove('text-hide');
          input.classList.add('d-none');
          iframe[0].setAttribute('src',link+'&couple')
          return;
        }
        if(sw[a].value == 'off'){
          sw[a].value = 'on'
          on[a].classList.remove('text-hide');
          off[a].classList.add('text-hide');
          input.classList.remove('d-none');
          let ceklink = link.split("page")[0]
          if(link == ceklink+'page=couple&couple'){
            iframe[0].setAttribute('src',ceklink+'page=couple')
          }
          return;
        }
    })
  }
}

// switch strict
if(document.querySelectorAll('#sw-strict').length > 0 ){
  const sw = document.querySelectorAll('#sw-strict');
  const normal = document.querySelectorAll('.sw-normal');
  const strict = document.querySelectorAll('.sw-strict');

  
  for(let a=0; a < sw.length; a++){
    sw[a].addEventListener('click',function(){
    let note = document.querySelectorAll('.note');
        if(sw[a].value == 'on'){
          sw[a].value = 'off'
          normal[a].classList.remove('text-hide');
          strict[a].classList.add('text-hide');
          note[0].classList.add('d-none');
          note[1].classList.add('d-none');
          return;
        }
        if(sw[a].value == 'off'){
          sw[a].value = 'on'
          normal[a].classList.add('text-hide');
          strict[a].classList.remove('text-hide');
          note[0].classList.remove('d-none');
          note[1].classList.remove('d-none');
          return;
        }
    })
  }
}
