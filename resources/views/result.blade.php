@extends('layouts.app')

@section('content')
    <link rel="stylesheet" href="{{asset('css/result.css')}}">
    <div class="container custom-container">
        <h3>Result for '{{$search}}'</h3>
        @if(sizeof($posts) == 0 && sizeof($users) == 0)
            <h3>There is no username or post match with your query</h3>
        @endif
        @if(sizeof($users) != 0)
            <h2 class="font-weight-bold title mt-4">User Profile</h2>
            @foreach($users as $user)
                <a href="/profile/{{$user->id}}">
                    <div class="card custom-card">
                        <div class="row card-body">
                            <div class="col-md-4">
                                <img src="/storage/profile_pictures/{{$user->profile_picture}}" alt="" class="custom-profile-picture">
                            </div>

                            <div class="col-md-8">
                                <div class="row">
                                    <h4 class="username-style mt-3">{{$user->username}}</h4>
                                </div>

                                <div class="row">
                                    <h5 class="position-style">{{$user->position}}</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            @endforeach
            <div class="row mt-3 mb-3 ml-1 justify-content-start">
                {{$users->links()}}
            </div>
        @endif
        @if(sizeof($posts) != 0)
            <h2 class="font-weight-bold title mt-5">Project Post</h2>
            @foreach($posts as $post)
                <a href="/post/detail/{{$post->id}}">
                    <div class="card custom-card">
                        <div class="card-body">
                            <h3 class="post-title">{{$post->title}}</h3>
                            <img src="{{asset('/images/right-arrow.svg')}}" alt="" class="arrow">
                        </div>
                    </div>
                </a>
            @endforeach
            <div class="row mt-3 mb-3 ml-1 justify-content-start">
                {{$posts->links()}}
            </div>
        @endif
    </div>

@endsection
