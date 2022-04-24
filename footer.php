<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package gloc_2022
 */

?>

	<footer id="colophon" class="site-footer">

		<?php get_sidebar( 'footer' ); ?>
		<div class="site-info">
			Grosvenor Light Opera Company, Registered charity No. 1065719
			<span class="sep"> | </span>
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: by %1$s.', 'gloc-2022' ), 'J. Mark Pim' );
				?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
