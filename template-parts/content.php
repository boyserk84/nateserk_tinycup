<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package nateserk-tinycup
 */

?>
<div class="col-xs-12 col-md-3">
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php

		the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		?>
		<div class="hovereffect">

		<?php
		if( has_post_thumbnail() ){
			$tb_size = array();
			// TODO: Add an option for listing tb as a circle "img-circle"
			$tb_attr = array("class"=>"img-responsive img-thumbnail", "title"=>get_the_title() );
			echo get_the_post_thumbnail( null, $tb_size, $tb_attr);
		} else {
			?>
			<div class="img-responsive img-thumbnail col-md-12"/>
			<?php
		}
		?>
		<div class="overlay">
			 <h2><?php the_title(); ?></h2>
			 <a class="info" href="<?php echo esc_url( get_permalink() ); ?>"><i class="fa fa-play-circle-o fa-5x" aria-hidden="true"></i></a>
		</div>
	</div><!--hover effect-->
	</header><!-- .entry-header -->
</article><!-- #post-## -->
</div>
