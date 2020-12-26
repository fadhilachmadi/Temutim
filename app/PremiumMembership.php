<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PremiumMembership extends Model
{
    //
    protected $fillable = ['user_id', 'payment_id', 'start_date', 'end_date'];

    public function user(){
        return $this->belongsTo('App\User');
    }

    // public function isRegularUser(){
    //     return $this->user->status === "regular";
    // }
}
