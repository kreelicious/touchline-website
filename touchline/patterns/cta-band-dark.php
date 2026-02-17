<?php
/**
 * Title: CTA Band (Dark)
 * Slug: touchline/cta-band-dark
 * Categories: touchline
 */
?>
<!-- wp:group {"layout":{"type":"constrained"},"style":{"color":{"background":"var:preset|color|text","text":"var:preset|color|primary-contrast"},"spacing":{"padding":{"top":"var:preset|spacing|7","bottom":"var:preset|spacing|7"},"blockGap":"var:preset|spacing|5"},"border":{"radius":"var(--wp--custom--radius--xl)"}}} -->
<div class="wp-block-group has-text-color has-background" style="border-radius:var(--wp--custom--radius--xl)">
  <!-- wp:heading {"level":2,"fontSize":"h2","textAlign":"center"} --><h2 class="wp-block-heading has-text-align-center has-h-2-font-size">See if Touchline fits your club.</h2><!-- /wp:heading -->
  <!-- wp:paragraph {"fontSize":"body","align":"center"} --><p class="has-text-align-center has-body-font-size">Apply for the pilot or join the waitlist — we’ll get back to you quickly.</p><!-- /wp:paragraph -->
  <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
  <div class="wp-block-buttons">
    <!-- wp:button -->
    <div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="#" data-cta-type="pilot" data-source-page="cta-band">Apply for Pilot</a></div>
    <!-- /wp:button -->
    <!-- wp:button {"className":"is-style-outline"} -->
    <div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="#" data-cta-type="waitlist" data-source-page="cta-band">Join Waitlist</a></div>
    <!-- /wp:button -->
  </div>
  <!-- /wp:buttons -->
</div>
<!-- /wp:group -->
