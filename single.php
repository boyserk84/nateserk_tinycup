<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package nateserk-tinycup
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php
		while ( have_posts() ) : the_post();

			get_template_part( 'template-parts/content-single', get_post_format() );

			// Pagination for going to the next or previous post
			the_post_navigation(
				array(
					'prev_text' => '<span class="col-xs-12 col-md-12"><i class="fa fa-arrow-circle-left fa-5x" aria-hidden="true"></i> <h2>%title</h2></span>',
					'next_text' => '<span class="col-xs-12 col-md-12" style="text-align:center;"><i class="fa fa-arrow-circle-right fa-5x" aria-hidden="true"></i> <h2>%title</h2></span>'
				)
			);

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
