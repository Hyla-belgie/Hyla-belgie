<?php
/**
 * HYLA België 2026 - Core Plumbing (Fase 1A)
 */

/**
 * SEO: Blokkeer indexatie op staging en local omgevingen
 */
function hyla_seo_noindex_staging() {
    $host = $_SERVER['HTTP_HOST'];
    if (strpos($host, 'local') !== false || strpos($host, 'staging') !== false || strpos($host, 'hyla-belgie.be') === false) {
        echo '<meta name="robots" content="noindex, nofollow, noarchive">' . "\n";
    }
}
add_action('wp_head', 'hyla_seo_noindex_staging', 1);

/**
 * SEO: Automatische Canonical Tags
 */
function hyla_output_canonical() {
    if ( is_singular() ) {
        echo '<link rel="canonical" href="' . get_permalink() . '" />' . "\n";
    } elseif ( is_home() || is_front_page() ) {
        echo '<link rel="canonical" href="' . home_url('/') . '" />' . "\n";
    }
}
add_action('wp_head', 'hyla_output_canonical', 2);

if ( ! function_exists( 'hyla_setup' ) ) :
    function hyla_setup() {
        // Ondersteuning voor de Block Editor & Wide Alignment
        add_theme_support( 'wp-block-styles' );
        add_theme_support( 'align-wide' );
        add_theme_support( 'editor-styles' );
        
        // Laad de theme.json styles in de editor
        add_editor_style( 'style.css' );

        // Registreer Navigatie Menu's (voor Polylang)
        register_nav_menus( array(
            'primary' => __( 'Hoofdnavigatie', 'hyla-2026' ),
        ) );
    }
endif;
add_action( 'after_setup_theme', 'hyla_setup' );

/**
 * 1. CUSTOM POST TYPES (CPT) - Oplossingen & Cases
 * Dit creëert de architectuur voor de "Cookie-cutter" sectorpagina's.
 */
function hyla_register_post_types() {
    // Oplossingen (Solutions)
    register_post_type( 'solutions', array(
        'labels'      => array( 'name' => 'Oplossingen', 'singular_name' => 'Oplossing' ),
        'public'      => true,
        'has_archive' => true,
        'show_in_rest'=> true, // Cruciaal voor de Block Editor (Gutenberg)
        'menu_icon'   => 'dashicons-lightbulb',
        'supports'    => array( 'title', 'editor', 'thumbnail', 'excerpt', 'custom-fields' ),
        'rewrite'     => array( 'slug' => 'oplossingen' ),
    ));

    // Getuigenissen (Testimonials)
    register_post_type( 'testimonials', array(
        'labels'      => array( 'name' => 'Testimonials', 'singular_name' => 'Testimonial' ),
        'public'      => true,
        'show_in_rest'=> true,
        'menu_icon'   => 'dashicons-testimonial',
        'supports'    => array( 'title', 'editor', 'thumbnail' ),
    ));
}
add_action( 'init', 'hyla_register_post_types' );

/**
 * 2. PERFORMANCE PLUMBING - Font Preloading & AVIF
 */
function hyla_performance_head() {
    // Preload het belangrijkste font (pas het pad aan zodra je fonts hebt in /assets/fonts/)
    echo '<link rel="preload" href="' . get_theme_file_uri( '/assets/fonts/inter-var.woff2' ) . '" as="font" type="font/woff2" crossorigin>';
    
    // Security/SEO: Noindex voor staging omgevingen (optioneel, check je URL)
    if ( strpos( $_SERVER['HTTP_HOST'], 'local' ) !== false || strpos( $_SERVER['HTTP_HOST'], 'staging' ) !== false ) {
        echo '<meta name="robots" content="noindex, nofollow">';
    }
}
add_action( 'wp_head', 'hyla_performance_head' );

// Sta AVIF uploads toe
function hyla_allow_avif_mime_types( $mimes ) {
    $mimes['avif'] = 'image/avif';
    return $mimes;
}
add_filter( 'upload_mimes', 'hyla_allow_avif_mime_types' );

/**
 * 3. MEERTALIGHEID - Polylang Strings
 */
function hyla_register_strings() {
    if ( function_exists( 'pll_register_string' ) ) {
        pll_register_string( 'HYLA CTA', 'Vraag een gratis demo aan', 'Thema Oplossingen' );
        pll_register_string( 'HYLA CTA', 'Ontdek meer', 'Thema Oplossingen' );
    }
}
add_action( 'init', 'hyla_register_strings' );