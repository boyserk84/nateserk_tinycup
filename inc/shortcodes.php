<?php
/**
 * nateserk-tinycup shortcodes.php
 *
 * @link https://codex.wordpress.org/Shortcode_API
 *
 * @package nateserk-tinycup
 */

/**
* [open_modal_dialog button_text="Click Here" button_class="btn-danger" button_icon="fa-camera-retro fa-4x"] Your Content [/open_modal_dialog]
* Short Code: Create a button for trigger an empty modal dialog.
*/
if ( ! function_exists( 'nateserk_tinycup_open_empty_modal_dialog' ) ) :

  function nateserk_tinycup_open_empty_modal_dialog( $atts, $content=null ) {
      $a = shortcode_atts(
      array(
          'button_text'=> "Launch",
          'button_class'=> "btn-primary",
          'button_icon'=> ""
      ), $atts);

      $uniqueId = uniqid("modal_");
      $iconHtml = "";
      if ( !empty( $a['button_icon'] ) ) {
        $iconHtml = '<i class="fa ' .$a['button_icon'] .'" aria-hidden="true"></i> ';
      }

      return "<button type=\"button\" class=\"btn " .$a['button_class'] ." btn-lg\" data-toggle=\"modal\" data-target=\"#myModal-$uniqueId\">"
      .$iconHtml .$a['button_text']
        ."</button><style type=\"text/css\">
            body.modal-open #main,
            body.modal-open #masthead,
            body.modal-open .widget-area,
            body.modal-open .site-footer{
              -webkit-filter:none;
            }
          }</style>"

        ."<div class=\"modal fade\" tabindex=\"-1\" id =\"myModal-$uniqueId\" role=\"dialog\" aria-labelledby=\"myModalLabel\">
          <div class=\"modal-dialog modal-lg\" role=\"document\">
            <div class=\"modal-content\">"
              .$content
            ."</div>
          </div>
        </div>";
  }
endif;
add_shortcode('open_modal_dialog', 'nateserk_tinycup_open_empty_modal_dialog');

/**
* [custom_link_button button_track_id="id" button_alt_text="Link to this" button_url="http://www.blahblahb.com" button_class="btn-danger" button_icon="fa-camera-retro fa-4x"] Your Text [/custom_link_button]
* Short Code: Create a customized button.
*/
if ( ! function_exists( 'nateserk_tinycup_custom_link_button' ) ) :

  function nateserk_tinycup_custom_link_button( $atts, $content=null ) {
      $a = shortcode_atts(
      array(
          'button_url'=> "",
          'button_class'=> "btn-primary",
          'button_icon'=> "",
          'button_track_id' => "",
          'button_alt_text' => ""
      ), $atts);

      $uniqueId = $a['button_track_id'];
      $linkUrl = $a['button_url'];
      $altText = ( !empty($a['button_alt_text']) )? $a['button_alt_text'] : ("Click to visit ".$linkUrl);
      $iconHtml = "";
      if ( !empty( $a['button_icon'] ) ) {
        $iconHtml = '<i class="fa ' .$a['button_icon'] .'" aria-hidden="true"></i> ';
      }

      $htmlButton = "<button type=\"button\" class=\"btn " .$a['button_class'] ." btn-lg\">"
        .$iconHtml .$content ."</button>";

      
      if ( !empty($a['button_url']) ) {
        return "<a href=\"$linkUrl\" alt=\"$altText\">$htmlButton</a>";
      } else {
        return $htmlButton;
      }



  }
endif;
add_shortcode('custom_link_button', 'nateserk_tinycup_custom_link_button');