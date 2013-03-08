<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=8" >


  <title>Peexsell - Recherche de photographies</title>

   <link rel="stylesheet" type="text/css" href="./ui/css/bootstrap.css" />
  <link rel="stylesheet" media="screen" href="./ui/css/style.css" />
  <script type="text/javascript" src="./ui/js/jquery-1.7.2.min.js"></script>
  <script type="text/javascript" src="./ui/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="./ui/js/cycle.js"></script>
  <script type="text/javascript" src="./ui/js/si.files.js"></script>
</head>
<body>
	<div id="header">
		<div class="content fixed-width">

			<ul class="secondary-menu">
				<li><a href="shopping/cart/index.html">Mon panier</a></li>
			</ul>

		</div>
	</div>
	<div id="slider" class="slider-search" style="background: black url('./ui/img/cat/1_big.jpg') no-repeat center top; ">
    </div>
<div id="main" class="main-search">
	<div class="main-top fixed-width content">
		
	</div>
	
	<form action="" method="POST" enctype="multipart/form-data">
		<fieldset>
			<fieldset>
				<input type="text" name="name" placeholder="name"/>
				<input type="text" name="category_id" placeholder="category"/>
				<input type="text" name="price" placeholder="price"/>	
			</fieldset>
		
			<fieldset class="images">
				
				<img height="100" src="public/images/" />
				
				<input type="file" name="picture[]" />
 
			</fieldset>
			<input type="submit" value="save"/>
 		</fieldset>
	</form>


	<div id="footer">
			<div class="content fixed-width">
				<img class="logo-footer" src="./ui/img/logo.png" alt="" />
				<div class="item">
					<h4>Qui sommes nous ?</h4>
					<ul>
						<li><a href="./app/views/page/presse/index.html">Espace presse</a></li>
						<li><a href="./app/views/page/contact/index.html">Contact</a></li>
						<li><a href="./app/views/page/about/index.html">A propos</a></li>
						<li><a href="./app/views/page/paiement-sec/index.html">Paiement sécurisé</a></li>
					</ul>
				</div>
				<hr class="vertical" />
				<div class="item">
					<h4>Informations légales</h4>
					<ul>
						<li><a href="./app/views/page/protection-vie-privee/index.html">Charte de protection de la vie privée</a></li>
						<li><a href=".app/views/page/mentions-legales/index.html">Mentions légales</a></li>
						<li><a href="./app/views/page/conditions-particulieres/index.html">Conditions générales d'utilisation</a></li>
						<li><a href="./app/views/page/cgv/index.html">Conditions générales de vente</a></li>
					</ul>
				</div>
				<hr class="vertical" />
				<div class="item">
					<h4>Catégories</h4>
					<ul>
						<li><a href="../../../timeline/index.html">Timeline</a></li>
						<li><a href="../../o/date/index.html">Nouveautés</a></li>
						<li><a href="../../o/top/index.html">Meilleures ventes</a></li>
						<li><a href="../../o/popular/index.html">Populaires</a></li>
					</ul>
				</div>
			</div>
		</div>
	</html>
	<!-- Localized -->






