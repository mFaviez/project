<?php

    class ContactManager{

        private $_db;

        public function __construct($db) {
            $this->setDb($db);
        }
        public function setDb(PDO $db) {
            $this->_db = $db;
        }

        //Ajoute le profil dans la bdd
        public function insert(Contact $contact) {
            $req = $this->_db->prepare('INSERT INTO contact(
                                        who,  
                                        email, 
                                        subject, 
                                        message) 
                                        VALUES(
                                        :who,  
                                        :email,
                                        :subject,
                                        :message)');
            $req->bindValue(':who', strtolower($contact->getWho()));
            $req->bindValue(':email', $contact->getEmail());
            $req->bindValue(':subject', $contact->getSubject());
            $req->bindValue(':message', $contact->getMessage());
            $req->execute();
        }

    }
?>