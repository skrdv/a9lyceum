<?php
/**
 * Template Name: Fullpage Template
 */
?>
<?php get_header(); ?>





<div id="page">
    <div id="slider" class="pageSlider-section">
      <div class="pageSlider">
        <?php while (have_rows('topslider')): the_row(); ?>
               <div class="pageSlider-item" style="background-image: url(<?php the_sub_field('photo'); ?>);">
                 	<div class="pageSlider-inner">
                    	<div class="pageSlider-content">
                        <div class="container">
                    			<h2 class="pageSlider-title"><?php the_sub_field('title'); ?></h2>
                        	<div class="pageSlider-text"><?php the_sub_field('text'); ?></div>
                      </div>
                    	</div>
                 </div>
        			</div>
				<?php endwhile; ?>
      </div>
    </div>
  
  
  
  
  
  
  
  
  
  
  
  
  <div id="welcome" class="page-section">
    <div class="container-fluid">
      <article class="content">
        <h3 class="title" style="margin: 0 0 25px 0;"><?php the_field('welcome-title'); ?></h3>
        <div class="body">
					<?php the_field('welcome-text'); ?>
        </div>
        <h3 class="title" style="font-size: 18px; margin: 60px 0 25px 0;">
          <a href="https://area9learning.com/" target="_blank"><?php the_field('welcome-title2'); ?></a>
         </h3>
        <div class="body" style="font-style: italic;">
          <?php the_field('welcome-text2'); ?>
        </div>
      </article>
    </div>
  </div>

  <div  id="about"  class="page-section">
    <div class="container-fluid">
      <article class="content">
        <h3 class="title"><?php the_field('menu-about'); ?></h3>
        <div class="body">
          <?php the_field('about-text'); ?>
        </div>
        <div class="links">
          <a class="links-item" href="http://area9learning.com"><?php the_field('about-link-name'); ?></a>
        </div>
      </article>
    </div>
  </div>

   <div  id="names"  class="page-section">
    <div class="container-fluid">
      <article class="content">
        <h3 class="title"><?php the_field('names-title'); ?></h3>
        <div class="body">
          <?php the_field('names-text'); ?>
        </div>
      </article>
    </div>
  </div>

  <div  id="press"  class="page-section section">
    <div class="container-fluid">
      <article class="section-content sectionPress-content">
        <h3 class="title sectionPress-title"><?php the_field('press-title'); ?></h3>
				<a class="sectionPress-more" id="move-right">See more</a>
        <a class="sectionPress-link" href="<?php the_field('press-link1'); ?>"><?php the_field('press-link-name'); ?></a>
       	<?php get_template_part('part','articles'); ?>
      </article>
    </div>
  </div>

  <div  id="team"  class="page-section">
    <div class="container-fluid">
      <article class="content">
        <h3 class="title"><?php the_field('menu-team'); ?></h3>
        <div class="body"><?php the_field('team-text'); ?></div>
        <?php get_template_part('part','persons'); ?>
      </article>
    </div>
  </div>

  <div  id="contact"  class="page-section">
    <div class="container-fluid">
      <article class="content">
        <h3 class="title"><?php the_field('menu-contact'); ?></h3>
        <div class="body">
          <?php the_field('contact-text'); ?>
        </div>
      </article>
    </div>
  </div>
</div>

<?php get_footer(); ?>
