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
	$post_url = get_permalink($post_id);
	$name = get_the_title($post_id);
 
	$subject = "Bestätigung: Leben statt Flucht - Deine Mutgeschichte";
	$body = "Guten Tag ".$name.".
Du hast vor kurzem deine Mutmacher-Geschichte mit terre des hommes schweiz auf www.lebenstattflucht.ch geteilt. Sie ist jetzt online. Du findest sie unter diesem ".$post_url.", wo Du sie auch weiterverbreiten kannst. Schicke sie zum Beispiel deinem Mutmacher / deiner Mutmacherin. 

Danke dass Du mitgemacht hast!

Hilf uns dabei, Jugendliche dabei zu unterstützen, sich ein Leben ohne Gewalt und Armut aufzubauen. Spende Mut!

Weitere Informationen findest Du auf unserer Webseite www.terredeshommesschweiz.ch

Mit herzlichen Grüssen
terre des hommes schweiz

ps: falls Du keine Geschichte auf www.lebenstattflucht.h gepostet hast,  melde Dich bitte umgehend bei info@terredeshommes.ch

---------------------------------------------------
terre des hommes schweiz
Laufenstrasse 12
4018 Basel

Telefon +41 61 338 91 38";
 
	 
	$header = "From: terres des hommes schweiz <s.valentin@terredeshommes.ch>\r\n";
 
	if(wp_mail($email_address, $subject, $body, $headers)){
		echo "Mail wurde gesendet!";
	} else {
		echo "Mail wurde nicht gesendet!";
	}
}
add_action('publish_post','ik_send_email');



?>