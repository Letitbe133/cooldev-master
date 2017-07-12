<?php
  require_once('contact.php');
?>
<!doctype html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,minimum-scale=1,initial-scale=1">
	 <meta name="google-site-verification" content="rBRnpj5XSqUqYyI27OQ52hRYjk1PkW2Z1i3E9ces7oE" />
    <title>Cooldev | A vos cotés dans votre communication digitale depuis 2017</title>
    <link rel="stylesheet" href="assets/css/mini.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto%7cRaleway:900%7cMontserrat:800%7cArchivo+Black%7cOswald:700%7cMaterial+Icons" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/master.css" />
    
   
<!-- Open Graph Meta Tags -->
	<meta property="og:title" content="Cooldev | A vos cotés dans votre communication digitale depuis 2017">
	<meta property="og:site_name" content="Cooldev">
	<meta property="og:url" content="http://www.cooldev.xyz">
	<meta property="og:description" content="Nous accompagnons les petites entreprises et les indépendants dans leur présence numérique">
	<meta property="og:type" content="website">
	<meta property="og:image" content="assets/img/img-og.jpg">

<!-- Piwik -->
		<script type="text/javascript">
		  var _paq = _paq || [];
		  /* tracker methods like "setCustomDimension" should be called before "trackPageView" */
		  _paq.push(["setCookieDomain", "*.cooldev.xyz"]);
		  _paq.push(['trackPageView']);
		  _paq.push(['enableLinkTracking']);
		  (function() {
		    var u="//analytics.mpaw.xyz/piwik/";
		    _paq.push(['setTrackerUrl', u+'piwik.php']);
		    _paq.push(['setSiteId', '5']);
		    var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
		    g.type='text/javascript'; g.async=true; g.defer=true; g.src=u+'piwik.js'; s.parentNode.insertBefore(g,s);
		  })();
		</script>
<!-- End Piwik Code -->

</head>
<body>

<!--	<div id="topScroll" class="navbar-fixed">
		<nav>
          <div class="nav-wrapper">
              <a data-target="#" class="scrollTo" href="#"class="brand-logo left"><img class="responsive-img" src="assets/img/logo-v2.png" alt="logo cooldev" ></a>
              <a href="#" data-activates="mobile-menu" class="button-collapse right"><i class="material-icons md-36">menu</i></a>
              <ul id="nav-mobile" class="right hide-on-med-and-down">
				    <li><a data-target="#offre" class="tape scrollTo" href="offre.php">/ Ce qu'on peut faire ensemble</a></li>
                <li><a data-target="#motto" class="tape scrollTo" href="#motto">/ Histoires vraies</a></li>
                <li><a data-target="#section-contact" class="tape scrollTo" href="#section-contact">/ On s'appelle ?</a></li>

              </ul>
           		<ul class="side-nav" id="mobile-menu">
	           	  <li><a data-target="#offre" class="tape scrollTo" href="offre.php">/ Offre</a></li>
	              <li><a data-target="#motto" class="tape scrollTo" href="#motto">/ A propos</a></li>
	              <li><a data-target="#section-contact" class="tape scrollTo" href="#section-contact">/ Contact</a></li>
            	</ul>
      		</div>
          </nav>
    </div>-->
 <?php
	include('private/view/nav.php');
?>
	<header class="row valign-wrapper">
		<div class="container center-align">
		<div class="col s12 m12 l12">
					<h1>A vos côtés, dés le début</h1>	
                <h2>Nous accompagnons <br>les entreprises dans leur présence numérique. <br><br><span class="tape">Le web n'attend que vous ;)</span></h2>
                <img data-target="#offre" class="scrollTo" src="assets/img/arrow.png" alt="Faites défiler pour en savoir plus"/>

      </div>

    </div>
	</header>


  <!---*************************************OFFRE********************************-->

<section id="offre">

  	<div class="row">
			<div class="picto-offre col s12 m12 l4 center-align">
				<img class="responsive-img" src="assets/img/picto-puzzle.png"  alt=""  >
				<p>Une approche globale<p>
  		</div>
  		<div class="picto-offre col s12 m12 l4 center-align">
				<img class="responsive-img" src="assets/img/picto-coop.png"  alt=""   >
				<p>Un accompagnement personnalisé<p>
  		</div>
  		<div class="picto-offre col s12 m12 l4 center-align">
				<img class="responsive-img" src="assets/img/picto-pig-2.png" alt=""  >
				<p>Un budget maîtrisé<p>
  		</div> 
  		<div id="call-to-action" class="col s12 ">
         <!--<div class="col s12 m12 l12 center-align">
          	<p>A partir de 299 € ht.</p>
          </div>-->
          <div class="div-cta">
            <a href="offre.php" ><button class="btn cta scrollTo" type="button" name="button">J'ai besoin de ça !</button></a>
          </div>
      </div>
	</div>
</section>

  <!-- *************************************MOTTO********************************-->
<div id="motiv">
 <div class="container">
        <div id="motto">
		  <div class="title col s12">
		  		<h2 ><i id="illustration" style="color:#00c0a8;" class="material-icons medium">favorite_border</i>
				Notre motivation, c'est vous !</h2>
			</div>
        </div>

        <div class="col s12">
        
          <p>Nous avons construit une offre pour les porteurs de projet. Pourquoi ? Parce que vous accompagner dans le développement de votre activité nous passionne. Nous avons beaucoup d'admiration pour ceux et celles qui ont le courage de créer leur entreprise, leur emploi et nous savons qu'au debut de cette aventure, vous avez peu de moyens et pouvez vous sentir perdu au sujet de la <strong>création de votre site web</strong>.</p>
		  </div>
		  <div class="col s12">
            <ul class="collapsible z-depth-0" data-collapsible="accordion">
              <li>
                <div class="collapsible-header">
                 <i style="color: #F92AC2" class="material-icons">keyboard_arrow_down</i><h4>En savoir plus</h4>
                </div>
                <div class="collapsible-body">
                  	<div class="container">
								<div class="row">
										<h4 class="center-align"><br/><br/>Pourquoi votre présence numérique est indispensable ?<br/><br/></h4>

								<div class="col s12 m6 l6">
									<div class="center-align">

				              <img width="80px;" src="assets/img/picto-section-apropos-yellow.png" alt="Parlez de vous">
									</div>

				              <p>Où vous trouver, comment vous contacter, êtes-vous ouvert aujourd'hui ?<br/>
				              Autant d'informations que vos futurs clients doivent trouver rapidement, parce que c'est ça qu'ils cherchent !
				              </p>
				          </div>
				         	<div class="col s12 m6 l6">
				            <div class="center-align">
				              <img width="80px;" src="assets/img/picto-section-votre-offre-yellow.png" alt="Parlez de ce que vous faites">
				            </div>
				            <div>
				              <p>Que faites vous et pourquoi le faites vous si bien ?<br/>
				                 Du contenu de qualité favorise votre présence sur les moteurs de recherche et vos clients vous trouvent plus facilement !
				                 Ca sert à cela un site vitrine :)
				              </p>
				            </div>
				         	</div>
				         	</div>

                  <span>Nous ne vous proposons pas les services d'une <strong>agence web</strong> classique parce que vous n'en avez pas vraiment  besoin pour le moment.  <mark>Ce dont vous avez besoin, c'est d'une <strong>présence sur le web efficace</strong></mark> qui vous permettra de <strong>trouver vos premiers clients</strong>. </br>
Nous allons réaliser et mettre en place ensemble votre <strong>communication  digitale</strong> en optimisant chaque  élément qui la compose. <br/>
En diminuant le temps de développement, <mark>nous pouvons rendre abordable ce qui ne l’était pas encore !</mark>


						</span>
						</div>
						<i style="float:right; color: black" class="material-icons clear">clear</i>
                </div>
              </li>
            </ul>
          </div>
</div>
</div>
<!-- *************************************TESTIMONIAL ********************************-->

<section class="section-testimonial">
	<div class="container ">
		  <div id="testimonial">
		  <div class="title col s12">
		  		<h2><i id="illustration" style="color:black" class="material-icons medium">&#xE87C;</i>
				L'équipe</h2>
			</div>
        </div>

	<div class="row no-margin-bottom" id="us">
		<div class="  col s12 m12 l6 hide-on-small-only">
			<div class="card horizontal ">
				<div class="card-content" id="lio">
					<img class="photo center-align" src="assets/img/lio-v2.png" alt="Lionel, développeur web" width="100px">
					<h2 >Lionel</h2>
					<h5>Développeur web</h5>
					<p>CTO & Co-founder</p><br><br>
				</div>
			<div class="card-action valign-wrapper" style="background-color:#00F4D9;">
				<p style="color: dark">Trilingue français/anglais/javascript, il lui est déjà arrivé de rêver en code. Vous l'aurez compris, son domaine, c'est la vie cachée de votre futur <strong>site web</strong>, le <strong>back-end</strong>. Sa passion secrète, c'est faire des treks en pleine nature avec son chien Spud. <p>
				<a class="btn-floating halfway-fab waves-effect pink"><i class="material-icons">add</i></a>
				
			</div>
			</div>
		</div>
		<div class=" col s12 m12 l6 hide-on-small-only ">
			<div class="card horizontal ">
				<div class="card-content " id="mi" style="background-color:  ">
					<img class="photo center-align" src="assets/img/mi-v2.png" alt="Mylene, chargée de projet web" width="100px">
					<h2 >Mylène</h2>
					<h5>Chargée de projets web</h5>
					<p>CEO/CXO & Co-founder</p>
				</div>
				<div class="card-action valign-wrapper" style="background-color:#00F4D9;">
					<p style="color: dark">La plus créative et la moins têtue des deux. Seriale entrepreneuse, elle connait bien les problèmatiques des <strong>porteurs de projets </strong>! Son alimentation à base de cookies (recette ici) et de jus de carottes est le secret de son empathie <3 </p>
	         </div>
			</div>
		</div>
		<div class="  col s12 m12 l6 hide-on-med-and-up">
			<div class="card  ">
				<div class="card-content " id="lio" style="background-color:  ">
					<img class="photo center-align" src="assets/img/lio-v2.png" alt="Lionel, développeur web" width="100px">
					<h2>Lionel</h2>
					<h5>Développeur web</h5>
					<p>CTO & Co-founder</p><br><br>
				</div>
			<div class="card-action valign-wrapper" style="background-color:#00F4D9;">
				<p style="color: dark">Trilingue français/anglais/javascript, il lui est déjà arrivé de rêver en code. Vous l'aurez compris, son domaine, c'est la vie cachée de votre futur <strong>site web</strong>, le <strong>back-end</strong>. Sa passion secrète, c'est faire des treks en pleine nature avec son chien Spud. <p>
			</div>
			</div>
		</div>
		<div class=" col s12 m12 l6 hide-on-med-and-up ">
			<div class="card ">
				<div class="card-content " id="mi" style="background-color:  ">
					<img class="photo center-align" src="assets/img/mi-v2.png" alt="Mylene, chargée de projet web" width="100px">
					<h2>Mylène</h2>
					<h5>Chargée de projets web</h5>
					<p>CEO/CXO & Co-founder</p>
				</div>
				<div class="card-action valign-wrapper" style="background-color:#00F4D9;">
					<p style="color: dark">La plus créative et la moins têtue des deux. Seriale entrepreneuse, elle connait bien les problèmatiques des <strong>porteurs de projets </strong>! Son alimentation à base de cookies (recette ici) et de jus de carottes est le secret de son empathie <3 </p>
	         </div>
			</div>
		</div>
	</div>
 </div>
</section>
<section id="section-main-offer">
<div class="container" >
	<div class="title col s12">
		  		<h2><i id="illustration" style="color:black" class="material-icons medium">&#xE912;</i>
				Nos packs</h2>
			</div>
		<?php
	include('private/view/offer-cards.php');
?>
  	
	</div>
</section>
<!-- *************************************CONTACT********************************-->
<div id="section-contact">
	<div class="container">
		  <div id="discuss" class="row">
				<div class="title col s12">
					<h2 style="color:#00c0a8;"><i id="illustration" style="color: black;" class="material-icons medium">question_answer</i>
					 Parlons-en !</span> </h2>
				</div>
        </div>

        <div class="divContact row" id="scrollContact">
          <h3 class="col s12 m12 l12">Une idée, un projet, un message ?<br/>C'est à vous !</h3>
          <form class="col s12" id="contact" action="#contact" method="POST">
            <div class="markup input-field col s12 m12 l12">
              <i class="material-icons small prefix">account_box</i>
              <input class="validate" type="text" name="nom" placeholder="Votre nom">
            </div>
            <div class="markup input-field col s12 m12 l12">
              <i class="material-icons small prefix">email</i>
              <input class="validate" type="email" name="email" placeholder="Votre email">
            </div>
            <div class="markup input-field col s12 m12 l12">
              <i class="material-icons small prefix">subject</i>
              <input class="validate" type="text" name="objet" placeholder="Objet">
            </div>
            <div class="tape input-field col s12 m12 l12">
              <i class="material-icons small prefix">mode_edit</i>
              <textarea class="materialize-textarea" name="message" rows="5" placeholder="Votre message"></textarea>
            </div>
            <div class="col s12 l4 offset-l4">
              <button class="btn cta center-align col btn cta center-align col s6 offset-s3 l12" type="submit" name="submit">Hop !</button>
            </div>
          </form>
          <div class="feedback col s10 offset-s1 center-align">
            <?php echo $feedback; ?>
          </div>
        </div>
        <div class="fixed-action-btn">
    	<div id="up">
			<a data-target="#topScroll" style="background-color: #00101a;" class="btn-floating center-align scrollTo" href="#topScroll"><img src="assets/img/arrow-up.png" alt=""></a>
    	</div>
    	</div>
    	</div>
   </div>

      <footer>
      	 <div class="row no-margin-bottom">
            <div id="heart" class= "col s12 m3 center-align ">
            <a href="#" title="Site réalisé avec amour par l'équipe cooldev.xyz"> <img src="assets/img/logojaune.png" width="40px;" ></a>
            </div>
            <div class= "col s12 m3 center-align">
              <a class="waves-effect waves-teal btn-flat" href="mailto:hello@cooldev.xyz">Hello[@]cooldev.xyz</a>
            </div>
            <div class= "col s12 m3 center-align">
              <!-- Modal -->
              <a class="modal-trigger waves-effect waves-teal btn-flat" href="#modal1">Mentions légales</a>
              <div id="modal1" class="modal modal-fixed-footer">
                <div class="modal-content">
                  <h3>SIRET</h3>
                  <p>Sous CAPE Cosens SIRET 419 369 798 00048</p>
                  <h3>Hébergement :</h3>
                  <p>GANDI SAS, Société par Actions Simplifiée au capital de 300.000€ ayant son siège social au 63-65 boulevard Massena à Paris (75013) FRANCE, immatriculée sous le numéro 423 093 459 RCS PARIS N° TVA FR81423093459 Téléphone : +33.(0) 1 70.37.76.61 . Ce dernier est en possession des coordonées de l'éditeur et du responsable de la publication (merci gandi!)</p>
                  <h3>Gestion des données personnelles :</h3>
                  <p>Votre vie privée est très importante pour nous. Pour connaître le trafic sur ce site internet, Nous utilisons Piwik. Piwik est une solution d’analytics qui respecte votre vie privée conformément aux recommandations de la CNIL et ne demande aucune déclaration préalable.</p>
                  <iframe class="col s12" style="border: 0;" src="http://analytics.mpaw.xyz/piwik/index.php?module=CoreAdminHome&action=optOut&language=fr"></iframe>
                </div>
                <div class="modal-footer ">
                  <a href="#!" class="modal-action modal-close btn-floating "><i class="material-icons ">highlight_off</i></a>
                </div>
              </div>
             </div>
                <div id= "social" class= "col s12 m3 center-align">
                  <a href="https://www.facebook.com/cooldevcrew/" target=_blank ><img src="assets/img/facebook.png" alt="Suivez-nous sur Facebook"></a>
                  <a href="https://twitter.com/cooldev_crew/" target=_blank ><img src="assets/img/twitter.png" alt="Suivez-nous sur Twitter"></a>
                </div>
            </div>

      </footer>
      <script
  			  src="https://code.jquery.com/jquery-3.2.1.min.js"
  			  integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
  			  crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/js/materialize.min.js"></script>
      <script type="text/javascript" src="assets/js/main.js"></script>
  </body>

</html>
