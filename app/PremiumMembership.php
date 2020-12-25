<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PremiumMembership extends Model
{
    //
    protected $fillable = ['user_id', 'payment_id', 'start_date', 'end_date'];
}
