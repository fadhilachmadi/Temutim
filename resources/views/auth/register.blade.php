@extends('layouts.layoutregister')

@section('content')
<div class="container mt-5 py-5 bg-white">
    <div class="row">
        <div class="col-md-12 text-center py-1 mt-4">
            <img src="{{ asset('images/logo_temutim.png') }}" alt="">
        </div>

        <div class="col-md-12  d-flex justify-content-center text-center">
            <form class="text-center" method="POST" action="">
                @csrf
                <div class="row text-center py-1">
                    <h2>Sign up to find your own team</h2>
                </div>
                <div class="form-group row py-1">
                    <div class="col-md-12">
                        <input id="username" type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username" autofocus placeholder="Username">

                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                
                <div class="form-group row py-1">

                    <div class="col-md-12">
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row py-1">
                    <div class="col-md-12">
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm Password">
                    </div>
                </div>

                <div class="form-group row py-1">

                    <div class="col-md-12">
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email">

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row mb-0 py-1">
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-register">
                            {{ __('Sign Up') }}
                        </button>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12 py-1">
                        <small>Have an account? <a href="{{ route('login') }}">Log in</a></small>
                    </div>
                </div>
            </form>
        </div>

    </div>
</div>
@endsection
