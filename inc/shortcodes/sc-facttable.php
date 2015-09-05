<?php
/**
 * Fact Table shortcode
 */

// Usage: [facttable title="Check out these facts!"]

function cx_sc_facttable( $atts, $content = null ) {
	extract(shortcode_atts(array(
				"title" => '',
				"bar" => 'false'
			), $atts));

	$title = ($title <> '') ? esc_attr( ' ' . $title ) : '';
	$bar = esc_attr( $bar );

	if ($bar == 'true') {
		$output = '<div class="m-boxout m-boxout-light m-boxout-fullwidth cf">';
		$output .= '<div class="l-constrained">';
		$output .= '<div class="m-facttable">';
		$output .= '<h2 class="m-facttable-heading">' . $title . '</h2>';
		$output .= do_shortcode($content);
		$output .= '</div>';
		$output .= '</div>';
		$output .= '</div>';

	} else {
		$output = '<div class="m-facttable">';
		$output .= '<h2 class="m-facttable-heading">' . $title . '</h2>';
		$output .= do_shortcode($content);
		$output .= '</div>';
	}

	return $output;
}

function cx_sc_facttable_fact( $atts, $content = null ) {
	extract(shortcode_atts(array(
				"icon" => ''
			), $atts));

	$icon = esc_attr( $icon );

	$output = '<div class="m-facttable-fact '.$icon.'">';
	$output .= do_shortcode($content);
	$output .= '</div>';

	return $output;
}

function cx_sc_facttable_sources( $atts, $content = null ) {
	extract(shortcode_atts(array(
				"icon" => ''
			), $atts));

	$icon = esc_attr( $icon );

	$output = '<div class="m-facttable-sources '.$icon.'">';
	$output .= do_shortcode($content);
	$output .= '</div>';

	return $output;
}

add_shortcode('facttable', 'cx_sc_facttable');
add_shortcode('fact', 'cx_sc_facttable_fact');
add_shortcode('factsources', 'cx_sc_facttable_sources');

?>