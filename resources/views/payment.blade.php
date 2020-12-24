
@extends('layouts.app')

@section('title')
    <title>Payment Page</title>
@endsection

@section('css')
<link href="{{ asset('css/payment.css') }}" rel="stylesheet">

@endsection

@section('content')
    <div class="container container-custome text-center">

      <h1 class=""  style="color: #00587A">TemuTim Premium</h1>
      <h3>Rp49.000,- / month</h3>

      <form class="sub-container-custome"  action="/payment/create" method="POST">
        @csrf
      <div class="border" style="padding: 1rem 5rem 2rem">
        <h5>Choose your payment method</h5>

        <div class="container payment-type-container">
        @foreach ($payments as $payment)
        
          <div class="border payment-type-custome">
            <input class="sr-only" type="radio" value="{{$payment->id}}"  name="payment_type" class="" id="{{$payment->type_name}}">        
            <label class="payment-type-label" for="{{$payment->type_name}}">
              <img src="{{$payment->image}}" alt="Payment Type Photo">
            </label>
         </div>
        
        @endforeach
      </div>

      </div>

      <label class="form-check form-check-label term-text">
        <input class="form-check-input" type="checkbox" name="remember" required> You can check your renewal date or cancel anytime via your Account page. Terms and conditions apply.

        <div class="valid-feedback">Valid.</div>
        <div class="invalid-feedback">Check this checkbox to continue your payment.</div>
      </label>

      <button type="submit" class="btn btn-success btn-custome" style="padding: 1.5rem 3rem;">Buy Premium Account</button>
    </form>
    </div>
@endsection