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
				<?php
				if ( is_front_page() && is_home() ) : ?>
					<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php
				endif;

				$description = get_bloginfo( 'description', 'display' );
				if ( $description || is_customize_preview() ) : ?>
					<p class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></p>
				<?php
				endif; ?>
			</div><!-- .site-branding -->

		<div class="col-xs-12 col-md-12 site-branding">
				<nav id="site-navigation" class="main-navigation" role="navigation">
					<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
						<?php esc_html_e( 'Primary Menu', 'nateserk_tinycup' ); ?>
					</button>
					<?php wp_nav_menu( array( 'theme_location' => 'menu-1', 'menu_id' => 'primary-menu' ) ); ?>
				</nav><!-- #site-navigation -->
		</div>
		<?php
			// Showing social links
			do_action('nateserk_tinycup_action_show_social_options');
		?>
		</div><!--row-->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
