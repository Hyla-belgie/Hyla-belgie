<?php
/**
 * Title: HYLA Glass Header
 * Slug: hyla/header-glass
 * Categories: header
 * Block Types: core/template-part/header
 *
 */
?>

<div id="hyla-scroll-trigger" style="position: absolute; top: 0; left: 0; height: 1px; width: 1px; pointer-events: none; visibility: hidden;"></div>

<!-- wp:group {"tagName":"header","align":"full","className":"hyla-header is-style-hyla-glass","layout":{"type":"constrained","contentSize":"1280px"}} -->
<header class="wp-block-group alignfull hyla-header is-style-hyla-glass">

    <!-- wp:group {"className":"hyla-header-inner","layout":{"type":"flex","justifyContent":"space-between","verticalAlignment":"center","flexWrap":"nowrap"}} -->
    <div class="wp-block-group hyla-header-inner">

        <!-- wp:site-logo {"height":100} /-->

        <!-- wp:group {"tagName":"nav","className":"hyla-navigation-manual","layout":{"type":"flex","justifyContent":"center","flexWrap":"nowrap"}} -->
        <nav class="wp-block-group hyla-navigation-manual">
            <a href="/home" class="hyla-nav-link is-active">Home</a>
            <a href="/Prive" class="hyla-nav-link">Prive</a>
            <a href="/Professioneel" class="hyla-nav-link">Professioneel</a>
        </nav>
        <!-- /wp:group -->

        <!-- wp:group {"layout":{"type":"flex","verticalAlignment":"center","flexWrap":"nowrap"}} -->
        <div class="wp-block-group">

            <!-- wp:shortcode -->
            [hyla_language_switcher]
            <!-- /wp:shortcode -->

            <!-- wp:buttons -->
            <div class="wp-block-buttons">
                <!-- wp:button {"className":"hyla-button-primary"} -->
                <div class="wp-block-button hyla-button-primary">
                    <a class="wp-block-button__link wp-element-button" href="/contact">
                        Contact Us!
                    </a>
                </div>
                <!-- /wp:button -->
            </div>
            <!-- /wp:buttons -->

        </div>
        <!-- /wp:group -->

    </div>
    <!-- /wp:group -->

</header>
<!-- /wp:group -->

<script>
document.addEventListener('DOMContentLoaded', () => {
    const header = document.querySelector('.hyla-header');
    const trigger = document.querySelector('#hyla-scroll-trigger');

    // --- Dynamic Active Link Logic ---
    const currentPath = window.location.pathname.toLowerCase().replace(/\/$/, ""); // Gets current path and strips trailing slash
    const navLinks = document.querySelectorAll('.hyla-nav-link');

    navLinks.forEach(link => {
        // Strip out the hardcoded default active class first
        link.classList.remove('is-active'); 
        
        const linkPath = new URL(link.href, window.location.origin).pathname.toLowerCase().replace(/\/$/, "");
        
        // Match the path or default back to home if path is empty
        if (currentPath === linkPath || (currentPath === "" && linkPath === "/home")) {
            link.classList.add('is-active');
        }
    });
    // ---------------------------------

    if (header && trigger) {
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (!entry.isIntersecting) {
                    header.classList.add('is-scrolled');
                } else {
                    header.classList.remove('is-scrolled');
                }
            });
        }, { 
            root: null,
            threshold: 0 
        });

        observer.observe(trigger);
    }
});
</script>