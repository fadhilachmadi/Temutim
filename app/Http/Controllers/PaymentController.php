<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Payment;
use App\User;
use App\PremiumMembership;
use Auth;

class PaymentController extends Controller
{
    
    public function goToPayment(){
        $payments = Payment::all();
        return view('payment', compact('payments'));
    }

    
    public function createPayment(Request $request){

       

        PremiumMembership::create([
            'user_id' => Auth::user()->id,
            'payment_id' => $request->payment_type,
        ]);

        $user = User::findOrFail(Auth::user()->id)->update([
            'status' => "premium"
        ]);
        
        // dd($user->username);
        
        return redirect('/home');
    }

}
