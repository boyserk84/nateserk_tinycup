<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package nateserk-tinycup
 */

$options = nateserk_tinycup_get_theme_options();
$perRow = $options['nateserk_tinycup-show-per-row'];
$divVal = "col-xs-12 col-md-" .(12/$perRow);
?>
<div class="<?php echo $divVal; ?>">
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php
		the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		get_template_part( 'template-parts/content-item', get_post_format() );
		?>
	</header><!-- .entry-header -->
</article><!-- #post-## -->
</div>
