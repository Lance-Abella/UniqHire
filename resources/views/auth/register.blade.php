@extends('layout')

@section('page-title', 'UniqHire|Create Account')

@section('auth-content')
<div class="container vh-100">
    <div class="row" style="padding-top:3rem;">
        <div class="col">
            <div class="text-start header-texts">
                <a href="{{ route('login-page') }}" class="m-1"><svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24" style="fill: rgba(4, 176, 0, 1);"><path d="M21 11H6.414l5.293-5.293-1.414-1.414L2.586 12l7.707 7.707 1.414-1.414L6.414 13H21z"></path></svg></a>
                Create an Account.
            </div>
        </div>
        <!-- <div class="col-2">
            <div class="text-center">
                <img src="../images/logo.png" alt="UniqHire Logo" style="height: 3.7rem;">
            </div>
        </div> -->
        <div class="col ">
            <div class="row">
                <div class="col d-flex align-items-center justify-content-end">
                    <label for="registerAs">Register As:</label>
                </div>
                <div class="col">
                    <select class="form-select form-select" name="roles" id="roles" aria-label="Small select example" onchange="togglePWDSection()">
                        @foreach ($roles as $role)
                            @if ($role->role_name !== 'Admin')
                                <option value="{{ $role->id }}">{{ $role->role_name }}</option>
                            @endif
                        @endforeach
                    </select>
                </div>
                        
            </div>
        </div>
        <hr class="mb-4">
        <form method="POST" action="{{ route('register-form') }}" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="floatingInput" name="firstname" value="{{ old('firstname') }}" required placeholder="First Name">
                        <label for="floatingInput">First Name</label>
                        @error('firstname')
                            <span class="error-msg">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="col">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="floatingInput" name="lastname" value="{{ old('lastname') }}" required placeholder="Last Name">
                        <label for="floatingInput">Last Name</label>
                        @error('lastname')
                            <span class="error-msg">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="form-floating mb-3">
                        <input type="email" class="form-control" id="floatingInput" name="email" placeholder="Email Address">
                        <label for="floatingInput">Email Address</label>
                        @error('email')
                            <span class="error-msg">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col">
                            <input type="checkbox" name="generate_email" id="generate_email" class="form-check-input border border-dark">
                            <label for="generate_email" class="form-check-label">Generate Email Address</label>
                        </div>
                </div>
                <div class="col">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="floatingInput" name="contactnumber" value="{{ old('contactnumber') }}" required placeholder="Contact Number">
                        <label for="floatingInput">Contact Number</label>
                        @error('contactnumber')
                            <span class="error-msg">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="form-floating mb-3">
                        <input type="password" class="form-control" id="floatingPassword" name="password" required placeholder="Password">
                        <label for="floatingPassword">Password</label>
                        @error('password')
                            <span class="error-msg">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="col">
                    <div class="form-floating mb-3">
                        <input type="password" class="form-control" id="floatingInput" name="password_confirmation" required placeholder="Confirm Password">
                        <label for="floatingPassword">Confirm Password</label>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="floatingInput" name="city" value="{{ old('city') }}" required placeholder="City">
                        <label for="floatingInput">City</label>
                        @error('city')
                            <span class="error-msg">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="col">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="floatingInput" name="state" value="{{ old('state') }}" required placeholder="State">
                        <label for="floatingInput">State</label>
                        @error('state')
                            <span class="error-msg">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="col" id="disability-section">
                    <div class="form-floating mb-3">
                        <select class="form-select" id="floatingSelect" name="disability" aria-label="Floating label select example">
                            @foreach ($disabilities as $disability)
                                <option value="{{ $disability->id }}">{{ $disability->disability_name }}</option>
                            @endforeach
                            
                        </select>
                        <label for="floatingSelect">Disability</label>
                    </div>
                </div>
            </div>
            <div class="row mb-4" id="pwd-section">
                <div class="col">
                     <span>
                     PWD Card
                     <input class="form-control" type="file" id="formFile">
                     </span>
                </div>
            </div>
            <div class="d-flex justify-content-center align-items-center mb-3">
                <button type="reset" class="m-2 border-0 bg-transparent clear-btn">
                    Clear
                </button>
                <button type="submit" class="m-2 border-0 bg-text" style="font-weight:bold; height:3.5rem; width: 10rem;">
                    Register
                </button>
            </div>
            <div class="text-center">
                <hr class="mb-4" style="width: 30rem; margin:0 auto;">
                <span>
                    Already have an account? <a href="{{ route('login-page') }}" class="fs-5 link-underline link-underline-opacity-0 accent-text bold-texts">Login.</a>
                </span>
            </div>
        </form>
    </div>
</div>

@endsection

<script>
    function togglePWDSection() {
        var roleSelect = document.getElementById('roles');
        var pwdSection = document.getElementById('pwd-section');
        var disabilitySection = document.getElementById('disability-section');

        if (roleSelect.value === 'PWD') {
            pwdSection.style.display = 'block';
            disabilitySection.style.display = 'block';
        } else {
            pwdSection.style.display = 'none';
            disabilitySection.style.display = 'none';
        }
    }
</script>