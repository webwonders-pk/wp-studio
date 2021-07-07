<?php
/**
 * The front page template file
 *
 * If the user has selected a static page for their homepage, this is what will
 * appear.
 * Learn more: https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package wpstudio
 * * NOPE
 */

get_header(); ?>
<div class="wrap">
	<div id="primary" class="row">
		<main id="main" class="col-sm-8" role="main">

		<?php
		// Show the selected front page content.
		if ( have_posts() ) :
			while ( have_posts() ) :
				the_post();
				get_template_part( 'template-parts/page/content', 'front-page' );
			endwhile;
		else :
			get_template_part( 'template-parts/post/content', 'none' );
		endif;
		?>

		</main><!-- #main -->

		<div class="col-sm-4">
			<?php get_sidebar(); ?>
		</div>
	</div><!-- #primary -->
</div><!-- .wrap -->

<?php
get_footer();