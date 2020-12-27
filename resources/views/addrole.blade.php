
@extends('layouts.app')

@section('title')
    <title>Create New Post</title>
@endsection

@section('css')
<link href="{{ asset('css/newpost.css') }}" rel="stylesheet">

@endsection

@section('content')
    <div class="container">
        <div class="container-newpost">
            <h1>Add role to your post</h1>
            <hr>
            <div>
                <form action="{{action('NewPostController@createRequiredRole', [$postId])}}" method="post" class="form-inline">
                    @csrf
                    <div class="form-group">
                        <div>
                            <input placeholder="role name" id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autofocus>

                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group">
                        <div>
                            <input placeholder="quantity" id="quantity" type="number" class="form-control @error('quantity') is-invalid @enderror" name="quantity" value="{{ old('quantity') }}" required>
                            @error('description')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
            <hr>
            <div>
                <h1>Current Roles</h1>
                @if ($allRole != null)
                    <div class="w-100">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Role Name</th>
                                    <th>Quantity</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($allRole as $item)
                                <tr>
                                    <td>{{$item->name}}</td>
                                    <td>{{$item->quantity}}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{$allRole->withQueryString()->links()}}
                    </div>
                @else
                    <h5 class="txt text-danger">There is no role data</h5>
                @endif
            </div>
            <hr>
        </div>
    </div>
@endsection