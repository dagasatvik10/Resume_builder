<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Resume extends Model
{

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function getUser()
    {
        return $this->belongsTo('App\User');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function getSection(){
        return $this->hasMany('App\Section');
    }

}
