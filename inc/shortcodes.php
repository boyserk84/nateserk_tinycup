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
* [custom_link_button track_id="id" alt_text="Link to this" url="http://www.blahblahb.com" button_class="btn-danger" button_icon="fa-camera-retro fa-4x"] Your Text [/custom_link_button]
* Short Code: Create a customized button.
*/
if ( ! function_exists( 'nateserk_tinycup_custom_link_button' ) ) :

  function nateserk_tinycup_custom_link_button( $atts, $content=null ) {
      $a = shortcode_atts(
      array(
          'url'=> "",
          'button_class'=> "btn-primary",
          'button_icon'=> "",
          'track_id' => "",
          'alt_text' => ""
      ), $atts);

      $uniqueId = ( !empty($a['track_id']) )?$a['track_id'] : "na";
      $linkUrl = $a['url'];
      $altText = ( !empty($a['alt_text']) )? $a['alt_text'] : ("Click to visit ".$linkUrl);
      $iconHtml = "";
      if ( !empty( $a['button_icon'] ) ) {
        $iconHtml = '<i class="fa ' .$a['button_icon'] .'" aria-hidden="true"></i> ';
      }

      $htmlButton = "<button type=\"button\" class=\"btn " .$a['button_class'] ." btn-lg\" id=\"$uniqueId\">"
        .$iconHtml .$content ."</button>";

      
      if ( !empty($a['url']) ) {
        return "<a href=\"$linkUrl\" alt=\"$altText\" id=\"$uniqueId\">$htmlButton</a>";
      } else {
        return $htmlButton;
      }
  }
endif;
add_shortcode('custom_link_button', 'nateserk_tinycup_custom_link_button');


/**
* [custom_card card_size="12" card_img="" header_text="Title" body_text="Body" side_text="Side Text" url="http://www.google.com" alt_text="Alt text" ] Your Text [/custom_card]
* Short Code: Create a custom card with text and button (similar to Bootstrap Card version 4.0.0)
*/
if ( ! function_exists( 'nateserk_tinycup_custom_card' ) ) :

  function nateserk_tinycup_custom_card( $atts, $content=null ) {
      $a = shortcode_atts(
      array(
          'url'=> "",
          'button_class'=> "btn-primary",
          'button_icon'=> "",
          'track_id' => "",
          'card_size' => "12",
          "card_img" => "",
          "header_text" => "",
          "body_text" => "",
          "side_text" => "",
          "alt_text" => ""
      ), $atts);

      $uniqueId = ( !empty($a['track_id']) )? $a['track_id'] : "na";
      $linkUrl = $a['url'];
      $altText = ( !empty($a['alt_text']) )? $a['alt_text'] : ("Click to visit ".$linkUrl);
      $iconHtml = "";
      if ( !empty( $a['button_icon'] ) ) {
        $iconHtml = '<i class="fa ' .$a['button_icon'] .'" aria-hidden="true"></i> ';
      }

      // button
      $htmlButton = "<a href=\"$linkUrl\" alt=\"$altText\" id=\"$uniqueId\"><button type=\"button\" class=\"btn " .$a['button_class'] ." btn-lg\" id=\"$uniqueId\">"
        .$iconHtml .$content ."</button></a>";

      $cardSize = $a['card_size'];
      $cardImg = $a['card_img'];
      
      // title
      $titleHtml = "";
      if ( !empty($a['header_text']) ) {
        $title = $a['header_text'];
        $titleHtml = "<div class=\"col-md-12 col-sm-12\"><h1>$title</h1></div>";
      }

      // body
      $bodyHtml = "";
      if ( !empty($a['body_text']) ) {
        $bodyText = $a['body_text'];
        $bodyHtml = "<div class=\"col-md-12 col-sm-12\"><p>$bodyText</p></div>";
      }
      
      // side text
      $sideHtml = "";
      $sideLayoutHtml = "";
      if ( !empty($a['side_text']) ) {
        $sideText = $a['side_text'];
        $sideHtml = "<div class=\"col-md-8 col-sm-12\" style=\"text-align:left;\">$sideText</div>";
        $sideLayoutHtml = $sideHtml ."<div class\"col-md-4 col-sm-12\" style=\"text-align:right;\">$htmlButton</div>";
      } else {
        $sideLayoutHtml = "<div class\"col-md-12 col-sm-12\" style=\"text-align:center;\">$htmlButton</div>";
      }

      // final layout
      $layoutHtml = "<div class=\"col-md-$cardSize col-sm-12\"><img src=\"$cardImg\" class=\"img-thumbnail\" \>"
        ."$titleHtml $bodyHtml $sideLayoutHtml </div>";

      return $layoutHtml;
  }
endif;
add_shortcode('custom_card', 'nateserk_tinycup_custom_card');

/**
* [custom_track_gg_click_event category="videos" action="play" value="8" label="fall campaign"] ID [/custom_track_gg_click_event]
* Short Code: Create Google Analytic tracking event
*/
if ( ! function_exists( 'nateserk_tinycup_track_gg_click_event' ) ) :

  function nateserk_tinycup_track_gg_click_event( $atts, $content=null ) {
      $a = shortcode_atts(
      array(
          'category'=> "",
          'action'=> "",
          'value'=> "",
          'label'=> ""
      ), $atts);

      $eventCategory = $atts['category'];
      $eventValue = $atts['value'];
      $eventAction = $atts['action'];
      $eventLabel = $atts['label'];
      $eventId = $content;

      $embedJsScript = "ga('send', 'event', '$eventCategory', '$eventAction', '$eventLabel', '$eventValue',
        {
          hitCallback: function() {
            window.location.href = $(this).attr(\"href\");
          }
        });";

      $mainScript = "
      <script type=\"text/javascript\">
        window.onload = function() {
          if (window.jQuery) {  
            $( document ).ready(function() {
              $(\"$eventId\").on(\"click\",function(e){
                e.preventDefault();
                $embedJsScript
              });
            });//ready
          };//jquery
        };</script>";

      return $mainScript;
  }
endif;
add_shortcode('custom_track_gg_click_event', 'nateserk_tinycup_track_gg_click_event');