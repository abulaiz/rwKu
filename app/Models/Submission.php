<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Submission extends Model
{
    protected $guarded = [''];

    public function resident()
    {
        return $this->belongsTo('App\Models\Resident', 'nik', 'nik');
    }    
}
