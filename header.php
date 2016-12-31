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
	wp_head();

	do_action( 'nateserk_tinycup_action_in_header' );
?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="container-fluid site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'nateserk_tinycup' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
		<div class="row">
			<div class="col-xs-12 col-md-12 site-branding">
					<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php

				$description = get_bloginfo( 'description', 'display' );
				if ( $description || is_customize_preview() ) : ?>
					<p class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></p>
				<?php
				endif; ?>
			</div><!-- .site-branding -->

		<div class="container-fluid">
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
			// Showing social links
			do_action('nateserk_tinycup_action_show_social_options');
		?>
		</div><!--row-->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
