<?php
/**
 * Theme Footer
 *
 * @package understrap
 */
?>

<div class="siteFooter">
  <div class="siteFooter-divider"></div>
	<div class="footerNav-left">
    <a id="left-arrow-down" href="#welcome"></a>
  	<p>Learn<br>More About<br>Lyceum Rhapsode</p>
  </div>
  <a href="http://area9learning.com">
	<div class="footerNav-right">
  	<p>Visit<br>Learning<br>Website</p>
  </div>
  </a>
</div>  
  

<?php if (have_rows('team-persons')): ?>
  <?php while(have_rows('team-persons')): the_row(); ?>

    <?php $post_object = get_sub_field('person'); ?>
    <?php if( $post_object ): ?>
      <?php $post = $post_object; ?>
      <?php setup_postdata( $post ); ?>
      <?php $index = get_row_index(); ?>

      <div class="modal" id="modal-<?php echo $index; ?>">
        <button type="button" class="close personalModal-close">
          <img class="" src="<?php echo get_stylesheet_directory_uri(); ?>/svg/close.png">
        </button>
        <h3 class="personModal-title"><?php the_title(); ?></h3>
        <h4 class="personModal-subtitle"><?php the_field('person-position'); ?></h4>
        <img class="personModal-photo" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
        <div class="personModal-text"><?php the_field('person-bio'); ?></div>
      </div>

      <?php wp_reset_postdata(); ?>
    <?php endif; ?>

  <?php endwhile; ?>
<?php endif; ?>

<?php wp_footer(); ?>



  <script type="text/javascript">
    //Adding Slick.js to the top Banner
    //http://kenwheeler.github.io/slick/
    
    jQuery(document).ready(function(){
      jQuery('.pageSlider').slick({
    	adaptiveHeight: false,
    	autoplay: true,
      arrows: false,
    	autoplaySpeed: 6000,	
    	speed: 850,
    	fade: true,
    	cssEase: 'linear'
      });
    
    //Adding Slick.js to the news section
    	jQuery('.newsSlide').slick({
    	adaptiveHeight: false,
    	autoplay: false,
      arrows: false
      });
    
    });
    
jQuery( "#move-right" ).click(function() {
  jQuery('.newsSlide').slick('slickNext');
});    
    
  </script>

<script>
//http://imakewebthings.com/waypoints/  
  
//Slider
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
   
</script>  

<script>
    jQuery('.mobile-toggle').click(function() {
        jQuery('.siteHeader-menu').toggleClass('is__open');
				console.log('open');
    });
</script>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-48038246-5"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-48038246-5');
</script>

<!-- Start of HubSpot Embed Code -->
<script type="text/javascript" id="hs-script-loader" async defer src="//js.hs-scripts.com/2353984.js"></script>
<!-- End of HubSpot Embed Code -->

</body>
</html>
