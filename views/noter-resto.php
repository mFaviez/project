<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">	
<title>Notez les restaurants</title>
<meta name="description" content="Vous avez fait l'expérience d'une table proposée ? Laissez votre note sur cette page !">	
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
				<div class="col-md-12"><h1 class="text-center">Notez un restaurant !</h1></div>
			</div>
		
			<div class="row">
				<div class="col-md-6 offset-md-3">
<!-- *****************************FORMULAIRE GENERE AVEC BOOTSNIPP******************************* -->		
					<form class="form-horizontal" id="formnote">
					<fieldset>

					<!-- Select Basic -->
					<div class="form-group">
					  <label class="col-md-12 control-label" for="selectbasic">Restaurant testé</label>
					  <div class="col-md-12">
						<select id="selectbasic" name="selectbasic" class="form-control">
						  <option value="tete">La Tête en l'Air</option>
						  <option value="image">À l’Image Sainte-Anne</option>
						  <option value="annexe">L'Annexe</option>
						  <option value="gourm">La Gourmandière</option>
						</select>
					  </div>
					</div>

					<!-- Multiple Radios (inline) -->
					<div class="form-group">
					  <label class="col-md-12 control-label" for="radios">Quelle note donneriez-vous ?</label>

					  <div class="col-md-12"> 
						<label class="radio-inline" for="radios-0">
						  <input type="radio" name="radios" id="radios-0" value="1" checked="checked">
						  1
						</label> 
						<label class="radio-inline" for="radios-1">
						  <input type="radio" name="radios" id="radios-1" value="2">
						  2
						</label> 
						<label class="radio-inline" for="radios-2">
						  <input type="radio" name="radios" id="radios-2" value="3">
						  3
						</label> 
						<label class="radio-inline" for="radios-3">
						  <input type="radio" name="radios" id="radios-3" value="4">
						  4
						</label> 
						<label class="radio-inline" for="radios-4">
						  <input type="radio" name="radios" id="radios-4" value="5">
						  5
						</label>
					  </div>
					</div>

					<!-- Button (Double) -->
					<div class="form-group">
					  <label class="col-md-4 control-label" for="validnote"></label>
					  <div class="col-md-8">
						<button id="validnote" name="validnote" class="btn btn-success"><i class="fas fa-check"></i> Je note !</button>
						<a class="btn btn-danger" href="restaurant.html"><i class="fas fa-times-circle"></i> Annuler</a>
					  </div>
					</div>

					</fieldset>
					</form>
<!-- *****************************FIN DU FORMULAIRE******************************* -->		
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
