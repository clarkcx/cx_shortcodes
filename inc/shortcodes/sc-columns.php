<?php
/**
 * Columns shortcode
 */

// This adds the shortcode [columns][/columns]
// Useage: For this to work you need to include three blocks of content between [columns] and [/columns]
// Each content block must in turn be surrounded with [block] and [/block] 
add_shortcode('columns', 'cx_sc_columns');
function cx_sc_columns( $atts, $content = null ) {
	extract(shortcode_atts(array(
				"number_of_cols" => '3',
				"id" => '',
				"class" => 'cx_columns'
			), $atts));

	$number_of_cols = esc_attr( $number_of_cols );
	$id = ($id <> '') ? " id='" . esc_attr( $id ) . "'" : '';
	$class = ($class <> '') ? esc_attr( ' ' . $class ) : '';

	$output = '<div class="' . $class . ' count_' . $number_of_cols . '">' . do_shortcode($content);
	$output .= '</div>';

	return $output;
}
?>