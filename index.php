<?php

    include_once 'include/config.php'; //appel à la BDD
    
    $p = (isset($_GET['p'])) ? $_GET['p'] : 'index';

    include_once 'include/define.php';

    include_once $path['controllers'].'global.php';

    //Controllers
    switch($p) { // permet de faire des choix selon le p, les cases sont toutes les possibilités de valeur p
        case $page['accueil']: //c'est le cas de la page acceuil
            include $path['controllers'].$page['accueil'].'.php'; //écriture de l'URL
        break;
        case $page['visite']:
            include $path['controllers'].$page['visite'].'.php';
        break;
        case $page['restaurant']:
            include $path['controllers'].$page['restaurant'].'.php';
        break;
        case $page['noter-resto']:
            if(isset($_SESSION['pseudo'])) //si la session est ouverte, on appelle la bonne URL
                include $path['controllers'].$page['noter-resto'].'.php';
            else //sinon on renvoi vers une page, ici error404
                include $path['controllers'].$page['error404'].'.php';
            break;
        case $page['meteo']:
            include $path['controllers'].$page['meteo'].'.php';
        break;
        case $page['depot-avis']:
            if(isset($_SESSION['pseudo']))
                include $path['controllers'].$page['depot-avis'].'.php';
            else
                include $path['controllers'].$page['error404'].'.php';
            break;
        case $page['avis']:
            include $path['controllers'].$page['avis'].'.php';
        break;
        case $page['inscription']:
            if(!isset($_SESSION['pseudo']))
                include $path['controllers'].$page['inscription'].'.php';
            else
                include $path['controllers'].$page['error404'].'.php';
        break;
        case $page['connexion']:
            if(!isset($_SESSION['pseudo']))
                include $path['controllers'].$page['connexion'].'.php';
            else
                include $path['controllers'].$page['error404'].'.php';
        break;
        case $page['administrateur']:
            if(isset($_SESSION['pseudo']) AND $myProfil->getRole() == $role['admin'])
                include $path['controllers'].$page['administrateur'].'.php';
            else
                include $path['controllers'].$page['accueil'].'.php';
            break;
        case $page['recovery-password']:
            if(!isset($_SESSION['pseudo']))
                include $path['controllers'].$page['recovery-password'].'.php';
            else
                include $path['controllers'].$page['error404'].'.php';
        break;
        case $page['deconnexion']:
            include $path['controllers'].$page['deconnexion'].'.php';
        break;
		case $page['erreur']:
            include $path['controllers'].$page['erreur'].'.php';
        break;
		case $page['retour-contact']:
            include $path['controllers'].$page['retour-contact'].'.php';
        break;
        default: //Si il ne trouve pas la valeur de p, on redirige vers l'acceuil, on pourrais le diriger vers error404
            include $path['controllers'].$page['accueil'].'.php';
        break;
    }

    //Haut de page, head + header
    include $path['elt'].'top.php';

    //Views
    switch($p) {
        case $page['accueil']:
            include $path['views'].$page['accueil'].'.php';
        break;
        case $page['visite']:
            include $path['views'].$page['visite'].'.php';
        break;
        case $page['restaurant']:
            include $path['views'].$page['restaurant'].'.php';
        break;
        case $page['noter-resto']:
            if(isset($_SESSION['pseudo']))
                include $path['views'].$page['noter-resto'].'.php';
            else
                include $path['views'].$page['error404'].'.php';
            break;
        case $page['meteo']:
            include $path['views'].$page['meteo'].'.php';
        break;
        case $page['depot-avis']:
            if(isset($_SESSION['pseudo']))
                include $path['views'].$page['depot-avis'].'.php';
            else
                include $path['views'].$page['error404'].'.php';
            break;
        case $page['avis']:
            include $path['views'].$page['avis'].'.php';
        break;
        case $page['inscription']:
            if(!isset($_SESSION['pseudo']))
                include $path['views'].$page['inscription'].'.php';
            else
                include $path['views'].$page['error404'].'.php';
        break;
        case $page['connexion']:
            if(!isset($_SESSION['pseudo']))
                include $path['views'].$page['connexion'].'.php';
            else
                include $path['views'].$page['error404'].'.php';
        break;
        case $page['administrateur']:
            if(isset($_SESSION['pseudo']) AND $myProfil->getRole() == $role['admin'])
                include $path['views'].$page['administrateur'].'.php';
            else
                include $path['views'].$page['accueil'].'.php';
            break;
        case $page['recovery-password']:
            if(!isset($_SESSION['pseudo']))
                include $path['views'].$page['recovery-password'].'.php';
            else
                include $path['views'].$page['error404'].'.php';
        break;
		case $page['erreur']:
            include $path['views'].$page['erreur'].'.php';
        break;
        case $page['contact']:
            include $path['views'].$page['contact'].'.php';
        break;
		case $page['retour-contact']:
            include $path['views'].$page['retour-contact'].'.php';
        break;
        default: //Si il ne trouve pas une page, on redirige vers l'acceuil, on pourrais le diriger vers error404
            include $path['views'].$page['accueil'].'.php';
        break;
    }

    //Bas de page, footer + script
    include $path['elt'].'bottom.php';
?>