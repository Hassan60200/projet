<?php
include_once '../controllers/contactController.php';
include_once '../views/header.php';
?>

<section class="call">
    <div class="row">
        <div  class="col-12 col-lg-12">
            <!-- Début du formulaire -->
             <?php if (isset($error)) { ?>
                    <p class="alert alert-danger"><?= $error ?></p>
                <?php } else { ?>
                    <p class="alert-success"><?= $succes ?></p>
                <?php } ?>
                <form class="px-5 mt-5 p-2" id="contact" action="" method="POST">
                    <h1 class="text-white">Contactez-nous</h1>
                    <div class="row">
                        <div class="col-12 col-md-6 space">
                            <label class="d-flex inline text-white">Nom*</label>
                            <input class="form-control roundedXL" type="text" name="lastname" placeholder="Votre nom">
                        </div>
                        <div class="col-12 col-md-6 space">
                            <label class="d-flex inline text-white">Prénom*</label>
                            <input class="form-control roundedXL" type="text" name="firstname" placeholder="Votre prénom">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="text-white">Email*</label>
                        <input class="form-control roundedXL" type="email" name="mail" placeholder="Votre email">
                    </div>
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <label class="d-flex inline text-white">Téléphone*</label>
                            <input class="form-control roundedXL" type="tel" name="phone" value="" placeholder="Votre téléphone">
                        </div>
                        <div class="col-12 col-md-6">
                            <label class="d-flex inline text-white">Code Postal*</label>
                            <input class="form-control roundedXL" type="number" name="zipCode" placeholder="Votre code postal">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <label class="text-white">Message*</label>
                            <div>
                                <textarea class="form-control roundedXL" name="message" rows="3"  placeholder="Votre message"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="submit text-center">
                        <input type="submit" name="bouton" class="btn-outline-primary mt-3 " value="Envoyer">
                    </div>
                    <small>* Obligatoire</small>
                    <div class="g-recaptcha" data-sitekey="6LdEmLAUAAAAANDJ_ozLUJR4hdsYV38EQ4MUcsaI"></div>

                </form>
            <!-- Fin du formulaire -->
        </div>
        <div class="col-12">
            <iframe  class="col-md-12" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d10281.618287812718!2d2.3076044!3d49.8912074!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x32e5f680a98defa2!2sL&#39;ESCALE!5e0!3m2!1sfr!2sfr!4v1561845478451!5m2!1sfr!2sfr" width="800" height="600" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
    </div>
</section>
<script type="text/javascript">
    function onReCaptchaValid(token) {
        document.getElementById('contact').submit();
    }
</script>
<script src="https://www.google.com/recaptcha/api.js" async defer></script>

<?php
include '../views/footer.php';
?>