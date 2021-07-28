@extends('layouts.app')

@section('content')
<div class="register-login-section spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <div class="register-form">
                    <h2>Register</h2>
                    <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                        @csrf

                        {{-- First Name --}}
                        <div class="group-input">
                            <label for="Fname" >{{ __('First Name') }}</label>

                            <input id="Fname" type="text" class="form-control @error('Fname') is-invalid @enderror" name="Fname" value="{{ old('Fname') }}" required autocomplete="Fname" autofocus>

                            @error('Fname')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        {{-- Last Name --}}
                        <div class="group-input">
                            <label for="Lname" >{{ __('Last Name') }}</label>

                            <input id="Lname" type="text" class="form-control @error('Lname') is-invalid @enderror" name="Lname" value="{{ old('Lname') }}" required autocomplete="Lname" autofocus>

                            @error('Lname')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>


                        {{-- Email --}}
                        <div class="group-input">
                            <label for="email" >{{ __('Email') }}</label>

                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        {{-- image --}}
                        <div class="group-input">
                            <label for="image" >{{ __('image') }}</label>

                            <input id="image" type="file" class="form-control @error('image') is-invalid @enderror" name="image" value="{{ old('image') }}" required autocomplete="image" autofocus>

                            @error('image')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        {{-- Job Title --}}
                        <div class="group-input">
                            <label for="jobTitle" >{{ __('Job Title') }}</label>

                            <input id="jobTitle" type="text" class="form-control @error('jobTitle') is-invalid @enderror" name="jobTitle" value="{{ old('jobTitle') }}" required autocomplete="jobTitle" autofocus>

                            @error('jobTitle')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        {{-- Bio --}}
                        <div class="group-input">
                            <label for="bio">{{ __('Write Bio') }}</label>

                            <input id="bio" type="text" class=" @error('bio') is-invalid @enderror" name="bio" value="{{ old('bio') }}"  >

                            @error('bio')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        {{-- Password --}}
                        <div class="group-input">
                            <label for="password" >{{ __('Password') }}</label>

                            <input id="password" type="password" class=" @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        
                        {{-- Confirm Password --}}
                        <div class="group-input">
                            <label for="password-confirm" >{{ __('Confirm Password') }}</label>

                            <input id="password-confirm" type="password" class="" name="password_confirmation" required autocomplete="new-password">

                            @error('password-confirm')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        
                        <button type="submit" class="site-btn register-btn">REGISTER</button>
                    </form>
                    <div class="switch-login">
                        <a href="{{ route('login') }}" class="or-login">Or Login</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
