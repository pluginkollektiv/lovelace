<?php
/**
 * Functions for Lovelace.
 * 
 * @version		0.1
 */

/**
 * Remove the migrate script from the list of jQuery dependencies.
 * 
 * @see https://github.com/cedaro/dequeue-jquery-migrate
 * 
 * @param WP_Scripts $scripts WP_Scripts scripts object. Passed by reference.
 */
function lovelace_dequeue_jquery_migrate( $scripts ) {
	if ( ! is_admin() && ! empty( $scripts->registered['jquery'] ) ) {
		$jquery_dependencies = $scripts->registered['jquery']->deps;
		$scripts->registered['jquery']->deps = array_diff( $jquery_dependencies, [ 'jquery-migrate' ] );
	}
}

add_action( 'wp_default_scripts', 'lovelace_dequeue_jquery_migrate' );

/**
 * Dequeue assets from parent theme.
 */
function lovelace_dequeue_assets() {
	// remove custom fonts
	wp_dequeue_style( 'atomic-blocks-fonts' );
	wp_deregister_style( 'atomic-blocks-fonts' );
	// remove Font Awesome
	wp_dequeue_style( 'font-awesome' );
	wp_deregister_style( 'font-awesome' );
}

add_action ( 'wp_enqueue_scripts', 'lovelace_dequeue_assets', 100 );

/**
 * Dequeue customizer style from parent theme we don’t actually need.
 */
function lovelace_dequeue_customizer_style() {
	// remove customizer in-site CSS
	wp_styles()->add_data( 'atomic-blocks-style', 'after', '' );
}

add_action ( 'wp_print_styles', 'lovelace_dequeue_customizer_style' );

/**
 * Enqueue our custom scripts and styles.
 */
function lovelace_enqueue_assets() {
	// check for SCRIPT_DEBUG
	$suffix = ( defined( 'SCRIPT_DEBUG' ) && SCRIPT_DEBUG ? '' : '.min' );
	
	// enqueue parent theme CSS
	$css_file = get_template_directory() . '/style.css';
	$css_url = get_template_directory_uri() . '/style.css';
	wp_enqueue_style( 'atomic-blocks-style', $css_url, [], filemtime( $css_file ) );
	
	// include Lovelace theme CSS
	$css_file = get_stylesheet_directory() . '/style' . $suffix . '.css';
	$css_url = get_stylesheet_directory_uri() . '/style' . $suffix . '.css';
	wp_enqueue_style( 'lovelace-style', $css_url, [], filemtime( $css_file ) );
}

add_action( 'wp_enqueue_scripts', 'lovelace_enqueue_assets' );
