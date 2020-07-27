<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserDetails extends Model
{
    
    public function user()
    {
        return $this->hasMany('App\User');
    }
    
}
