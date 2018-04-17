<?php
/**
 * The template for displaying all single posts.
 *
 * @package understrap
 */

get_header();
$container   = get_theme_mod( 'understrap_container_type' );
?>

<main class="wrapper" id="single-wrapper">
	<div class="<?php echo esc_attr( $container ); ?>" id="content" tabindex="-1">

				<?php while ( have_posts() ) : the_post(); ?>
          <article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

            <?php if ( 'person' == get_post_type() ) : ?>
              <h3 class="personModal-title"><?php the_title(); ?></h3>
              <h4 class="personModal-subtitle"><?php the_field('person-position'); ?></h4>
              <img class="personModal-photo" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
              <div class="personModal-text"><?php the_field('person-bio'); ?></div>
        		<?php endif; ?>

          </article>
				<?php endwhile; ?>

  </div>
</main>

<?php get_footer(); ?>
