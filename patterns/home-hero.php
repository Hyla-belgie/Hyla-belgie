<?php
/**
 * Title: HYLA Product Showcase Hero
 * Slug: hyla/product-showcase-hero
 * Categories: featured
 * Inserter: true
 */
?>

<!-- wp:group {"align":"full","className":"hyla-showcase-hero","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull hyla-showcase-hero">

    <!-- wp:group {"className":"hyla-hero-header","layout":{"type":"constrained","contentSize":"800px"}} -->
    <div class="wp-block-group hyla-hero-header">
        <!-- wp:paragraph -->
        <p class="hyla-eyebrow">Healthy Living • Premium Air Technology</p>
        <!-- /wp:paragraph -->

        <!-- wp:heading {"level":1,"textAlign":"center","className":"hyla-hero-title"} -->
        <h1 class="wp-block-heading has-text-align-center hyla-hero-title">Premium reiniging voor een gezondere leefomgeving</h1>
        <!-- /wp:heading -->
    </div>
    <!-- /wp:group -->

    <!-- wp:columns {"align":"wide","className":"hyla-product-grid"} -->
    <div class="wp-block-columns alignwide hyla-product-grid">
        
        <!-- wp:column {"className":"hyla-product-col"} -->
        <div class="wp-block-column hyla-product-col">
            <!-- wp:pattern {"slug":"hyla/product-card"} /-->

            <!-- wp:group {"className":"hyla-product-benefits-stack","layout":{"type":"constrained"}} -->
            <div class="wp-block-group hyla-product-benefits-stack">
                <!-- wp:pattern {"slug":"hyla/solution-card"} /-->
                <!-- wp:pattern {"slug":"hyla/solution-card"} /-->
                <!-- wp:pattern {"slug":"hyla/solution-card"} /-->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"className":"hyla-product-col"} -->
        <div class="wp-block-column hyla-product-col">
            <!-- wp:pattern {"slug":"hyla/product-card"} /-->

            <!-- wp:group {"className":"hyla-product-benefits-stack","layout":{"type":"constrained"}} -->
            <div class="wp-block-group hyla-product-benefits-stack">
                <!-- wp:pattern {"slug":"hyla/solution-card"} /-->
                <!-- wp:pattern {"slug":"hyla/solution-card"} /-->
                <!-- wp:pattern {"slug":"hyla/solution-card"} /-->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
</div>
<!-- /wp:group -->