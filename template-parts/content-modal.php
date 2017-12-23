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
  $allowDismissOutsideDialog = $options['nateserk_tinycup-home-modal-dialog-dismiss-outside-allow'];
  $dataBackDrop = ($allowDismissOutsideDialog==false)?'data-backdrop="static"':'';

  // Reset cookie for home modal dialog if user is an admin who can access a theme customizer UI.
  if ( current_user_can('customize') ):
    if(isset($_COOKIE['hasSeenIndexModal'])) :
      unset($_COOKIE['hasSeenIndexModal']);
    endif;
  endif;

?>
<!-- Large modal -->
<div class="modal fade" tabindex="-1" <?php echo $dataBackDrop; ?> role="dialog" aria-labelledby="myLargeModalLabel" id="splah_index_modal">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header"><?php echo $options['nateserk_tinycup-home-modal-dialog-title']; ?></div><!--.modal-header-->
      <div class="modal-body">
        <p><?php echo $options['nateserk_tinycup-home-modal-dialog-body']; ?></p>
      </div><!--.modal-body-->
      <div class="modal-footer" style="text-align:center;">
        <?php
          // Populate primary and secondary buttons
          // Secondary button - on the left
          nateserk_tinycup_create_modal_dialog_button(
            $options['nateserk_tinycup-home-modal-dialog-btn-secondary-text'],
            $options['nateserk_tinycup-home-modal-dialog-btn-secondary-url'],
            $options['nateserk_tinycup-home-modal-dialog-btn-secondary-action']);

          // Primary button - on the right
          nateserk_tinycup_create_modal_dialog_button(
            $options['nateserk_tinycup-home-modal-dialog-btn-primary-text'],
            $options['nateserk_tinycup-home-modal-dialog-btn-primary-url'],
            $options['nateserk_tinycup-home-modal-dialog-btn-primary-action']);
          ?>
      </div>
    </div><!--.modal-content-->
  </div><!--.modal-dialog-->
</div><!--.modal fade-->

<?php
endif;
