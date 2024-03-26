<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Login Admin</title>
  <link rel="shortcut icon" type="image/png" href="../images/logos/yob2.png" />
  <link rel="stylesheet" href="../css/styles.min.css" />
</head>

<body>
  <!--  Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
    <div
      class="position-relative overflow-hidden radial-gradient min-vh-100 d-flex align-items-center justify-content-center">
      <div class="d-flex align-items-center justify-content-center w-100">
        <div class="row justify-content-center w-100">
          <div class="col-md-8 col-lg-6 col-xxl-3">
            <div class="card mb-0">
              <div class="card-body">
                <a href="/" class="text-nowrap logo-img text-center d-block py-3 w-100">
                  <img src="../images/logos/yob2.png" width="180" alt="">
                </a>
                <p class="text-center">Admin Login</p>
                @if($errors->any())
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
                @endif
                @if(Session::has('error'))
                <li>{{Session::get( 'error' )}}</li>
                @endif
                @if(Session::has('success'))
                <li>{{Session::get( 'success' )}}</li>
                @endif
                <form action="{{ route('admin.login_submit') }}" method="post">
                  @csrf
                  <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" name="email" aria-describedby="emailHelp">
                  </div>
                  <div class="mb-4">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" name="password" class="form-control">
                  </div>
                  <div class="d-flex align-items-center justify-content-between mb-4">
                    <div class="form-check">
                      <input class="form-check-input primary" type="checkbox" value="" id="flexCheckChecked" checked>
                      <label class="form-check-label text-dark" for="flexCheckChecked">
                        Remeber this Device
                      </label>
                    </div>
                    <a class="text-primary fw-bold" href="#">Forgot Password ?</a>
                  </div>
                  <button type="submit" class="btn btn-primary w-100 py-8 fs-4 mb-4 rounded-2">Se Connecter</button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="../libs/jquery/dist/jquery.min.js"></script>
  <script src="../libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>