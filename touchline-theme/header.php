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
  <div class="site-branding">
    <?php if (has_custom_logo()) : ?>
      <?php the_custom_logo(); ?>
    <?php else : ?>
      <a class="site-title" href="<?php echo esc_url(home_url('/')); ?>">
        <?php bloginfo('name'); ?>
      </a>
    <?php endif; ?>
    <?php $description = get_bloginfo('description', 'display'); ?>
    <?php if ($description) : ?>
      <p class="site-description"><?php echo esc_html($description); ?></p>
    <?php endif; ?>
  </div>
  <nav class="primary-navigation" aria-label="<?php esc_attr_e('Primary menu', 'touchline-theme'); ?>">
    <?php
    wp_nav_menu(array(
      'theme_location' => 'primary',
      'menu_class' => 'primary-menu',
      'container' => false,
      'fallback_cb' => 'touchline_theme_fallback_menu',
    ));
    ?>
  </nav>
</header>
<main id="site-content" class="site-content">
