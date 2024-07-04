<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('page-title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&display=swap" rel="stylesheet"></body>
</head>
<body>
    <div class="container-fluid ">
        <div class="row border-bottom mb-2">
            <div class="col">
                @if (Auth::check())
                
                
                <nav class="navbar mb-3">
                    <div class="container-fluid">
                        <a href="#" class="navbar-brand text-start ">
                            <img src="../images/logo.png" alt="UniqHire Logo" style="height:5rem;">
                        </a>
                        @if (Auth::user()->hasRole('Admin'))
                            <a href="{{ route('admin-dash') }}">Dashboard</a>
                        @endif
                        <div class="fs-6 dropdown">
                            <span class="fs-5" style="font-weight: bold; padding-right: 1rem;">
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
        </div>
        <div class="row">
            <div class="col">
                @if(!Auth::check())
                    @yield('auth-content')
                @else
                    @yield('page-content')
                @endif
            </div>
        </div>
        
    </div>
</body>
<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script> -->

<style>
    * {
        font-family: 'DM Sans', sans-serif;
        font-size: 1.1rem;
        color: #373737;
    }

    .default-text {
        color: #373737;
    }

    .accent-text {
        color: #04B000;
    }

    .error-msg {
        color: #FF0000;
        font-style: italic;
        font-size: 1rem;
    }

    .bg-text {
        background-color: #04B000;
        color: #ffff;
    }

    body {
        background-color: #F2F1EE;
        
    }

    /* .body-container {
        margin: 0;
        padding: 0;
    } */
</style>
</html>

