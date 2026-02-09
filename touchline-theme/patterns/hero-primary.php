<?php
/**
 * Title: Primary hero (split)
 * Slug: touchline/hero-primary
 * Categories: touchline-hero
 * Description: Split hero with headline, copy, buttons, and image.
 * Keywords: hero, intro
 */
?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"var(--wp--preset--spacing--xl)","bottom":"var(--wp--preset--spacing--xl)"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group">
  <!-- wp:columns {"verticalAlignment":"center"} -->
  <div class="wp-block-columns are-vertically-aligned-center">
    <!-- wp:column {"verticalAlignment":"center","width":"55%"} -->
    <div class="wp-block-column is-vertically-aligned-center">
      <!-- wp:paragraph {"className":"is-badge is-badge--primary"} -->
      <p class="is-badge is-badge--primary">Touchline for sponsorship ops</p>
      <!-- /wp:paragraph -->
      <!-- wp:heading {"level":1} -->
      <h1>Control every sponsorship touchpoint from one platform.</h1>
      <!-- /wp:heading -->
      <!-- wp:paragraph {"fontSize":"lg"} -->
      <p class="has-lg-font-size">Touchline unifies inventory, proposals, approvals, and renewal analytics so revenue teams can scale faster.</p>
      <!-- /wp:paragraph -->
      <!-- wp:buttons -->
      <div class="wp-block-buttons">
        <!-- wp:button -->
        <div class="wp-block-button"><a class="wp-block-button__link wp-element-button">Get a demo</a></div>
        <!-- /wp:button -->
        <!-- wp:button {"className":"is-style-outline"} -->
        <div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button">See platform tour</a></div>
        <!-- /wp:button -->
      </div>
      <!-- /wp:buttons -->
    </div>
    <!-- /wp:column -->
    <!-- wp:column {"verticalAlignment":"center","width":"45%"} -->
    <div class="wp-block-column is-vertically-aligned-center">
      <!-- wp:image {"sizeSlug":"large","className":"touchline-card"} -->
      <figure class="wp-block-image size-large touchline-card"><img alt="Touchline platform preview"/></figure>
      <!-- /wp:image -->
    </div>
    <!-- /wp:column -->
  </div>
  <!-- /wp:columns -->
</div>
<!-- /wp:group -->
