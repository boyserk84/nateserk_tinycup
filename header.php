<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package nateserk-tinycup
 */

// Preload actions and initializer
// @hooked
do_action( 'nateserk_tinycup_action_before_head' );?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php
	// Google Analytic setup
	do_action( 'nateserk_tinycup_action_set_google_analytic_tag_header');

	// Wordpress Header setup
	wp_head();

	// Theme specific header setup
	do_action( 'nateserk_tinycup_action_in_header' );
?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="container-fluid site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'nateserk_tinycup' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
		<div class="row">
			
		<?php 
			$options = nateserk_tinycup_get_theme_options();
			$isDefaultComposition = false;
			// Header composition
			if ( $options['nateserk_tinycup-header-composition-option'] == 'left' ):
				do_action('nateserk_tinycup_set_site_header_left_composition');
			elseif ( $options['nateserk_tinycup-header-composition-option'] == 'right' ):
				do_action('nateserk_tinycup_set_site_header_right_composition');
			else:
				do_action('nateserk_tinycup_set_site_header_center_composition');
				$isDefaultComposition = true;
				?>
				<div class="container-fluid">
					<?php
					// Showing social links
					do_action('nateserk_tinycup_action_show_social_options');
					?>
				</div><!--container-fluid-->
			<?php
			endif;
		?>

		<?php
			// Only default/center header composition shows navigation under social links
			if ($isDefaultComposition == true):
		?>
			<div class="container-fluid"><!--menu navigation-->
					<nav class="navbar" role="navigation">
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
						<i class="fa fa-bars fa-3x" aria-hidden="true"></i>
						</button>
					</div><!--navbar-header-->
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse navbar-ex1-collapse">
							<?php do_action('nateserk_tinycup_action_setup_menu', 'menu-header'); ?>
					</div><!-- navbar-ex1-collapse -->
					</nav><!--navbar-->
			</div><!--container-fluid-->
		<?php
			endif;
		?>

		<?php
			// Show a header image
			$headerImage = get_header_image();
			if ( !empty($headerImage) ) :
		?>
			<div class="container-fluid" style="margin-bottom:35px;"><!--container-fluid header image-->
				<img src="<?php echo $headerImage; ?>" alt="<?php echo( get_bloginfo( 'title' ) ); ?>" class="img-thumbnail"/>
			</div><!--container-fluid-->
		<?php
			endif;
		?>
		</div><!--row-->
		<?php
		// header widget
		if ( is_active_sidebar( 'sidebar-header' ) ) : ?>
		<aside id="secondary" class="widget-area" role="complementary">
			<?php dynamic_sidebar( 'sidebar-header' ); ?>
		</aside><!-- #secondary -->
		<?php
		endif;?>
	</header><!-- #masthead -->

	<div id="content" class="site-content">
