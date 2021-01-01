@extends('layouts.app')

@section('content')

@section('css')
<link href="{{ asset('css/home.css') }}" rel="stylesheet">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
@endsection

<div class="container">
    @if(Auth::check())
        <div class="row">
            <div class="col-md-3">
                <div class="profile">
                    <div class="row justify-content-center">
                        <img src="\images\{{Auth::user()->profile_picture}}" alt="..." class="rounded w-50 mb-3">
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
                    <div class="row pl-3">
                        <i class="fas fa-laptop-code mr-3"></i>
                        <p>Project pak ameng</p>
                    </div>
                </div>
            </div>
            
            <div class="col-md-6">
                <div class="new-post-detail justify-content-center">
                    <div class="new-post-text">
                        <p>Have some project? Please share it</p>
                    </div>
                    <div class="new-post-button">
                        <a class="btn btn-primary" href="">New Post</a>
                    </div>
                </div>
                
                <div class="post mt-4">
                    <div class="post-header">
                        <div class="post-profile-photo">
                            <img src="\images\default_profile_picture.png" alt="">
                        </div>
                        <div class="post-info">
                            <h5>Name</h5>
                            <p>Position</p>
                            <p>6 hours ago</p>
                        </div>
                    </div>
                    <div>
                        <hr width="100%" style="margin: 0">
                    </div>
                    <div class="post-detail">
                        <h5 style="margin-bottom: 8px">Project Title</h5>
                        <p style="margin-bottom: 8px">Project Description</p>
                        <div class="post-photo">
                            <img src="\images\BuktiKelompok_OOAD.png" alt="">
                        </div>
                    </div>
                </div>
                
            </div>

            <div class="col-md-3">
                <div class="mb-3 suggestion" >
                    <div class="suggestion-title">
                        <h5>Suggestion</h5>
                    </div>
                    <div>
                        <hr width="100%" style="margin: 0">
                    </div>
                    <div class="card-body">
                        <div class="suggestion-card">
                            <div class="suggestion-img">
                                <img src="\images\default_profile_picture.png" alt="">
                            </div>
                            <div class="suggestion-detail">
                                <h5>Edward</h5>
                                <p>Mahasiswa</p>
                            </div>
                        </div>
                        <div class="suggestion-card">
                            <div class="suggestion-img">
                                <img src="\images\default_profile_picture.png" alt="">
                            </div>
                            <div class="suggestion-detail">
                                <h5>Revaldi</h5>
                                <p>Mahasiswa</p>
                            </div>
                        </div>
                        <div class="suggestion-card">
                            <div class="suggestion-img">
                                <img src="\images\default_profile_picture.png" alt="">
                            </div>
                            <div class="suggestion-detail">
                                <h5>Arya</h5>
                                <p>Mahasiswa</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row m-0 justify-content-center align-item-center ads" style="height: 200px">
                    <p class="card-text h-100">ads</p>
                </div>
            </div>

        </div>
    @endif
</div>
@endsection
