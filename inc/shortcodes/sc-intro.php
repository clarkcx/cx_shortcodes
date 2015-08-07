<?php
/**
 * Intro shortcode
 */

// The intro shortcode adds a div with a class of .intro to the contained paragraph for styling purposes
// Usage: Wrap content to be affected with [intro] and [/intro] tags

add_shortcode('intro', 'cx_sc_intro');
function cx_sc_intro( $atts, $content = null ) {
	extract(shortcode_atts(array(
				"id" => '',
				"class" => 'lead'
			), $atts));

	$id = ($id <> '') ? " id='" . esc_attr( $id ) . "'" : '';
	$class = ($class <> '') ? esc_attr( ' ' . $class ) : '';

	$output = '<div class="' . $class . '">' . $content;
	$output .= '</div>';

	return $output;
}
?>