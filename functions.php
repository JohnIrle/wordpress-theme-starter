<?php

function startertheme_theme_support() {
	// Adds dynamic title tag support
	add_theme_support( 'title-tag' );
}

add_action( 'after_setup_theme', 'startertheme_theme_support' );

function startertheme_menus() {
	$locations = array(
		'primary' => 'Primary Menu',
		'footer'  => 'Footer Menu Items'
	);

	register_nav_menus( $locations );
}

add_action( 'init', 'startertheme_menus' );

$version = wp_get_theme()->get( 'Version' );
function startertheme_register_styles() {
	global $version;
	wp_enqueue_style( 'startertheme-style', get_template_directory_uri() . '/style.css', array( 'startertheme-bootstrap' ), $version, 'all' );
	wp_enqueue_style( 'startertheme-bootstrap', "https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css", array(), '5.2.2', 'all' );
	wp_enqueue_style( 'startertheme-fontawesome', "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css", array(), '5.13.0', 'all' );
}

add_action( 'wp_enqueue_scripts', 'startertheme_register_styles' );

function startertheme_register_scripts() {
	global $version;
	wp_enqueue_script( 'startertheme-bootstrap', "https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js", array(), '5.2.2', true );
	wp_enqueue_script( 'startertheme-main', get_template_directory_uri() . '/assets/js/main.js', array(), $version, true );
}

add_action( 'wp_enqueue_scripts', 'startertheme_register_scripts' );

if (!function_exists('register_navwalker')) :
	function register_navwalker() {
		require( 'inc/bootstrap_5_wp_nav_menu_walker.php' );
	}
endif;

add_action('after_setup_theme', 'register_navwalker');