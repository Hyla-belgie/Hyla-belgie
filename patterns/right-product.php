<?php
/**
 * Title: HYLA Split Product Card (Image Right)
 * Slug: hyla/product-card-split-right
 * Categories: featured
 * Inserter: true
 *  */
?>

<!-- wp:columns {"verticalAlignment":"center","className":"hyla-product-split-card"} -->
<div class="wp-block-columns are-vertically-aligned-center hyla-product-split-card">
    <!-- wp:column {"verticalAlignment":"center","width":"50%","className":"hyla-product-content-col"} -->
    <div class="wp-block-column is-vertically-aligned-center hyla-product-content-col" style="flex-basis:50%">
        <!-- wp:group {"className":"hyla-product-inner-content","layout":{"type":"constrained"}} -->
        <div class="wp-block-group hyla-product-inner-content">
            <!-- wp:paragraph {"className":"hyla-eyebrow"} -->
            <p class="hyla-eyebrow">Product Tag</p>
            <!-- /wp:paragraph -->

            <!-- wp:heading {"level":3,"className":"hyla-product-title"} -->
            <h3 class="wp-block-heading hyla-product-title">Product Naam</h3>
            <!-- /wp:heading -->

            <!-- wp:paragraph {"className":"hyla-product-description"} -->
            <p class="hyla-product-description">Hier komt een korte, aantrekkelijke omschrijving van het specifieke HYLA product en de unieke eigenschappen ervan.</p>
            <!-- /wp:paragraph -->

            <!-- wp:buttons {"className":"hyla-product-actions"} -->
            <div class="wp-block-buttons hyla-product-actions">
                <!-- wp:button {"className":"hyla-button-primary"} -->
                <div class="wp-block-button hyla-button hyla-button-primary"><a class="wp-block-button__link wp-element-button" href="/shop">Bekijk in de shop</a></div>
                <!-- /wp:button -->
            </div>
            <!-- /wp:buttons -->
        </div>
        <!-- /wp:group -->
    </div>
    <!-- /wp:column -->

    <!-- wp:column {"verticalAlignment":"center","width":"50%","className":"hyla-product-media-col"} -->
    <div class="wp-block-column is-vertically-aligned-center hyla-product-media-col" style="flex-basis:50%">
        <!-- wp:image {"sizeSlug":"large","linkDestination":"none","className":"hyla-product-image"} -->
        <figure class="wp-block-image size-large hyla-product-image"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/HYLA-Multireiniger.webp' ); ?>" alt="HYLA Multireiniger"/></figure>
        <!-- /wp:image -->
    </div>
    <!-- /wp:column -->
</div>
<!-- /wp:columns -->