<?php
session_start();
include_once '../controllers/bookAdminController.php';
require_once '../views/navbarAdmin.php';
?>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link href="https://fonts.googleapis.com/css?family=Montserrat:500&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="/assets/css/style.css">
        <link rel="stylesheet" href="/assets/css/menu.css">
        <title>L'ESCALE</title>
    </head>
<div class="container-fluid reservation">
    <div class="rowr">
    <div class="text-center my-4">
        <h1>Gestion des réservations</h1>
    </div>
    <div class="text-center col-md-12">
    <table class="table table-bordered table-responsive-lg text-center table-hover">
        <thead class="font-weight-bold">
            <tr>
                <td>ID</td>
                <td>Nom</td>
                <td>Prénom</td>
                <td>Date de réservation</td>
                <td>Heure de réservation</td>
                <td>Numéro de téléphone</td>
                <td>Adresse mail</td>
                <td>Personnes</td>
                <td colspan="3">Action</td>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($UserList as $userBooking) : ?>
                <tr>
                   <td><?= $userBooking->id?></td>
                    <td><?=$userBooking->lastname?></td>
                    <td><?=$userBooking->firstname?></td>
                    <td><?=$userBooking->day ?></td>
                    <td><?=$userBooking->booking ?></td>
                    <td><?=$userBooking->phone ?></td>
                    <td><?=$userBooking->mail ?></td>
                    <td><?=$userBooking->people ?></td>
                    <td class="btn btn-success"><a href="sendmail.php" class="text-dark" name="accept"><i class="fas fa-user-check"></i></a></td>
                    <td class="btn btn-danger"><a href="deleteBooking.php?id=<?= $userBooking->id ?>" class="text-dark"  name="delete" ><i class="fas fa-trash-alt"></i></a></td>
                    </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
</div>
</div>
<?php
require_once 'footer.php';
?>
