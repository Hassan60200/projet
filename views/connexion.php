<?php
session_start();
include_once '../controllers/connexionController.php';
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
    <body>
        <div class="container-fluid">
            <div class="jumbotron bg-dark text-white text-center display-4"
                 <h1>Connexion admin</h1>
            </div>
            <div class="row d-flex justify-content-center ">         
                <div class="col-md-3 m-2  formLogin border shadow-lg">
                    <form class="form-group justify-content-center  col-md-12" action="" method="post">
                        <div class="form-group text-center">
                            <label class="mt-2" for="mailconnect">Adresse mail *</label>
                            <input type="email" class="form-control form-control-sm" name="mailconnect"  placeholder="Mail" />
                            <label class="mt-2" for="mdpconnect">Mot de passe *</label>
                            <input type="password" class="form-control form-control-sm" name="mdp"  placeholder="Mot de passe" />
                            <div class="d-inline justify-content-lg-center">
                                <input type="submit"  class="btn btn-outline-success mt-3" name="formconnexion" value="Se connecter !" />
                                <a href="login.php" class="btn btn-outline-primary mt-3">Pas encore inscrit</a>
                                <a href="" class="btn btn-outline-secondary mt-3">Mot de passe oublié !!!</a>                                
                            </div>
                        </div>
                    </form>
                    <?php if (isset($error)) { ?>
                        <p class="alert alert-danger"><?= $error ?></p>
                    <?php } ?>
                </div>
            </div>
        </div>
    </body>
</html>