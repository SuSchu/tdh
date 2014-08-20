<?php get_header(); ?>

    <!-- Teaser ========================================= -->
    <div id="kampagne">
      <div class="container">
        <div class="row ">
          <div class="col-6 col-sm-12 col-lg-6 teaser-text modul">
            <h2><?php the_title(); ?></h2>
            <?php the_content(); ?>
            <div class="fb-share-button" data-href="<?php the_permalink() ?>"></div>
            
          </div>
          <div class="col-6 col-sm-12 col-lg-6 teaser-call-to-action modul">
            <?php if ( has_post_thumbnail() ) {?>
                  <?php
                    $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'story-quad' );
                  ?>
                  <img src="<?php echo $thumb['0'];?>"/>
                <?php } ?>
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

<?php get_footer(); ?>


