<?php
/**
 * Title: Airy Partner Carousel
 * Slug: hyla/partner-carousel
 * Categories: featured, text
 * Description: A premium, airy infinite scrolling carousel for up to 10 partners with a link to a full list page.
 */

// Dynamically get the uploads directory URL
$upload_dir = wp_upload_dir();
$upload_base_url = trailingslashit($upload_dir['baseurl']) . '2026/05/';

// Define up to 10 partner logos mapping to your uploads folder
$partners = [
    ['src' => $upload_base_url . 'crelan_logo.webp', 'alt' => 'Crelan'],
    ['src' => $upload_base_url . 'horta_logo.webp', 'alt' => 'Horta'], // Replace with actual filenames
    ['src' => $upload_base_url . 'logo_china_garden.webp', 'alt' => 'china_garden'],
    ['src' => $upload_base_url . 'logo_colmar.webp', 'alt' => 'logo_colmar'],
    ['src' => $upload_base_url . 'logo_gabriels.webp', 'alt' => 'logo_gabriels'],
    ['src' => $upload_base_url . 'logo_keurslager.webp', 'alt' => 'logo_keurslager'],
    ['src' => $upload_base_url . 'MG_logo.webp', 'alt' => 'MG_logo'],
    ['src' => $upload_base_url . 'logo-adv.webp', 'alt' => 'logo-adv'],
    ['src' => $upload_base_url . 'crelan_logo.webp', 'alt' => 'Partner Name 9'],
    ['src' => $upload_base_url . 'crelan_logo.webp', 'alt' => 'Partner Name 10'],
];
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
            <div class="wp-block-buttons hyla-button-secondary">
                <a class="wp-element-button" href="<?php echo esc_url(home_url('/partners/')); ?>">View All Partners</a>
            </div>
        </div>
    </div>
</section>
<!-- /wp:html -->