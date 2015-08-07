<?php
/**
 * Boxout shortcode
 */

// This adds the shortcode [boxout][/boxout]
add_shortcode('boxout', 'cx_sc_boxout');
function cx_sc_boxout( $atts, $content = null ) {
	extract(shortcode_atts(array(
				"show" => '',
				"id" => '',
				"class" => '',
				"width" => ''
			), $atts));

	$show = esc_attr( $show );
	$width = esc_attr( $width );
	$id = ($id <> '') ? " id='" . esc_attr( $id ) . "'" : '';
	$class = ($class <> '') ? esc_attr( ' ' . $class ) : '';

	$output = '<div class="boxout ' . $class . ' ' . $show . ' ' . $width . '"><p>' . do_shortcode($content) . '</p></div>';

	return $output;
}
?>