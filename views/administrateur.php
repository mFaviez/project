<section class="bg-light">
    <div class="row">
        <div class="col-md-12">
            <h1 class="text-center">Espace administration</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 offset-md-1">
            <div class="row">
                <p class="font-weight-bold">Nombre d'inscrit :
                    <?= $userCount;?>
                </p>
            </div>
            <div class="row">
                <p class="font-weight-bold">Date dernier avis :
                    <?= date("d-m-Y à H:i:s", strtotime($dateLastMessage)); ?>
                </p>
            </div>
            <div class="row">
                <p class="font-weight-bold">Nombre d'avis :
                    <?= $numberAvis; ?>
                </p>
            </div>
            <div class="row"><p class="font-weight-bold font-italic">
                    Pour modérer les avis de la page balade, rendez-vous sur la
                    <a href=<?= $link['visite'];?>>page</a> concernée</p>
            </div>
        </div>
    </div>

    <!-- CONTENU -->
<section class="bg-light">

    <!-- 1 COMMENTAIRE -->
    <?php
    foreach($avisList as $key => $avis):
        $user = $profilManager->get(intval($avis->getId_profil()));

    ?>
    <div class="row paddingtop border-top border-bottom">
        <div class="col-md-3">
            <p class="font-weight-bold titrecommentaire text-info">
                Par <?php
                if(isset($_SESSION['pseudo']) == $user->getPseudo()):
                    echo "Moi";
                else:
                    echo $user->getPseudo();
                endif;?>
                <br>Le <?= date("d-m-Y", strtotime($avis->getDate_time())); ?></p>
        </div>
        <div class="col-md-9">
			<p class="font-weight-bold titrecommentaire"><?= $avis->getTitle();?></p>
        	<p><?= $avis->getMessage();?></p>							
						
			<!-- Bouton valider -->
				<?php if (isset($_SESSION['pseudo'])):?>
				<button id="valide" type="button" class="btn btn-outline-success marginbottom10px valide" data-id-avis=<?= $avis->getId(); ?>>
                    Valider
                </button>	
                <?php endif;?>			
			
			<!-- supprimer commentaire -->
            <?php
            if(isset($_SESSION['pseudo']) AND $myProfil->getRole() == $role['admin']):?>
                <button id="deleteAvis" type="button" class="btn btn-outline-danger marginbottom10px deleteAvis" data-id-avis=<?= $avis->getId(); ?>>
                    Supprimer
                </button>
            <?php endif; ?>
        </div>
    </div>
    <?php
    endforeach;
    ?>
</section>
</section>