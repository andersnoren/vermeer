<?php
/**
 * Title: Loop
 * Slug: vermeer/hidden-loop
 * Categories: hidden
 * Inserter: no
 */
?>

<!-- wp:query {"queryId":1,"query":{"perPage":12,"pages":"100","offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","sticky":"","inherit":true},"layout":{"type":"default"}} -->
<div class="wp-block-query">
	<!-- wp:post-template {"style":{"spacing":{"blockGap":"var:preset|spacing|90"}},"layout":{"type":"default"}} -->
	<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|70"}},"layout":{"type":"default"}} -->
	<div class="wp-block-group">
		<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|70"}},"layout":{"type":"constrained"}} -->
		<div class="wp-block-group alignwide">
			<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"constrained"}} -->
			<div class="wp-block-group">
				<!-- wp:post-date {"isLink":true,"style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast-2"}}}},"textColor":"contrast-2"} /-->

				<!-- wp:post-title {"isLink":true} /-->
			</div>
			<!-- /wp:group -->

			<!-- wp:post-featured-image {"isLink":true,"align":"wide"} /-->
		</div>
		<!-- /wp:group -->

		<!-- wp:post-content {"layout":{"type":"constrained"}} /-->
	</div>
	<!-- /wp:group -->
	<!-- /wp:post-template -->

	<!-- wp:query-no-results -->
	<!-- wp:group {"layout":{"type":"constrained"}} -->
	<div class="wp-block-group"><!-- wp:paragraph -->
		<p><?php echo esc_html_x('No results found.', 'Text shown when no query results are found.', 'vermeer');?></p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->
	<!-- /wp:query-no-results -->

	<!-- wp:group {"style":{"spacing":{"margin":{"top":"var:preset|spacing|90","bottom":"0"}}},"className":"hide-empty","layout":{"type":"constrained","justifyContent":"center"}} -->
	<div class="wp-block-group hide-empty" style="margin-top:var(--wp--preset--spacing--90);margin-bottom:0">
		<!-- wp:query-pagination {"paginationArrow":"arrow","layout":{"type":"flex","justifyContent":"space-between"}} -->
		<!-- wp:query-pagination-previous /-->

		<!-- wp:query-pagination-next /-->
		<!-- /wp:query-pagination -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:query -->