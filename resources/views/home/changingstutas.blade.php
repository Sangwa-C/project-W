

@extends('layouts.dash')

@section('dashboard')



    <div class="container">
        <div class="card justify-content-center">
            <h4 class="text-center jumbotron" ><strong>Change user status</strong></h4> <br>
            <div class="row">

                <div class="col-md-2" style="margin: 2%">


                </div>
                <div class="col-md-8">
                    <form action="/changingstatus" method="post" accept-charset="utf-8"
                        enctype="multipart/form-data">
                        @csrf
                        @foreach ($userinfo as $item)
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
                                <input type="text" readonly name="Pnbr" id="Pnbr" class="form-control" placeholder="250 700 000 000"
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
                                <input type="text" readonly name="Pnbr" id="Pnbr" class="form-control" placeholder="250 700 000 000"
                                    value="{{ $item->email }}">
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
                                <select name="user_type" id="" class="form-control" >
                                    <option value="" disabled selected  >choose user type</option>
                                    <option value="{{ $item->user_type }}" class="btn-success" >{{ $item->user_type }} <sup style="color:blue">current</sup> </option>
                                    <option value="investor">Investor</option>
                                    <option value="enterpreneur">Enterpreneur</option>
                                    <option value="admin">admin</option>
                                </select>
                                <input type="hidden" name="id" value="{{ $item->id }}">
                            </div>

                        </div>


                        @endforeach


                        <button class="btn btn-primary" type="submit">Submit form</button>
                    </form>
                </div>
                <div class="col-md-2" style="margin: 2%">


                </div>

            </div>
        </div>

    </div>
@endsection
