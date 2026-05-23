<?php
/**
 * Title: Partner & Goede Doelen Carousel
 * Slug: hyla/partner-carousel
 * Categories: featured, text
 * Description: A premium, airy infinite scrolling carousel with sections for partners and charities, ending with a link to the clients page.
 */

// Dynamically get the uploads directory URL
$upload_dir = wp_upload_dir();
$upload_base_url = trailingslashit($upload_dir['baseurl']) . '2026/05/';

// 1. Samenwerkingspartners
$samenwerkingspartners = [
    ['src' => $upload_base_url . 'crelan_logo.webp', 'alt' => 'Crelan'],
    ['src' => $upload_base_url . 'horta_logo.webp', 'alt' => 'Horta'],
    ['src' => $upload_base_url . 'logo_china_garden.webp', 'alt' => 'China Garden'],
    ['src' => $upload_base_url . 'logo_colmar.webp', 'alt' => 'Colmar'],
    ['src' => $upload_base_url . 'logo_gabriels.webp', 'alt' => 'Gabriëls'],
];

// 2. Goede Doelen
$goede_doelen = [
    ['src' => $upload_base_url . 'logo_keurslager.webp', 'alt' => 'Keurslager'],
    ['src' => $upload_base_url . 'MG_logo.webp', 'alt' => 'MG Logo'],
    ['src' => $upload_base_url . 'logo-adv.webp', 'alt' => 'ADV Logo'],
    ['src' => $upload_base_url . 'crelan_logo.webp', 'alt' => 'Charity Partner 4'],
    ['src' => $upload_base_url . 'crelan_logo.webp', 'alt' => 'Charity Partner 5'],
];
?>

<!-- wp:html -->
<section class="hyla-partner-section">
    <div class="hyla-partner-inner-content">
        
        <div class="hyla-partner-header">
            <span class="hyla-eyebrow">OUR NETWORK</span>
            <h2 class="hyla-partner-title">Trusted by Health & Wellness Leaders</h2>
            <p class="hyla-partner-subtitle">We collaborate with forward-thinking partners dedicated to cleaner, breathable spaces.</p>
        </div>

        <div class="hyla-carousel-group">
            <h3 class="hyla-carousel-subheading">Samenwerkingspartners</h3>
            <div class="hyla-carousel-container">
                <div class="hyla-carousel-track">
                    
                    <?php
                    // Render Original Set
                    foreach ($samenwerkingspartners as $partner) : ?>
                        <div class="hyla-partner-logo">
                            <img src="<?php echo esc_url($partner['src']); ?>" alt="<?php echo esc_attr($partner['alt']); ?>" loading="lazy" />
                        </div>
                    <?php endforeach; ?>

                    <?php 
                    // Render Duplicate Set for seamless CSS infinite scrolling loop
                    foreach ($samenwerkingspartners as $partner) : ?>
                        <div class="hyla-partner-logo" aria-hidden="true">
                            <img src="<?php echo esc_url($partner['src']); ?>" alt="" loading="lazy" />
                        </div>
                    <?php endforeach; ?>
                    
                </div>
            </div>
        </div>

        <div class="hyla-carousel-group">
            <h3 class="hyla-carousel-subheading">Goede Doelen</h3>
            <div class="hyla-carousel-container">
                <div class="hyla-carousel-track">
                    
                    <?php
                    // Render Original Set
                    foreach ($goede_doelen as $doel) : ?>
                        <div class="hyla-partner-logo">
                            <img src="<?php echo esc_url($doel['src']); ?>" alt="<?php echo esc_attr($doel['alt']); ?>" loading="lazy" />
                        </div>
                    <?php endforeach; ?>

                    <?php 
                    // Render Duplicate Set for seamless CSS infinite scrolling loop
                    foreach ($goede_doelen as $doel) : ?>
                        <div class="hyla-partner-logo" aria-hidden="true">
                            <img src="<?php echo esc_url($doel['src']); ?>" alt="" loading="lazy" />
                        </div>
                    <?php endforeach; ?>
                    
                </div>
            </div>
        </div>

        <div class="hyla-partner-cta">
            <div class="wp-block-buttons hyla-button-secondary">
                <a class="wp-element-button" href="<?php echo esc_url(home_url('/klanten/')); ?>">Bekijk Onze Klanten</a>
            </div>
        </div>
        
    </div>
</section>
<!-- /wp:html -->