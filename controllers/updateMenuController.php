<?php
include_once '../models/menuModels.php';
include_once '../models/types.php';
if(isset($_POST['updateMenu'])){
    $update = new Menu();
    $update->updateMenu();
    header('Location: ../views/displayMenu.php');
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