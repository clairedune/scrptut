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
				<li><a href="./informations.php">Informations générales</a></li>
				<li><a href="./projets.php">Les projets</a></li>
				<li><a href="./documents.php">Livrables et documents</a></li>
				<li  class="active"><a href="./tuteur.php">Tuteur</a></li>				
				<li><a href="./ressources.php">Ressources</a></li>
				<li><a href="./contact.php">Contacts</a></li>
			</ul>
			</div><!--/.nav-collapse -->
		</div>
	</div>
</div>


<div class="container">

	<!-- Masthead
	================================================== -->
	<header class="jumbotron subhead" id="overview">
		<h1>Tuteur</h1>
		<p class="lead"> 
			Rôle du tuteur au sein de l'agence et par rapport aux pilotes et délégués.
		</p>
	</header>
	<hr class="soften">
	
	
	<div class="span6" style="text-align:justify;">
	<h2>Tuteur</h2>
	<?php include('textTuteur.php');?>
	</div>

	<div class="span3 offset1" style="text-align:justify;">
	<h2>Correcteur</h2>
	
	<p>Chaque tuteur d'un groupe a aussi un rôle de correcteur pour une autre agences que la sienne. 
	Vous trouverez ici les grilles de notation des différents rendus qu'il sera amené à corriger.</p>
	
	<h3>SRC1</h3>
	<div class="well">
	
	<a class="btn btn-small" href="files/SRC1GrilleCahierFonctionnalités.doc" style="width:95%;">
		télécharger la grille du CDCF <br> (L2)</a><br>

	
	</div>
	
	
	<h3>SRC2</h3>
	
	<div class="well">
	
	<a class="btn btn-small" href="files/SRC2GrilleCDCF.doc" style="width:95%;">
		télécharger la grille du CDCF <br> (L2)</a><br><br><br>
		
	<a class="btn btn-small" href="files/SRC2GrilleSynthèse.doc" style="width:95%;">
		télécharger la grille du dossier de synthèse (L4) </a><br>
	
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
