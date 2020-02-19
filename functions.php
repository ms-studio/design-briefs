<?php 

// Change-Detector-XXXX - for Espresso.app


add_action( 'after_setup_theme', 'my_child_theme_setup' );
function my_child_theme_setup() {
    
			load_theme_textdomain( 'designbriefs', get_stylesheet_directory() . '/languages' );
    
}


function davis_load_style() {
		if ( ! is_admin() ) {
		
			// wp_register_style( 'davis_fonts', '//fonts.googleapis.com/css?family=PT+Serif:400,700,400italic,700italic' );
		
			wp_enqueue_style( 
					'parent-style', 
					get_template_directory_uri() . '/style.css', // main.css
					false, // dependencies
					'1.12' // version
			);
			
			wp_enqueue_style( 
					'theme-style', 
					get_stylesheet_directory_uri() . '/style.css', // main.css
					false, // dependencies
					null // version
			);
				
		} 
}
add_action( 'wp_enqueue_scripts', 'davis_load_style' );


/**
 * Functionality
 * Has been moved into plugin: 
 *
*/

