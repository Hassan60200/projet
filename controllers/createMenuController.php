<?php

include_once '../models/menuModels.php';
include_once '../models/types.php';

$types = new types();
$typesList = $types->getTypes();

if (isset($_POST['createMenu'])) {
    if (checkForm()) {
        $create = new Menu();
        if ($createMenu = $create->createMenu($title, $type, $price)) {
            header('Location: ../views/displayMenu.php');
        }
        
    }
}

function checkForm() {
    global $title, $type, $price;
    $title = $_POST['title'];
    $type = $_POST['type'];
    $price = $_POST['price'];
    return TRUE;
}

if(empty($_SESSION)){
    header('Location: ../views/login.php');
}