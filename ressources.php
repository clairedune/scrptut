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
				<li><a href="./index.html">Accueil</a></li>
				<li><a href="./informations.php">Informations générales</a></li>
				<li><a href="./projets.html">Les projets</a></li>
				<li><a href="./documents.php">Livrables et documents</a></li>
				<li><a href="./tuteur.php">Tuteur</a></li>				
				<li class="active"><a href="./ressources.php">Ressources</a></li>
				<li><a href="./contact.html">Contacts</a></li>
			</ul>
			</div><!--/.nav-collapse -->
		</div>
	</div>
</div>


<div class="container">

	<!-- Masthead
	================================================== -->
	<header class="jumbotron subhead" id="overview">
		<h1>Ressources</h1>
		<p class="lead"> 
			Annuaire des enseignants et des étudiants ressources pour les projets tuteurés.
		</p>
	</header>
	
	
	<hr class="soften">
	
	<div class="span9" style="text-align:justify;">
	<?php include("textRessources.php")?>
	</div>
	
	<div style="clear:both;">
	<hr class="soften">
	</div>
	
	<div class="span9" style="text-align:justify;">
	 Pour connaître les coordonnées des étudiants et des enseignants 
	 ressources vous pouvez consulter la <a href="serecom.univ-tln.fr/gware">liste des utilisateurs
	 du gware</a>. Si la personne recherchée ne s'y trouve pas, contacter 
	 <a href="mailto:claire.dune@univ-tln.fr">le pilote des projets</a>.
	</div>
	
<div class="row">
<div class="span5">
<div class="well">
	<H3>
	Informatique
	</H3>
		
	<table class="table table-striped  " style ="font-size:11px;">
		<thead>
			<tr>
				<th scope="col"> Nom</th>
				<th scope="col"> Groupe</th>
				<th scope="col"> Compétences</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>Tozza (JRT)</td>
				<td>Enseignant</td>
				<td>Php, Js, HTML/CSS, BDD</td>
			</tr>
			<tr>
				<td>Dune (CD)</td>
				<td>Enseignant</td>
				<td>Php, BDD, HTML/CSS</td>
			</tr>
			<tr>
				<td>Ledruillenec (LDL)</td>
				<td>Enseignant</td>
				<td>Js</td>
			</tr>
			<tr>
				<td>Dorian C.<br>dorian.camilleri (at) yahoo.fr</td>
				<td>Etudiant</td>
				<td>Php, Js, HTML/CSS, BDD, prog. mobile</td>
			</tr>	
		</tbody>
	</table>
</div>
</div>

<div class="span5">
	<div class="well">

		<H3>
			Gestion de projet

		</H3>
		
	<table class="table table-striped  " style ="font-size:11px;">
		<thead>
			<tr>
				<th scope="col"> Nom</th>
				<th scope="col"> Groupe</th>
				<th scope="col"> Compétences</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>François (FRA)</td>
				<td>Enseignant</td>
				<td>Cahier de tests</td>
			</tr>
			<tr>
				<td>Bertacchini (YB)</td>
				<td>Enseignant</td>
				<td>CDCF, CDCT</td>
			</tr>
		</tbody>
	</table>
		
		
	</div>
</div>
</div>
<div class="row">
<div class="span5">
	<div class="well">

		<H3>
			Réalisation audio-visuelle, animation

		</H3>
		<table class="table table-striped  " style ="font-size:11px;">
		<thead>
			<tr>
				<th scope="col"> Nom</th>
				<th scope="col"> Groupe</th>
				<th scope="col"> Compétences</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>Baldacchino (BAL)</td>
				<td>Enseignant</td>
				<td>Cadrage, Lumière, Scenario</td>
			</tr>
			<tr>
				<td>Samia Boungab <br> samia.boungab(at)hotmail.fr</td>
				<td>Etudiant</td>
				<td>Decoupage, Montage, Adobe Premiere</td>
			</tr>
		</tbody>
	</table>

		
		
	</div>
</div>



<div class="span5">
	<div class="well">

		<H3>
			Infographie

		</H3>
		
		<table class="table table-striped  " style ="font-size:11px;">
		<thead>
			<tr>
				<th scope="col"> Nom</th>
				<th scope="col"> Groupe</th>
				<th scope="col"> Compétences</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>Betournée (XBE)</td>
				<td>Enseignant</td>
				<td>Graphisme, mise en page, suite Adobe</td>
			</tr>
			<tr>
				<td>Marie Godin <br>marie.godin63(at)gmail.com</td>
				<td>Etudiant</td>
				<td>Illustrator, mise en page</td>
			</tr>
		</tbody>
	</table>


		
	</div>
</div>	
</div>

<div class="row">

<div class="span5">
	<div class="well">

		<H3>
			Marketing

		</H3>
		
		<table class="table table-striped  " style ="font-size:11px;">
		<thead>
			<tr>
				<th scope="col"> Nom</th>
				<th scope="col"> Groupe</th>
				<th scope="col"> Compétences</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>Müller (JM)</td>
				<td>Enseignant</td>
				<td>Marketing</td>
			</tr>
			<tr>
				<td>Khaled (MKH)</td>
				<td>Enseignant</td>
				<td>Marketing</td>
			</tr>
		</tbody>
	</table>

		
		
	</div>
</div>	

<div class="span5">
	<div class="well">

		<H3>
 			Communication
		</H3>
		
		<table class="table table-striped  " style ="font-size:11px;">
		<thead>
			<tr>
				<th scope="col"> Nom</th>
				<th scope="col"> Groupe</th>
				<th scope="col"> Compétences</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>Benharoun (HAR)</td>
				<td>Enseignant</td>
				<td>Préparation à la soutenance</td>
			</tr>
			<tr>
				<td>Bertacchini (YB)</td>
				<td>Enseignant</td>
				<td>Communication, ppt</td>
			</tr>
			<tr>
				<td>Metge (MME)</td>
				<td>Enseignant</td>
				<td>Préparation à la soutenance (Toulon)</td>
			</tr>
		</tbody>
	</table>

		
		
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
