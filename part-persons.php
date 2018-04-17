<?php if (have_rows('team-persons')): ?>
  <div class="links persons">
    <?php while(have_rows('team-persons')): the_row(); ?>

      <?php $post_object = get_sub_field('person'); ?>
      <?php if( $post_object ): ?>
        <?php $post = $post_object; ?>
        <?php setup_postdata( $post ); ?>
        <?php $index = get_row_index(); ?>

        <a class="links-item person-item" href="#">
          <?php the_title(); ?>, <?php the_field('person-position'); ?>
        </a>
        <?php //edit_post_link(' *'); ?>

        <?php wp_reset_postdata(); ?>
      <?php endif; ?>

    <?php endwhile; ?>
    </div>
<?php endif; ?>
