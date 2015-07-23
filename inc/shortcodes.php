<?php

// The cta shortcode adds a div with .cta around the contained block of content for styling purposes
// Usage: Wrap content to be affected with [cta] and [/cta] tags

add_shortcode('cta', 'cx_sc_cta');
function cx_sc_cta( $atts, $content = null ) {
	extract(shortcode_atts(array(
				"id" => '',
				"class" => 'cta'
			), $atts));

	$id = ($id <> '') ? " id='" . esc_attr( $id ) . "'" : '';
	$class = ($class <> '') ? esc_attr( ' ' . $class ) : '';

	$output = '<div class="' . $class . '">' . $content;
	$output .= '</div>';

	return $output;
}

// The intro shortcode adds a div with a class of .intro to the contained paragraph for styling purposes
// Usage: Wrap content to be affected with [intro] and [/intro] tags

add_shortcode('intro', 'cx_sc_intro');
function cx_sc_intro( $atts, $content = null ) {
	extract(shortcode_atts(array(
				"id" => '',
				"class" => 'lead'
			), $atts));

	$id = ($id <> '') ? " id='" . esc_attr( $id ) . "'" : '';
	$class = ($class <> '') ? esc_attr( ' ' . $class ) : '';

	$output = '<div class="' . $class . '">' . $content;
	$output .= '</div>';

	return $output;
}

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

// This adds the shortcode [boxout][/boxout]
add_shortcode('boxout', 'cx_sc_boxout');
function cx_sc_boxout( $atts, $content = null ) {
	extract(shortcode_atts(array(
				"show" => '',
				"id" => '',
				"class" => '',
				"width" => ''
			), $atts));

	$show = esc_attr( $show );
	$width = esc_attr( $width );
	$id = ($id <> '') ? " id='" . esc_attr( $id ) . "'" : '';
	$class = ($class <> '') ? esc_attr( ' ' . $class ) : '';

	$output = '<div class="boxout ' . $class . ' ' . $show . ' ' . $width . '"><p>' . do_shortcode($content) . '</p></div>';

	return $output;
}

// This adds the shortcode [block][/block]
add_shortcode('block', 'cx_sc_block');
function cx_sc_block( $atts, $content = null ) {
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

	$output = '<div class="cx_block ' . $class . ' ' . $align . ' '  . $width . '">' . do_shortcode($content)  . '</div>';

	return $output;
}

// This adds the shortcode [section][/section]
add_shortcode('section', 'cx_sc_section');
function cx_sc_section( $atts, $content = null ) {
	extract(shortcode_atts(array(
				"align" => '',
				"id" => '',
				"class" => ''
			), $atts));

	$align = esc_attr( $align );
	$id = ($id <> '') ? " id='" . esc_attr( $id ) . "'" : '';
	$class = ($class <> '') ? esc_attr( ' ' . $class ) : '';

	$output = '<section class="' . $class . ' ' . $align . '">' . do_shortcode($content) . '</section>';

	return $output;
}

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


// Custom menu shortcode
// http://stephanieleary.com/2010/07/call-a-navigation-menu-using-a-shortcode/
// use [menu name="main-menu"] to call the menu in your content (replacing "main-menu" with your menu’s slug
function print_menu_shortcode($atts, $content = null) {
    extract(shortcode_atts(array( 'name' => null, ), $atts));
    return wp_nav_menu( array( 'menu' => $name, 'container' => false, 'echo' => false ) );
}
add_shortcode('menu', 'print_menu_shortcode');


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

// The video shortcode is used to ensure embedded videos resize correctly in responsive layouts
// Usage: [video id="Oq4Nh2RWx8w"]

add_shortcode('youtube', 'cx_sc_responsive_video');
function cx_sc_responsive_video($atts, $content = null) {
	extract(shortcode_atts(array(
		"id" => '',
		"class" => 'cx_video'
	), $atts));
	
	$video = '<div class="cx_video" style="position: relative; width: 100%; height: 0px; padding-bottom: 60%;">';
	$video .= '<iframe style="position: absolute; left: 0px; top: 0px; width: 100%; height: 100%" src="//www.youtube.com/embed/'.$id.'">';
	$video .= '</iframe>';
	$video .= '</div>';
			
    return $video;
}

add_shortcode('vimeo', 'cx_sc_responsive_video_vimeo');
function cx_sc_responsive_video_vimeo($atts, $content = null) {
	extract(shortcode_atts(array(
		"id" => '',
		"class" => 'videoWrapper'
	), $atts));
	
	$video = '<div class="videoWrapper" style="position: relative; width: 100%; height: 0px; padding-bottom: 56.25%; margin-top: 2em; margin-bottom: 2em;">';
	$video .= '<iframe style="position: absolute; left: 0px; top: 0px; width: 100%; height: 100%" src="//player.vimeo.com/video/'.$id.'">';
	$video .= '</iframe>';
	$video .= '</div>';
			
    return $video;
}


/**
 * Frequently Asked Questions
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

/**
 * Royal Slider
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

// The twitter-widget shortcode
// Usage: [twidget account="ablewild" widgetid="xxxxxxxx"]

add_shortcode('twidget', 'cx_twitter_widget');
function cx_twitter_widget($atts, $content = null) {
	extract(shortcode_atts(array(
		"widgetid" => '',
		"account" => '',
		"class" => 'cx_button'
	), $atts));
	
	$twidget = '<div class="twitter-widget">
	<a class="twitter-timeline" 
		href="https://twitter.com/'.$account.'" 
		data-widget-id="'.$widgetid.'"
		width="500"
		>Tweets by @'.$account.'</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?\'http\':\'https\';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
	</div>';
			
    return $twidget;
}


?>