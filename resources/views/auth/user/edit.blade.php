@extends('layouts.app')

@section('content')
    <link rel="stylesheet" href="{{asset('css/editprofile.css')}}">
    <div class="container" style="margin-bottom: 50px">
        <div class="card custom-card">
            <h3 class="pt-4 text-center card-title">Edit Profile</h3>
            <div class="card-body custom-body pt-4">
                <form action="{{route('user.update',$user->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group row">
                        <label for="username" class="col-md-4 col-form-label text-md-left">Name</label>

                        <div class="col-md-6">
                            <input id="username" type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{$user->username}}" required autocomplete="username" autofocus>

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
                            <input id="position" type="text" class="form-control @error('position') is-invalid @enderror" name="position" value="{{$user->position}}" required autocomplete="position" autofocus>

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
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{$user->email}}" required autocomplete="email" autofocus>

                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="password" class="col-md-4 col-form-label text-md-left">{{ __('Password') }}</label>

                        <div class="col-md-6">
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="password-confirm" class="col-md-4 col-form-label text-md-left">{{ __('Confirm Password') }}</label>

                        <div class="col-md-6">
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
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
                            <input type="radio" name="gender" id="Female" value="Female" required>
                            <label for="Female">Female </label>

                            @error('gender')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="phone_number" class="col-md-4 col-form-label text-md-left">Phone Number</label>

                        <div class="col-md-6">
                            <input id="phone_number" type="text" class="form-control @error('phone_number') is-invalid @enderror" name="phone_number" value="{{$user->phone_number}}" required autocomplete="phone_number">

                            @error('phone_number')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="profile_picture" class="col-md-4 col-form-label text-md-left" style="font-weight: bold;"><img src="{{asset('images/upload_image.png')}}" alt=""> &nbsp; &nbsp;Profile Picture</label>

                        <div class="col-md-6">
                            <input id="profile_picture" type="file" class="form-control @error('profile_picture') is-invalid @enderror" name="profile_picture" autocomplete="profile_picture" autofocus hidden>
                            <img src="" id="category-img-tag" alt="no picture" class="profile-picture-1"/>
                            @error('profile_picture')
                            <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row" style="height : auto">
                        {{-- <input id="user_id" type="hidden" class=""  name="id" value="{{Auth::user()->id}}"> --}}

                        <label for="CV" class="col-md-4 col-form-label text-md-left">CV</label>

                        <div class="col-md-6">
                            <input id="CV" type="file" class="form-control overflow-hidden h-100" name="CV" >
                        </div>
                    </div>

                    <div class="form-group row" style="height : auto">

                        <label for="portfolio" class="col-md-4 col-form-label text-md-left">Portfolio</label>

                        <div class="col-md-6">
                            <input id="portfolio" type="file" class="form-control overflow-hidden h-100"  name="portfolio">
                        </div>
                    </div>



                    <div class="form-group row mb-0">
                        <div class="col-md-6 ">
                            <button type="submit" class="btn btn-success btn-edit">
                                Edit Profile
                            </button>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script type="text/javascript">
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#category-img-tag').attr('src', e.target.result);
                }

                reader.readAsDataURL(input.files[0]);
            }
        }

        $("#profile_picture").change(function(){
            readURL(this);
        });
    </script>
@endsection

