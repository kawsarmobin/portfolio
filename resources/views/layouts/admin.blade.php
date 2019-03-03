<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Portfolio') }}</title>
    <link rel="icon" type="image/png" href="{{ asset('images/frontEnd/title-icon.gif') }}">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('toastr/css/toastr.css') }}" rel="stylesheet"/>

    <style media="screen">
    .panel-body {
        padding-bottom: 0px;
    }
    .btn-group-sm>.btn, .btn-sm {
        padding: 2px 5px;
        font-size: 12px;
        line-height: 1.5;
        border-radius: 3px;
    }
    .h5, h5 {
        font-size: 14px;
        font-weight: bold;
        margin: 3px;
    }
    </style>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app.name', 'Laravel') }}
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @guest
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                                        Logout
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </li>
                            </ul>
                        </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>

    <div class="col-sm-3">
        <div class="panel panel-primary">
            <div class="panel-heading" style="margin-bottom:0px;">
                <h5>Menu</h5>
            </div>
            <div class="panel-body" style="padding-bottom:0px;">
                <div class="list-group">
                    <a class="list-group-item" href="{{ route('change-password.edit') }}">Account Setting</a>
                    @if (Auth::user()->isAdmin())
                        <a class="list-group-item" href="{{ route('user.create') }}">Create user</a>
                        <a class="list-group-item" href="{{ route('user.index') }}">All user</a>
                        <a class="list-group-item" href="{{ route('category.create') }}">Create category</a>
                        <a class="list-group-item" href="{{ route('category.index') }}">All category</a>
                        <a class="list-group-item" href="{{ route('project.create') }}">Create project</a>
                        <a class="list-group-item" href="{{ route('project.index') }}">All project</a>
                        <a class="list-group-item" href="{{ route('message.index') }}">Message</a>
                    @endif
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-9">

        @yield('content')

    </div>

</div>

<!-- Scripts -->
<script src="{{ asset('js/app.js') }}"></script>
<script src="{{ asset('toastr/js/toastr.js') }}"></script>
<script type="text/javascript">
@if (Session::has('success'))
toastr.success("{{Session::get('success')}}")
@endif
@if (Session::has('info'))
toastr.info("{{Session::get('info')}}")
@endif
</script>
</body>
</html>
