<?php

include_once '../models/contactModels.php';

$lastname = $_POST['lastname'];
$firstname = $_POST['firstname'];
$mail = $_POST['mail'];
$zipCode = $_POST['zipCode'];
$phone = $_POST['phone'];
$message = $_POST['message'];
if (isset($_POST['bouton'])) {
    if (!empty($lastname) && !empty($firstname) && !empty($mail) && !empty($zipCode) && !empty($phone) && !empty($message)) {
        $contact = new Contact();
        $contactCreate = $contact->createContact($lastname, $firstname, $mail, $zipCode, $phone, $message);
        $succes = 'Votre message a bien été envoyer !!!';
    }
    else {
           $error = 'Veuillez remplir tous les champs du formulaire !!!'; 
    }
}
?>