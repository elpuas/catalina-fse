<?php
/**
 * Title: Headline with Cards
 * Slug: catalina/headline-with-cards
 * Block types: core/post-content
 * Categories: catalina-patterns
 */

?>
<!-- wp:columns {"className":"pattern-headline-with-cards"} -->
<div class="wp-block-columns pattern-headline-with-cards"><!-- wp:column {"className":"pattern-headline-col"} -->
<div class="wp-block-column pattern-headline-col"><!-- wp:query {"queryId":0,"query":{"perPage":"2","pages":"1","offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"tagName":"section","className":"pattern-cards"} -->
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
<!-- /wp:query --></div>
<!-- /wp:column -->

<!-- wp:column {"className":"pattern-headline-col"} -->
<div class="wp-block-column pattern-headline-col"><!-- wp:group {"className":"pattern-headline-content"} -->
<div class="wp-block-group pattern-headline-content"><!-- wp:heading {"textColor":"secondary","fontSize":"section-header"} -->
<h2 class="has-secondary-color has-text-color has-section-header-font-size">Ipsa laudantium molestias eos sapiente officiis</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"secondary","fontSize":"base"} -->
<p class="has-secondary-color has-text-color has-base-font-size">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-small-button"} -->
<div class="wp-block-button is-style-small-button"><a class="wp-block-button__link">Call to Action</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->
