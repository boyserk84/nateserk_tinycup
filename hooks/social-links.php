<?php

/**
 * Check and Show social links if enabled
 *
 * @param null
 * @return null
 *
 */
if ( ! function_exists( 'nateserk_tinycup_show_social_options' ) ) :

    function nateserk_tinycup_show_social_options($iconSize) {
        // Showing social links
        $custom_options = nateserk_tinycup_get_theme_options();
        if( $custom_options['nateserk_tinycup-enable-social'] == true) {
            ?>
            <div class="col-xs-12 col-md-12 socials">
              <?php
              $iconSize = $custom_options['nateserk_tinycup-social-icon-size'];
                if (!isset($iconSize) || empty($iconSize)) {
                    $iconSize = "3x";
                }
                do_action('nateserk_tinycup_action_display_social_links', $custom_options, $iconSize);
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

    function nateserk_tinycup_social_links( $options, $iconSize ) {
        foreach($options as $key => $value){
            $html_IconDiv = "";
            $html_Url = "";
            $html_class = "";
            $html_dataTitle = "";
            if ( !empty($value) ) {
              switch($key)
              {
                  case "nateserk_tinycup-facebook-url":
                      $html_IconDiv = "fa fa-facebook-square fa-" .$iconSize;
                      $html_Url = $value;
                      $html_class = "facebook";
                      $html_dataTitle = "Facebook";
                  break;

                  case "nateserk_tinycup-twitter-url":
                      $html_IconDiv = "fa fa-twitter-square fa-" .$iconSize;
                      $html_Url = $value;
                      $html_class = "twitter";
                      $html_dataTitle = "Twitter";
                  break;

                  case "nateserk_tinycup-instagram-url":
                      $html_IconDiv = "fa fa-instagram fa-" .$iconSize;
                      $html_Url = $value;
                      $html_class = "instagram";
                      $html_dataTitle = "Instagram";
                  break;

                  case "nateserk_tinycup-google-plus-url":
                      $html_IconDiv = "fa fa-google-plus-square fa-" .$iconSize;
                      $html_Url = $value;
                      $html_class = "google-plus";
                      $html_dataTitle = "Google-Plus";
                  break;

                  case "nateserk_tinycup-tumblr-url":
                      $html_IconDiv = "fa fa-tumblr-square fa-" .$iconSize;
                      $html_Url = $value;
                      $html_class = "tumblr";
                      $html_dataTitle = "Tumblr";
                  break;

                  case "nateserk_tinycup-snapchat-url":
                      $html_IconDiv = "fa fa-snapchat-square fa-" .$iconSize;
                      $html_Url = $value;
                      $html_class = "snapchat";
                      $html_dataTitle = "Snapchat";
                  break;

                  case "nateserk_tinycup-twitch-url":
                      $html_IconDiv = "fa fa-twitch fa-" .$iconSize;
                      $html_Url = $value;
                      $html_class = "twitch";
                      $html_dataTitle = "Twitch";
                  break;

                  case "nateserk_tinycup-github-url":
                    $html_IconDiv = "fa fa-github fa-" .$iconSize;
                    $html_Url = $value;
                    $html_class = "github";
                    $html_dataTitle = "GitHub";
                  break;

                  case "nateserk_tinycup-reddit-url":
                    $html_IconDiv = "fa fa-reddit fa-" .$iconSize;
                    $html_Url = $value;
                    $html_class = "reddit";
                    $html_dataTitle = "Reddit";
                  break;

                  case "nateserk_tinycup-youtube-url":
                        $html_IconDiv = "fa fa-youtube fa-" .$iconSize;
                        $html_Url = $value;
                        $html_class = "youtube";
                        $html_dataTitle = "YouTube";
                  break;

                  default:
                  break;
              }
            }

            if ( !empty( $html_IconDiv ) ) { ?>
                  <span style="margin-left:10px">
                  <a href="<?php echo esc_url( $html_Url ); ?>" class="<?php echo $html_class; ?>" data-title="<?php echo $html_dataTitle; ?>" target="_blank">
                      <i class="<?php echo $html_IconDiv; ?>"></i></a></span>
              <?php
            }

        }//foreach
    }
endif;

add_filter( 'nateserk_tinycup_action_display_social_links', 'nateserk_tinycup_social_links', 10 ,2 );
