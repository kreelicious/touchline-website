<?php
/**
 * Template for displaying archive pages.
 */
get_header();
if (have_posts()) :
  ?>
  <header class="archive-header">
    <?php the_archive_title('<h1 class="archive-title">', '</h1>'); ?>
    <?php the_archive_description('<div class="archive-description">', '</div>'); ?>
  </header>
  <?php
  while (have_posts()) :
    the_post();
    ?>
    <article <?php post_class(); ?>>
      <?php the_content(); ?>
    </article>
    <?php
  endwhile;
  the_posts_navigation();
else :
  ?>
  <p><?php esc_html_e('No content found.', 'touchline-theme'); ?></p>
  <?php
endif;
get_footer();
