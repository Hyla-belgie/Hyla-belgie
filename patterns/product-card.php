<?php
/**
 * Title: HYLA Product Card
 * Slug: hyla/product-card
 * Categories: featured
 * Inserter: true
 */
?>

<!-- wp:group {"className":"hyla-product-card-v2","layout":{"type":"constrained"}} -->
<div class="wp-block-group hyla-product-card-v2">
    <!-- wp:image {"sizeSlug":"large","linkDestination":"none"} -->
    <figure class="wp-block-image size-large"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/HYLA-Multireiniger.webp' ); ?>" alt="HYLA Multireiniger"/></figure>
    <!-- /wp:image -->

    <!-- wp:group {"className":"hyla-card-content","layout":{"type":"constrained"}} -->
    <div class="wp-block-group hyla-card-content">
        <!-- wp:paragraph {"className":"hyla-product-tag"} -->
        <p class="hyla-product-tag">Product Tag</p>
        <!-- /wp:paragraph -->

        <!-- wp:heading {"level":3} -->
        <h3 class="wp-block-heading">Product Name</h3>
        <!-- /wp:heading -->

        <!-- wp:buttons -->
        <div class="wp-block-buttons">
            <!-- wp:button {"className":"hyla-button-secondary"} -->
            <div class="wp-block-button hyla-button-secondary"><a class="wp-block-button__link wp-element-button" href="/multireiniger">Ontdek de het product</a></div>
            <!-- /wp:button -->

            <!-- wp:button {"className":"hyla-button-primary"} -->
            <div class="wp-block-button hyla-button hyla-button-primary"><a class="wp-block-button__link wp-element-button" href="/contact">Vraag een gratis demo aan</a></div>
            <!-- /wp:button -->
        </div>
        <!-- /wp:buttons -->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->