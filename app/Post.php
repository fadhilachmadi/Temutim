<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //

    public function requiredRole()
    {
        return $this->hasMany('App\RequiredRole');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }
    protected $table = 'posts';
}
