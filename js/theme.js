(function ($) {


$(document).ready(function() {

  // Waypoint
  $('.page-section').waypoint({
    handler: function(direction) {
      if (direction === 'down') {
        $('.nav-link').removeClass('active');
        var selector = ".nav-link[href='#" + this.element.id + "']";
        $(selector).addClass('active');
      }
      if (direction === 'up') {
        $('.nav-link').removeClass('active');
        var selector = ".nav-link[href='#" + this.element.id + "']";
        $(selector).addClass('active');
      }
    }
  });

  // Top slider
  $('.pageSlider').slick({
    adaptiveHeight: false,
    autoplay: true,
    arrows: false,
    autoplaySpeed: 6000,
    speed: 850,
    fade: true,
    cssEase: 'linear'
  });

  // News slider
  $('.newsSlide').slick({
    adaptiveHeight: false,
    autoplay: false,
    nextArrow: '<a class="sectionPress-more" id="move-right">See more</a>'
  });

  // Persons modal
  $('.persons .person-item').each(function(i) {
    var index = i + 1;
    $(this).on('click', function(e){
      e.stopPropagation();
      e.preventDefault();
      window.getSelection().removeAllRanges();
      var modal = new tingle.modal({
        closeMethods: ['overlay', 'button', 'escape'],
        closeLabel: "Close",
        stickyFooter: false,
        footer: false,
        onOpen: function() {
          $('.close').click(function(){ modal.close(); });
        },
      });
      modal.setContent($('#modal-'+index).html());
      modal.open();
    });
  });

}); // Ready

// Menu item event
$(document).on('click', '.nav-link', function(){
  $('body').scrollTo($(this).attr('href'), 800);
});

// Section arrow event
$(document).on('click', '#left-arrow-down', function(){
  var next = $('#menu').find('.active').parent('li').next().find('.nav-link').attr('href');
  $(this).attr('href', next);
  $('body').scrollTo(next, 800);
});


})(jQuery);
