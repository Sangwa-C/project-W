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

    <div class="container">


        <div class="container-fluid">

            <!-- Page Heading -->
            <h1 class="h3 mb-2 text-gray-800">User who are Investors</h1>


            <!-- DataTales Example -->
            <div class="card shadow mb-4">

                <div class="card-he  ader py-3">
                    <h6 class="m-0 font-weight-bold">Investors</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">


                        {{-- <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>{{ $investor->counrty }}/ <br> {{ $investor->city}} </td>
                            <td>{{ $investor->user_type }}</td>
                            <td>{{ $investor->prs_name }}/ <br> {{ $uinvestorser->prs_nbr }} </td>

                        </tr> --}}


                        @foreach ($investorInfo as $investor)
                        {{-- @if ( Auth::user()->user_type =="investor") --}}
                        <div class="card profile-card-5">
                            <div class="card-body pt-0">
{{--
                                <div class="row">
                                    <div class="col-sm-2">Name: </div>
                                    <div class="col-sm-9">{{ $investor->name }}</div>
                                </div> --}}

                                <div class="row">
                                    <div class="col-sm-2">Email: </div>
                                    <div class="col-sm-9">{{ $investor->bns_email }}</div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-2">Phone Number</div>
                                    <div class="col-sm-9">{{ $investor->bns_phn_number }}</div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-2">Address</div>
                                    <div class="col-sm-9">{{ $investor->legal_status }} </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-2"> Sector</div>
                                    <div class="col-sm-9">{{ $investor->sector }}</div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-2">Support</div>
                                    <div class="col-sm-9">{{ $investor->support }}</div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-2">Description</div>
                                    <div class="col-sm-9">{{ $investor->spt_desc }}</div>
                                </div>

                                <h5 class="card-title" style="float:right">
                                     @if (Auth::user()->user_type =="SuperAdmin")
                                   <a href="changingstutas/{{ $investor->id }}">{{ $investor->user_type }}</a>
                                    @endif</h5>


                            </div>
                        </div>
                        {{-- @endif --}}

                        @endforeach
                    </div>
                </div>

            </div>
        </div>
    </div>

@endsection
