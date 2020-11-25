@extends('layouts.app')

@section('content')
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.18.0/css/mdb.min.css" rel="stylesheet">

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.18.0/js/mdb.min.js"></script>

    <div class="container" style="margin-top: 14%">

        <div class="row">
            <div class="col-sm-7">

        <div class="row mt-1">
            <div class="col-md-12">

                <!-- Stepers Wrapper -->
                <ul class="stepper stepper-vertical">

                    <!-- First Step -->
                    <li class="completed">
                        <a href="#!">
                            <span class="circle">1</span>
                            <span class="label">First step</span>
                        </a>
                    </li>

                    <!-- Second Step -->
                    <li class="active">

                        <!--Section Title -->
                        <a href="#!">
                            <span class="circle">2</span>
                            <span class="label">Second step</span>
                        </a>

                        <!-- Section Description -->
                        <div class="step-content grey lighten-3">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse cupiditate voluptate facere
                                iusto
                                quaerat
                                vitae excepturi, accusantium ut aliquam repellat atque nesciunt nostrum similique. Inventore
                                nostrum
                                ut,
                                nobis porro sapiente.</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore error excepturi veniam nemo
                                repellendus, distinctio soluta vitae at sit saepe. Optio eaque quia excepturi adipisci
                                pariatur
                                totam,
                                atque odit fugiat.</p>
                            <p>Deserunt voluptatem illum quae nisi soluta eum perferendis nesciunt asperiores tempore saepe
                                reiciendis,
                                vero quod a dolor corporis natus qui magni quas fuga rem excepturi laboriosam. Quisquam
                                expedita ab
                                fugiat.</p>
                        </div>
                    </li>

                    <!-- Third Step -->
                    <li class="warning">
                        <a href="#!">
                            <span class="circle"><i class="fas fa-exclamation"></i></span>
                            <span class="label">Third step</span>
                        </a>
                    </li>

                    <!-- Fourth Step -->
                    <li>
                        <a href="#!">
                            <span class="circle">4</span>
                            <span class="label">Fourth step</span>
                        </a>
                    </li>

                </ul>
                <!-- /.Stepers Wrapper -->

            </div>
        </div>
            </div>
            <div class="col-sm-4"></div>
        </div>



    </div>


@endsection
