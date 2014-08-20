<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>

    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="BootstrapTheme Test">
    <meta name="author" content="Wigwam">
    <link rel="icon" href="../../favicon.ico">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,400,300,700,600' rel='stylesheet' type='text/css'>
    <title>
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
      <div id="mylist">
        <img src="<?php bloginfo('template_directory'); ?>/img/background.jpg"/>
        <ul>
          <li class="activeSlide"><img src="<?php bloginfo('template_directory'); ?>/img/step0.png"/></li>
          <li><img src="<?php bloginfo('template_directory'); ?>/img/step1.png"/></li>
          <li>3</li>
          <li>4</li>
        </ul>
      </div>
      <div id="slider"></div>
    </div>
