<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prescriptions extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class,'user_id');
        return $this->belongsTo(User::class,'doc_id');
    }

    public function doc()
    {

        return $this->belongsTo(User::class,'doc_id');
    }
}
