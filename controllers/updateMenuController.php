<?php

include_once '../models/menuModels.php';
include_once '../models/types.php';


$types = new types();
$typesList = $types->getTypes();

$menu = new Menu();
$menuList = $menu->getMenu($_GET['id']);

if (isset($_POST['modify'])) {
    $title = $_POST['title'];
    $id_types = $_POST['type'];
    $price = $_POST['price'];
    $id = $_GET['id'];
    $update = new Menu();
    $update->editMenu($id, $title, $price, $id_types);
    header('Location: ../views/displayMenu.php');
}




if (empty($_SESSION)) {
    header('Location: ../views/login.php');
}