<?php
/**
 * The sidebar containing the main widget area.
 *
 * @package Parsec
 */

$sidebar_slug = 'sidebar-home';

if ( ! is_active_sidebar( $sidebar_slug ) ) {
	return;
}
?>

<aside id="right-sidebar" class="widget-area" role="complementary">
	<?php dynamic_sidebar( $sidebar_slug ); ?>
</aside><!-- #secondary -->
