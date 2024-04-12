<?php
/**
 * Title: Hidden 404
 * Slug: vermeer/hidden-404
 * Categories: hidden
 * Inserter: no
 */
?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"16px"}}},"className":"vermeer-is-fixed-title-header","layout":{"type":"default"}} -->
<div class="wp-block-group vermeer-is-fixed-title-header" style="padding-top:16px"><!-- wp:heading {"level":1,"style":{"color":{"text":"#ffffff"},"elements":{"link":{"color":{"text":"#ffffff"}}}},"className":"is-style-vermeer-marquee-left","fontSize":"huge-title"} -->
<h1 class="wp-block-heading is-style-vermeer-marquee-left has-text-color has-link-color has-huge-title-font-size" style="color:#ffffff"><?php echo __('Error 404', 'vermeer');?></h1>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"tagName":"main","metadata":{"name":"Main"},"align":"full","style":{"spacing":{"blockGap":"var:preset|spacing|80"}},"layout":{"type":"constrained"}} -->
<main class="wp-block-group alignfull"><!-- wp:columns {"align":"full","style":{"spacing":{"blockGap":{"top":"0","left":"0"}}}} -->
<div class="wp-block-columns alignfull"><!-- wp:column {"verticalAlignment":"stretch"} -->
<div class="wp-block-column is-vertically-aligned-stretch"><!-- wp:cover {"overlayColor":"contrast","isUserOverlayColor":true,"minHeight":100,"minHeightUnit":"vh","isDark":false,"className":"is-style-vermeer-cover-mobile-1x1","layout":{"type":"constrained"}} -->
<div class="wp-block-cover is-light is-style-vermeer-cover-mobile-1x1" style="min-height:100vh"><span aria-hidden="true" class="wp-block-cover__background has-contrast-background-color has-background-dim-100 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","placeholder":"Write title…","fontSize":"large"} -->
<p class="has-text-align-center has-large-font-size"></p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"stretch","style":{"spacing":{"blockGap":"0"}}} -->
<div class="wp-block-column is-vertically-aligned-stretch"><!-- wp:group {"style":{"dimensions":{"minHeight":"100%"},"spacing":{"blockGap":"0"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch","verticalAlignment":"space-between"}} -->
<div class="wp-block-group" style="min-height:100%"><!-- wp:group {"metadata":{"name":"Marquee Title Spacer"},"className":"hide-when-colums-are-stacked","layout":{"type":"default"},"fontSize":"huge-title"} -->
<div class="wp-block-group hide-when-colums-are-stacked has-huge-title-font-size"><!-- wp:spacer {"height":"1em"} -->
<div style="height:1em" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"Profile Content"},"style":{"spacing":{"blockGap":"var:preset|spacing|70","padding":{"top":"var:preset|spacing|body-margin","left":"var:preset|spacing|body-margin","right":"var:preset|spacing|body-margin","bottom":"var:preset|spacing|body-margin"}}},"layout":{"type":"constrained","justifyContent":"left"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--body-margin);padding-right:var(--wp--preset--spacing--body-margin);padding-bottom:var(--wp--preset--spacing--body-margin);padding-left:var(--wp--preset--spacing--body-margin)"><!-- wp:group {"metadata":{"name":"Text"},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:paragraph -->
<p><?php echo __('The page you’re looking for could not be found.', 'vermeer');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"Links"},"layout":{"type":"constrained","contentSize":"240px","justifyContent":"left"}} -->
<div class="wp-block-group"><!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"textAlign":"left","width":100,"style":{"border":{"top":{"width":"1px"},"right":{"width":"0px","style":"none"},"bottom":{"width":"0px","style":"none"},"left":{"width":"0px","style":"none"}},"spacing":{"padding":{"left":"0","right":"0"}}},"className":"is-style-vermeer-icon-right-arrow"} -->
<div class="wp-block-button has-custom-width wp-block-button__width-100 is-style-vermeer-icon-right-arrow"><a class="wp-block-button__link has-text-align-left wp-element-button" style="border-top-width:1px;border-right-style:none;border-right-width:0px;border-bottom-style:none;border-bottom-width:0px;border-left-style:none;border-left-width:0px;padding-right:0;padding-left:0" href="<?php echo esc_url( home_url() ); ?>"><?php echo __('Go back', 'vermeer');?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer","tagName":"footer","area":"footer","align":"wide"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></main>
<!-- /wp:group -->