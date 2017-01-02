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
		<div class="social-footer col-xs-12 col-md-12">
		<?php
			// Showing social links
			do_action('nateserk_tinycup_action_show_social_options');
		?>
		</div>
		<nav id="site-navigation" class="main-navigation" role="navigation">
			<div class="col-xs-12 col-md-12">
				<?php
					// Show legal menu
					if ( has_nav_menu( 'menu-footer') ) :
						do_action('nateserk_tinycup_action_setup_menu', 'menu-footer');
				 	endif;
				 ?>
			</div>
		</nav>
		<div class="col-md-12 site-info">
			<?php
			do_action('nateserk_tinycup_action_copyright');
			?>
			<p><?php printf( esc_html__( 'Design and Powered By: %1$s.', 'nateserk_tinycup' ), '<a href="https://automattic.com/" rel="designer">NateSerk TinyCup</a>' ); ?></p>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php
wp_footer();
do_action('nateserk_tinycup_action_after_footer');
?>

</body>
</html>
