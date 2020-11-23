<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Connect plus</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    {{-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script> --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha256-4+XzXVhsDmqanXGHaHvgh1gMQKX40OUvDEBTu8JcmNs=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <script src="assets\js\script.js"></script>

    <link rel="stylesheet" href="assets\css\styles.css">

</head>

<style>
    .button1 {
        background-color: black;
        opacity: 0.8;
        border: 2px solid #4CAF50;
    }

    .button1:hover {
        background-color: #4CAF50;
        color: white;
    }

    .dropdown:hover>.dropdown-menu {
        display: block;
    }

    .dropdown>.dropdown-toggle:active {
        /*Without this, clicking will make it sticky*/
        pointer-events: none;
    }

</style>

<body>

    <!-- Navbar -->
    <nav class="navbar fixed-top navbar-expand-lg  scrolling-navbar" >
        <div class="container" style="margin-left:10%; margin-right:10%">
            <a class="navbar-brand" href="/">
                <img src="{{ url('assets/img/save.png') }}" alt="" width="87px ">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link text-light" href="/">Home
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link text-light" href="#">About Us</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link text-light" href="#"></a>
                    </li>

                    <li>
                        <div class="dropdown">
                            <a class="nav-link text-light dropdown-toggle" type="button" id="dropdownMenuButton"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                How It works
                            </a>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="#">Investor</a>
                                <a class="dropdown-item" href="#">Entrepreneur</a>
                            </div>
                        </div>
                    </li>

                    <li>
                        <div class="dropdown">
                            <a class="nav-link text-light dropdown-toggle" type="button" id="dropdownMenuButton"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Join Us
                            </a>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item nav-link" href="/login">login</a>
                                <a class="dropdown-item nav-link" href="/register">Register</a>
                            </div>
                        </div>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link text-light" href="/contact">Contact Us</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Navbar -->

    <script>
        AOS.init();

    </script>

    <script type="text/javascript">
        $(document).ready(function() {
            $(window).scroll(function() {
                var scroll = $(window).scrollTop();
                if (scroll > 300) {
                    $(".navbar").css("background", "#292828");
                } else {
                    $(".navbar").css("background", "none");
                }
            })
        })

    </script>

    <!--Carousel Wrapper-->
    <div id="carousel-example-1z" class="carousel slide carousel-fade" data-ride="carousel">

        <!--Indicators-->
        <ol class="carousel-indicators">
            <li data-target="#carousel-example-1z" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-1z" data-slide-to="1"></li>
            <li data-target="#carousel-example-1z" data-slide-to="2"></li>
        </ol>
        <!--/.Indicators-->

        <!--Slides-->
        <div class="carousel-inner" role="listbox">

            <!--First slide-->
            <div class="carousel-item active">
                <div class="view"
                    style="background-image: url('../assets/img/firstSlide.jpg'); background-repeat: no-repeat; background-size: cover;">

                    <!-- Mask & flexbox options-->
                    <div class="mask rgba-black-light d-flex">

                        <!-- Content -->
                        <div class="text-center text-light mx-5 wow" data-aos="fade-up-right" data-aos-duration="3000"
                            style="margin-top: 15%; margin-left:2%">
                            <div class="row">
                                <div class="col-md-8">
                                    <h1 class="mb-4">
                                        <strong class="text-light">Investor And Entrepreneur Connector</strong>
                                    </h1>

                                    <p>
                                        <strong>Helping entrepreneurs, investors and lenders make better decisions about
                                            businesses they care about</strong>
                                    </p>

                                    <p class="mb-4 d-none d-md-block">
                                        <strong></strong>
                                    </p>

                                    <button class="button button1">
                                        <a target="_blank" href="/login"
                                            class="btn btn-outline-white btn-lg text-light">Get Started
                                            <i class="fa fa-fast-forward ml-2"></i>
                                        </a>
                                    </button>

                                </div>
                            </div>


                        </div>
                        <!-- Content -->

                    </div>
                    <!-- Mask & flexbox options-->

                </div>
            </div>
            <!--/First slide-->

            <!--Second slide-->
            <div class="carousel-item">
                <div class="view"
                    style="background-image: url('../assets/img/secondSlide.jpg'); background-repeat: no-repeat; background-size: cover;">

                    <!-- Mask & flexbox options-->
                    <div class="mask rgba-black-light d-flex justify-content-end">

                        <!-- Content -->
                        <div class="text-center text-light mx-5 wow" data-aos="fade-up-right" data-aos-duration="6000"
                            style="margin-top:15%; margin-right:20%">
                            {{-- <div class="row">
                                <div class="col-md-7"> --}}
                                    <h1 class="mb-4">
                                        <strong class="text-light">Investor And <br> Entrepreneur Connector</strong>
                                    </h1>

                                    <p>
                                        <strong>Helping entrepreneurs, investors and lenders make <br> better decisions
                                            about
                                            businesses they care about</strong>
                                    </p>

                                    <p class="mb-4 d-none d-md-block">
                                        <strong></strong>
                                    </p>

                                    <button class="button button1">
                                        <a target="_blank" href="/login"
                                            class="btn btn-outline-white btn-lg text-light">Get Started
                                            <i class="fa fa-fast-forward ml-2"></i>
                                        </a>
                                    </button>

                                    {{--
                                </div>
                            </div> --}}


                        </div>
                        <!-- Content -->

                    </div>
                    <!-- Mask & flexbox options-->

                </div>
            </div>
            <!--/Second slide-->

            <!--Third slide-->
            <div class="carousel-item">
                <div class="view"
                    style="background-image: url('../assets/img/thirdSlide.JPG'); background-repeat: no-repeat; background-size: cover;">

                    <!-- Mask & flexbox options-->
                    <div class="mask rgba-black-light d-flex justify-content-center align-items-center">

                        <!-- Content -->
                        <div class="text-center text-light mx-5 wow" data-aos="fade-up-right" data-aos-duration="6000"
                            style="margin-top:15%; ">
                            {{-- <div class="row">
                                <div class="col-md-7"> --}}
                                    <h1 class="mb-4">
                                        <strong class="text-light">Investor And <br> Entrepreneur Connector</strong>
                                    </h1>

                                    <p>
                                        <strong>Helping entrepreneurs, investors and lenders make <br> better decisions
                                            about
                                            businesses they care about</strong>
                                    </p>

                                    <p class="mb-4 d-none d-md-block">
                                        <strong></strong>
                                    </p>

                                    <button class="button button1">
                                        <a target="_blank" href="/login"
                                            class="btn btn-outline-white btn-lg text-light">Get Started
                                            <i class="fa fa-fast-forward ml-2"></i>
                                        </a>
                                    </button>

                                    {{--
                                </div>
                            </div> --}}
                            <!-- Content -->

                        </div>
                        <!-- Mask & flexbox options-->

                    </div>
                </div>
                <!--/Third slide-->

            </div>
            <!--/.Slides-->

            <!--Controls-->
            <a class="carousel-control-prev" href="#carousel-example-1z" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carousel-example-1z" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
            <!--/.Controls-->

        </div>
        <!--/.Carousel Wrapper-->




        <main>
            @yield('content')
        </main>

        <footer class="page-footer font-small pt-4 text-light" style="background-color:#386570">

            <!-- Footer Links -->
            <div class="container-fluid text-center text-md-left">

                <!-- Grid row -->
                <div class="row">

                    <!-- Grid column -->
                    <div class="col-md-6 mt-md-0 mt-3">

                        <!-- Content -->
                        <h5 class="text-uppercase">Footer Content</h5>
                        <p>This project will help every body in the world </p>

                    </div>
                    <!-- Grid column -->

                    <hr class="clearfix w-100 d-md-none pb-3">

                    <!-- Grid column -->
                    <div class="col-md-3 mb-md-0 mb-3">

                        <!-- Links -->
                        <h5 class="text-uppercase">Partaners</h5>

                        <ul class="list-unstyled">
                            <li>
                                <a href="https://www.yanjye.com/" class="text-light">Yanjye limited</a>
                            </li>
                            <li>
                                <a href="https://www.envisageincubators.com/" class="text-light">Envisage Incubators</a>
                            </li>
                            {{-- <li>
                                <a href="#!" class="text-light">Link 3</a>
                            </li>
                            <li>
                                <a href="#!" class="text-light">Link 4</a>
                            </li> --}}
                        </ul>

                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-3 mb-md-0 mb-3">

                        <!-- Links -->
                        <h5 class="text-uppercase">ADDRESS</h5>

                        <ul class="list-unstyled">
                            <li>
                                <a href="" class="text-light">Kacyiru</a>
                            </li>
                            <li>
                                <a href="#!" class="text-light">oppostite zigama</a>
                            </li>
                            <li>
                                <a href="#!" class="text-light">whatsapp:0788377874</a>
                            </li>
                            <li>
                                <a href="#!" class="text-light">email:yanjye.com@gmail.com</a>
                            </li>
                        </ul>

                    </div>
                    <!-- Grid column -->

                </div>
                <!-- Grid row -->

            </div>
            <!-- Footer Links -->

            <!-- Copyright -->
            <div class="footer-copyright text-center py-3" style="background-color:black; opacity: 0.3">© 2020 Copyright:
                connect plus

            </div>
            <!-- Copyright -->

        </footer>


</body>

</html>
