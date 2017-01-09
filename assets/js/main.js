/**
* assets/js/main.js
* Main Javascript file for nateserk_tinycup theme.
* @author Nate K.
*/

$( document ).ready(
  function()
  {
    // show modal
    var KEY = 'hasSeenIndexModal';
    if ( Cookies.get(KEY) == null || Cookies.get(KEY) == false ) {
      Cookies.set(KEY, true )
      $('#splah_index_modal').modal('show');
    }    
  }
);
