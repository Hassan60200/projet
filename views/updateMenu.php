<?php
session_start();
include_once '../controllers/updateMenuController.php';
include_once '../views/navbarAdmin.php';
?>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12 text-center">
            <form class="form-control bg-light" method="POST">
                <div class="form-group">
                    <label for="formGroupExampleInput">Titre</label>
                    <input type="text" class="form-control" name="title" placeholder="Titre">
                </div>
                <div class="form-group">
                    <label for="formGroupExampleInput">Type</label>
                    <select class="form-control" name="type">
                        <?php foreach ($typesList as $type) { ?>
                            <option value="<?= $type['id'] ?>"><?= $type['name'] ?></option>
                        <?php } ?>
                    </select>
                </div>
                <div class="form-group">
                    <label>Prix</label>
                    <input type="number" class="form-control" minlength="0" name="price" placeholder="Prix">
                </div>
                <input type="submit" name="updateMenu" class="btn btn-success rounded-circle" value="Modifiez">
                <a href="displayMenu.php" class="btn btn-danger ml-2 rounded-circle">Retour</a>
            </form>
        </div>    
    </div>    
</div>
<?php
include '../views/footer.php';
?>
