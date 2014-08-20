<?php get_header(); ?>

    <!-- Teaser ========================================= -->
    <div id="kampagne">
      <div class="container">
        <div class="row">
          <div class="col-xs-12 col-sm-6 col-sm-height teaser-box1">
            <h2>Werde Mutmacher.</h2>
            <p>Unser Leben wäre anders verlaufen, hätten wir keinen Mutmacher gehabt. This is a template for a simple marketing or informational website. It includes a large callout called a jumbotron and three supporting pieces of content. Use it as a starting point to create something more unique.</p>
            <a class="btn-more" role="button">mehr erfahren</a>
            <p class="moreText">Unser Leben wäre anders verlaufen, hätten wir keinen Mutmacher gehabt. This is a template for a simple marketing or informational website. It includes a large callout called a jumbotron and three supporting pieces of content. Use it as a starting point to create something more unique.</p>
            
            <a class="btn-primary" role="button"><span class="caret"></span>Jetzt Mutmacher werden.</a>

          </div>
          <div class="col-xs-12 col-sm-6 col-sm-height teaser-box2">
            <h2>Spende Mut.</h2>
            <p>Unser Leben wäre anders verlaufen, hätten wir keinen Mutmacher gehabt. This is a template for a simple marketing or informational website. It includes a large callout called a jumbotron and three supporting pieces of content. Use it as a starting point to create something more unique.</p>
            <a class="btn-more" role="button">mehr erfahren</a>
            <p class="moreText">Unser Leben wäre anders verlaufen, hätten wir keinen Mutmacher gehabt. This is a template for a simple marketing or informational website. It includes a large callout called a jumbotron and three supporting pieces of content. Use it as a starting point to create something more unique.</p>
            <img class="logo-zewo" src="<?php bloginfo('template_directory'); ?>/img/zewo.png"/>
            <img class="logo-tdh" src="<?php bloginfo('template_directory'); ?>/img/tdh-logo.png"/>
              
            <a class="btn-primary" role="button"><span class="caret"></span>Jetzt spenden.</a> 
          
          </div>
        </div>
      </div>
    </div>

    <!-- Stories ========================================= -->
    <div id="geschichten" class="modul">
      <div class="title">
        <div class="container">
            <h2>Hast du einen Wegbegleiter?</h2>
            <p>Unser Leben wäre anders verlaufen, hätten wir keinen Mutmacher gehabt</p>
        </div>
      </div>
      <div class="grid">
        <div class="container">
          <div class="row">

            <?php 
            echo do_shortcode('[ajax_load_more post_type="post" posts_per_page="6" scroll="false" button_label="Mehr Geschichten laden"]');
              
            ?>
          </div><!--/row-->
          <div class="btn-primary btn-storie" role="button">
            <a id="formshow"><span class="caret"></span>Jetzt deine Geschichte erzählen!</a>
            <?php get_sidebar( 'sidebar-1' ); ?>
          </div>
        </div><!--/container-->
      </div><!--/grid-->
    </div><!--/stories-->

    <!-- Projects ========================================= -->
    <div id="projekte" class="modul">
      <div class="title">
        <div class="container">
          <h2>Unsere Projekte</h2>
          <p>Unser Leben wäre anders verlaufen, hätten wir keinen Mutmacher gehabt</p>
        </div>
      </div>

      <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="item active">
            <img src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="First slide">
            <div class="container">
              <div class="carousel-caption">
                <h1>Example headline.</h1>
                <p>Note: If you're viewing this page via a <code>file://</code> URL, the "next" and "previous" Glyphicon buttons on the left and right might not load/display properly due to web browser security rules.</p>
                <a class="btn-primary" href="#" role="button"><span class="caret"></span>Sign up today</a>
              </div>
            </div>
          </div>
          <div class="item">
            <img src="data:image/gif;base64,R0lGODlhAQABAIAAAGZmZgAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Second slide">
            <div class="container">
              <div class="carousel-caption">
                <h1>Another example headline.</h1>
                <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                <a class="btn-primary" href="#" role="button"><span class="caret"></span>Learn more</a>
              </div>
            </div>
          </div>
          <div class="item">
            <img src="data:image/gif;base64,R0lGODlhAQABAIAAAFVVVQAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Third slide">
            <div class="container">
              <div class="carousel-caption">
                <h1>One more for good measure.</h1>
                <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                <a class="btn-primary" href="#" role="button"><span class="caret"></span>Browse gallery</a>
              </div>
            </div>
          </div>
        </div>
        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
      </div><!-- /.carousel -->
    </div>




<?php get_footer(); ?>


