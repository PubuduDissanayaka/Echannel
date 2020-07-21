<?php

namespace App;

use App\User;

use Illuminate\Database\Eloquent\Model;

class Docspec extends Model
{
    public function docs()
    {
        return $this->hasMany('App\User');
    }

    public function specs()
    {
        return $this->hasMany('App\specializations');
    }
}
