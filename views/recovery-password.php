
<!-- CONTENU -->
<section class="bg-light">		
    <div class="row">
        <div class="col-md-12">
            <h1 class="text-center">Restauration du mot de passe</h1>
        </div>
    </div>	
            <!-- *****************************FORMULAIRE GENERE AVEC BOOTSNIPP******************************* -->
    <div class="row">
        <div class="col-md-4 offset-md-4">	

            <form action="" method="post" accept-charset="UTF-8" autocomplete="off" class="form-horizontal" id="forminscrip">
                <fieldset>
                
                <!-- Text input-->
                <div class="form-group">
                    <label class="col-md-12 control-label" for="">Votre adresse mail</label>  
                    <div class="col-md-12">
                    <input id="inscrmail" name="mail" type="email" placeholder="tapez votre adresse mail" class="form-control input-md" required="">

                    </div>
                </div>

                <!-- Text input-->
                <div class="form-group">
                    <label class="col-md-12 control-label" for="inscrpseudo">Phrase de récupération</label>  
                    <div class="col-md-12">
                    <input id="" name="recovery" type="text" placeholder="Phrase de récupération" class="form-control input-md" required="">

                    </div>
                </div>

                <!-- Password input-->
                <div class="form-group">
                    <label class="col-md-12 control-label" for="inscrpassword">Nouveau mot de passe</label>
                    <div class="col-md-12">
                    <input id="" name="password" type="password" placeholder="choisissez votre mot de passe" class="form-control input-md" required="">
                    <span class="help-block">Il doit comporter au moins un chiffre</span>
                    </div>
                </div>

                <!-- Password input-->
                <div class="form-group">
                    <label class="col-md-12 control-label" for="inscrvalidationpassword">Confirmer votre nouveau mot de passe</label>
                    <div class="col-md-12">
                    <input id="" name="validationpassword" type="password" placeholder="confirmer votre mot de passe" class="form-control input-md" required="">
                    </div>
                </div>

                <!-- Button (Double) -->
                <div class="form-group">
                    <label class="col-md-12 control-label" for="inscrsubmit"></label>
                    <div class="col-md-12">
                    <button id="inscrsubmit" name="inscrsubmit" class="btn btn-success"><i class="fas fa-check-circle"></i> Valider</button>
                    <button id="inscrannuler" name="inscrannuler" class="btn btn-danger"><i class="fas fa-times-circle"></i><a href="<?= $link['accueil'] ?>"> Annuler</a></button>
                    </div>
                </div>

                </fieldset>
            </form>
        </div>				
    </div>		
</section>	