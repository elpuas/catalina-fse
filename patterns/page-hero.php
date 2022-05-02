<?php

/**
 * Hero Pattern.
 *
 * @package catalina
 */

return <<<EOD
<!-- wp:group {"tagName":"section","className":"pattern-page-hero"} -->
<section class="wp-block-group pattern-page-hero"><!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column {"className":"page-hero-meta"} -->
<div class="wp-block-column page-hero-meta"><!-- wp:post-title {"level":1} /-->

<!-- wp:post-excerpt /--></div>
<!-- /wp:column -->

<!-- wp:column {"className":"page-hero-feature-image"} -->
<div class="wp-block-column page-hero-feature-image"><!-- wp:post-featured-image /--></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></section>
<!-- /wp:group -->
EOD;