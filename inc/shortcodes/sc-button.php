<?php
/**
 * Button shortcode
 */

// The button shortcode adds a div with .cx_button around the contained block of content for styling purposes
// Usage: Wrap content to be affected with [button] and [/button] tags

add_shortcode('button', 'cx_sc_button');
function cx_sc_button( $atts, $content = null ) {
	extract(shortcode_atts(array(
				"id" => '',
				"icon" => ''
			), $atts));

	$id = ($id <> '') ? " id='" . esc_attr( $id ) . "'" : '';
	$icon = ($icon <> '') ? esc_attr( $icon . ' ' ) : '';
		
	$dom = new DOMDocument;
	$dom->loadHTML($content);
	foreach ($dom->getElementsByTagName('a') as $node) {
	    //echo $dom->saveHtml($node), PHP_EOL;
	    $href = $node->getAttribute( 'href' );
	    $title = mb_convert_encoding($node->nodeValue, "HTML-ENTITIES", "UTF-8");
	}
	
	$output = '<a class="cx_button" href="' . $href . '"><span>' . $title . '</span></a>';
	
	return $output;
	
}
?>