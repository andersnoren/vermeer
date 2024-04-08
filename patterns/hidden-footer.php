<?php
/**
 * Title: Footer
 * Slug: van-gogh/hidden-footer
 * Inserter: no
 */
?>

<!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast-2"}}}},"textColor":"contrast-2","className":"theme-author-credit"} -->
<p class="has-text-align-center theme-author-credit has-contrast-2-color has-text-color has-link-color"><?php
	/* Translators: Theme author link. */
	$theme_author_link = '<a href="' . esc_url( __( 'https://wordpress.org', 'van-gogh' ) ) . '" rel="nofollow">Anders Norén</a>';
	echo sprintf(
		/* Translators: Theme by Anders Norén */
		esc_html__( 'Theme by %1$s', 'van-gogh' ),
		$theme_author_link
	);
	?></p>
<!-- /wp:paragraph -->