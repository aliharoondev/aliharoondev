
@extends('layouts.app')

@section('content')
<body class="at-guest-layout">
    <div class="container-fluid">
        <div class="at-logo">
            <img src="assets/images/logo.png" alt="">
        </div>
        <div class="gl-card">
            <div class="gl-card-head">
                <h2 class="font-weight-bold">{{ __('Login') }}</h2>
                <p>Sign in to your account</p>
            </div>
            <form method="POST" action="{{ route('login') }}">
                        @csrf                
                        
               <div class="mb-3">
                  <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Enter your Email" required autocomplete="email" autofocus>
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                                 <strong>{{ $message }}</strong>
                        </span>
                    @enderror
              
                </div>
                <div class="mb-3">
                   <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Enter your Password" required autocomplete="current-password">
                   @error('password')
                         <span class="invalid-feedback" role="alert">
                             <strong>{{ $message }}</strong>
                          </span>
                   @enderror
                </div>
                <div class="mb-3 d-flex justify-content-between">
                    <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                    <label class="form-check-label" for="remember">
                        {{ __('Remember Me') }}
                    </label>
                    </div>
                    <!-- @if (Route::has('password.request'))
                    <a href="{{ route('password.request') }}">Forgot Password?</a> 
                    @endif -->
                  </div>
                <div class="mb-3">
                    <button type="submit" class="btn btn-primary btn-block"> {{ __('Login') }} </button>

                </div>
            </form>
            <div class="text-center py-4">
            Don't have an account? <a href="{{route('register')}}">{{ __('Create Account') }}</a>
            </div>
        </div>
    </div>
    @endsection

