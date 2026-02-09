<?php
/**
 * Template for displaying pages.
 */
get_header();
if (have_posts()) :
  while (have_posts()) :
    the_post();
    ?>
    <article <?php post_class(); ?>>
      <?php the_content(); ?>
    </article>
    <?php
  endwhile;
endif;
get_footer();
