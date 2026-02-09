<?php
/**
 * ACF options, field groups, and helpers.
 */

if (!function_exists('touchline_register_acf')) {
  /**
   * Register ACF options page.
   */
  function touchline_register_acf()
  {
    if (!function_exists('acf_add_options_page')) {
      return;
    }

    acf_add_options_page(array(
      'page_title' => __('Site Settings', 'touchline-theme'),
      'menu_title' => __('Site Settings', 'touchline-theme'),
      'menu_slug' => 'touchline-site-settings',
      'capability' => 'manage_options',
      'redirect' => false,
    ));
  }
  add_action('acf/init', 'touchline_register_acf');
}

if (!function_exists('touchline_acf_json_save_path')) {
  /**
   * Save ACF JSON in the theme.
   *
   * @param string $path Default path.
   * @return string
   */
  function touchline_acf_json_save_path($path)
  {
    return get_theme_file_path('acf-json');
  }
  add_filter('acf/settings/save_json', 'touchline_acf_json_save_path');
}

if (!function_exists('touchline_acf_json_load_paths')) {
  /**
   * Load ACF JSON from the theme.
   *
   * @param array $paths Paths.
   * @return array
   */
  function touchline_acf_json_load_paths($paths)
  {
    $paths[] = get_theme_file_path('acf-json');
    return $paths;
  }
  add_filter('acf/settings/load_json', 'touchline_acf_json_load_paths');
}

if (!function_exists('touchline_get_site_setting')) {
  /**
   * Get a site setting from ACF options, with graceful fallback.
   *
   * @param string $key Setting key.
   * @param mixed  $default Default value.
   * @return mixed
   */
  function touchline_get_site_setting($key, $default = null)
  {
    $value = null;

    if (function_exists('get_field')) {
      $value = get_field($key, 'option');
    }

    if (null === $value) {
      $value = get_option('touchline_site_setting_' . $key, null);
    }

    if (null === $value) {
      $value = get_option($key, $default);
    }

    if (null === $value || '' === $value) {
      return $default;
    }

    return $value;
  }
}
