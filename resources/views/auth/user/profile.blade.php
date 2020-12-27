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
                                <h5>{{$data->username}}</h5>
                                <small>{{$data->position}}</small>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="profile-head mt-3">
                                <tr>
                                    <p>Email {{$data->email}}</p>
                                    <p>Date of Birth {{$data->DOB}}</p>
                                    <p>Gender {{$data->gender}}</p>
                                    <p>Phone {{$data->phone_number}}</p>
                                    <p>Membership {{$data->status}}</p>
                                    <a class="btn btn-success" href="{{route('user.edit',Auth::user()->id)}}">Edit Profile</a>
                                </tr>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <div class="col-md-4">
            {{-- ads --}}
        </div>

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
                                              <input type="file" class="custom-file-input" id="customFile">
                                              <label class="custom-file-label" for="customFile">Choose file</label>
                                            </div>
                                          </form>
                                    </div>

                                    <div class="col-md-12 mt-3">
                                        <form>
                                            <h5><strong>Portfolio</strong></h5>
                                            <div class="custom-file">
                                              <input type="file" class="custom-file-input" id="customPortofolio">
                                              <label class="custom-file-label" for="customPortofolio">Choose file</label>
                                            </div>
                                          </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

