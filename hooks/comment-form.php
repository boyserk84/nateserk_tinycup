<?php
/**
 * Customized the comment form
 *
 *
 * @param array $form
 * @return array $form
 *
 */
if ( !function_exists('nateserk_tinycup_comment_form') ) :

    function nateserk_tinycup_comment_form($form) {

        $required = get_option('require_name_email');
        $req = $required ? 'aria-required="true"' : '';
        $form['fields']['author'] = '<p class="comment-form-author"><label for="author">Name*</label> <input id="author" name="author" type="text" placeholder="'.esc_attr__( 'Name', 'nateserk_tinycup' ).'" value="" size="30" ' . $req . '/></p>';
        $form['fields']['email'] = '<p class="comment-form-email"><label for="email">Email*</label> <input id="email" name="email" type="email" value="" placeholder="'.esc_attr__( 'Email', 'nateserk_tinycup' ).'" size="30"' . $req . '/></p>';
        $form['fields']['url'] = '<p class="comment-form-url"><label for="url">URL</label> <input id="url" name="url" placeholder="'.esc_attr__( 'Website URL', 'nateserk_tinycup' ).'" type="url" value="" size="30" /></p>';
        $form['comment_field'] = '<p class="comment-form-comment"><label for="comment">Comment</label> <textarea id="comment" name="comment" placeholder="'.esc_attr__( 'Comment', 'nateserk_tinycup' ).'" cols="45" rows="8" aria-required="true"></textarea></p>';
        $form['title_reply'] = sprintf( __( '%s Leave a Comment', 'nateserk_tinycup' ), '<span></span>' );
        $form['submit_button'] = '<button type="submit" name= "submit" class="btn btn-primary">Post Comment</button>';

        return $form;
    }

endif;

add_filter('comment_form_defaults', 'nateserk_tinycup_comment_form');
