<?php

include_once '../models/adminModels.php';
$regexText = '/^[a-zA-ZáàâäãåçéèêëíìîïñóòôöõúùûüýÿæœÁÀÂÄÃÅÇÉÈÊËÍÌÎÏÑÓÒÔÖÕÚÙÛÜÝŸÆŒ._\s-]{3,60}$/';
$pseudo = htmlentities($_POST['pseudo']);
$mdp = password_hash($_POST['mdp'], PASSWORD_DEFAULT);
$mail = $_POST['mail'];
if (isset($_POST['forminscription'])) {
    if (!empty($_POST['pseudo']) AND ! empty($_POST['mail']) AND ! empty($_POST['mdp'])) {
        if (count($_POST) > 0) {
            if (empty($_POST['pseudo']) AND ! preg_match($regexText, $_POST['pseudo'])) {
                $error = true;
            }
            if (empty($_POST['mdp'])) {
                $error = true;
            }
            if (empty($_POST['mmail']) AND ! filter_input(INPUT_POST, 'mmail', FILTER_VALIDATE_EMAIL)) {
                $error = true;
            }

            if ($_POST['forminscription']) {
                $newUser = new Admin();
                $user = $newUser->createUser($pseudo, $mail, $mdp);
                sleep(5);
                header('Location: ../views/connexion.php');
            }
        }
    }
}
