<?php
/**
 * Twitter widget shortcode
 */

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
}?>