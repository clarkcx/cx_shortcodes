<?php
/**
 * Video shortcodes
 */

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
?>