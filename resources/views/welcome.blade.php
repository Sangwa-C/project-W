@extends('layouts.app')

@section('content')
<style>

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

    .contact-form {
        background: #fff;
        margin-top: 5%;
        /* margin-bottom: 5%; */
        width: 70%;
    }

    .contact-form .form-control {
        border-radius: 1rem;
    }

    .contact-image {
        text-align: center;
    }

    .contact-image img {
        border-radius: 6rem;
        width: 11%;
        margin-top: -3%;
        transform: rotate(29deg);
    }

    .contact-form form {
        padding: 14%;
    }

    .contact-form form .row {
        margin-bottom: -7%;
    }

    .contact-form h3 {
        margin-bottom: 8%;
        margin-top: -10%;
        text-align: center;
        color: #0062cc;
    }

    .contact-form .btnContact {
        width: 50%;
        border: none;
        border-radius: 1rem;
        padding: 1.5%;
        background: #dc3545;
        font-weight: 600;
        color: #fff;
        cursor: pointer;
    }

    .btnContactSubmit {
        width: 50%;
        border-radius: 1rem;
        padding: 1.5%;
        color: #fff;
        background-color: #0062cc;
        border: none;
        cursor: pointer;
    }

    /* @media (max-width: 768px) {
        .carousel-inner .carousel-item>div {
            display: none;
        }

        .carousel-inner .carousel-item>div:first-child {
            display: block;
        }
    }

    .carousel-inner .carousel-item.active,
    .carousel-inner .carousel-item-next,
    .carousel-inner .carousel-item-prev {
        display: flex;
    } */

    /* display 3 */
    /* @media (min-width: 768px) {

        .carousel-inner .carousel-item-right.active,
        .carousel-inner .carousel-item-next {
            transform: translateX(33.333%);
        }

        .carousel-inner .carousel-item-left.active,
        .carousel-inner .carousel-item-prev {
            transform: translateX(-33.333%);
        }
    }

    .carousel-inner .carousel-item-right,
    .carousel-inner .carousel-item-left {
        transform: translateX(0);
    } */

</style>




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

    {{-- testmonials --}}

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


            <div class="container text-center my-3">
                <h2 class="font-weight-light">Bootstrap 4 - Multi Item Carousel</h2>
                <div class="row mx-auto my-auto">
                    <div id="recipeCarousel" class="carousel slide w-100" data-ride="carousel">
                        <div class="carousel-inner w-100" role="listbox">
                            <div class="carousel-item active">
                                <div class="col-md-4">
                                    <div class="card card-body">
                                        <div class="col-md-12 mt-4">
                                            <div class="card profile-card-5">
                                                <div class="card-img-block">
                                                    <img class="card-img-top"
                                                        src="https://images.unsplash.com/photo-1517832207067-4db24a2ae47c"
                                                        alt="Card image cap">
                                                </div>
                                                <div class="card-body pt-0">
                                                    <p class="card-text"><i class="fa fa-quote-left"
                                                            aria-hidden="true"></i>
                                                        Some quick example text to build on the card title and make up
                                                        the bulk
                                                        of the card's content. <i class="fa fa-quote-right"
                                                            aria-hidden="true"></i>
                                                    </p>
                                                    <h5 class="card-title" style="float:right">MyName Surname</h5>


                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="col-md-4">
                                    <div class="card card-body">
                                        <img class="img-fluid" src="http://placehold.it/380?text=2">
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="col-md-4">
                                    <div class="card card-body">
                                        <img class="img-fluid" src="http://placehold.it/380?text=3">
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="col-md-4">
                                    <div class="card card-body">
                                        <img class="img-fluid" src="http://placehold.it/380?text=4">
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="col-md-4">
                                    <div class="card card-body">
                                        <img class="img-fluid" src="http://placehold.it/380?text=5">
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="col-md-4">
                                    <div class="card card-body">
                                        <img class="img-fluid" src="http://placehold.it/380?text=6">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a class="carousel-control-prev w-auto" href="#recipeCarousel" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon bg-dark border border-dark rounded-circle"
                                aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next w-auto" href="#recipeCarousel" role="button" data-slide="next">
                            <span class="carousel-control-next-icon bg-dark border border-dark rounded-circle"
                                aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
                <h5 class="mt-2">Advances one slide at a time</h5>
            </div>
        </div>
    </section>

    {{-- contact form --}}

    <section style="margin-top: 7%; background-color:#d3f3f3">
        <div style="padding-top:1%">
            <div class="container contact-form">
                <div class="contact-image">
                    <img src="https://image.ibb.co/kUagtU/rocket_contact.png" alt="rocket_contact" />
                </div>
                <form method="post">
                    <h3>Contact Us</h3>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" name="txtName" class="form-control" placeholder="Your Name *"
                                    value="" />
                            </div>
                            <div class="form-group">
                                <input type="text" name="txtEmail" class="form-control" placeholder="Your Email *"
                                    value="" />
                            </div>
                            <div class="form-group">
                                <input type="text" name="txtPhone" class="form-control"
                                    placeholder="Your Phone Number *" value="" />
                            </div>
                            <div class="form-group">
                                <input type="submit" name="btnSubmit" class="btnContact" value="Send Message" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <textarea name="txtMsg" class="form-control" placeholder="Your Message *"
                                    style="width: 100%; height: 150px;"></textarea>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>

    </section>

    {{-- footer --}}

    <footer class="section footer-classic context-dark bg-image text-light" style="background: #2d3246;">
        <div class="container">
            <div class="row row-30">
                <div class="col-md-4 col-xl-5">
                    <div class="pr-xl-4"><a class="brand img-fluid" href="index.html"><img class="brand-logo-light"
                                src="assets/img/download.png" alt=""></a>
                        <p>We are an award-winning creative agency, dedicated to the best result in web design,
                            promotion, business consulting, and marketing.</p>
                        <!-- Rights-->
                        <p class="rights"><span>©  </span><span
                                class="copyright-year">2018</span><span> </span><span>Waves</span><span>. </span><span>All
                                Rights Reserved.</span></p>
                    </div>
                </div>
                <div class="col-md-4">
                    <h5>Contacts</h5>
                    <dl class="contact-list">
                        <dt>Address:</dt>
                        <dd>798 South Park Avenue, Jaipur, Raj</dd>
                    </dl>
                    <dl class="contact-list">
                        <dt>email:</dt>
                        <dd><a href="mailto:#">dkstudioin@gmail.com</a></dd>
                    </dl>
                    <dl class="contact-list">
                        <dt>phones:</dt>
                        <dd><a href="tel:#">https://karosearch.com</a> <span>or</span> <a
                                href="tel:#">https://karosearch.com</a>
                        </dd>
                    </dl>
                </div>
                <div class="col-md-4 col-xl-3">
                    <h5>Links</h5>
                    <ul class="nav-list">
                        <li><a href="#">About</a></li>
                        <li><a href="#">Projects</a></li>
                        <li><a href="#">Blog</a></li>
                        <li><a href="#">Contacts</a></li>
                        <li><a href="#">Pricing</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row no-gutters social-container">
            <div class="col"><a class="social-inner" href="#"><span
                        class="icon mdi mdi-facebook"></span><span>Facebook</span></a></div>
            <div class="col"><a class="social-inner" href="#"><span
                        class="icon mdi mdi-instagram"></span><span>instagram</span></a></div>
            <div class="col"><a class="social-inner" href="#"><span
                        class="icon mdi mdi-twitter"></span><span>twitter</span></a></div>
            <div class="col"><a class="social-inner" href="#"><span
                        class="icon mdi mdi-youtube-play"></span><span>google</span></a></div>
        </div>
    </footer>

    <script>
        $('#recipeCarousel').carousel({
            interval: 10000
        })

        $('.carousel .carousel-item').each(function() {
            var minPerSlide = 3;
            var next = $(this).next();
            if (!next.length) {
                next = $(this).siblings(':first');
            }
            next.children(':first-child').clone().appendTo($(this));

            for (var i = 0; i < minPerSlide; i++) {
                next = next.next();
                if (!next.length) {
                    next = $(this).siblings(':first');
                }

                next.children(':first-child').clone().appendTo($(this));
            }
        });

    </script>

@endsection






