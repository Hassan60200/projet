<?php
include_once '../models/bookModels.php';
$User = new book();
$UserList = $User->getAllBook();

if(empty($_SESSION)){
    header('Location: ../views/login.php');
}