<?php
session_start();
require_once '../models/contactModels.php';
$user = new Contact();
$user->setId($_GET['id']);
$user->getUserById($id);
var_dump($user);

if(!empty($_GET['Delete'])){

    $id = $_GET['Delete'];
    $user->deleteContact($id);
    die($id);
    header('Location: ?page=confirmDeleteContact.php');
    exit();
}

if(isset($_SESSION['id'])){

    $user->setId($_SESSION['id']);
    $user->getUserById();
}


if(empty($_SESSION)){
    header('Location: ../views/login.php');
}