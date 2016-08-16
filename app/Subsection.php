<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subsection extends Model
{
    public $timestamps = false;

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function section()
    {
        return $this->belongsTo('App\Section');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function mapping_sections()
    {
        return $this->belongsToMany('App\Mapping_section','mapping_subsections')->withPivot('id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function mapping_subsections()
    {
        return $this->hasMany('App\Mapping_subsection');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasManyThrough
     */
    public function detail()
    {
        return $this->hasManyThrough('App\Detail','App\Mapping_subsection');
    }
}
