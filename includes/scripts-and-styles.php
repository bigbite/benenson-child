<?php

/**
 * Remove the Benenson default styles.
 *
 * @since 1.0.0
 * @return void
 */
if ( ! function_exists( 'benenson_child_dequeue_styles' ) ) {
	function benenson_child_dequeue_styles() {
		wp_dequeue_style( 'global-styles' );
		wp_deregister_style( 'global-styles' );

		wp_dequeue_style( 'print-styles' );
		wp_deregister_style( 'print-styles' );
	}
}

add_action( 'wp_enqueue_scripts', 'benenson_child_dequeue_styles', 20 );

/**
 * Enqueue child theme styles with the 'bb' prefix.
 *
 * @since 1.0.0
 * @return void
 */
if ( ! function_exists( 'benenson_child_enqueue_scripts' ) ) {
	function benenson_child_enqueue_scripts() {
		wp_enqueue_style( 'benenson-global-style', get_stylesheet_directory_uri() . '/assets/styles/app.css', [], '1.0.0', 'screen' );
		wp_enqueue_style( 'benenson-print-style', get_stylesheet_directory_uri() . '/assets/styles/print.css', [], '1.0.0', 'print' );
	}
}

add_action( 'wp_enqueue_scripts', 'benenson_child_enqueue_scripts', 20 );
