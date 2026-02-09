<?php
/**
 * Theme setup and assets.
 */

if (!function_exists('touchline_theme_asset_version')) {
  /**
   * Helper to version assets based on file modification time.
   *
   * @param string $relative_path Path relative to the theme root.
   * @return int|string Cache-busting version for the file.
   */
  function touchline_theme_asset_version($relative_path)
  {
    $path = get_theme_file_path($relative_path);

    if (file_exists($path)) {
      return filemtime($path);
    }

    return defined('TOUCHLINE_THEME_VERSION') ? TOUCHLINE_THEME_VERSION : '1.0.0';
  }
}

if (!function_exists('touchline_theme_enqueue_assets')) {
  /**
   * Enqueue frontend assets.
   */
  function touchline_theme_enqueue_assets()
  {
    $font_handle = 'touchline-theme-fonts';

    wp_enqueue_style(
      $font_handle,
      'https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap',
      array(),
      null
    );

    wp_enqueue_style(
      'touchline-theme-style',
      get_theme_file_uri('style.css'),
      array($font_handle),
      touchline_theme_asset_version('style.css')
    );
  }
  add_action('wp_enqueue_scripts', 'touchline_theme_enqueue_assets');
}

if (!function_exists('touchline_theme_enqueue_editor_assets')) {
  /**
   * Load editor styles and fonts for visual parity.
   */
  function touchline_theme_enqueue_editor_assets()
  {
    wp_enqueue_style(
      'touchline-theme-editor-fonts',
      'https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap',
      array(),
      null
    );
  }
  add_action('enqueue_block_editor_assets', 'touchline_theme_enqueue_editor_assets');
}

if (!function_exists('touchline_theme_setup')) {
  /**
   * Theme setup.
   */
  function touchline_theme_setup()
  {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('html5', array(
      'search-form',
      'comment-form',
      'comment-list',
      'gallery',
      'caption',
      'style',
      'script',
    ));
    add_theme_support('custom-logo', array(
      'height' => 80,
      'width' => 80,
      'flex-width' => true,
      'flex-height' => true,
    ));
    add_theme_support('align-wide');
    add_theme_support('wp-block-styles');
    add_theme_support('responsive-embeds');
    add_theme_support('editor-styles');

    register_nav_menus(array(
      'primary' => __('Primary Menu', 'touchline-theme'),
    ));

    add_editor_style(array('assets/css/editor.css'));
  }
  add_action('after_setup_theme', 'touchline_theme_setup');
}

if (!function_exists('touchline_theme_register_patterns')) {
  /**
   * Register block patterns for the theme.
   */
  function touchline_theme_register_patterns()
  {
    if (!function_exists('register_block_pattern')) {
      return;
    }

    if (function_exists('register_block_pattern_category')) {
      register_block_pattern_category('touchline', array(
        'label' => __('Touchline', 'touchline-theme'),
      ));
    }

    register_block_pattern(
      'touchline/hero-text-button',
      array(
        'title' => __('Hero: Text + Button', 'touchline-theme'),
        'categories' => array('touchline'),
        'description' => __('Intro section with headline, supporting text, and a primary button.', 'touchline-theme'),
        'content' => <<<'HTML'
<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|xl","right":"var:preset|spacing|lg","bottom":"var:preset|spacing|xl","left":"var:preset|spacing|lg"},"blockGap":"var:preset|spacing|md"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--xl);padding-right:var(--wp--preset--spacing--lg);padding-bottom:var(--wp--preset--spacing--xl);padding-left:var(--wp--preset--spacing--lg)">
  <!-- wp:heading {"level":1} -->
  <h1>Build a smarter matchday experience</h1>
  <!-- /wp:heading -->

  <!-- wp:paragraph -->
  <p>Touchline gives your club a clean, fast site with tools for schedules, stories, and supporters. Everything you need to publish with confidence.</p>
  <!-- /wp:paragraph -->

  <!-- wp:buttons -->
  <div class="wp-block-buttons">
    <!-- wp:button {"backgroundColor":"green","textColor":"background"} -->
    <div class="wp-block-button"><a class="wp-block-button__link has-background-color has-green-background-color has-text-color" href="#">Get started</a></div>
    <!-- /wp:button -->
  </div>
  <!-- /wp:buttons -->
</div>
<!-- /wp:group -->
HTML
      )
    );

    register_block_pattern(
      'touchline/feature-grid-3',
      array(
        'title' => __('Feature Grid: 3 Columns', 'touchline-theme'),
        'categories' => array('touchline'),
        'description' => __('Three-column feature highlights with headings and descriptions.', 'touchline-theme'),
        'content' => <<<'HTML'
<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|lg","right":"var:preset|spacing|lg","bottom":"var:preset|spacing|lg","left":"var:preset|spacing|lg"},"blockGap":"var:preset|spacing|md"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--lg);padding-right:var(--wp--preset--spacing--lg);padding-bottom:var(--wp--preset--spacing--lg);padding-left:var(--wp--preset--spacing--lg)">
  <!-- wp:heading {"level":2} -->
  <h2>Everything in one place</h2>
  <!-- /wp:heading -->

  <!-- wp:columns {"style":{"spacing":{"blockGap":"var:preset|spacing|lg"}}} -->
  <div class="wp-block-columns">
    <!-- wp:column -->
    <div class="wp-block-column">
      <!-- wp:heading {"level":3} -->
      <h3>Fixtures</h3>
      <!-- /wp:heading -->
      <!-- wp:paragraph -->
      <p>Publish match schedules and keep supporters in the loop.</p>
      <!-- /wp:paragraph -->
    </div>
    <!-- /wp:column -->

    <!-- wp:column -->
    <div class="wp-block-column">
      <!-- wp:heading {"level":3} -->
      <h3>News</h3>
      <!-- /wp:heading -->
      <!-- wp:paragraph -->
      <p>Share club stories, player highlights, and announcements.</p>
      <!-- /wp:paragraph -->
    </div>
    <!-- /wp:column -->

    <!-- wp:column -->
    <div class="wp-block-column">
      <!-- wp:heading {"level":3} -->
      <h3>Community</h3>
      <!-- /wp:heading -->
      <!-- wp:paragraph -->
      <p>Grow your supporter base with clear calls to action.</p>
      <!-- /wp:paragraph -->
    </div>
    <!-- /wp:column -->
  </div>
  <!-- /wp:columns -->
</div>
<!-- /wp:group -->
HTML
      )
    );

    register_block_pattern(
      'touchline/cta-band',
      array(
        'title' => __('CTA Band', 'touchline-theme'),
        'categories' => array('touchline'),
        'description' => __('Full-width call-to-action band with button.', 'touchline-theme'),
        'content' => <<<'HTML'
<!-- wp:group {"align":"wide","backgroundColor":"navy","textColor":"background","style":{"spacing":{"padding":{"top":"var:preset|spacing|lg","right":"var:preset|spacing|lg","bottom":"var:preset|spacing|lg","left":"var:preset|spacing|lg"},"blockGap":"var:preset|spacing|sm"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide has-background-color has-navy-background-color has-text-color" style="padding-top:var(--wp--preset--spacing--lg);padding-right:var(--wp--preset--spacing--lg);padding-bottom:var(--wp--preset--spacing--lg);padding-left:var(--wp--preset--spacing--lg)">
  <!-- wp:heading {"level":2} -->
  <h2>Ready to launch your new site?</h2>
  <!-- /wp:heading -->

  <!-- wp:paragraph -->
  <p>Move your club updates into a clean, modern experience.</p>
  <!-- /wp:paragraph -->

  <!-- wp:buttons -->
  <div class="wp-block-buttons">
    <!-- wp:button {"backgroundColor":"green","textColor":"background"} -->
    <div class="wp-block-button"><a class="wp-block-button__link has-background-color has-green-background-color has-text-color" href="#">Book a demo</a></div>
    <!-- /wp:button -->
  </div>
  <!-- /wp:buttons -->
</div>
<!-- /wp:group -->
HTML
      )
    );

    register_block_pattern(
      'touchline/two-column-image-content',
      array(
        'title' => __('Two Column: Image + Content', 'touchline-theme'),
        'categories' => array('touchline'),
        'description' => __('Two-column layout with an image placeholder and copy.', 'touchline-theme'),
        'content' => <<<'HTML'
<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|lg","right":"var:preset|spacing|lg","bottom":"var:preset|spacing|lg","left":"var:preset|spacing|lg"},"blockGap":"var:preset|spacing|lg"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--lg);padding-right:var(--wp--preset--spacing--lg);padding-bottom:var(--wp--preset--spacing--lg);padding-left:var(--wp--preset--spacing--lg)">
  <!-- wp:columns {"style":{"spacing":{"blockGap":"var:preset|spacing|lg"}}} -->
  <div class="wp-block-columns">
    <!-- wp:column -->
    <div class="wp-block-column">
      <!-- wp:image {"sizeSlug":"large","linkDestination":"none"} -->
      <figure class="wp-block-image size-large"></figure>
      <!-- /wp:image -->
    </div>
    <!-- /wp:column -->

    <!-- wp:column -->
    <div class="wp-block-column">
      <!-- wp:heading {"level":2} -->
      <h2>A home for your club updates</h2>
      <!-- /wp:heading -->
      <!-- wp:paragraph -->
      <p>Keep match reports, rosters, and supporter news in one reliable place.</p>
      <!-- /wp:paragraph -->
      <!-- wp:buttons -->
      <div class="wp-block-buttons">
        <!-- wp:button {"backgroundColor":"green","textColor":"background"} -->
        <div class="wp-block-button"><a class="wp-block-button__link has-background-color has-green-background-color has-text-color" href="#">Learn more</a></div>
        <!-- /wp:button -->
      </div>
      <!-- /wp:buttons -->
    </div>
    <!-- /wp:column -->
  </div>
  <!-- /wp:columns -->
</div>
<!-- /wp:group -->
HTML
      )
    );

    register_block_pattern(
      'touchline/testimonials-strip',
      array(
        'title' => __('Testimonials Strip', 'touchline-theme'),
        'categories' => array('touchline'),
        'description' => __('Three short testimonials in a soft background band.', 'touchline-theme'),
        'content' => <<<'HTML'
<!-- wp:group {"align":"wide","backgroundColor":"background-alt","style":{"spacing":{"padding":{"top":"var:preset|spacing|lg","right":"var:preset|spacing|lg","bottom":"var:preset|spacing|lg","left":"var:preset|spacing|lg"},"blockGap":"var:preset|spacing|md"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide has-background-color has-background-alt-background-color" style="padding-top:var(--wp--preset--spacing--lg);padding-right:var(--wp--preset--spacing--lg);padding-bottom:var(--wp--preset--spacing--lg);padding-left:var(--wp--preset--spacing--lg)">
  <!-- wp:heading {"level":2} -->
  <h2>What clubs are saying</h2>
  <!-- /wp:heading -->

  <!-- wp:columns {"style":{"spacing":{"blockGap":"var:preset|spacing|lg"}}} -->
  <div class="wp-block-columns">
    <!-- wp:column -->
    <div class="wp-block-column">
      <!-- wp:quote -->
      <blockquote class="wp-block-quote"><p>"We launched in a week and supporters finally find the info they need."</p><cite>Operations Manager</cite></blockquote>
      <!-- /wp:quote -->
    </div>
    <!-- /wp:column -->

    <!-- wp:column -->
    <div class="wp-block-column">
      <!-- wp:quote -->
      <blockquote class="wp-block-quote"><p>"The design is clean, fast, and easy to update after every match."</p><cite>Communications Lead</cite></blockquote>
      <!-- /wp:quote -->
    </div>
    <!-- /wp:column -->

    <!-- wp:column -->
    <div class="wp-block-column">
      <!-- wp:quote -->
      <blockquote class="wp-block-quote"><p>"Our sponsors love the professional look and clear CTAs."</p><cite>Club Director</cite></blockquote>
      <!-- /wp:quote -->
    </div>
    <!-- /wp:column -->
  </div>
  <!-- /wp:columns -->
</div>
<!-- /wp:group -->
HTML
      )
    );

    register_block_pattern(
      'touchline/faq-section',
      array(
        'title' => __('FAQ Section', 'touchline-theme'),
        'categories' => array('touchline'),
        'description' => __('Frequently asked questions in a simple stacked layout.', 'touchline-theme'),
        'content' => <<<'HTML'
<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|lg","right":"var:preset|spacing|lg","bottom":"var:preset|spacing|lg","left":"var:preset|spacing|lg"},"blockGap":"var:preset|spacing|md"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--lg);padding-right:var(--wp--preset--spacing--lg);padding-bottom:var(--wp--preset--spacing--lg);padding-left:var(--wp--preset--spacing--lg)">
  <!-- wp:heading {"level":2} -->
  <h2>Frequently asked questions</h2>
  <!-- /wp:heading -->

  <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|xs"}}} -->
  <div class="wp-block-group">
    <!-- wp:heading {"level":3} -->
    <h3>How long does setup take?</h3>
    <!-- /wp:heading -->
    <!-- wp:paragraph -->
    <p>Most clubs are live in a week with content migrated and navigation ready.</p>
    <!-- /wp:paragraph -->
  </div>
  <!-- /wp:group -->

  <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|xs"}}} -->
  <div class="wp-block-group">
    <!-- wp:heading {"level":3} -->
    <h3>Can we update content ourselves?</h3>
    <!-- /wp:heading -->
    <!-- wp:paragraph -->
    <p>Yes. The editor matches the live site so changes are easy and predictable.</p>
    <!-- /wp:paragraph -->
  </div>
  <!-- /wp:group -->

  <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|xs"}}} -->
  <div class="wp-block-group">
    <!-- wp:heading {"level":3} -->
    <h3>Do we need extra plugins?</h3>
    <!-- /wp:heading -->
    <!-- wp:paragraph -->
    <p>No. The patterns use core WordPress blocks to keep things lean.</p>
    <!-- /wp:paragraph -->
  </div>
  <!-- /wp:group -->
</div>
<!-- /wp:group -->
HTML
      )
    );
  }
  add_action('init', 'touchline_theme_register_patterns');
}

if (!function_exists('touchline_theme_fallback_menu')) {
  /**
   * Accessible fallback menu for the primary navigation.
   */
  function touchline_theme_fallback_menu()
  {
    wp_page_menu(array(
      'menu_class' => 'primary-menu fallback-menu',
      'show_home' => true,
    ));
  }
}
