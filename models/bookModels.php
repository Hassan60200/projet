<?php

class Book{

    private $id;
    private $lastname;
    private $firstname;
    private $mail;
    private $phone;
    private $day;
    private $booking;
    private $people;
    private $db;

    public function __construct() {
        try {
            $this->db = new PDO('mysql:host=localhost;dbname=Escale', 'DERKAOUI', 'sharigan60', array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8', PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
        } catch (Exception $ex) {
            die($ex->getMessage());
        }
    }

        // fonctions permettant d'afficher les infos de l'utilisateur
    public function getId() {
        return $this->id;
    }

    public function getLastname() {
        return $this->lastname;
    }

    public function getFirstname() {
        return $this->firstame;
    }

    public function getMail() {
        return $this->mail;
    }

    public function getPhone() {
        return $this->phone;
    }

    public function getDay() {
        return $this->day;
    }

    public function getBooking() {
        return $this->booking;
    }    
    public function getPeople() {
        return $this->people;
    }    
   
    public function getAllBook() {
        $sql = 'SELECT * FROM register';
        $userBooking = $this->db->query($sql);
        $userBookingList = $userBooking->fetchAll(PDO::FETCH_OBJ);
        return $userBookingList;
    }

    //création d'un nouveau message$  de contact
    public function createRegister($lastname, $firstname, $mail, $phone, $day, $booking, $people) {
            $query = $this->db->prepare('INSERT INTO `register` (lastname, firstname, mail, phone, day, booking, people) VALUE (:lastname, :firstname, :mail, :phone, :day, :booking, :people)');
            // Lier les variables à l'instruction 'prepare' en tant que valeurs
            $query->bindValue(':lastname', $lastname ,PDO::PARAM_STR);
            $query->bindValue(':firstname', $firstname ,PDO::PARAM_STR);
            $query->bindValue(':mail', $mail ,PDO::PARAM_STR);
            $query->bindValue(':phone', $phone ,PDO::PARAM_STR);
            $query->bindValue(':day', $day ,PDO::PARAM_STR);
            $query->bindValue(':booking', $booking ,PDO::PARAM_INT);
            $query->bindValue(':people', $people ,PDO::PARAM_STR);
            //execution de la requete
            $query->execute();
    }

    //fonction supprimer l'utilisateur
     public function deleteBook($id){
            // On prépare une requête de suppression
            $sql = 'DELETE FROM register WHERE id = :id';            
            if($stmt = $this->db->prepare($sql)){
                // On lie notre variable eventID à notre requête préparée
                $stmt->bindValue(':id', $id, PDO::PARAM_INT);
                // On tente d'exécuter la requête préparée
                if($stmt->execute()){
                }
            }
        } 
        
    public function getUserById() {
        $request = $this->db->prepare('SELECT * FROM contact WHERE `id` = :id');
        $request->bindValue(':id', $this->id, PDO::PARAM_INT);
        if ($request->execute()) {
            $user = $request->fetch(PDO::FETCH_OBJ);
            $this->lastname = $user->lastname;
            $this->firstname = $user->firstname;
            $this->mail = $user->mail;
            $this->phone = $user->phone;
            $this->zipCode = $user->zipCode;
            $this->message = $user->message;
            return TRUE;
        }
        return FALSE;
    }
    
    public function verifyUser() {
        $request = $this->db->prepare('SELECT * FROM `contact` WHERE `id` = :id');
        $request->bindValue(':id', $this->id, PDO::PARAM_INT);
        if ($request->execute()) {
            if ($request->columnCount() > 0) {
                return true;
            }
        }
        return false;
    }

}
