<?php

/**
 * Query Pattern.
 *
 * @package catalina
 */

return <<<EOD
<!-- wp:query {"queryId":14,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","categoryIds":[],"tagIds":[],"order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false}} -->
<!-- wp:post-template -->
<!-- wp:columns {"align":"wide"} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"width":"50%"} -->
    <div class="wp-block-column" style="flex-basis:50%"><!-- wp:post-featured-image {"isLink":true} /--></div>
    <!-- /wp:column -->

    <!-- wp:column {"width":"50%"} -->
    <div class="wp-block-column" style="flex-basis:50%"><!-- wp:post-title {"isLink":true} /-->

<!-- wp:post-excerpt /--></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->
<!-- /wp:post-template -->
EOD;
