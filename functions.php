<?php
/**
 * HYLA België 2026 - Core Plumbing (Fase 1A geconsolideerd)
 * 
 * Bevat: SEO, Security, Performance, CPT's, Tracking, 
 * Meertaligheid & Schema.org integratie.
 */

if ( ! defined( 'ABSPATH' ) ) exit;

/**
 * 1. SEO, SECURITY & CANONICALS
 */
function hyla_seo_plumbing() {
    $host = $_SERVER['HTTP_HOST'];
    // Noindex voor staging en local omgevingen (Acceptatiecriterium)
    if (strpos($host, 'local') !== false || strpos($host, 'staging') !== false || strpos($host, 'hyla-belgie.be') === false) {
        echo '<meta name="robots" content="noindex, nofollow, noarchive">' . "\n";
    }

    // Automatische Canonical
    if ( is_singular() ) {
        echo '<link rel="canonical" href="' . get_permalink() . '" />' . "\n";
    } elseif ( is_home() || is_front_page() ) {
        echo '<link rel="canonical" href="' . home_url('/') . '" />' . "\n";
    }
    
    // Critical CSS Placeholder voor LCP optimalisatie
    echo '<style id="hyla-critical-css">.wp-block-cover h1 { text-wrap: balance; } .hyla-header-container { min-height: 80px; }</style>' . "\n";
}
add_action('wp_head', 'hyla_seo_plumbing', 1);

/**
 * 2. THEME SETUP & FSE SUPPORT
 */
if ( ! function_exists( 'hyla_setup' ) ) :
    function hyla_setup() {
        add_theme_support( 'wp-block-styles' );
        add_theme_support( 'align-wide' );
        add_theme_support( 'editor-styles' );
        add_theme_support( 'block-patterns' );
        add_editor_style( 'style.css' );

        // Registreer menu voor Polylang meertalige ruggengraat
        register_nav_menus( array(
            'primary' => __( 'Hoofdnavigatie', 'hyla-2026' ),
        ) );
    }
endif;
add_action( 'after_setup_theme', 'hyla_setup' );

/**
 * 3. CUSTOM POST TYPES & TAXONOMIES
 */
function hyla_register_architecture() {
    // Oplossingen CPT (Segmentatie Prive/Pro)
    register_post_type( 'solutions', array(
        'labels'      => array( 'name' => 'Oplossingen', 'singular_name' => 'Oplossing' ),
        'public'      => true,
        'has_archive' => true,
        'show_in_rest'=> true,
        'menu_icon'   => 'dashicons-lightbulb',
        'supports'    => array( 'title', 'editor', 'thumbnail', 'excerpt', 'custom-fields' ),
        'rewrite'     => array( 'slug' => 'oplossingen' ),
    ));

    // Getuigenissen (Sociaal bewijs voor conversie)
    register_post_type( 'testimonials', array(
        'labels'      => array( 'name' => 'Testimonials', 'singular_name' => 'Testimonial' ),
        'public'      => true,
        'show_in_rest'=> true,
        'menu_icon'   => 'dashicons-testimonial',
        'supports'    => array( 'title', 'editor', 'thumbnail' ),
    ));

    register_taxonomy('solution_category', 'solutions', array(
        'hierarchical' => true,
        'labels' => array('name' => 'Oplossing Categorieën'),
        'show_in_rest' => true,
    ));
}
add_action( 'init', 'hyla_register_architecture' );

/**
 * 4. PERFORMANCE PLUMBING (Fonts, AVIF, Deferral)
 */
function hyla_performance_head() {
    // Font Preloading (Core Web Vitals p75 LCP)
    $font_path = '/assets/fonts/inter-var.woff2';
    if ( file_exists( get_theme_file_path( $font_path ) ) ) {
        echo '<link rel="preload" href="' . get_theme_file_uri( $font_path ) . '" as="font" type="font/woff2" crossorigin>' . "\n";
    }
}
add_action( 'wp_head', 'hyla_performance_head' );

// AVIF Support voor moderne compressie
add_filter( 'upload_mimes', function( $mimes ) {
    $mimes['avif'] = 'image/avif';
    return $mimes;
});

// JS Deferral (behalve jQuery) voor snelle INP
add_filter('script_loader_tag', function($tag, $handle) {
    if (is_admin() || strpos($handle, 'jquery') !== false) return $tag;
    return str_replace(' src', ' defer src', $tag);
}, 10, 2);

// Cleanup bloat
add_action('init', function() {
    remove_action('wp_head', 'print_emoji_detection_script', 7);
    remove_action('wp_print_styles', 'print_emoji_styles');
});

/**
 * 5. TRACKING & CONSENT (Consent Mode v2)
 */
function hyla_gtm_consent_mode() {
    $is_debug = (strpos($_SERVER['HTTP_HOST'], 'local') !== false || strpos($_SERVER['HTTP_HOST'], 'staging') !== false);
    ?>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        
        gtag('consent', 'default', {
            'ad_storage': 'denied',
            'ad_user_data': 'denied',
            'ad_ad_personalization': 'denied',
            'analytics_storage': 'denied',
            'wait_for_update': 500
        });

        <?php if ( $is_debug ) : ?>
        gtag('config', 'G-XXXXXXXXXX', { 'debug_mode': true }); 
        <?php endif; ?>
    </script>
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-XXXXXXX');</script>
    <?php
}
add_action('wp_head', 'hyla_gtm_consent_mode', 0);

/**
 * 6. MEERTALIGHEID & CTA SHORTCODE
 */
add_action( 'init', function() {
    if ( function_exists( 'pll_register_string' ) ) {
        pll_register_string( 'HYLA CTA', 'Vraag een gratis demo aan', 'Thema Oplossingen', true );
        pll_register_string( 'HYLA CTA', 'Ontdek meer', 'Thema Oplossingen', true );
        pll_register_string( 'HYLA Footer', 'Alle rechten voorbehouden', 'Footer', false );
    }
});

add_shortcode('hyla_language_switcher', function() {
    if (function_exists('pll_the_languages')) {
        return '<div class="hyla-lang-switch-container">' . pll_the_languages(array('echo' => 0, 'display_names_as' => 'slug')) . '</div>';
    }
    return '<!-- Polylang niet actief -->';
});

/**
 * 7. STRATEGISCH: ACF OPTIONS & JSON-LD SCHEMA
 */
// ACF Options Page voor NAP en Global CTA's
if( function_exists('acf_add_options_page') ) {
    acf_add_options_page(array(
        'page_title'    => 'HYLA Global Settings',
        'menu_title'    => 'HYLA Settings',
        'menu_slug'     => 'hyla-settings',
        'capability'    => 'edit_posts',
        'redirect'      => false
    ));
}

// JSON-LD voor LocalBusiness (SEO p75)
add_action('wp_head', function() {
    $schema = [
        "@context" => "https://schema.org",
        "@type" => "LocalBusiness",
        "name" => "HYLA België",
        "url" => home_url(),
        "telephone" => "+32XXXXXXXX", // Later koppelen aan ACF field
        "priceRange" => "$$$",
        "address" => [
            "@type" => "PostalAddress",
            "streetAddress" => "HYLA HQ Adres",
            "addressLocality" => "Stad",
            "postalCode" => "0000",
            "addressCountry" => "BE"
        ]
    ];
    echo '<script type="application/ld+json">' . json_encode($schema) . '</script>';
}, 10);