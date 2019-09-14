<?php
include_once '../models/contactModels.php';

$id = $_GET['id'];


$profil = new Contact();
$profilList = $profil->getProfil($id);

if (empty($_SESSION)) {
    header('Location: ../views/login.php');
}



