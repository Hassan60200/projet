<?php
include '../views/header.php';
include_once '../controllers/menuController.php';
;
?>
<div class="container-fluid main">
    <section>

        <div id="rm-container" class="rm-container mt-5">

            <div class="rm-wrapper">

                <div class="rm-cover">

                    <div class="rm-front">
                        <div class="rm-content">

                            <div class="rm-logo"></div>
                            <h2>L'ESCALE</h2>
                            <h3>Restaurant et Brasserie</h3>

                            <a href="" class="rm-button-open text-danger">OUVRIR</a>
                            <div class="rm-info">
                                <strong>L'ESCALE</strong><br>
                                33 Place Alphonse Fiquet, 80000 Amiens.<br>
                                03 75 50 29 68<br>
                            </div>

                        </div><!-- /rm-content -->
                    </div><!-- /rm-front -->

                    <div class="rm-back">
                        <div class="rm-content">
                            <h1>Entrée </h1>
                            <?php foreach ($displayMenu as $display) {
                                ?>
                                <p><?= $display->title ?>, <?= $display->price ?>€</p>
                                <?php
                            }
                            ?>
                        </div><!-- /rm-content -->
                        <div class="rm-overlay"></div>

                    </div><!-- /rm-back -->

                </div><!-- /rm-cover -->

                <div class="rm-middle">
                    <div class="rm-inner">
                        <div class="rm-content">
                            <h1>Plat</h1>

                        </div><!-- /rm-content -->
                        <div class="rm-overlay"></div>
                    </div><!-- /rm-inner -->
                </div><!-- /rm-middle -->

                <div class="rm-right">

                    <div class="rm-front">
                    </div>

                    <div class="rm-back">
                        <span class="rm-close">Fermer</span>
                        <div class="rm-content">
                            <h1>Déssert </h1>
                            
                            
                            
                            <h1>Boisson </h1>
                        </div><!-- /rm-content -->
                    </div><!-- /rm-back -->
                </div><!-- /rm-right -->
            </div><!-- /rm-wrapper -->
        </div><!-- /rm-container -->
    </section>
</div>

<?php
include 'footer.php';
?>
