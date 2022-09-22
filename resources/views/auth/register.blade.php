@extends('layouts.app')
@section('content')
<body class="at-guest-layout">

    <div class="container-fluid">
        <div class="at-logo">
            <img src="assets/images/logo.png" alt="">
        </div>
        <div class="gl-card">
            <div class="gl-card-head">
                <h2 class="font-weight-bold">Create an Account</h2>
                <p>Sign up with credentials</p>
            </div>
            <form method="POST" action="{{ route('register') }}">
                        @csrf                
            <div class="mb-3">
                    <div class="col-md-12">
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" placeholder="Enter your Name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>               
             </div>
             <div class="mb-3">
                            <div class="col-md-12">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Enter your Email Addresss" value="{{ old('email') }}" required autocomplete="email">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div> 
               </div>
                <div class="mb-3">
                            <div class="col-md-12">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Enter your Password" required autocomplete="new-password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                          </div>
                </div>
                <div class="mb-3">
                            <div class="col-md-12">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Confirm your Passwordd" required autocomplete="new-password">
                            </div>
                </div>
                            <div class="mb-3">
                                        <button type="submit" class="btn btn-primary btn-block">{{ __('Register') }}</button>
                            </div>
            </form>
                            <div class="text-center py-4">
                                Already have an account? <a href="{{route('login')}}">{{ __('login') }}</a>
                            </div>
        </div>
    </div>
    @endsection>