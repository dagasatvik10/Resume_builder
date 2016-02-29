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
    	$education->course_name = $input['course_name'];
    	$education->institution_name = $input['institution_name'];
    	$education->passing_year = $input['passing_year'];
    	$education->marks = $input['marks'];
    	$education->save();
    }
}
