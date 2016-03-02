<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function getResume()
    {
        return $this->belongsTo('App\Resume');
    }

    public function getDetail()
    {
        return $this->hasMany('App\Detail');
    }

}
