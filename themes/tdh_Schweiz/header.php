<!DOCTYPE html>
<html <?php language_attributes(); ?>
xmlns:og="http://opengraphprotocol.org/schema/"
xmlns:fb="http://www.facebook.com/2008/fbml">
  <head>

    <!-- Facebook Meta Data -->
    <meta property="og:image" content="<?php bloginfo('template_directory'); ?>/img/TDH_ILLUSTRATION-mini.jpg"/>
    <meta property="og:locality" content="Berlin"/>
    <meta property="og:country-name" content="Germany"/>
    <meta property="og:type" content="website"/>
    <meta property="og:title" content="Terre des Hommes - Leben statt Flucht Kampagne"/>

    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Terre des Hommes - Leben statt Flucht">
    <meta name="author" content="Wigwam">
    <link rel="icon" href="<?php bloginfo('template_directory'); ?>/favicon.ico">
    <link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/favicon.ico" />
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/js/jquery-ui.css">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,400,600|Open+Sans+Condensed:700' rel='stylesheet' type='text/css'>
       <?php
      /*
       * Print the <title> tag based on what is being viewed.
       */
      global $page, $paged;

      wp_title( '|', true, 'right' );

      // Add the blog name.
      bloginfo( 'name' );

      // Add the blog description for the home/front page.
      $site_description = get_bloginfo( 'description', 'display' );
      if ( $site_description && ( is_home() || is_front_page() ) )
        echo " | $site_description";

      // Add a page number if necessary:
      if ( $paged >= 2 || $page >= 2 )
        echo ' | ' . sprintf( __( 'Page %s', 'Wigwam' ), max( $paged, $page ) );
      ?>
    </title>

    <!-- Custom styles for this template -->
    <link href="<?php bloginfo('stylesheet_url');?>" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <?php wp_head(); ?>
  </head>

  <body <?php body_class(); ?> data-spy="scroll" data-target="#affix-menu">

    <!--Facebook Codes-->
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = "//connect.facebook.net/de_DE/sdk.js#xfbml=1&appId=579350375471078&version=v2.0";
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>
    

    <div id="header">
      <div id="mylist" class="mini">
        <img src="<?php bloginfo('template_directory'); ?>/img/TDH_ILLUSTRATION-mini.jpg"/>
      </div>
      <div id="mylist" class="normal">
        <img src="<?php bloginfo('template_directory'); ?>/img/TDH_ILLUSTRATION_bg.jpg"/>
        <ul>
          <li class="activeSlide"><img src="<?php bloginfo('template_directory'); ?>/img/TDH_ILLUSTRATION-big.jpg"/></li>
          <li>
            <img src="<?php bloginfo('template_directory'); ?>/img/TDH_ILLUSTRATION_step1-big.jpg"/>
            <div class="textbox step1">
              <h1><?php the_field('figur_1_titel', 78); ?></h1>
              <p><?php the_field('figur_1_text', 78); ?></p>
            </div>
          </li>
          <li>
            <img src="<?php bloginfo('template_directory'); ?>/img/TDH_ILLUSTRATION_step4-big.jpg"/>
            <div class="textbox step4">
              <h1><?php the_field('figur_4_titel', 78); ?></h1>
              <p><?php the_field('figur_4_text', 78); ?></p>       
            </div>
          </li>
          <li>
            <img src="<?php bloginfo('template_directory'); ?>/img/TDH_ILLUSTRATION_step5-big.jpg"/>
            <div class="textbox step5">
              <h1><?php the_field('figur_5_titel', 78); ?></h1>
              <p><?php the_field('figur_5_text', 78); ?></p>
            </div>
          </li>
          <li>
            <img src="<?php bloginfo('template_directory'); ?>/img/TDH_ILLUSTRATION_step6-big.jpg"/>
            <div class="textbox step6">
              <h1><?php the_field('figur_6_titel', 78); ?></h1>
              <p><?php the_field('figur_6_text', 78); ?></p>
            </div>
          </li>
          <li>
            <img src="<?php bloginfo('template_directory'); ?>/img/TDH_ILLUSTRATION_step7-big.jpg"/>
            <div class="textbox step7">
              <h1><?php the_field('figur_7_titel', 78); ?></h1>
              <p><?php the_field('figur_7_text', 78); ?></p>
            </div>
          </li>
          <li>
            <img src="<?php bloginfo('template_directory'); ?>/img/TDH_ILLUSTRATION_step9-big.jpg"/>
            <div class="textbox step9">
              <h1><?php the_field('figur_9_titel', 78); ?></h1>
              <p><?php the_field('figur_9_text', 78); ?></p>
            </div>
          </li>
          <li>
            <img src="<?php bloginfo('template_directory'); ?>/img/TDH_ILLUSTRATION_step10-big.jpg"/>
            <div class="textbox step11">
              <h1><?php the_field('figur_11_titel', 78); ?></h1>
              <p><?php the_field('figur_11_text', 78); ?></p>
            </div>
          </li>
          <li>
            <img src="<?php bloginfo('template_directory'); ?>/img/TDH_ILLUSTRATION_step11-big.jpg"/>
            <div class="textbox step12">
              <h1><?php the_field('figur_12_titel', 78); ?></h1>
              <p><?php the_field('figur_12_text', 78); ?></p>
            </div>
          </li>
          <li><img src="<?php bloginfo('template_directory'); ?>/img/TDH_ILLUSTRATION-big.jpg"/></li>
        </ul>
      </div>
      <div class="slider-wrapper">
        <div id="slider"></div>
      </div>
    </div>
