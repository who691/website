$(document).ready(function(){
    $('.move-up span').click(function(){
        $('html , body').animate({
            scrollTop:0
        },1500)
    })


    

    let nav_offset_top = $('.header_area').height()+50;

    

    function navbarFixed() {
      if ($('.header_area').length) {
          $(window).scroll(function () {
              let scroll = $(window).scrollTop();
              
              if (scroll >= nav_offset_top) {
                  $('.header_area .main-menu').addClass('navbar_fixed');
              } else {
                  $('.header_area .main-menu').removeClass('navbar_fixed');
              }
          })
      }
  }

  navbarFixed();


  var thehours = new Date().getHours();
  var themessage;
  var morning = ('Good morning');
  var afternoon = ('Good afternoon');
  var evening = ('Good evening');

  if (thehours >= 0 && thehours < 12) {
    themessage = morning; 

  } else if (thehours >= 12 && thehours < 17) {
    themessage = afternoon;

  } else if (thehours >= 17 && thehours < 24) {
    themessage = evening;
  }
  $('.greeting').append(themessage);

  
  
    function runCounter () {
      $('div h2 span').each(function(){
        const This = $(this);
        $({Count: This.text()}).animate(
          {Count: This.parent().attr("data-count")},
          {
            duration: 2000,
            easing: "linear",
            step: function(){
              This.text(Math.floor(this.Count))
            },
            complete: function(){
              This.text(this.Count).css({color:"red"})
            }
          }
        )
      })
    } // end runCounter


})




 
  
  
  
  

