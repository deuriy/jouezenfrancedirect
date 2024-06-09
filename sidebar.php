<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Jouer_en_France_direct
 */

if ( ! is_active_sidebar( 'top-line' ) ) {
	return;
}
?>

<!-- <aside id="secondary" class="widget-area"> -->
	<?php dynamic_sidebar( 'top-line' ); ?>
<!-- </aside> -->
<!-- #secondary -->
