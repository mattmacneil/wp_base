<?php

	function wpb_custom_new_menu() {
	  register_nav_menu('custom-nav',__( 'WP Base Navigation' ));
	}
	add_action( 'init', 'wpb_custom_new_menu' );

	add_theme_support( 'post-thumbnails' );

?>