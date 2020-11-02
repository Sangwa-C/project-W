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

            </div>
        </div>
        <div class="col-sm-6">2</div>

    </div>
</div>
@endsection
