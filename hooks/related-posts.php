<?php
/**
 * Display related posts from same tags
 *
 * @param int $post_id
 * @return void
 *
 */
if ( !function_exists('nateserk_tinycup_related_post_below') ) :

    function nateserk_tinycup_related_post_below( $post_id ) {
        $options = nateserk_tinycup_get_theme_options();
        if( $options['nateserk_tinycup-enable-related-posts'] == false ){
            return;
        }

        $items = null;
        $isCategory = false;
        if ( $options['nateserk_tinycup-related-posts-type'] == 'category') {
            $items = get_the_category( $post_id );
            $isCategory = true;
        } else {
            $items = get_the_tags( $post_id );
        }

        $show_per_page = $options['nateserk_tinycup-related-posts-per-page'];

        if ($items) {
            $items_ids = array();
            foreach ($items as $item) {
                $items_ids[] = $item->term_id;
            }
            ?>
            <div class="related-post-wrapper">
              <div class="col-md-3" style="text-align:left;">
                <h3>
                    <span><?php _e('You may also like...', 'nateserk_tinycup'); ?></span>
                </h3>
              </div>
              <div class="col-md-9"><hr width="100%"></div>
              <div class="clearfix"></div>
                <div class="featured-entries-col masonry-start featured-related-posts">
                    <?php
                    if ( $isCategory == false )
                    {
                        //tags
                        $post_args = array(
                            'tag__in'            => $items_ids,
                            'post__not_in'       => array($post_id),
                            'post_type'          => 'post',
                            'posts_per_page'     => $show_per_page,
                            'post_status'        => 'publish',
                            'ignore_sticky_posts'=> true
                        );
                    } else {
                        // category
                        $post_args = array(
                            'category__in'       => $items_ids,
                            'post__not_in'       => array($post_id),
                            'post_type'          => 'post',
                            'posts_per_page'     => $show_per_page,
                            'post_status'        => 'publish',
                            'ignore_sticky_posts'=> true
                        );
                    }

                    $featured_query = new WP_Query( $post_args );

                    while ( $featured_query->have_posts() ) : $featured_query->the_post();
                        get_template_part( 'template-parts/content-related', 'related' );
                    endwhile;
                    wp_reset_query();
                    ?>
                </div>
                <div class="clearfix"></div>
            </div>
            <?php
        }
    }

endif;

add_action( 'nateserk_tinycup_related_posts', 'nateserk_tinycup_related_post_below', 10, 1 );
