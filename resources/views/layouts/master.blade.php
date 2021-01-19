<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- <link rel="stylesheet" type="text/css" href="{{ asset('assets/master.css') }}"> --}}
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <title>@yield('title')</title>
    <style>
    .navbar-custom {
    width: 100%;
    background-color: #F3F9FD;
    }
    .navbar-custom .navbar-brand,
    .navbar-custom .navbar-text {
        color: #051923;
    }
    a {
        color: #051923;'
    }
    body {
        color: #051923;
    }
    .navbar-toggle {
        /* (80px - button height 34px) / 2 = 23px */
        margin-top: 23px;
        padding: 9px 10px !important;
    }
    table{
        border-collapse: separate;
        border-spacing:70px 30px;
    }
    .buttonCreate{
        background-color: #003554;
    }
    body,th{
        color:  #003554;
    }
    th, td, .card-header{
        text-align: center;
    }
    .card-header{
        background-color: #F3F9FD;
        font-weight: bold;
        font-size: 20px;
    }
    </style>
</head>
<body>
<ul class="navbar nabvar-custom mr-auto">
    <nav class="navbar navbar-custom navbar-expand-lg">
    <a class="navbar-brand" href="/">
          <img src=logoFlowAndGo.png alt="logo">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
            </ul>
             <!-- Right Side Of Navbar -->
             <ul class="navbar-nav ml-auto">
             
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif
                            
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                        <li class="nav-item">
            <a class="nav-link" href="/offers/create">Create offer</a>
            </li>
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="/home">Your account </a>

                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                   
            
                                </div>
                            </li>
                        @endguest
                    </ul>
            </div>
        
        </ul>
    </div>
    </nav>
    @yield('content')    
</body>
</html>
