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
<header class="row valign-wrapper">
		<div id="header" class="container center-align">
		<div class="col s12 m12 l12">
			<img src="assets/img/school-dev.png" width="200px" alt="" />
			<h1>Des formations à la carte pour vous aider à prendre en main votre communication web</h1></div>
    	</div>
    	<div class="overlay"></div>
</header>	

 

<div class="section-offre">
<div class="container" id="school">
<div class="row">
         
          <div class="col s12 ">
            <ul class="collapsible" data-collapsible="expandable">
              <li>
                <div class="collapsible-header active"><i class="material-icons">filter_drama</i><h2>Réseaux sociaux</h2></div>
                <div class="collapsible-body"><span>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</span></div>
              </li>
              <li>
                <div class="collapsible-header active"><i class="material-icons">place</i><h2>wordpress</h2></div>
                <div class="collapsible-body"><span>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</span></div>
              </li>
              <li>
                <div class="collapsible-header active"><i class="material-icons">whatshot</i><h2>Images</h2></div>
                <div class="collapsible-body"><span>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</span></div>
              </li>
            </ul>
          </div>
</div>
</div>
</div>
<?php
	include('private/view/contact-form.php');
?>
<?php
	include('private/view/arrow.php');
?>
<?php
	include('private/view/footer.php');
?>
</body>