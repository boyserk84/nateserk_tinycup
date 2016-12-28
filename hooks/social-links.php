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
            ?>
            <div class="col-xs-12 col-md-12 socials">
              <?php
                do_action('nateserk_tinycup_action_display_social_links', $custom_options);
              ?>
            </div>
            <?php
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
        foreach($options as $key => $value){
            $html_IconDiv = "";
            $html_Url = "";
            $html_class = "";
            $html_dataTitle = "";
            switch($key)
            {
                case "nateserk_tinycup-facebook-url":
                    $html_IconDiv = "fa fa-facebook-square fa-3x";
                    $html_Url = $value;
                    $html_class = "facebook";
                    $html_dataTitle = "Facebook";
                break;

                case "nateserk_tinycup-twitter-url":
                    $html_IconDiv = "fa fa-twitter-square fa-3x";
                    $html_Url = $value;
                    $html_class = "twitter";
                    $html_dataTitle = "Twitter";
                break;

                case "nateserk_tinycup-instagram-url":
                    $html_IconDiv = "fa fa-instagram fa-3x";
                    $html_Url = $value;
                    $html_class = "instagram";
                    $html_dataTitle = "Instagram";
                break;

                case "nateserk_tinycup-google-plus-url":
                    $html_IconDiv = "fa fa-google-plus-square fa-3x";
                    $html_Url = $value;
                    $html_class = "google-plus";
                    $html_dataTitle = "Google-Plus";
                break;

                case "nateserk_tinycup-tumblr-url":
                    $html_IconDiv = "fa fa-tumblr-square fa-3x";
                    $html_Url = $value;
                    $html_class = "tumblr";
                    $html_dataTitle = "Tumblr";
                break;

                case "nateserk_tinycup-snapchat-url":
                    $html_IconDiv = "fa fa-snapchat-square fa-3x";
                    $html_Url = $value;
                    $html_class = "snapchat";
                    $html_dataTitle = "Snapchat";
                break;

                case "nateserk_tinycup-twitch-url":
                    $html_IconDiv = "fa fa-twitch fa-3x";
                    $html_Url = $value;
                    $html_class = "twitch";
                    $html_dataTitle = "Twitch";
                break;

                default:
                break;
            }

            if ( !empty( $html_IconDiv ) ) { ?>
                  <a href="<?php echo esc_url( $html_Url ); ?>" class="<?php echo $html_class; ?>" data-title="<?php echo $html_dataTitle; ?>" target="_blank">
                      <i class="<?php echo $html_IconDiv; ?>"></i></a>
              <?php
            }

        }//foreach
    }
endif;

add_filter( 'nateserk_tinycup_action_display_social_links', 'nateserk_tinycup_social_links', 10 ,1 );
