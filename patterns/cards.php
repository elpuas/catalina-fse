<?php
/**
 * Title: Cards
 * Slug: catalina/cards
 * Block types: core/post-content
 * Categories: catalina-patterns
 */

?>
<!-- wp:query {"queryId":0,"query":{"perPage":"2","pages":"1","offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"tagName":"section","className":"pattern-cards"} -->
<section class="wp-block-query pattern-cards"><!-- wp:post-template -->
<!-- wp:group {"backgroundColor":"secondary","className":"pattern-group"} -->
<div class="wp-block-group pattern-group has-secondary-background-color has-background"><!-- wp:group {"layout":{"type":"flex","allowOrientation":false,"justifyContent":"left","flexWrap":"wrap"}} -->
<div class="wp-block-group"><!-- wp:post-title {"level":3,"isLink":true} /-->

<!-- wp:post-author {"className":"pattern-card-author"} /--></div>
<!-- /wp:group -->

<!-- wp:group {"layout":{"type":"flex","allowOrientation":false}} -->
<div class="wp-block-group"><!-- wp:post-terms {"term":"category"} /-->

<!-- wp:post-featured-image /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:post-template --></section>
<!-- /wp:query -->
