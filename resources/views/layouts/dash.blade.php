<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Dashboard</title>
    <link rel="stylesheet" href="{{ url('assets\css\bootstrap.css') }}">
    <link rel="stylesheet" href="{{ url('assets\css\dash.css') }}">
    <script src="{{ url('assets\js\dash.js') }}"></script>
</head>
<body>
    <div class="wrapper">
        <!-- Sidebar Holder -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <h3><a href="/home">Dashboard</a> </h3>
            </div>

            <ul class="list-unstyled components">
              <a href="/home"> <p>Dashboard</p></a>

                <li>

                    <a href="#profileInfo" data-toggle="collapse" aria-expanded="false"
                        class="dropdown-toggle">Profile</a>
                        <ul class="collapse list-unstyled" id="profileInfo">
                            <li>
                                <a href="/profile">Personal information </a>
                            </li>
                            <li>
                                <a href="/personCause">Business idea</a>
                            </li>
                        </ul>
                        <a href="#">Notification</a> {{-- both ent & inv --}}
                        <a href="#">Chat With us</a> {{-- both ent & inv &  admin to answer --}}

                        @if (Auth::user()->user_type =="admin" || Auth::user()->user_type =="SuperAdmin" )

                        <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle ">Users In the system</a>
                            <ul class="collapse list-unstyled" id="pageSubmenu">
                                @if (Auth::user()->user_type =="SuperAdmin"  )
                                <li>
                                    <a href="/allUsers">Admin Users</a> {{-- Admin--}}
                                </li>
                                @endif
                                <li>
                                    <a href="/Investors">Investors</a> {{-- Admin--}}
                                </li>
                                <li>
                                    <a href="/Enterprenuer">Enterprenuer</a> {{-- Admin--}}
                                </li>
                            </ul>

                            <a href="#Request" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle ">Request</a>
                            <ul class="collapse list-unstyled" id="Request">
                                <li>
                                    <a href="/InvestoresRequest">Investores Request</a> {{-- Admin--}}
                                </li>
                                <li>
                                    <a href="/EnterprenuerRequest">Enterprenuer Request</a> {{-- Admin--}}
                                </li>
                                <li>
                                    <a href="#">Aprove user</a> {{-- super admin --}}
                                </li>
                            </ul>

                    @endif

                </li>
            </ul>


        </nav>

        <!-- Page Content Holder -->
        <div id="content">

            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">
                    @if (\Session::has('errormessage'))
                    <div class="alert alert-danger">
                        <ul>
                            <li>{!! \Session::get('errormessage') !!}   &#128512;  &copy; Three time you will be blocked </li>
                        </ul>
                    </div>
                @endif
                    <button type="button" id="sidebarCollapse" class="navbar-btn">
                        <span></span>
                        <span></span>
                        <span></span>
                    </button>
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

                            {{ Auth::user()->name }}
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="#">Enter View</a>
                            <a class="dropdown-item" href="#">Investor View</a>
                            <a class="dropdown-item" href="#">Admin View</a>
                            <hr>
                            <a class="dropdown-item" href="{{ route('logout') }}" data-toggle="modal"
                            data-target="#logoutModal">Logout</a>

                        </div>
                    </div>


                </div>
            </nav>


            <main class="py-4">
                @yield('dashboard')
            </main>


        </div>
    </div>

    {{-- logoutModal --}}
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <a class="btn btn-primary" href="{{ route('logout') }}" onclick="event.preventDefault();
                      document.getElementById('logout-form').submit();"> Logout</a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js"
    integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous">
</script>
<script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js"
    integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous">
</script>

    <script type="text/javascript">
        $(document).ready(function() {
            $('#sidebarCollapse').on('click', function() {
                $('#sidebar').toggleClass('active');
                $(this).toggleClass('active');
            });
        });

    </script>
</body>

</html>
