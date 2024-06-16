<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package nateserk-tinycup
 */

get_header();

// Showing home modal dialog (if enable)
if ( is_home() ) :
		get_template_part( 'template-parts/content', 'modal' );
endif;
?>
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
		<?php
		// Determine which post category is going to display on the front page
		//$options = nateserk_tinycup_get_theme_options();
		//$categoryToDisplay = $options['nateserk_tinycup-display-category-listing-option'];		
		//if ($categoryToDisplay != "all" && !empty($categoryToDisplay)) {
			// Update which category to display if specific. Otherwise, show all!
		//	query_posts("cat=". $categoryToDisplay); 
		//}

		if ( have_posts() ) :
			if ( is_home() && ! is_front_page() ) : ?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>

			<?php
			endif;
			// Show all listing with a customized pagination
			get_template_part( 'template-parts/content', 'listing');

		else :
			get_template_part( 'template-parts/content', 'none' );

		endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
