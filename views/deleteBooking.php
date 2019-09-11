<?php
session_start();
require_once '../controllers/deleteBookingController.php';
require_once '../views/navbarAdmin.php';
?>
<body class="text-center">
    <div class="container-fluid row justify-content-center">
        <div class="form m-5 shadow border border-dark w-50">
            <h1 class="text-danger">ATTENTION !</h1>
            <h2 class="mt-5">Êtes-vous sur de vouloir supprimer l'utilisateur ?</h2>
            <h3 class="mb-5">Cette action sera irréversible</h3>
            <div class="row justify-content-center pt-3">
                <div class="col-4">
                    <!--Sinon on retourne sur la page d'accueil-->
                    <a href="bookAdmin.php" class="btn btn-outline-secondary btn-block" name="cancel">NON</a>
                </div>
                <div class="col-4">
                    <!--Sinon on retourne sur la page d'accueil-->
                    <form method="POST">
                        <input type="submit"  class="btn btn-outline-secondary btn-block" name="validate" value="OUI"></input>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>