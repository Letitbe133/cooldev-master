x<?php
  require_once('contact.php');
?>
<!doctype html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,minimum-scale=1,initial-scale=1">
	 <meta name="google-site-verification" content="rBRnpj5XSqUqYyI27OQ52hRYjk1PkW2Z1i3E9ces7oE" />
    <title>Cooldev, concepteurs de sites web depuis 2017</title>
    <link rel="stylesheet" href="assets/css/mini.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto%7cRaleway:900%7cMontserrat:800%7cArchivo+Black%7cOswald:700%7cMaterial+Icons" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/master.css" />

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

	<div id="topScroll" class="navbar-fixed">
		<nav>
          <div class="nav-wrapper">
              <a href="#!" class="brand-logo left"><img class="responsive-img" src="assets/img/logo-v2.png" alt="logo cooldev" ></a>
              <a href="#" data-activates="mobile-menu" class="button-collapse right"><i class="material-icons">menu</i></a>
              <ul id="nav-mobile" class="right hide-on-med-and-down">
				    <li><a data-target="#offre" class="tape scrollTo" href="#section-offre">/ Offre</a></li>                
                <li><a data-target="#motto" class="tape scrollTo" href="#motto">/ A propos</a></li>
                <li><a data-target="#section-contact" class="tape scrollTo" href="#section-contact">/ Contact</a></li>

              </ul>
           		<ul class="side-nav" id="mobile-menu">
	           	  <li><a data-target="#offre" class="tape scrollTo" href="#offre">/ Offre</a></li>
	              <li><a data-target="#motto" class="tape scrollTo" href="#motto">/ A propos</a></li>
	              <li><a data-target="#section-contact" class="tape scrollTo" href="#section-contact">/ Contact</a></li>
            	</ul>
      		</div>
          </nav>
    </div>
	<header class="row valign-wrapper">
		<div class="container center-align">
		<div class="col s12 m12 l12">
                <h1>Nous créons pour <br>vous et avec vous <br>des sites web<br><span class="tape">simples <br>et efficaces</span></h1>
					<p style="color:white;">Le web n'attend que vous ;)</p>
                <img data-target="#offre" class="scrollTo" src="assets/img/arrow.png" alt="Faites défiler pour en savoir plus"/>

      </div>

    </div>
	</header>

  
  <!---*************************************OFFRE********************************-->
	
<section id="offre">
	       
  	<div class="row">
			<div class="picto-offre col s12 m12 l4 center-align">
				<img class="responsive-img" src="assets/img/picto-perso.png" alt="" >
				<p>Un site web qui s'adapte à vos besoins du moment<p>  		
  		</div>
  		<div class="picto-offre col s12 m12 l4 center-align">
				<img class="responsive-img" src="assets/img/picto-responsive.png" alt=""  >
				<p>Accessible sur tous supports<p>  		
  		</div>
  		<div class="picto-offre col s12 m12 l4 center-align">
				<img class="responsive-img" src="assets/img/picto-pig.png" alt=""  >
				<p>Maitrisez votre budget<p>  		
  		</div>
  		<div id="call-to-action" class="col s12 ">
         <div class="col s12 m12 l12 center-align">
          	<p>A partir de 299 € ht.</p>
          </div>
          <div class="div-cta">
            <button data-target="#section-contact" class="btn cta scrollTo" type="button" name="button">J'ai besoin de ça !</button>
          </div>
      </div>
   
</section>
 
  <!-- *************************************MOTTO********************************-->
<div id="motiv">
 <div class="container">
        <div id="motto">
		  <div class="title col s12">
		  		<h1><span class="tape"><i id="illustration" style="color:black" class="material-icons medium">favorite_border</i>
				Notre motivation</span></h1>
			</div>
        </div>

        <div class="col s12">
        	<h2>Vous</h2>
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
<div class="container">  
		  <div id="testimonial">
		  <div class="title col s12">
		  		<h1><span class="tape"><i id="illustration" style="color:black" class="material-icons medium">&#xE87C;</i>
				L'équipe</span></h1>
			</div>
        </div>
         
        <div class="row" id="us">

         	<div class=" team col s12 m12 l6">
         	<div id="lio">
            <div class="photo col s6 m6 l6 center-align ">
              <img class="photo" src="assets/img/lio.png" alt="Lionel, développeur web">
            </div>

           		<div class="col s6 m6 l6">
           		<h2>Lionel</h2>
           		<h5>Développeur web</h5>
           		<p>CTO & Co-founder</p>
           		</div>

          	</div>
          	<div class="col s12">
              <p>Trilingue français/anglais/javascript, il lui est déjà arrivé de rêver en code. Vous l'aurez compris, son domaine, c'est la vie cachée de votre futur <strong>site web</strong>, le <strong>back-end</strong>. Sa passion secrète, c'est faire des treks en pleine nature avec son chien Spud. <p>
         	</div>
            </div>
            <div class=" team col s12 m12 l6">
           <div id="mi">
            <div class="photo col s6 m6 l6 center-align">
              <img class="photo " src="assets/img/mi.png" alt="Mylene, chargée de projet web">
            </div>

           	<div class="col s6 m6 l6">
           		<h2>Mylène</h2>
           		<h5> Chargée de projets web</h5>
           		<p>CEO, CXO & Co-founder</p>
           		</div>
           	</div>
           	<div class="col s12">
             <p> La plus créative et la moins têtue des deux. Seriale entrepreneuse, elle connait bien les problèmatiques des <strong>porteurs de projets </strong>! Son alimentation à base de cookies (recette disponible sur simple demande) et de jus de carottes est le secret de son empathie <3 </p>
            </div>
			</div>
		</div>
    </div>
</div>
<!-- *************************************OFFRE ********************************-->
<!-- <div class="row" id="section-offre">
	<div class="container">
        <div class="row" id="offre">
				<div class="col s12 ">
					<h1><i id="illustration"style="color:black;" class="material-icons medium">important_devices</i>
					 Votre projet </h1>
				</div>
        </div>
<!-- *************************************OFFRE one-page********************************-->
 <!--    <div class="col s12 m6 l6">
     		<h2><mark class="tape">Une page web</mark> : vos coordonnées, présenter un service...</h2>

            <p>Faire simple et efficace, c'est notre devise. Vos clients ont besoin de vous trouver, connaitre vos horaires d'ouverture, votre numéro de téléphone ? En une page, tout est dit !</p>
      </div>
     <div class="row">
     	<div class="col s12 m6 l6 ">
         <div class="col s12 m12 l12 center-align">
          	<p>A partir de</p> <h2>199 € ht.</h2>
          </div>
          <div class="div-cta">
            <button data-target="#section-contact" class="btn cta scrollTo" type="button" name="button">J'ai besoin de ça !</button>
          </div>
      </div>

          <div class="col s12">
            <ul class="collapsible z-depth-0" data-collapsible="accordion">
              <li>
                <div class="collapsible-header">
                 <i style="color: #F92AC2" class="material-icons">keyboard_arrow_down</i><h4>En savoir plus</h4>
                </div>
                <div class="collapsible-body">
                 <h4>Cette offre comprend : </h4>
                  <ul>
							<li><i class="material-icons">check</i>&nbsp&nbspUne page web avec votre logo, vos coordonnées, vos infos importantes</li>
							<li><i class="material-icons">check</i>&nbsp&nbspChoisissez votre design parmi les templates que nous vous proposons</li>
							<li><i class="material-icons">check</i>&nbsp&nbspDesign Responsive qui s'adapte à tous supports (mobiles, tablettes...)</li>
							<li><i class="material-icons">check</i>&nbsp&nbspHébergement et nom de domaine (en .fr) pour 1 an</li>
						</ul>
							<span><br><mark>Option</mark> : ajoutez autant de sections que vous le souhaitez, chaque section est facturée 99 € ht. seulement, de quoi vous faire un <strong>site One Page</strong> à votre image</span>

                  <i style="float:right; color: black" class="material-icons clear">clear</i>
                </div>
              </li>
            </ul>
          </div>



      </div>
-->
<!-- *************************************OFFRE blog********************************-->
<!--	<div class="col s12 m6 l6">
     		<h2><mark class="tape">Un blog</mark> : créez du lien avec vos clients</h2>
         <p>Un <strong>blog</strong>, ça crée de la proximité avec vos clients et c'est bon pour votre référencement dans les moteurs de recherche. Simple à mettre à jour, nous vous accompagnons pour la prise en main.</p>
      </div>
      <div class="row">
       <div class="col s12 m6 l6">
         <div class="col s12 m12 l12 center-align">
          	<p>A partir de</p> <h2>549 € ht.</h2>
          </div>
          <div class="div-cta">
            <button data-target="#section-contact" class="btn cta scrollTo" type="button" name="button">J'ai besoin de ça !</button>
          </div>
       </div>

          <div class="col s12">
            <ul class="collapsible z-depth-0" data-collapsible="accordion">
              <li>
                <div class="collapsible-header">
                  <i style="color: #F92AC2" class="material-icons">keyboard_arrow_down</i><h4>En savoir plus</h4>
                </div>
                 <div class="collapsible-body">
                 <h4>Cette offre comprend : </h4>
                  <ul>
							<li><i class="material-icons">check</i>&nbsp&nbspMise en place et paramétrage du blog (nous utilisons le CMS Wordpress)</li>
							<li><i class="material-icons">check</i>&nbsp&nbspDesign Responsive qui s'adapte à tous supports (mobiles, tablettes...)</li>
							<li><i class="material-icons">check</i>&nbsp&nbspOptimisation pour les moteurs de recherche (SEO)</li>
							<li><i class="material-icons">check</i>&nbsp&nbspHébergement et nom de domaine (en .fr) pour 1 an </li>
							<li><i class="material-icons">check</i>&nbsp&nbspUne formation de 2h pour prendre en main votre nouveau blog</li>
						</ul>
							<span><br><mark>Option</mark> : Mise en place d'un thème payant : +199 € ht.</span>

                  <i style="float:right; color: black" class="material-icons clear">clear</i>
                </div>
              </li>
            </ul>
          </div>


       </div>
-->
<!-- *************************************OFFRE website********************************-->
	<!--	<div class="col s12 m6 l6">
     		<h2><mark class="tape">Un site de 4 pages</mark>: votre crédibilité</h2>
         <p>Plus d'infos, plus pro. Faire passer un message demande parfois un peu plus de contenu : l'histoire de votre entreprise, vos tarifs, un formulaire de contact...</p>
      </div>
       <div class="row">
        <div class="col s12 m6 l6">
          <div class="col s12 center-align">
          	<p>A partir de</p> <h2>799 € ht.</h2>
          </div>
          <div class="div-cta">
            <button data-target="#section-contact" class="btn cta scrollTo" type="button" name="button">J'ai besoin de ça !</button>
          </div>
        </div>
          <div class="col s12">
            <ul class="collapsible z-depth-0" data-collapsible="accordion">
              <li>
                <div class="collapsible-header">
                  <i style="color: #F92AC2" class="material-icons">keyboard_arrow_down</i><h4>En savoir plus</h4>
                </div>
                <div class="collapsible-body">
                 <h4>Cette offre comprend : </h4>
                  <ul>
							<li><i class="material-icons">check</i>&nbsp&nbspUne page d'accueil avec votre logo</li>
							<li><i class="material-icons">check</i>&nbsp&nbsp3 pages supplémentaires que nous définissons ensemble </li>
							<li><i class="material-icons">check</i>&nbsp&nbspChoisissez votre design parmi les templates que nous vous proposons</li>
							<li><i class="material-icons">check</i>&nbsp&nbspOptimisation pour les moteurs de recherche (SEO)</li>
							<li><i class="material-icons">check</i>&nbsp&nbspHébergement et nom de domaine (en .fr) pour 1 an</li>
						</ul>


                  <i style="float:right; color: black" class="material-icons clear">clear</i>
                </div>
              </li>
            </ul>
          </div>




        </div>-->
<!-- *************************************OFFRE sur-mesure********************************-->
 <!--       <div class="col s12 m6 l6">
     		<h2><span class="tape">Votre identité visuelle</span>, des <strong>cartes de visite</strong>, un <strong>site web personnalisé</strong>....</h2>
         <p>Tout à faire ou à refaire ? Pas de panique, on est là ! Avec une bonne dose de créativité et un soupçon de bon sens, notre team trouvera des solutions adaptées à votre budget</p>
      </div>
      <div class="col s12 m6 l6 center-align">
           <h2>Sur devis</h2>
          </div>
          <div class="div-cta">
            <button data-target="#section-contact" class="btn cta scrollTo" type="button" name="button">J'ai besoin de ça !</button>
          </div>


	</div>
</div>-->
<!-- *************************************CONTACT********************************-->
<div id="section-contact">
	<div class="container">
		  <div id="discuss" class="row">
				<div class="title col s12">
					<h1><span class='tape'><i id="illustration" style="color: black;" class="material-icons medium">question_answer</i>
					 Parlons-en !</span> </h1>
				</div>
        </div>

        <div class="divContact row" id="scrollContact">
          <h2 class="col s12 m12 l12">Une idée, un projet, un message ?<br/>C'est à vous !</h2>
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
			<a data-target="#topScroll" style="background-color: #00101a;" class="btn-floating center-align black scrollTo" href="#topScroll"><img src="assets/img/arrow-up.png" alt=""></a>
    	</div>
    	</div>
    	</div>
   </div>
 
      <footer>
      	 <div class="row no-margin-bottom">
            <div class= "col s12 m3 center-align ">
            <a class="waves-effect waves-teal btn-flat" href="#" > <img src="assets/img/logoCooldev.png" width="25px;"></a>
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
