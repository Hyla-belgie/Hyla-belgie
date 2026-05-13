<?php
/**
 * Title: HYLA Premium Footer
 * Slug: hyla/footer-premium
 * Categories: footer
 * Block Types: core/template-part/footer
 */
?>

<!-- wp:group {"tagName":"footer","align":"full","className":"hyla-footer","layout":{"type":"constrained"}} -->
<footer class="wp-block-group alignfull hyla-footer">

    <!-- wp:group {"className":"hyla-footer-container","layout":{"type":"constrained"}} -->
    <div class="wp-block-group hyla-footer-container">

        <!-- wp:group {"className":"hyla-footer-top","layout":{"type":"flex","justifyContent":"space-between","verticalAlignment":"top","flexWrap":"wrap"}} -->
        <div class="wp-block-group hyla-footer-top">

            <!-- wp:group {"className":"hyla-footer-brand","layout":{"type":"constrained"}} -->
            <div class="wp-block-group hyla-footer-brand">
                <!-- wp:image {"width":"140px","sizeSlug":"full","linkDestination":"custom","href":"/","className":"hyla-footer-logo"} -->
                <figure class="wp-block-image size-full is-resized hyla-footer-logo">
                    <a href="/"><img src="https://via.placeholder.com/280x90?text=HYLA+LOGO" alt="HYLA België" style="width:140px"/></a>
                </figure>
                <!-- /wp:image -->

                <!-- wp:paragraph {"className":"hyla-footer-description"} -->
                <p class="hyla-footer-description">HYLA België levert premium lucht- en reinigingssystemen voor gezinnen en professionals die kiezen voor een gezondere leefomgeving.</p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->

            <!-- wp:group {"className":"hyla-footer-links","layout":{"type":"flex","flexWrap":"wrap","verticalAlignment":"top"}} -->
            <div class="wp-block-group hyla-footer-links">
                
                <!-- wp:group {"layout":{"type":"constrained"}} -->
                <div class="wp-block-group">
                    <h5>Ontdek</h5>
                    <!-- wp:navigation {"overlayMenu":"never","className":"hyla-footer-navigation","layout":{"type":"flex","orientation":"vertical"}} -->
                        <!-- wp:navigation-link {"label":"Home","url":"/"} /-->
                        <!-- wp:navigation-link {"label":"Oplossingen","url":"/oplossingen"} /-->
                        <!-- wp:navigation-link {"label":"Professioneel","url":"/professioneel"} /-->
                        <!-- wp:navigation-link {"label":"Prive","url":"/prive"} /-->
                    <!-- /wp:navigation -->
                </div>
                <!-- /wp:group -->

                <!-- wp:group {"layout":{"type":"constrained"}} -->
                <div class="wp-block-group">
                    <h5>Bedrijf</h5>
                    <!-- wp:navigation {"overlayMenu":"never","className":"hyla-footer-navigation","layout":{"type":"flex","orientation":"vertical"}} -->
                        <!-- wp:navigation-link {"label":"Over Ons","url":"/over-ons"} /-->
                        <!-- wp:navigation-link {"label":"Blog","url":"/blog"} /-->
                        <!-- wp:navigation-link {"label":"Contact","url":"/contact"} /-->
                        <!-- wp:navigation-link {"label":"Service","url":"/service"} /-->
                    <!-- /wp:navigation -->
                </div>
                <!-- /wp:group -->

                <!-- wp:group {"className":"hyla-footer-contact-col","layout":{"type":"constrained"}} -->
                <div class="wp-block-group hyla-footer-contact-col">
                    <h5>Contact</h5>
                    <!-- wp:paragraph --><p>HYLA België<br>België</p><!-- /wp:paragraph -->
                    <!-- wp:paragraph --><p>info@hyla-belgie.be<br>+32 XXX XX XX XX</p><!-- /wp:paragraph -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->

        </div>
        <!-- /wp:group -->

        <!-- wp:separator {"className":"hyla-footer-separator"} -->
        <hr class="wp-block-separator hyla-footer-separator"/>
        <!-- /wp:separator -->

        <!-- wp:group {"className":"hyla-footer-bottom","layout":{"type":"flex","justifyContent":"space-between","verticalAlignment":"center","flexWrap":"wrap"}} -->
        <div class="wp-block-group hyla-footer-bottom">
            <!-- wp:paragraph --><p>© 2026 HYLA België — Alle rechten voorbehouden</p><!-- /wp:paragraph -->
            <!-- wp:navigation {"overlayMenu":"never","className":"hyla-footer-legal","layout":{"type":"flex","flexWrap":"nowrap"}} -->
                <!-- wp:navigation-link {"label":"Privacy","url":"/privacybeleid"} /-->
                <!-- wp:navigation-link {"label":"Cookies","url":"/cookiebeleid"} /-->
            <!-- /wp:navigation -->
        </div>
        <!-- /wp:group -->

    </div>
    <!-- /wp:group -->

</footer>
<!-- /wp:group -->