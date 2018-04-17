<?php // echo qtrans_getLanguage(); ?>

<?php if ( qtrans_getLanguage() == 'en' ) { $repeater = 'press-articles-us';  ?>
<?php } elseif ( qtrans_getLanguage() == 'dk' ) { $repeater = 'press-articles'; } ?>

<div class="newsSlide">

  <?php if (have_rows($repeater)): ?>
    <?php $count = 0; ?>
      <?php while (have_rows($repeater)): the_row(); ?>

      <?php if ($count === 0 OR $count%4 == 0) { ?>
        <div class="slide">
          <div class="slide-content">
      <?php } ?>

      <?php $post_object = get_sub_field('article'); ?>
        <?php if( $post_object ): ?>
          <?php $post = $post_object; ?>
          <?php setup_postdata( $post ); ?>

          <div class="box">
            <div class="box-content">
              <div class="box-image" style="background-image: url(<?php echo get_the_post_thumbnail_url($post->ID, 'large'); ?>);">
                <?php if(get_field('audio')): ?>
                  <img class="box-audio-icon" src="<?php echo(get_theme_file_uri().'/img/icon-audio.png'); ?>">
                <?php endif; ?>
              </div>
              <div class="box-body">
                <h3 class="box-title"><?php the_title(); ?> <?php edit_post_link('*'); ?></h3>
                <div class="box-text">
                  <?php the_content(); ?>
                </div>
                <div class="box-audio">
                  <?php $audio_file = get_field('audio'); //echo $audio_file; ?>
                  <?php echo do_shortcode('[audio src='.$audio_file.']'); ?>
                </div>
                <a class="box-link" href="<?php the_field('url'); ?>">
                  <img class="box-link-image" src="<?php the_field('logo'); ?>" />
                  <span class="box-link-text" ><?php the_field('text'); ?></span>
                </a>
              </div>
            </div>
          </div>

        <?php wp_reset_postdata(); ?>
        <?php endif; ?>

        <?php $count++; ?>

        <?php if ($count%4 == 0) { ?>
          </div>
        </div>
      <?php } ?>

    <?php endwhile; ?>
  
  
</div>  
  
  <?php endif; ?>


