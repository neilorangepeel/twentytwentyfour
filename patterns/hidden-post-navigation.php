<?php
/**
 * Title: Post navigation
 * slug: twentytwentyfour/post-navigation
 * inserter: no
 */
?>

<!-- wp:group {"tagName":"nav","ariaLabel":"<?php esc_attr_e( 'Posts', 'twentytwentyfour') ?>","style":{"spacing":{"padding":{"bottom":"0vh"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<nav class="wp-block-group" style="padding-bottom:0vh" aria-label="<?php esc_attr_e( 'Posts', 'twentytwentyfour') ?>">
<!-- wp:post-navigation-link {"type":"previous","label":"<?php echo esc_html_x( 'Previous: ', 'Label before the title of the previous post. There is a space after the colon.', 'twentytwentyfour' ); ?>","showTitle":true,"linkLabel":true,"arrow":"arrow"} /-->
<!-- wp:post-navigation-link {"label":"<?php echo esc_html_x( 'Next: ', 'Label before the title of the next post. There is a space after the colon.', 'twentytwentyfour' ); ?>","showTitle":true,"linkLabel":true,"arrow":"arrow"} /-->
</nav>
<!-- /wp:group -->