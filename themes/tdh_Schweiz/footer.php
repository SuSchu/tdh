    <!-- Donate ========================================= -->
    <div id="spenden">
      <div class="container">
        <div class="row">
          <div class="col-xs-12 col-sm-8 col-sm-height modul">
            <div class="title">
              <p><?php the_field('untertitel_spende', 78); ?></p>
              <h2><?php the_field('titel_spende', 78); ?></h2>
              <img class="logo-zewo" src="<?php bloginfo('template_directory'); ?>/img/zewo.png"/>
              
            </div>
            <div class="content">
              <div class="donate-block">
                <h3><span class="icon-rss"></span><?php the_field('titel_online', 78); ?></h3>
                <div class="row">
                  <div class="col-xs-12 col-md-6 sm-hide">
                    <img src="<?php bloginfo('template_directory'); ?>/img/donate.png"/>
                  </div>
                  <div class="col-xs-12 col-md-6 ">
                    <a class="btn-primary" target="_blank" href="http://www.terredeshommesschweiz.ch/spenden/online_spenden/" role="button">Jetzt Spenden!</a>
                    <?php the_field('text', 78); ?>
                  </div>
                </div>
              </div>
              <div class="donate-block">
                <h3><span class="icon-mobile-phone"></span><?php the_field('titel_sms', 78); ?></h3>
                <?php the_field('text_sms', 78); ?>
              </div> 
              <div class="donate-block">
                <h3><span class="icon-pencil"></span><?php the_field('titel_überweisung', 78); ?></h3>
                <?php the_field('text_überweisung', 78); ?>
              </div> 
              <div class="donate-block schein">
                <h3><span class="icon-envelope-o"></span><?php the_field('titel_schein', 78); ?></h3>
                <?php the_field('text_schein', 78); ?>
              </div>          
            </div>
          </div>
          <div class="col-xs-12 col-sm-4 col-sm-height thanks">
            <div class="content">
              <p class="first">first line</p>
              <img src="<?php bloginfo('template_directory'); ?>/img/donate-happygirl.png"/>
              <h4><?php the_field('titel_danke', 78); ?></h4>
              <p><?php the_field('text_danke', 78); ?></p>
              <img src="<?php bloginfo('template_directory'); ?>/img/Unterschrift-Valentin.png"/>
              <p><?php the_field('name_danke', 78); ?></p>
            </div>
          </div> 
        </div>           
      </div>
    </div>

    <div id="footer" class="modul">
      <div class="container">
      	 <div class="row">
      	 	<div class="col-xs-12 col-sm-12  col-md-4">
            	<h5>Eine Kampagne von</h5>
            	<p> 
            		<a class="tdh-logo" href="http://www.terredeshommesschweiz.ch/" target="_blank" alt="terre des hommes Schweiz Webseite Logo">
            			<img src="<?php bloginfo('template_directory'); ?>/img/tdh-logo-footer.png"></img>
            		</a>
            	</p>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4">
            	<h5><?php the_field('titel_adresse', 78); ?></h5>
            	<p><?php the_field('adresse', 78); ?></p>
            	<p>
                <?php the_field('telefonnummer', 78); ?><br />
                <?php the_field('emailadresse', 78); ?>
              </p>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4">
            	<h5><?php the_field('titel_konto', 78); ?></h5>
            	<p><?php the_field('konto', 78); ?></p>
            	<p><a href="http://www.terredeshommesschweiz.ch/" target="_blank" alt="terre des hommes Schweiz Webseite">www.terredeshommesschweiz.ch</a></p>
            </div>
        </div>
      </div>
    </div>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/js/jquery-1.10.2.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/js/jquery-ui.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/bootstrap/js/bootstrap.min.js"></script>

     <script>
  		$(function() {
  			var count = $("#mylist ul li").size();
        var sliderRange=150;
  	    $( "#slider" ).slider({ value: 10 });
  	    $( "#slider" ).slider({ min: 10 });
  	    $( "#slider" ).slider({ max: sliderRange });
        var RangeArea = sliderRange/count;

  	    $( "#slider" ).slider({
  	      slide: function( event, ui ) {
            var currentSlide = ui.value/RangeArea;
            var highlight = parseInt(Math.round(currentSlide));
            console.log(ui.value);

            if (!$("li.activeSlide").is(":nth-child("+highlight+")")){
              $( ".activeSlide" ).fadeToggle('slow').removeClass('activeSlide');
              $("#mylist ul li:nth-child(" + highlight + ")").fadeToggle('slow').addClass('activeSlide');
            }
  	        
  	      }
  	    });
  		});

     
      $("#geschichten").on({
        mouseenter: function () {
          $(this).children('.content').stop().animate({
            bottom: "0%",
            "padding-top":"35px"
          }, 1000 );
          $(this).find('.excerpt').stop().animate({
            height: "70%"
          }, 1000); 
        },
        mouseleave: function () {
          $(this).children('.content').stop().animate({
            bottom: "-85%",
            "padding-top":"15px"
          }, 1000); 
          $(this).find('.excerpt').stop().animate({
            height: "8%"
          }, 1000); 
        }
      }, ".story.withImg");

      if ($('#form .gform_wrapper').hasClass('gform_validation_error')){
        $( "#formshow" ).fadeToggle( "slow", function(){
          $( "#form" ).slideToggle( "slow");
        });
        $( ".btn-storie" ).addClass( "no-btn" );
      }


      $( "#formshow" ).click(function() {
        $( "#formshow" ).fadeToggle( "slow", function(){
          $( "#form" ).slideToggle( "slow");
        });
        $( ".btn-storie" ).addClass( "no-btn" );
      });
      $( "#formhide" ).click(function() {
        $( "#form" ).slideToggle( "slow", function(){
          $( "#formshow" ).fadeToggle( "slow");
        });
        $( ".btn-storie" ).removeClass( "no-btn" );
      });

      $( ".teaser-box2 .btn-more" ).click(function() {
        $( ".teaser-box2 .moreText").slideToggle("slow");
        $(".teaser-box2 .btn-more").hide();
      });

      $( ".teaser-box1 .btn-more" ).click(function() {
        $( ".teaser-box1 .moreText").slideToggle("slow");
        $(".teaser-box1 .btn-more").hide();
      });
     
     $('#affix-menu').affix({
        offset: {
          top: $('#header').height()
        }
      }); 

      $('.navbar-button.menu').click(function(){
        $('.navbar-collapse.collapse').fadeToggle();
      });

 
    
			
		// $( ".story.withImg .content" ).click(
  //           function( event ){
  //               // Prevent the default event.
  //               event.preventDefault();

  //               // Toggle the slide based on its current
  //               // visibility.
  //               if ($('this').css("bottom")==="-85%"){

  //                   // Hide - slide up.
  //                   $('this').animate({
		// 				bottom: '0%'
		// 			 }, 1000);

  //               } else if ($('this').css("bottom")==="0%") {

  //                   $('this').animate({
		// 				bottom: '-85%'
		// 			 }, 1000);

  //               }
  //           }
  //       );
	</script>

    <?php wp_footer(); ?>
  </body>
</html>