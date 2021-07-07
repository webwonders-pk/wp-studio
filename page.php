<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package wpstudio
 * * NOPE
 */

get_header(); ?>

<div class="wrap">
	<div id="primary" class="row">
		<main id="main" class="col-sm-8" role="main">

			<?php
			while ( have_posts() ) :
				the_post();

				get_template_part( 'template-parts/page/content', 'page' );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End the loop.
			?>

		<div class="col-sm-4">
			<?php get_sidebar(); ?>
		</div>
	</div><!-- #primary -->
</div><!-- .wrap -->

<?php
get_footer();
