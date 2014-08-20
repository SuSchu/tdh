<?php if ( has_post_thumbnail() ) {?>
                  <?php
                    $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'story-quad' );
                    $url = $thumb['0'];
                  ?>
                  <a id="content" href="<?php the_permalink() ?>" >
                    <div class="col-6 col-xs-6 col-md-4 story withImg" style="background-image: url(<?=$url?>);">
                      <div class="content down">
                      	<div class="excerpt" style="height:8%;">
                <?php } else { ?>
                  <a id="content" href="<?php the_permalink() ?>" >
                    <div class="col-6 col-xs-6 col-md-4 story">
                      <div class="content">
                      	<div class="excerpt">
                <?php }?> 

                        <?php the_content(); ?></div>
                        <p class="author"><?php the_title(); ?>, Bern</p>
                      </div><!--/content-->
                    </div><!--/col-->
                  </a>