<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package gloc_2022
 */

if ( ! is_active_sidebar( 'footer-1' ) ) {
	return;
}
?>

<div id="footer-widgets" class="widget-area widget-horizontal">
	<?php dynamic_sidebar( 'footer-1' ); ?>
</div>
