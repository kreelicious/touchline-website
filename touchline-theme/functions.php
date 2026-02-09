<?php
/**
 * Theme functions and definitions.
 */

if (!defined('TOUCHLINE_THEME_VERSION')) {
  $theme = wp_get_theme();
  define('TOUCHLINE_THEME_VERSION', $theme->get('Version'));
}

require_once get_theme_file_path('inc/setup.php');
require_once get_theme_file_path('inc/cpt-testimonial.php');
require_once get_theme_file_path('inc/acf.php');
require_once get_theme_file_path('inc/shortcodes.php');
