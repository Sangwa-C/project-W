@extends('layouts.app')

@section('content')
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.18.0/css/mdb.min.css" rel="stylesheet">

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.18.0/js/mdb.min.js"></script>


<style>
    body {
        margin: 0;
        /* color: #6a6f8c; */
        background: #e1f1f5;
        font: 600 16px/18px 'Open Sans', sans-serif
    }

    .login-box {
        width: 100%;
        margin: auto;
        max-width: 525px;
        min-height: 670px;
        position: relative;
        background: url(https://images.unsplash.com/photo-1507208773393-40d9fc670acf?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1268&q=80) no-repeat center;
        box-shadow: 0 12px 15px 0 rgba(0, 0, 0, .24), 0 17px 50px 0 rgba(0, 0, 0, .19)
    }

    .login-snip {
        width: 100%;
        height: 100%;
        position: absolute;
        padding: 90px 70px 50px 70px;
        background: rgba(70, 105, 119, 0.9)
    }

    .login-snip .login,
    .login-snip .sign-up-form {
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        position: absolute;
        transform: rotateY(180deg);
        backface-visibility: hidden;
        transition: all .4s linear
    }

    .login-snip .sign-in,
    .login-snip .sign-up,
    .login-space .group .check {
        display: none
    }

    .login-snip .tab,
    .login-space .group .label,
    .login-space .group .button {
        text-transform: uppercase
    }

    .login-snip .tab {
        font-size: 22px;
        margin-right: 15px;
        padding-bottom: 5px;
        margin: 0 15px 10px 0;
        display: inline-block;
        border-bottom: 2px solid transparent
    }

    .login-snip .sign-in:checked+.tab,
    .login-snip .sign-up:checked+.tab {
        color: #fff;
        border-color: #1161ee
    }

    .login-space {
        min-height: 345px;
        position: relative;
        perspective: 1000px;
        transform-style: preserve-3d
    }

    .login-space .group {
        margin-bottom: 15px
    }

    .login-space .group .label,
    .login-space .group .input,
    .login-space .group .button {
        width: 100%;
        color: #fff;
        display: block
    }

    .login-space .group .input,
    .login-space .group .button {
        border: none;
        padding: 15px 20px;
        border-radius: 25px;
        background: rgba(255, 255, 255, .1)
    }

    .login-space .group input[data-type="password"] {
        text-security: circle;
        -webkit-text-security: circle
    }

    .login-space .group .label {
        color: #aaa;
        font-size: 12px
    }

    .login-space .group .button {
        background: #1161ee
    }

    .login-space .group label .icon {
        width: 15px;
        height: 15px;
        border-radius: 2px;
        position: relative;
        display: inline-block;
        background: rgba(255, 255, 255, .1)
    }

    .login-space .group label .icon:before,
    .login-space .group label .icon:after {
        content: '';
        width: 10px;
        height: 2px;
        background: #fff;
        position: absolute;
        transition: all .2s ease-in-out 0s
    }

    .login-space .group label .icon:before {
        left: 3px;
        width: 5px;
        bottom: 6px;
        transform: scale(0) rotate(0)
    }

    .login-space .group label .icon:after {
        top: 6px;
        right: 0;
        transform: scale(0) rotate(0)
    }

    .login-space .group .check:checked+label {
        color: #fff
    }

    .login-space .group .check:checked+label .icon {
        background: #1161ee
    }

    .login-space .group .check:checked+label .icon:before {
        transform: scale(1) rotate(45deg)
    }

    .login-space .group .check:checked+label .icon:after {
        transform: scale(1) rotate(-45deg)
    }

    .login-snip .sign-in:checked+.tab+.sign-up+.tab+.login-space .login {
        transform: rotate(0)
    }

    .login-snip .sign-up:checked+.tab+.login-space .sign-up-form {
        transform: rotate(0)
    }

    *,
    :after,
    :before {
        box-sizing: border-box
    }

    .clearfix:after,
    .clearfix:before {
        content: '';
        display: table
    }

    .clearfix:after {
        clear: both;
        display: block
    }

    a {
        color: inherit;
        text-decoration: none
    }

    .hr {
        height: 2px;
        margin: 60px 0 50px 0;
        background: rgba(255, 255, 255, .2)
    }

    .foot {
        text-align: center
    }

    .card {
        width: 500px;
        /* left: 100px */
    }

    ::placeholder {
        color: #b3b3b3
    }
</style>

<div class="container" style="margin-top: 14%">

    <div>

    </div>

    <div class="row">
        <div class="col-sm-7">

            <div class="row mt-1">
                <div class="col-md-12">

                    <!-- Stepers Wrapper -->
                    <ul class="stepper stepper-vertical">

                        <!-- First Step -->
                        <li class="">
                            <a href="#!" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2000">
                                <span class="circle bg-primary">1</span>
                                <span class="label">First step</span>
                            </a>

                            <!-- Section Description -->
                            <div class="step-content lighten-3" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2000">
                                <div class="card mb-3" style="max-width: 540px;">
                                    <div class="row no-gutters">
                                        <div class="col-md-4">
                                            <img src="https://freefrontend.com/assets/img/css-arrows/wip-bouncing-arrow-animation.gif" class="card-img" alt="...">
                                            <h3 class="text-center" style="color:#05c9ff">Register</h3>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="card-body">
                                                <h5 class="card-title">Card title</h5>
                                                <p class="card-text">
                                                    Investor registers with InvestorsMeet.com and
                                                    specifies investment criteria.

                                                </p>
                                                <p class="card-text"><small class="text-muted">Last updated 3 mins
                                                        ago</small></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <!-- Second Step -->
                        <li class="">

                            <!--Section Title -->
                            <a href="#!" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2000">
                                <span class="circle bg-info">2</span>
                                <span class="label">Second step</span>
                            </a>

                            <!-- Section Description -->
                            <div class="step-content lighten-3" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2000">
                                <div class="card mb-3" style="max-width: 540px;">
                                    <div class="row no-gutters">

                                        <div class="col-md-8">
                                            <div class="card-body">
                                                <h5 class="card-title">Complete Profile</h5>
                                                <p class="card-text">
                                                    in the dashborad; investor
                                                    specifies investment criteria.

                                                </p>
                                                <p class="card-text"><small class="text-muted">Last updated 3 mins
                                                        ago</small></p>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <img src="https://cdn.lowgif.com/full/777a836b1a480627-.gif" class="card-img" alt="...">
                                            <h3 class="text-center" style="color:#05c9ff">Complete</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <!-- Third Step -->
                        <li class="">
                            <!--Section Title -->
                            <a href="#!" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2000">
                                <span class="circle bg-warning">3</span>
                                <span class="label">Third step</span>
                            </a>

                            <!-- Section Description -->
                            <div class="step-content lighten-3" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2000">
                                <div class="card mb-3" style="max-width: 540px;">
                                    <div class="row no-gutters">

                                        <div class="col-md-4">
                                            <img src="https://icon-library.com/images/waiting-icon-gif/waiting-icon-gif-29.jpg" class="card-img" alt="..." style="padding:30px">
                                            <h3 class="text-center" style="color:#05c9ff">Wait</h3>
                                        </div>

                                        <div class="col-md-8">
                                            <div class="card-body">
                                                <h5 class="card-title">Revision of Profile</h5>
                                                <p class="card-text">
                                                    we deeply review your submited application and profile, to grt well
                                                    how you want to suppport rntrepreneur and who meets yout support
                                                    criteria.
                                                </p>
                                                <p class="card-text"><small class="text-muted">Last updated 3 mins
                                                        ago</small></p>
                                            </div>
                                        </div>


                                    </div>
                                </div>
                            </div>
                        </li>

                        <!-- Fourth Step -->
                        <li class="">
                            <!--Section Title -->
                            <a href="#!" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2000">
                                <span class="circle bg-success">4</span>
                                <span class="label">Fourth step</span>
                            </a>

                            <!-- Section Description -->
                            <div class="step-content lighten-3" data-aos="fade-right" data-aos-easing="ease-in-sine" data-aos-duration="2000">
                                <div class="card mb-3" style="max-width: 540px;">
                                    <div class="row no-gutters">

                                        <div class="col-md-8">
                                            <div class="card-body">
                                                <h5 class="card-title">Matching</h5>
                                                <p class="card-text">
                                                    According to investment criteria and investment nature we match them
                                                    with enterpreneurs.
                                                </p>
                                                <p class="card-text"><small class="text-muted">Last updated 3 mins
                                                        ago</small></p>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <img src="https://icon-library.com/images/match-icon/match-icon-3.jpg" class="card-img" alt="..." style="padding:20px">
                                            <h3 class="text-center" style="color:#05c9ff">Match</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <!-- /.Stepers Wrapper -->

                </div>
            </div>
        </div>
        <div class="col-sm-4">
            {{-- <div class="row">
                    <div class="col-md-4 mx-auto p-0"> --}}
            <div class="card">
                <div class="login-box">
                    <div class="login-snip"> <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab"> <a href="/login">Login</a> </label> <input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab"><a href="/register">Sign Up</a></label>
                        <div class="login-space">
                            {{--  --}}
                        </div>
                    </div>
                </div>
            </div>
            {{-- </div>
                </div> --}}
        </div>
    </div>



</div>


@endsection
