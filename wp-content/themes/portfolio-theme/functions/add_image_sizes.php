<?php

/**
 * Custom Images Names
 * Adds custom images sizes ready to use on administrator
 *
 * @param  
 *
 * @return array
 * @since  1.0
 */
function dl_image_sizes( $sizes ) {

	$add_sizes = array(
		'mediana'		=> __( 'Tamaño del slideshow' ),
		'grande'	=> __( 'Tamaño grande' ),
		'full'	=> __( 'Tamaño personalizado del logo' )
	);

	return array_merge( $sizes, $add_sizes );

}


/**
 * Custom Images Sizes
 * Adds custom images sizes on posts
 *
 * @return void
 * @since  1.0
 * @see    https://developer.wordpress.org/reference/functions/add_image_size/
 * @see    https://codex.wordpress.org/Plugin_API/Filter_Reference/image_size_names_choose
 */
if ( function_exists( 'add_theme_support' ) ) {

	add_image_size( 'mediana', 200, 200, true );			// Personalización del tamaño del slideshow
	add_image_size( 'grande', 768, 1024, true );		// Personalización de tamaño grande
	add_image_size( 'full', 1200, 800, true );		// Personalización del tamaño del logo


	add_filter( 'image_size_names_choose', 'dl_image_sizes' );

}
