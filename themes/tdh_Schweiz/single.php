<?php get_header(); ?>
    <!-- Fixed navbar -->
    <div class="navbar" role="navigation">
      <div class="container">
          <div class="navbar-button">
            <a class="back-link" href="<?php echo esc_url( home_url( '/' ) ); ?>"><span class="icon-chevron-left"></span>  zurück zur Übersicht</a>
          </div>
          <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              
            </ul>
          </div>
      </div>
    </div>
    
    <!-- Stories ========================================= -->
    <div id="geschichten" class="single modul">
      <div class="title">
        <div class="container">
            <h2>Hast du einen Wegbegleiter?</h2>
            <p>Unser Leben wäre anders verlaufen, hätten wir keinen Mutmacher gehabt</p>
        </div>
      </div>
      <?php while ( have_posts() ) : the_post(); ?>
      <div class="page-nav"> 
        <div class="container">
          <div class="row"> 
            <nav class="col-xs-12">
              <?php previous_post_link('<p class="alignleft">&laquo; %link</p>', 'Letzte'); ?>
              <?php next_post_link('<p class="alignright">%link &raquo;</p>', 'Nächste'); ?>
            </nav>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row single-content">
        <?php if ( has_post_thumbnail() ) {?>
          <div class="col-xs-4">
          <?php
            $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'story-quad' );
          ?>
            <img src="<?php echo $thumb['0'];?>"/>
          </div>
        <?php } ?>
          <div class="col-xs-8">
            <h3><?php the_title(); ?></h3>
            <?php the_time('d.m.Y') ?>, <?php echo get_post_meta($post->ID, 'wohnort', true); ?>
            <?php the_content(); ?>
          </div>
        </div><!--/row-->
        <div class="btn-primary btn-storie" role="button">
          <a id="formshow"><span class="caret"></span>Jetzt deine Geschichte erzählen!</a>
          <?php get_sidebar( 'sidebar-1' ); ?>
        </div>
      </div><!--/container-->
      <?php endwhile; // end of the loop. ?>
    </div><!--/stories-->

<?php get_footer(); ?>



      
