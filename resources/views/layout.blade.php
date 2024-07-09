<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UniqHire | @yield('page-title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link rel="icon" href="{{ asset('images/tab-icon.png') }}">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
    <div class="container-fluid">
        @if (Auth::check())
        <nav class="sidebar">
            <header class="">
                <div class="logo-sidebar">
                    <span class="logo-img">
                        <!-- <img src="{{ asset('images/tab-icon.png')}} " alt=""> -->
                        <i class='bx bx-menu side-icon'></i>
                    </span>
                    <div class="logo-name">
                        <!-- <span>UniqHire</span> -->
                    </div>
                </div>
            </header>
            <div class="sidebar-menu">
                <ul class="">
                    <li><a href="#">
                            <i class='bx bx-user-circle side-icon'></i>
                            <span class="side-title">Profile</span>
                        </a></li>
                    <!-- ADMIN ROLE ACCESS -->
                    @if (Auth::user()->hasRole('Admin'))
                    <li><a href="{{route('pwd-list')}}">
                            <i class='bx bx-handicap side-icon'></i>
                            <span class="side-title">PWDs</span>
                        </a></li>
                    <li><a href="{{route('trainer-list')}}">
                            <i class='bx bxs-school side-icon'></i>
                            <span class="side-title">Training Agencies</span>
                        </a></li>
                    <!-- <li><a href="#"><i class='bx bx-briefcase-alt-2 side-icon'></i><span class="side-title">Employers</span></a></li> -->
                    @endif
                    <!-- TRAINER ROLE ACCESS -->
                    @if (Auth::user()->hasRole('Trainer'))
                    <li><a href="{{route('programs-manage')}}">
                            <i class='bx bxs-school side-icon'></i>
                            <span class="side-title">Training Programs</span>
                        </a></li>
                    @endif

                    <!-- <li><a href="#"><i class='bx bx-cog side-icon'></i><span class="side-title">Sponsor</span></a></li> -->
                </ul>
                <div class="sidebar-bottom">
                    <li class=""><a href="{{ url('/logout')}}"><i class='bx bx-log-out-circle side-icon'></i><span class="side-title">Logout</span></a></li>
                </div>
            </div>


        </nav>
        <div class="container-fluid">
            <div class=" content-container">
                <nav class="navbar">
                    <div class="container-fluid border-bottom">
                        <ul class="d-flex align-items-center">
                            <li class="logo-container"><a href="#"><img class="logo-small" src="{{ asset('images/logo.png') }}" alt=""></a></li>
                            <li class="nav-item"><a href="{{route('home')}}">Home</a></li>
                            @if (Auth::user()->hasRole('PWD'))
                            <li class="nav-item"><a href="">Browse Training Programs</a></li>
                            <li class="nav-item"><a href="">Find Work</a></li>
                            @endif

                            <li class="nav-item"><a href="#about">About</a></li>
                            <li class="nav-item"><a href="#about">Contact Us</a></li>

                        </ul>
                        <ul class="d-flex align-items-center">
                            <li class="nav-item user-index"><span>{{ Auth::user()->userInfo->firstname  . " " .  Auth::user()->userInfo->lastname }}</span></li>
                        </ul>
                    </div>
                </nav>
            </div>
            <div class="content-container">
                @yield('page-content')
            </div>

        </div>
        @else
        <div class="container-fluid">
            @yield('auth-content')
        </div>

        @endif


    </div>
</body>

</html>