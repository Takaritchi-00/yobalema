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
                    <li class="nav-item "><a class="nav-link me-lg-3" href="#">Mes Locations</a></li>
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
    <br><br><br><br><br>
    <div class="container-fluid py-5">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Liste Locations') }}
                            </span>


                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                    <div class="alert alert-success">
                        <p>{{ $message }}</p>
                    </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        <th>Véhicule</th>
                                        <th>Chauffeur</th>
                                        <th>Lieu de Départ</th>
                                        <th>Lieu d'Arrivé</th>
                                        <th>Heure de début</th>
                                        <th>Heure de fin</th>
                                        <th>Paiement</th>
                                        <th>Action</th>                                 
                                    </tr>
                                </thead>
                                @foreach($location as $loc)
                                @if($loc->user_id == Auth::id())
                                <tbody>

                                    <tr>

                                        <td>{{$loc->id}}</td>

                                        <td><img src="/images/{{$loc->vehicule->photo}}" alt="" width="100"></td>
                                        <td>{{$loc->vehicule->chauffeur->nom}} {{$loc->vehicule->chauffeur->prenom}}</td>
                                        <td>{{$loc->lieu_d}}</td>
                                        <td>{{$loc->lieu_a}}</td>
                                        <td>{{$loc->heure_debut}}</td>
                                        <td>{{$loc->heure_fin}}</td>
                                        <td>{{$loc->payer}}</td>
                                        <td>
                                            @if($loc->payer == 'En Cours')
                                            <a class="btn btn-sm btn-success" href="{{route('paiement',$loc->id)}}"><i class="fa fa-fw fa-edit"></i> {{ __('Payer') }}</a>
                                            @else
                                            <a class="btn btn-sm btn-info" href="#"><i class="fa fa-fw fa-edit"></i> {{ __('Régler') }}</a>
                                            @endif
                                        </td>
                                    </tr>


                                </tbody>
                                @endif
                                @endforeach
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Call to action section-->

    <!-- App badge section-->
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