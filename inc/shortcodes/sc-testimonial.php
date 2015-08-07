<?php
/**
 * Testimonial shortcode
 */

// This adds the shortcode [testimonial][/testimonial]
// Useage: Enter the testimonial text between the opening and closing tags
// Options: A name can be added with the optional from="" argument id="" and cap=""
add_shortcode('testimonial', 'cx_sc_testimonial');
function cx_sc_testimonial( $atts, $content = null ) {
	extract(shortcode_atts(array(
				"from" => '',
				"id" => '',
				"class" => 'testimonial'
			), $atts));

	$from = esc_attr( $from );
	$id = ($id <> '') ? " id='" . esc_attr( $id ) . "'" : '';
	$class = ($class <> '') ? esc_attr( ' ' . $class ) : '';

	$output = '<div class="' . $class . '"><p>' . do_shortcode($content) . '</p>';
	if ($from != '') {
		$output .= '<p class="testimonial-credit">' . $from . '</p>';
	}
	$output .= '</div>';

	return $output;
}
?>