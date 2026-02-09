<?php
/**
 * Title: Case studies query
 * Slug: touchline/case-studies-query
 * Categories: touchline-proof
 * Description: Query block showcasing case studies.
 * Keywords: case studies, query
 */
?>
<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group">
  <!-- wp:heading {"textAlign":"center"} -->
  <h2 class="has-text-align-center">Case studies</h2>
  <!-- /wp:heading -->
  <!-- wp:paragraph {"align":"center"} -->
  <p class="has-text-align-center">See how partnerships teams modernize sponsorship workflows with Touchline.</p>
  <!-- /wp:paragraph -->
  <!-- wp:query {"queryId":2,"query":{"perPage":3,"postType":"case_study","order":"desc","orderBy":"date"}} -->
  <div class="wp-block-query">
    <!-- wp:post-template -->
    <!-- wp:group {"className":"touchline-card"} -->
    <div class="wp-block-group touchline-card">
      <!-- wp:post-featured-image /-->
      <!-- wp:post-title {"isLink":true} /-->
      <!-- wp:post-excerpt /-->
    </div>
    <!-- /wp:group -->
    <!-- /wp:post-template -->
    <!-- wp:query-pagination /-->
  </div>
  <!-- /wp:query -->
</div>
<!-- /wp:group -->
