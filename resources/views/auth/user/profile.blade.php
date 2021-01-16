@extends('layouts.app')
@section('css')
<link href="{{ asset('css/profile.css') }}" rel="stylesheet">
@endsection

@section('title')
<title>{{$data->username}} | Profile</title>
@endsection

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="row emp-AO" style="margin: 0 auto;">
                <form method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-md-12">
                            <div class="profile-img">
                                <h1 class="text-center Account-overview">Account Overview</h1>
                            </div>
                        </div>

                        <div class="row mt-4">
                            <div class="col-md-6 ml-3 mt-1">
                                <img src="/storage/profile_pictures/{{$data->profile_picture}}" alt="" class="cutom-profile-picture" />
                            </div>

                            <div class="col-md-5" style="margin-top: 10px;">
                                <h1>{{$data->username}}</h1>
                                <h5 style="padding-left: 5px;">{{$data->position}}</h5>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="profile-head" style="margin-top: 30px;">
                                <table class="table table-bordered">
          
                                    <tbody class="" >
                                        <tr height="40px">
                                            <th scope="row"><h5><strong>Email</strong</h5></th>
                                            <td><h5>{{$data->email}}</h5></td>
                                        </tr>
                                        <tr height="40px">
                                            <th scope="row"><h5><strong>Date of Birth</strong</h5></th>
                                            @if($data->DOB == null)
                                            <td><h5>-</h5></td>
                                            @else
                                            <td><h5>{{$data->DOB}}</h5></td>
                                            @endif
                                        </tr>
                                        <tr height="40px">
                                            <th scope="row"><h5><strong>Gender</strong</h5></th>
                                            @if($data->gender == null)
                                            <td><h5>-</h5></td>
                                            @else
                                            <td><h5>{{$data->gender}}</h5></td>
                                            @endif
                                          
                                        </tr>
                                        <tr height="40px">
                                            <th scope="row"><h5><strong>Phone</strong></h5></th>
                                            @if($data->phone_number == null)
                                            <td><h5>-</h5></td>
                                            @else
                                            <td><h5>{{$data->phone_number}}</h5></td>
                                            @endif
                                           
                                        </tr>
                                        <tr height="40px">
                                            <th scope="row"><h5><strong>Membership</strong</h5></th>
                                            <td>
                                                @if($data->status == 'premium')
                                                <div class="status-premium"><h5>{{$data->status}}</h5></div>
                                                @else
                                                <h5>{{$data->status}}</h5>
                                                @endif
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                        @if(auth()->user()->id == $data->id)
                                        <div scope="row" height="70px"><a class="btn btn-success" style="padding: 15px;"  href="{{route('user.edit',Auth::user()->id)}}">Edit Profile</a></div>
                                        @endif
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>


        <div class="col-md-8 mt-4">
            <div class=" emp-AO">
                <h1 class="text-center Account-overview">Experience</h1>

                <div class="mt-4">
                    <h5><strong>CV</strong></h5>
                    <form action="">
                        @if ($data->CV == null)
                        <p>No Data</p>
                        @else
                        <a href="{{ route('download.cv',$data->CV) }}" class="downloadable_file">{{$data->CV}}</a>
                        @endif

                    </form>
                </div>

                <div class="mt-4">
                    <h5><strong>Portfolio</strong></h5>
                    <form action="">

                        @if ($data->portfolio == null)
                        No Data
                        @else
                        <a href="{{ route('download.portofolio',$data->portfolio) }}" class="downloadable_file">{{$data->portfolio}}</a>
                        @endif
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection