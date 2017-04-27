<?php
/**
 * nateserk-tinycup shortcodes.php
 *
 * @link https://codex.wordpress.org/Shortcode_API
 *
 * @package nateserk-tinycup
 */

/**
* [open_modal_video]
* Short Code: Create a button for trigger an empty modal dialog.
*/
if ( ! function_exists( 'nateserk_tinycup_open_empty_modal_dialog' ) ) :

  function nateserk_tinycup_open_empty_modal_dialog( $atts, $content=null ) {
      $a = shortcode_atts(
      array(
          'button_text'=> "Launch",
          'button_class'=> "btn-primary"
      ), $atts);

      return "<button type=\"button\" class=\"btn " .$a['button_class'] ." btn-lg\" data-toggle=\"modal\" data-target=\"#myModal\">" .$a['button_text']
        ."</button><style type=\"text/css\">
            body.modal-open #main,
            body.modal-open #masthead,
            body.modal-open .widget-area,
            body.modal-open .site-footer{
              -webkit-filter:none;
            }
          }</style>"

        ."<div class=\"modal fade\" tabindex=\"-1\" id =\"myModal\" role=\"dialog\" aria-labelledby=\"myModalLabel\">
          <div class=\"modal-dialog modal-lg\" role=\"document\">
            <div class=\"modal-content\">"
              .$content
            ."</div>
          </div>
        </div>";
  }
endif;
add_shortcode('open_modal_dialog', 'nateserk_tinycup_open_empty_modal_dialog');
