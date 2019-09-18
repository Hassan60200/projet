<?php

include_once '../models/menuModels.php';
include_once '../models/types.php';

//Dès lors qu'on accède sur la page updatemenu la fonction getTypes s'active
$types = new types();
$typesList = $types->getTypes();

//Dès lors qu'on accède sur la page updatemenu la fonction getMenu s'active
$menu = new Menu();
$menuList = $menu->getMenu($_GET['id']);

//Lorsque le bouton submit est actionné on active la fonction ci-dessous
if (isset($_POST['modify'])) {
    $title = $_POST['title'];
    $id_types = $_POST['type'];
    $price = $_POST['price'];
    $id = $_GET['id'];
    $update = new Menu();
    $update->editMenu($id, $title, $price, $id_types);
    header('Location: ../views/displayMenu.php');
}

//Si il n'y a pas de variable de session crée alors on redirige l'utilisateur à la page de connexion
if (empty($_SESSION)) {
    header('Location: ../views/login.php');
}
