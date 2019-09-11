<?php

require_once '../models/menuModels.php';
if ($_POST['delete']) {
    $event = new Menu();
    $event->deleteMenu($_GET['id']);
    header("Location: ../views/displayMenu.php");
}

if(empty($_SESSION)){
    header('Location: ../views/login.php');
}