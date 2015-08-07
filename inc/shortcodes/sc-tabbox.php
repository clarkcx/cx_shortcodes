<?php
/**
 * Tab box shortcode
 */

// Usage: [tabbox account="ablewild" widgetid="xxxxxxxx"]

function cx_sc_tabbox( $atts, $content = null ) {
	extract(shortcode_atts(array(
				"class" => ''
			), $atts));

	$class = ($class <> '') ? esc_attr( ' ' . $class ) : '';

	$output = '<section class="m-tabbox ' . $class . '">' . do_shortcode($content)  . '</section>';

	return $output;
}

function cx_sc_tabbox_section( $atts, $content = null ) {
	extract(shortcode_atts(array(
				"tab" => ''
			), $atts));

	$tab = esc_attr( $tab );

	$output = '<div tabindex="0" class="m-tabbox-part">';
	$output .= '<button class="m-tabbox-tab">'.$tab.'</button>';
	$output .= '<div class="m-tabbox-content">';
	$output .= do_shortcode($content);
	$output .= '</div>';
	$output .= '</div>';

	return $output;
}

add_shortcode('tabbox', 'cx_sc_tabbox');
add_shortcode('tabbox-section', 'cx_sc_tabbox_section');

?>