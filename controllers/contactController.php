<?php
include_once '../models/contactModels.php';
if($_POST['bouton']){
$contact = new Contact();
$contactCreate = $contact->createContact($lastname, $firstname, $mail, $zipCode, $phone, $message);
}
?>