<?php 
session_start();
function connectDb() {
    $dbhost = 'localhost';
    $dbname = 'Escale';
    $dbuser = 'DERKAOUI';
    $dbpassword = 'sharigan60';    
    try {
        $connect_db = new PDO('mysql:host=' . $dbhost . ';dbname=' . $dbname, $dbuser, $dbpassword, array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8', PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING));
        return $connect_db;
    } catch (Exception $e) {
        die($e->getMessage());
    }
}
?>
