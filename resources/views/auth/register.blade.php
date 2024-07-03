@extends('layout')

@section('page-title', 'UniqHire Login')

@section('page-content')
<div class="container vh-100">
    <div class="row" style="padding-top:3rem;">
        <div class="col">
            <div class="text-start" style="font-size: 2rem; font-weight:bold;">
                <a href="" class="m-1"><svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24" style="fill: rgba(4, 176, 0, 1);transform: ;msFilter:;"><path d="M21 11H6.414l5.293-5.293-1.414-1.414L2.586 12l7.707 7.707 1.414-1.414L6.414 13H21z"></path></svg></a>
                Create an Account.
                
            </div>
           
        </div>
        <div class="col">
        <div class="text-end">
                <img src="../images/logo.png" alt="UniqHire Logo" style="height: 3.7rem;">
            </div>
        </div>
        <hr class="mb-4">
        <form action="">
            <div class="row">
                <div class="col">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="floatingInput" placeholder="First Name">
                        <label for="floatingInput">First Name</label>
                    </div>
                </div>
                <div class="col">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="floatingInput" placeholder="Last Name">
                        <label for="floatingInput">Last Name</label>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="form-floating mb-3">
                        <input type="email" class="form-control" id="floatingInput" placeholder="Email Address">
                        <label for="floatingInput">Email Address</label>
                    </div>
                </div>
                <div class="col">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="floatingInput" placeholder="Contact Number">
                        <label for="floatingInput">Contact Number</label>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="form-floating mb-3">
                        <input type="password" class="form-control" id="floatingInput" placeholder="Password">
                        <label for="floatingInput">Password</label>
                    </div>
                </div>
                <div class="col">
                    <div class="form-floating mb-3">
                        <input type="password" class="form-control" id="floatingInput" placeholder="Confirm Password">
                        <label for="floatingInput">Confirm Password</label>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="form-floating mb-3">
                        <input type="password" class="form-control" id="floatingInput" placeholder="City">
                        <label for="floatingInput">City</label>
                    </div>
                </div>
                <div class="col">
                    <div class="form-floating mb-3">
                        <input type="password" class="form-control" id="floatingInput" placeholder="State">
                        <label for="floatingInput">State</label>
                    </div>
                </div>
                <div class="col">
                    <div class="form-floating mb-3">
                    <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
                            <option selected>Arm Amputee</option>
                            <option value="1">Leg Amputee</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                        <label for="floatingSelect">Disability</label>
                    </div>
                </div>
            </div>
            <div class="row mb-4">
                <div class="col">
                    <!-- <div class="form-floating mb-3"> -->
                    <!-- <label for="formFile" class="form-label">Default file input example</label> -->
                     <span>
                     PWD Card
                     <input class="form-control" type="file" id="formFile">
                     </span>
                    
                    <!-- </div> -->
                </div>
            </div>
            <div class="d-flex justify-content-center align-items-center mb-3">
                <button type="reset" class="m-2 border-0 bg-transparent" style="font-weight:bold; width: 10rem; padding: 1rem;">
                    Clear
                </button>
                <button type="submit" class="m-2 border-0 bg-text" style="font-weight:bold; height:3.5rem; width: 10rem;">
                    Register
                </button>
            </div>
            <div class="text-center">
                <hr class="mb-4" style="width: 30rem; margin:0 auto;">
                <span>
                    Already have an account? <a href="{{ route('login-page') }}" class="fs-5 link-underline link-underline-opacity-0">Login.</a>
                </span>
            </div>
        </form>
    </div>
</div>
@endsection