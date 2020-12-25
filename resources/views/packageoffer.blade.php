@extends('layouts.app')

@section('content')
    <link rel="stylesheet" href="{{asset('css/packageoffer.css')}}">

    <div class="container">
        <h1 class="title">Why Premium?</h1>
        <p class="text-desc">Premium Account has more advantage in getting project</p>
        <div class="row mt-5">
            <div class="col-md-6">
                <div class="card custom-card pt-3">
                    <h2 class="sub-title text-center">Regular</h2>
                    <div class="card-body">
                        <div class="row">
                            <img src="{{asset('images/checklist.png')}}" alt="checklist" class="custom-checklist icon-position">
                            <p class="text-position">Free User</p>
                        </div>
                        <div class="row">
                            <img src="{{asset('images/wrong.png')}}" alt="checklist" class="custom-wrong icon-position">
                            <p class="text-position">Free Ads</p>
                        </div>
                        <div class="row">
                            <img src="{{asset('images/wrong.png')}}" alt="checklist" class="custom-wrong icon-position">
                            <p class="text-position">Unlimited Project Post</p>
                        </div>
                        <div class="row">
                            <img src="{{asset('images/wrong.png')}}" alt="checklist" class="custom-wrong icon-position">
                            <p class="text-position">Unlimited Project Member</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card custom-card pt-3">
                    <h2 class="sub-title text-center">Premium</h2>
                    <div class="card-body">
                        <div class="row">
                            <img src="{{asset('images/checklist.png')}}" alt="checklist" class="custom-checklist icon-position">
                            <p class="text-position">Free Ads</p>
                        </div>
                        <div class="row">
                            <img src="{{asset('images/checklist.png')}}" alt="checklist" class="custom-checklist icon-position">
                            <p class="text-position">Unlimited Project Post</p>
                        </div>
                        <div class="row">
                            <img src="{{asset('images/checklist.png')}}" alt="checklist" class="custom-checklist icon-position">
                            <p class="text-position">Unlimited Project Member</p>
                        </div>
                        <p class="text-center text-price">Rp49990,-/month</p>
                    </div>
                    <button class="btn btn-success btn-purchase text-center" onclick="location.href='{{route('payment.show')}}'">Purchase</button>
                </div>
            </div>
        </div>
    </div>
@endsection
