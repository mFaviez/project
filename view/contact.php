<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">	
<title>Contact</title>
<meta name="description" content="Contactez-nous !">	
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
							<li class="nav-item"><a class="nav-link" href="visite.php">Visites</a></li>
							<li class="nav-item"><a class="nav-link" href="restaurant.php">Restaurants</a></li>
							<li class="nav-item"><a class="nav-link" href="#">Météo</a></li>
							<li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li> 
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
					<h1 class="text-center">Contact</h1>
				</div>
			</div>	
				<!-- *****************************FORMULAIRE GENERE AVEC BOOTSNIPP******************************* -->
			<div class="row">	
				<div class="col-md-6 offset-md-3 col-sm-10 offset-sm-1">
				
					<form class="form-horizontal">
						<fieldset>

						<!-- Multiple Radios (inline) -->
						<div class="form-group">
						  <label class="col-md-12 control-label font-weight-bold" for="radios">Qui êtes-vous ?</label>
						  <div class="col-md-12"> 
							<label class="radio-inline" for="radios-0">
							  <input type="radio" name="radios" id="radios-0" value="contact-hab" checked="checked">
							  Habitant
							</label> 
							<label class="radio-inline" for="radios-1">
							  <input type="radio" name="radios" id="radios-1" value="contact-tour">
							  Touriste
							</label> 
							<label class="radio-inline" for="radios-2">
							  <input type="radio" name="radios" id="radios-2" value="contact-autr">
							  Autre
							</label>
						  </div>
						</div>

						<!-- Text input-->
						<div class="form-group">
						  <label class="col-md-12 control-label font-weight-bold" for="nom">Nom</label>  
						  <div class="col-md-12">
						  <input id="nom" name="nom" type="text" placeholder="votre nom" class="form-control input-md" required="">

						  </div>
						</div>

						<!-- Text input-->
						<div class="form-group">
						  <label class="col-md-12 control-label font-weight-bold" for="prenom">Prénom</label>  
						  <div class="col-md-12">
						  <input id="prenom" name="prenom" type="text" placeholder="votre prénom" class="form-control input-md">

						  </div>
						</div>

						<!-- Text input-->
						<div class="form-group">
						  <label class="col-md-12 control-label font-weight-bold" for="contact-mail">Mail</label>  
						  <div class="col-md-12">
						  <input id="contact-mail" name="contact-mail" type="text" placeholder="votre adresse mail" class="form-control input-md" required="">

						  </div>
						</div>

						<!-- Multiple Radios (inline) -->
						<div class="form-group">
						  <label class="col-md-12 control-label font-weight-bold" for="radios">Concernant :</label>
						  <div class="col-md-12"> 
							<label class="radio-inline" for="radios-3">
							  <input type="radio" name="radios" id="radios-3" value="contact-visite" checked="checked">
							  Visites
							</label> 
							<label class="radio-inline" for="radios-4">
							  <input type="radio" name="radios" id="radios-4" value="contact-restau">
							  Restaurants
							</label> 
							<label class="radio-inline" for="radios-5">
							  <input type="radio" name="radios" id="radios-5" value="contact-autre">
							  Autres
							</label>
						  </div>
						</div>

						<!-- Textarea -->
						<div class="form-group">
						  <label class="col-md-12 control-label font-weight-bold" for="contact-mess">Votre message</label>
						  <div class="col-md-12">                     
							<textarea class="form-control" id="contact-mess" name="contact-mess">votre message</textarea>
						  </div>
						</div>

						<!-- Button (Double) -->
						<div class="form-group">
						  <label class="col-md-4 control-label" for="contact-envoi"></label>
						  <div class="col-md-8">
							<button id="contact-envoi" name="contact-envoi" class="btn btn-success"><i class="fas fa-paper-plane"></i> Envoi</button>
							<button id="" name="" class="btn btn-danger"><i class="fas fa-times-circle"></i> Annuler</button>
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
		
</div>	
	
<script src="../js/jquery-min.js"></script>
<script src="../bootstrap/dist/js/bootstrap.min.js"></script>	
<script src="../js/mon-jquery.js"></script>		
</body>
</html>
