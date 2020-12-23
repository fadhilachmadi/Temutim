<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Payment;

class PaymentController extends Controller
{
    
    public function goToPayment(){
        $payments = Payment::all();
        return view('payment', compact('payments'));
    }
}
