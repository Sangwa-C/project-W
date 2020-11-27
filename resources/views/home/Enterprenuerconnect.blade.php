

@extends('layouts.dash')

@section('dashboard')



    <div class="container">
        <div class="card justify-content-center">
            <h4 class="text-center jumbotron" ><strong>Change user status</strong></h4> <br>
            <div class="row">

                <div class="col-md-2" style="margin: 2%">


                </div>
                <div class="col-md-8">
                    <form action="/connectnow" method="post" accept-charset="utf-8"
                        enctype="multipart/form-data">
                        @csrf
                        @foreach ($user as $item)
                        <div class="form-row">
                            <div class="col-md-12 mb-3">
                                <label for="name">
                                    <h5>Name</h5>
                                </label>
                                <input type="text" readonly id="name" class="form-control" placeholder="Full Names"
                                    value="{{ $item->name }}">
                                <div class="valid-tooltip">
                                    Looks good!
                                </div>
                            </div>

                        </div>
                        <div class="form-row">
                            <div class="col-md-12 mb-3">
                                <label for="name">
                                    <h5>Phone Number</h5>
                                </label>
                                <input type="text" readonly  id="Pnbr" class="form-control" placeholder="250 700 000 000"
                                    value="{{ $item->Pnbr }}">
                                <div class="valid-tooltip">
                                    Looks good!
                                </div>
                            </div>

                        </div>
                        <div class="form-row">
                            <div class="col-md-12 mb-3">
                                <label for="name">
                                    <h5>Email</h5>
                                </label>
                                <input type="text" readonly  id="Pnbr" class="form-control" placeholder="bazimyas@gmail.com"
                                    value="{{ $item->email }}">
                                <div class="valid-tooltip">
                                    Looks good!
                                </div>
                            </div>
                            <input type="hidden" name="id" value="{{ $item->id }}">

                        </div>
                        @endforeach
                        <div class="form-row">
                            <div class="col-md-6 mb-3">
                                <label for="name">
                                    <h5>Avoilable investors</h5><br><hr>
                                </label>
                                @foreach ($investors as $item)

                                <div class="row">
                                    <div class="col.lg.2"> <input type="checkbox" id="myCheck" name="my_checkbox[]" value="{{ $item->id}}"></div>
                                    <div class="col-md-10"><p>{{ $item->bns_email }}</p></div>
                                    <input type="hidden" name="sector" value="{{ $item->sector }}">
                                </div>

                            @endforeach


                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="name">
                                    <h5>Connected to this envestors</h5><br><hr>
                                </label>

                                @foreach ($conn as $item)
                                <div class="row">
                                    <div class="col-md-10"><p class="btn btn-success">{{ $item->bns_email }}</p></div>
                                </div>
                            @endforeach
                            </div>

                        </div>


                        </div>

                        </div>
                        <button class="btn btn-primary" type="submit">Submit form</button>
                    </form>
                </div>
                <div class="col-md-2" style="margin: 2%">


                </div>

            </div>
        </div>

    </div>
@endsection
