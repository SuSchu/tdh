    <!-- Donate ========================================= -->
    <div id="spenden">
      <div class="container">
        <div class="row">
          <div class="col-xs-12 col-sm-8 col-sm-height modul">
            <div class="title">
              <p>Werde Mutmacher!</p>
              <h2>Spende Mut!</h2>
              <img class="logo-zewo" src="<?php bloginfo('template_directory'); ?>/img/zewo.png"/>
              
            </div>
            <div class="content">
              <div class="donate-block">
                <h3><span class="icon-rss"></span>Online</h3>
                <div class="row">
                  <div class="col-xs-12 col-md-6 sm-hide">
                    <img src="<?php bloginfo('template_directory'); ?>/img/donate.png"/>
                  </div>
                  <div class="col-xs-12 col-md-6 ">
                    <a class="btn-primary" target="_blank" href="http://www.terredeshommesschweiz.ch/spenden/online_spenden/" role="button">Jetzt Spenden!</a>
                    <p>
                      Du wirst auf die terre des hommes 
                      Spendenseite weitergeleitet. 
                      (Spende via Postcard/Kreditkarte)
                    </p>
                  </div>
                </div>
              </div>
              <div class="donate-block">
                <h3><span class="icon-mobile-phone"></span>per SMS</h3>
                <p>
                  Einfach „MUT“ plus Spendenbeitrag an die 339 senden
                  (Gratis-SMS, Der Betrag wird deiner nächsten 
                  Telefonrechnung belastet.)
                </p>
              </div> 
              <div class="donate-block">
                <h3><span class="icon-pencil"></span>per Überweisung</h3>
                <p>
                  Hilf uns Kosten sparen! 
                  Unterstütze unsere Arbeit direkt per Online-Banking.
                  <br />
                  <br />
                  <b>terre des hommes schweiz, Basel<br />
                      Kontonummer 40-260-2<br />
                      IBAN CH18 0900 0000 4000 0260 2 
                  </b>
                </p>
              </div> 
              <div class="donate-block schein">
                <h3><span class="icon-envelope-o"></span>per Einzahlungsschein</h3>
                <p>
                  Sende uns deine Postadresse per 
                  <a href="mailto:einzahlung@terredeshommesschweiz.ch?Subject=Spenden%20per%20Einzahlungsschein" target="_top">
                  E-Mail</a>
                   und wir schicken 
                  dir umgehend einen Einzahlungsschein.
                </p>
              </div>          
            </div>
          </div>
          <div class="col-xs-12 col-sm-4 col-sm-height thanks">
            <div class="content">
              <p class="first">first line</p>
              <img src="<?php bloginfo('template_directory'); ?>/img/donate-happygirl.png"/>
              <h4>Deine Spende macht Mut!</h4>
              <p>Deine Spende macht Mut!
                  Du unterstützt mit deiner 
                  Spende Kinder und Jugendliche 
                  darin, ihr Leben selbst in 
                  die Hand zu nehmen. 
                  Danke, dass du ihnen die 
                  Chance auf eine bessere 
                  Zukunft schenkst. 
              </p>
              <img src="<?php bloginfo('template_directory'); ?>/img/Unterschrift-Valentin.png"/>
              <p>Sonja Valentin</p>
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
            	<h5>terre des hommes schweiz</h5>
            	<p>Laufenstrasse 12<br />
            		CH - 4018 Basel
            	</p>
            	<p>+41 61 338 91 38<br />
                <a href="mailto:info@terredeshommes.ch" target="_top">
                  info(at)terredeshommes.ch</a>
            	</p>

            </div>
            <div class="col-xs-12 col-sm-6 col-md-4">
            	<h5>Kontoinformationen</h5>
            	<p>Postkonto 40-260-2<br />
            		IBAN: CH18 0900 0000 4000 0260 2
            	</p>
            	<p><br />
            		<a href="http://www.terredeshommesschweiz.ch/" target="_blank" alt="terre des hommes Schweiz Webseite">www.terredeshommesschweiz.ch</a>
            	</p>
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