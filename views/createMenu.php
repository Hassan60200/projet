<?php
session_start();
include_once '../controllers/createMenuController.php';
require_once '../views/navbarAdmin.php';
?>
<div class="container-fluid">
    <div class="m-5 row">
        <div class="col-md-12  text-center">
            <form class="form-control bg-light" method="POST">
                <div class="form-group">
                    <label class="float-left">Titre</label>
                    <input type="text" class="form-control text-center" name="title" placeholder="Titre">
                </div>
                <div class="form-group">
                    <label class="float-left">Type</label>
                    <select class="form-control text-center" name="type">
                        <?php foreach ($typesList as $type) { ?>
                            <option value="<?= $type['id'] ?>"><?= $type['name'] ?></option>
                        <?php } ?>
                    </select>
                </div>
                <div class="form-group">
                    <label class="float-left">Prix</label>
                    <input type="number" class="form-control text-center" name="price" placeholder="Prix">
                </div>
                <input type="submit" name="createMenu" class="btn btn-success rounded-circle" value="Création">        
            </form>
            <?php if (isset($error)) { ?>
                    <p class="alert alert-danger"><?= $error ?></p>
                <?php } ?>
        </div>    
    </div>    
</div>
<?php
include '../views/footer.php';
?>
