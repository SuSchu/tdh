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
    <div id="kampagne" class="single modul">
      <?php while ( have_posts() ) : the_post(); ?>
      <div class="container">
        <div class="row">
          <div class="col-xs-8">
            <?php the_content(); ?>
          </div>
        </div><!--/row-->
      </div><!--/container-->
      <?php endwhile; // end of the loop. ?>
    </div>
<?php get_footer(); ?>



      
