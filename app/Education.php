<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function resume()
    {
        return $this->belongsTo('App\Resume');
    }

    public function update_education($input)
    {
    	$education = new Education;
    	$education->course_name = $this->input->course_name;
    	$education->institution_name = $this->input->institution_name;
    	$education->passing_year = $this->input->passing_year;
    	$education->marks = $this->input->marks;
    	$education->save();
    }
}
