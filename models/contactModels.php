<?php

class Contact {

    private $id;
    private $lastname;
    private $firstname;
    private $mail;
    private $phone;
    private $zipCode;
    private $message;
    private $db;

    public function __construct() {
        try {
            $this->db = new PDO('mysql:host=localhost;dbname=Escale', 'DERKAOUI', 'sharigan60', 
                    array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8', PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
        }
        //On teste les erreurs avec le try/catch si tout est bon, on est connecté à la base de données
        catch (Exception $ex) {
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
        return $this->address;
    }

    public function getZipCode() {
        return $this->zipCode;
    }

    public function getMessage() {
        return $this->message;
    }    
    public function setId($id) {
        $this->id = (int) $id;
    }
    public function getAllUsers() {
        $sql = 'SELECT * FROM contact';
        $usersRequest = $this->db->query($sql);
        $userList = $usersRequest->fetchAll(PDO::FETCH_OBJ);
        return $userList;
    }

    //création d'un nouveau message$  de contact
    public function createContact($lastname, $firstname, $mail, $zipCode, $phone, $message) {
            $query = $this->db->prepare('INSERT INTO `contact` (lastname, firstname, mail, zipCode, phone, message) VALUE (:lastname, :firstname, :mail, :zipCode, :phone, :message)');
            // Lier les variables à l'instruction 'prepare' en tant que valeurs
            $query->bindValue(':lastname', $lastname ,PDO::PARAM_STR);
            $query->bindValue(':firstname', $firstname ,PDO::PARAM_STR);
            $query->bindValue(':mail', $mail ,PDO::PARAM_STR);
            $query->bindValue(':zipCode', $zipCode ,PDO::PARAM_STR);
            $query->bindValue(':phone', $phone ,PDO::PARAM_STR);
            $query->bindValue(':message', $message ,PDO::PARAM_STR);
            //execution de la requete
            $query->execute();
    }

    //fonction supprimer l'utilisateur
     public function deleteContact(){
            // On prépare une requête de suppression
            $sql = 'DELETE FROM contact WHERE id = :id';

            // On donne à la variable ID sa valeur dans le formulaire
            $id = $_GET['id'];

            if($stmt = $this->db->prepare($sql)){
                // On lie notre variable eventID à notre requête préparée
                $stmt->bindValue(':id', $id, PDO::PARAM_INT);

                // On tente d'exécuter la requête préparée
                if($stmt->execute()){
                    // Si  suppression des données s'est bien passée, on redirige vers la page landing.
                }else{
                    // Sinon, on affiche un message d'erreur.
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
