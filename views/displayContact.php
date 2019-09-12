<?php
session_start();
include_once '../controllers/displayContactController.php';
include_once '../views/navbarAdmin.php';
?>
<div class="container-fluid m-5">
    <div class="row">
        <div class="d-flex justify-content-center align-items-center flex-column col-12">
            <h1 class="text-center ">Message de <?= $profilList->lastname ?> <?= $profilList->firstname ?></h1>
            <div class="">
                <textarea class="text-center pt-5" rows="5" cols="33"><?=$profilList->message ?> </textarea>
            </div>
        </div>
    </div>
</div>
<?php
include_once '../views/footer.php';
?>