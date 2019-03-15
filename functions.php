<?php

add_action( 'init', 'register_my_menu' );

function register_my_menu() {
	register_nav_menu( 'main-menu', __( 'Main menu' ) );
}

if ( function_exists( 'add_theme_support' ) ) {
	add_theme_support( 'post-thumbnails' ); 
}

register_sidebar(array( 'before_title' => '<h3>', 'after_title' => '</h3>' ));



function custom_post_projects() {
    $args = array(
    	'public' 		=> true,
    	'label'  		=> 'Portfolio Items',
    	'supports'		=> array('title', 'editor', 'thumbnail', 'excerpt', 'page-attributes'),
		'has_archive'	=> false,
		'rewrite'		=> array( 
			'slug' 			=> 'projects',
			'with_front' 	=> '1',
			'capability_type'     => 'page'
		),
    );
    register_post_type( 'portfolio_items', $args );
}

add_action( 'init', 'custom_post_projects' );

add_filter( 'body_class', 'custom_class' );
function custom_class( $classes ) {
    if ( is_page_template( array( 'about.php', 'portfolio.php' ) ) ) {
        $classes[] = 'dark';
    }
    return $classes;
}

// Callback function to insert 'styleselect' into the $buttons array
function my_mce_buttons_2( $buttons ) {
	array_unshift( $buttons, 'styleselect' );
	return $buttons;
}
// Register our callback to the appropriate filter
add_filter( 'mce_buttons_2', 'my_mce_buttons_2' );

// Callback function to filter the MCE settings
function my_mce_before_init_insert_formats( $init_array ) {  
	// Define the style_formats array
	$style_formats = array(  
		// Each array child is a format with it's own settings
		array(  
			'title' => 'Lead',  
			'block' => 'p',  
			'classes' => 'case__lead',
			'wrapper' => false,
			
		),  
	);  
	// Insert the array, JSON ENCODED, into 'style_formats'
	$init_array['style_formats'] = json_encode( $style_formats );  
	
	return $init_array;  
  
} 
// Attach callback to 'tiny_mce_before_init' 
add_filter( 'tiny_mce_before_init', 'my_mce_before_init_insert_formats' );  

class animstion_primary_nav extends Walker_Nav_Menu {

	function start_el(&$output, $item, $depth=0, $args=array(), $id = 0) {
	
		$object = $item->object;
    	$type = $item->type;
    	$title = $item->title;
    	$description = $item->description;
    	$permalink = $item->url;

    	$output .= "<li class='" .  implode(" ", $item->classes) . "'>";

     
      	$output .= '<a href="' . $permalink . '" class="animsition-link" data-animsition-out-class="overlay-slide-out-right">';

       
      	$output .= $title;

   
      	$output .= '</a>';


	}

}



//if ( is_page_template( 'about.php' ) ) {
    // about.php is used
//}



?>