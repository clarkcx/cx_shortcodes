<?php
/**
 * Block shortcode
 */

// This adds the shortcode [block][/block]
add_shortcode('block', 'cx_sc_block');
function cx_sc_block( $atts, $content = null ) {
	extract(shortcode_atts(array(
				"align" => '',
				"width" => '',
				"id" => '',
				"class" => ''
			), $atts));

	$align = esc_attr( $align );
	$width = esc_attr( $width );
	$id = ($id <> '') ? " id='" . esc_attr( $id ) . "'" : '';
	$class = ($class <> '') ? esc_attr( ' ' . $class ) : '';

	$output = '<div class="cx_block ' . $class . ' ' . $align . ' '  . $width . '">' . do_shortcode($content)  . '</div>';

	return $output;
}
?>