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
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function skills()
    {
        return $this->hasMany('App\Skill');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function achievements()
    {
        return $this->hasMany('App\Achievements');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function contacts()
    {
        return $this->hasMany('App\Contact');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function educations()
    {
        return $this->hasMany('App\Education');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function websites()
    {
        return $this->hasMany('App\Website');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function work_experiences()
    {
        return $this->hasMany('App\WorkExperience');
    }

    public function update_resume($input)
    {
        $resume = new Resume;
        $user = new User;
        $user->fullname = $this->input->fullname;
        $resume->father_name = $this->input->father_name;
        $resume->country = $this->input->country;
        $resume->address = $this->input->address;
        $resume->objective = $this->input->objective;
        $resume->profile_pic = $this->input->profile_pic;
        
        $resume->save();
    }

}
