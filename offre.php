
<?php
  require_once('contact.php');
?>
<?php
	include('private/view/head.php');
?>
<body>
<?php
	include('private/view/nav.php');
?>
	<section>
		<header class="container header-light">
			<img src="assets/img/picto-puzzle.png" alt="" width="100px">
			<h1>Une approche global</h1>
			<p>Apporter de la cohérence dans votre communication digitale pour maximiser son efficacité</p>
		</header>
		<div class="section-offre col s12">
			<div class="container col s12 ">
				<p>Qui dit communication digitale, dit site web. Mais un site web sans visiteurs ne vous aidera pas à atteindre vos objectifs. Nous vous aidons dans la conception de votre stratégie de communication sur le web. Du site web aux réseaux sociaux, nous mettons tout en oeuvre pour rendre votre communication efficace.</p>
				<h2 ><img class="float left"src="assets/img/picto-responsive.png" alt="" width="100px">L'expérience client au coeur de	votre stratégie de communication</h2>
				<p>Nous réalisons des sites web responsive accessibles sur tous supports et adaptés à votre projet : site vitrine, blog, site internet sur mesure. Nous vous aidons à optimiser le contenu pour un référencement naturel (SEO) et à générer du traffic grâce aux réseaux sociaux. La suite, c'est vous et votre talent dans votre <i class="material-icons">favorite</i>de métier </p>
				
			</div>
		</div>
	</section>
	<section>
		<header class="container header-light">
			<img src="assets/img/picto-coop.png" alt="" width="100px">
			<h1>Un accompagnement personnalisé</h1>
			<p>Vous aider à monter en compétence pour obtenir les meilleurs résultats </p>
		</header>
		<div class="section-offre">
			<div class="container col s12 ">
				<p>Les besoins en terme de communication ne sont pas les mêmes pour tous. Nous vous proposons des formations individuelles aux réseaux sociaux et à la maintenance de votre site web en fonction de votre niveau. </p>
				<a href="formation-web.php " class="center-align"><img src="assets/img/school-dev.png" alt="school dev"></a>
				<p></p>
				<img src="" alt="">
			</div>
		</div>
	</section>
	<section>
		<header class="container header-light">
			<img src="assets/img/picto-pig.png" alt="" width="100px">
			<h1>Un budget maîtrisé</h1>
			<p>Un pas après l'autre.  Commencez maintenant et faites évoluer votre communication avec vos premiers clients </p>
		</header>
		<div class="section-offre">
			<div class="container  ">
				<p><img class="float right" src="assets/img/picto-perso.png" alt="" width="150px">Nous vous accompagnons dès de le debut de votre aventure entrepreneuriale. Commencer petit et faites évoluer votre communication en même temps que votre business. Ajoutez des pages à votre site vitrine, démarrer un blog, être présent sur un nouveau réseau social sont des pas que vous pouvez réaliser quand vous avez validé votre projet. Pour rendre le tout abordable pour les porteurs de projets, nous vous avons concocté des bundles au plus proche de vos besoins : </p>
			</div>
	

	<div class="container" id="budget">
		<?php
	include('private/view/offer-cards.php');
?>
  	
	</div>
</section>





<?php
	include('private/view/contact-form.php');
?>
<?php
	include('private/view/footer.php');
?>
</body>