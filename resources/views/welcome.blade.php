<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Kime Arwud</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/favicon.png') }}" />

    <!-- Plugin CSS -->
    <link rel="stylesheet" href="{{ asset('vendors/jquery-ui/jquery-ui.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('vendors/swiper/swiper-bundle.min.css') }}" />

    <!-- Theme CSS -->
    <link rel="stylesheet" href="{{ asset('disk/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('disk/css/global.css') }}">
  </head>
  <body class="page__homepage">
    <nav class="navbar navbar-expand-xl bg-ghost-white">
      <div class="container justify-content-md-start">
        <a class="navbar-brand" href="#">
          <img src="{{ asset('assets/logo.svg') }}" alt="" />
        </a>
        <!-- /.navbar-brand -->

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
          <img src="{{ asset('assets/icons/calendar.svg') }}" class="svg-inject svg-icon" alt="" />
        </button>
        <!-- /.navbar-toggler-mobile -->

        <div class="d-none d-md-flex d-xl-none ms-auto">
          <a class="btn btn-alice-blue text-dark fw-semiBold py-12 px-34 me-12 rounded-pill" href="/applicationform.html" role="button">Log In</a>
          <a class="btn btn-primary fw-semiBold py-12 px-43 rounded-pill" href="/applicationform.html" role="button">Sign Up</a>
        </div>
        <!-- /.btn-login and btn-signup mobile -->

        <div class="collapse navbar-collapse" id="navbarContent">
          <div class="d-grid d-xl-flex align-items-xl-center pb-15 pb-xl-0 w-100 gap-20 gap-xl-0">
            <ul class="navbar-nav mx-xl-auto order-2 order-xl-1">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/#pricing-section">About Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/eventlist.html">Portofolio</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/joblist.html">Blog</a>
              </li>
            </ul>
            <!-- /.navbar-nav -->

            <form class="order-1 order-xl-2" role="search" action="#" method="get">
              <div class="form-search">
                <input class="form-control" type="search" placeholder="Search here..." aria-label="Search" />
              </div>
            </form>
            <!-- /.form-search -->

            <div class="d-grid d-md-none d-xl-flex gap-15 gap-xl-0 order-3">
              <a class="btn btn-alice-blue text-dark fw-semiBold py-12 px-xl-34 ms-xl-12 rounded-pill" href="/applicationform.html" role="button">Log In</a>
              <a class="btn btn-primary fw-semiBold py-12 px-xl-43 ms-xl-12 rounded-pill" href="/applicationform.html" role="button">Sign Up</a>
            </div>
            <!-- /.btn-login and btn-sign-up desktop -->
          </div>
        </div>
      </div>
    </nav>
    <!-- = /. Navbar Section = -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!-- Vendors -->
    <script src="{{ asset('vendors/jquery/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('vendors/jquery-ui/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('vendors/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('vendors/fslightbox/fslightbox.js') }}"></script>
    <script src="{{ asset('vendors/svg-inject/dist/svg-inject.min.js') }}"></script>

    <!-- Template Function -->
    <script src="{{ asset('dist/js/theme.js') }}"></script>
  </body>
</html>
