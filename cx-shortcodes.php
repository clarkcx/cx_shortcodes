<?php
/*
Plugin Name: Able Shortcodes
Plugin URI: http://www.ablewild.com
Description: Shortcodes to enhance standard WP functionality
Version: 2.1.1
Author: Pete Clark
Author URI: http://www.ablewild.com
*/

/*************************************
* includes
*************************************/

include('inc/adminpage.php'); // This is the plugin options page
include('inc/shortcodes.php'); // This is the plugin options page

/*************************************
* settings link
*************************************/

function cx_shortcodes_settings_link($links) { 
  $settings_link = '<a href="admin.php?page=cx-shortcodes-admin">Help</a>'; 
  array_unshift($links, $settings_link); 
  return $links; 
}
 
$plugin = plugin_basename(__FILE__); 
add_filter("plugin_action_links_$plugin", 'cx_shortcodes_settings_link' );

/*************************************
* Add a custom capability on activation
*************************************/

register_activation_hook( __FILE__, 'cx_shortcodes_add_cap' );
register_deactivation_hook( __FILE__, 'cx_shortcodes_rmv_cap' );

function cx_shortcodes_add_cap() {
    
    global $wp_roles;
    $wp_roles->add_cap( 'administrator', 'view_cx' );
    $wp_roles->add_cap( 'editor', 'view_cx' );
    $wp_roles->add_cap( 'author', 'view_cx' );
}

function cx_shortcodes_rmv_cap() {
    
    global $wp_roles;
    $wp_roles->remove_cap( 'administrator', 'view_cx' );
    $wp_roles->remove_cap( 'editor', 'view_cx' );
    $wp_roles->remove_cap( 'author', 'view_cx' );
}


?>
