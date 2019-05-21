<?php

    class ProfilManager {

        private $_db;

        public function __construct($db) {
            $this->setDb($db);
        }
        public function setDb(PDO $db) {
            $this->_db = $db;
        }
		
		 //Ajoute le profil dans la bdd
        public function insert(Profil $profil) {
            $req = $this->_db->prepare('INSERT INTO profil(pseudo, password, email, date_time_registration) VALUES(:pseudo, :password, :email, :dateInscription)');
            $req->bindValue(':pseudo', strtolower($profil->getPseudo()));
            $req->bindValue(':password', $profil->getPassword());
            $req->bindValue(':email', strtolower($profil->getEmail()));
            $req->bindValue(':dateInscription', $profil->getDate_time_registration());
            $req->execute();
        }