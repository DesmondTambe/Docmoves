@extends('layouts.app')

@section('content')

<!-- Page Content -->
<div class="content">
    <div class="container-fluid">
        
        <div class="row">
            <div class="col-md-8 offset-md-2">
                
                <!-- Login Tab Content -->
                <div class="account-content">
                    <div class="row align-items-center justify-content-center">
                        <div class="col-md-7 col-lg-6 login-left">
                            <img src="{{asset('img/login-img.png')}}" class="img-fluid" alt="Doccure Login">	
                        </div>
                        <div class="col-md-12 col-lg-6 login-right">
                            <div class="login-header">
                                <h3>Login {{config('app.name')}}</h3>
                            </div>
                            <form method="POST" action="{{ route('login') }}">
                                @csrf

                                <div class="form-group form-focus">
                                    <div>
                                        <input type="email" class="form-control floating" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <label for="email" class="focus-label">Email</label>
                                </div>

                                <div class="form-group form-focus">
                                    <div>
                                        <input type="password" class="form-control floating" name="password" required autocomplete="current-password">
                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <label class="focus-label">Password</label>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 form-check">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
    
                                        <label class="form-check-label" for="remember">
                                            Remember Me
                                        </label>
                                    </div>
                                    <div class="col-md-6 text-right">
                                        <a class="forgot-link" href="{{ route('password.request') }}">Forgot Password ?</a>
                                    </div>
                                </div>
                                <button class="btn btn-primary btn-block btn-lg login-btn" type="submit">Login</button>
                                <div class="login-or">
                                    <span class="or-line"></span>
                                    <span class="span-or">or</span>
                                </div>
                                {{-- <div class="row form-row social-login">
                                    <div class="col-6">
                                        <a href="#" class="btn btn-facebook btn-block"><i class="fab fa-facebook-f mr-1"></i> Login</a>
                                    </div>
                                    <div class="col-6">
                                        <a href="#" class="btn btn-google btn-block"><i class="fab fa-google mr-1"></i> Login</a>
                                    </div>
                                </div> --}}
                                <div class="text-center dont-have">Don’t have an account? <a href="{{ route('register') }}">Register</a></div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- /Login Tab Content -->
                    
            </div>
        </div>

    </div>

</div>		
<!-- /Page Content -->

@endsection
