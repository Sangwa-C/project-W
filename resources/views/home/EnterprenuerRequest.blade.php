@extends('layouts.dash')
@section('dashboard')
<div class="container">
    <div class="container-fluid">
        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Enterprenuer who Request to Help</h1>
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-he  ader py-3">
                <h6 class="m-0 font-weight-bold">Investors</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>NAME</th>
                                <th>PROJECT</th>
                                <th>CATEGORY</th>
                                <th>IMAGE</th>
                                <th>SUPPORT</th>
                                <th>TEAM</th>
                                <th>Discription</th>
                                <th> Action </th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($userinfo as $user)

                            <tr>
                                <td>
                                    @foreach ($user['users'] as $usersKey=>$users)
                                    {{$users->name}}
                                    @endforeach
                                </td>
                                <td>{{ $user->pjt_name }}</td>
                                <td> @foreach ($user['sectors'] as
                                    $sectorsKey=>$sectors){{$sectors->sectorName}}@endforeach</td>
                                <td>
                                    @if ($user->areYourRegistred == "yes")
                                    <img src="public/image/registrationImagesProofs/{{ $user->registrationProof }}" alt="" width="25px" height="25px">

                                    @else
                                    <Span class="btn-danger">NO</Span>
                                    @endif
                                </td>
                                <td>{{ $user->support }}</td>
                                <td>
                                    @if ($user->havingATeam =="iDoNot")
                                    <span>Not Team</span>
                                    @else
                                    <span>{{ $user->teamContacts }}</span><br>
                                    <span>{{ $user->position }}</span>
                                    @endif
                                </td>

                                <td>
                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#e{{ $user->id }}">
                                        Discription
                                    </button>
                                    <!-- Modal -->
                                    <div class="modal fade" id="e{{ $user->id }}" tabindex="-1" role="dialog"
                                        style="left:2px !important " aria-labelledby="exampleModalLongTitle"
                                        aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLongTitle">Discription</h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    {{ $user->pjt_desc }}
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-dismiss="modal">Close</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td> <a href="changingstutas/{{ $user->userId }}">
                                    @foreach ($user['users'] as $usersKey=>$users)
                                    {{$users->name}}
                                    @endforeach
                                    </a>
                                </td>
                            </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>
</div>

@endsection
