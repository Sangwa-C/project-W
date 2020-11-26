@extends('layouts.all')
@section('content')



    {{-- About --}}
    <section>
        <div class="container" style="margin-top: 11%">
            <div class="row">
                <div class="col-sm-5">
                    <h2 data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1500">Our Story
                    </h2>
                </div>
                <div class="col-sm-6  text-justify" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="2000">
                    <p>We are an intermediate company that helps entrepreneurs to connect with investors, either helping
                        with mentorship, trainings, and funding.
                        According to what an entrepreneur project needs or investor wants, we categorize them and analyze
                        deeply their targets before matching them.
                    </p>
                    <p> After that, we offer comments, feedback, and stars/ rating to the best entrepreneur of the period.
                    </p>

                </div>

            </div>
        </div>
    </section>
    {{-- Services --}}

    <section style="background-color: #e1f1f5; margin-top: 10%;">
        <div class="container" style="margin-top: 7%; margin-left:5%;">
            <h1 class="text-center" data-aos="fade-up" data-aos-duration="1500" data-aos-anchor-placement="top-bottom"
                style="margin-bottom: 5%; padding-top:7%; width:100%">Services</h1>
            <div class="row">

                <div class="col-md-4" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2000">

                    <div class="row">
                        <div class="col-md-3">
                            <img src="assets/img/download.svg" alt=""
                                style="width:70px; font-size:70px; color:rgb(104, 194, 216);text-shadow: 3px 5px 2px rgb(68, 94, 100), 3px 5px rgb(68, 94, 100);">
                        </div>
                        <div class="col-md-9">
                            <h4 class="my-3">Mentorship</h4>
                            <p class="text-muted" style="width: 85%">
                                Our mentors are experienced business
                                who understand the importance of mentoring a new generation of entrepreneurs.</p>
                            <br><br>
                        </div>
                    </div>


                </div>

                <div class="col-md-4" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2000">
                    <div class="row">
                        <div class="col-md-3">
                            <img src="assets\img\funding.svg" alt=""
                                style="width:70px; font-size:70px; color:rgb(104, 194, 216);text-shadow: 3px 5px 2px rgb(68, 94, 100), 3px 5px rgb(68, 94, 100);">
                        </div>
                        <div class="col-md-9">
                            <h4 class="my-3">Funding</h4>
                            <p class="text-muted" style="width: 85%">
                                If you’re desperate to launch your own business but just don’t have the available funds,
                                help is at hand.</p>
                        </div>
                    </div>



                    <br><br>

                </div>

                <div class="col-md-4" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2000">

                    <div class="row">
                        <div class="col-md-3">
                            <img src="assets\img\advice.svg" alt=""
                                style="width:70px; font-size:70px; color:rgb(104, 194, 216);text-shadow: 3px 5px 2px rgb(68, 94, 100), 3px 5px rgb(68, 94, 100);">

                        </div>
                        <div class="col-md-9">
                            <h4 class="my-3">Advice</h4>
                            <p class="text-muted" style="width: 85%">
                                We advice underserved entrepreneurs to start, grow and sustain their
                                businesses.


                            </p>
                        </div>
                    </div>
                    <br><br>


                </div>


                <div class="col-md-4" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2000">
                    <div class="row">
                        <div class="col-md-3">
                            <img src="assets\img\training.svg" alt="" style="width: 70px">
                        </div>
                        <div class="col-md-9">
                            <h4 class="my-3">Training</h4>
                            <p class="text-muted" style="width: 85%">
                                We train young entrepreneurs enabling them to create jobs, build communities and transform
                                lives.


                            </p>
                        </div>
                    </div>


                </div>

                <div class="col-md-4" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2000">
                    <div class="row">
                        <div class="col-md-3">
                            <img src="assets\img\meeting.svg" alt="" style="width: 70px">
                        </div>
                        <div class="col-md-9">
                            <h4 class="my-3">Meeting</h4>
                            <p class="text-muted" style="width: 85%">
                                we help entrepreneurs to find investment opportunities. As for investor we heilp them to
                                invest in sector of their chosing.
                            </p>
                        </div>
                    </div>




                </div>

                <div class="col-md-4" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2000">
                    <div class="row">
                        <div class="col-md-3">
                            <img src="assets\img\leasing.webp" alt="" style="width: 70px">

                        </div>
                        <div class="col-md-9">
                            <h4 class="my-3">Leasing</h4>
                            <p class="text-muted" style="width: 85%">
                                we offer leasing aggrements, to young enterpreneurs who are ready to implement their
                                profitable life changing solutioms
                            </p>
                        </div>
                    </div>



                </div>
            </div>
        </div>

    </section>

    {{-- testmonials --}}

    <section>
        {{-- <div class="container" style="margin-top: 7%;">
            <h1 class="text-center" data-aos="fade-in" data-aos-duration="1500" data-aos-anchor-placement="top-bottom"
                style="margin-bottom: 5%; width:90%">Successful stories</h1>
            {{-- <div class="row"> --}}
                {{-- <div class="col-md-4">

                    <div class="card profile-card-5">
                        <div class="card-img-block">
                            <img class="card-img-top" src="https://images.unsplash.com/photo-1517832207067-4db24a2ae47c"
                                alt="Card image cap">
                        </div>
                        <div class="card-body pt-0">
                            <p class="card-text"><i class="fa fa-quote-left" aria-hidden="true"></i>
                                Some quick example text to build on the card title and make up
                                the bulk
                                of the card's content. <i class="fa fa-quote-right" aria-hidden="true"></i>
                            </p>
                            <h5 class="card-title" style="float:right">MyName Surname</h5>


                        </div>
                    </div>

                </div>
            </div> --}}
            {{-- <section class="slider">
                <div class="slide">
                    <div class="card profile-card-5">
                        <div class="card-img-block">
                            <img class="card-img-top" src="https://images.unsplash.com/photo-1517832207067-4db24a2ae47c"
                                alt="Card image cap">
                        </div>
                        <div class="card-body pt-0">
                            <p class="card-text"><i class="fa fa-quote-left" aria-hidden="true"></i>
                                Some quick example text to build on the card title and make up
                                the bulk
                                of the card's content. <i class="fa fa-quote-right" aria-hidden="true"></i>
                            </p>
                            <h5 class="card-title" style="float:right">MyName Surname</h5>


                        </div>
                    </div>

                </div>
                <div class="slide">
                    <div class="card profile-card-5">
                        <div class="card-img-block">
                            <img class="card-img-top" src="https://images.unsplash.com/photo-1517832207067-4db24a2ae47c"
                                alt="Card image cap">
                        </div>
                        <div class="card-body pt-0">
                            <p class="card-text"><i class="fa fa-quote-left" aria-hidden="true"></i>
                                Some quick example text to build on the card title and make up
                                the bulk
                                of the card's content. <i class="fa fa-quote-right" aria-hidden="true"></i>
                            </p>
                            <h5 class="card-title" style="float:right">MyName Surname</h5>


                        </div>
                    </div>

                </div>
                <div class="slide">
                    <div class="card profile-card-5">
                        <div class="card-img-block">
                            <img class="card-img-top" src="https://images.unsplash.com/photo-1517832207067-4db24a2ae47c"
                                alt="Card image cap">
                        </div>
                        <div class="card-body pt-0">
                            <p class="card-text"><i class="fa fa-quote-left" aria-hidden="true"></i>
                                Some quick example text to build on the card title and make up
                                the bulk
                                of the card's content. <i class="fa fa-quote-right" aria-hidden="true"></i>
                            </p>
                            <h5 class="card-title" style="float:right">MyName Surname</h5>


                        </div>
                    </div>

                </div>
                <div class="slide">
                    <div class="card profile-card-5">
                        <div class="card-img-block">
                            <img class="card-img-top" src="https://images.unsplash.com/photo-1517832207067-4db24a2ae47c"
                                alt="Card image cap">
                        </div>
                        <div class="card-body pt-0">
                            <p class="card-text"><i class="fa fa-quote-left" aria-hidden="true"></i>
                                Some quick example text to build on the card title and make up
                                the bulk
                                of the card's content. <i class="fa fa-quote-right" aria-hidden="true"></i>
                            </p>
                            <h5 class="card-title" style="float:right">MyName Surname</h5>


                        </div>
                    </div>

                </div>
                <div class="slide">
                    <div class="card profile-card-5">
                        <div class="card-img-block">
                            <img class="card-img-top" src="https://images.unsplash.com/photo-1517832207067-4db24a2ae47c"
                                alt="Card image cap">
                        </div>
                        <div class="card-body pt-0">
                            <p class="card-text"><i class="fa fa-quote-left" aria-hidden="true"></i>
                                Some quick example text to build on the card title and make up
                                the bulk
                                of the card's content. <i class="fa fa-quote-right" aria-hidden="true"></i>
                            </p>
                            <h5 class="card-title" style="float:right">MyName Surname</h5>


                        </div>
                    </div>

                </div>
            </section>





        </div> --}}
    </section>

    {{-- contact form --}}

    <section style="margin-top: 7%; background-color: #e1f1f5">
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
                                <input type="text" name="txtName" class="form-control" placeholder="Your Name *" value="" />
                            </div>
                            <div class="form-group">
                                <input type="text" name="txtEmail" class="form-control" placeholder="Your Email *"
                                    value="" />
                            </div>
                            <div class="form-group">
                                <input type="text" name="txtPhone" class="form-control" placeholder="Your Phone Number *"
                                    value="" />
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

        <br><br>
    </section>

    {{-- footer --}}
    <!-- Footer -->

    <!-- Footer -->
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
