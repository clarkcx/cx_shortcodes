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

function cx_sc_tabbox_part( $atts, $content = null ) {
	extract(shortcode_atts(array(
				"class" => ''
			), $atts));

	$class = ($class <> '') ? esc_attr( ' ' . $class ) : '';

	$output = '<div tabindex="0" class="m-tabbox-part ' . $class . '">' . do_shortcode($content)  . '</div>';

	return $output;
}

function cx_sc_tabbox_content( $atts, $content = null ) {
	extract(shortcode_atts(array(
				"class" => ''
			), $atts));

	$class = ($class <> '') ? esc_attr( ' ' . $class ) : '';

	$output = '<div class="m-tabbox-content ' . $class . '">' . do_shortcode($content)  . '</div>';

	return $output;
}

function cx_sc_tabbox_tab( $atts, $content = null ) {
	extract(shortcode_atts(array(
				"default" => 'no',
				"text" => '',
			), $atts));

	$default = esc_attr( $default );
	$text = esc_attr( $text );

	$output = '<button class="m-tabbox-tab ' . $class;
	$output .= ' "';
	if ($default == 'yes') $output .= ' autofocus';
	$output .= '>' . $text  . '</button>';

	return $output;
}


add_shortcode('tabbox', 'cx_sc_tabbox');
add_shortcode('tabbox-part', 'cx_sc_tabbox_part');
add_shortcode('tabbox-tab', 'cx_sc_tabbox_tab');
add_shortcode('tabbox-content', 'cx_sc_tabbox_content');

?>