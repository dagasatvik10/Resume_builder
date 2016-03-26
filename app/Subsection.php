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

}
