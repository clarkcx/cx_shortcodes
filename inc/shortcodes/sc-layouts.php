<?php
/**
 * Layout shortcodes
 */

// This adds the shortcode [main][/main]
function cx_sc_layout_main( $atts, $content = null ) {
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

	$output = '<div class="l-content ' . $class . ' ' . $align . ' '  . $width . '">' . do_shortcode($content)  . '</div>';

	return $output;
}

// This adds the shortcode [sidebar][/sidebar]
function cx_sc_layout_sidebar( $atts, $content = null ) {
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

	$output = '<div class="l-sidebar ' . $class . ' ' . $align . ' '  . $width . '">' . do_shortcode($content)  . '</div>';

	return $output;
}

// This adds the shortcode [column][/column]
function cx_sc_layout_column( $atts, $content = null ) {
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

	$output = '<div class="l-col l-medium-6col l-large-6col ' . $class . ' ' . $align . ' '  . $width . '">' . do_shortcode($content)  . '</div>';

	return $output;
}

add_shortcode('main', 'cx_sc_layout_main');
add_shortcode('sidebar', 'cx_sc_layout_sidebar');
add_shortcode('column', 'cx_sc_layout_column');



?>