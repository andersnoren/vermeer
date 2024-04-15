<?php
/**
 * Title: Home
 * Slug: vermeer/hidden-home
 * Categories: hidden
 * Inserter: no
 */
?>
<!-- wp:template-part {"slug":"header","className":"vermeer-is-fixed-title-header"} /-->

<!-- wp:group {"tagName":"main","metadata":{"name":"Main"},"align":"full","style":{"spacing":{"blockGap":"var:preset|spacing|80"}},"layout":{"type":"constrained"}} -->
<main class="wp-block-group alignfull">
	<!-- wp:columns {"align":"full","style":{"spacing":{"blockGap":{"top":"0","left":"0"}}}} -->
	<div class="wp-block-columns alignfull"><!-- wp:column {"verticalAlignment":"stretch"} -->
		<div class="wp-block-column is-vertically-aligned-stretch">
			<!-- wp:group {"metadata":{"name":"Cover Sticky Wrapper"},"style":{"position":{"type":"sticky","top":"0px"}},"layout":{"type":"default"}} -->
			<div class="wp-block-group">
				<!-- wp:cover {"url":"<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/vincent-van-gogh.jpg","dimRatio":0,"customOverlayColor":"#40372c","isUserOverlayColor":true,"minHeight":100,"minHeightUnit":"vh","style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"}}},"className":"is-style-vermeer-cover-mobile-3x4","layout":{"type":"default"}} -->
				<div class="wp-block-cover is-style-vermeer-cover-mobile-3x4"
					style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;min-height:100vh"><span
						aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"
						style="background-color:#40372c"></span><img class="wp-block-cover__image-background" alt=""
						src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/vincent-van-gogh.jpg"
						data-object-fit="cover" />
					<div class="wp-block-cover__inner-container">
						<!-- wp:paragraph {"align":"center","placeholder":"Write title…","fontSize":"large"} -->
						<p class="has-text-align-center has-large-font-size"></p>
						<!-- /wp:paragraph -->
					</div>
				</div>
				<!-- /wp:cover -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"verticalAlignment":"bottom","style":{"spacing":{"blockGap":"0"}}} -->
		<div class="wp-block-column is-vertically-aligned-bottom">
			<!-- wp:group {"metadata":{"name":"Marquee Title Spacer"},"className":"hide-when-colums-are-stacked","layout":{"type":"default"},"fontSize":"huge-title"} -->
			<div class="wp-block-group hide-when-colums-are-stacked has-huge-title-font-size">
				<!-- wp:spacer {"height":"1em"} -->
				<div style="height:1em" aria-hidden="true" class="wp-block-spacer"></div>
				<!-- /wp:spacer -->
			</div>
			<!-- /wp:group -->

			<!-- wp:group {"metadata":{"name":"Profile Content"},"style":{"spacing":{"blockGap":"var:preset|spacing|70","padding":{"top":"var:preset|spacing|body-margin","left":"var:preset|spacing|body-margin","right":"var:preset|spacing|body-margin"}}},"layout":{"type":"constrained","justifyContent":"left"}} -->
			<div class="wp-block-group"
				style="padding-top:var(--wp--preset--spacing--body-margin);padding-right:var(--wp--preset--spacing--body-margin);padding-left:var(--wp--preset--spacing--body-margin)">
				<!-- wp:group {"metadata":{"name":"Biography"},"layout":{"type":"constrained"}} -->
				<div class="wp-block-group"><!-- wp:paragraph -->
					<p>
						<?php echo esc_html_x('I am Johannes Vermeer, born in 1853. I paint with fervent passion, crafting celebrated works despite some personal struggles. My art resonates worldwide, immortalizing my unique perspective and inspiring generations with its enduring beauty.', 'Home starting content: Profile', 'vermeer');?>
					</p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->

				<!-- wp:group {"metadata":{"name":"Links"},"layout":{"type":"constrained","contentSize":"395px","justifyContent":"left"}} -->
				<div class="wp-block-group">
					<!-- wp:navigation {"overlayMenu":"never","className":"is-style-vermeer-separated-with-arrows","layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->

						<!-- wp:navigation-link {"label":"<?php echo esc_html_x('My Blog', 'Home starting content: Navigation link text', 'vermeer');?>","url":"#"} /-->
						<!-- wp:navigation-link {"label":"<?php echo esc_html_x('My Flickr', 'Home starting content: Navigation link text', 'vermeer');?>","url":"#"} /-->
						<!-- wp:navigation-link {"label":"<?php echo esc_html_x('Buy My Artwork', 'Home starting content: Navigation link text', 'vermeer');?>","url":"#"} /-->

					<!-- /wp:navigation -->
				</div>
				<!-- /wp:group -->

				<!-- wp:social-links {"iconColor":"base","iconColorValue":"#131316","iconBackgroundColor":"contrast","iconBackgroundColorValue":"#ECECE9","className":"is-style-default"} -->
				<ul class="wp-block-social-links has-icon-color has-icon-background-color is-style-default">
					<!-- wp:social-link {"url":"https://facebook.com","service":"facebook"} /-->

					<!-- wp:social-link {"url":"https://instagram.com","service":"instagram"} /-->

					<!-- wp:social-link {"url":"https://linkedin.com","service":"linkedin"} /-->
				</ul>
				<!-- /wp:social-links -->
			</div>
			<!-- /wp:group -->

			<!-- wp:template-part {"slug":"footer","tagName":"footer","area":"footer","align":"wide"} /-->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</main>
<!-- /wp:group -->