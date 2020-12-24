@extends('layouts.app')

@section('content')
    <link rel="stylesheet" href="{{asset('css/editprofile.css')}}">
    <div class="container">
        <div class="card custom-card">
            <h3 class="pt-4 text-center card-title">Edit Profile</h3>
            <div class="card-body custom-body pt-4">
                <form action="{{route('user.update',$user->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group row">
                        <label for="username" class="col-md-4 col-form-label text-md-left">Name</label>

                        <div class="col-md-6">
                            <input id="username" type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username" autofocus>

                            @error('username')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="position" class="col-md-4 col-form-label text-md-left">Position</label>

                        <div class="col-md-6">
                            <input id="position" type="text" class="form-control @error('position') is-invalid @enderror" name="position" value="{{ old('position') }}" required autocomplete="position" autofocus>

                            @error('position')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="email" class="col-md-4 col-form-label text-md-left">Email</label>

                        <div class="col-md-6">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="DOB" class="col-md-4 col-form-label text-md-left">Date of Birth</label>

                        <div class="col-md-6">
                            <input id="DOB" type="date" class="form-control @error('DOB') is-invalid @enderror" name="DOB" value="{{ old('DOB') }}" required autocomplete="DOB" autofocus>

                            @error('DOB')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="name" class="col-md-4 col-form-label text-md-left">{{ __('Gender') }}</label>
                        <div class="col-md-6 custom-radio" >
                            <input type="radio" name="gender" id="Male" value="Male">
                            <label for="Male">Male </label>
                            <input style="margin-left: 50px;" type="radio" name="gender" id="Female" value="Female" required>
                            <label for="Female">Female </label>

                            @error('gender')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="phone_number" class="col-md-4 col-form-label text-md-left">{{ __('Phone Number') }}</label>

                        <div class="col-md-6">
                            <input id="phone_number" type="text" class="form-control @error('phone_number') is-invalid @enderror" name="phone_number" value="{{ old('phone_number') }}" required autocomplete="phone_number">

                            @error('phone_number')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-md-6">
                            <div class="image-upload">
                                <label class="col-md-6 col-form-label text-md-left profile_picture" for="profile_picture">
                                    <img src="{{asset('images/upload_image.png')}}" alt="">
                                    Profile Picture
                                </label>
                                <div class="col-md-6">
                                    <input type="file" id="profile_picture" hidden>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="image-upload">
                                <label class="col-md-6 col-form-label text-md-left profile-picture" for="card_identity">
                                    <img src="{{asset('images/upload_image.png')}}" alt="">
                                    Card Identity
                                </label>
                                <div class="col-md-6">
                                    <input type="file" id="card_identity" hidden>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-group row mb-0">
                        <div class="col-md-6 ">
                            <button type="submit" class="btn btn-primary btn-edit" style="background: #2EC66F">
                                Edit Profile
                            </button>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>

@endsection
