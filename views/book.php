<?php
$lastname = htmlspecialchars(trim($_POST['lastname']));
$firstname = htmlspecialchars(trim($_POST['firstname']));
$mail = htmlspecialchars(trim($_POST['mail']));
$phone = htmlspecialchars(trim($_POST['phone']));
$day = htmlspecialchars(trim($_POST['day']));
$booking = htmlspecialchars(trim($_POST['booking']));
$people = htmlspecialchars(trim($_POST['people']));
include_once '../views/header.php';
include_once '../controllers/bookController.php';
?>
<div class="container-fluid">
    <section class="reserved">
        <div class=" col-12 d-flex justify-content-center">                                
            <p class="text-center font-weight-bold text-white my-4">Vous pouvez effectuer votre réservation en ligne en remplissant le formulaire ci-dessous.</p>
        </div>
        <div class="row">
            <?php
            if (isset($_POST['save'])) {
                ?>
                <div class="col-md-12 mt-2">
                    <p class="alert alert-success">Votre message a bien été envoyé.</p>
                </div>
                <?php
            } else {
                ?>
                <form class="form-group justify-content-center formBook border col-md-5 ml-4" action="" method="post">
                    <div class="form-group">
                        <label for="Nom">Nom *</label>
                        <input  class="form-control" type="text" name="lastname">
                        <label for="prénom">Prénom *</label>
                        <input class="form-control" type="text" name="firstname">
                        <label for="email">Email *</label>
                        <input class="form-control" type="email" name="mail">
                        <label for="phone">Téléphone *</label>
                        <input class="form-control" type="tel" name="phone">
                        <label for="day">Date de réservation *</label>
                        <input type="date" name="day" class="form-control">
                        <label for="booking">Horaires *</label>
                        <input type="time" name="booking" size="1" class="form-control text-center">
                        <label for="people">Nombre de personnes *</label>
                        <input type="number" name="people" value="" class="form-control" min="1" max="10">
                        <input type="submit" name="save" value="Envoyer" class="mt-2 btn btn-success">
                    </div>
                    <small class="text-danger font-weight-bold">* Obligatoire</small>
                </form>
                <?php
            }
            ?>
            <div class="col-md-6 ml-4">
                <h4 class="text-white">Horaires</h4>
                <table class="table table-bordered text-white">
                    <thead class="text-center thead-dark">
                        <tr>
                            <th>Jours </th>
                            <th>Horaires</th>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                        <tr>
                            <td>Lundi-Samedi</td>
                            <td>06h30-21h00</td>
                        </tr>
                        <tr>
                            <td>Dimanche</td>
                            <td>10h00-21h00</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
</div>
</section>
</div>
<?php
include '../views/footer.php';
?>