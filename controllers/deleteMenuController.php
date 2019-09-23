<?php

require_once '../models/menuModels.php';
if ($_POST['delete']) {
    $event = new Menu();
    $event->deleteMenu($_GET['id']);
    header("Location: ../views/displayMenu.php");
}

$menu = new Menu();
$menuList = $menu->getMenu($_GET['id']);

if(empty($_SESSION)){
    header('Location: ../views/login.php');
}