<?php

/**
 * Check and Show social links if enabled
 *
 * @param null
 * @return null
 *
 */
if ( ! function_exists( 'nateserk_tinycup_show_social_options' ) ) :

    function nateserk_tinycup_show_social_options() {
        // Showing social links
        $custom_options = nateserk_tinycup_get_theme_options();
        if( $custom_options['nateserk_tinycup-enable-social'] == true) {
            do_action('nateserk_tinycup_action_display_social_links', $custom_options);
        }
    }
endif;
add_action( 'nateserk_tinycup_action_show_social_options', 'nateserk_tinycup_show_social_options', 10);

/**
 * Display Social Links
 *
 *
 * @param null
 * @return void
 *
 */

if ( !function_exists('nateserk_tinycup_social_links') ) :

    function nateserk_tinycup_social_links( $options ) {
        ?>
        <div class="socials">
            <?php
            if ( !empty( $options['nateserk_tinycup-facebook-url'] ) ) { ?>
                <a href="<?php echo esc_url( $options['nateserk_tinycup-facebook-url'] ); ?>" class="facebook" data-title="Facebook" target="_blank">
                    <span class="font-icon-social-facebook">
                        <i class="fa fa-facebook"></i>
                        <?php
                        //if( 1 == $show_title ){
                          ?>
                            <span><?php _e( 'Facebook','nateserk_tinycup' ); ?></span>
                            <?php
                        }
                        ?>
                    </span>
                </a>
        </div>
        <?php
    }

endif;

add_filter( 'nateserk_tinycup_action_display_social_links', 'nateserk_tinycup_social_links', 10 ,1 );
