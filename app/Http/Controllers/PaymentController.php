<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Payment;
use App\User;
use App\PremiumMembership;
use Auth;
use Carbon\Carbon;

class PaymentController extends Controller
{

    public function __construct(){
        $this->middleware('PackageOffer')->only('showOffer');
        $this->middleware('MakePayment')->except('showOffer');
    }

    public function goToPayment(){
        $payments = Payment::all();
        return view('payment', compact('payments'));
    }


    public function createPayment(Request $request){

        PremiumMembership::create([
            'user_id' => Auth::user()->id,
            'payment_id' => $request->payment_type,
            'start_date' => Carbon::now(),
            'end_date' => Carbon::now()->addMonth(),

        ]);

        $user = User::findOrFail(Auth::user()->id)->update([
            'status' => "premium"
        ]);

        return redirect('/home')->with('msg', 'Congratulations, you are a Premium Member now!');
    }

    public function showOffer(){
        return view('packageoffer');
    }

}
