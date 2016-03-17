<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subsection extends Model
{
    public $timestamps = false;

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function resume()
    {
        return $this->belongsToMany('App\Resume','details')->withPivot('content');
    }

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
    public function mapping_subsections()
    {
        return $this->belongsToMany('App\Mapping_section','mapping_subsections');
    }
}
