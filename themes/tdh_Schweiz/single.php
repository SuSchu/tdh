<?php get_header(); ?>
    <!-- Fixed navbar -->
    <div class="navbar" role="navigation">
      <div class="container">
          <div class="navbar-button">
            <a class="back-link" href="<?php echo esc_url( home_url( '/#geschichten' ) ); ?>"><span class="icon-chevron-left"></span>  zurück zur Übersicht</a>
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

               <?php $prev_post = get_previous_post();
               if (!empty( $prev_post )): ?>
                <p class="alignleft">&laquo;
                  <a href="<?php echo get_permalink( $prev_post->ID ); ?>#geschichten">
                  Letzte</a>
                </p>
               <?php endif; ?>
              <?php $next_post = get_next_post();
               if (!empty( $next_post )): ?>
                <p class="alignright">
                  <a href="<?php echo get_permalink( $prev_post->ID ); ?>#geschichten">
                  Nächste</a>
                &raquo;</p>
               <?php endif; ?>
            </nav>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row single-content">
        <?php if ( has_post_thumbnail() && !has_category( 'mitvideo', $post->ID )) {?>
          <div class="col-xs-4">
          <?php
            $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'story-quad' );
          ?>
            <img src="<?php echo $thumb['0'];?>"/>
          </div>
          <div class="col-xs-8">
        <?php } else{ ?>
          <div class="col-xs-12">
        <?php } ?>
          
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



      
