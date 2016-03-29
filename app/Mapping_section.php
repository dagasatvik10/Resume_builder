<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mapping_section extends Model
{
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function subsections()
    {
        return $this->belongsToMany('App\Subsection','mapping_subsections')->withPivot('id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function mapping_subsections()
    {
        return $this->hasMany('App\Mapping_subsection');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function section()
    {
        return $this->belongsTo('App\Section');
    }

}
