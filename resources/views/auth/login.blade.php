@extends('layouts.layoutlogin')

@section('title')
    <title>TemuTim Login</title>
@endsection

@section('content')
<div class="container container-login">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <img src="{{ asset('images/temutim_logo_login.png') }}" alt="" style="width: 400px">
        </div>
        <div class="col-md-6 d-flex justify-content-center">
            <form method="POST" action="">
                @csrf
                <div class="row py-1">
                    <h2>Let's find your own team!</h2>
                </div>
                
                        <div class="form-group row py-1">
                            <div class="col-md-12">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row py-1">
                            <div class="col-md-12">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0 py-1">
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-login">
                                    {{ __('Login') }}
                                </button>
                            </div>
                        </div>

                        <div class="row py-1">
                            <div class="col-md-12 text-center">
                                <small>Don't have an account? <a href="{{ route('register') }}">Sign Up</a></small>
                            </div>
                        </div>
                    </form>
    </div>
</div>
@endsection
