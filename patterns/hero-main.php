<?php
/**
 * Title: Hero Hoofdpagina
 * Slug: hyla-2026/hero-main
 * Categories: featured
 * Block Types: core/group
 */
?>

<!-- wp:group {"tagName":"section","align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"}}},"backgroundColor":"hyla-blue","textColor":"white","layout":{"type":"constrained"},"templateLock":"contentOnly"} -->
<section class="wp-block-group alignfull has-white-color has-hyla-blue-background-color has-text-color has-background" style="padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)">
    
    <!-- wp:columns {"verticalAlignment":"center","align":"wide"} -->
    <div class="wp-block-columns alignwide are-vertically-aligned-center">
        
        <!-- wp:column {"verticalAlignment":"center","width":"60%"} -->
        <div class="wp-block-column communicate-vertically-aligned-center" style="flex-basis:60%">
            <!-- wp:heading {"level":1,"style":{"typography":{"lineHeight":"1.1"}},"fontSize":"x-large"} -->
            <h1 class="wp-block-heading has-x-large-font-size" style="line-height:1.1">Gezonde lucht voor een <br><strong>krachtig leven.</strong></h1>
            <!-- /wp:heading -->

            <!-- wp:paragraph {"style":{"typography":{"fontSize":"1.25rem"}}} -->
            <p style="font-size:1.25rem">Ontdek de kracht van HYLA: de natuurlijke oplossing voor een stofvrij en allergeen-arm binnenklimaat. Zowel privé als professioneel.</p>
            <!-- /wp:paragraph -->

            <!-- wp:buttons -->
            <div class="wp-block-buttons">
                <!-- wp:button {"backgroundColor":"white","textColor":"hyla-blue","className":"is-style-fill"} -->
                <div class="wp-block-button is-style-fill"><a class="wp-block-button__link has-hyla-blue-color has-white-background-color has-text-color has-background wp-element-button">Gratis demo aanvragen</a></div>
                <!-- /wp:button -->

                <!-- wp:button {"className":"is-style-outline"} -->
                <div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button">Bekijk oplossingen</a></div>
                <!-- /wp:button -->
            </div>
            <!-- /wp:buttons -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"verticalAlignment":"center","width":"40%"} -->
        <div class="wp-block-column are-vertically-aligned-center" style="flex-basis:40%">
            <!-- wp:image {"sizeSlug":"large","linkDestination":"none","fetchpriority":"high"} -->
            <figure class="wp-block-image size-large"><img src="<?php echo get_theme_file_uri('/assets/images/hyla-device-hero.avif'); ?>" alt="HYLA Luchtzuivering Systeem" fetchpriority="high"/></figure>
            <!-- /wp:image -->
        </div>
        <!-- /wp:column -->

    </div>
    <!-- /wp:columns -->

</section>
<!-- /wp:group -->