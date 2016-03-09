<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

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
    public function section()
    {
        return $this->belongsToMany('App\Section','mappings')->withPivot('flag');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function subsection()
    {
        return $this->belongsToMany('App\Subsection','details')->withPivot('content');
    }

}
