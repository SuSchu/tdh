<?php if ( has_post_thumbnail() ) {?>
                  <?php
                    $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'story-quad' );
                  ?>
                  <a id="content" href="<?php the_permalink() ?>" >
                    <div class="col-6 col-xs-6 col-md-4 story withImg" style="background-image: url(<?php echo $thumb[0]; ?>);">
                      <div class="content down">
                      	<div class="excerpt" style="height:8%;">
                <?php } else { ?>
                  <a id="content" href="<?php the_permalink() ?>" >
                    <div class="col-6 col-xs-6 col-md-4 story">
                      <div class="content">
                      	<div class="excerpt">
                <?php }?> 

                        <?php the_excerpt(); ?></div>
                        <p class="author"><?php the_title(); ?>,<?php echo get_post_meta($post->ID, 'wohnort', true); ?> </p>
                      </div><!--/content-->
                    </div><!--/col-->
                  </a>