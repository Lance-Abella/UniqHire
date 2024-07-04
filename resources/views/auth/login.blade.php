@extends('layout')

@section('page-title', 'UniqHire Login')

@section('page-content')
<div class="container-fluid vh-100 d-flex justify-content-center align-items-center">
    <div class="row bg-white login-container">
        <div class="col left login-form">
            <div class="row mb-5">
                <div class="col-3"></div>
                <div class="col">
                    <img src="../images/logo.png" alt="UniqHire Logo" class="logo-big">
                </div>
                <div class="col-3"></div>
            </div>
            <div class="mb-2 header-texts">
                Sign In.
            </div>
            <div class="mb-4">
                <span class="fs-5 ">Don't have an account? <a href="{{ route('register-form') }}" class="fs-5 link-underline link-underline-opacity-0 accent-text bold-texts">Create an account.</a></span>
            </div>
            <form action="{{ route('login-page') }}" method="POST">
                @csrf
                <div class="form-floating mb-3">
                    <input type="email" class="form-control" id="floatingInput" name="email" placeholder="Email">
                    <label for="floatingInput">Email Address</label>
                    @error('email')
                        <span class="error-msg">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-floating mb-2">
                    <input type="password" class="form-control" id="floatingPassword" name="password" placeholder="Password">
                    <label for="floatingPassword">Password</label>
                    @error('password')
                        <span class="error-msg">{{ $message }}</span>
                    @enderror
                </div>
                <div class="row mb-4">
                    <div class="col">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="rememberMe">
                            <label class="form-check-label" for="rememberMe">
                                Remember Me
                            </label>
                        </div>
                    </div>
                    <div class="col text-end">
                        <a href="" class="link-underline link-underline-opacity-0 accent-text">Forget Password?</a>
                    </div>
                </div>
                <div class="">
                    <button class="bg-text fs-5 border-0" style="font-weight:bold; height:3.5rem; width:100%;">Sign In</button>
                </div>
            </form>
        </div>
        <div class="col" style="border-top-right-radius:2rem; border-bottom-right-radius:2rem; background-image: url(../images/side-img1.png); background-repeat: no-repeat; background-position: right; background-size: cover; clip-path: polygon(100% 100%, 2% 100%, 22% 0, 100% 0);">

        </div>
    </div>
</div>
@endsection