<?php

    if(isset($_POST['inscrsubmit'])) {

        $user = array(
            'password' => htmlspecialchars(hash(hash_algos()[7], $_POST['password'])),
            'password2' => htmlspecialchars(hash(hash_algos()[7], $_POST['validationpassword'])),
            'email' => htmlspecialchars($_POST['mail']),
            'recovery_sentence' => htmlspecialchars(hash(hash_algos()[7], $_POST['recovery']))
        );

        $profil = new Profil($user);
        $profilManager = new ProfilManager(getDb());
        
        if($profilManager->checkMailAndSentence($user['email'], $user['recovery_sentence']) == true) {
            if($user['password'] == $user['password2']) {
                if($profilManager->updatePassword($user['email'], $user['password']) == true) {
                    $sucess = "Mot de passe mise à jour, reconnectez vous !";
                }
            } else 
            $alert = "Les mots de passes ne se correspondent pas.";
        }else 
            $alert = "Votre adresse email ne correspond pas à la phrase de récupération";
        }
?>