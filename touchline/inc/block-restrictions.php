<?php
declare(strict_types=1);

add_filter('allowed_block_types_all', function ($allowed, $editor_context) {
  $post = $editor_context->post ?? null;

  if (!$post) {
    return $allowed;
  }

  if ($post->post_type === 'page') {
    return [
      'core/paragraph',
      'core/heading',
      'core/list',
      'core/buttons',
      'core/button',
      'core/group',
      'core/image',
      'core/columns',
      'core/column',
      'core/separator',
      'core/details'
    ];
  }

  if ($post->post_type === 'post') {
    return [
      'core/paragraph',
      'core/heading',
      'core/list',
      'core/quote',
      'core/image',
      'core/gallery',
      'core/embed',
      'core/buttons',
      'core/button',
      'core/separator',
      'core/details'
    ];
  }

  return $allowed;
}, 10, 2);
