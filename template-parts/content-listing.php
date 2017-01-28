<?php
/**
* content-listing.php
* Template for displaying the list of items within a page with a custom pagination.
* i.e. index or archive page
*/


/* Start the Loop */
while ( have_posts() ) : the_post();

  /*
   * Include the Post-Format-specific template for the content.
   * If you want to override this in a child theme, then include a file
   * called content-___.php (where ___ is the Post Format name) and that will be used instead.
   */
  get_template_part( 'template-parts/content', get_post_format() );

endwhile;
// showing a custom pagination
$custom_args = array(
  'prev_text' => '<span class="col-xs-12 col-md-12 style="text-align:center;"><i class="fa fa-chevron-circle-left fa-5x" aria-hidden="true"></i><h2>More Contents</h2></span>',
  'next_text' => '<span class="col-xs-12 col-md-12" style="text-align:center;"><i class="fa fa-chevron-circle-right fa-5x" aria-hidden="true"></i><h2>Newer Contents</h2></span>'
);
?>
<div class="col-xs-12 col-md-12">
<?php
the_posts_navigation( $custom_args );	// Show all posts
?>
</div>
