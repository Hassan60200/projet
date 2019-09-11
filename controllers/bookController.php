<?php
include_once '../models/bookModels.php';
if($_POST['save']){
$reservation = new Book();
$bookCreate = $reservation->createRegister($lastname, $firstname, $mail, $phone, $day, $booking, $people);
}
?>
