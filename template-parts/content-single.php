<?php
/**
 * Template part for displaying a single post.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package nateserk-tinycup
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="col-md-12 entry-header">
		<?php
		if ( is_single() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;

		if( has_post_thumbnail() ){
			//$thumbnail_size = 'full';
			$tb_size = 'full';
			$tb_attr = array("class"=>"img-thumbnail", "title"=>get_the_title() );

			echo get_the_post_thumbnail( null, $tb_size, $tb_attr);
		}

		if ( 'post' === get_post_type() ) : ?>
		<div class="col-md-12 entry-meta">
			<?php
				nateserk_tinycup_posted_on();
			?>
		</div><!-- .entry-meta -->
		<?php
		endif; ?>
	</header><!-- .entry-header -->

	<div class="col-md-12 entry-content">
		<?php
			the_content( sprintf(
				/* translators: %s: Name of current post. */
				wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'nateserk_tinycup' ), array( 'span' => array( 'class' => array() ) ) ),
				the_title( '<span class="screen-reader-text">"', '"</span>', false ) // TODO: Figure this out to center it
			) );

			// Pagination within this given page or post
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'nateserk_tinycup' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php
		 	do_action("nateserk_tinycup_related_posts", get_the_ID() );
			nateserk_tinycup_entry_footer();
		?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
