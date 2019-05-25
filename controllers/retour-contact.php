<?php
require 'models/recaptcha.php';

    $captcha = new Recaptcha('6LeTRaUUAAAAADtpdD6qeDSA1z9vSWuyB6qkVl1E');

    if (!empty($_POST)){
        if($captcha->checkCode($_POST['g-recaptcha-response']) === false){
            $valided = false;
            } else {
            //on récupère les champs
            $nom=$_POST['nom'];
            $prenom=$_POST['prenom'];
            $contactmail=$_POST['contactmail'];
            $contactmess=$_POST['contactmess'];
            $radioSubject=$_POST['radioSubject'];
            $radioWho=$_POST['radioWho'];
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
             $valided = true;
            }
    }
?>