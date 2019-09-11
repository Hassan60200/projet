<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link href="https://fonts.googleapis.com/css?family=Montserrat:500&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Oswald&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="assets/css/style.css">
        <title>L'ESCALE</title>
    </head>
    <body>
        <div class="container-fluid">
            <nav id="navbar" class="fond navbar navbar-expand-lg navbar-light sticky-top">
                <a href="index.php" class="logo nav-link">L'ESCALE</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a href="../views/menu.php" class="text-white btn nav-link">Cartes & Menus</a>
                        </li>
                        <li class="nav-item">
                            <a href="../views/book.php" class="text-white btn nav-link">Réservation</a>
                        </li>
                        <li class="nav-item">
                            <a href="../views/pictures.php" class="text-white btn nav-link">Gallerie</a>
                        </li>
                        <li class="nav-item">
                            <a href="../views/contact.php" class="text-white btn nav-link">Où sommes-nous</a>
                        </li>
                    </ul>
                </div>
            </nav>
            <div class="header">
                <div class="info">
                    <h1 class="title">L'ESCALE</h1>
                    <h3>Restaurant & brasserie</h3>
                    <i class="fas fa-hamburger"></i>
                    <i class="fas fa-fish"></i>
                    <i class="fas fa-cocktail"></i>
                    <i class="fas fa-mug-hot"></i>
                </div>
            </div>
        </div>
        <section class="content" id="#about">
            <h1 class="text-center text-white">À propos</h1>
            <div class="row mt-3">
                <div class="col-md-8">
                    <i class="fab fa-cc-visa"></i>

                    <p class="jumbotron">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    <div class=" ml-3 text-center text-white"><h4>Horaires</h4>
                        <table class="table table-bordered table-dark">
                            <thead class="text-center">
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
                <div class="col-md-4 text-center">
                    <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FBrasserie-LEscale-901475730243678&tabs=timeline&width=340&height=500&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="340" height="500" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
                </div>
            </div>
        </section>
        <footer>
            <div class="footer">
                <div id="button"></div>
                <div id="container">
                    <div id="cont">
                        <div class="footer_center row py-3">
                            <div class="col-12">
                                <div class="row">
                                    <a class="col-12 col-md-3 mt-2 text-center" href="https://www.facebook.com/Brasserie-LEscale-901475730243678" title="Facebook">Facebook</a>
                                    <a class="col-12 col-md-3 nav-link text-center" href="partials/contact.php" title="Contactez-nous">Contact</a>
                                    <a class="col-12 col-md-3 nav-link text-center"href="" title="Mentions légales">Mentions légales</a>
                                    <a class="col-12 col-md-3 nav-link text-center"href="" title="Conditions générales">Conditions générales</a>
                                </div>
                                <p class="text-center text-white mt-1">© Copyright, L'ESCALE all rights reserved </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" ></script>
        <script src="assets/js/mains.js"></script>
    </body>
</html>
