<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="utf-8">
<title>Projets tuteurés SRC</title>
<meta name="description" content="Projets tuteurés de l'IUT SRC">
<meta name="author" content="claire dune">

<!-- Le HTML5 shim, for IE6-8 support of HTML elements -->
<!--[if lt IE 9]>
<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

<!-- Le styles -->
<link href="bootstrap/css/bootstrap.css" rel="stylesheet">
<link href="bootstrap/css/bootstrap-responsive.css" rel="stylesheet">
<link href="bootstrap/js/prettify.css" rel="stylesheet">
<link href="bootstrap/css/docs.css" rel="stylesheet">
<link href="bootstrap/js/prettify.js" rel="stylesheet">

<style>
body {
	padding-top: 60px; /* 60px to make the container go all the way to the bottom of the topbar */
}
</style>
<link href="bootstrap/css/bootstrap-responsive.css" rel="stylesheet">

<!-- Le fav and touch icons 
<link rel="shortcut icon" href="images/favicon.ico">
<link rel="apple-touch-icon" href="images/apple-touch-icon.png">
<link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">
<link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png">-->
</head>

<body data-spy="scroll" data-target=".subnav" data-offset="50">

<div class="navbar navbar-fixed-top">
	<div class="navbar-inner">
		<div class="container">
			<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</a>
			<a class="brand" href="./index.html">Projets tuteurés IUT SRC</a>
			<div class="nav-collapse">
			<ul class="nav">
				<li><a href="./index.php">Accueil</a></li>
				<li ><a href="./informations.php">Informations générales</a></li>
				<li><a href="./projets.php">Les projets</a></li>
				<li><a href="./documents.php">Livrables et documents</a></li>
				<li><a href="./tuteur.php">Tuteur</a></li>				
     			<li><a href="./ressources.php">Ressources</a></li>				
				<li><a href="./contact.php">Contacts</a></li>
				<li class="active"><a href="./tuto.php">Tutos</a></li>
			</ul>
			</div><!--/.nav-collapse -->
		</div>
	</div>
</div>

<div class="container">

	<!-- Masthead
	================================================== -->
	  
	  <header class="jumbotron subhead" id="overview">
		<h1>Tuto DotProject</h1>
		<div class="span5">
		
		<p class="lead">Vous trouverez ici des tutoriels DotProject pour vous aider dans la plannification et le suivi de vos projet.
		</p>
		
		</div>
		</header>
		<div style="clear:both;">
		<hr class="soften">
		</div>
		
<div class="tabbable"> <!-- Only required for left/right tabs -->
    <ul class="nav nav-tabs">
    <li class="active"><a href="#info" data-toggle="tab">Mon compte</a></li>
    <li><a href="#tache" data-toggle="tab">Tâches</a></li>
	<li><a href="#reporting" data-toggle="tab">Reporting</a></li>
	<li><a href="#tuteur" data-toggle="tab">Tuteur</a></li>

    </ul>
    <?php  require_once("playSWF.php")?>

		
	<div class="tab-content" style="text-align:justify;">
<!-- Info ================================================== -->
		<div class="tab-pane active" id="info">
			<h1>
				Informations personnelles <small> mot de passe, email, telephone, etc.</small>
			</h1>
			<p>
				Pour ouvrir un compte sur dotproject vous devez contacter le <a href="contact.php">responsable des projets tuteurés</a>.
			</p>
			<H3> Comment changer mon mot de passe ?</H3>
			<?php insertSWF('video/changement_mdp.swf'); ?>
		
	  </div> <!-- /Info>--->

<!-- Tache ================================================== -->
		<div class="tab-pane" id="tache">
			<h1>Plannification <small>gestion des tâches, des sous tâches et des milestones</small></h1>
			
			<H3> Comment ajouter une tâche ?</H3>
			<?php insertSWF('video/creation_tache.swf'); ?>

		</div><!-- /Tache>-->
<!-- Reporting ================================================== -->
		<div class="tab-pane" id="reporting">
			<h1>Reporting <small> suivi des heures</small></h1>
			
			<H3> Comment reporter mes heures ?</H3>
			<?php insertSWF('video/connexion_tache.swf'); ?>

		</div><!-- /Tache>-->
<!-- Reporting ================================================== -->
		<div class="tab-pane" id="tuteur">
			<h1>Tuteur <small> utilisation du gware par les tuteurs</small></h1>
			
			<H3> Comment renseigner le suivi des groupes de projet?</H3>
			<?php insertSWF('video/suivi_tuteur.swf'); ?>

		</div><!-- /Tache>-->


	</div>
</div>
	




</div>

</div> <!-- /container -->

<!-- Footer
      ================================================== -->
      <footer class="footer">
        <p class="pull-right"><a href="#">Back to top</a></p>
        <p>CSS designed and built with Twitter bootsrap <a href="http://twitter.github.com/bootstrap/" target="_blank">@bootstrap</a>
        <p>Icons from <a href="http://glyphicons.com">Glyphicons Free</a>, licensed under <a href="http://creativecommons.org/licenses/by/3.0/">CC BY 3.0</a>.</p>
      </footer>



<!-- Le javascript
================================================== -->

<!-- Placed at the end of the document so the pages load faster -->
	<script src="bootstrap/js/jquery.js"></script>
	<script src="bootstrap/js/bootstrap.js"></script>
	<script src="bootstrap/js/bootstrap-transition.js"></script>
	<script src="bootstrap/js/bootstrap-alert.js"></script>

	<script src="bootstrap/js/bootstrap-modal.js"></script>
	<script src="bootstrap/js/bootstrap-dropdown.js"></script>
	<script src="bootstrap/js/bootstrap-scrollspy.js"></script>
	<script src="bootstrap/js/bootstrap-tab.js"></script>
	<script src="bootstrap/js/bootstrap-tooltip.js"></script>
	<script src="bootstrap/js/bootstrap-popover.js"></script>

	<script src="bootstrap/js/bootstrap-button.js"></script>
	<script src="bootstrap/js/bootstrap-collapse.js"></script>
	<script src="bootstrap/js/bootstrap-carousel.js"></script>
	<script src="bootstrap/js/bootstrap-typeahead.js"></script>
	
	 <script src="bootstrap/js/application.js"></script>

</body>
</html>
