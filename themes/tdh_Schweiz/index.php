<?php get_header(); ?>

    <!-- Fixed navbar -->
    <div id="affix-menu" class="navbar" role="navigation">
      <div class="container">
          <div class="navbar-button menu">
            <span class="icon-align-justify"></span>
          </div>
          <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <?php wp_nav_menu( array('menu' => 'Header Menu','link_before' => '<span>',
                        'link_after' => '</span>','items_wrap' => '%3$s', 'container' => '') ); ?> 
            </ul>
          </div>
      </div>
    </div>

    <!-- Teaser ========================================= -->
    <div id="kampagne">
      <div class="container">
        <div class="row">
          <div class="col-xs-12 col-sm-6 col-sm-height teaser-box1">
            <h2><?php the_field('titel_box_1', 78); ?></h2>
            <?php the_field('vorschau_text_box_1', 78); ?>
            <a class="btn-more" role="button">mehr erfahren</a>
            <div class="moreText"><?php the_field('nachgeladener_text_box_1', 78); ?></div>
            <a href="<?php the_field('action_button_link_box_1', 78); ?>" class="btn-primary" role="button"><span class="caret"></span>
              <?php the_field('action_button_text_box_1', 78); ?>
            </a>

          </div>
          <div class="col-xs-12 col-sm-6 col-sm-height teaser-box2">
            <h2><?php the_field('titel_box_2', 78); ?></h2>
            <?php the_field('vorschau_text_box_2', 78); ?>
            <a class="btn-more" role="button">mehr erfahren</a>
            <div class="moreText"><?php the_field('nachgeladener_text_box_2', 78); ?></div>
            <img class="logo-zewo" src="<?php bloginfo('template_directory'); ?>/img/zewo.png"/>
            <img class="logo-tdh" src="<?php bloginfo('template_directory'); ?>/img/tdh-logo.png"/>
            <a target="_blank" href="<?php the_field('action_button_link_box_2', 78); ?>" class="btn-primary" role="button">
              <span class="caret"></span><?php the_field('action_button_text_box_2', 78); ?>
            </a>
          </div>
        </div>
      </div>
    </div>

    <!-- Stories ========================================= -->
    <div id="geschichten" class="modul">
      <div class="title">
        <div class="container">
            <h2><?php the_field('mutgeschichten_titel', 78); ?></h2>
            <p><?php the_field('mutgeschichten_untertitel', 78); ?></p>
        </div>
      </div>
      <div class="grid">
        <div class="container">
          <div class="row myquery">
            <?php $my_query = new WP_Query( 'category_name=highlightstories' ); ?>
            <?php $countHigh = 0;?>

          <?php while ( $my_query->have_posts() ) : $my_query->the_post(); ?>

            <?php $countHigh = $countHigh + 1;
            if ( has_post_thumbnail() ) {?>
                  <?php
                    $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'story-quad' );
                  ?>
                  <a id="content" href="<?php the_permalink() ?>/#geschichten" >
                    <div class="col-6 col-xs-6 col-md-4 story withImg" style="background-image: url(<?php echo $thumb[0]; ?>);">
                      <div class="content down">
                        <div class="excerpt" style="height:8%;">
                <?php } else { ?>
                  <a id="content" href="<?php the_permalink() ?>/#geschichten" >
                    <div class="col-6 col-xs-6 col-md-4 story">
                      <div class="content">
                        <div class="excerpt">
                <?php }?> 

                        <?php the_excerpt(); ?></div>
                        <p class="author"><?php the_title(); ?></p>
                      </div><!--/content-->
                    </div><!--/col-->
                  </a>
          <?php endwhile; 
          $countExt= 6 - $countHigh;
          ?>

            <?php 
            echo do_shortcode('[ajax_load_more post_type="post" category="extern-stories" posts_per_page="'.$countExt.'" scroll="false" button_label="Mehr Geschichten laden"]');
            ?>
          </div><!--/row-->
          <div class="btn-primary btn-storie" role="button">
            <a id="formshow">
              <span class="caret"></span><?php the_field('mutgeschichten_action_button_text', 78); ?>
            </a>
            <?php get_sidebar( 'sidebar-1' ); ?>
          </div>
        </div><!--/container-->
      </div><!--/grid-->
    </div><!--/stories-->

    <!-- Projects ========================================= -->
    <div id="projekte" class="modul">
      <div class="title">
        <div class="container">
          <h2><?php the_field('projekte_titel', 78); ?></h2>
          <p><?php the_field('projekte_untertitel', 78); ?></p>
        </div>
      </div>

      <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="false">
        <div class="container">
          <!-- Indicators -->
          <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
            <li data-target="#myCarousel" data-slide-to="3"></li>
          </ol>
          <div class="carousel-inner">
            
            <div class="item active">
              <div class="row">
                <div class="carousel-caption">
                  <div class="col-xs-12 col-sm-6">
                    <?php if( get_field('bild_projekt_1', 78) ): ?>
                      <img src="<?php the_field('bild_projekt_1', 78); ?>" />
                    <?php endif; ?>
                    <h3><?php the_field('titel_projekt_1', 78); ?></h3>
                    <h5><?php the_field('titel_textbox1_projekt_1', 78); ?></h5>
                    <div><?php the_field('textbox1_projekt_1', 78); ?></div> 
                  </div>
                  <div class="col-xs-12 col-sm-6">
                    <h5><?php the_field('titel_textbox2_projekt_1', 78); ?></h5>
                    <div><?php the_field('textbox2_projekt_1', 78); ?></div>
                    <p class="quote"><?php the_field('highlightbox_projekt_1', 78); ?></p>
                    <a target="_blank" href="<?php the_field('action_button_link_projekt_1', 78); ?>" class="btn-primary" role="button">
                      <span class="caret"></span><?php the_field('action_button_text_projekt_1', 78); ?>
                    </a>
                    <div><?php the_field('textbox3_projekt_1', 78); ?></div>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="row">
                <div class="carousel-caption">
                  <div class="col-xs-12 col-sm-6">
                    <?php if( get_field('bild_projekt_2', 78) ): ?>
                      <img src="<?php the_field('bild_projekt_2', 78); ?>" />
                    <?php endif; ?>
                    <h3><?php the_field('titel_projekt_2', 78); ?></h3>
                    <h5><?php the_field('titel_textbox1_projekt_2', 78); ?></h5>
                    <div><?php the_field('textbox1_projekt_2', 78); ?></div> 
                  </div>
                  <div class="col-xs-12 col-sm-6">
                    <h5><?php the_field('titel_textbox2_projekt_2', 78); ?></h5>
                    <div><?php the_field('textbox2_projekt_2', 78); ?></div>
                    <p class="quote"><?php the_field('highlightbox_projekt_2', 78); ?></p>
                    <a target="_blank" href="<?php the_field('action_button_link_projekt_2', 78); ?>" class="btn-primary" role="button">
                      <span class="caret"></span><?php the_field('action_button_text_projekt_2', 78); ?>
                    </a>
                    <div><?php the_field('textbox3_projekt_2', 78); ?></div>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="row">
                <div class="carousel-caption">
                  <div class="col-xs-12 col-sm-6">
                    <?php if( get_field('bild_projekt_3', 78) ): ?>
                      <img src="<?php the_field('bild_projekt_3', 78); ?>" />
                    <?php endif; ?>
                    <h3><?php the_field('titel_projekt_3', 78); ?></h3>
                    <h5><?php the_field('titel_textbox1_projekt_3', 78); ?></h5>
                    <div><?php the_field('textbox1_projekt_3', 78); ?></div> 
                  </div>
                  <div class="col-xs-12 col-sm-6">
                    <h5><?php the_field('titel_textbox2_projekt_3', 78); ?></h5>
                    <div><?php the_field('textbox2_projekt_3', 78); ?></div>
                    <p class="quote"><?php the_field('highlightbox_projekt_3', 78); ?></p>
                    <a target="_blank" href="<?php the_field('action_button_link_projekt_3', 78); ?>" class="btn-primary" role="button">
                      <span class="caret"></span><?php the_field('action_button_text_projekt_3', 78); ?>
                    </a>
                    <div><?php the_field('textbox3_projekt_3', 78); ?></div>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="row">
                <div class="carousel-caption">
                  <div class="col-xs-12 col-sm-6">
                    <?php if( get_field('bild_projekt_4', 78) ): ?>
                      <img src="<?php the_field('bild_projekt_4', 78); ?>" />
                    <?php endif; ?>
                    <h3><?php the_field('titel_projekt_4', 78); ?></h3>
                    <h5><?php the_field('titel_textbox1_projekt_4', 78); ?></h5>
                    <div><?php the_field('textbox1_projekt_4', 78); ?></div> 
                  </div>
                  <div class="col-xs-12 col-sm-6">
                    <h5><?php the_field('titel_textbox2_projekt_4', 78); ?></h5>
                    <div><?php the_field('textbox2_projekt_4', 78); ?></div>
                    <p class="quote"><?php the_field('highlightbox_projekt_4', 78); ?></p>
                    <a target="_blank" href="<?php the_field('action_button_link_projekt_4', 78); ?>" class="btn-primary" role="button">
                      <span class="caret"></span><?php the_field('action_button_text_projekt_4', 78); ?>
                    </a>
                    <div><?php the_field('textbox3_projekt_4', 78); ?></div>
                  </div>
                </div>
              </div>
            </div>
            
          </div><!-- /inner.carousel -->
          <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev"><span class="icon-chevron-left"></span></a>
          <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next"><span class="icon-chevron-right"></span></a>
        </div>
      </div><!-- /.carousel -->
    </div><!-- /.projekte -->




<?php get_footer(); ?>


