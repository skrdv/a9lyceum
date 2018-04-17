(function ($) {

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
	 /*
  $('#page').fullpage({
  		menu: '#menu',
  		anchors:['welcome', 'about', 'names', 'press', 'team', 'contact'],
    	fitToSection: false,
    	dragAndMove: false,
    	scrollBar:false,
    	scrollHorizontally: true,
    	scrollOverflow: true,
    	scrollOverflowReset: true,
    	controlArrows: false,
    	verticalCentered: false,
    	responsiveSlides: true,
    	responsiveWidth:800,
    	responsiveHeight: 800,
      paddingTop: '100px',
  		paddingBottom: '280px',
    	fixedElements: '#header',
    	afterResize: function(){
		  	$('#section-welcome').css('height','auto');
			},
    });
		*/
  
    theModal();

  seeMore();

});

  /*
$(document).on('click', '.arrow-down', function(){
  $.fn.fullpage.moveSectionDown();
});

$(document).on('click', '.arrow-up', function(){
  $.fn.fullpage.moveTo(1);
});

$(document).on('click', '#move-right', function(e){
  $.fn.fullpage.moveSlideRight();
  e.preventDefault();
});
*/
  
// $('.modal').on('show.bs.modal', function (e) {
//   $.fn.fullpage.setAllowScrolling(false);
// });
//
// $('.modal').on('hide.bs.modal', function (e) {
//   $.fn.fullpage.setAllowScrolling(true);
// })


$(document).on('click', '.collapseomatic', function(){
  setTimeout(function() {
    $.fn.fullpage.reBuild();
  }, 1600);
});


})(jQuery);
