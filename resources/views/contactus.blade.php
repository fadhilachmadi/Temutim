
@extends('layouts.app')

@section('title')
    <title>Contact Us</title>
@endsection

@section('css')
<link href="{{ asset('css/contact_us.css') }}" rel="stylesheet">

@endsection

@section('content')
    <div class="container">
        <div class="container-contact-us">
            <h1>Contact Us</h1>
            <p>let us know if you have some question</p>
            <span>
                <img src="{{asset('images/Mail.png')}}" alt="Mail">
                <h5>contact@temutim.net</h5>
            </span>
            <span>
                <img src="{{asset('images/Instagram.png')}}" alt="Payment Type Photo">
                <h5>Temutim</h5>
            </span>
            <span>
                <img src="{{asset('images/Whatsapp.png')}}" alt="Payment Type Photo">
                <h5>+62-123-8213-1423</h5>
            </span>
            <span>
                <img src="{{asset('images/Building.png')}}" alt="Payment Type Photo">
                <h5>Binus Anggrek</h5>
            </span>

            <div class="mt-lg-5">
                <form action="{{route('contact.store')}}" method="post">
                    @csrf
                    <textarea name="feedback" id="feedback" placeholder="please give some feedback to us" class="@error('feedback') is-invalid @enderror"></textarea>
                    @error('feedback')
                        <span class="invalid-feedback" role="alert">
                            <strong>please input feedback</strong>
                        </span>
                    @enderror
                    <div class="mt-3">
                        <button type="submit" class="btn btn-primary float-right">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection