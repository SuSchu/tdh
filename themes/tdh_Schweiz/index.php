<?php get_header(); ?>

    <!-- Fixed navbar -->
    <div id="affix-menu" class="navbar" role="navigation">
      <div class="container">
          <div class="navbar-button">
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
            <h2>Werde Mutmacher.</h2>
            <p>Unser Leben wäre anders verlaufen, hätten wir keinen Mutmacher gehabt. This is a template for a simple marketing or informational website. It includes a large callout called a jumbotron and three supporting pieces of content. Use it as a starting point to create something more unique.</p>
            <a class="btn-more" role="button">mehr erfahren</a>
            <p class="moreText">Unser Leben wäre anders verlaufen, hätten wir keinen Mutmacher gehabt. This is a template for a simple marketing or informational website. It includes a large callout called a jumbotron and three supporting pieces of content. Use it as a starting point to create something more unique.</p>
            
            <a target="_blank" href="#geschichten" class="btn-primary" role="button"><span class="caret"></span>Jetzt Mutmacher werden.</a>

          </div>
          <div class="col-xs-12 col-sm-6 col-sm-height teaser-box2">
            <h2>Spende Mut.</h2>
            <p>Unser Leben wäre anders verlaufen, hätten wir keinen Mutmacher gehabt. This is a template for a simple marketing or informational website. It includes a large callout called a jumbotron and three supporting pieces of content. Use it as a starting point to create something more unique.</p>
            <a class="btn-more" role="button">mehr erfahren</a>
            <p class="moreText">Unser Leben wäre anders verlaufen, hätten wir keinen Mutmacher gehabt. This is a template for a simple marketing or informational website. It includes a large callout called a jumbotron and three supporting pieces of content. Use it as a starting point to create something more unique.</p>
            <img class="logo-zewo" src="<?php bloginfo('template_directory'); ?>/img/zewo.png"/>
            <img class="logo-tdh" src="<?php bloginfo('template_directory'); ?>/img/tdh-logo.png"/>
              
            <a target="_blank" href="http://www.terredeshommesschweiz.ch/spenden/online_spenden/" class="btn-primary" role="button"><span class="caret"></span>Jetzt spenden.</a> 
          
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
          <li data-target="#myCarousel" data-slide-to="3"></li>
        </ol>
        <div class="carousel-inner container">
          <div class="item active">
            <div class="container">
              <div class="row">
                <div class="carousel-caption">
                <div class="col-xs-12 col-sm-6">
                  <img src="<?php bloginfo('template_directory'); ?>/img/tansania.jpg"/>
                  <h3>Tansania</h3>
                  <h5>Minen, Slums und Ausbeutung in Tansania </h5>
                  <p>Der Geita-Distrikt im Nordwesten Tansanias ist bekannt für seine Goldmine. 
                  Hierher kommen Menschen aus dem ganzen Land, um Arbeit zu finden. 
                  Darunter auch viele Jugendliche. Manche von ihnen sind im informellen Kleinabbau tätig, 
                  wo sie ungeschützt mit giftigen Substanzen wie Quecksilber arbeiten. 
                  Viele Mädchen und junge Frauen arbeiten in Bars und Restaurants. 
                  Durch die Zuwanderung entstehen Slums, wo Alkoholismus, 
                  Gewalt und Prostitution an der Tagesordnung sind. 
                  Die HIV-Rate ist dort sehr hoch. Mädchen und junge Frauen sind besonders gefährdet, 
                  da sie sexuellen Übergriffen oftmals schutzlos ausgeliefert sind.</p> 
                </div>
                <div class="col-xs-12 col-sm-6">
                  <h5>Umfassende Betreuung und Prävention</h5>
                  <p>Von HIV oder Gewalt betroffene Jugendliche werden von der terre des hommes 
                  schweiz-Partnerorganisation Nelico psychologisch betreut. Nelico ist eine Anlaufstelle, 
                  die auch selbst aktiv wird, wenn sie von Fällen von Misshandlungen oder anderen Notsituationen hört. 
                  Die Jugendlichen erhalten auch medizinische Hilfe und materielle Unterstützung. 
                  Dank der kostenlosen Rechtsberatung können sich viele Mädchen und Frauen gegen Missbrauch wehren. 
                  Nelico macht auch Aufklärungsarbeit um die weitere Verbreitung von HIV und Gewalt einzudämmen. 
                  Sie beziehen Behörden, Schulen und Repräsentanten des öffentlichen Lebens in die Arbeit ein. 
                  So werden die Massnahmen von diesen mitgetragen und sind nachhaltig.</p>
                  <p class="quote">Fast die Hälfte der Mädchen in den Minen-Slums ist HIV-positiv.</p>
                  <a target="_blank" href="http://www.terredeshommesschweiz.ch/spenden/online_spenden/" class="btn-primary" role="button"><span class="caret"></span>Jetzt spenden.</a>
                  <a target="_blank" href="http://www.terredeshommesschweiz.ch/ausland/tansania/">Mehr Informationen zu unseren Projekten in Tansania</a>
                </div>
                </div>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="container">
              <div class="carousel-caption row">
                <div class="col-xs-12 col-sm-6">
                  <img src="<?php bloginfo('template_directory'); ?>/img/peru.jpg"/>
                  <h3>Peru</h3>
                  <h5>Hartes Leben für junge Hausangestellte in Peru</h5>
                  <p>In Peru fliehen viele Mädchen vor der Armut auf dem Land in Städte, 
                    um dort als Hausangestellte zu arbeiten. Die Mädchen, darunter zahlreiche minderjährige, 
                    arbeiten bis zu 15 Stunden pro Tag, sechs Tage die Woche. Sie verdienen 
                    sehr wenig und werden nicht selten um ihren Lohn geprellt. Häufig wohnen sie bei 
                    den Arbeitgebern und es kommt manchmal zu Misshandlungen. Manche Mädchen sind sich 
                    gar nicht bewusst darüber, dass sie einer Arbeit nachgehen, zu der es gesetzlich 
                    festgehaltene Rechte gibt und für die sie entlohnt werden müssten. 
                    So wird mitunter 8-Jährigen gesagt, 
                    sie „helfen einer Tante“, wobei die Frau nicht einmal eine Blutsverwandte ist.</p> 
                </div>
                <div class="col-xs-12 col-sm-6">
                  <h5>Traumabewältigung und ein zweites Standbein</h5>
                  <p>Sisaryi, eine Partnerorganisation von terre des hommes schweiz, 
                    wurde von ehemaligen Hausangestellten gegründet. 
                    Mädchen und junge Frauen in Ayacucho, die als Hausmädchen, manchmal aber auch in Restaurants arbeiten, 
                    haben dort einen Treffpunkt, wo sie an ihrem freien Tag der sozialen 
                    Isolation entkommen und mit Gleichaltrigen sein können. Die oftmals von Gewalterfahrungen 
                    traumatisierten Mädchen werden psychologisch betreut und nehmen an Kursen teil, bei denen sie lernen, 
                    sich ein zweites Standbein mit Nähen oder Süssigkeiten herstellen aufzubauen. Sisaryi kämpft auch 
                    für die Einhaltung des Arbeitsgesetzes 
                    und ist in Kontakt mit dem lokalen Arbeitsministerium und der Abendschule.</p>
                  <p class="quote">70 % der Arbeitgeberinnen missachten das Gesetz.</p>
                  <a target="_blank" href="http://www.terredeshommesschweiz.ch/spenden/online_spenden/" class="btn-primary" role="button"><span class="caret"></span>Jetzt spenden.</a>
                  <a target="_blank" href="http://www.terredeshommesschweiz.ch/ausland/peru/">Mehr Informationen zu unseren Projekten in Peru</a>
                </div>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="container">
              <div class="carousel-caption row">
                <div class="col-xs-12 col-sm-6">
                  <img src="<?php bloginfo('template_directory'); ?>/img/nicaragua.jpg"/>
                  <h3>Nicaragua</h3>
                  <h5>Zurückgelassene Kinder</h5>
                  <p>Im extrem armen Nordosten Nicaraguas leben viele Familien vom Kaffeeanbau. 
                    Trotz gesetzlichem Verbot arbeiten viele Kinder vor allem während der Erntezeit November 
                    bis März auf den Plantagen mit. Hinzu kommt, dass diese zentrale Einkommensquelle seit zwei 
                    Jahren bedroht ist. Ein Pilz zerstört die Pflanzen. Zahlreiche Eltern wandern deshalb 
                    auf der Suche nach Arbeit in Städte ab, wobei oftmals die Kinder alleine zurück bleiben. 
                    Auf dem örtlichen Markt sind vermehr 
                    offensichtlich stark verwahrloste Kinder auf der Suche nach Essen und Arbeit anzutreffen.</p> 
                </div>
                <div class="col-xs-12 col-sm-6">
                  <h5>Gemeinde hilft mit</h5>
                  <p>Die Organisation Jinotega arbeitet daran, dass Polizei, 
                    Schulen und Marktleute Mitverantwortung für die Kinder übernehmen. 
                    Tatsächlich sind die Marktleute inzwischen aufmerksam auf Kinder, die auf dem Markt 
                    Essen oder Arbeit suchen und helfen ihnen oder ziehen Jinotega hinzu. 
                    Jinotega sorgt auch dafür, dass Kinder trotz der schwierigen Situation weiter in die Schule 
                    gehen und an Freizeitaktivitäten teilnehmen  - damit sie auch einfach Kinder sein dürfen. 
                    Jinotega ist zudem Anlaufstellen für Kinder und Familien, in denen es Gewaltprobleme gibt. 
                    Die Organisation unterstützt die Kinder auch bei der Selbstorganisation. Sie baute Kinderkomitees auf, 
                    in denen Kinder und Jugendliche sich selbst für ihre Rechte einsetzen.</p>
                  <p class="quote">Eine Viertelmillion Kinder in Nicaragua arbeitet auf Kaffeeplantagen.</p>
                  <a target="_blank" href="http://www.terredeshommesschweiz.ch/spenden/online_spenden/" class="btn-primary" role="button"><span class="caret"></span>Jetzt spenden.</a>
                  <a target="_blank" href="http://www.terredeshommesschweiz.ch/ausland/nicaragua/">Mehr Informationen zu unseren Projekten in Nicaragua</a>
                </div>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="container">
              <div class="carousel-caption row">
                <div class="col-xs-12 col-sm-6">
                  <img src="<?php bloginfo('template_directory'); ?>/img/zimbabwe.jpg"/>
                  <h3>Zimbabwe</h3>
                  <h5>In den Ferien mehrt sich der Missbrauch</h5>
                  <p>Die Region Mangwe im Süden Zimbabwes ist geprägt von Armut, Arbeitslosigkeit und grosser Trockenheit 
                    und hat mit 14 Prozent eine der höchsten HIV-Raten weltweit. 
                    Dies bringt viele Leute dazu, in die Nachbarländer Botswana und Südafrika zu migrieren. 
                    Es sind vor allem Männer und junge Leute die gehen. Unter ihnen auch 13-Jährige, 
                    die ohne Aufenthaltsgenehmigung Arbeit suchen und unter entsprechend prekären Bedingungen leben und arbeiten. 
                    Wenn die Männer jeweils über die Festtage nach Hause kommen, mehrt sich der Missbrauch von jungen Mädchen 
                    und damit auch ihre Ansteckung  mit HIV sowie Frühschwangerschaften. 
                    Die Gesellschaft in Mangwe ist sehr konservativ, Sexualität ist ein Tabuthema.</p> 
                </div>
                <div class="col-xs-12 col-sm-6">
                  <h5>Jugendliche als Schlüssel zur HIV-Reduktion (Veränderung der Gesellschaft)</h5>
                  <p>Weniger Frühschwangerschaften, Rückgang der HIV-Infektionen und mehr Zukunftsperspektiven 
                    für Jugendliche sind Schlüssel zur Veränderung der Gesellschaft in Mangwe. 
                    Die terre des hommes schweiz-Partnerorganisation Community Working Group on Health (CWGH) 
                    leistet Aufklärungsarbeit zu Verhütung und Safer Sex und schafft Erwerbsmöglichkeiten für Jugendliche, 
                    damit diese sich ein selbständiges Leben aufbauen können. Entscheidend für den Erfolg ist, 
                    dass dabei Jugendliche nicht „belehrt“ werden, sondern in Entscheide eingebunden 
                    sind und das erlangte Wissen selbst an Gleichaltrige weitergeben.</p>
                  <p class="quote">Mädchen sollen früh heiraten und dem Ehemann dienen.</p>
                  <a target="_blank" href="http://www.terredeshommesschweiz.ch/spenden/online_spenden/" class="btn-primary" role="button"><span class="caret"></span>Jetzt spenden.</a>
                  <a target="_blank" href="http://www.terredeshommesschweiz.ch/ausland/zimbabwe/">Mehr Informationen zu unseren Projekten in Zimbabwe</a>
                </div>
              </div>
            </div>
          </div>
          
        </div>

        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev"><span class="icon-chevron-left"></span></a>
        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next"><span class="icon-chevron-right"></span></a>
      </div><!-- /.carousel -->
    </div>




<?php get_footer(); ?>


