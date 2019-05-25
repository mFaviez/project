<?php
    function chargerClasse($classe) { //raisonnement de l'objet, préparer les modèles dont ona besoin
        require 'models/'.$classe.'.php';
    }
    spl_autoload_register('chargerClasse');

    if(isset($_SESSION['pseudo'])) { //dans chaque page du site, on vérifie si la session pseudo est ouverte
        
        $profilManager = new ProfilManager(getDb()); // si oui, on appelle l'objet projectManager, on recupere les données-voir config.php
        $myProfil = $profilManager->get($_SESSION['pseudo']); // récupère toutes les infos de session de l'utilisateur en direct, on peut l'utiliser nimporte ou sur le site : pseudo, id, mail...
        
        $pseudo = $_SESSION['pseudo']; //pseudo de l'utilisateur
    }
?>