<?php
/**
 * Template part for displaying a home modal dialog
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package nateserk-tinycup
 */

$options = nateserk_tinycup_get_theme_options();
if( $options['nateserk_tinycup-home-modal-dialog-toggle'] == true) :
?>
<!-- Large modal -->
<div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" id="splah_index_modal">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header"><?php echo $options['nateserk_tinycup-home-modal-dialog-title']; ?></div><!--.modal-header-->
      <div class="modal-body">
        <p><?php echo $options['nateserk_tinycup-home-modal-dialog-body']; ?></p>
      </div><!--.modal-body-->
      <div class="modal-footer">
        <!-- TODO Integrate buttons -->
        <a class="btn btn-default" href="http://www.google.com" role="button">Exit</a>
        <button type="button" class="btn btn-primary" data-dismiss="modal">Yes I am 18.</button>
      </div>
    </div><!--.modal-content-->
  </div><!--.modal-dialog-->
</div><!--.modal fade-->

<?php
endif;
