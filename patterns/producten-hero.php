<?php
/**
 * Title: HYLA Global Producten Hero
 * Slug: hyla/producten-hero
 * Categories: featured
 * Inserter: true
 */
?>

<!-- WP Gutenberg Block Pattern Structure -->

<!-- wp:group {"className":"hyla-product-showcase-wrapper","layout":{"type":"constrained"}} -->
<div class="wp-block-group hyla-product-showcase-wrapper">

    <!-- 1. GLOBAL HERO INTRODUCTION -->
    <!-- wp:group {"className":"hyla-showcase-hero","layout":{"type":"constrained"}} -->
    <div class="wp-block-group hyla-showcase-hero">
        <div class="hyla-hero-inner-content">
            <header class="hyla-hero-header">
                <!-- wp:paragraph {"className":"hyla-eyebrow"} -->
                <p class="hyla-eyebrow">Onze Producten</p>
                <!-- /wp:paragraph -->

                <!-- wp:heading {"level":1,"className":"hyla-hero-title"} -->
                <h1 class="wp-block-heading hyla-hero-title">Ontdek het Premium HYLA Assortiment</h1>
                <!-- /wp:heading -->
            </header>

            <!-- wp:paragraph {"className":"hyla-hero-intro-text"} -->
            <p class="hyla-hero-intro-text">
                Ervaar de kracht van pure waterfiltratie. Van ons revolutionaire reinigingssysteem tot gespecialiseerde accessoires – elk product is ontworpen om uw leefomgeving gezonder, frisser en volledig stofvrij te maken.
            </p>
            <!-- /wp:paragraph -->
        </div>
    </div>
    <!-- /wp:group -->


    <!-- 2. PRODUCT CARDS CONTAINER -->
    <!-- wp:group {"className":"hyla-showcase-grid","layout":{"type":"constrained"}} -->
    <div class="wp-block-group hyla-showcase-grid">

        <!-- CARD 1: IMAGE LEFT (Multireiniger) -->
        <!-- wp:columns {"verticalAlignment":"center","className":"hyla-product-split-card"} -->
        <div class="wp-block-columns are-vertically-aligned-center hyla-product-split-card">
            <!-- wp:column {"verticalAlignment":"center","width":"50%","className":"hyla-product-media-col"} -->
            <div class="wp-block-column is-vertically-aligned-center hyla-product-media-col" style="flex-basis:50%">
                <!-- wp:image {"sizeSlug":"large","linkDestination":"none","className":"hyla-product-image"} -->
                <figure class="wp-block-image size-large hyla-product-image"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/HYLA-Multireiniger.webp' ); ?>" alt="HYLA Multireiniger"/></figure>
                <!-- /wp:image -->
            </div>
            <!-- /wp:column -->

            <!-- wp:column {"verticalAlignment":"center","width":"50%","className":"hyla-product-content-col"} -->
            <div class="wp-block-column is-vertically-aligned-center hyla-product-content-col" style="flex-basis:50%">
                <!-- wp:group {"className":"hyla-product-inner-content","layout":{"type":"constrained"}} -->
                <div class="wp-block-group hyla-product-inner-content">
                    <!-- wp:paragraph {"className":"hyla-eyebrow"} -->
                    <p class="hyla-eyebrow">Het Vlaggenschip</p>
                    <!-- /wp:paragraph -->

                    <!-- wp:heading {"level":3,"className":"hyla-product-title"} -->
                    <h3 class="wp-block-heading hyla-product-title">HYLA GST Multireiniger</h3>
                    <!-- /wp:heading -->

                    <!-- wp:paragraph {"className":"hyla-product-description"} -->
                    <p class="hyla-product-description">Het hart van ons assortiment. Filtert stof, allergenen en fijnstof rechtstreeks in het waterreservoir. Geen filters, geen stofzakken – alleen pure frisheid en schone lucht in huis.</p>
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
        </div>
        <!-- /wp:columns -->


        <!-- CARD 2: IMAGE RIGHT (Luchtverfrisser) -->
        <!-- wp:columns {"verticalAlignment":"center","className":"hyla-product-split-card"} -->
        <div class="wp-block-columns are-vertically-aligned-center hyla-product-split-card">
            <!-- wp:column {"verticalAlignment":"center","width":"50%","className":"hyla-product-content-col"} -->
            <div class="wp-block-column is-vertically-aligned-center hyla-product-content-col" style="flex-basis:50%">
                <!-- wp:group {"className":"hyla-product-inner-content","layout":{"type":"constrained"}} -->
                <div class="wp-block-group hyla-product-inner-content">
                    <!-- wp:paragraph {"className":"hyla-eyebrow"} -->
                    <p class="hyla-eyebrow">Luchtzuivering</p>
                    <!-- /wp:paragraph -->

                    <!-- wp:heading {"level":3,"className":"hyla-product-title"} -->
                    <h3 class="wp-block-heading hyla-product-title">HYLA Water Air Freshener</h3>
                    <!-- /wp:heading -->

                    <!-- wp:paragraph {"className":"hyla-product-description"} -->
                    <p class="hyla-product-description">Compact en uiterst effectief. Neutraliseert nare geuren, verhoogt de luchtvochtigheid en creëert een serene sfeer in elke ruimte door middel van een actieve, kalmerende waterwerveling.</p>
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
                <figure class="wp-block-image size-large hyla-product-image"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/HYLA-Air-Freshener.webp' ); ?>" alt="HYLA Water Air Freshener"/></figure>
                <!-- /wp:image -->
            </div>
            <!-- /wp:column -->
        </div>
        <!-- /wp:columns -->


        <!-- CARD 3: IMAGE LEFT (Elektrische Borstel) -->
        <!-- wp:columns {"verticalAlignment":"center","className":"hyla-product-split-card"} -->
        <div class="wp-block-columns are-vertically-aligned-center hyla-product-split-card">
            <!-- wp:column {"verticalAlignment":"center","width":"50%","className":"hyla-product-media-col"} -->
            <div class="wp-block-column is-vertically-aligned-center hyla-product-media-col" style="flex-basis:50%">
                <!-- wp:image {"sizeSlug":"large","linkDestination":"none","className":"hyla-product-image"} -->
                <figure class="wp-block-image size-large hyla-product-image"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/HYLA-Aura-Ventus.webp' ); ?>" alt="AURA Ventus Elektrische Borstel"/></figure>
                <!-- /wp:image -->
            </div>
            <!-- /wp:column -->

            <!-- wp:column {"verticalAlignment":"center","width":"50%","className":"hyla-product-content-col"} -->
            <div class="wp-block-column is-vertically-aligned-center hyla-product-content-col" style="flex-basis:50%">
                <!-- wp:group {"className":"hyla-product-inner-content","layout":{"type":"constrained"}} -->
                <div class="wp-block-group hyla-product-inner-content">
                    <!-- wp:paragraph {"className":"hyla-eyebrow"} -->
                    <p class="hyla-eyebrow">Dieptereiniging</p>
                    <!-- /wp:paragraph -->

                    <!-- wp:heading {"level":3,"className":"hyla-product-title"} -->
                    <h3 class="wp-block-heading hyla-product-title">AURA Ventus Elektroborstel</h3>
                    <!-- /wp:heading -->

                    <!-- wp:paragraph {"className":"hyla-product-description"} -->
                    <p class="hyla-product-description">Onze specialist voor textiele oppervlakken. Verwijdert moeiteloos hardnekkig vuil, diepliggend stof, allergenen en dierenharen uit tapijten, matrassen en meubelstoffering.</p>
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
        </div>
        <!-- /wp:columns -->


        <!-- CARD 4: IMAGE RIGHT (Geuroliën) -->
        <!-- wp:columns {"verticalAlignment":"center","className":"hyla-product-split-card"} -->
        <div class="wp-block-columns are-vertically-aligned-center hyla-product-split-card">
            <!-- wp:column {"verticalAlignment":"center","width":"50%","className":"hyla-product-content-col"} -->
            <div class="wp-block-column is-vertically-aligned-center hyla-product-content-col" style="flex-basis:50%">
                <!-- wp:group {"className":"hyla-product-inner-content","layout":{"type":"constrained"}} -->
                <div class="wp-block-group hyla-product-inner-content">
                    <!-- wp:paragraph {"className":"hyla-eyebrow"} -->
                    <p class="hyla-eyebrow">Natuurlijke Aroma's</p>
                    <!-- /wp:paragraph -->

                    <!-- wp:heading {"level":3,"className":"hyla-product-title"} -->
                    <h3 class="wp-block-heading hyla-product-title">Ecologische Geuroliën</h3>
                    <!-- /wp:heading -->

                    <!-- wp:paragraph {"className":"hyla-product-description"} -->
                    <p class="hyla-product-description">Verrijk uw reinigingservaring. Voeg een paar druppels van onze hoogwaardige, natuurlijke essentiële oliën toe aan het water en hul uw volledige woning in een rustgevende geur.</p>
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
                <figure class="wp-block-image size-large hyla-product-image"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/HYLA-Geurolien.webp' ); ?>" alt="HYLA Ecologische Geuroliën"/></figure>
                <!-- /wp:image -->
            </div>
            <!-- /wp:column -->
        </div>
        <!-- /wp:columns -->

    </div>
    <!-- /wp:group -->

</div>
<!-- /wp:group -->