<?
require 'controllers/recaptcha.php';
$captcha = new Recaptcha('6LeTRaUUAAAAADtpdD6qeDSA1z9vSWuyB6qkVl1E');
//on récupère les champs
$nom=$_POST['nom'];
$prenom=$_POST['prenom'];
$contactmail=$_POST['contactmail'];
$contactmess=$_POST['contactmess'];
$radioSubject=$_POST['radioSubject'];
$radioWho=$_POST['radioWho'];
?>





<?php
if (!empty($_POST)){
	if($captcha->checkCode($_POST['g-recaptcha-response']) === false){
		?>
		<div class="alert alert-danger">
			<p>Le captcha ne semble pas valide</p>
			<p><a href="contact">retour</a></p>
		</div>
		<?php
		} else {
	//Envoi du contenu du formulaire par mail
		 $to = 'mfaviez@hotmail.fr'; //destinataire
		 $subject = 'Contact de mon site'; //objet du mail
		 $header .= "Content-Transfert-Encoding: 8bit\n";
		 $header .= "Content-Type:text/html;charset=UTF-8\n";
		 $header .= "De:".$contactmail. ""; // pour réponse automatique
		 //corps du message
		 $message = "Vous avez recu un message de $prenom $nom
		 <br> - Qui est-ce ? : $radioWho
		 <br> - Mail : $contactmail
		 <br> - Concernant : $radioSubject
		 <br> - Son message est : $contactmess";
		//envoi le mail
 		$envoi = mail($to, $subject, $message, $header);
		?>
				<div class="col-md-12 bg-light">
					<p>Votre message a bien été envoyé ! Merci</p>
					<a class="btn btn-info" href="<?= $link['accueil'];?>">Retour</a>
				</div>
		<?php
		}
}
?>
	
