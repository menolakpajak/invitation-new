/*
	The7 by TEMPLATE STOCK
	templatestock.co @templatestock
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
*/

$(document).ready(function() {

  /**
   * Author: Heather Corey
   * jQuery Simple Parallax Plugin
   *
   */
   
  (function($) {
   
      $.fn.parallax = function(options) {
   
          var windowHeight = $(window).height();
   
          // Establish default settings
          var settings = $.extend({
              speed        : 0.15
          }, options);
   
          // Iterate over each object in collection
          return this.each( function() {
   
            // Save a reference to the element
            var $this = $(this);
   
            // Set up Scroll Handler
            $(document).scroll(function(){
   
                  var scrollTop = $(window).scrollTop();
                        var offset = $this.offset().top;
                        var height = $this.outerHeight();
   
            // Check if above or below viewport
        if (offset + height <= scrollTop || offset >= scrollTop + windowHeight) {
          return;
        }
   
        var yBgPosition = Math.round((offset - scrollTop) * settings.speed);
   
                          // Apply the Y Background Position to Set the Parallax Effect
            $this.css('background-position', 'center ' + yBgPosition + 'px');
                  
            });
          });
      }
  }(jQuery));

//Loader
$(window).load(function() {
	$(".loader-overlay").fadeOut("slow");
})

//Counter
$('.counter').counterUp({
    delay: 10,
    time: 1000
});


$('a[data-rel^=lightcase]').lightcase();

// Instantiate MixItUp

  $('.portfolio-items').mixItUp({
    load: {
      filter: '.wedding'
  },
       animation: {
          duration: 300
      }
  });

  if(document.getElementById('wedding') != null){
    const wedding = document.getElementById('wedding')
    const birthday = document.getElementById('birthday')
    const other = document.getElementById('other')
    const viewmore = document.querySelector('.viewmore')
  // console.log(wedding)
    wedding.addEventListener('click',function(){
        viewmore.setAttribute('href','viewmore.php?wedding')
    })
    birthday.addEventListener('click',function(){
      viewmore.setAttribute('href','viewmore.php?birthday')
    })
    other.addEventListener('click',function(){
      viewmore.setAttribute('href','viewmore.php?other')
    })
  
  }

// Carousels   
  $('.cl-client-carousel').owlCarousel({
      pagination:true,
      slideSpeed : 300,
      paginationSpeed : 400,
      singleItem:true,
      autoPlay:true,
  }); 
  
  $('.cl-logo-carousel').owlCarousel({
	  items : 6,
      itemsDesktop : [1199,5],
      itemsDesktopSmall : [979,3],
      stopOnHover:true,
      autoPlay:3000,
  });

    $(".header-carousel").owlCarousel({
        pagination:true,
        navigation : true, // Show next and prev buttons
        slideSpeed : 500,
        paginationSpeed : 500,
        singleItem:true,
        autoPlay:true,
    });

// Parallax
$('.parallax-section').parallax({
          speed : .100
        });

// Header Changer on Scroll
$(function() {
    //caches a jQuery object containing the header element
    var header = $(".header-home");
    $(window).scroll(function() {
        var scroll = $(window).scrollTop();

        if (scroll >= 100) {
            header.removeClass('header-home').addClass("header-default");
        } else {
            header.removeClass("header-default").addClass('header-home');
        }
    });
});

// Navigation
  $('.nav-container').onePageNav({
    scrollSpeed: 600,
    currentClass: 'current',
    changeHash: true,
    filter: ':not(.external)'
  });

//Header Class Change on Resize
  var $window = $(window);

      // Function to handle changes to style classes based on window width
      function checkWidth() {
      if ($window.width() < 767) {
          $('#top-header').removeClass('header-home').addClass('header-default');
          };

      if ($window.width() >= 767) {
          $('#top-header').removeClass('header-default').addClass('header-home');
      }
  }

  // Execute on load
  checkWidth();

  // Bind event listener
      $(window).resize(checkWidth);



});

function highlight (time){
  const cepat = document.getElementById('cepat')
  const mudah = document.getElementById('mudah')
  const murah = document.getElementById('murah')
  const elegan = document.getElementById('elegan')
  murah.classList.add('d-none')
  mudah.classList.add('d-none')
  elegan.classList.add('d-none')

  setTimeout(function () {
    cepat.classList.add('d-none')
    mudah.classList.remove('d-none')
  }, time);
  setTimeout(function () {
    mudah.classList.add('d-none')
    murah.classList.remove('d-none')
  }, time*2);
  setTimeout(function () {
    murah.classList.add('d-none')
    elegan.classList.remove('d-none')
  }, time*3);
  setTimeout(function () {
    cepat.classList.remove('d-none')
    highlight(time);
  }, time*4);
}


highlight(3000)

function btnHide(){
  const fitur = document.querySelectorAll('.hide-fitur')
  const hideBtn = document.querySelector('.v-all')
  for(let a = 0; a < fitur.length; a++){
    fitur[a].classList.remove('d-none')
  }
  hideBtn.classList.add('d-none')
}

const faq = document.querySelectorAll('.faq')

for(let w = 0; w < faq.length; w++){
  faq[w].addEventListener('click',function(){
    const faqText = document.querySelectorAll('.faq-text')
    const icon = this.querySelector('i')
    const line = document.querySelectorAll('.line')
    // const textHeight = faqText[w].getBoundingClientRect().height;

    if(icon.classList.value == 'bx bxs-chevron-right'){
      // faqText[w].classList.remove('d-none')
      faqText[w].classList.remove('close')
      faqText[w].classList.add('open')
      line[w].classList.remove('close')
      line[w].classList.add('open')
      icon.classList.value = 'bx bxs-chevron-down'
      // line[w].style.marginTop = "1rem";
    }else{
      faqText[w].classList.remove('open')
      faqText[w].classList.add('close')
      line[w].classList.remove('open')
      line[w].classList.add('close')
      icon.classList.value = 'bx bxs-chevron-right'

      // line[w].style.marginTop = `calc(-${textHeight}px + 1rem)`;

      // faqText[w].addEventListener("transitionend", e => {
      //   console.log(textHeight);
      // }, {once: true})
      // faqText[w].classList.add('d-none')
    }
    // console.log(this.querySelector('i').classList.value)
  })

}