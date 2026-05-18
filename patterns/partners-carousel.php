<?php
/**
 * Title: Airy Partner Carousel
 * Slug: hyla/partner-carousel
 * Categories: featured, text
 * Description: A premium, airy infinite scrolling carousel for up to 10 partners with a link to a full list page.
 */
?>

<!-- wp:html -->
<section class="hyla-partner-section">
    <div class="hyla-partner-inner-content">
        
        <!-- Header Zone -->
        <div class="hyla-partner-header">
            <span class="hyla-eyebrow">OUR NETWORK</span>
            <h2 class="hyla-partner-title">Trusted by Health & Wellness Leaders</h2>
            <p class="hyla-partner-subtitle">We collaborate with forward-thinking partners dedicated to cleaner, breathable spaces.</p>
        </div>

        <!-- Infinite Carousel Wrapper (Max 10 Partners) -->
        <div class="hyla-carousel-container">
            <div class="hyla-carousel-track">
                
                <?php
                // Define up to 10 partner logos
                // Dynamic tip: replace these placeholder URLs with your actual image paths or get_theme_file_uri()
                $partners = [
                    ['src' => get_theme_file_uri('assets/images/logo1.svg'), 'alt' => 'Partner Name 1'],
                    ['src' => get_theme_file_uri('assets/images/logo2.svg'), 'alt' => 'Partner Name 2'],
                    ['src' => get_theme_file_uri('assets/images/logo3.svg'), 'alt' => 'Partner Name 3'],
                    ['src' => get_theme_file_uri('assets/images/logo4.svg'), 'alt' => 'Partner Name 4'],
                    ['src' => get_theme_file_uri('assets/images/logo5.svg'), 'alt' => 'Partner Name 5'],
                    ['src' => get_theme_file_uri('assets/images/logo6.svg'), 'alt' => 'Partner Name 6'],
                    ['src' => get_theme_file_uri('assets/images/logo7.svg'), 'alt' => 'Partner Name 7'],
                    ['src' => get_theme_file_uri('assets/images/logo8.svg'), 'alt' => 'Partner Name 8'],
                    ['src' => get_theme_file_uri('assets/images/logo9.svg'), 'alt' => 'Partner Name 9'],
                    ['src' => get_theme_file_uri('assets/images/logo10.svg'), 'alt' => 'Partner Name 10'],
                ];

                // Render Original Set
                foreach ($partners as $partner) : ?>
                    <div class="hyla-partner-logo">
                        <img src="<?php echo esc_url($partner['src']); ?>" alt="<?php echo esc_attr($partner['alt']); ?>" loading="lazy" />
                    </div>
                <?php endforeach; ?>

                <?php 
                // Render Duplicate Set for seamless CSS infinite scrolling loop
                foreach ($partners as $partner) : ?>
                    <div class="hyla-partner-logo" aria-hidden="true">
                        <img src="<?php echo esc_url($partner['src']); ?>" alt="" loading="lazy" />
                    </div>
                <?php endforeach; ?>
                
            </div>
        </div>

        <!-- CTA Button Zone -->
        <div class="hyla-partner-cta">
            <div class="wp-block-buttons hyla-button-outline">
                <a class="wp-element-button" href="<?php echo esc_url(home_url('/partners/')); ?>">View All Partners</a>
            </div>
        </div>

    </div>
</section>
<!-- /wp:html -->