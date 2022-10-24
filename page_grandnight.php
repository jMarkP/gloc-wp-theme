<?php /* Template Name: A grand night for singing */

get_header('grandnight');
?>

	<div class="buy-now-bar">
		<a href="<?php the_ticket_link() ?>">
			<span><i class="fa-solid fa-ticket"></i> Click here to buy tickets for A Grand Night for Singing!</span>
		</a>
	</div>

	<main id="primary" class="site-main grandnight">

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'page-grandnight' );

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
