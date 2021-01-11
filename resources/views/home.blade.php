@extends('layouts.app')

@section('title')
    <title>TemuTim Home</title>
@endsection

@section('css')
<link href="{{ asset('css/home.css') }}" rel="stylesheet">
@endsection

@section('content')
<div class="container" style="margin-bottom: 150px">
    <div class="row">
        <div class="col-md-3">
            <div class="profile">
                @if(Auth::check())
                    <div class="row justify-content-center">
                        <img src="/storage/profile_pictures/{{Auth::user()->profile_picture}}" alt="..." class="rounded w-50 mb-3">
                    </div>
                    <div class="row justify-content-center">
                        <h5 class="card-title">{{Auth::user()->username}}</h5>
                    </div>
                    <div class="row justify-content-center">
                        <p class="card-text">{{Auth::user()->position}}</p>
                    </div>
                    <div class="row">
                        <hr width="100%">
                    </div>
                    <div class="row pl-3">
                        <h5>Your Project</h5>
                    </div>
                    @forelse($projects as $project)
                    <div class="row justify-around">
                        <div class="profile-image ml-4">
                            <img src="\images\project.png" alt="">
                        </div>
                        <div class="row ml-2 overflow-hidden">
                            <p>{{$project->title}}</p>
                        </div>
                    </div>
                    @empty
                        <div class="row pl-3">
                            <p>None</p>
                        </div>
                    @endforelse
                    
                @else
                    <div class="row pl-3">
                        <h5>Profile</h5>
                    </div>
                    <div class="row">
                        <hr width="100%">
                    </div>
                    <div class="row justify-content-center">
                        <h5>Please sign up first</h5>
                    </div>
                    <div class="row justify-content-center">
                        <a href="/register" class="btn btn-success">Sign Up</a>
                    </div>
                @endif
            </div>
        </div>
         
        <div class="col-md-6">
            @if(Auth::check())
                <div class="new-post-detail justify-content-center mb-4">
                    <div class="new-post-text">
                        <p>Have some project? Please share it</p>
                    </div>
                    
                    <div class="new-post-button">
                        <a class="btn btn-primary" href="/newpost">New Post</a>
                    </div>
                </div>
            @endif
            
            @forelse($posts as $post)
                <a href="/post/detail/{{$post->id}}">
                    <div class="post mb-4">
                        <div class="post-header">
                            <div class="post-profile-photo">
                                <img src="/storage/profile_pictures/{{$post->user->profile_picture}}" alt="">
                            </div>
                            <div class="post-info">
                                <h5>{{$post->user->username}}</h5>
                                <p>{{$post->post_date}}</p>
                            </div>
                        </div>
                        <div>
                            <hr width="100%" style="margin: 0">
                        </div>
                        <div class="post-detail">
                            <h5 style="margin-bottom: 8px">{{$post->title}}</h5>
                            <p style="margin-bottom: 8px">{{$post->detail}}</p>
                            <p style="margin-bottom: 8px" class="overflow-hidden">{{$post->description}}</p>
                            <div class="post-photo">
                                <img src="/storage/postImage/{{$post->media_file}}" alt="">
                            </div>
                        </div>
                    </div>
                </a>
            @empty
                <div class="row justify-content-center">
                    <h5>There is no post...</h5>
                </div>
            @endforelse

        </div>
        <div class="col-md-3">
            <div class="mb-3 suggestion" >
                <div class="suggestion-title">
                    <h5>Suggestion</h5>
                </div>
                @if(Auth::check())
                    <div>
                        <hr width="100%" style="margin: 0">
                    </div>
                    <div class="card-body">
                        @forelse($users as $user)
                        <a href="/profile/{{$user->id}}">
                            <div class="suggestion-card">
                                <div class="suggestion-img">
                                    <img src="/storage/profile_pictures/{{$user->profile_picture}}" alt="">
                                </div>
                                <div class="suggestion-detail">
                                    <h5>{{$user->username}}</h5>
                                    <p>{{$user->position}}</p>
                                </div>
                            </div>
                        </a>
                        @empty
                            
                        @endforelse
                    </div>
                @else
                    <div class="row">
                        <hr width="90%">
                    </div>
                    <div class="row justify-content-center">
                        <h5 class="mb-2">Please sign up first</h5>
                    </div>
                    <div class="row justify-content-center mb-3">
                        <a href="/register" class="btn btn-success">Sign Up</a>
                    </div>
                @endif
            </div>
            <div class="row m-0 justify-content-center align-item-center ads" style="height: 200px">
                <p class="card-text h-100 mt-2">Advertising</p>
            </div>
        </div>
    </div>
</div>
@endsection
