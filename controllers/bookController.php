<?php

include_once '../models/bookModels.php';
$lastname = htmlspecialchars(trim($_POST['lastname']));
$firstname = htmlspecialchars(trim($_POST['firstname']));
$mail = htmlspecialchars(trim($_POST['mail']));
$phone = htmlspecialchars(trim($_POST['phone']));
$day = htmlspecialchars(trim($_POST['day']));
$booking = htmlspecialchars(trim($_POST['booking']));
$people = htmlspecialchars(trim($_POST['people']));
if (isset($_POST['save'])) {
    if(!empty($lastname) &&!empty($firstname) &&!empty($mail) &&!empty($phone) &&!empty($day) &&!empty($booking) &&!empty($people)) {
        $reservation = new Book();
        $bookCreate = $reservation->createRegister($lastname, $firstname, $mail, $phone, $day, $booking, $people);
        $succes = 'Votre réservation a bien été envoyer !!!';
    } else {
           $error = 'Veuillez remplir tous les champs du formulaire !!!'; 
    }
}
?>
