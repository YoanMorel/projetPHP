<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="UTF-8" />
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
        <link rel="stylesheet" href="assets/css/style.css">
        <link href="https://fonts.googleapis.com/css?family=Ubuntu&display=swap" rel="stylesheet"> 
        <title>Ocordo Travaux</title>
    </head>
    <body id="bod">

        <!-- MENU -->
        <nav class="navbar navbar-expand-md navbar-dark navbar-custom p-0 sticky-top">

            <img src="assets/img/logo-ocordo-travaux.png" class="logo"/>
            <button class="navbar-toggler mr-3" type="button" data-toggle="collapse" data-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
            <div class="collapse navbar-collapse" id="navbarContent">
                <ul class="navbar-nav mr-auto" id="navbarLink">

                    <li class="nav-item"> <a class="nav-link" href="0.html">Acceuil</a></li>
                    <li class="nav-item"> <a class="nav-link" href="1.html">Qui sommes nous?</a></li>
                    <li class="nav-item"> <a class="nav-link" href="2.html">Avis clients</a></li>
                    <li class="nav-item"> <a class="nav-link" href="3.html">Contact</a></li>
                </ul>
            </div>
        </nav>
        <div class="container">
            <?php include ('assets/partials/page.php') ?>
        </div>





        <!-- Footer -->
        <footer class="main-footer">

            <!--Footer Links-->
            <div class="container mt-5 mb-4 text-center text-md-left">
                <div class="row mt-3">

                    <!--First column-->
                    <div class="col-md-3 col-lg-6 mx-auto mb-4">
                        <h6 class="footer-title mt-4">À propos</h6>
                        <hr class="footerHR mb-4 mt-0 d-inline-block mx-auto" />
                        <p class="pFooter">Ocordo est une agence spécialisée dans l’externalisation du service commercial d’entreprises locales du bâtiment spécialisées dans les travaux de rénovation et de construction d’extensions. Ocordo n’assure pas la maîtrise d’oeuvre de vos travaux. Nous avons l’expérience commerciale de plus de 3.000 projets de rénovations de maisons, rénovations d’appartements, rénovations énergétiques et de constructions d’extensions de maisons.</p>
                    </div>


                    <!--Second column-->
                    <div class="col-md-3 col-lg-2 mx-auto mb-4">
                        <h6 class="footer-title mt-4">Législation</h6>
                        <hr class="footerHR mb-4 mt-0 d-inline-block mx-auto" />
                        <li class="footer-legis"><a class="footerText" href="#!">Mentions Légales</a></li>
                        <li class="footer-legis"><a class="footerText" href="#!">Politique de Confidentialité</a></li>
                        <li class="footer-legis"><a class="footerText" href="#!">Déclarer un effet indésirable</a></li>
                    </div>


                    <!--Third column-->
                    <div class="col-md-4 col-lg-2 mx-auto mb-4">
                        <h6 class="footer-title mt-4">Autres Informations</h6>
                        <hr class="footerHR mb-4 mt-0 d-inline-block mx-auto" />
                        <p class="footer-info><i class="fas fa-home  mr-3"></i> 1 rue Dombasle, Le Havre</p>
                        <p class="footer-info><i class="fas fa-envelope mr-3"></i> ocordo@renovation.com</p>
                        <p class="footer-info><i class="fas fa-phone mr-3"></i> + 33 76 78 88</p>
                        <p class="footer-info><i class="fas fa-print mr-3"></i> + 33 76 79 89</p>
                    </div>

                </div>
            </div>


            <!-- Copyright -->
            <div class="footer-copyright text-center py-3 bg-dark">© 2019 Copyright : Yoan, Dorian & Yoan
            </div>

        </footer>




        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
</html>