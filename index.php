<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">	
<title>Bienvenue à Vannes</title>
<meta name="description" content="Bienvenue à Vannes ! Ce site vous donneras toutes les informations utiles pour votre prochain séjour dans notre belle ville !">	
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
<link rel="icon" href="favicon.ico" type="image/x-icon">	
	<link href="bootstrap-4.3.1-dist/css/bootstrap.min.css" rel="stylesheet">
<link href="style.css" rel="stylesheet">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">	
</head>

<body>
<div class="container">
<!-- HEADER -->		
		<header>
			<div class="row">
				<div class="col-md-2"><a href="index.html"><img class="img-fluid" src="img/logo-vannes.png" alt="logo de vannes"></a></div>
				<div class="col-md-2 offset-md-8">
					<div class="btn-group float-right">
						<a class="btn rounded-circle rs" href="#"><i class="fab fa-facebook-f fab-rs"></i></a>
						<a class="btn rounded-circle rs" href="#"><i class="fab fa-twitter fab-rs"></i></a>
						<a class="btn rounded-circle rs" href="#"><i class="fab fa-instagram fab-rs"></i></a>
						<a class="btn rounded-circle rs" href="#"><i class="fab fa-pinterest-p fab-rs"></i></a>	
					 </div>
				</div>
			</div>
			
			<!-- NAVIGATION -->
			<nav class="navbar navbar-expand-md navbar-dark bg-dark nav-justified" style="margin-top: 25px;">
				
					
					<!-- BOUTON RESPONSIVE -->
					  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
   							<span class="navbar-toggler-icon"></span>
  						</button>
					
  					<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<div class="col-lg-12">	
					<!-- MENU -->	
						<a class="navbar-brand" href="index.php"><i class="fas fa-home"></i></a>
						<ul class="navbar-nav">
							<li class="nav-item"><a class="nav-link" href="view/visite.php">Visites</a></li>
							<li class="nav-item"><a class="nav-link" href="view/restaurant.php">Restaurants</a></li>
							<li class="nav-item"><a class="nav-link" href="#">Météo</a></li>
							<li class="nav-item"><a class="nav-link" href="view/contact.php">Contact</a></li> 
							<li class="nav-item" id="connexion"><a class="nav-link" href="view/connexion.php"><i class="fas fa-user"></i> Connexion</a></li>			
						</ul>
					<!-- FIN DU MENU -->
						</div>
					</div>		
				
			 </nav>
	</header>

<!-- CONTENU 1ERE LIGNE -->
<div class="row position-relative">
		
		<!-- TITRE -->
		<div class="col-md-5 offset-md-6 col-sm-12 position-absolute" id="titre-accueil">
			<h1 class="text-right">Bienvenue<br>à Vannes&nbsp;!</h1>
		</div>
		
		<!-- CARROUSSEL -->
		<div class="col-md-12">
			  <!-- IMAGES -->
				 <div id="carouselFade" class="carousel slide carousel-fade" data-ride="carousel">
					  <div class="carousel-inner">
						<div class="carousel-item active">
						  <img src="img/jardin.jpg" class="d-block w-100 img-fluid" alt="jardins">
						</div>
						<div class="carousel-item">
						  <img src="img/rue.jpg" class="d-block w-100 img-fluid" alt="rue">
						</div>
						 <div class="carousel-item">
						  <img src="img/chateau.jpg" class="d-block w-100 img-fluid" alt="chateau">
						</div>
						<div class="carousel-item">
						  <img src="img/bateau.jpg" class="d-block w-100 img-fluid" alt="bateaux">
						</div>  
					  </div>
				  </div>
			  <!-- BOUTONS -->	  
				  <a class="carousel-control-prev" href="#carouselFade" role="button" data-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				  </a>
				  <a class="carousel-control-next" href="#carouselFade" role="button" data-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				  </a>
			</div>
	<!-- FIN DU CARROUSSEL -->
	</div>
		
<!-- CONTENU 2EME LIGNE -->
	<div class="col-md-12"  style="margin-top: 20px;">	
		<section class="row bg-dark">
		  <h2 style="color:#fff; margin-top: 10px;">La Bretagne se visite aussi en gastronomie&nbsp;!</h2>
			<!-- GALERIE -->
			<div class="row text-center galerie">
				<div class="col-lg-2 col-md-3 col-4"><img class="d-block img-fluid img-thumbnail" src="img/gateau.jpg" alt="Gateau"></div>
				<div class="col-lg-2 col-md-3 col-4"><img class="d-block img-fluid img-thumbnail" src="img/cidre-3.jpg" alt="Cidre"></div>
				<div class="col-lg-2 col-md-3 col-4"><img class="d-block img-fluid img-thumbnail" src="img/far-2.jpg" alt="Far"></div>  
				<div class="col-lg-2 col-md-3 col-4"><img class="d-block img-fluid img-thumbnail" src="img/kouign-amann-2.jpg" alt="Kouign-amann"></div>
				<div class="col-lg-2 col-md-3 col-4"><img class="d-block img-fluid img-thumbnail" src="img/crepe-2.jpg" alt="Crepe"></div>	  
				<div class="col-lg-2 col-md-3 col-4"><img class="d-block img-fluid img-thumbnail" src="img/caramel.jpg" alt="Caramel"></div>		  
			</div>
		</section>
	</div>	
<!-- FIN DE LA GALERIE -->
<!-- LES SECTIONS -->	
	<div class="col-md-12">	
		<section class="row bg-light" style="margin-top: 20px;">
			<h2 style="margin-top: 10px;">Retrouvez tous nos bons plans&nbsp;!</h2>
		</section>
			
		<section class="row bg-light">	
			<div class="col-md-4" style="background-color: #5fbda3;">
				<a href="pages/visite.html" class="lienaccueil">
					<h4 class="text-center margintop5px"><i class="fas fa-camera-retro"></i> Les visites</h4>
					<img class="img-fluid" src="img/visite.jpg" alt="visites à Vannes">
					<p class="text-justify">Vannes est une ville fortifiée située dans la région Bretagne. Sa vieille ville se caractérise par d'étroites rues pavées et des portes médiévales. Au centre, la cathédrale Saint-Pierre de Vannes allie les styles roman et gothique, tandis que la place des Lices est bordée de maisons à colombages colorées. Au sud, le port est doté de restaurants et de bateaux qui proposent des croisières dans le golfe du Morbihan.</p>
				</a>	
			</div>
			<div class="col-md-4" style="background-color: #c4ac52;">
				<a href="pages/restaurant.html" class="lienaccueil">
					<h4 class="text-center margintop5px"><i class="fas fa-utensils"></i> Les restaurants</h4>
					<img class="img-fluid" src="img/restaurant.jpg" alt="restaurant à Vannes">
					<p class="text-justify">Profitez de l’ambiance décontractée de Vannes en vous installant dans un restaurant du port ou en gagnant les remparts. Les fruits de mer sont à l’honneur dans les meilleurs restaurants de Vannes et propices à une cuisine gastronomique dans les restaurants étoilés. A Vannes, on mange aussi japonais, indien ou chinois, pour réveiller son palais par des notes exotiques !</p>
				</a>	
			</div>	
			<div class="col-md-4" style="background-color: #b86787;">
				<a href="#" class="lienaccueil">
					<h4 class="text-center margintop5px"><i class="fas fa-cloud-sun"></i> La météo</h4>
					<img class="img-fluid" src="img/meteo.jpg" alt="météo à Vannes">
					<p class="text-justify">Quel temps fait-il aujourd'hui et cet après-midi à Vannes ? Retrouvez les prévisions météo du jour, gratuites et détaillées pour la ville de Vannes 56000</p>
					
				</a>	
			</div>				
		</section>
	</div>	
<!-- FIN DES SECTIONS -->

	
<!-- FOOTER -->
<div class="col-md-12 text-center bg-light">	
	<footer class="page-footer text-center">
	  <div class="footer-copyright  py-3">© 2019 Copyright: Projet 5 - Michaël Faviez </div>
	</footer>
</div>			
<!-- FIN DU FOOTER -->	
	
	
	
</div>	
<script src="js/jquery-min.js"></script>
<script src="bootstrap-4.3.1-dist/js/bootstrap.min.js"></script>	
<script src="bootstrap-4.3.1-dist/js/bootstrap.bundle.min.js"></script>				
<script src="js/mon-jquery.js"></script>				

<script>
$('.carousel').carousel({
  interval: 2500
})
</script>	
</body>
</html>
