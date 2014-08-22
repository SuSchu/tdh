<?php

// Menu Register
function register_my_menus() {
  register_nav_menus(
    array(
      'header-menu' => __( 'Header Menu' ),
      'footer-menu' => __( 'Footer Menu' )
    )
  );
}
add_action( 'init', 'register_my_menus' );

//register Post img
add_theme_support('post-thumbnails');

//register sidebar for Widgets
if ( function_exists('register_sidebar') ){
	register_sidebar( array(
	    'name'         => __( 'Form' ),
	    'id'           => 'sidebar-1',
	    'description'  => __( 'shows only the Widget Form from Gravity' ),
	    'before_widget' => '<div class="formcontent">',
		'after_widget' => '</div>',
	    'before_title' => '<h3>',
	    'after_title'  => '</h3>',
	) );
}

//register custom field at posts
get_post_meta($post_id, '$email', $single);

//add image sizes
if ( function_exists( 'add_image_size' ) ) { 
	add_image_size( 'story-quad', 390,390,true );
}

add_action( 'save_post', 'send_email' );
function send_email( $post_id ) {
// lets check if post is not revision
	if ( !wp_is_post_revision( $post_id ) ) {
		$post_url = get_permalink( $post_id );
		$subject = 'Image is approved';
		$message = "Your image is approved:\n\n";
		$message = "<a href='". $post_url. "'>Click here to view</a>\n\n";
		$email = get_post_meta($post_id, 'email');
		//sends email
		wp_mail($email, $subject, $message );
	}
}



?>