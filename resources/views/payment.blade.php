
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

      <form action="" method="">
      <div class="sub-container-custome border">
        <h5>Choose your payment method</h5>

        <div class="container payment-type-container">
        @foreach ($payments as $payment)
        
          <div class="border payment-type-custome">
            <input class="sr-only" type="radio" name="payment_type" class="" id="{{$payment->type_name}}">        
            <label class="payment-type-label" for="{{$payment->type_name}}">
              <img src="{{$payment->image}}" alt="Payment Type Photo">
            </label>
         </div>
        
        @endforeach
      </div>

      </div>

      <p class="term-text">You can check your renewal date or cancel anytime via your Account page. Terms and conditions apply.</p>

    
      <button type="submit" class="btn btn-success" style="padding: 25px 50px">Buy Premium Account</button>
    </form>
    </div>
@endsection