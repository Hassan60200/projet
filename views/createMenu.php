<?php
session_start();
include_once '../controllers/createMenuController.php';
require_once '../views/navbarAdmin.php';
?>
<div class="container-fluid">
    <div class="menu row">
        <div class="col-md-12  text-center">
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
                    <input type="number" class="form-control" name="price" placeholder="Prix">
                </div>
                <input type="submit" name="createMenu" class="btn btn-success rounded-circle" value="Création">
            </form>
        </div>    
    </div>    
</div>
<?php
include '../views/footer.php';
?>
