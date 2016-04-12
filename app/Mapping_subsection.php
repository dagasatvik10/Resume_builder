<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mapping_subsection extends Model
{
    public $timestamps = false;
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function detail()
    {
        return $this->hasOne('App\Detail');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function mapping_section()
    {
        return $this->belongsTo('App\Mapping_section');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function subsection()
    {
        return $this->belongsTo('App\Subsection');
    }
}
