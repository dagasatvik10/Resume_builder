<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Detail extends Model
{
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function mapping_subsection()
    {
        return $this->belongsTo('App\Mapping_subsection');
    }

}
