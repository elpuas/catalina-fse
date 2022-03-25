<?php

/**
 * Hero Pattern.
 *
 * @package catalina
 */

return <<<EOD
<!-- wp:group {"tagName":"section","className":"ct-hero"} -->
<section class="wp-block-group ct-hero"><!-- wp:paragraph {"style":{"typography":{"textTransform":"uppercase"}},"textColor":"secondary","fontSize":"section-content"} -->
<p class="has-secondary-color has-text-color has-section-content-font-size" style="text-transform:uppercase"><strong>Veritatis Obcaecati Tenetur</strong></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"style":{"typography":{"textTransform":"uppercase"}},"textColor":"secondary","fontSize":"hero"} -->
<h2 class="has-secondary-color has-text-color has-hero-font-size" style="text-transform:uppercase">I code digital crafts <strong>for </strong>humans.</h2>
<!-- /wp:heading -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"secondary","textColor":"primary"} -->
<div class="wp-block-button"><a class="wp-block-button__link has-primary-color has-secondary-background-color has-text-color has-background">READ MORE</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></section>
<!-- /wp:group -->
EOD;
