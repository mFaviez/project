<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">	
<title>Connection</title>
<meta name="description" content="Connexion au site officiel de Vannes">	
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
<link rel="icon" href="favicon.ico" type="image/x-icon">
<link href="../bootstrap-4.3.1-dist/css/bootstrap.min.css" rel="stylesheet">
<link href="../css/style.css" rel="stylesheet">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">	
</head>
	
	<body>
	<div class="container">
<!-- HEADER -->		
		<header>
			<div class="row">
				<div class="col-md-2"><a href="../index.html"><img class="img-fluid" src="../img/logo-vannes.png" alt="logo de vannes"></a></div>
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
						<a class="navbar-brand" href="../index.php"><i class="fas fa-home"></i></a>
						<ul class="navbar-nav">
							<li class="nav-item"><a class="nav-link" href="">Visites</a></li>
							<li class="nav-item"><a class="nav-link" href="">Restaurants</a></li>
							<li class="nav-item"><a class="nav-link" href="#">Météo</a></li>
							<li class="nav-item"><a class="nav-link" href="#">Contact</a></li> 
							<li class="nav-item" id="connexion"><a class="nav-link" href="connexion.html"><i class="fas fa-user"></i> Connexion</a></li>
						</ul>
					<!-- FIN DU MENU -->
						
						</div>
					</div>		
				
			 </nav>
	</header>
		<section class="bg-light">		
			<div class="row">
				<div class="col-md-12">
					<h1 class="text-center">Connexion à votre compte</h1>
				</div>
			</div>	
				<!-- *****************************FORMULAIRE GENERE AVEC BOOTSNIPP******************************* -->
			<div class="row">	
				<div class="col-md-4 offset-md-4">	
					<form class="form-horizontal" id="formconnexion">
					<fieldset>

					<!-- Text input-->
					<div class="form-group">
					  <label class="col-md-12 control-label" for="pseudo">Pseudo</label>  
					  <div class="col-md-12">
					  <input id="pseudo" name="pseudo" type="text" placeholder="pseudo ou e-mail" class="form-control input-md" required="">

					  </div>
					</div>

					<!-- Password input-->
					<div class="form-group">
					  <label class="col-md-12 control-label" for="password">Mot de passe</label>
					  <div class="col-md-12">
						<input id="password" name="password" type="password" placeholder="mot de passe" class="form-control input-md" required="">

					  </div>
					</div>

					<!-- Button -->
					<div class="form-group">
					  <div class="col-md-12">
						<button id="btnconnexion" name="connexion" class="btn btn-success"><i class="fas fa-user"></i> Connexion</button>
					  </div>
					</div>
					<p>Pas encore de compte&nbsp;?<a href="inscription.php"> Inscrivez-vous ici&nbsp;!</a></p>
					</fieldset>
					</form>
				</div>
			</div>		
	</section>
		
<!-- FOOTER -->
<div class="col-md-12 text-center bg-light">	
	<footer class="page-footer text-center">
	  <div class="footer-copyright  py-3">© 2019 Copyright: Projet 5 - Michaël Faviez </div>
	</footer>
</div>			
<!-- FIN DU FOOTER -->	
<!-- FIN DU FOOTER -->	