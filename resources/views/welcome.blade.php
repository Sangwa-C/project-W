<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Project W</title>

    {{--
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    --}}
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>

    {{--
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js">
    </script> --}}
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>

    {{--
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    --}}


</head>

<style>
    @media (min-width: 800px) and (max-width: 850px) {
        .navbar:not(.top-nav-collapse) {
            background: #1C2331 !important;
        }
    }

    .carousel,
    .carousel .carousel-inner,
    .carousel .carousel-inner .active,
    .carousel .carousel-inner .carousel-item,
    .view,
    body,
    html {
        height: 100%
    }

    .navbar {
        background-color: rgba(0, 0, 0, .2)
    }

    .page-footer,
    .top-nav-collapse {
        background-color: #1C2331
    }

    @media only screen and (max-width:768px) {
        .navbar {
            background-color: #1C2331
        }
    }

    .nav-item a {
        font-size: 1.2em;
    }

    .profile-card-5 {
        margin-top: 20px;
    }

    .profile-card-5 .btn {
        border-radius: 2px;
        text-transform: uppercase;
        font-size: 12px;
        padding: 7px 20px;
    }

    .profile-card-5 .card-img-block {
        width: 91%;
        margin: 0 auto;
        position: relative;
        top: -20px;

    }

    .profile-card-5 .card-img-block img {
        border-radius: 50%;
        height: 200px;
        width: 60%;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.63);
    }

    .profile-card-5 h5 {
        color: #4E5E30;
        font-weight: 600;
    }

    .profile-card-5 p {
        font-size: 14px;
        font-weight: 300;
    }

    .profile-card-5 .btn-primary {
        background-color: #4E5E30;
        border-color: #4E5E30;
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
                        <a class="nav-link text-light" href="#">Home
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="#">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="#">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="#">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Navbar -->

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
                    style="background-image: url('https://mdbootstrap.com/img/Photos/Others/images/77.jpg'); background-repeat: no-repeat; background-size: cover;">

                    <!-- Mask & flexbox options-->
                    <div class="mask rgba-black-light d-flex justify-content-center align-items-center">

                        <!-- Content -->
                        <div class="text-center white-text mx-5 wow fadeIn" style="margin-top: 20%">
                            <h1 class="mb-4">
                                <strong>Learn Bootstrap 4 with MDB</strong>
                            </h1>

                            <p>
                                <strong>Best & free guide of responsive web design</strong>
                            </p>

                            <p class="mb-4 d-none d-md-block">
                                <strong>The most comprehensive tutorial for the Bootstrap 4. Loved by over 500 000
                                    users. Video and written versions
                                    available. Create your own, stunning website.</strong>
                            </p>

                            <a target="_blank" href="https://mdbootstrap.com/bootstrap-tutorial/"
                                class="btn btn-outline-white btn-lg">Start free tutorial
                                <i class="fa fa-graduation-cap ml-2"></i>
                            </a>
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
                    style="background-image: url('https://mdbootstrap.com/img/Photos/Others/images/47.jpg'); background-repeat: no-repeat; background-size: cover;">

                    <!-- Mask & flexbox options-->
                    <div class="mask rgba-black-light d-flex justify-content-center align-items-center">

                        <!-- Content -->
                        <div class="text-center white-text mx-5 wow fadeIn" style="margin-top: 20%">
                            <h1 class="mb-4">
                                <strong>Learn Bootstrap 4 with MDB</strong>
                            </h1>

                            <p>
                                <strong>Best & free guide of responsive web design</strong>
                            </p>

                            <p class="mb-4 d-none d-md-block">
                                <strong>The most comprehensive tutorial for the Bootstrap 4. Loved by over 500 000
                                    users. Video and written versions
                                    available. Create your own, stunning website.</strong>
                            </p>

                            <a target="_blank" href="https://mdbootstrap.com/bootstrap-tutorial/"
                                class="btn btn-outline-white btn-lg">Start free tutorial
                                <i class="fa fa-graduation-cap ml-2"></i>
                            </a>
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
                    style="background-image: url('https://mdbootstrap.com/img/Photos/Others/images/79.jpg'); background-repeat: no-repeat; background-size: cover;">

                    <!-- Mask & flexbox options-->
                    <div class="mask rgba-black-light d-flex justify-content-center align-items-center">

                        <!-- Content -->
                        <div class="text-center white-text mx-5 wow fadeIn" style="margin-top: 20%">
                            <h1 class="mb-4">
                                <strong>Learn Bootstrap 4 with MDB</strong>
                            </h1>

                            <p>
                                <strong>Best & free guide of responsive web design</strong>
                            </p>

                            <p class="mb-4 d-none d-md-block">
                                <strong>The most comprehensive tutorial for the Bootstrap 4. Loved by over 500 000
                                    users. Video and written versions
                                    available. Create your own, stunning website.</strong>
                            </p>

                            <a target="_blank" href="https://mdbootstrap.com/bootstrap-tutorial/"
                                class="btn btn-outline-white btn-lg">Start free tutorial
                                <i class="fa fa-graduation-cap ml-2"></i>
                            </a>
                        </div>
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

    {{-- About --}}
    <section>
        <div class="container" style="margin-top: 7%">
            <div class="row">
                <div class="col-sm-5">
                    <h2>About US/ <br> Our Story </h2>
                </div>
                <div class="col-sm-6  text-justify">

                    <p>Lorem Ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore
                        et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi
                        ut
                        aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                        culpa qui officia deserunt mollit anim id est laborum.</p>



                    <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci at eius similique repellendus
                        non totam rem,
                        quisquam, doloribus, est doloremque enim. Sunt modi vero in ipsa distinctio beatae quas
                        repellat?</p>



                </div>

            </div>
        </div>
    </section>
    {{-- Services --}}

    <section>
        <div class="container" style="margin-top: 7%; margin-left:5%">
            <h1 class="text-center" style="margin-bottom: 5%; width:80%">Services</h1>
            <div class="row">

                <div class="col-md-4">

                    <span class="fa-stack fa-4x "><i class="fa fa-check-circle"
                            style="font-size:100px;color:rgb(104, 194, 216);text-shadow: 3px 5px 2px rgb(68, 94, 100), 3px 5px rgb(68, 94, 100);"></i></span><br><br>

                    <h4 class="my-3">Lorem ipsum 1</h4>
                    <p class="text-muted" style="width: 85%">Lorem ipsum dolor sit amet, consectetur adipiscing elit
                        nullam nunc justo sagittis suscipit ultrices.</p> <br><br>
                </div>

                <div class="col-md-4">

                    <span class="fa-stack fa-4x"><i class="fa fa-superpowers"
                            style="font-size:100px;color:rgb(104, 194, 216);text-shadow: 3px 5px 2px rgb(68, 94, 100), 3px 5px rgb(68, 94, 100);"></i></span>
                    <br><br>
                    <h4 class="my-3">Lorem ipsum 2</h4>
                    <p class="text-muted" style="width: 85%">Lorem ipsum dolor sit amet, consectetur adipiscing elit
                        nullam nunc justo sagittis suscipit ultrices.</p>
                </div>

                <div class="col-md-4">

                    <span class="fa-stack fa-4x"><i class="fa fa-bullseye"
                            style="font-size:100px;color:rgb(104, 194, 216);text-shadow: 3px 5px 2px rgb(68, 94, 100), 3px 5px rgb(68, 94, 100);"></i></span><br><br>

                    <h4 class="my-3">Lorem ipsum 3</h4>
                    <p class="text-muted" style="width: 85%">Lorem ipsum dolor sit amet, consectetur adipiscing elit
                        nullam nunc justo sagittis suscipit ultrices.

                    </p>
                </div>


                <div class="col-md-4">

                    <span class="fa-stack fa-4x"><i class="fa fa-hand-rock-o"
                            style="font-size:100px;color:rgb(104, 194, 216);text-shadow: 3px 5px 2px rgb(68, 94, 100), 3px 5px rgb(68, 94, 100);"></i></span><br><br>

                    <h4 class="my-3">Lorem ipsum 4</h4>
                    <p class="text-muted" style="width: 85%">Lorem ipsum dolor sit amet, consectetur adipiscing elit
                        nullam nunc justo sagittis suscipit ultrices.

                    </p>
                </div>

                <div class="col-md-4">

                    <span class="fa-stack fa-4x"><i class="fa fa-plug"
                            style="font-size:100px;color:rgb(104, 194, 216);text-shadow: 3px 5px 2px rgb(68, 94, 100), 3px 5px rgb(68, 94, 100);"></i></span><br><br>

                    <h4 class="my-3">Lorem ipsum 5</h4>
                    <p class="text-muted" style="width: 85%">Lorem ipsum dolor sit amet, consectetur adipiscing elit
                        nullam nunc justo sagittis suscipit ultrices.

                    </p>
                </div>

                <div class="col-md-4">

                    <span class="fa-stack fa-4x"><i class="fa fa-line-chart"
                            style="font-size:100px;color:rgb(104, 194, 216);text-shadow: 3px 5px 2px rgb(68, 94, 100), 3px 5px rgb(68, 94, 100);"></i></span><br><br>

                    <h4 class="my-3">Lorem ipsum 6</h4>
                    <p class="text-muted" style="width: 85%">Lorem ipsum dolor sit amet, consectetur adipiscing elit
                        nullam nunc justo sagittis suscipit ultrices.

                    </p>
                </div>
            </div>
        </div>

    </section>

    <section>
        <div class="container" style="margin-top: 7%;">
            <h1 class="text-center" style="margin-bottom: 5%; width:80%">Successful stories/ testmonials</h1>
            <div class="row">
                <!--Profile Card 5-->
                <div class="col-md-4 mt-4">
                    <div class="card profile-card-5">
                        <div class="card-img-block">
                            <img class="card-img-top" src="https://images.unsplash.com/photo-1517832207067-4db24a2ae47c"
                                alt="Card image cap">
                        </div>
                        <div class="card-body pt-0">
                            <p class="card-text"><i class="fa fa-quote-left" aria-hidden="true"></i>
                                Some quick example text to build on the card title and make up the bulk
                                of the card's content. <i class="fa fa-quote-right" aria-hidden="true"></i>
                            </p>
                                <h5 class="card-title" style="float:right">MyName Surname</h5>


                        </div>
                    </div>

                </div>

            </div>
        </div>
        </div>
        </div>
    </section>

</body>

</html>
