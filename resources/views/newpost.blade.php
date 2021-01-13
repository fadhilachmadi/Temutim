
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
            <h1>New Post</h1>
            <div class="mt-lg-5">
                <form action="{{route('createnewpost')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <h4>Project Name</h4>
                        <div>
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autofocus>

                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group">
                        <h4>Description</h4>
                        <div>
                            <textarea name="description" id="description" class="form-control @error('description') is-invalid @enderror"></textarea>
                            @error('description')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group">
                        <h4>Project Type</h4>
                        <div class="custom-control custom-radio">
                            <input type="radio" class="custom-control-input" name="project_type" id="project_type_paid" value="paid" checked>
                            <label class="custom-control-label" for="project_type_paid">Paid</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input type="radio" class="custom-control-input" name="project_type" id="project_type_unpaid" value="unpaid">
                            <label class="custom-control-label" for="project_type_unpaid">Unpaid</label>
                        </div>
                    </div>

                    <div class="form-group">
                        <h4>Image</h4>
                        <div>
                            <input type="file" name="imagefile" id="file" class="form-control w-25 h-25">
                        </div>
                    </div>

                    <div class="mt-3">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
