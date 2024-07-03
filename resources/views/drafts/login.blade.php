@extends('layout')

@section('page-title', 'UniqHire Login')

@section('page-content')
<div class="container-fluid vh-100">
    <div class="row">
        <div class="col-1"></div>
        <div class="col vh-100" >
            <div class="row" style="margin-top: 5rem;">
                <div class="row mb-5">
                    <div class="col-2"></div>
                    <div class="col-2"></div>
                    <div class="col">
                        <img src="../images/logo.png" alt="UniqHire Logo" style="height: 8rem;">
                    </div>
                    <div class="col-2"></div>
                    <div class="col-2"></div>
                </div>
                <div class="row">
                    <form action="" style="padding:2rem;">
                        <div class="fs-2 mb-2" style="font-weight:bold;">
                            Sign In.
                        </div>
                        <div class="mb-4">
                            <span class="fs-5 ">Don't have an account? <a href="{{ route('register-form') }}" class="fs-5 link-underline link-underline-opacity-0">Create an account.</a></span>
                        </div>
                        <div class="mb-3">
                            <div class="form-floating mb-3">
                                <input type="email" class="form-control" id="floatingInput" placeholder="Email">
                                <label for="floatingInput">Email Address</label>
                            </div>
                            <div class="form-floating">
                                <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                                <label for="floatingPassword">Password</label>
                            </div>
                        </div>
                        <div class="row mb-4" style="padding-left:15px; padding-right:4px;">
                            <div class="form-check col">
                                <input class="form-check-input" type="checkbox" value="" id="rememberMe">
                                <label class="form-check-label" for="rememberMe">
                                    Remember Me
                                </label>
                                <!-- <a href="" class="link-underline link-underline-opacity-0 text-end">Forget Password?</a> -->
                            </div>
                            <div class="col text-end">
                                <a href="" class="link-underline link-underline-opacity-0">Forget Password?</a>
                            </div>
                        </div>
                        <div class="d-flex justify-content-center">
                            <button class="bg-text fs-5 border-0" style="font-weight:bold; padding:1rem; width:100%;">Sign In</button>
                        </div>
                    </form>
                </div>
            </div>
            
        </div>
        <div class="col-6 vh-100" style="background-image: url(../images/side-img1.png); background-repeat: no-repeat; background-position: right; background-size: cover; clip-path: polygon(100% 100%, 2% 100%, 22% 0, 100% 0);">

        </div>
    </div>
</div>
@endsection

