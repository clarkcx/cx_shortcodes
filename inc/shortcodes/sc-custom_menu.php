<?php
/**
 * Custom menu shortcode
 */

// Custom menu shortcode
// http://stephanieleary.com/2010/07/call-a-navigation-menu-using-a-shortcode/
// use [menu name="main-menu"] to call the menu in your content (replacing "main-menu" with your menu’s slug
function print_menu_shortcode($atts, $content = null) {
    extract(shortcode_atts(array( 
    	'name' => null, 
    	'class' => 'menu' 
    ), $atts));

    $class = ($class <> '') ? esc_attr( $class . ' ' ) : '';

    return wp_nav_menu( array( 'menu' => $name, 'container' => false, 'menu_class' => 'menu menu--'.$class, 'echo' => false ) );
}
add_shortcode('menu', 'print_menu_shortcode');
?>