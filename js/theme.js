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









  // Waypoint
  // http://imakewebthings.com/waypoints/
  var inview = new Waypoint.Inview({
    element: jQuery('.pageSlider-inner'),
    enter: function(direction) {
     	jQuery('.siteFooter-divider').removeClass('is__visible');
    	console.log('top enter');
    },
    entered: function(direction) {
     	jQuery('.siteFooter-divider').removeClass('is__visible');
    	console.log('top entered');
    },
    exite: function(direction) {
     jQuery('.siteFooter-divider').addClass('is__visible');
    	console.log('top exite');
    },
    exited: function(direction) {
     jQuery('.siteFooter-divider').addClass('is__visible');
    	console.log('top exited');
    }
  })

  //Welcome
  var inview = new Waypoint.Inview({
    element: jQuery('#welcome'),
    enter: function(direction) {
     	jQuery('.nav-link').removeClass('active');
      jQuery('#welcome-link').addClass('active');
    	jQuery("#left-arrow-down").prop("href", "#about");
      jQuery('.siteFooter-divider').addClass('is__visible');
    	console.log('enter Welcome');
    }
  })

  //About
  var inview = new Waypoint.Inview({
    element: jQuery('#about'),
    offset: 120,
    enter: function(direction) {
     	jQuery('.nav-link').removeClass('active');
      jQuery('#about-link').addClass('active');
    	jQuery("#left-arrow-down").prop("href", "#names");
    },
    exited: function(direction) {
     jQuery('#about-link').removeClass('active');
    }
  })

  //Names
  var inview = new Waypoint.Inview({
    element: jQuery('#names'),
    offset: 120,
    enter: function(direction) {
     	jQuery('.nav-link').removeClass('active');
      jQuery('#names-link').addClass('active');
    	jQuery("#left-arrow-down").prop("href", "#press");
    },
    exited: function(direction) {
     jQuery('#names-link').removeClass('active');
    }
  })


  //Press
  var inview = new Waypoint.Inview({
    element: jQuery('#press'),
    offset: 120,
    enter: function(direction) {
     	jQuery('.nav-link').removeClass('active');
      jQuery('#press-link').addClass('active');
    	jQuery("#left-arrow-down").prop("href", "#team");
    },
    exited: function(direction) {
     jQuery('#press-link').removeClass('active');
    }
  })


  //Team
  var inview = new Waypoint.Inview({
    element: jQuery('#team'),
    offset: 120,
    enter: function(direction) {
     	jQuery('.nav-link').removeClass('active');
      jQuery('#team-link').addClass('active');
    	jQuery("#left-arrow-down").prop("href", "#contact");
    },
    exited: function(direction) {
     jQuery('#team-link').removeClass('active');
    }
  })


  //Contact
  var inview = new Waypoint.Inview({
    element: jQuery('#contact'),
    offset: 120,
    enter: function(direction) {
     	jQuery('.nav-link').removeClass('active');
      jQuery('#contact-link').addClass('active');
    },
    exited: function(direction) {
     jQuery('#contact-link').removeClass('active');
    }
  })








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

  // Sliders
  sliderBanner();
  sliderNews();



  theModal();

});

$( "#move-right" ).click(function() {
  sliderMore();
});

$(document).on('click', '.collapseomatic', function(){
  setTimeout(function() {
    $.fn.fullpage.reBuild();
  }, 1600);
});

})(jQuery);
