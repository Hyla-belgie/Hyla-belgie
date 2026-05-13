<?php
/**
 * HYLA België 2026 - Core Plumbing
 * Performance-first FSE architecture
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/* =========================================================
   1. SEO + SECURITY + PERFORMANCE HEAD
========================================================= */

function hyla_seo_plumbing() {

	$host = $_SERVER['HTTP_HOST'] ?? '';

	/*
	|--------------------------------------------------------------------------
	| Noindex for staging/local
	|--------------------------------------------------------------------------
	*/
	if (
		strpos( $host, 'local' ) !== false ||
		strpos( $host, 'staging' ) !== false ||
		strpos( $host, 'hyla-belgie.be' ) === false
	) {
		echo '<meta name="robots" content="noindex, nofollow, noarchive">' . "\n";
	}

	/*
	|--------------------------------------------------------------------------
	| Canonicals
	|--------------------------------------------------------------------------
	*/
	if ( is_singular() ) {

		echo '<link rel="canonical" href="' . esc_url( get_permalink() ) . '">' . "\n";

	} elseif ( is_home() || is_front_page() ) {

		echo '<link rel="canonical" href="' . esc_url( home_url( '/' ) ) . '">' . "\n";
	}

	/*
	|--------------------------------------------------------------------------
	| Theme Color
	|--------------------------------------------------------------------------
	*/
	echo '<meta name="theme-color" content="#ffffff">' . "\n";

	/*
	|--------------------------------------------------------------------------
	| Critical CSS
	|--------------------------------------------------------------------------
	*/
	?>
	<style id="hyla-critical-css">

		html {
			scroll-behavior: smooth;
		}

		body {
			overflow-x: hidden;
		}

		.wp-block-cover h1 {
			text-wrap: balance;
		}

		.hyla-header {
			min-height: 82px;
		}

	</style>
	<?php
}
add_action( 'wp_head', 'hyla_seo_plumbing', 1 );


/* =========================================================
   2. THEME SETUP
========================================================= */

if ( ! function_exists( 'hyla_setup' ) ) :

	function hyla_setup() {

		add_theme_support( 'wp-block-styles' );
		add_theme_support( 'align-wide' );
		add_theme_support( 'editor-styles' );
		add_theme_support( 'block-patterns' );
		add_theme_support( 'responsive-embeds' );
		add_theme_support( 'custom-line-height' );
		add_theme_support( 'custom-spacing' );

		add_editor_style( 'style.css' );

		register_nav_menus(
			array(
				'primary' => __( 'Hoofdnavigatie', 'hyla-2026' ),
			)
		);
	}

endif;

add_action( 'after_setup_theme', 'hyla_setup' );


/* =========================================================
   3. CUSTOM POST TYPES
========================================================= */

function hyla_register_architecture() {

	/*
	|--------------------------------------------------------------------------
	| Solutions CPT
	|--------------------------------------------------------------------------
	*/
	register_post_type(
		'solutions',
		array(
			'labels' => array(
				'name'          => 'Oplossingen',
				'singular_name' => 'Oplossing',
			),
			'public'       => true,
			'has_archive'  => true,
			'show_in_rest' => true,
			'menu_icon'    => 'dashicons-lightbulb',
			'supports'     => array(
				'title',
				'editor',
				'thumbnail',
				'excerpt',
				'custom-fields',
			),
			'rewrite' => array(
				'slug' => 'oplossingen',
			),
		)
	);

	/*
	|--------------------------------------------------------------------------
	| Testimonials CPT
	|--------------------------------------------------------------------------
	*/
	register_post_type(
		'testimonials',
		array(
			'labels' => array(
				'name'          => 'Testimonials',
				'singular_name' => 'Testimonial',
			),
			'public'       => true,
			'show_in_rest' => true,
			'menu_icon'    => 'dashicons-testimonial',
			'supports'     => array(
				'title',
				'editor',
				'thumbnail',
			),
		)
	);

	/*
	|--------------------------------------------------------------------------
	| Taxonomy
	|--------------------------------------------------------------------------
	*/
	register_taxonomy(
		'solution_category',
		'solutions',
		array(
			'hierarchical' => true,
			'labels'       => array(
				'name' => 'Oplossing Categorieën',
			),
			'show_in_rest' => true,
		)
	);
}

add_action( 'init', 'hyla_register_architecture' );


/* =========================================================
   4. PERFORMANCE
========================================================= */

function hyla_performance_head() {

	/*
	|--------------------------------------------------------------------------
	| Font preload
	|--------------------------------------------------------------------------
	*/
	$font_path = '/assets/fonts/inter-var.woff2';

	if ( file_exists( get_theme_file_path( $font_path ) ) ) {

		echo '<link rel="preload" href="' .
			esc_url( get_theme_file_uri( $font_path ) ) .
			'" as="font" type="font/woff2" crossorigin>' . "\n";
	}
}

add_action( 'wp_head', 'hyla_performance_head' );


/*
|--------------------------------------------------------------------------
| AVIF Support
|--------------------------------------------------------------------------
*/
add_filter(
	'upload_mimes',
	function ( $mimes ) {

		$mimes['avif'] = 'image/avif';

		return $mimes;
	}
);


/*
|--------------------------------------------------------------------------
| Safe JS defer
|--------------------------------------------------------------------------
*/
add_filter(
	'script_loader_tag',
	function ( $tag, $handle ) {

		$exclude = array(
			'jquery',
			'wp-hooks',
			'wp-i18n',
			'wp-element',
			'wp-api-fetch',
		);

		if ( is_admin() || in_array( $handle, $exclude, true ) ) {
			return $tag;
		}

		if ( false === strpos( $tag, ' defer ' ) ) {
			$tag = str_replace( ' src', ' defer src', $tag );
		}

		return $tag;
	},
	10,
	2
);


/*
|--------------------------------------------------------------------------
| Remove WP bloat
|--------------------------------------------------------------------------
*/
add_action(
	'init',
	function () {

		remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
		remove_action( 'wp_print_styles', 'print_emoji_styles' );
	}
);


/* =========================================================
   5. HEADER SCROLL EFFECT
========================================================= */

function hyla_header_scroll_script() {
	?>
	<script>

		document.addEventListener('DOMContentLoaded', function() {

			const header = document.querySelector('.hyla-header');

			if (!header) return;

			function updateHeader() {

				if (window.scrollY > 20) {
					header.classList.add('is-scrolled');
				} else {
					header.classList.remove('is-scrolled');
				}
			}

			updateHeader();

			window.addEventListener('scroll', updateHeader, {
				passive: true
			});

		});

	</script>
	<?php
}

add_action( 'wp_footer', 'hyla_header_scroll_script', 100 );


/* =========================================================
   6. GTM + CONSENT MODE V2
========================================================= */

function hyla_gtm_consent_mode() {

	$host = $_SERVER['HTTP_HOST'] ?? '';

	$is_debug = (
		strpos( $host, 'local' ) !== false ||
		strpos( $host, 'staging' ) !== false
	);

	?>
	<script>

		window.dataLayer = window.dataLayer || [];

		function gtag(){
			dataLayer.push(arguments);
		}

		gtag('consent', 'default', {
			'ad_storage': 'denied',
			'ad_user_data': 'denied',
			'ad_personalization': 'denied',
			'analytics_storage': 'denied',
			'wait_for_update': 500
		});

		<?php if ( $is_debug ) : ?>

		gtag('config', 'G-XXXXXXXXXX', {
			'debug_mode': true
		});

		<?php endif; ?>

	</script>

	<script>
	(function(w,d,s,l,i){
		w[l]=w[l]||[];
		w[l].push({
			'gtm.start': new Date().getTime(),
			event:'gtm.js'
		});

		var f=d.getElementsByTagName(s)[0],
		j=d.createElement(s),
		dl=l!='dataLayer'?'&l='+l:'';

		j.async=true;
		j.src='https://www.googletagmanager.com/gtm.js?id='+i+dl;

		f.parentNode.insertBefore(j,f);

	})(window,document,'script','dataLayer','GTM-XXXXXXX');
	</script>
	<?php
}

add_action( 'wp_head', 'hyla_gtm_consent_mode', 0 );


/* =========================================================
   7. POLYLANG
========================================================= */

add_action(
	'init',
	function () {

		if ( function_exists( 'pll_register_string' ) ) {

			pll_register_string(
				'HYLA CTA',
				'Vraag een gratis demo aan',
				'Thema Oplossingen',
				true
			);

			pll_register_string(
				'HYLA CTA',
				'Ontdek meer',
				'Thema Oplossingen',
				true
			);

			pll_register_string(
				'HYLA Footer',
				'Alle rechten voorbehouden',
				'Footer',
				false
			);
		}
	}
);


/*
|--------------------------------------------------------------------------
| Language switcher shortcode
|--------------------------------------------------------------------------
*/
add_shortcode(
	'hyla_language_switcher',
	function () {

		if ( function_exists( 'pll_the_languages' ) ) {

			return '<div class="hyla-lang-switch-container">' .
				pll_the_languages(
					array(
						'echo' => 0,
						'display_names_as' => 'slug',
					)
				) .
			'</div>';
		}

		return '';
	}
);


/* =========================================================
   8. ACF OPTIONS
========================================================= */

if ( function_exists( 'acf_add_options_page' ) ) {

	acf_add_options_page(
		array(
			'page_title' => 'HYLA Global Settings',
			'menu_title' => 'HYLA Settings',
			'menu_slug'  => 'hyla-settings',
			'capability' => 'edit_posts',
			'redirect'   => false,
		)
	);
}


/* =========================================================
   9. JSON-LD LOCAL BUSINESS
========================================================= */

add_action(
	'wp_head',
	function () {

		$schema = array(
			'@context' => 'https://schema.org',
			'@type'    => 'LocalBusiness',
			'name'     => 'HYLA België',
			'url'      => home_url(),
			'telephone'=> '+32XXXXXXXX',
			'priceRange' => '$$$',
			'address'  => array(
				'@type'           => 'PostalAddress',
				'streetAddress'   => 'HYLA HQ Adres',
				'addressLocality' => 'Stad',
				'postalCode'      => '0000',
				'addressCountry'  => 'BE',
			),
		);

		echo '<script type="application/ld+json">';
		echo wp_json_encode( $schema );
		echo '</script>';
	},
	10
);

/* =========================================================
   ENQUEUE STYLES
========================================================= */

function hyla_enqueue_assets() {

	wp_enqueue_style(
		'hyla-style',
		get_stylesheet_uri(),
		array(),
		wp_get_theme()->get( 'Version' )
	);

}

add_action( 'wp_enqueue_scripts', 'hyla_enqueue_assets' );

function hyla_handle_contact_form() {
    if (isset($_POST['hyla_form_submitted'])) {
        // Sanitize data
        $name    = sanitize_text_field($_POST['hyla_name']);
        $email   = sanitize_email($_POST['hyla_email']);
        $phone   = sanitize_text_field($_POST['hyla_phone']);
        $message = sanitize_textarea_field($_POST['hyla_message']);
        
        $to      = get_option('admin_email'); // Sends to your WP admin email
        $subject = 'Nieuwe Demo Aanvraag: ' . $name;
        $body    = "Naam: $name \nEmail: $email \nTelefoon: $phone \n\nBericht: \n$message";
        $headers = array('Content-Type: text/html; charset=UTF-8', 'From: ' . $name . ' <' . $email . '>');

        wp_mail($to, $subject, nl2br($body), $headers);
        
        // Redirect to a thank you page or back with a success message
        wp_redirect(add_query_arg('contact_success', '1', $_SERVER['HTTP_REFERER']));
        exit;
    }
}
add_action('admin_post_nopriv_hyla_contact', 'hyla_handle_contact_form');
add_action('admin_post_hyla_contact', 'hyla_handle_contact_form');