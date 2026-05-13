<?php
/**
 * Title: HYLA Product Showcase Hero
 * Slug: hyla/product-showcase-hero
 * Categories: featured
 * Inserter: true
 */
?>

<!-- wp:group {"align":"full","className":"hyla-showcase-hero","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull hyla-showcase-hero">

	<!-- wp:group {"className":"hyla-hero-header","layout":{"type":"constrained","contentSize":"800px"}} -->
	<div class="wp-block-group hyla-hero-header">
		<!-- wp:paragraph {"className":"hyla-eyebrow"} -->
		<p class="hyla-eyebrow">Healthy Living • Premium Air Technology</p>
		<!-- /wp:paragraph -->

		<!-- wp:heading {"level":1,"textAlign":"center","className":"hyla-hero-title"} -->
		<h1 class="wp-block-heading has-text-align-center hyla-hero-title">Premium reiniging voor een gezondere leefomgeving</h1>
		<!-- /wp:heading -->
	</div>
	<!-- /wp:group -->

	<!-- wp:columns {"align":"wide","className":"hyla-product-grid"} -->
	<div class="wp-block-columns alignwide hyla-product-grid">
		
		<!-- wp:column {"className":"hyla-product-col"} -->
		<div class="wp-block-column hyla-product-col">
			<!-- wp:group {"className":"hyla-product-card-v2","layout":{"type":"constrained"}} -->
			<div class="wp-block-group hyla-product-card-v2">
				<!-- wp:image {"sizeSlug":"large","linkDestination":"none"} -->
				<figure class="wp-block-image size-large"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/HYLA-Multireiniger.webp' ); ?>" alt="HYLA Multireiniger"/></figure>
				<!-- /wp:image -->

				<!-- wp:group {"className":"hyla-card-content","layout":{"type":"constrained"}} -->
				<div class="wp-block-group hyla-card-content">
					<!-- wp:paragraph {"className":"hyla-product-tag"} -->
					<p class="hyla-product-tag">Healthy Air Technology</p>
					<!-- /wp:paragraph -->

					<!-- wp:heading {"level":3} -->
					<h3 class="wp-block-heading">HYLA Multireiniger</h3>
					<!-- /wp:heading -->

					<!-- wp:buttons -->
					<div class="wp-block-buttons">
						<!-- wp:button {"className":"hyla-button-outline"} -->
						<div class="wp-block-button hyla-button-outline"><a class="wp-block-button__link wp-element-button" href="/multireiniger">Ontdek de multireiniger</a></div>
						<!-- /wp:button -->

						<!-- wp:button {"className":"hyla-button-primary"} -->
						<div class="wp-block-button hyla-button hyla-button-primary"><a class="wp-block-button__link wp-element-button" href="/contact">Vraag een gratis demo aan</a></div>
						<!-- /wp:button -->
					</div>
					<!-- /wp:buttons -->
					 
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"className":"hyla-product-col"} -->
		<div class="wp-block-column hyla-product-col">
			<!-- wp:group {"className":"hyla-product-card-v2","layout":{"type":"constrained"}} -->
			<div class="wp-block-group hyla-product-card-v2">
				<!-- wp:image {"sizeSlug":"large","linkDestination":"none"} -->
				<figure class="wp-block-image size-large"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/HYLA-Stoomreiniger.webp' ); ?>" alt="HYLA Stoomreiniger"/></figure>
				<!-- /wp:image -->

				<!-- wp:group {"className":"hyla-card-content","layout":{"type":"constrained"}} -->
				<div class="wp-block-group hyla-card-content">
					<!-- wp:paragraph {"className":"hyla-product-tag"} -->
					<p class="hyla-product-tag">Deep Steam Technology</p>
					<!-- /wp:paragraph -->

					<!-- wp:heading {"level":3} -->
					<h3 class="wp-block-heading">HYLA Stoomreiniger</h3>
					<!-- /wp:heading -->

					<!-- wp:buttons -->
					<div class="wp-block-buttons">
						<!-- wp:button {"className":"hyla-button-outline"} -->
						<div class="wp-block-button hyla-button-outline"><a class="wp-block-button__link wp-element-button" href="/stoomreiniger">Ontdek de stoomreiniger</a></div>
						<!-- /wp:button -->

						<!-- wp:button {"className":"hyla-button-primary"} -->
						<div class="wp-block-button hyla-button hyla-button-primary"><a class="wp-block-button__link wp-element-button" href="/contact">Vraag een gratis demo aan</a></div>
						<!-- /wp:button -->
					</div>
					<!-- /wp:buttons -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

	</div>
	<!-- /wp:columns -->

	<!-- wp:columns {"align":"wide","className":"hyla-info-grid"} -->
	<div class="wp-block-columns alignwide hyla-info-grid">
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"className":"hyla-info-card","layout":{"type":"constrained"}} -->
			<div class="wp-block-group hyla-info-card">
				<!-- wp:heading {"level":4} -->
				<h4 class="wp-block-heading">Schonere lucht</h4>
				<!-- /wp:heading -->
				<!-- wp:paragraph -->
				<p>Verwijdert fijnstof, allergenen en vervuiling uit uw leefomgeving met waterfiltratie.</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"className":"hyla-info-card","layout":{"type":"constrained"}} -->
			<div class="wp-block-group hyla-info-card">
				<!-- wp:heading {"level":4} -->
				<h4 class="wp-block-heading">Dieptereiniging</h4>
				<!-- /wp:heading -->
				<!-- wp:paragraph -->
				<p>Reinigt oppervlakken en stoffen grondig zonder het gebruik van agressieve chemicaliën.</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"className":"hyla-info-card","layout":{"type":"constrained"}} -->
			<div class="wp-block-group hyla-info-card">
				<!-- wp:heading {"level":4} -->
				<h4 class="wp-block-heading">Gezonder wonen</h4>
				<!-- /wp:heading -->
				<!-- wp:paragraph -->
				<p>De ideale oplossing voor gezinnen met kinderen, huisdieren of allergieën.</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->

	<!-- wp:group {"className":"hyla-hero-footer","layout":{"type":"constrained"}} -->
	<div class="wp-block-group hyla-hero-footer">
		<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
		<div class="wp-block-buttons">
			<!-- wp:button {"className":"hyla-button-outline"} -->
			<div class="wp-block-button hyla-button-outline"><a class="wp-block-button__link wp-element-button" href="/oplossingen">Ontdek HYLA</a></div>
			<!-- /wp:button -->

			<!-- wp:button {"className":"hyla-button-primary"} -->
			<div class="wp-block-button hyla-button hyla-button-primary"><a class="wp-block-button__link wp-element-button" href="/contact">Vraag een gratis demo aan</a></div>
			<!-- /wp:button -->
		</div>
		<!-- /wp:buttons -->
	</div>
	<!-- /wp:group -->

</div>
<!-- /wp:group -->