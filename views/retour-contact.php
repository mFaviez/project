<?php if($valided == false):?>
<div class="alert alert-danger">
	<p>Le captcha ne semble pas valide</p>
	<p><a href="contact">retour</a></p>
</div>
<?php else :?>
<div class="col-md-12 bg-light">
	<p style="margin-top: 8px;">Votre message a bien été envoyé ! Merci</p>
	<a class="btn btn-info" href="<?= $link['accueil'];?>">Retour</a>
</div>
<?php endif ?>
	
