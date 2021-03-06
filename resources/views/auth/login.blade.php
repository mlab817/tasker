@extends('layouts.auth')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card-group">
                <div class="card p-4">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                    <div class="card-body">
                        <h1>Login</h1>
                        <p class="text-muted">Sign In to your account</p>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                            <span class="input-group-text">
                                <i class="c-icon cil-user"></i>
                            </span>
                            </div>
                            <input id="email" type="email" placeholder="Email"
                                   class="form-control @error('email') is-invalid @enderror" name="email"
                                   value="{{ old('email') }}" required autocomplete="email" autofocus>
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="input-group mb-4">
                            <div class="input-group-prepend">
                            <span class="input-group-text">
                                <i class="c-icon cil-lock-locked"></i>
                            </span>
                            </div>
                            <input id="password" type="password" placeholder="Password"
                                   class="form-control @error('password') is-invalid @enderror" name="password"
                                   required autocomplete="current-password">
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <button class="btn btn-primary px-4" type="submit">Login</button>
                            </div>
                            <div class="col-6 text-right">
                                <a class="btn btn-link px-0" href="{{ route('password.request') }}"
                                   role="button">Forgot password?</a>
                            </div>
                        </div>
                    </div>
                    </form>
                </div>

                <div class="card text-white bg-primary py-5 d-md-down-none" style="width:44%">
                    <div class="card-body text-center">
                        <div>
                            <h2>Sign up</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna aliqua.</p>
                            <a href="{{ route('register') }}" class="btn btn-lg btn-outline-light mt-3" role="button">Register Now!
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
