<?php
/**
* content-related.php
* Show related posts either by category or tags.
*/
?>
<div class="col-xs-12 col-md-3">
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php
		the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		get_template_part( 'template-parts/content-item', get_post_format() );
		?>
	</header><!-- .entry-header -->
</article><!-- #post-## -->
</div>
