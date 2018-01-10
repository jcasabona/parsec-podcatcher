<?php
/**
 * The sidebar containing the main widget area.
 *
 * @package Parsec
 */

$sidebar_slug = 'sidebar-1';

if ( ! is_active_sidebar( $sidebar_slug ) ) {
	return;
}
?>

<aside id="left-sidebar" class="widget-area" role="complementary">
	<?php dynamic_sidebar( $sidebar_slug ); ?>
</aside><!-- #secondary -->
