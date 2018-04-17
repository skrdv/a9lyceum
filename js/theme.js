(function ($) {


// Banner section slider
function sliderBanner() {
  $('.pageSlider').slick({
    adaptiveHeight: false,
    autoplay: true,
    arrows: false,
    autoplaySpeed: 6000,
    speed: 850,
    fade: true,
    cssEase: 'linear'
  });
}

// News section slider
function sliderNews() {
  $('.newsSlide').slick({
    adaptiveHeight: false,
    autoplay: false,
    nextArrow: '<a class="sectionPress-more" id="move-right">See more</a>'
  });
}



var $wrapper = $('#page');
var $elements = $('.page-section');
var $items = $('.nav-link');
var $arrow = $('#left-arrow-down');
var $more = $('#move-right');

$('document').ready(function(){

  //waypoints
    var waypoints = $('.page-section').waypoint({
      handler: function(direction) {
        if (direction === 'down') {
          $items.removeClass('active');
          var selector = ".nav-link[href='#" + this.element.id + "']";
          $(selector).addClass('active');
        }
        if (direction === 'up') {
          $items.removeClass('active');
          var selector = ".nav-link[href='#" + this.element.id + "']";
          $(selector).addClass('active');
        }
      }
    });

});

$arrow.on('click', function(){
  var $next = $('#menu').find('.active').parent('li').next().find('.nav-link').attr('href');
  console.log($next);
  $(this).attr('href', $next);
  $('body').scrollTo($next, 800);
});


$items.on('click', function(){
  console.log($(this).attr('href'));
  $('body').scrollTo($(this).attr('href'), 800);
});

$more.click(function() {
  sliderMore();
});


function theModal() {

  $('.persons .person-item').each(function(i) {
    var index = i + 1;

    $(this).on('click', function(e){
      e.stopPropagation();
      e.preventDefault();

      window.getSelection().removeAllRanges();

      var modal = new tingle.modal({
        footer: false,
        stickyFooter: false,
        closeMethods: ['overlay', 'button', 'escape'],
        closeLabel: "Close",
        onOpen: function() {
            console.log('modal '+index+' open');
            //$.fn.fullpage.setAllowScrolling(false);

            $('.close').on('click', function(){
              console.log('modal '+index+' close');
              modal.close();
            });
        },
        onClose: function() {
            console.log('modal '+index+' closed');
            //$.fn.fullpage.setAllowScrolling(true);
        },
        beforeClose: function() {
            // here's goes some logic
            // e.g. save content before closing the modal

            return true; // close the modal
        	return false; // nothing happens
        }
      });

      var content = $('#modal-'+index).html();

      modal.setContent(content);

      modal.open();

      // $('#modal-'+index).modal({
      // 	onClose: function(el, options) {
      //     console.log('Modal '+index+' Closed!');
      //     $.fn.fullpage.setAllowScrolling(true);
      // 	}
      // });
    });




  });



}

function seeMore() {
  if ($('.fp-slidesContainer .slide').size() == 1) {
    $('.sectionPress-more').css('display', 'none');
  }
}


$(document).ready(function() {

  sliderBanner();
  sliderNews();
  theModal();

});



})(jQuery);
