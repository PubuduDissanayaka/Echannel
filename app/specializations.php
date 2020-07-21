<?php

namespace App;
use App;
use App\User;

use Illuminate\Database\Eloquent\Model;

class specializations extends Model
{

    
    public function docs()
    {
        return $this->hasMany('App\User');
    }
    
    
}
