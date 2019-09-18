<?php
session_start();
include_once '../controllers/menuAdminController.php';
include_once '../views/navbarAdmin.php';
?>
<div class="container-fluid ">
    <div class="row">
        <div class="col-lg-12 col-sm-12 m-5 d-flex justify-content-around">
            <div class="m-5">
                <a href="createMenu.php"><i class="fas fa-cart-plus p-4 resize"></i></a>
                <a href="displayMenu.php"><i class="fas fa-book-reader p-4 resize"></i></a>
            </div>
        </div>
    </div>
</div>
<?php
include_once '../views/footer.php';
?>