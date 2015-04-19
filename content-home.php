<?php
/**
 * The template used for displaying page content in page-home.php
 *
 * @package wordstrap
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		
	</header><!-- .entry-header -->
	
	<div class="entry-content">
		<div class="row">
			<div class="col-md-6">
			<h2><span>Demokratische Produktion</span></h2>
			<p class="f20">y8x soll ein Unternehmen werden, das eine Platform mit Open Source Baupläne für Maschinen und Objekte 
				zur Verfügung stellt.</p> 
				<p class="f20">Nutzer_innen können Baupläne hochladen, runterladen, online bewerten und verbessern, 
				sowie entsprechende Bausätze bestellen. Die Einnahmen werden durch den Verkauf von Bausätzen, 
				die alle benötigten Bauteile für einen Bauplan enthalten generiert. 
			</div>
			<div class="col-md-6 text-center mt-lg">
				<img class="logo" alt="y8x logo" src="<?php echo get_template_directory_uri() . '/img/y8x_white.png' ?>">            
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<p class="f20">Als Betreiber der Platform 
				testen und bewerten wir Baupläne und stellen Bausätze für diese zusammen. Außerdem begeben wir 
				uns selbst auf die Suche nach geeigneten Bauplänen. Unser Fokus liegt dabei auf ökologischen Produkten, 
				die aus nachhaltigen Materialien bestehen, reparierbar und innovativ sind.</p>
				<p class="f20">Ziel von y8x ist es - analog 
				zur Open Source Software - Wissen über quelloffene Baupläne zugänglicher zu machen, zu verbreiten und 
				durch die Nutzung vieler Menschen die daran mitarbeiten zu verbessern. Darüber hinaus wird die Hemmschwelle 
				gesenkt Produkte eigenständig zu fertigen und somit ein Beitrag zu einer demokratischen Produktion geleistet und das Technikveständnis vertieft.</p>
			</div>	
		</div>	
		<hr>
		<div class="row panels">
			<div class="col-md-4 text-center hidden-xs hidden-sm">
				<img height="236" src="<?php echo get_template_directory_uri() . '/img/y8x_self.png' ?>" alt="y8x selber machen">
			</div>				
			<div class="col-md-8">		
				<div class="panel panel-default right">
				  <div class="panel-body">
				  	<h3>Selbst produzieren</h3>
				    <p>Wir wollen unseren Beitrag zur Vergemeinschaftung der Produktion leisten - Peer Produktion! Die Entwicklung und die Montage soll durch die NutzerInnen selbst übernommen werden können und dabei möglichst viel Wissen getauscht und von der Allgemeinheit erzeugt werden. Das Ziel ist eine selbstbestimmte interessante Arbeit an eigenen Objekten und nebenbei die Unterstützung lokaler Unternehmer_innen.</p>
				    <a href="#Produktion" class="btn btn-default full-width">Mehr zur Produktion</a>
				  </div>
				</div>
			</div>
		</div>
		<div class="row panels">	
			<div class="col-md-8">
				<div class="panel panel-default right">
				  <div class="panel-body">
				    <h3>Produkte</h3>
				    <p>Wir planen zu begin mit 3 Produkten an den Start zu gehen:</p>
				    <ul>
				    	<li>Ein spitzen <b>Lastenrad</b></li>
				    	<li>Ein vielseitiges <b>Gewächshaus</b></li>
				    	<li>Ein warmer <b>Außenofen</b></li>
				    </ul>
				    <p>In der folgenden Zeit weitere Produktideen zu sammeln und es euch zu ermöglichen eigene Ideen hochzuladen und an vorhandenen mitzuwirken. </p>
				    <a href="#Produkte" class="btn btn-default full-width">Mehr zu unseren Produkten.</a>
				  </div>
				</div>				
			</div>
			<div class="col-md-4 text-center hidden-xs hidden-sm">
				<img width="100%" height="auto" style="padding-top:20px" src="<?php echo get_template_directory_uri() . '/img/y8x_cut.png' ?>" alt="y8x maschinenschnitt">
			</div>	
		</div>
		<div class="row panels">
			<div class="col-md-4 text-center hidden-xs hidden-sm">
				<img height="200" src="<?php echo get_template_directory_uri() . '/img/y8x_cc.png' ?>" alt="y8x commons">
			</div>
			<div class="col-md-8">
				<div class="panel panel-default right">
				  <div class="panel-body">
				  	<h3>Commons</h3>
				    <p>Unser Ziel ist die Förderung von freiem Wissen für Jedermensch. Wir wollen möglichst wenig restriktive Formen des Urheberrechts nutzen und Baupläne unter eine Creative Commons Lizenz stellen. Das fördert die Verbreitung von Wissen.</p>
				    <a href="#Commons" class="btn btn-default full-width">Mehr zu Commons</a>
				  </div>
				</div>				
			</div>
		</div>
		</div>
		<hr>
		<div class="col-md-12">
		<h3 id="Produktion">Produktion</h3>
		<p>Statt teure, bearbeitete, vorgefertigte Produkte zu kaufen, möchten wir dazu beitragen, dass es einfacher für Jedermensch 
			wird, Produkte selbst zu entwerfen und zu bauen. Es gibt schon heute viele Kleinunternehmer_innen, 
			die eine Laser-Schneidemaschine besitzen und damit den Zuschnitt von eigenen Entwürfen ermöglichen. 
			Der Prozess der Bestellung und Planung ist aber leider für Kund_innen und Unternehmer_innen kompliziert 
			und unpraktisch. Hier wollen wir eintreten.</p>
			Wir möchten mit eurer Hilfe eine Online-Möglichkeit zur einfachen Bestellung von selbstentworfenen Objekten aufbauen.
			Dazu gehört ein Onlineshop mit folgenden Möglichkeiten:</p>
			<ul>
				<li>Eigene Entwürfe in üblichen Formaten (.svg, .dxf) hochzuladen und zu bearbeiten.</li>
				<li>Aus Entwürfen anderen Nutzer_innen ein gewünschtes, zur Verfügung gestelltes (creative commons), Objekt zu wählen</li>
				<li>Produzent_innen aus der Region auszuwählen und einen Kostenvoranschlag für den gewünschten Entwurf anzuzeigen.</li>
				<li>Das gewünschte Material (verschiedene Hölzer, verschiedene Stahle) je nach Angebot auszuwählen und direkt zu bestellen</li>
				<li>Die fertig geschnittenen Bauteile selbstabzuholen oder gesendet zu bekommen.</li>
			</ul>
		</div>
		<hr>
		<h3 id="Produkte">Produkte (beta)</h3>
		<div class="row mt-lg">
			<div class="col-md-4">
				<img src="http://www.radfahrlust.de/images/lastenrad.jpg" class="auto">
			</div>
			<div class="col-md-8">
				<h3>Lastenrad</h3>
				<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna 
					aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. 
					Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. 
					Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor 
					invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et 
					accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata 
					sanctus est Lorem ipsum dolor sit amet.</p>
			</div>
		</div>
		<div class="row mt-lg">
			<div class="col-md-4">
				<img src="http://www.duden.de/_media_/full/I/Ikosaeder-201020349442.jpg" class="auto">
			</div>
			<div class="col-md-8">
				<h3>Gewächshaus</h3>
				<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna 
					aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. 
					Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. 
					Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor 
					invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et 
					accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata 
					sanctus est Lorem ipsum dolor sit amet.</p>
			</div>
		</div>
		<div class="row mt-lg">
			<div class="col-md-4">
				<img src="https://a248.e.akamai.net/f/248/9086/10h/manufactum.scene7.com/is/image/Manufactum/25991_01" class="auto">
			</div>
			<div class="col-md-8">
				<h3>Ofen</h3>
				<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna 
					aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. 
					Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. 
					Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor 
					invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et 
					accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata 
					sanctus est Lorem ipsum dolor sit amet.</p>
			</div>
		</div>				
		<hr>
		<h3 id="Commons">Commons</h3>
		<p>Gleichzeitig zur Möglichkeit der Fertigung von eigenen Plänen, wollen wir ein Archiv an frei zugänglichen Schnittmustern aufbauen, 
			sodass jede Idee für alle zum Nachmachen zugänglich ist. Daher sollen Nutzer_innen beim hochladen Ihrer Baupläne die 
			Möglichkeit haben, den Plan für alle sichtbar zu machen und so zur öffentlichen Produktion beizutragen</p>
		<p>Nutzer_innen können ihre Pläne in vorhandene Kategorien einordnen und neue Kategorieen entwerfen, damit andere
			, die auf der Suche sind sie leichter finden.</p>
		<p>So können wir gemeinsam eine große Sammlung an Bauplänen erstellen</p>
		<hr>
		<div class="jumbotron">
			
				
				<div class="col-md-12">
				  <h1>Noch Fragen zu y8x?</h1>
				  <h2>Kontaktiere uns</h2>
				  <p><a class="btn btn-default btn-lg" role="button" href="kontakt/">Kontakt</a></p>
			
		</div>

		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'wordstrap' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->
	<?php edit_post_link( __( 'Edit', 'wordstrap' ), '<footer class="entry-meta"><span class="edit-link">', '</span></footer>' ); ?>
</article><!-- #post-## -->
