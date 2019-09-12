<?php
session_start();

// S'il y a une session alors on ne retourne plus sur cette page  
if (($_SESSION['id'])) {
    header('Location: ../views/admin.php');
    exit;
}
// Si le formulaire a été validé avec succès
if (isset($_POST['formconnexion'])) {
    // On inclut le fichier contenant notre objet
    require_once '../models/adminModels.php';
    // On crée un nouvel objet User
    $user = new Admin();
    // On donne toutes les dépendances nécessaires à la vérifications de l'existence de l'utilisateur.
    if ($user->connectUser($_POST['mailconnect'], $_POST['mdp'])) {
        header('Location: ../views/admin.php?sessionde' . $_SESSION['id']);
    }
}
?>
