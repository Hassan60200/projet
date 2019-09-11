<?php

require_once '../models/contactModels.php';
if ($_POST['validate']) {
    $event = new Contact();
    $event->deleteContact($_GET['id']);
    header("Location: ../views/contactAdmin.php");
}

if(empty($_SESSION)){
    header('Location: ../views/login.php');
}