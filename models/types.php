<?php

class types {

    private $id;
    private $name;
    private $db;


    public function __construct() {
        try {
            $this->db = new PDO('mysql:host=localhost;dbname=Escale', 'DERKAOUI', 'sharigan60', array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8', PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
        } catch (Exception $ex) {
            die($ex->getMessage());
        }
    }

    public function getId(){
        return $this->id;
    }

     public function getName(){
        return $this->name;
    }

// requete SQL permettant d'afficher les différents types de menu
        public function getTypes(){
        $query = $this->db->prepare('SELECT * FROM types');
        $query->execute();
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }
}
