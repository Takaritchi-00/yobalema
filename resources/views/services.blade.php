<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Yobalema</title>
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Google fonts-->
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Newsreader:ital,wght@0,600;1,600&amp;display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Mulish:ital,wght@0,300;0,500;0,600;0,700;1,300;1,500;1,600;1,700&amp;display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,400;1,400&amp;display=swap" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles2.css" rel="stylesheet" />
</head>

<body id="page-top">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top shadow-sm" id="mainNav">
        <div class="container px-5">
            <a class="navbar-brand fw-bold" href="clients">
                <img src="../images/logos/yob2.png" width="180" alt="" />
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="bi-list"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto me-4 my-3 my-lg-0">
                    <li class="nav-item"><a class="nav-link me-lg-3" href="{{route('menu')}}">Acceuil</a></li>
                    <li class="nav-item"><a class="nav-link me-lg-3" href="{{route('services')}}">Services</a></li>
                    <li class="nav-item "><a class="nav-link me-lg-3" href="{{route('liste')}}">Mes Locations</a></li>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf

                        <x-dropdown-link :href="route('logout')" onclick="event.preventDefault();
                                                this.closest('form').submit();">
                            {{ __('Déconnexion') }}
                        </x-dropdown-link>
                    </form>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Mashead header-->
    <div class="container py-3">
        <header>
            <div class="d-flex flex-column flex-md-row align-items-center pb-3 mb-4 border-bottom">
                <a href="/" class="d-flex align-items-center link-body-emphasis text-decoration-none">
                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="32" class="me-2" viewBox="0 0 118 94" role="img">
                        <title>Bootstrap</title>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M24.509 0c-6.733 0-11.715 5.893-11.492 12.284.214 6.14-.064 14.092-2.066 20.577C8.943 39.365 5.547 43.485 0 44.014v5.972c5.547.529 8.943 4.649 10.951 11.153 2.002 6.485 2.28 14.437 2.066 20.577C12.794 88.106 17.776 94 24.51 94H93.5c6.733 0 11.714-5.893 11.491-12.284-.214-6.14.064-14.092 2.066-20.577 2.009-6.504 5.396-10.624 10.943-11.153v-5.972c-5.547-.529-8.934-4.649-10.943-11.153-2.002-6.484-2.28-14.437-2.066-20.577C105.214 5.894 100.233 0 93.5 0H24.508zM80 57.863C80 66.663 73.436 72 62.543 72H44a2 2 0 01-2-2V24a2 2 0 012-2h18.437c9.083 0 15.044 4.92 15.044 12.474 0 5.302-4.01 10.049-9.119 10.88v.277C75.317 46.394 80 51.21 80 57.863zM60.521 28.34H49.948v14.934h8.905c6.884 0 10.68-2.772 10.68-7.727 0-4.643-3.264-7.207-9.012-7.207zM49.948 49.2v16.458H60.91c7.167 0 10.964-2.876 10.964-8.281 0-5.406-3.903-8.178-11.425-8.178H49.948z" fill="currentColor"></path>
                    </svg>

                </a>

            </div> <br><br><br><br>
            <h1 class="my-0 fw-normal text-primary text-center">Les Services</h1>
            <hr style="color: blue; height: 4px; font-weight: bold;">
        </header>

        <main>
            <h2 class="my-0 fw-normal text-primary text-center">Les Voitures avec Chauffeur</h2>
        
            <div class="row row-cols-1 row-cols-md-3 mb-3 text-center">
                @foreach($vehicules as $vehicule)
                @if($vehicule->type == "B")
                @if($vehicule->status == "Disponible" || $vehicule->chauffeur_id == "null")
                <div class="col mb-4">
                    <div class="card rounded-3 shadow-sm">
                        <div class="card-header py-3">
                            <h4 class="my-0 fw-normal">{{$vehicule->marque}}</h4>
                        </div>
                        <div class="card-body">
                            <div class="view overlay">
                                <img class="card-img-top" src="/images/{{$vehicule->photo}}" alt="Card image cap">
                                <a href="#!">
                                    <div class="mask rgba-white-slight"></div>
                                </a>
                            </div>
                            <ul class="list-unstyled mt-3 mb-4">
                                <li>Matricule : {{$vehicule->matricule}}</li>
                                <li>Status : {{$vehicule->status}}</li>
                                <li>Date achat : {{$vehicule->date_achat}}</li>
                                <li>Kilomètres parcourus : {{$vehicule->kilometres}}</li>
                            </ul>
                            <a href="{{route('details',$vehicule->id)}}" class="w-100 btn btn-lg btn-outline-primary">Louer Service</a>
                        </div>
                    </div>
                </div>
                @endif
                @endif
                @endforeach
            </div>


            <h2 class="my-0 fw-normal text-primary text-center">Tiak Tiak</h2>
        
            <div class="row row-cols-1 row-cols-md-3 mb-3 text-center">
                @foreach($vehicules as $vehicule)
                @if($vehicule->type == "A")
                @if($vehicule->status == "Disponible" || $vehicule->chauffeur_id == "null")
                <div class="col mb-4">
                    <div class="card rounded-3 shadow-sm">
                        <div class="card-header py-3">
                            <h4 class="my-0 fw-normal">{{$vehicule->marque}}</h4>
                        </div>
                        <div class="card-body">
                            <div class="view overlay">
                                <img class="card-img-top" src="/images/{{$vehicule->photo}}" alt="Card image cap">
                                <a href="#!">
                                    <div class="mask rgba-white-slight"></div>
                                </a>
                            </div>
                            <ul class="list-unstyled mt-3 mb-4">
                                <li>Matricule : {{$vehicule->matricule}}</li>
                                <li>Status : {{$vehicule->status}}</li>
                                <li>Date achat : {{$vehicule->date_achat}}</li>
                                <li>Kilomètres parcourus : {{$vehicule->kilometres}}</li>
                            </ul>
                            <a href="{{route('details',$vehicule->id)}}" class="w-100 btn btn-lg btn-outline-primary">Louer Service</a>
                        </div>
                    </div>
                </div>
                @endif
                @endif
                @endforeach
            </div>

            <h2 class="my-0 fw-normal text-primary text-center">Les Camions</h2>
        
            <div class="row row-cols-1 row-cols-md-3 mb-3 text-center">
                @foreach($vehicules as $vehicule)
                @if($vehicule->type == "C")
                @if($vehicule->status == "Disponible" || $vehicule->chauffeur_id == "null")
                <div class="col mb-4">
                    <div class="card rounded-3 shadow-sm">
                        <div class="card-header py-3">
                            <h4 class="my-0 fw-normal">{{$vehicule->marque}}</h4>
                        </div>
                        <div class="card-body">
                            <div class="view overlay">
                                <img class="card-img-top" src="/images/{{$vehicule->photo}}" alt="Card image cap">
                                <a href="#!">
                                    <div class="mask rgba-white-slight"></div>
                                </a>
                            </div>
                            <ul class="list-unstyled mt-3 mb-4">
                                <li>Matricule : {{$vehicule->matricule}}</li>
                                <li>Status : {{$vehicule->status}}</li>
                                <li>Date achat : {{$vehicule->date_achat}}</li>
                                <li>Kilomètres parcourus : {{$vehicule->kilometres}}</li>
                            </ul>
                            <a href="{{route('details',$vehicule->id)}}" class="w-100 btn btn-lg btn-outline-primary">Louer Service</a>
                        </div>
                    </div>
                </div>
                @endif
                @endif
                @endforeach
            </div>

            <h2 class="my-0 fw-normal text-primary text-center">Les Mini Bus</h2>
        
            <div class="row row-cols-1 row-cols-md-3 mb-3 text-center">
                @foreach($vehicules as $vehicule)
                @if($vehicule->type == "D")
                @if($vehicule->status == "Disponible" || $vehicule->chauffeur_id == "null")
                <div class="col mb-4">
                    <div class="card rounded-3 shadow-sm">
                        <div class="card-header py-3">
                            <h4 class="my-0 fw-normal">{{$vehicule->marque}}</h4>
                        </div>
                        <div class="card-body">
                            <div class="view overlay">
                                <img class="card-img-top" src="/images/{{$vehicule->photo}}" alt="Card image cap">
                                <a href="#!">
                                    <div class="mask rgba-white-slight"></div>
                                </a>
                            </div>
                            <ul class="list-unstyled mt-3 mb-4">
                                <li>Matricule : {{$vehicule->matricule}}</li>
                                <li>Status : {{$vehicule->status}}</li>
                                <li>Date achat : {{$vehicule->date_achat}}</li>
                                <li>Kilomètres parcourus : {{$vehicule->kilometres}}</li>
                            </ul>
                            <a href="{{route('details',$vehicule->id)}}" class="w-100 btn btn-lg btn-outline-primary">Louer Service</a>
                        </div>
                    </div>
                </div>
                @endif
                @endif
                @endforeach
            </div>




    </div>

    </div>
    </main>

    </div>


    <section class="bg-gradient-primary-to-secondary" id="download">
        <div class="container px-5">
            <h2 class="text-center text-white font-alt mb-4">Get the app now!</h2>
            <div class="d-flex flex-column flex-lg-row align-items-center justify-content-center">
                <a class="me-lg-3 mb-4 mb-lg-0" href="#!"><img class="app-badge" src="assets/img/google-play-badge.svg" alt="..." /></a>
                <a href="#!"><img class="app-badge" src="assets/img/app-store-badge.svg" alt="..." /></a>
            </div>
        </div>
    </section>
    <!-- Footer-->
    <footer class="bg-black text-center py-5">
        <div class="container px-5">
            <div class="text-white-50 small">
                <div class="mb-2">&copy; Yobalema 2024. All Rights Reserved.</div>
                <a href="#!">Privacy</a>
                <span class="mx-1">&middot;</span>
                <a href="#!">Terms</a>
                <span class="mx-1">&middot;</span>
                <a href="#!">FAQ</a>
            </div>
        </div>
    </footer>

    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts2.js"></script>
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <!-- * *                               SB Forms JS                               * *-->
    <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
</body>

</html>