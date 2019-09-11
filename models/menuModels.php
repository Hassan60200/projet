<?php

class Menu {

    private $id;
    private $title;
    private $price;
    private $type;
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

    public function getTitle() {
        return $this->title;
    }

    public function getType() {
        return $this->type;
    }

    public function getPrice() {
        return $this->price;
    }

    //création d'un nouveau message$  de contact
    public function createMenu($title, $type, $price) {
        $query = $this->db->prepare('INSERT INTO Menu (title, id_types, price) VALUE (:title, :type, :price)');
        // Lier les variables à l'instruction 'prepare' en tant que valeurs
        $query->bindValue(':title', $title, PDO::PARAM_STR);
        $query->bindValue(':type', $type, PDO::PARAM_INT);
        $query->bindValue(':price', $price, PDO::PARAM_INT);
        //execution de la requete
        return $query->execute();
    }

    //fonction affichage des menus
    public function getAllMenu() {
        $sql = 'SELECT Menu.*, `types`.`name` as `type` FROM `Menu` INNER JOIN `types` ON `Menu`.`id_types` = `types`.`id`';
        $menu = $this->db->query($sql);
        $displayMenu = $menu->fetchAll(PDO::FETCH_OBJ);
        return $displayMenu;
    }

    //fonction supprimer l'utilisateur
    public function deleteMenu($id) {
        // On prépare une requête de suppression
        $sql = 'DELETE FROM Menu WHERE id = :id';
        if ($stmt = $this->db->prepare($sql)) {
            // On lie notre variable eventID à notre requête préparée
            $stmt->bindValue(':id', $id, PDO::PARAM_INT);
            // On tente d'exécuter la requête préparée
            if ($stmt->execute()) {
                // Si la suppression des données s'est bien passée, on redirige vers la page landing.
            }
        }
    }

    public function updateMenu($title, $price, $id_types) {
        //preparation de la requete
        $query = $this->db->prepare("UPDATE `Menu` SET title = :title, price = :price, id_types = :id_types WHERE id = :id;");
        $query->bindValue(':title', $title, PDO::PARAM_STR);
        $query->bindValue(':price', $price, PDO::PARAM_INT);
        $query->bindValue(':types', $id_types, PDO::PARAM_INT);
        //execution de la requete
        $query->execute();
        if ($query->rowCount() > 0) {
            return true;
        }
        return false;
    }


}
