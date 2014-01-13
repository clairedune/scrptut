<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="utf-8">
<title>Projets tuteurés SRC</title>
<meta name="description" content="Projets tuteurés de l'IUT SRC">
<meta name="author" content="claire dune">

<!-- Le HTML5 shim, for IE6-8 support of HTML elements -->
<!-- [if lt IE 9]
<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>-->
<!-- [endif]!-->

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
				<li class="active"><a href="./index.php">Accueil</a></li>
				<li><a href="./informations.php">Informations générales</a></li>
				<li><a href="./projets.php">Les projets</a></li>
				<li><a href="./documents.php">Livrables et documents</a></li>
				<li><a href="./tuteur.php">Tuteur</a></li>
     			<li><a href="./ressources.php">Ressources</a></li>				
				<li><a href="./contact.php">Contacts</a></li>
				<li><a href="./tuto.php">Tutos</a></li>
			</ul>
			</div><!--/.nav-collapse -->
		</div>
	</div>
</div>


<div class="container">

<!-- Masthead
================================================== -->
<div class="jumbotron subhead" id="overview">
		<h1>Projets tuteurés SRC </h1>
		<p class="lead">Organisation et principes d'évaluation des projets tuteurés<br> au
			département Services et Réseaux de Communication de Saint-Raphaël.
		</p>
		<hr class="soften">
</div>


<div class="span4">
<img src="images/organisation.png"\>
</div>

<div class="span4" style="text-align:justify;">
<H3>
Principe
</H3>
<br>
<p>
Les projets tuteurés sont des projets annuels <b>en groupe</b> de 4 à 6 étudiants encadrés par des <b>enseignants tuteurs</b> et répondant au besoin d'un <b>client</b> fictif ou réél. 
Ils doivent permettre l'apprentissage et la mise en pratique de la méthodologie de conduite de projet et des savoirs 
et savoir-faire acquis au cours des deux années d'étude au département SRC, dans <b>toutes les disciplines</b>, pour réaliser un <b>produit ou un service multimédia</b>.
</p>
</div>


<div class="span3">
<div class="alert-info">
	<H3>
	  Dates clés
	</H3>

	<div>
		<table class="table table-striped table-condensed " style ="font-size:11px;">
		<thead>
			<tr>
				<th scope="col"> </th>
				<th scope="col"> <a href="documents.php">SRC2</a></th>
			</tr>
		</thead>
       		<?php include('contenu/datesSRC2.php');?>
		</table>
	</div>
</div>
</div>
</div> <!-- /bloc principal-->

<div style="clear:both;">
<hr class="soften">

<div class="span3 offset1">
			    <div class="well">
  					<h2><a href="informations.php">Informations</a></h2>
  					<br>
  					<div style="height:80px;">
  						Perdus dans les projets tuteurés ? 
  						Vous trouverez ici des points de repères sur 								
  						l'organisation des projets tuteurés à SRC. 
  					</div>
  					
				</div>
			    </div>
			    
			    <div class="span3">
			    <div class="well">
  					<h2><a href="documents.php">Livrables</a></h2>
  					<br>
  					<div style="height:80px;">
  						Vous trouverez ici, tous les documents nécessaires aux projets tuteurés et la 
  						description détaillée des livrables et des jalons. 
  					</div>
  					
				</div>
			    </div>
			    
			    
			    <div class="span3">
			    <div class="well">
  					<h2><a href="http://serecom.univ-tln.fr/mozaik">Mozaik</a></h2>
  					<br>
  					<div style="height:80px;">
  					Retrouvez toute l'actualité des projets tuteurés SRC et les projets des années passées sur la plateforme Mozaik.</div>
  					
				</div>
			    </div>
			    
			    
			    
	</div>
 
</div> <!-- /container -->



<!-- Footer
      ================================================== -->
      <div style="clear:both;">
      <footer class="footer">
        <p class="pull-right"><a href="#">Back to top</a></p>
        <p>CSS designed and built with Twitter bootsrap <a href="http://twitter.github.com/bootstrap/" target="_blank">@bootstrap</a>
        <p>Icons from <a href="http://glyphicons.com">Glyphicons Free</a>, licensed under <a href="http://creativecommons.org/licenses/by/3.0/">CC BY 3.0</a>.</p>
      </footer>
</div>



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
