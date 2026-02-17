<?php
declare(strict_types=1);

add_action('wp_enqueue_scripts', function () {
  wp_enqueue_script('touchline-tracking', get_theme_file_uri('/assets/js/tracking.js'), [], '0.1.0', true);
});
