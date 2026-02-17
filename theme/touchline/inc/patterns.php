<?php
declare(strict_types=1);

add_action('init', function () {
  register_block_pattern_category('touchline', [
    'label' => __('Touchline Sections', 'touchline'),
  ]);
});
