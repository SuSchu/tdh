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

function videoembeded($atts, $content = null) {
	return '<div class="videoembeded">' . $content . '</div>';
}
add_shortcode('video', 'videoembeded');

//register custom field at posts
get_post_meta($post_id, '$email', $single);
get_post_meta($post_id, '$wohnort', $single);

//add image sizes
if ( function_exists( 'add_image_size' ) ) { 
	add_image_size( 'story-quad', 390,390,true );
}

function ik_send_email($post_id){
	//get e-mail address from post meta field
	$email_address = get_post_meta($post_id, 'email', true);
 
	$subject = "Your Subject Here!";
	$body = "Thank you for your submission!  Your story has been approved!";
 
	//use this to set the From address of the e-mail
	$headers = 'From: From Address <susan@wigwam.im>' . "\r\n";
 
	if(wp_mail($email_address, $subject, $body, $headers)){
		//mail sent!
	} else {
		//failure!
	}
}
add_action('publish_post','ik_send_email');



?>