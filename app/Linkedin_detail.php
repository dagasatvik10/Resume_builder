<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Linkedin_detail extends Model
{
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
