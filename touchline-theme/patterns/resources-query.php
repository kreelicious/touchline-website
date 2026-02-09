<?php
/**
 * Title: Resources query
 * Slug: touchline/resources-query
 * Categories: touchline-content
 * Description: Query block for resource cards.
 * Keywords: resources, query
 */
?>
<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group">
  <!-- wp:heading -->
  <h2>Resource library</h2>
  <!-- /wp:heading -->
  <!-- wp:query {"queryId":3,"query":{"perPage":6,"postType":"resource","order":"desc","orderBy":"date"}} -->
  <div class="wp-block-query">
    <!-- wp:post-template -->
    <!-- wp:group {"className":"touchline-card"} -->
    <div class="wp-block-group touchline-card">
      <!-- wp:post-terms {"term":"resource_type"} /-->
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
