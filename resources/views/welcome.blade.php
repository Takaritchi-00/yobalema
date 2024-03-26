
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Yobalema</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" type="text/css" />
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles1.css" rel="stylesheet" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body>
        <!-- Navigation-->
        <nav class="navbar navbar-light bg-light static-top">
            <div class="container">
                <!--<a class="navbar-brand" href="{{ url('/home') }}">Start Bootstrap</a>-->
                <a class="navbar-brand" href="{{ url('/home') }}">
                <img src="images/yob2.png" alt="Start Bootstrap"></a>
                <div class="d-flex align-items-center justify-content-end" style="flex: 1;"> 
                <a class="btn btn-primary" href="{{ route('register') }}">S'inscrire</a> 
                <a class="btn btn-primary ms-4" href="{{ route('login') }}">Se Connecter</a> </div> 
            </div>
            
        </nav>
        <!-- Masthead-->
        <header class="masthead">
            <div class="container position-relative">
                <div class="row justify-content-center">
                    <div class="col-xl-6">
                        <div class="text-center text-white">
                            <!-- Page heading-->
                            <h2 class="mb-5">Yobalema <br> Votre site de location pour tout service véhiculé en ligne!</h2>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Icons Grid-->
       
        <!-- Image Showcases-->
        <section class="showcase">
            <div class="container-fluid p-0">
                <div class="row g-0">
                    <div class="col-lg-6 order-lg-2 text-white showcase-img" style="background-image: url('images/chauffeur.jpeg')"></div>
                    <div class="col-lg-6 order-lg-1 my-auto showcase-text"> 
                        <h2>Conduire ne devrez plus être pénible !</h2>
                        <p class="lead mb-0">Bénéficiez d'un service personnalisé, d'une ponctualité irréprochable et d'un confort optimal à chaque trajet. Réservez dès maintenant votre véhicule avec chauffeur et découvrez le luxe de voyager en toute tranquillité avec YOBALEMA. </p>
                    </div>
                </div>
                <div class="row g-0">
                    <div class="col-lg-6 text-white showcase-img" style="background-image: url('images/moto.jpg')"></div>
                    <div class="col-lg-6 my-auto showcase-text">
                        <h2>Tiak Tiak Yobalema !</h2>
                        <p class="lead mb-0"> Nos livreurs professionnels et expérimentés naviguent habilement à travers les rues du Sénégal pour garantir une livraison en temps et en heure, où que vous soyez.</p>
                    </div>
                </div>
                <div class="row g-0">
                    <div class="col-lg-6 order-lg-2 text-white showcase-img" style="background-image: url('images/camion2.jpeg')"></div>
                    <div class="col-lg-6 order-lg-1 my-auto showcase-text">
                        <h2>Besoin d'un Camion ?</h2>
                        <p class="lead mb-0"> Que ce soit pour des marchandises volumineuses, des équipements lourds ou des déménagements, notre équipe dédiée assure une livraison sécurisée et ponctuelle à travers tout le Sénégal. Faites confiance à YOBALEMA pour transporter vos biens en toute tranquillité.</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- Testimonials-->
       
        <!-- Call to Action-->
        <section class="call-to-action text-white text-center" id="signup">
            <div class="container position-relative">
                <div class="row justify-content-center">
                    <div class="col-xl-6">
                        <h3 class="mb-4">Besoin d'un de nos services? Faites une location maintenant!</h3>
                        
                        
                                <div class="col-auto"><button class="btn btn-primary btn-lg" id="submitButton" type="submit">Louer</button></div>
                           
                    </div>
                </div>
            </div>
        </section>
        <!-- Footer-->
        <footer class="footer bg-light">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 h-100 text-center text-lg-start my-auto">
                        <ul class="list-inline mb-2">
                            <li class="list-inline-item"><a href="#!">About</a></li>
                            <li class="list-inline-item">⋅</li>
                            <li class="list-inline-item"><a href="#!">Contact</a></li>
                            <li class="list-inline-item">⋅</li>
                            <li class="list-inline-item"><a href="#!">Terms of Use</a></li>
                            <li class="list-inline-item">⋅</li>
                            <li class="list-inline-item"><a href="#!">Privacy Policy</a></li>
                        </ul>
                        <p class="text-muted small mb-4 mb-lg-0">&copy; Yobalema 2024. All Rights Reserved.</p>
                    </div>
                    <div class="col-lg-6 h-100 text-center text-lg-end my-auto">
                        <ul class="list-inline mb-0">
                            <li class="list-inline-item me-4">
                                <a href="#!"><i class="bi-facebook fs-3"></i></a>
                            </li>
                            <li class="list-inline-item me-4">
                                <a href="#!"><i class="bi-twitter fs-3"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#!"><i class="bi-instagram fs-3"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    </body>
</html>
