<?php
session_start();
include_once '../controllers/contactAdminController.php';
require_once '../views/navbarAdmin.php';
?>
<div class="container-fluid">
    <div class="row">
    <div class="text-center text-white">
        <h1>Gestion des contacts</h1>
    </div>
    <div class="text-center col-md-12">
    <table class="table table-bordered text-center table-hover text-dark">
        <thead class="font-weight-bold">
            <tr>
                <td>ID</td>
                <td>Nom</td>
                <td>Prénom</td>
                <td>Adresse mail</td>
                <td>Numéro de téléphone</td>
                <td>Code Postal</td>
                <td colspan="2">Action</td>
            </tr>
        </thead>
        <tbody>
    <?php foreach ($userList as $user) { 
        ?>
        <tr>
            <td><?= $user->id ?></td>
            <td><?= $user->lastname ?></td>
            <td><?= $user->firstname ?></td>
            <td><?= $user->mail ?></td>
            <td><?= $user->phone ?></td>
            <td><?= $user->zipCode ?></td>
            <td><a href="displayContact.php?id=<?= $user->id ?>" class="btn btn-success btn-block">Voir profil</a></td>
            <td><a href="confirmDeleteContact.php?id=<?= $user->id ?>" class="btn btn-danger btn-block">Supprimer</a></td>
        </tr>
        <?php
    }
    ?>
     </tbody>
    </table>
</div>
</div>
</div>
<?php include_once 'footer.php';
