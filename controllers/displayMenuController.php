<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
include_once '../models/menuModels.php';
include_once '../models/types.php';

    
//Lorsqu'on utilise la fonction checkForm alors on active la fonction ci-dessous
    $display = new Menu();
    $displayMenu = $display->getAllMenu();

// fonction permettant d'afficher les données de la table Types
// function checkForm() {
//     global $title, $type, $price;
//     $title = $_POST['title'];
//     $type = $_POST['type'];
//     $price = $_POST['price'];
//     return TRUE;
// }

//Si il n'y a pas de variable de session crée alors on redirige l'utilisateur à la page de connexion
if (empty($_SESSION)) {
    header('Location: ../views/login.php');
    exit();
}
