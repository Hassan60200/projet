<?php
session_start();
include_once '../controllers/displayContactController.php';
include_once '../views/navbarAdmin.php';
?>
<div class="container-fluid my-5">
    <div class="row">
        <div class="d-flex justify-content-center align-items-center flex-column col-12 my-5">
            <h1 class="text-center ">Message de <?= $profilList->lastname ?> <?= $profilList->firstname ?></h1>
            <div>
                <textarea class="text-center pt-5" rows="5" cols="33"><?=$profilList->message ?> </textarea>
            </div>
            <a href="../views/contactAdmin.php " class="p-3"><i class="fas fa-undo"></i></a>
        </div>
    </div>
</div>
<?php
include_once '../views/footer.php';
?>