<?php
/*
Plugin Name: Selectivizr for WordPress
Plugin URI: http://www.ramoonus.nl
Description: Selectivizr is a JavaScript utility that emulates CSS3 pseudo-classes and attribute selectors in Internet Explorer 6-8. 
Version: 1.0.0
Author: Ramoonus
Author URI: http://www.ramoonus.nl/wordpress/selectivizr/
*/

// init
function rw_selectivizr() {
	echo '
		<!--[if (gte IE 6)&(lte IE 8)]>
			<script type="text/javascript" src="selectivizr.js"></script>
		<![endif]--> 
	'; // bye bye <noscript><link rel="stylesheet" href="[fallback css]" /></noscript>
} 
// load
add_action('wp_head', 'rw_selectivizr');
?>