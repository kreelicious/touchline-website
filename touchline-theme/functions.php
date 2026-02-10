<?php
/**
 * Touchline Theme functions.
 */

declare(strict_types=1);

add_action('after_setup_theme', function (): void {
    add_theme_support('wp-block-styles');
    add_theme_support('editor-styles');
    add_theme_support('responsive-embeds');
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
});

add_action('wp_enqueue_scripts', function (): void {
    wp_enqueue_style('touchline-fonts', 'https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Poppins:wght@400;500;600;700&display=swap', [], null);

    $style_dependencies = [];
    $tailwind_css_path = get_theme_file_path('assets/css/tailwind.css');

    if (file_exists($tailwind_css_path)) {
        $tailwind_css_version = (string) filemtime($tailwind_css_path);
        wp_enqueue_style('touchline-tailwind', get_theme_file_uri('assets/css/tailwind.css'), [], $tailwind_css_version);
        $style_dependencies[] = 'touchline-tailwind';
    }

    wp_enqueue_style('touchline-style', get_stylesheet_uri(), $style_dependencies, wp_get_theme()->get('Version'));
});


add_action('enqueue_block_editor_assets', function (): void {
    wp_enqueue_style('touchline-editor-fonts', 'https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Poppins:wght@400;500;600;700&display=swap', [], null);

    $tailwind_css_path = get_theme_file_path('assets/css/tailwind.css');

    if (file_exists($tailwind_css_path)) {
        $tailwind_css_version = (string) filemtime($tailwind_css_path);
        wp_enqueue_style('touchline-tailwind-editor', get_theme_file_uri('assets/css/tailwind.css'), [], $tailwind_css_version);
    }
});

add_action('init', function (): void {
    register_block_pattern_category('touchline-hero', ['label' => __('Touchline Hero', 'touchline')]);
    register_block_pattern_category('touchline-layout', ['label' => __('Touchline Layout', 'touchline')]);
    register_block_pattern_category('touchline-content', ['label' => __('Touchline Content', 'touchline')]);
    register_block_pattern_category('touchline-conversion', ['label' => __('Touchline Conversion', 'touchline')]);
    register_block_pattern_category('touchline-proof', ['label' => __('Touchline Proof', 'touchline')]);
    register_block_pattern_category('touchline-utility', ['label' => __('Touchline Utility', 'touchline')]);
});

add_action('init', function (): void {
    register_post_type('case_study', [
        'labels' => [
            'name' => __('Case Studies', 'touchline'),
            'singular_name' => __('Case Study', 'touchline'),
        ],
        'public' => true,
        'menu_icon' => 'dashicons-portfolio',
        'supports' => ['title', 'editor', 'excerpt', 'thumbnail'],
        'has_archive' => true,
        'show_in_rest' => true,
    ]);

    register_post_type('resource', [
        'labels' => [
            'name' => __('Resources', 'touchline'),
            'singular_name' => __('Resource', 'touchline'),
        ],
        'public' => true,
        'menu_icon' => 'dashicons-media-document',
        'supports' => ['title', 'editor', 'excerpt', 'thumbnail'],
        'has_archive' => true,
        'show_in_rest' => true,
    ]);

    register_taxonomy('resource_type', ['resource'], [
        'label' => __('Resource Types', 'touchline'),
        'public' => true,
        'show_in_rest' => true,
        'hierarchical' => true,
    ]);
});

add_action('init', function (): void {
    register_block_type(__DIR__ . '/blocks/testimonial-slider');
    register_block_type(__DIR__ . '/blocks/form');
});
