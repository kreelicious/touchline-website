<?php
/**
 * Main fallback template.
 *
 * WordPress will use this file if a more specific template is not found.
 * It loops through posts and outputs simple markup.
 */
get_header();
?>

<main class="site-content">
  <?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
      <article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
        <header class="entry-header">
          <h1 class="entry-title">
            <a href="<?php the_permalink(); ?>">
              <?php the_title(); ?>
            </a>
          </h1>
        </header>

        <div class="entry-content">
          <?php the_excerpt(); ?>
        </div>
      </article>
    <?php endwhile; ?>

    <nav class="pagination">
      <?php
      // Outputs next/previous links for post archives.
      the_posts_navigation();
      ?>
    </nav>
  <?php else : ?>
    <p><?php esc_html_e('No posts found.', 'touchline-theme'); ?></p>
  <?php endif; ?>
</main>

<?php
get_footer();
