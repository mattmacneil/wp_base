<?php

	function wpb_custom_new_menu() {
	  register_nav_menu('custom-nav',__( 'WP Base Navigation' ));
	}
	add_action( 'init', 'wpb_custom_new_menu' );

	add_theme_support( 'post-thumbnails' );

	function disable_wp_emojicons() {

	  remove_action( 'admin_print_styles', 'print_emoji_styles' );
	  remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
	  remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
	  remove_action( 'wp_print_styles', 'print_emoji_styles' );
	  remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );
	  remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
	  remove_filter( 'comment_text_rss', 'wp_staticize_emoji' );
	  add_filter( 'tiny_mce_plugins', 'disable_emojicons_tinymce' );
	}

	add_action( 'init', 'disable_wp_emojicons' );

	function disable_emojicons_tinymce( $plugins ) {
	  if ( is_array( $plugins ) ) {
	    return array_diff( $plugins, array( 'wpemoji' ) );
	  } else {
	    return array();
	  }
	}

?>