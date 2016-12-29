<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package nateserk-tinycup
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<nav id="site-navigation" class="main-navigation" role="navigation">
			<div class="col-xs-12 col-md-12">
				<?php
					// Show legal menu
					if ( has_nav_menu( 'menu-footer') ) {
						wp_nav_menu(
						 array(
							 'theme_location' => 'menu-footer',
							 'menu_id' => 'legal-menu',
							 'menu_class'=>'nav navbar-nav',
							 'container'=> 'ul',
							 'depth'=> 1
							)
						 );
				 	}
				 ?>
			</div>
		</nav>
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'nateserk_tinycup' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'nateserk_tinycup' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'nateserk_tinycup' ), 'nateserk_tinycup', '<a href="https://automattic.com/" rel="designer">Nate K</a>' ); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php
wp_footer();
do_action('nateserk_tinycup_action_after_footer');
?>

</body>
</html>
