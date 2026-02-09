<?php
/**
 * Shortcodes.
 */

if (!function_exists('touchline_testimonials_shortcode')) {
  /**
   * Render testimonials shortcode.
   *
   * @param array $atts Shortcode attributes.
   * @return string
   */
  function touchline_testimonials_shortcode($atts)
  {
    $atts = shortcode_atts(
      array(
        'count' => 6,
      ),
      $atts,
      'touchline_testimonials'
    );

    $count = (int) $atts['count'];
    if ($count < 1) {
      $count = 1;
    }
    if ($count > 50) {
      $count = 50;
    }

    $query = new WP_Query(array(
      'post_type' => 'testimonial',
      'posts_per_page' => $count,
      'post_status' => 'publish',
      'orderby' => 'date',
      'order' => 'DESC',
    ));

    if (!$query->have_posts()) {
      return '';
    }

    ob_start();
    ?>
    <section class="tl-testimonials">
      <?php
      while ($query->have_posts()) :
        $query->the_post();
        $data = touchline_get_testimonial_data(get_the_ID());
        $quote = isset($data['quote']) ? $data['quote'] : '';
        $name = isset($data['name']) ? $data['name'] : '';
        $role = isset($data['role']) ? $data['role'] : '';
        $company = isset($data['company']) ? $data['company'] : '';
        $headshot_url = isset($data['headshot_url']) ? $data['headshot_url'] : '';
        ?>
        <article class="tl-testimonial">
          <?php if ($quote) : ?>
            <blockquote class="tl-testimonial__quote">
              <p><?php echo esc_html($quote); ?></p>
            </blockquote>
          <?php endif; ?>

          <footer class="tl-testimonial__meta">
            <?php if ($headshot_url) : ?>
              <img class="tl-testimonial__headshot" src="<?php echo esc_url($headshot_url); ?>" alt="<?php echo esc_attr($name); ?>">
            <?php endif; ?>
            <?php if ($name) : ?>
              <p class="tl-testimonial__name"><?php echo esc_html($name); ?></p>
            <?php endif; ?>
            <?php if ($role || $company) : ?>
              <p class="tl-testimonial__role">
                <?php
                $parts = array();
                if ($role) {
                  $parts[] = $role;
                }
                if ($company) {
                  $parts[] = $company;
                }
                echo esc_html(implode(', ', $parts));
                ?>
              </p>
            <?php endif; ?>
          </footer>
        </article>
        <?php
      endwhile;
      ?>
    </section>
    <?php
    wp_reset_postdata();

    return trim(ob_get_clean());
  }
  add_shortcode('touchline_testimonials', 'touchline_testimonials_shortcode');
}
