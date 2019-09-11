<?php
include_once '../views/navbarAdmin.php';
require_once 'vendor/autoload.php';

if(empty($_SESSION['user'])){
    header('Location: ../views/login.php');
}

// Create the Transport
$transport = (new Swift_SmtpTransport('smtp.googlemail.com', 465, 'ssl'))
  ->setUsername('derkaouihassan19@gmail.com')
  ->setPassword('enkkutrvisjcbdqf')
;
 
// Create the Mailer using your created Transport
$mailer = new Swift_Mailer($transport);
 
// Create a message
$body = 'Bonjour, <p>nous avons bien pris en compte votre réservation.</p> <p>Nous vous attendons avec impatience !</p>';
 
$message = (new Swift_Message('Email Through Swift Mailer'))
  ->setFrom(['derkaouihassan19@gmail.com' => 'Hassan'])
  ->setTo(['RECEPIENT_1_EMAIL_ADDRESS'])
  ->setBody($body)
  ->setContentType('text/html')
;
 
// Send the message
$mailer->send($message);

?>