<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Yobalema admin</title>
  <link rel="shortcut icon" type="image/png" href="../images/logos/yob2.png" />
  <link rel="stylesheet" href="../css/styles.min.css" />
  <script src="https://cdn.tailwindcss.com"></script>

</head>

<body>
  <!--  Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full" data-sidebar-position="fixed" data-header-position="fixed">
    <!-- Sidebar Start -->
    <aside class="left-sidebar">
      <!-- Sidebar scroll-->
      <div>
        <div class="brand-logo d-flex align-items-center justify-content-between">
          <a href="#" class="text-nowrap logo-img">
            <img src="../images/logos/yob2.png" width="180" alt="" />
          </a>
          <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
            <i class="ti ti-x fs-8"></i>
          </div>
        </div>
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
          <ul id="sidebarnav">
            <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
              <span class="hide-menu">Home</span>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="{{route('admin.dashboard')}}" aria-expanded="false">
                <span>
                  <i class="ti ti-layout-dashboard"></i>
                </span>
                <span class="hide-menu">Dashboard</span>
              </a>
            </li>
            <li class="nav-small-cap">
              <i class="ti ti-car fs-4"></i>
              <span class="hide-menu">Gestion Véhicules</span>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="{{route('vehicules.index')}}" aria-expanded="false">
                <span>
                  <i class="ti ti-list"></i>
                </span>
                <span class="hide-menu">Liste Véhicules</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="{{route('vehicules.create')}}" aria-expanded="false">
                <span>
                  <i class="ti ti-square-plus"></i>
                </span>
                <span class="hide-menu">Ajouter Véhicules</span>
              </a>
            </li>


            <li class="nav-small-cap">
              <i class="ti ti-user fs-4"></i>
              <span class="hide-menu">Gestion Chauffeurs</span>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="{{route('chauffeurs.index')}}" aria-expanded="false">
                <span>
                  <i class="ti ti-list"></i>
                </span>
                <span class="hide-menu">Liste des chauffeurs</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="{{route('chauffeurs.create')}}" aria-expanded="false">
                <span>
                  <i class="ti ti-user-plus"></i>
                </span>
                <span class="hide-menu">Ajouter Chauffeurs</span>
              </a>
            </li>
            <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
              <span class="hide-menu">Suivis</span>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="{{route('locations')}}" aria-expanded="false">
                <span>
                  <i class="ti ti-car"></i>
                </span>
                <span class="hide-menu">Locations</span>
              </a>
            </li>
          </ul>
        </nav>
        <!-- End Sidebar navigation -->
      </div>
      <!-- End Sidebar scroll-->
    </aside>
    <!--  Sidebar End -->
    <!--  Main wrapper -->
    <div class="body-wrapper">
      <!--  Header Start -->
      <header class="app-header">
        <nav class="navbar navbar-expand-lg navbar-light">
          <ul class="navbar-nav">
            <li class="nav-item d-block d-xl-none">
              <a class="nav-link sidebartoggler nav-icon-hover" id="headerCollapse" href="javascript:void(0)">
                <i class="ti ti-menu-2"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link nav-icon-hover" href="javascript:void(0)">
                <i class="ti ti-bell-ringing"></i>
                <div class="notification bg-primary rounded-circle"></div>
              </a>
            </li>
          </ul>
          <div class="navbar-collapse justify-content-end px-0" id="navbarNav">
            <ul class="navbar-nav flex-row ms-auto align-items-center justify-content-end">
              <!--<a href="https://adminmart.com/product/modernize-free-bootstrap-admin-dashboard/" target="_blank" class="btn btn-primary">Log out</a>-->

              <li class="nav-item dropdown">
                <a class="nav-link nav-icon-hover" href="javascript:void(0)" id="drop2" data-bs-toggle="dropdown" aria-expanded="false">
                  <img src="../images/profile/user-1.jpg" alt="" width="35" height="35" class="rounded-circle">
                </a>
                <div class="dropdown-menu dropdown-menu-end dropdown-menu-animate-up" aria-labelledby="drop2">
                  <div class="message-body">
                    <a href="javascript:void(0)" class="d-flex align-items-center gap-2 dropdown-item">
                      <i class="ti ti-user fs-6"></i>
                      <p class="mb-0 fs-3">My Profile</p>
                    </a>
                    <a href="javascript:void(0)" class="d-flex align-items-center gap-2 dropdown-item">
                      <i class="ti ti-mail fs-6"></i>
                      <p class="mb-0 fs-3">My Account</p>
                    </a>
                    <a href="javascript:void(0)" class="d-flex align-items-center gap-2 dropdown-item">
                      <i class="ti ti-list-check fs-6"></i>
                      <p class="mb-0 fs-3">My Task</p>
                    </a>
                    <form method="GET" action="{{ route('admin.logout') }}">
                      @csrf

                      <a href="{{route('admin.logout')}}" class="btn btn-outline-primary mx-3 mt-2 d-block" onclick="event.preventDefault();
                                                    this.closest('form').submit();">Log Out</a>
                    </form>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </nav>
      </header>
      <!--  Header End -->
      <div class="container-fluid">
        <!--  Row 1 -->
        <div class="row">
          <div class="col-lg-8 d-flex align-items-strech">
            <div class="card w-100">
              <div class="card-body">
                <div class="d-sm-flex d-block align-items-center justify-content-between mb-9">
                  <div class="mb-3 mb-sm-0">
                    <h5 class="card-title fw-semibold">Stats Véhicules</h5>
                  </div>
                </div>
                <!-- Chart -->
                <div class="flex"> 
                  <div class="w-1/2"> 
                    {!! $chart->container() !!}
                  </div>
                </div>
                {!! $chart->script() !!}
              
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="row">
              <div class="col-lg-12">

                <!-- Monthly Earnings -->
                
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-4 d-flex align-items-stretch">
            <div class="card w-100">
              <div class="card-body p-4">
                <div class="mb-4">
                  <h5 class="card-title fw-semibold">Locations Récentes</h5>
                </div>
                @foreach($location as $loc)
                <ul class="timeline-widget mb-0 position-relative mb-n5">
                  <li class="timeline-item d-flex position-relative overflow-hidden">
                    <div class="timeline-time text-dark flex-shrink-0 text-end">{{$loc->user->name}}</div>
                    <div class="timeline-badge-wrap d-flex flex-column align-items-center">
                      <span class="timeline-badge border-2 border border-primary flex-shrink-0 my-8"></span>
                      <span class="timeline-badge-border d-block flex-shrink-0"></span>
                    </div>
                    <div class="timeline-desc fs-3 text-dark mt-n1">Status paiement : {{$loc->payer}}</div>
                  </li>
                </ul>
                @endforeach
              </div>
            </div>
          </div>
          <div class="col-lg-8 d-flex align-items-stretch">
            <div class="card w-100">
              <div class="card-body p-4">
                <h5 class="card-title fw-semibold mb-4">Les Chauffeurs</h5>
                <div class="table-responsive">
                  <table class="table text-nowrap mb-0 align-middle">
                    <thead class="text-dark fs-4">
                      <tr>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">Id</h6>
                        </th>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">Nom</h6>
                        </th>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">Prénom</h6>
                        </th>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">Assigné</h6>
                        </th>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">Expériences</h6>
                        </th>
                      </tr>
                    </thead>
                    @foreach($chauffeur as $chauffeur)
                    <tbody>
                      <tr>
                        <td class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">{{$chauffeur->id}}</h6>
                        </td>
                        <td class="border-bottom-0">
                          <h6 class="fw-semibold mb-1"></h6>
                          <span class="fw-normal">{{$chauffeur->nom}}</span>
                        </td>
                        <td class="border-bottom-0">
                          <p class="mb-0 fw-normal">{{$chauffeur->prenom}}</p>
                        </td>
                        <td class="border-bottom-0">
                          <div class="d-flex align-items-center gap-2">
                            <span class="badge bg-primary rounded-3 fw-semibold">{{$chauffeur->categorie}}</span>
                          </div>
                        </td>
                        <td class="border-bottom-0">
                          <h6 class="fw-semibold mb-0 fs-4">{{$chauffeur->experiences}} ans</h6>
                        </td>
                      </tr>
                      </tr>
                    </tbody>
                    @endforeach
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
        @foreach($vehicule as $vehicule)
        <div class="row">
          <div class="col-sm-6 col-xl-3">
            <div class="card overflow-hidden rounded-2">
              <div class="position-relative">
                <a href=""> <img src="/images/{{$vehicule->photo}}" alt="" width="100"></a>
                <a href="" class="bg-primary rounded-circle p-2 text-white d-inline-flex position-absolute bottom-0 end-0 mb-n3 me-3" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Add To Cart"><i class="ti ti-basket fs-4"></i></a>
              </div>
              <div class="card-body pt-3 p-4">
                <h6 class="fw-semibold fs-4">Type : {{$vehicule->type}}</h6>
                <div class="d-flex align-items-center justify-content-between">
                  <h6 class="fw-semibold fs-4 mb-0">Marque : {{$vehicule->marque}} <span class="ms-2 fw-normal text-muted fs-3"><del>Notes</del></span></h6>
                  <ul class="list-unstyled d-flex align-items-center py-3">
                    <li><a class="me-1" href="javascript:void(0)"><i class="ti ti-star text-warning"></i></a></li>
                    <li><a class="me-1" href="javascript:void(0)"><i class="ti ti-star text-warning"></i></a></li>
                    <li><a class="me-1" href="javascript:void(0)"><i class="ti ti-star text-warning"></i></a></li>
                    <li><a class="me-1" href="javascript:void(0)"><i class="ti ti-star text-warning"></i></a></li>
                    <li><a class="" href="javascript:void(0)"><i class="ti ti-star text-warning"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
        @endforeach
        <div class="py-6 px-6 text-center">
          <p class="mb-0 fs-4">Design and Developed by <a href="#" target="_blank" class="pe-1 text-primary text-decoration-underline">The Designer</a></p>
        </div>
      </div>
    </div>
  </div>

  <script src="../libs/jquery/dist/jquery.min.js"></script>
  <script src="../libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="../js/sidebarmenu.js"></script>
  <script src="../js/app.min.js"></script>
  <script src="../libs/apexcharts/dist/apexcharts.min.js"></script>
  <script src="../libs/simplebar/dist/simplebar.js"></script>
  <script src="../js/dashboard.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js" charset="utf-8"></script>
</body>

</html>