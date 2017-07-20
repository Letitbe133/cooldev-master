

$(function(){

  // Initialisation modal
  $('.modal').modal({
    opacity: 0.2,
    inDuration: 300
  });

  $('#modal-trigger').on('click', function(){
    $('#modal').modal('close');
  })

  // Initialisation menu mobile
  $(".button-collapse").sideNav({
    menuWidth: 300,
    closeOnClick: true
  });

  // Initialisation accordéon
  $('.collapsible').collapsible();

  $('.clear').on('click' , function () {
  $('.collapsible').collapsible('close',0);
    })

  // fonction smoothScroll
  $('.scrollTo').on('click', function(){
    var page = $(this).attr('data-target');
    var speed = 750;
    $('html, body').animate( {scrollTop: $(page).offset().top }, speed);
  })

  // display flèche scroll top
    $(window).scroll(function() {
    var headerHeight = $('header').outerHeight();
    if ($(this).scrollTop() > headerHeight)
     {
        $('#up').fadeIn();
     }
    else
     {
      $('#up').fadeOut();
     }
 });

  // $('.modal-trigger').on('click', function(){
  //   var optOut = document.getElementsByTagName('iframe');
  //   // console.log(optOut[0].innerHTML + "test");
  //   console.log(optOut[0]);
  // })



  // var wrap = $('.wrap-mini');
  // $('#scroll').on('click', function(e){
  //   e.preventDefault();
  //   if (wrap.css('overflow-y') == 'hidden') {
  //     allowScroll();
  //   } else {
  //     denyScroll();
  //   }
  // })

// function allowScroll() {
//   wrap.removeClass('non-scrollable').addClass('scrollable');
// }
//
// function denyScroll() {
//   wrap.removeClass('scrollable').addClass('non-scrollable');
// }



})
