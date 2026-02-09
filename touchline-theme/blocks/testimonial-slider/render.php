<?php
/**
 * Server render for testimonial slider.
 */

declare(strict_types=1);

$autoplay = !empty($attributes['autoplay']);
$show_dots = array_key_exists('showDots', $attributes) ? (bool) $attributes['showDots'] : true;
$interval = isset($attributes['interval']) ? (int) $attributes['interval'] : 6;
$interval = max(3, $interval);
$slider_id = wp_unique_id('touchline-slider-');

$wrapper_attributes = get_block_wrapper_attributes([
    'class' => 'touchline-slider',
    'data-autoplay' => $autoplay ? 'true' : 'false',
    'data-interval' => (string) $interval,
    'data-show-dots' => $show_dots ? 'true' : 'false',
    'aria-roledescription' => 'carousel',
    'aria-label' => __('Testimonials', 'touchline'),
    'tabindex' => '0',
]);
?>
<div <?php echo $wrapper_attributes; ?> id="<?php echo esc_attr($slider_id); ?>">
  <div class="touchline-slider__track" role="list">
    <?php echo $content; ?>
  </div>
  <div class="touchline-slider__controls">
    <button type="button" class="touchline-slider__prev wp-element-button" aria-label="<?php esc_attr_e('Previous testimonial', 'touchline'); ?>">Prev</button>
    <button type="button" class="touchline-slider__next wp-element-button" aria-label="<?php esc_attr_e('Next testimonial', 'touchline'); ?>">Next</button>
  </div>
  <?php if ($show_dots) : ?>
    <div class="touchline-slider__dots" role="tablist" aria-label="<?php esc_attr_e('Select testimonial', 'touchline'); ?>"></div>
  <?php endif; ?>
</div>
