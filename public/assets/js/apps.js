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

$(window).scroll(checkScroll);
var viewed = false;

function isScrolledIntoView(elem) {
    var docViewTop = $(window).scrollTop();
    var docViewBottom = docViewTop + $(window).height();

    var elemTop = $(elem).offset().top;
    var elemBottom = elemTop + $(elem).height();

    return ((elemBottom <= docViewBottom) && (elemTop >= docViewTop));
}

function scrollToElm(el, active) {
  $(".menu-navigation__list .list__item").removeClass("active");
  $(active).parent().addClass("active");
  $('html, body').animate({
    scrollTop: $(`.${el}`).offset().top - 100
  }, 2000);
}

  // Check Scroll
function checkScroll() {
  if (isScrolledIntoView($(".section--about")) && !viewed) {
      viewed = true;
      $('.detail__list .list__item .title span').each(function () {
        $(this).prop('Counter',0).animate({
            Counter: $(this).text()
        }, {
            duration: 4000,
            easing: 'swing',
            step: function (now) {
                $(this).text(Math.ceil(now));
            }
        });
      });
  }
}

$(document).ready(function() {
  AOS.init();

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