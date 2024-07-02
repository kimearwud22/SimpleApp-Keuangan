<!-- memanggil data helper -->
@php
    $sitename= getSetting('_site_name');
    $github= getSetting('_github');
    $instagram= getSetting('_instagram');
    $likedin= getSetting('_likedin');
    $banner= getSections('_banner');
    $logo= getSections('_logo');
    $portofolio = getPortofolio();
@endphp
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- ========== Meta Tags ========== -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Appku - Software Landing Page">

    <!-- ========== Page Title ========== -->
    <title>{{$sitename}} - Portofolio</title>

    <!-- ========== Favicon Icon ========== -->
    <link rel="shortcut icon" href="assets/img/favicon.png" type="image/x-icon">

    <!-- ========== Start Stylesheet ========== -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assets/css/font-awesome.min.css" rel="stylesheet" />
    <link href="assets/css/themify-icons.css" rel="stylesheet" />
    <link href="assets/css/elegant-icons.css" rel="stylesheet" />
    <link href="assets/css/flaticon-set.css" rel="stylesheet" />
    <link href="assets/css/magnific-popup.css" rel="stylesheet" />
    <link href="assets/css/owl.carousel.min.css" rel="stylesheet" />
    <link href="assets/css/owl.theme.default.min.css" rel="stylesheet" />
    <link href="assets/css/animate.css" rel="stylesheet" />
    <link href="assets/css/validnavs.css" rel="stylesheet" />
    <link href="assets/css/helper.css" rel="stylesheet" />
    <link href="assets/css/style.css" rel="stylesheet" />
    <link href="style.css" rel="stylesheet">
    <link href="assets/css/responsive.css" rel="stylesheet" />
    <!-- ========== End Stylesheet ========== -->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="assets/js/html5/html5shiv.min.js"></script>
      <script src="assets/js/html5/respond.min.js"></script>
    <![endif]-->

</head>

<body>

  <!-- Preloader Start -->
    <div class="se-pre-con"></div>
    <!-- Preloader Ends -->

    <!-- Header 
    ============================================= -->
    <header>
        <!-- Start Navigation -->
        <nav class="navbar mobile-sidenav attr-border navbar-sticky navbar-default validnavs navbar-fixed dark no-background">


            <div class="container d-flex justify-content-between align-items-center">            

                <!-- Start Header Navigation -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                        <i class="fa fa-bars"></i>
                    </button>
                    <a class="navbar-brand" href="index.html">
                        <img src={{ Storage::url($logo->image)}} class="logo" alt="Logo">
                    </a>
                </div>
                <!-- End Header Navigation -->

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="navbar-menu">

                    <img src="assets/img/logo.png" alt="Logo">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                        <i class="fa fa-times"></i>
                    </button>
                    
                    <ul class="nav navbar-nav navbar-right" data-in="fadeInDown" data-out="fadeOutUp">
                        <li class="dropdown">
                            <a href="#" class=" active" data-toggle="dropdown" >Home</a>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="" data-toggle="dropdown" >About Us</a>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="" data-toggle="dropdown" >Projects</a>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" >Services</a>
                            <ul class="dropdown-menu">
                                <li><a href="services.html">Services</a></li>
                                <li><a href="services-details.html">Services Details</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="" data-toggle="dropdown" >Blog</a>
                        </li>
                    </ul>
                </div><!-- /.navbar-collapse -->

                <div class="attr-right">
                    <!-- Start Atribute Navigation -->
                    <div class="attr-nav">
                        <ul>
                            <li class="button"><a href="contact.html">Login</a></li>
                        </ul>
                    </div>
                    <!-- End Atribute Navigation -->
                </div>

                <!-- Main Nav -->
            </div>   
            <!-- Overlay screen for menu -->
            <div class="overlay-screen"></div>
            <!-- End Overlay screen for menu -->
        </nav>
        <!-- End Navigation -->
    </header>
    <!-- End Header -->

   <!-- Start Banner 
    ============================================= -->
    <div class="banner-area auto-height bg-fixed banner-style-four text-default" style="background-image: url(assets/img/shape/1.jpg);">
        <div class="shape-bottom" style="background-image: url(assets/img/shape/44.png);"></div>
        <div class="container">
            <div class="double-items">
                <div class="row align-center">

                    <div class="col-lg-6 info">
                        <h4 class="wow fadeInRight"><strong># Proggrammer </strong> Buat Aplikasimu Lebih Hebat</h4>
                        <h2 class="wow fadeInLeft" data-wow-defaul="300ms">Welcome to My Website </h2>
                        <p class="wow fadeInLeft" data-wow-delay="500ms">
                            Ini adalah portofolio kime sebagai full-stack developer yang berpengalaman lebih dari 3 tahun.
                        </p>
                        <a class="btn btn-md circle btn-gradient effect wow fadeInUp" data-wow-delay="700ms" href="#">Selengkapnya <i class="fas fa-angle-right"></i></a>
                    </div>

                     <div class="col-lg-6 thumb wow fadeInRight" data-wow-delay="900ms">
                        <img src={{Storage::url($banner->image)}} alt="Thumb">
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
    <!-- End Banner -->

    <!-- Start Features
    ============================================= -->
    <div class="features-style-four-area text-center default-padding bottom-less">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="site-heading text-center">
                        <h2>{{ $sitename }}</h2>
                        <div class="devider"></div>
                        <p>
                            Outlived no dwelling denoting in peculiar as he believed. Behaviour excellent middleton be as it curiosity departure ourselves very extreme future. 
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <!-- Signle item -->
                 @foreach($portofolio as $item)
                <div class="features-style-four col-lg-4 col-md-6">
                    <div class="feature-style-four-item">
                        <div class="icon">
                            <img src={{ Storage::url($item->image)}} alt="Icon">
                        </div>
                        <div class="info">
                            <h4>{{ $item->title }}</h4>
                            <p>
                                {{ $item->description }}
                            </p>
                        </div>
                        <button class="btn btn-md circle btn-gradient effect mt-2" > <a href="{{ $item->link }}">Selengkapnya <i class="fas fa-angle-right"></i></a></button>
                    </div>
                </div>
                @endforeach
                <!-- End Signle item -->
                <!-- Signle item -->
                <div class="features-style-four col-lg-4 col-md-6">
                    <div class="feature-style-four-item">
                        <div class="icon">
                            <img src="assets/img/icon/app/2.png" alt="Icon">
                        </div>
                        <div class="info">
                            <h4>Easy to Edit</h4>
                            <p>
                                Everything melancholy uncommonly but excellence an to impression. ladies she basket season age her uneasy saw.
                            </p>
                        </div>
                    </div>
                </div>
                <!-- End Signle item -->
                <!-- Signle item -->
                <div class="features-style-four col-lg-4 col-md-6">
                    <div class="feature-style-four-item">
                        <div class="icon">
                            <img src="assets/img/icon/app/3.png" alt="Icon">
                        </div>
                        <div class="info">
                            <h4>Design & Branding</h4>
                            <p>
                                Everything melancholy uncommonly but excellence an to impression. ladies she basket season age her uneasy saw.
                            </p>
                        </div>
                    </div>
                </div>
                <!-- End Signle item -->
            </div>
        </div>
    </div>
    <!-- End Features -->

    <!-- Start Footer 
    ============================================= -->
    <footer class="bg-dark text-light">
        <!-- <div class="container">
            <div class="f-items default-padding">
                <div class="row">
                    <div class="col-lg-4 col-md-6 item">
                        <div class="f-item about">
                            <img src="assets/img/logo-light.png" alt="Logo">
                            <p>
                                Excellence decisively nay man yet impression for contrasted remarkably. There spoke happy for you are out. Fertile how old address did showing.
                            </p>
                            <form action="#">
                                <input type="email" placeholder="Your Email" class="form-control" name="email">
                                <button type="submit"> <i class="arrow_right"></i></button>  
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6 item">
                        <div class="f-item link">
                            <h4 class="widget-title">Quick LInk</h4>
                            <ul>
                                <li>
                                    <a href="index.html"><i class="fas fa-angle-right"></i> Home</a>
                                </li>
                                <li>
                                    <a href="about-us.html"><i class="fas fa-angle-right"></i> About us</a>
                                </li>
                                <li>
                                    <a href="about-us.html"><i class="fas fa-angle-right"></i> Compnay History</a>
                                </li>
                                <li>
                                    <a href="services.html"><i class="fas fa-angle-right"></i> Features</a>
                                </li>
                                <li>
                                    <a href="blog-with-sidebar.html"><i class="fas fa-angle-right"></i> Blog Page</a>
                                </li>
                                <li>
                                    <a href="about-us.html"><i class="fas fa-angle-right"></i> Login</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 item">
                        <div class="f-item link">
                            <h4 class="widget-title">Community</h4>
                            <ul>
                                <li>
                                    <a href="services-details.html"><i class="fas fa-angle-right"></i> Career</a>
                                </li>
                                <li>
                                    <a href="services-details.html"><i class="fas fa-angle-right"></i> Leadership</a>
                                </li>
                                <li>
                                    <a href="services-details.html"><i class="fas fa-angle-right"></i> Strategy</a>
                                </li>
                                <li>
                                    <a href="services.html"><i class="fas fa-angle-right"></i> Services</a>
                                </li>
                                <li>
                                    <a href="about-us.html"><i class="fas fa-angle-right"></i> History</a>
                                </li>
                                <li>
                                    <a href="services-details.html"><i class="fas fa-angle-right"></i> Components</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 item">
                        <div class="f-item contact-widget">
                            <h4 class="widget-title">Contact Info</h4>
                            <div class="address">
                                <ul>
                                    <li>
                                        <div class="icon">
                                            <i class="fas fa-home"></i>
                                        </div>
                                        <div class="content">
                                            <strong>Address:</strong>
                                            5919 Trussville Crossings Pkwy, Birmingham
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <i class="fas fa-envelope"></i>
                                        </div>
                                        <div class="content">
                                            <strong>Email:</strong>
                                            <a href="mailto:info@validtheme.com">info@validtheme.com</a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <i class="fas fa-phone"></i>
                                        </div>
                                        <div class="content">
                                            <strong>Phone:</strong>
                                            <a href="tel:2151234567">+123 34598768</a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- Start Footer Bottom -->
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <p>&copy; Copyright 2024.  <a href="https://www.linkedin.com/in/moh-nur-hakim-450ba925b/">{{ $sitename }}</a></p>
                    </div>
                    <div class="col-lg-6 text-end link">
                        <ul>
                            <li>
                                <a href="{{$github}}">Github</a>
                            </li>
                            <li>
                                <a href="{{$instagram}} " >Instagram</a>
                            </li>
                            <li>
                                <a href="{{$likedin}}">LikedIn</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Footer Bottom -->
    </footer>
    <!-- End Footer -->
    
    <!-- jQuery Frameworks
    ============================================= -->
    <script src="assets/js/jquery-3.6.0.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/jquery.appear.js"></script>
    <script src="assets/js/jquery.easing.min.js"></script>
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <script src="assets/js/modernizr.custom.13711.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/wow.min.js"></script>
    <script src="assets/js/progress-bar.min.js"></script>
    <script src="assets/js/isotope.pkgd.min.js"></script>
    <script src="assets/js/imagesloaded.pkgd.min.js"></script>
    <script src="assets/js/count-to.js"></script>
    <script src="assets/js/YTPlayer.min.js"></script>
    <script src="assets/js/validnavs.js"></script>
    <script src="assets/js/main.js"></script>

</body>
</html>