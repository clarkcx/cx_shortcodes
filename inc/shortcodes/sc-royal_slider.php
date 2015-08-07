<?php
/**
 * Royal Slider shortcode
 */

add_shortcode('slider', 'cx_sc_royalslider');
function cx_sc_royalslider( $atts, $content = null ) {
	extract(shortcode_atts(array(
				"style" => 'Default',
				"photocredit" => ''
			), $atts));

	$style = ($style <> '') ? esc_attr( $style ) : '';
	$photocredit = ($photocredit <> '') ? esc_attr( $photocredit ) : '';

	$output = '<div class="royalSlider rs' . $style . '">' . do_shortcode($content) . '</div><span class="photocredit">Photos &copy; ' . $photocredit . '</span>';

	return $output;
}
?>