<?php
/**
 * The template for displaying comments
 *
 * This is the template that displays the area of the page that contains both the current comments
 * and the comment form.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package nateserk-tinycup
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if ( post_password_required() ) {
	return;
}
?>

<hr width=100%>
<div id="comments" class="comments-area">

	<?php

	$options = nateserk_tinycup_get_theme_options();
	// Check if FB Social comments plug in is turned on.
	$enableFBComment = (!empty($options['nateserk_tinycup-fbapp_Id']) && $options['nateserk_tinycup-fbapp_social_comment_enable'] == true);
	if ( $enableFBComment && comments_open()) :
		// Facebook Comment plugin
		?>
		<h2 class="comments-title">
			<?php
			printf( // WPCS: XSS OK.
				_e("Leave a Comment on \"" .get_the_title() .'"?' )
			);
			?>
		</h2><!-- .comments-title -->
		<?php
		do_action('nateserk_tinycup_action_fbapp_social_comment',
					$options['nateserk_tinycup-fbapp_Id'],
				 	get_permalink(),
					"100%",
					$options['nateserk_tinycup-fbapp_social_comment_numposts']
		);
  else :
		// Wordpress comment
		// You can start editing here -- including this comment!
		if ( have_comments() ) : ?>
			<h2 class="comments-title">
				<?php
					printf( // WPCS: XSS OK.
						esc_html( _nx( 'One thought on &ldquo;%2$s&rdquo;', '%1$s thoughts on &ldquo;%2$s&rdquo;', get_comments_number(), 'comments title', 'nateserk_tinycup' ) ),
						number_format_i18n( get_comments_number() ),
						'<span>' . get_the_title() . '</span>'
					);
				?>
			</h2><!-- .comments-title -->

			<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // Are there comments to navigate through? ?>
			<nav id="comment-nav-above" class="navigation comment-navigation" role="navigation">
				<h2 class="screen-reader-text"><?php esc_html_e( 'Comment navigation', 'nateserk_tinycup' ); ?></h2>
				<div class="nav-links">

					<div class="nav-previous"><?php previous_comments_link( esc_html__( 'Older Comments', 'nateserk_tinycup' ) ); ?></div>
					<div class="nav-next"><?php next_comments_link( esc_html__( 'Newer Comments', 'nateserk_tinycup' ) ); ?></div>

				</div><!-- .nav-links -->
			</nav><!-- #comment-nav-above -->
			<?php endif; // Check for comment navigation. ?>

			<ol class="comment-list">
				<?php
					wp_list_comments( array(
						'style'      => 'ol',
						'short_ping' => true,
					) );
				?>
			</ol><!-- .comment-list -->

			<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // Are there comments to navigate through? ?>
			<nav id="comment-nav-below" class="navigation comment-navigation" role="navigation">
				<h2 class="screen-reader-text"><?php esc_html_e( 'Comment navigation', 'nateserk_tinycup' ); ?></h2>
				<div class="nav-links">

					<div class="nav-previous"><?php previous_comments_link( esc_html__( 'Older Comments', 'nateserk_tinycup' ) ); ?></div>
					<div class="nav-next"><?php next_comments_link( esc_html__( 'Newer Comments', 'nateserk_tinycup' ) ); ?></div>

				</div><!-- .nav-links -->
			</nav><!-- #comment-nav-below -->
			<?php
			endif; // Check for comment navigation.

		endif; // Check for have_comments().


		// If comments are closed and there are comments, let's leave a little note, shall we?
		if ( ! comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) : ?>

			<p class="no-comments"><?php esc_html_e( 'Comments are closed.', 'nateserk_tinycup' ); ?></p>
		<?php
		endif;
		?>
		<div class="col-md-12">
			<?php
			comment_form();
			?>
		</div>
	<?php
	endif;
	?>
</div><!-- #comments -->
