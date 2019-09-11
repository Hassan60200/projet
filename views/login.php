<?php
include_once '../models/connect.php';
include_once '../controllers/loginController.php';
?>
<!DOCTYPE html>
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
    <body>
        <div class="container-fluid">
            <div class="jumbotron bg-dark text-white text-center display-4"
                 <h1>Inscription admin</h1>
            </div>
            <div class="row d-flex justify-content-center">         
                <div class="col-md-3 border m-2 shadow-lg formLogin">
                    <div class="text-center">
                        <h2>Inscription</h2>
                        <form method="POST" action="">

                            <label for="pseudo">Pseudo :</label>
                            <input type="text" placeholder="Votre pseudo" id="pseudo" class="form-control form-control-sm" name="pseudo" />

                            <label for="mail">Mail :</label>
                            <input type="email" placeholder="Votre mail" id="mail" class="form-control form-control-sm" name="mail"/>

                            <label for="mdp">Mot de passe :</label>
                            <input type="password" placeholder="Votre mot de passe" id="mdp" class="form-control form-control-sm" name="mdp" />

                            <div class="d-inline justify-content-lg-center">
                                <input type="submit" class="btn btn-outline-success mt-3" name="forminscription" value="Je m'inscris" />
                                <a href="connexion.php" class="btn btn-outline-primary mt-3">Déja inscrit</a>
                            </div>
                        </form>
                    </div>
                </div> 
            </div>
            <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.js"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" ></script>
            <script src="../assets/js/mains.js"></script>
    </body>
</html>