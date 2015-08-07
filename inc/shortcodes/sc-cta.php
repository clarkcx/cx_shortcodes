<?php
/**
 * CTA shortcode
 */

// The cta shortcode adds a div with .cta around the contained block of content for styling purposes
// Usage: Wrap content to be affected with [cta] and [/cta] tags

add_shortcode('cta', 'cx_sc_cta');
function cx_sc_cta( $atts, $content = null ) {
	extract(shortcode_atts(array(
				"id" => '',
				"class" => 'cta'
			), $atts));

	$id = ($id <> '') ? " id='" . esc_attr( $id ) . "'" : '';
	$class = ($class <> '') ? esc_attr( ' ' . $class ) : '';

	$output = '<div class="' . $class . '">' . $content;
	$output .= '</div>';

	return $output;
}
?>