<?php

class Admin {

    private $db;

    public function __construct() {
        try {
            $this->db = new PDO('mysql:host=localhost;dbname=Escale', 'DERKAOUI', 'sharigan60', array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8', PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
        } catch (Exception $ex) {
            die($ex->getMessage());
        }
    }

    public function createUser($pseudo, $mail, $mdp) {
        try {
            $sql = "INSERT INTO membres (pseudo, mail, motdepasse)  VALUES (:pseudo, :mail, :motdepasse)";
            $req = $this->db->prepare($sql);
            $req->bindValue(':pseudo', $pseudo, PDO::PARAM_STR);
            $req->bindValue(':mail', $mail, PDO::PARAM_STR);
            $req->bindValue(':motdepasse', $mdp, PDO::PARAM_STR);
            $req->execute();
            $error = $req->errorInfo();
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function connectUser($mail, $motdepasse) {
        global $error;
        $stmt = $this->db->prepare('SELECT * FROM membres WHERE mail = :mail');
        $stmt->bindValue(':mail', $mail, PDO::PARAM_STR);
        $stmt->execute();
        $user = $stmt->fetch(PDO::FETCH_ASSOC);
        $_SESSION = $user;
        if (empty($user)) {
            $error = 'Veuillez insérer un mail et un mot de passe valide !!!';
            return FALSE;
        } else {
            if (password_verify($motdepasse, $user['motdepasse'])) {
                return true;
            } else {
                $error = 'Le mot de passe est incorrect';
                return FALSE;
            }
        }
    }

}
