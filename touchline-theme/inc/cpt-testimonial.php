<?php
/**
 * Testimonial custom post type.
 */

if (!function_exists('touchline_register_testimonial_cpt')) {
  /**
   * Register the testimonial post type.
   */
  function touchline_register_testimonial_cpt()
  {
    $labels = array(
      'name' => _x('Testimonials', 'post type general name', 'touchline-theme'),
      'singular_name' => _x('Testimonial', 'post type singular name', 'touchline-theme'),
      'menu_name' => _x('Testimonials', 'admin menu', 'touchline-theme'),
      'name_admin_bar' => _x('Testimonial', 'add new on admin bar', 'touchline-theme'),
      'add_new' => _x('Add New', 'testimonial', 'touchline-theme'),
      'add_new_item' => __('Add New Testimonial', 'touchline-theme'),
      'new_item' => __('New Testimonial', 'touchline-theme'),
      'edit_item' => __('Edit Testimonial', 'touchline-theme'),
      'view_item' => __('View Testimonial', 'touchline-theme'),
      'all_items' => __('All Testimonials', 'touchline-theme'),
      'search_items' => __('Search Testimonials', 'touchline-theme'),
      'not_found' => __('No testimonials found.', 'touchline-theme'),
      'not_found_in_trash' => __('No testimonials found in Trash.', 'touchline-theme'),
    );

    $args = array(
      'labels' => $labels,
      'public' => true,
      'has_archive' => true,
      'rewrite' => array('slug' => 'testimonials'),
      'menu_icon' => 'dashicons-format-quote',
      'supports' => array('title'),
      'show_in_rest' => true,
    );

    register_post_type('testimonial', $args);
  }
  add_action('init', 'touchline_register_testimonial_cpt');
}

if (!function_exists('touchline_testimonial_columns')) {
  /**
   * Add custom admin columns.
   *
   * @param array $columns Columns.
   * @return array
   */
  function touchline_testimonial_columns($columns)
  {
    $new_columns = array();

    foreach ($columns as $key => $label) {
      $new_columns[$key] = $label;
      if ('title' === $key) {
        $new_columns['touchline_name'] = __('Name', 'touchline-theme');
        $new_columns['touchline_company'] = __('Company', 'touchline-theme');
      }
    }

    return $new_columns;
  }
  add_filter('manage_testimonial_posts_columns', 'touchline_testimonial_columns');
}

if (!function_exists('touchline_testimonial_column_content')) {
  /**
   * Render custom admin column content.
   *
   * @param string $column Column name.
   * @param int    $post_id Post ID.
   */
  function touchline_testimonial_column_content($column, $post_id)
  {
    if ('touchline_name' === $column) {
      $name = '';
      if (function_exists('get_field')) {
        $name = get_field('name', $post_id);
      }
      if (!$name) {
        $name = get_the_title($post_id);
      }
      echo esc_html($name);
    }

    if ('touchline_company' === $column) {
      $company = '';
      if (function_exists('get_field')) {
        $company = get_field('company', $post_id);
      }
      echo esc_html($company);
    }
  }
  add_action('manage_testimonial_posts_custom_column', 'touchline_testimonial_column_content', 10, 2);
}
