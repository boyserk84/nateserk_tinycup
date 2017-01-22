/**
* assets/js/main.js
* Main Javascript file for nateserk_tinycup theme.
* @author Nate K.
*/

$( document ).ready(
  function()
  {
    // show home modal dialog if user hasn't seen it.
    // Cookie will be expired right after the browser is closed.
    var KEY = 'hasSeenIndexModal';
    if ($("#splah_index_modal").length > 0) { // check if modal div exists
      if ( Cookies.get( KEY ) == null || Cookies.get( KEY ) == false ) {
        Cookies.set( KEY, true )
        $('#splah_index_modal').modal('show');
      }//if--check cookie

      // Reset cookies if the redirect button on the modal dialog is clicked.
      $("#modal_btn_redirect").on('click',
        function () {
          var keyToRemove = KEY;
          Cookies.remove( keyToRemove );
        }//callback
      );//--#model_btn_redirect
    }//if--check div
  }//func
);
