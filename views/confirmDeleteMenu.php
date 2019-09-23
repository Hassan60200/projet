<?php
session_start();
include_once '../controllers/deleteMenuController.php';
require_once '../views/navbarAdmin.php';
?>
<body class="text-center">
    <div class="container-fluid row justify-content-center">
        <div class="form m-5 shadow border">
            <h1 class="text-danger">ATTENTION !</h1>
            <h2 class="mt-5">Êtes-vous sur de vouloir supprimer  <?= $menuList['title'] ?>  ?</h2>
            <h3 class="mb-5">Cette action sera irréversible</h3>
            <div class="row justify-content-center pt-3">
                <div class="col-4">
                    <!--Sinon on retourne sur la page d'accueil-->
                    <a href="displayMenu.php" class="btn btn-outline-primary btn-block" name="cancel">NON</a>
                </div>
                <div class="col-4">
                    <!--Sinon on retourne sur la page d'accueil-->
                    <form method="POST">
                        <input type="submit"  class="btn btn-outline-danger btn-block" name="delete" value="OUI"></input>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>