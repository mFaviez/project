<?php

$path = array( //chemin des dossiers
	'controllers' => 'controllers/',
    'include' => 'include/',
    'models' => 'models/',
    'css' => 'public/css/',
    'bootstrap' => 'public/css/bootstrap/',
	'img' => 'public/img/',
    'js' => 'public/js/',
	'bootstrap-js' => 'public/js/bootstrap/',
    'views' => 'views/',
    'avatars' => 'public/img/avatars/',
    'font-awesome' => 'public/css/font-awesome/',
    'icon' => 'public/img/icon',
	);

$page = array( //création de l'URL des pages
	'accueil' => 'accueil',
    'visite' => 'visite',
    'restaurant' => 'restaurant',
	'noter-resto' => 'noter-resto',
	'contact' => 'contact',
    'connexion' => 'connexion',
    'inscription' => 'inscription',
	'mon-profil' => 'mon-profil',
    'administrateur' => 'administrateur',
	'depot-avis' => 'depot-avis',
	'error404' => 'error404',
	'deconnexion' => 'deconnexion',
	'erreur' => 'erreur'
	 );

$link = array( //création des liens de pages
	'accueil' => 'accueil',
    'visite' => 'visite',
    'restaurant' => 'restaurant',
	'contact' => 'contact',
    'connexion' => 'connexion',
    'inscription' => 'inscription',
	'mon-profil' => 'mon-profil',
    'administrateur' => 'administrateur',
    'depot-avis' => 'depot-avis',
	'avis' => 'avis',
	'error404' => 'error404',
	'deconnexion' => 'deconnexion',
	'erreur' => 'erreur'	
    );

$visite = array(
    'port' => 'visite du port',
    'aquarium' => 'Aquarium de Vannes',
    'musee' => 'La Cohue, Musée des Beaux-Arts',
    'bateau' => 'Compagnie du Golfe – Bateau'
);

$role = array(
    'admin' => 'ADMIN',
    'user' => 'USER'
)
?>