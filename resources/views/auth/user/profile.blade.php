@extends('layouts.app')
@section('css')

@endsection
@section('content')
    <link href="{{ asset('css/profile.css') }}" rel="stylesheet">
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <div class="row emp-AO">
                <form method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-md-12">
                            <div class="profile-img">
                                <h2 class="text-center Account-overview">Account Overview</h2>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4">
                                <img src="/storage/profile_pictures/{{$data->profile_picture}}" alt="" class="cutom-profile-picture"/>
                            </div>

                            <div class="col-md-8 pl-5 mt-2">
                                <h1>{{$data->username}}</h1>
                                <h5>{{$data->position}}</h5>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="profile-head mt-3">
                                <table>
                                    <thead>
                                        <tr>
                                            <th scope="col" width="200px"></th>
                                            <th scope="col"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr height="40px">
                                            <th scope="row">Email</th>
                                            <td>{{$data->email}}</td>
                                        </tr>
                                        <tr height="40px">
                                            <th scope="row">Date of Birth</th>
                                            <td>{{$data->DOB}}</td>
                                        </tr>
                                        <tr height="40px">
                                            <th scope="row">Gender</th>
                                            <td>{{$data->gender}}</td>
                                        </tr >
                                        <tr height="40px">
                                            <th scope="row">Phone</th>
                                            <td>{{$data->phone_number}}</td>
                                        </tr>
                                        <tr height="40px">
                                            <th scope="row">Membership</th>
                                            <td>{{$data->status}}</td>
                                        </tr>
                                        @if(auth()->user()->id == $data->id)
                                            <th scope="row" height="70px"><a class="btn btn-success" href="{{route('user.edit',Auth::user()->id)}}">Edit Profile</a></th>
                                        @endif
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <div class="col-md-4">
            {{-- ads --}}
        </div>
        @if(auth()->user()->id == $data->id)
        <div class="col-md-8 mt-3">
            <div class="row emp-AO">
                <form method="POST">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="profile-img">
                                <h2 class="text-center Account-overview">Experience</h2>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="profile-head mt-3">
                            <div class="row">
                                <div class="col-md-12">
                                    <form>
                                        <h5><strong>CV</strong></h5>
                                        <div class="custom-file">
                                          <input type="file" name="customFile[]" class="input-cv custom-file-input" id="image">
                                          <label class="custom-file-label label-cv" for="image">Choose file</label>
                                        </div>
                                      </form>
                                </div>
                                <div class="col-md-12 mt-3">
                                    <form>
                                        <h5><strong>Portfolio</strong></h5>
                                        <div class="custom-file">
                                          <input type="file" name="image[]" class="input-portofolio custom-file-input" id="customPortofolio">
                                          <label class="custom-file-label label-portofolio" for="customPortofolio">Choose file</label>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        @endif
    </div>
</div>
<script>
    var inputArray = document.getElementsByClassName('input-cv');

    for(var i = 0; i < inputArray.length; i++){
        inputArray[i].addEventListener('change',prepareUpload,false);
    };

    function prepareUpload(event)
    {
        var files = event.target.files;
        var fileName = files[0].name;
        $('.label-cv').html(fileName);
    }
</script>

<script>
    var inputArray = document.getElementsByClassName('input-portofolio');

    for(var i = 0; i < inputArray.length; i++){
        inputArray[i].addEventListener('change',prepareUpload,false);
    };

    function prepareUpload(event)
    {
        var files = event.target.files;
        var fileName = files[0].name;
        $('.label-portofolio').html(fileName);
    }
</script>
@endsection
