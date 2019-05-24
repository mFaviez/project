<!-- CAPTCHA  -->
<script src="https://www.google.com/recaptcha/api.js" async defer></script>
<script>
    function onSubmit(token) {
        document.getElementById("i-recaptcha").submit();
    }
</script>
<!-- FIN CAPTCHA  -->

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

			<p>Envoyez-nous un mail en cliquant <a href="mailto:mfaviez@hotmail.fr?subject=Demande de renseignements" style="text-decoration: underline;">ici</a> ou remplissez ce formulaire&nbsp;:</p>
			
            <form action="retour-contact" method="post" accept-charset="UTF-8" autocomplete="off" class="form-horizontal">
                <fieldset>

                    <!-- Multiple Radios (inline) -->
                    <div class="form-group">
                        <p class="col-md-12 control-label font-weight-bold" style="margin-bottom: 2px;">Qui êtes-vous&nbsp;?</p>
                        <div class="col-md-12">
                            
                            <input type="radio" name="radioWho" id="hab" value="Habitant" checked="checked">
                            <label class="radio-inline" for="hab">Habitant</label>
                            
                             <input type="radio" name="radioWho" id="tour" value="Touriste">
                             <label class="radio-inline" for="tour">Touriste</label>  
                           
                             <input type="radio" name="radioWho" id="autrecas" value="Autre">
                             <label class="radio-inline" for="autrecas">Autre</label>
                        </div>
                    </div>

                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-12 control-label font-weight-bold" for="nom">Nom</label>
                        <div class="col-md-12">
                            <input id="nom" name="nom" type="text" placeholder="Votre nom" class="form-control input-md" required="">
                        </div>
                    </div>

                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-12 control-label font-weight-bold" for="prenom">Prénom</label>
                        <div class="col-md-12">
                            <input id="prenom" name="prenom" type="text" placeholder="Votre prénom" class="form-control input-md">

                        </div>
                    </div>

                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-12 control-label font-weight-bold" for="contactmail">Mail</label>
                        <div class="col-md-12">
                            <input id="contactmail" name="contactmail" type="text" placeholder="Votre email" class="form-control input-md" required=""
                                   value="<?php echo (isset($_SESSION['pseudo']))?$myProfil->getEmail(): ''?>">

                        </div>
                    </div>

                    <!-- Multiple Radios (inline) -->
                    <div class="form-group">
                        <p class="col-md-12 control-label font-weight-bold" style="margin-bottom: 2px;">Concernant&nbsp;:</p>
                        <div class="col-md-12">
                            <input type="radio" name="radioSubject" id="visite" value="Visite" checked="checked">
                            <label class="radio-inline" for="visite">Visites</label>
                           
                            <input type="radio" name="radioSubject" id="resto" value="Restaurant">
                            <label class="radio-inline" for="resto">Restaurants</label>
                           
                            <input type="radio" name="radioSubject" id="autre" value="Autre">
                            <label class="radio-inline" for="autre">Autres</label>
                        </div>
                    </div>

                    <!-- Textarea -->
                    <div class="form-group">
                        <label class="col-md-12 control-label font-weight-bold" for="contactmess">Votre message</label>
                        <div class="col-md-12">
                            <textarea class="form-control" id="contactmess" name="contactmess" placeholder="Votre message"></textarea>
                        </div>
                    </div>

					<!-- captcha google -->
					<div class="col-md-12">
						<div class="g-recaptcha" data-sitekey="6LeTRaUUAAAAAGCt-ZLz-HhUHIEUTy3goNRrOX8W"></div>
					</div>
                    <!-- Button (Double) -->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="contact-envoi"></label>
                        <div class="col-md-8">
					
							<button id="contact-envoi" name="contact-envoi" class="btn btn-success"><i class="fas fa-paper-plane"></i> Envoi</button>
							
                            <a class="btn btn-danger" href="<?= $link['accueil'];?>"><i class="fas fa-times-circle"></i> Annuler</a>
                        </div>
                    </div>

                </fieldset>
            </form>
        </div>

    </div>
</section>