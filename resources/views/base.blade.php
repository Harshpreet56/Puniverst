<!DOCTYPE html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>punjab university</title>

    <link href='http://fonts.googleapis.com/css?family=Libre+Baskerville:400,700,400italic' rel='stylesheet'
        type='text/css'>
    <link href='fonts/Lato-Medium.css' rel='stylesheet' type='text/css'>
    <link href='fonts/Lato-Heavy.css' rel='stylesheet' type='text/css'>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap JS (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Bootstrap css -->
    <link rel="stylesheet" href="{{ URL::asset('css/bootstrap.min.css') }}" />


    <!-- Font awesome css -->

    <link rel="stylesheet" href="{{ URL::asset('css/font-awesome.min.css') }}" />

    <!-- Stroke Font Icon css -->
    <link rel="stylesheet" href="{{ URL::asset('css/pe-icon-7-stroke.css') }}" />

    <!-- Animate css -->

    <link rel="stylesheet" href="{{ URL::asset('css/animate.css') }}" />

    <!-- Owl carousel 2 css -->

    <link rel="stylesheet" href="{{ URL::asset('css/owl.carousel.css') }}" />

    <!-- Custom css -->
    <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}" />
    {{-- <link rel="stylesheet" href="{{ URL::asset('css/style1.css') }}" /> --}}
    <link rel="stylesheet" href="{{ URL::asset('css/responsive.css') }}" />


    <!-- Favicons -->
    <link rel="apple-touch-icon-precomposed" href="img/apple-touch-icon-precomposed.png">
    <link rel="shortcut icon" type="image/png" href="img/fav-icon.png" />


</head>

<body>


    <!-- <nav class="navbar navbar-expand-lg bg-dark ">
        <div class="container-fluid">
            <a class="navbar-brand text-light" href="#"><img
                    src="C:\Users\harsh\OneDrive\Pictures\pic\vector-graphic-emblem-hexagon-initials-letter-kr-logo-design-template-205159944.webp"
                    height="50px"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll"
                aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarScroll">
                <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
                    <li class="nav-item">
                        <a class="nav-link active text-light" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="#">Return</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-light" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Shopping
                        </a>
                        <ul class="dropdown-menu text-light">
                            <li><a class="dropdown-item" href="#">Men</a></li>
                            <li><a class="dropdown-item" href="#">Women</a></li>
                            <li><a class="dropdown-item" href="#">Kids</a></li>
                            <li><a class="dropdown-item" href="#">Footware</a></li>
                            <li><a class="dropdown-item" href="#">cosmetic</a></li>
                            <li><a class="dropdown-item" href="#">Gift items</a></li>

                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="#">Help center</a>
                    </li>

                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav> -->

    <header class="header_area">
        <div class="container-fulid">

            <div class="header_content">
                <div class=" row">
                    <div class="col-md-2 col-sm-2">
                        <div class="logo">
                            <img src="img/icon_cap.png" alt="">
                            <a href="index.html">Punjab<span>campus</span></a>
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle" data-toggle="collapse"
                                    data-target=".navbar-collapse">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-9 col-sm-10 ">
                        <!--style="margin-top: 19px; display:flex;" -->
                        <nav class="main_menu">
                            <div class="navbar-collapse collapse">
                                <ul class="nav navbar-nav navbar-right" style="display: contents;">
                                    <li><a href="/">Home</a></li>
                                    <li><a href="/about">About</a></li>
                                    <li><a href="/courses">Courses</a></li>
                                    <li><a href="/event">Events</a></li>
                                    <li><a href="/news">News</a></li>
                                    <li><a href="/contact">Contact Us</a></li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" role="button"
                                            data-bs-toggle="dropdown" aria-expanded="false">
                                            Dropdown
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#">Action</a></li>
                                            <li><a class="dropdown-item" href="#">Another action</a></li>
                                            <li>
                                                <hr class="dropdown-divider">
                                            </li>
                                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                                        </ul>
                                    </li>

                            </div>
                        </nav>
                        <form action="/index.blade.php" class="header_search ">
                            <input type="text" placeholder="Search">
                            <input type="submit" value="">
                        </form>




                    </div>
                </div>
            </div>

        </div>
    </header>










    @section("first")

    @show



    <footer class="footer_area">
        <div class="footer_top">
            <div class="container">
                <div class="row">
                    <div class="footer_widgets">
                        <div class="col-md-3 col-sm-6">
                            <div class="single_footer_widget">
                                <h2 class="widget_title">About us</h2>
                                <p>On my way to where the air is sweet. Can you tell me how to get how to get to
                                    Sesame
                                    Street! The first mate and his Skipper too will do their very best to make the
                                    others comfortable </p>
                                <ul class="footer_social">
                                    <li><a href="#" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#" target="_blank"><i class="fa fa-google-plus"></i></a></li>
                                    <li><a href="#" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="single_footer_widget">
                                <h2 class="widget_title">Latest posts</h2>
                                <ul class="latest_post">
                                    <li>
                                        <img src="img/latest_post_1.jpg" alt="">
                                        <div class="latest_post_txt">
                                            <h4><a href="#">On your mark get set and go now</a></h4>
                                            <p>April 12, 2015</p>
                                        </div>
                                    </li>
                                    <li>
                                        <img src="img/latest_post_2.jpg" alt="">
                                        <div class="latest_post_txt">
                                            <h4><a href="#">The ship set ground on the shore of this</a></h4>
                                            <p>April 12, 2015</p>
                                        </div>
                                    </li>
                                    <li>
                                        <img src="img/latest_post_3.jpg" alt="">
                                        <div class="latest_post_txt">
                                            <h4><a href="#">This time there's no stopping us from away</a></h4>
                                            <p>April 12, 2015</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="single_footer_widget">
                                <h2 class="widget_title">latest tweets</h2>
                                <ul class="latest_tweet">
                                    <li>Educamus is one of the excellent university template
                                        <a href="#">http://punjabcampus/universitybest/</a>
                                        <span>1 hours ago</span>
                                    </li>
                                    <li>Educamus is one of the excellent university template
                                        <a href="#">http://punjabcampus/universitybest/</a>
                                        <span>1 hours ago</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="single_footer_widget">
                                <h2 class="widget_title">contact info</h2>
                                <ul class="footer_contact">
                                    <li>Sector 36, DownTown Street, Chandigarh, india</li>
                                    <li>+91 89234 67345</li>
                                    <li>+91 78934 02001</li>
                                    <li>PunjabiUniversity@gmail.com</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer_bottom">
            <div class="container">
                <div class="row">
                    <div class="col-sm-4">
                        <p>© 2015 Punjabcampus. All rights reserved</p>
                    </div>
                    <div class="col-sm-8">
                        <nav class="footer_menu">
                            <ul>
                                <li><a href="index.html">Home</a></li>
                                <li><a href="about.html">About</a></li>
                                <li><a href="contact.html">Contact</a></li>
                                <li><a href="#">Privacy Policy</a></li>
                                <li><a href="#">Terms & Conditions</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery Latest version -->
    <!-- <script src="js/vendor/jquery.1.11.1.js"></script> -->
    <script src="{{ URL::asset('js/vendor/jquery.1.11.1.js') }}"></script>

    <!-- Google Maps API -->
    <script src="https://maps.googleapis.com/maps/api/js"></script>

    <!-- Bootstrap JS -->

    <script src="{{ URL::asset('js/bootstrap.min.js') }}"></script>

    <!-- jQuery Counterup and Waypoints -->

    <script src="{{ URL::asset('js/waypoints.min.js') }}"></script>
    <script src="{{ URL::asset('js/jquery.counterup.min.js') }}"></script>


    <!-- jQuery easing -->

    <script src="{{ URL::asset('js/jquery.easing.1.3.min.js') }}"></script>

    <!-- jQuery owl carousel -->

    <script src="{{ URL::asset('js/owl.carousel.min.js') }}"></script>

    <!-- WOW Animation -->

    <script src="{{ URL::asset('js/wow.min.js') }}"></script>

    <!--Activating WOW Animation only for modern browser-->
    <!--[if !IE]><!-->
    <script type="text/javascript">
    new WOW().init();
    </script>

    <script src="{{ url::asset('js/main.js')}}"></script>
</body>

</html>