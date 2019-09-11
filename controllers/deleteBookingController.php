<?php

require_once '../models/bookModels.php';
if ($_POST['validate']) {
    $event = new Book();
    $event->deleteBook($_GET['id']);
    header("Location: ../views/bookAdmin.php");
}

if(empty($_SESSION)){
    header('Location: ../views/login.php');
}