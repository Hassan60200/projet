<?php
session_start();
include_once '../controllers/menuAdminController.php';
include_once '../views/navbarAdmin.php';
?>
<div class="container-fluid menu">
    <div class="row">
        <div class="col-12 m-5 d-flex justify-content-center">
            <div class="m-5">
                <a href="createMenu.php"><img src="../assets/img/menu.jpg" class="resize border border-light" alt="Creation d'un menu chez L'escale"></a>
                <a href="displayMenu.php"><img src="../assets/img/read.png" class="resize border border-light" alt="Creation d'un menu chez L'escale"></a>
            </div>
        </div>
    </div>
</div>
<?php
include_once '../views/footer.php';
?>