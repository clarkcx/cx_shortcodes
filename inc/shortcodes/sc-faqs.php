<?php
/**
 * Frequently Asked Questions shortcode
 */

add_shortcode('faq', 'cx_sc_faq');
function cx_sc_faq( $atts, $content = null ) {
	extract(shortcode_atts(array(
				"question" => ''
			), $atts));

	$question = ($question <> '') ? esc_attr( $question ) : '';

	$output = '<div class="cx_question">';
	$output .= '<h2>'. $question .'</h2>';
	$output .= do_shortcode($content) . '</div>';

	return $output;
}
?>