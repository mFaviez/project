<?php

    class Note {

        private $_id;
        private $_restaurant;
        private $_note;

        public function __construct(array $data) {
            $this->hydrate($data);
        }

        public function hydrate(array $data) {
            foreach($data as $key => $value) {
                $method = 'set'.ucfirst($key);
                if(method_exists($this, $method)) {
                    $this->$method($value);
                }
            }
        }


        public function getId()
        {
            return $this->_id;
        }


        public function setId($id)
        {
            $this->_id = $id;
        }


        public function getRestaurant()
        {
            return $this->_restaurant;
        }


        public function setRestaurant($restaurant)
        {
            $this->_restaurant = $restaurant;
        }


        public function getNote()
        {
            return $this->_note;
        }


        public function setNote($note)
        {
            $this->_note = $note;
        }

    }