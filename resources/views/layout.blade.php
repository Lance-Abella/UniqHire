<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UniqHire | @yield('page-title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link rel="stylesheet" href="{{ asset('css/css-grid-layout.css') }}">
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
                    @if (Auth::user()->hasRole('Admin'))
                    <li><a href="{{route('pwd-list')}}">
                        <i class='bx bx-handicap side-icon'></i>
                        <span class="side-title">PWDs</span>
                    </a></li>
                    @endif

                    @if (Auth::user()->hasRole('Trainer'))
                      <li><a href="{{route('programs-manage')}}">
                              <i class='bx bxs-school side-icon'></i>
                              <span class="side-title">Training Programs</span>
                          </a></li>

                      @if (Auth::user()->hasRole('Admin'))
                      <li><a href="{{route('trainer-list')}}">
                          <i class='bx bxs-school side-icon'></i>
                          <span class="side-title">Trainers</span>
                      </a></li>

                      @endif
                    <li><a href="#">
                        <i class='bx bx-briefcase-alt-2 side-icon'></i>
                    <span class="side-title">Employer</span>
                    </a></li>
                    <li><a href="#"><i class='bx bx-cog side-icon'></i><span class="side-title">Sponsor</span></a></li>
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

                            <li class="logo-container"><a href="#"><img class="logo-small" src="{{ asset('images/logo.png') }}" alt=""></a></li>           
                            <li class="nav-item"><a href="{{ route('pwd-homepage') }}">Browse Training Programs</a></li>
                            <li class="nav-item"><a href="">Find Work</a></li>
                            @endif

                            <li class="nav-item"><a href="#">About</a></li>
                        
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

=======
        </div>  
        </div>
        @else
        <div class="container-fluid">
            @yield('auth-content')
        </div>
        
        @endif

        
    </div>
    <!-- <header>
        <a href="#"><img class="logo-small" src="{{ asset('images/logo.png') }}" alt=""></a>
        <nav class="">
            
            <ul class="navbar nav-container">
                <li class="nav-item">
                    <a href="#">hello</a>
                </li>
                <li class="nav-item">
                    <a href="#">hello</a>
                </li>
                <li class="nav-item">
                    <a href="#">hello</a>
                </li>
                <li class="nav-item">
                    <a href="#">hello</a>
                </li>
            </ul>
        </nav>
    </header> -->
    <!-- <div class="content-container">
        <div class="row">
            <div class="d-flex flex-column">
                <div class="row">
                    @if (Auth::check())
                    <nav class="navbar border-bottom">
                        <div class="container-fluid">
                            <a href="#" class="navbar-brand text-start">
                                <img src="{{ asset('images/logo.png') }}" alt="UniqHire Logo" class="logo-small">
                            </a>
                            <div class="fs-6">
                                <a href="" class="notif-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24" style="fill: rgba(4, 176, 0, 1);"><path d="M20 3H4c-1.103 0-2 .897-2 2v14a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V5c0-1.103-.897-2-2-2zm-1 9h-3.142c-.446 1.722-1.997 3-3.858 3s-3.412-1.278-3.858-3H4V5h16v7h-1z"></path></svg>
                                </a>
                                <span class="fs-5 user-index">
                                    {{ Auth::user()->userInfo->firstname . ' ' . Auth::user()->userInfo->lastname }}
                                </span>
                                <a class="dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"></a>
                                <ul class="dropdown-menu dropdown-menu-end">
                                    <li>@include('slugs.logout')</li>
                                </ul>
                            </div>
                        </div>
                    </nav>
                    @endif
                </div>
            
                <div class="">
                    <nav class="side-bar">
                        <ul>
                            <li>
                                <a href="#">
                                    <svg class="icon-svg" xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24" style="fill: rgba(55, 55, 55, 1);">
                                        <path d="M12 2A10.13 10.13 0 0 0 2 12a10 10 0 0 0 4 7.92V20h.1a9.7 9.7 0 0 0 11.8 0h.1v-.08A10 10 0 0 0 22 12 10.13 10.13 0 0 0 12 2zM8.07 18.93A3 3 0 0 1 11 16.57h2a3 3 0 0 1 2.93 2.36 7.75 7.75 0 0 1-7.86 0zm9.54-1.29A5 5 0 0 0 13 14.57h-2a5 5 0 0 0-4.61 3.07A8 8 0 0 1 4 12a8.1 8.1 0 0 1 8-8 8.1 8.1 0 0 1 8 8 8 8 0 0 1-2.39 5.64z"></path>
                                        <path d="M12 6a3.91 3.91 0 0 0-4 4 3.91 3.91 0 0 0 4 4 3.91 3.91 0 0 0 4-4 3.91 3.91 0 0 0-4-4zm0 6a1.91 1.91 0 0 1-2-2 1.91 1.91 0 0 1 2-2 1.91 1.91 0 0 1 2 2 1.91 1.91 0 0 1-2 2z"></path>
                                    </svg>
                                    <span class="nav-item">Profile</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <svg class="icon-svg" xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24" style="fill: rgba(55, 55, 55, 1);">
                                        <path d="M21 10h-2V4h1V2H4v2h1v6H3a1 1 0 0 0-1 1v9h20v-9a1 1 0 0 0-1-1zm-7 8v-4h-4v4H7V4h10v14h-3z"></path>
                                        <path d="M9 6h2v2H9zm4 0h2v2h-2zm-4 4h2v2H9zm4 0h2v2h-2z"></path>
                                    </svg>
                                    <span class="nav-item">Trainings</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <svg class="icon-svg" xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24" style="fill: rgba(55, 55, 55, 1);">
                                        <path d="M20 6h-3V4c0-1.103-.897-2-2-2H9c-1.103 0-2 .897-2 2v2H4c-1.103 0-2 .897-2 2v11c0 1.103.897 2 2 2h16c1.103 0 2-.897 2-2V8c0-1.103-.897-2-2-2zm-5-2v2H9V4h6zM8 8h12v3H4V8h4zM4 19v-6h6v2h4v-2h6l.001 6H4z"></path>
                                    </svg>
                                    <span class="nav-item">Companies</span>
                                </a>
                            </li>
                            <li class="logout-btn">
                                <a href="#">
                                    <svg class="icon-svg" xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24" style="fill: rgba(55, 55, 55, 1);">
                                        <path d="m2 12 5 4v-3h9v-2H7V8z"></path><path d="M13.001 2.999a8.938 8.938 0 0 0-6.364 2.637L8.051 7.05c1.322-1.322 3.08-2.051 4.95-2.051s3.628.729 4.95 2.051 2.051 3.08 2.051 4.95-.729 3.628-2.051 4.95-3.08 2.051-4.95 2.051-3.628-.729-4.95-2.051l-1.414 1.414c1.699 1.7 3.959 2.637 6.364 2.637s4.665-.937 6.364-2.637c1.7-1.699 2.637-3.959 2.637-6.364s-.937-4.665-2.637-6.364a8.938 8.938 0 0 0-6.364-2.637z"></path>
                                    </svg>
                                    <span class="nav-item">Logout</span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                    <div class="container-fluid">
                        @yield('page-content')
                    </div>
                </div>
            </div>
        </div>
    </div> -->
</body>
</html>
