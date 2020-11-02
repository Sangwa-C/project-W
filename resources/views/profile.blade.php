{{-- @extends('layouts.app')

@section('content')
<div class="container" style="margin-top:10%">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}

                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}

@extends('layouts.dash')

@section('dashboard')

    {{-- <style>
        #form1 {
            display: none;
        }

        #file-image {
            display: inline;
            margin: 0 auto .5rem auto;
            width: auto;
            height: auto;
            max-width: 180px;
        }

        #file-image.hidden {
            display: none;
        }

    </style>



    <div class="container" style="margin-top:8%">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card" id="question1">
                    <div class="card-header"> <strong>Is Your Business is registered?</strong> </div>

                    <div class="card-body">

                        <p>Select "Yes" below if you have a certificate issued by RDB authorizing you to work.</p>
                        <hr>
                        <div class="float-right">
                            <button class="btn btn-secondary" type="button" id="no">No</button>
                            <button class="btn btn-primary" type="button" id="yes">Yes</button>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <div id="form1">

            <div class="panel-heading">
                <h3 class="panel-title text-center">Ent profile</h3>
            </div>
            <hr>
            <div class="form-group">
                <label for="file-upload" id="file-drag">
                    <img id="file-image" src="#" alt="Preview" class="hidden">
                    <div id="start">
                        <div>Select a file or drag here</div>
                        <br>
                        <span class="text-danger">{{ $errors->first('event_image') }}</span>
                    </div>
                </label>
                <input id="file-upload" type="file" name="event_image" accept="image/*" onchange="readURL(this);">
            </div>

        </div>


        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

        <script>
            function readURL(input, id) {
                id = id || '#file-image';
                if (input.files & amp; & amp; input.files[0]) {
                    var reader = new FileReader();

                    reader.onload = function(e) {
                        $(id).attr('src', e.target.result);
                    };

                    reader.readAsDataURL(input.files[0]);
                    $('#file-image').removeClass('hidden');
                    $('#start').hide();
                }
            }

        </script>

    </div> --}}

<div class="container">
    <div class="row">
        <div class="card col-md-6" >
            <div class="card-title" style="margin-top: 4%"> <strong>Personal information</strong> </div>

            <div class="card-body">
                <div class="row">

                    @foreach ($userinfo as $info)


                        <div class="col-sm-4">
                            <div class="card" data-toggle="modal" data-target="#e{{ $userinfo->id }}">
                                <img class="card-img-top" src="public/image/eventsimages/{{ $event->event_image }}"
                                    alt="story's image" height="200px" width="500px">
                                <div class="card-body" style="border-style:solid;border-color: #9B9B9B;">
                                    <h5 class="card-title"> {{ $event->event_name }}</h5>
                                    <p class="card-title" style="color:#808080">{{ $event->short_desc }}</p>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <p class="card-text"> <span style="color: rgb(29, 151, 207)">Learn more <i
                                                        class="fa fa-arrow-circle-right" aria-hidden="true"></i></span> </p>

                                        </div>
                                        <div class="col-md-6">
                                            <p style="float: right">{{ $event->event_date }}</p>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <br>
                        </div>

                        <!-- Modal -->
                        <div class="portfolio-modal modal fade bd-example-modal-lg" id="e{{ $event->id }}" tabindex="-1"
                            role="dialog" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    {{-- <div class="close-modal" data-dismiss="modal"><img
                                            src="assets/img/close-icon.svg" alt="Close modal" style="width: 50px" />
                                    </div> --}}
                                    <div class="container">
                                        <div class="row justify-content-center">
                                            <div class="col-lg-8">
                                                <div class="modal-body">
                                                    <!-- Project Details Go Here-->
                                                    <img class="img-fluid d-block mx-auto"
                                                        src="public/image/eventsimages/{{ $event->event_image }}" height="300px"
                                                        width="600px" alt="event image" />

                                                    <br>
                                                    <h2 class="text-uppercase" style="font-size:15px">
                                                        {{ $event->event_name }}</h2>

                                                    <hr color="grey"><br><br>

                                                    <p>{{ $event->long_desc }}</p>


                                                    <p style="float: right">{{ $event->event_date }}</p>

                                                    <br><br>



                                                    <button class="btn btn-primary" data-dismiss="modal" type="button"><i
                                                            class="fa fa-times-circle" aria-hidden="true"></i>
                                                        Close Event</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>



                    @endforeach


                </div>
            </div>
        </div>
        <div class="col-sm-6">2</div>

    </div>
</div>
@endsection
