<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Project W</title>
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

</style>

<body>

    <!-- Navbar -->
    <nav class="navbar fixed-top navbar-expand-lg  scrolling-navbar">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="http://placehold.it/150x50?text=Logo" alt="">
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
                        <a class="nav-link text-light" href="#">Succefful Stories</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link text-light" href="/login">log-In</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link text-light" href="/register">Sign-Up</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="#">Contact</a>
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
                                        <a target="_blank" href="https://mdbootstrap.com/bootstrap-tutorial/"
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
                <div class="view" style="background-image: url('../assets/img/secondSlide.jpg'); background-repeat: no-repeat; background-size: cover;">

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
                                    <strong>Helping entrepreneurs, investors and lenders make <br> better decisions about
                                        businesses they care about</strong>
                                </p>

                                <p class="mb-4 d-none d-md-block">
                                    <strong></strong>
                                </p>

                                <button class="button button1">
                                    <a target="_blank" href="https://mdbootstrap.com/bootstrap-tutorial/"
                                        class="btn btn-outline-white btn-lg text-light">Get Started
                                        <i class="fa fa-fast-forward ml-2"></i>
                                    </a>
                                </button>

                            {{-- </div>
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
                                    <strong>Helping entrepreneurs, investors and lenders make <br> better decisions about
                                        businesses they care about</strong>
                                </p>

                                <p class="mb-4 d-none d-md-block">
                                    <strong></strong>
                                </p>

                                <button class="button button1">
                                    <a target="_blank" href="https://mdbootstrap.com/bootstrap-tutorial/"
                                        class="btn btn-outline-white btn-lg text-light">Get Started
                                        <i class="fa fa-fast-forward ml-2"></i>
                                    </a>
                                </button>

                            {{-- </div>
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




</body>

</html>
