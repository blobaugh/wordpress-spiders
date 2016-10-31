<?php
/*
Plugin Name: Spiders
Plugin URI: https://github.com/blobaugh/wordpress-spiders
Description: Add realistic crawly spiders to your website
Version: 0.6
Author: Ben Lobaugh
Author URI: http://ben.lobaugh.net
*/


add_action( 'wp_enqueue_scripts', 'bugs_enqueue_scripts' );
function bugs_enqueue_scripts() {
	wp_enqueue_script( 'bugs', plugins_url( 'js/bug.js', __FILE__ ) );
}

add_action( 'wp_head', 'bugs_go' );
function bugs_go() {
	?>
	<script>
	jQuery(document).ready( function(){
		new SpiderController({'minBugs':1, 'maxBugs':5, 'mouseOver':'nothing'});
	});
	</script>
	<?php
}
