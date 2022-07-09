<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Gestion scolaire</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Simple line icons-->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.5.5/css/simple-line-icons.min.css" rel="stylesheet" />
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href = "{{ asset('css/app.css') }}" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <a class="menu-toggle rounded" href="#"><i class="fas fa-bars"></i></a>
        <nav id="connexion" id="mainNav">
            <div class="conteneur">
                <a class="navConect" href="connexion.jsp">Connexion</a>
                <a class="navSpace" href="">   </a>
                <a class="navSign" href="Inscription.jsp">Inscription</a>
            </div>
        </nav>
        <nav id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-nav-item"><a href="#page-top">Accueil</a></li>
                <li class="sidebar-nav-item"><a href="#about">A propos</a></li>
                <li class="sidebar-nav-item"><a href="#examens">Examen</a></li>
                <li class="sidebar-nav-item"><a href="#atouts">Nos atouts</a></li>
                <li class="sidebar-nav-item"><a href="#contact">Contact</a></li>
            </ul>
        </nav>
        <!-- Header-->
        <header class="masthead d-flex align-items-center">
            <div class="container px-4 px-lg-5 text-center">
                <h1 class="mb-1">Gestion des établissement scolaire</h1>
            </div>
        </header>
        <!-- About-->
        <section class="content-section bg-light" id="about">
            <div class="container px-4 px-lg-5 text-center">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-lg-10">
                        <h2>Mot de bienvenu du chef d'établissement</h2>
                        <p class="lead mb-5">
                            Pour qu’il ait une bonne formation, le personnel doit être de qualité. Pour que tous les esprits convergent vers le même objectif, c'est-à-dire la réussite des élèves, le personnel a crée un amical. Ce regroupement permet à l’administration et aux enseignants d’avoir un cadre de convivialité pour la gestion de tous les problèmes liés à l’encadrement des élèves.  Cet amical a un règlement intérieur. (À fournir par le principal)
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <!-- Services-->
        <section class="content-section bg-primary text-white text-center" id="examens">
            <div class="container px-4 px-lg-5">
                <div class="content-section-heading">
                    <h3 class="text-secondary mb-0">Examens</h3>
                    <h2 class="mb-5">Taux de reussite aux examens officiels</h2>
                </div>
                <div class="row gx-4 gx-lg-5">
                    <div class="col-lg-3 col-md-6 mb-5 mb-lg-0">
                        <span class="service-icon rounded-circle mx-auto mb-3"><i class="fa-solid fa-percent"></i></span>
                        <h4><strong>Concours d'entrée en 6<sup>e</sup></strong></h4>
                        <p class="text-faded mb-0">Présent : 100</p>
                        <p class="text-faded mb-0">Admis : 100</p>
                        <p class="text-faded mb-0">Taux de reussite : 100% <i class="fas fa-heart"></i></p>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-5 mb-lg-0">
                        <span class="service-icon rounded-circle mx-auto mb-3"><i class="fa-solid fa-percent"></i></span>
                        <h4><strong>BEPC</strong></h4>
                        <p class="text-faded mb-0">Présent : 100</p>
                        <p class="text-faded mb-0">Admis : 100</p>
                        <p class="text-faded mb-0">Taux de reussite : 100% <i class="fas fa-heart"></i></p>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-5 mb-md-0">
                        <span class="service-icon rounded-circle mx-auto mb-3"><i class="fa-solid fa-percent"></i></span>
                        <h4><strong>PROBATOIRE</strong></h4>
                        <p class="text-faded mb-0">Présent : 100</p>
                        <p class="text-faded mb-0">Admis : 100</p>
                        <p class="text-faded mb-0">Taux de reussite : 100% <i class="fas fa-heart"></i></p>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <span class="service-icon rounded-circle mx-auto mb-3"><i class="fa-solid fa-percent"></i></span>
                        <h4><strong>BACCALAUREAT</strong></h4>
                        <p class="text-faded mb-0">Présent : 100</p>
                        <p class="text-faded mb-0">Admis : 100</p>
                        <p class="text-faded mb-0">Taux de reussite : 100% <i class="fas fa-heart"></i></p>
                    </div>
                </div>
            </div>
        </section>
        <!-- Callout-->
        <section class="callout">
            <div class="container px-4 px-lg-5 text-center">
                <h2 class="mx-auto mb-5">
                    Bienvenu dans notre établissement
                </h2>
            </div>
        </section>
        <!-- Portfolio-->
        <section class="content-section" id="atouts">
            <div class="container px-4 px-lg-5">
                <div class="content-section-heading text-center">
                    <h3 class="text-secondary mb-0">Nos atouts</h3>
                    <h2 class="mb-5">Les avantages à étudier chez nous</h2>
                </div>
                <div class="row gx-0">
                    <div class="col-lg-6">
                        <a class="portfolio-item" href="#!">
                            <div class="caption">
                                <div class="caption-content">
                                    <div class="h2">Bus pour les enfants</div>
                                    <p class="mb-0">Nous disposons des bus pour amener et ramener vos enfants en toutes sécurité</p>
                                </div>
                            </div>
                            <img class="img-fluid" src="assets/img/portfolio-1.jpg" alt="..." />
                        </a>
                    </div>
                    <div class="col-lg-6">
                        <a class="portfolio-item" href="#!">
                            <div class="caption">
                                <div class="caption-content">
                                    <div class="h2">Salle de conférence</div>
                                    <p class="mb-0">Avec une salle d'une capacité pouvant accueillir plus de 600 enfants, bien éclairé et bien aéré pour partager les connaissance à nos petits</p>
                                </div>
                            </div>
                            <img class="img-fluid" src="assets/img/portfolio-2.jpg" alt="..." />
                        </a>
                    </div>
                    <div class="col-lg-6">
                        <a class="portfolio-item" href="#!">
                            <div class="caption">
                                <div class="caption-content">
                                    <div class="h2">Une salle multimédia</div>
                                    <p class="mb-0">Avec une salle multimédia à la pointe de la technologie et très spacieuse pour permettre aux enfants de faire des recherches pour bien s'outiller</p>
                                </div>
                            </div>
                            <img class="img-fluid" src="assets/img/portfolio-3.jpg" alt="..." />
                        </a>
                    </div>
                    <div class="col-lg-6">
                        <a class="portfolio-item" href="#!">
                            <div class="caption">
                                <div class="caption-content">
                                    <div class="h2">Salle de classe</div>
                                    <p class="mb-0">Des salles de classes bien aérées</p>
                                </div>
                            </div>
                            <img class="img-fluid" src="assets/img/portfolio-4.jpg" alt="..." />
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Map-->
        <div class="map" id="contact">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5305.03385505758!2d10.065944747450319!3d5.447213487900818!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x105fb06f92a735ef%3A0xf0cae082ecf4fb56!2sUniversite%20de%20Dschang%20Campus%20A%2C%20Dschang!5e0!3m2!1sfr!2scm!4v1654694183765!5m2!1sfr!2scm" width="800" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            <br />
            <small><a href="https://goo.gl/maps/SLnPSQkpCzg1RCzD7"></a></small>
        </div>
        <!-- Footer-->
        <footer class="footer text-center">
            <div class="container px-4 px-lg-5">
                <ul class="list-inline mb-5">
                    <li class="list-inline-item">
                        <a class="social-link rounded-circle text-white mr-3" href="#!"><i class="icon-social-facebook"></i></a>
                    </li>
                    <li class="list-inline-item">
                        <a class="social-link rounded-circle text-white mr-3" href="#!"><i class="icon-social-twitter"></i></a>
                    </li>
                    <li class="list-inline-item">
                        <a class="social-link rounded-circle text-white" href="#!"><i class="icon-social-github"></i></a>
                    </li>
                </ul>
                <p class="text-muted small mb-0">Copyright &copy; Projet de Java EE 2022</p>
            </div>
        </footer>
        <!-- Scroll to Top Button-->
        <a class="scroll-to-top rounded" href="#page-top"><i class="fas fa-angle-up"></i></a>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
