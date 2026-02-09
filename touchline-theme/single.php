<?php
/**
 * Template for displaying single posts.
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
  the_post_navigation(array(
    'prev_text' => __('Previous', 'touchline-theme'),
    'next_text' => __('Next', 'touchline-theme'),
  ));
else :
  ?>
  <p><?php esc_html_e('No content found.', 'touchline-theme'); ?></p>
  <?php
endif;
get_footer();
