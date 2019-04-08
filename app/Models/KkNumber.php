<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class KkNumber extends Model
{
    public function resident()
    {
        return $this->hasMany('App\Models\Resident');
    }
    
}
