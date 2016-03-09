<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    public $timestamps = false;

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function resume()
    {
        return $this->belongsToMany('App\Resume','mappings')->withPivot('flag');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function subsections()
    {
        return $this->hasMany('App\Subsection');
    }

}
