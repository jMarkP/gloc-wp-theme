<?php /* Template Name: Show page */

get_header('show');
?>

	<div class="buy-now-bar">
		<a href="<?php the_ticket_link() ?>">
			<span><i class="fa-solid fa-ticket"></i> Click here to buy tickets for The Grand Duke!</span>
		</a>
	</div>

	<main id="primary" class="site-main">

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'page-show' );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

	</main><!-- #main -->

<?php
// get_sidebar();
get_footer();
