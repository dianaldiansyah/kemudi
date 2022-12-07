var header = $('.header');

$(window).scroll(function(e){
    if(header.offset().top !== 0){
        if(!header.hasClass('shadow')){
            header.addClass('shadow');
        }
    }else{
        header.removeClass('shadow');
    }
});

$(document).ready(function() {
  $('.navigation__action').click(function(){
		$(".navigation__action").addClass('open');
    $(".menu-overlay").addClass("active");
    $(".menu-navigation").addClass("active");
	});

  $(".menu-navigation__close").click(function() {
    $(".navigation__action").removeClass('open');
    $(".menu-overlay").removeClass("active");
    $(".menu-navigation").removeClass("active");
  });

  $(".more").click(function() {
    $(this).hide();
    $(".list-second").addClass('active');
  });
});

new Swiper('.swiper-vehicles', {
    // Optional parameters
    direction: 'horizontal',
    slidesPerView: 3.5,
    loop: false,
    // Navigation arrows
    navigation: {
      nextEl: '.swiper-next',
      prevEl: '.swiper-prev',
    },
});

new Swiper('.swiper-testimonials', {
  // Optional parameters
  direction: 'horizontal',
  slidesPerView: 3.5,
  slidesOffsetAfter: 200,
  loop: false,
  // Navigation arrows
  navigation: {
    nextEl: '.swiper-next',
    prevEl: '.swiper-prev',
  },
});