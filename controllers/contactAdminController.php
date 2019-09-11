<?php
include_once '../models/contactModels.php';
$user = new contact();
$userList = $user->getAllUsers();

if(empty($_SESSION)){
    header('Location: ../views/login.php');
}