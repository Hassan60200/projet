<?php
session_start();
include_once '../controllers/updateMenuController.php';
include_once '../views/navbarAdmin.php';
?>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12 text-center my-5">
            <h1 class="text-uppercase">Modification <?= $menuList['title'] ?> </h1>
            <form class="form-control bg-light" method="POST">
                <div class="form-group">
                    <label for="formGroupExampleInput">Titre</label>
                    <input type="text" class="form-control" name="title" placeholder="Titre" value="<?= $menuList['title'] ?>">
                </div>
                <div class="form-group">
                    <label for="formGroupExampleInput">Type</label>
                    <select class="form-control" name="type">
                        <?php foreach ($typesList as $type) { ?>
                            <option value="<?= $type['id'] ?>" <?= $menuList['id_types'] == $type['id'] ? 'selected' : '' ?> ><?= $type['name'] ?></option>
                        <?php } ?>
                    </select>
                </div>
                <div class="form-group">
                    <label>Prix</label>
                    <input type="number" class="form-control" min="0" name="price" value="<?= $menuList['price'] ?>" placeholder="Prix">
                </div>
                <input type="submit" name="modify" class="btn btn-success rounded-circle" value="Modifiez">
                <a href="displayMenu.php" class="btn btn-danger ml-2 rounded-circle">Retour</a>
            </form>
        </div>    
    </div>    
</div>
<?php
include '../views/footer.php';
?>
