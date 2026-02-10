<?php
/**
 * Header template.
 *
 * Contains the opening of the HTML document and site header.
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<a class="skip-link" href="#site-content"><?php esc_html_e('Skip to content', 'touchline-theme'); ?></a>
<header class="site-header" role="banner">
  <div class="site-header__inner">
    <div class="site-header__brand">
      <?php if (has_custom_logo()) : ?>
        <?php the_custom_logo(); ?>
      <?php else : ?>
        <a class="logo-placeholder" href="<?php echo esc_url(home_url('/')); ?>" aria-label="<?php esc_attr_e('Homepage', 'touchline-theme'); ?>">
          <?php esc_html_e('Logo', 'touchline-theme'); ?>
        </a>
      <?php endif; ?>
    </div>

    <button class="menu-toggle" type="button" aria-expanded="false" aria-controls="primary-navigation" data-menu-toggle>
      <span class="screen-reader-text"><?php esc_html_e('Toggle menu', 'touchline-theme'); ?></span>
      <span class="menu-toggle__bar" aria-hidden="true"></span>
      <span class="menu-toggle__bar" aria-hidden="true"></span>
      <span class="menu-toggle__bar" aria-hidden="true"></span>
    </button>

    <nav id="primary-navigation" class="primary-navigation" aria-label="<?php esc_attr_e('Primary menu', 'touchline-theme'); ?>" data-navigation>
      <?php
      wp_nav_menu(array(
        'theme_location' => 'primary',
        'menu_class' => 'primary-menu',
        'container' => false,
        'fallback_cb' => 'touchline_theme_fallback_menu',
      ));
      ?>
      <a class="header-cta header-cta--mobile" href="<?php echo esc_url(home_url('/contact')); ?>"><?php esc_html_e('Get a demo', 'touchline-theme'); ?></a>
    </nav>

    <a class="header-cta" href="<?php echo esc_url(home_url('/contact')); ?>"><?php esc_html_e('Get a demo', 'touchline-theme'); ?></a>
  </div>
</header>
<main id="site-content" class="site-content">
