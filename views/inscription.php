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
<link href="../style.css" rel="stylesheet">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">	
</head>

<body>
	<div class="container">
<!-- HEADER -->		
		<header>
			<div class="row">
				<div class="col-md-2"><a href="../index.php"><img class="img-fluid" src="../img/logo-vannes.png" alt="logo de vannes"></a></div>
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
							<li class="nav-item"><a class="nav-link" href="">Météo</a></li>
							<li class="nav-item"><a class="nav-link" href="">Contact</a></li> 
							<li class="nav-item" id="connexion"><a class="nav-link" href="connexion.php"><i class="fas fa-user"></i> Connexion</a></li>		
						</ul>
					<!-- FIN DU MENU -->
						</div>
					</div>		
				
			 </nav>
	</header>
<!-- CONTENU -->
<section class="bg-light">		
			<div class="row">
				<div class="col-md-12">
					<h1 class="text-center">Inscription</h1>
				</div>
			</div>	
					<!-- *****************************FORMULAIRE GENERE AVEC BOOTSNIPP******************************* -->
			<div class="row">
				<div class="col-md-4 offset-md-4">	

					<form class="form-horizontal" id="forminscrip">
					<fieldset>

					<!-- Text input-->
					<div class="form-group">
					  <label class="col-md-12 control-label" for="inscrmail">Votre adresse mail</label>  
					  <div class="col-md-12">
					  <input id="inscrmail" name="inscrmail" type="text" placeholder="tapez votre adresse mail" class="form-control input-md" required="">

					  </div>
					</div>

					<!-- Text input-->
					<div class="form-group">
					  <label class="col-md-12 control-label" for="inscrpseudo">Votre pseudo</label>  
					  <div class="col-md-12">
					  <input id="inscrpseudo" name="inscrpseudo" type="text" placeholder="choisissez votre pseudo" class="form-control input-md" required="">

					  </div>
					</div>

					<!-- Password input-->
					<div class="form-group">
					  <label class="col-md-12 control-label" for="inscrpassword">Votre mot de passe</label>
					  <div class="col-md-12">
						<input id="inscrpassword" name="inscrpassword" type="password" placeholder="choisissez votre mot de passe" class="form-control input-md" required="">
						<span class="help-block">Il doit comporter au moins un chiffre</span>
					  </div>
					</div>

					<!-- Password input-->
					<div class="form-group">
					  <label class="col-md-12 control-label" for="inscrvalidationpassword">Confirmer votre mot de passe</label>
					  <div class="col-md-12">
						<input id="inscrvalidationpassword" name="inscrvalidationpassword" type="password" placeholder="confirmer votre mot de passe" class="form-control input-md" required="">

					  </div>
					</div>

					<!-- Button (Double) -->
					<div class="form-group">
					  <label class="col-md-12 control-label" for="inscrsubmit"></label>
					  <div class="col-md-12">
						<button id="inscrsubmit" name="inscrsubmit" class="btn btn-success"><i class="fas fa-check-circle"></i> Inscription</button>
						<button id="inscrannuler" name="inscrannuler" class="btn btn-danger"><i class="fas fa-times-circle"></i><a href="../index.html"> Annuler</a></button>
					  </div>
					</div>

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