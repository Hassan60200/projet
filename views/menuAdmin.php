<?php
session_start();
include_once '../controllers/menuAdminController.php';
include_once '../views/navbarAdmin.php';
?>
<div class="container-fluid ">
    <div class="row">
        <div class="col-lg-12 col-sm-12 my-5 d-flex justify-content-center">
            <h1 class="text-uppercase ">Gestion des menus</h1>
        </div>
        <div class="col-lg-12 col-sm-12 my-5 d-flex justify-content-around">
            <div class="my-5 border">
                <a href="createMenu.php" title="Création d'un nouveau menu"><i class="fas fa-cart-plus p-4 resize" ></i></a>
                <a href="displayMenu.php" title="Affichage des menus crées"><i class="fas fa-book-reader p-4 resize"></i></a>
            </div>
        </div>
    </div>
</div>
<?php
include_once '../views/footer.php';
?>