<?php
    class AvisManager {

        private $_db;

        public function __construct($db) {
            $this->setDb($db);
        }
        public function setDb(PDO $db) {
            $this->_db = $db;
        }

        //Ajoute un avis dans la bdd
        public function insert(Avis $avis) {
            $req = $this->_db->prepare('INSERT INTO avis(name, title, message, id_profil, date_time) VALUES(:name, :title, :message, :id_profil, :date_message)');
            $req->bindValue(':name', strtolower($avis->getName()));
            $req->bindValue(':title', strtolower($avis->getTitle()));
            $req->bindValue(':message', $avis->getMessage());
            $req->execute();
        }

        //Sélectionne les commentaires dans la bdd
        public function get($info) {
            $avisList = [];

            if(is_int($info)) {
                $req = $this->_db->query('SELECT * FROM avis WHERE id = '.$info);
            } else {
                $req = $this->_db->prepare('SELECT * FROM avis WHERE name = :name');
                $req->bindValue(':name', $info, PDO::PARAM_STR);
                $req->execute();
            }

            return $avisList;
        }
    }
?>