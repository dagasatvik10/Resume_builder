<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;

class Resume extends Model
{

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function sections()
    {
        return $this->belongsToMany('App\Section','mapping_sections')->withPivot('id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasManyThrough
     */
    public function mapping_subsections()
    {
        return $this->hasManyThrough('App\Mapping_subsection','App\Mapping_section');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function mapping_sections()
    {
        return $this->hasMany('App\Mapping_section');
    }

}
