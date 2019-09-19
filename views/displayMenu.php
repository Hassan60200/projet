<?php
session_start();
include_once '../controllers/displayMenuController.php';
include_once '../views/navbarAdmin.php';
?>
<div class="container-fluid">   
    <div class="row justify-content-center">
        <div class="m-5 col-md-10 col-12 d-inline-flex justify-content-center">
            <form method="POST" class="col-10 d-flex">
                <input type="search" class="w-100 text-center"  name="search" placeholder="Rechercher">
                <input type="submit" class="btn btn-primary btn-group-lg glass" name="research" value="">
                <div class="button__horizontal"></div>
                <div class="button__vertical"></div>
            </form>
        </div>
        <div class="text-center col-md-12">
            <table class="table table-bordered text-center table-hover text-dark">
                <thead class="font-weight-bold">
                    <tr>
                        <td>ID</td>
                        <td>Titre</td>
                        <td>Type</td>
                        <td>Prix €</td>
                        <td colspan="2">Action</td>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($displayMenu as $display) {
                        ?>
                        <tr>
                            <td><?= $display->id ?></td>
                            <td><?= $display->title ?></td>
                            <td><?= $display->type ?></td>
                            <td><?= $display->price ?></td>
                            <td><a href="confirmDeleteMenu.php?id=<?= $display->id ?>" class="btn btn-danger btn-block"><i class="fas fa-trash-alt"></i></a></td>
                            <td><a href="updateMenu.php?id=<?= $display->id ?>" class="btn btn-success btn-block"><i class="fas fa-edit"></i></a></td>
                        </tr>
                        <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?php
include_once 'footer.php';
?>