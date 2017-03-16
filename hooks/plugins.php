<?php
/**
* plugins.php
* External plug-ins integrated to this theme
*/

/**
* Show an option to share contents via external plugins (i.e. Facebook, Twitter, Reddit)
*
*/
if ( ! function_exists( 'nateserk_tinycup_show_external_share_options' ) ) :

    function nateserk_tinycup_show_external_share_options() {
        $custom_options = nateserk_tinycup_get_theme_options();

        // show FB Like and Share
        if( $custom_options['nateserk_tinycup_fbapp_social_like_enable'] == true && !empty($custom_options['nateserk_tinycup-fbapp_Id']) ) {
        ?>
            <div class="col-md-12 share-section">
              <div class="fb-like" data-href="<? echo get_permalink(); ?>" data-layout="<?php echo $custom_options['nateserk_tinycup_fbapp_social_like_layout']; ?>" data-action="like" data-size="large" data-show-faces="false" data-share="<?php echo $custom_options['nateserk_tinycup_fbapp_social_like_include_share']; ?>"></div>
            </div>
            <div class="clearfix"></div>
        <?php
        }
    }
endif;
add_action( 'nateserk_tinycup_show_external_share_options', 'nateserk_tinycup_show_external_share_options', 10);
