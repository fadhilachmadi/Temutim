@extends('layouts.app')

@section('title')
 <title>Detail Page</title>   
@endsection

@section('css')
<link href="{{ asset('css/post_detail.css') }}" rel="stylesheet">

@endsection

@section('content')
 <div class="container container-custome" style="padding: 0">

  <div class="row container-profile">

    <div style="width: 100px">    
      <img src="/images/default_profile_picture.png"  alt="Profile Picture" style="width: 100%">  
    </div>

    <div class="profile-text" >
      <h1 style="font-weight:bolder">{{$post->user->username}}</h1>
      <h5>{{$post->user->position}}</h5>
    </div>
   

  </div>

  
  <div class="container-content">
    <div class="sub-container">
      <h2 class="sub-title">Title</h2>
      <h5>{{$post->title}}</h5>
    </div>
  
    <div class="sub-container">
      <h2 class="sub-title">Description</h2>
      <h5>{{$post->description}}</h5>
    </div>
  
    <div class="sub-container">
      <h2 class="sub-title">Required Role</h2>
        <ul>
            @foreach ($roles as $role)
            <li><h5>{{$role->name}}</h5></li>
            @endforeach
        </ul>
    </div>

    <div class="sub-container">
      <h2 class="sub-title">Image Attachment</h2>
      <div style="padding: 1rem 0rem">
        <img src="{{$post->media_file}}" alt="" style="width: 100%">
      </div>
    </div>

  </div>
    

  <div class="comment-container">

    <h3>Comment</h3>
      @foreach ($comments as $comment)
        <div class="row comment-profile">
      
            <div style="width: 2.5rem">
              <img src="{{$comment->user->profile_picture}}" alt="profile picture" style="width: 100%">
            </div>
            <div class="row comment-text">
              <h4 class="comment-username">{{$comment->user->username}}</h4>
              <h4 class="comment-content">{{$comment->text}}</h4>
            </div>
            
      
        </div>
      @endforeach

      <form class="row form-custome"  action="/comment/send/{{$post->id}}" method="POST">
        @csrf
        <input type="text" placeholder="Comment this post..." name="comment_text" style="width: 90%">
        <button type="submit" class="btn btn-success">Send</button>
      </form>

  </div>
  <div>

  </div>
  
  

</div>   
@endsection