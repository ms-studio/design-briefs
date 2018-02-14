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


// Header Cleanup

remove_action('wp_head', 'wp_generator');

// Change Archive Title, rename "Tags:" into "Keywords"
// utiliser filtre: get_the_archive_title

add_filter( 'get_the_archive_title', function ( $title ) {
  if( is_tag() ) {
    $title = single_tag_title( 'keyword: ', false );
  }
    return $title;
});


/**
 * Functionality - 
 * Will be moved into a plugin at some point.
 *
*/

/*

 * Make Posts hierarchical
 Source: https://stackoverflow.com/questions/10750931/wordpress-how-to-add-hierarchy-to-posts
*/

add_action('registered_post_type', 'designbriefs_make_posts_hierarchical', 10, 2 );

// Runs after each post type is registered
function designbriefs_make_posts_hierarchical($post_type, $pto){

    // Return, if not post type posts
    if ($post_type != 'post') return;

    // access $wp_post_types global variable
    global $wp_post_types;

    // Set post type "post" to be hierarchical
    $wp_post_types['post']->hierarchical = 1;

    // Add page attributes to post backend
    // This adds the box to set up parent and menu order on edit posts.
    add_post_type_support( 'post', 'page-attributes' );

}


// Change loop for Front Page and Archive pages: query only for Parent=0 (no child-pages).
// See https://stackoverflow.com/questions/5414669/wordpress-wp-query-query-parent-pages-only

function designbriefs_no_parents( $query ) {
        if ( $query->is_archive() && !is_admin() ) {
           	$query->set( 'post_parent', 0);
            return $query;
            
        } else if ( $query->is_home() && $query->is_main_query() ) {
        
        	$query->set( 'post_parent', 0);
        	return $query;
					
        }
}
add_filter( 'pre_get_posts', 'designbriefs_no_parents' );

