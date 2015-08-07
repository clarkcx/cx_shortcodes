<?php
/**
 * Section shortcode
 */

// This adds the shortcode [section][/section]
add_shortcode('section', 'cx_sc_section');
function cx_sc_section( $atts, $content = null ) {
	extract(shortcode_atts(array(
				"align" => '',
				"id" => '',
				"class" => ''
			), $atts));

	$align = esc_attr( $align );
	$id = ($id <> '') ? " id='" . esc_attr( $id ) . "'" : '';
	$class = ($class <> '') ? esc_attr( ' ' . $class ) : '';

	$output = '<section class="' . $class . ' ' . $align . '">' . do_shortcode($content) . '</section>';

	return $output;
}
?>