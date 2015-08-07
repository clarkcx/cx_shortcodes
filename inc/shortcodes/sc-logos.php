<?php
/**
 * Logos shortcode
 */

// This adds the shortcode [logos][/logos]
add_shortcode('logos', 'cx_sc_logos');
function cx_sc_logos( $atts, $content = null ) {
	extract(shortcode_atts(array(
				"id" => '',
				"across" => '3'
			), $atts));

	$id = ($id <> '') ? " id='" . esc_attr( $id ) . "'" : '';
	$across = esc_attr( $across );

	$output = '<div class="logos count-'.$across.'">' . do_shortcode($content) . '</div>';

	return $output;
}
?>