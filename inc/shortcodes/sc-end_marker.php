<?php
/**
 * End Marker shortcode
 */

// Shortcode to add an icon to the end of a blogpost
// use [end-marker] 
function end_marker($content = null) {
    return '<i class="m-end-marker"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0" y="0" width="34.67" height="31.33" viewBox="0 0 34.67 31.33" enable-background="new 0 0 34.667 31.333" xml:space="preserve"><circle fill="#E20613" cx="17.55" cy="15.67" r="14.66"/><path fill="#FFFFFF" d="M19.66 23.68l-2.44-4.05 -2.38 4.05H8.97l5.57-8.19 -5.36-7.83h5.87l2.17 3.87 2.23-3.87h5.87l-5.36 7.83 5.57 8.19H19.66z"/></svg></i>';
}
add_shortcode('end-marker', 'end_marker');
?>