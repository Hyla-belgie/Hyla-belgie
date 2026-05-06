<?php
/**
 * HYLA België 2026 - Core Plumbing (Fase 1A)
 */

if ( ! defined( 'ABSPATH' ) ) exit;

/**
 * 1. SEO, SECURITY & CANONICALS
 */
function hyla_seo_plumbing() {
    $host = $_SERVER['HTTP_HOST'];
    // Noindex voor staging en local omgevingen
    if (strpos($host, 'local') !== false || strpos($host, 'staging') !== false || strpos($host, 'hyla-belgie.be') === false) {
        echo '<meta name="robots" content="noindex, nofollow, noarchive">' . "\n";
    }

    // Automatische Canonical
    if ( is_singular() ) {
        echo '<link rel="canonical" href="' . get_permalink() . '" />' . "\n";
    } elseif ( is_home() || is_front_page() ) {
        echo '<link rel="canonical" href="' . home_url('/') . '" />' . "\n";
    }
    
    // Critical CSS Placeholder
    echo '<style id="hyla-critical-css">/* Critical CSS voor LCP hier injecteren */ .wp-block-cover h1 { text-wrap: balance; }</style>' . "\n";
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
    register_post_type( 'solutions', array(
        'labels'      => array( 'name' => 'Oplossingen', 'singular_name' => 'Oplossing' ),
        'public'      => true,
        'has_archive' => true,
        'show_in_rest'=> true,
        'menu_icon'   => 'dashicons-lightbulb',
        'supports'    => array( 'title', 'editor', 'thumbnail', 'excerpt', 'custom-fields' ),
        'rewrite'     => array( 'slug' => 'oplossingen' ),
    ));

    // Getuigenissen
    register_post_type( 'testimonials', array(
        'labels'      => array( 'name' => 'Testimonials', 'singular_name' => 'Testimonial' ),
        'public'      => true,
        'show_in_rest'=> true,
        'menu_icon'   => 'dashicons(testimonial)',
        'supports'    => array( 'title', 'editor', 'thumbnail' ),
    ));

    // Taxonomieën vertaalbaar maken
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
    // Font Preloading
    $font_path = '/assets/fonts/inter-var.woff2';
    if ( file_exists( get_theme_file_path( $font_path ) ) ) {
        echo '<link rel="preload" href="' . get_theme_file_uri( $font_path ) . '" as="font" type="font/woff2" crossorigin>' . "\n";
    }
}
add_action( 'wp_head', 'hyla_performance_head' );

// AVIF Support
add_filter( 'upload_mimes', function( $mimes ) {
    $mimes['avif'] = 'image/avif';
    return $mimes;
});

// JS Deferral
add_filter('script_loader_tag', function($tag, $handle) {
    if (is_admin() || strpos($handle, 'jquery') !== false) return $tag;
    return str_replace(' src', ' defer src', $tag);
}, 10, 2);

// Cleanup voor snellere laadtijd
add_action('init', function() {
    remove_action('wp_head', 'print_emoji_detection_script', 7);
    remove_action('wp_print_styles', 'print_emoji_styles');
});

/**
 * 5. TRACKING & CONSENT (GTM + DebugView)
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
        // GA4 DebugView activatie (Acceptatiecriterium)
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
 * 6. MEERTALIGHEID (Polylang Pro Ruggengraat)
 */
add_action( 'init', function() {
    if ( function_exists( 'pll_register_string' ) ) {
        pll_register_string( 'HYLA CTA', 'Vraag een gratis demo aan', 'Thema Oplossingen', true );
        pll_register_string( 'HYLA CTA', 'Ontdek meer', 'Thema Oplossingen', true );
        pll_register_string( 'HYLA Footer', 'Alle rechten voorbehouden', 'Footer', false );
    }
});

// Taalwisselaar shortcode placeholder
add_shortcode('hyla_language_switcher', function() {
    if (function_exists('pll_the_languages')) {
        return '<ul class="hyla-lang-switch">' . pll_the_languages(array('echo' => 0)) . '</ul>';
    }
    return '<!-- Polylang niet actief -->';
});