<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>

    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Terre des Hommes - Leben statt Flucht">
    <meta name="author" content="Wigwam">
    <link rel="icon" href="<?php bloginfo('template_directory'); ?>/favicon.ico">
    <link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/favicon.ico" />
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/js/jquery-ui.css">
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
        <img src="<?php bloginfo('template_directory'); ?>/img/TDH_ILLUSTRATION_bg.jpg"/>
        <ul>
          <li class="activeSlide"><img src="<?php bloginfo('template_directory'); ?>/img/TDH_ILLUSTRATION-big.jpg"/></li>
          <li>
            <img src="<?php bloginfo('template_directory'); ?>/img/TDH_ILLUSTRATION_step1-big.jpg"/>
            <div class="textbox step1">
              <h2>Auf und davon</h2>
              <p>Viele Jugendliche verlassen ihren Herkunftsort, um anderswo eine Arbeit zu finden. Mädchen finden oft eine Anstellung als Hausangestellte, wo sie unter sehr harten Bedingungen arbeiten. Manche Mädchen und junge Frauen wollen aber auch Armut und Gewalt an ihrem Heimatort entkommen, und entschliessen sich deshalb, wegzugehen.</p>
            </div>
          </li>
          <li>
            <img src="<?php bloginfo('template_directory'); ?>/img/TDH_ILLUSTRATION_step4-big.jpg"/>
            <div class="textbox step4">
              <h2>Den Mut aufbringen</h2>
              <p>Es braucht viel Mut, sich aus diesen schwierigen Situationen zu befreien. Mut alleine reicht jedoch nicht.</p>
            </div>
          </li>
          <li>
            <img src="<?php bloginfo('template_directory'); ?>/img/TDH_ILLUSTRATION_step5-big.jpg"/>
            <div class="textbox step5">
              <h2>Ein sicherer Ort</h2>
              <p>Wichtig sind Anlaufstellen für Mädchen und junge Frauen, die Gewalt und Ausbeutung erleben. Sie sind ein sicherer Ort, wo die Jugendlichen Schutz finden, Unterstützung erhalten und sich mit Gleichaltrigen austauschen können.</p>
            </div>
          </li>
          <li>
            <img src="<?php bloginfo('template_directory'); ?>/img/TDH_ILLUSTRATION_step6-big.jpg"/>
            <div class="textbox step6">
              <h2>Psychologische Betreuung</h2>
              <p>Die Mädchen und jungen Frauen erhalten dort zunächst psychologische Betreuung. Das hilft ihnen, Traumata zu überwinden und ihr Selbstbewusstsein zu stärken. Dies ist die Voraussetzung dafür, dass sie ihr Leben in die Hand nehmen können.</p>
            </div>
          </li>
          <li>
            <img src="<?php bloginfo('template_directory'); ?>/img/TDH_ILLUSTRATION_step7-big.jpg"/>
            <div class="textbox step7">
              <h2>Die eigenen Fähigkeiten kennen</h2>
              <p>In einem weiteren Schritt können die Jugendlichen ihre Kompetenzen erweitern. Sie können Workshops besuchen, merken, welches ihre Stärken und Fähigkeiten sind und lernen ihre Rechte kennen.</p>
            </div>
          </li>
          <li>
            <img src="<?php bloginfo('template_directory'); ?>/img/TDH_ILLUSTRATION_step9-big.jpg"/>
            <div class="textbox step9">
              <h2>Einkommen schaffen</h2>
              <p>Dazu gehört auch das Erlernen eines praktischen Handwerkes und das Wissen, wie man sich ein kleines Geschäft aufbaut. Den Mädchen und jungen Frauen wird Mut gemacht, Projekte umzusetzen und sich ein eigenes Einkommen zu schaffen.</p>
            </div>
          </li>
          <li>
            <img src="<?php bloginfo('template_directory'); ?>/img/TDH_ILLUSTRATION_step10-big.jpg"/>
            <div class="textbox step1">
              <h2>In kleinen Schritten in die Unabhängigkeit</h2>
              <p>Die Mädchen und jungen Frauen können Erfahrungen sammeln und werden Schritt für Schritt in die Unabhängigkeit begleitet.</p>
            </div>
          </li>
          <li>
            <img src="<?php bloginfo('template_directory'); ?>/img/TDH_ILLUSTRATION_step11-big.jpg"/>
            <div class="textbox step1">
              <h2>Mutig in die Zukunft</h2>
              <p>Sie bauen sich ein selbständiges Leben ohne Gewalt auf und gestalten ihre Zukunft nun selbst. Leben statt Flucht. Mutmachen lohnt sich!</p>
            </div>
          </li>
          <li><img src="<?php bloginfo('template_directory'); ?>/img/TDH_ILLUSTRATION-big.jpg"/></li>
        </ul>
      </div>
      <div class="slider-wrapper">
        <div id="slider"></div>
      </div>
    </div>
