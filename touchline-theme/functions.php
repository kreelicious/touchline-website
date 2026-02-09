<?php
/**
 * Theme functions and definitions.
 *
 * Use this file to set up theme defaults and register support for WordPress features.
 */

/**
 * Enqueue the main stylesheet.
 */
function touchline_theme_enqueue_assets() {
  // get_stylesheet_uri() points to style.css in the theme root.
  wp_enqueue_style('touchline-theme-style', get_stylesheet_uri(), array(), '1.0.0');
}
add_action('wp_enqueue_scripts', 'touchline_theme_enqueue_assets');

/**
 * Add basic theme support.
 */
function touchline_theme_setup() {
  // Let WordPress manage the document title tag.
  add_theme_support('title-tag');

  // Enable featured images on posts and pages.
  add_theme_support('post-thumbnails');

  // Switch default core markup to output valid HTML5.
  add_theme_support('html5', array(
    'search-form',
    'comment-form',
    'comment-list',
    'gallery',
    'caption',
    'style',
    'script',
  ));
}
add_action('after_setup_theme', 'touchline_theme_setup');
