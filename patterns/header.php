<?php
/**
 * Title: HYLA Glass Header
 * Slug: hyla/header-glass
 * Categories: header
 * Block Types: core/template-part/header
 */
?>

<!-- wp:group {"tagName":"header","align":"full","className":"hyla-header is-style-hyla-glass","layout":{"type":"constrained","contentSize":"1280px"}} -->
<header class="wp-block-group alignfull hyla-header is-style-hyla-glass">

	<!-- wp:group {"className":"hyla-header-inner","layout":{"type":"flex","justifyContent":"space-between","verticalAlignment":"center","flexWrap":"nowrap"}} -->
	<div class="wp-block-group hyla-header-inner">

		<!-- wp:site-logo {"height":100} /-->

		<!-- wp:navigation {"overlayMenu":"mobile","className":"hyla-navigation","layout":{"type":"flex","justifyContent":"center"}} /-->

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