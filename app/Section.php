<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    public $timestamps = false;

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function resumes()
    {
        return $this->belongsToMany('App\Resume','mapping_sections');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function subsections()
    {
        return $this->hasMany('App\Subsection');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function mapping_sections()
    {
        return $this->hasMany('App\Mapping_section');
    }

}
