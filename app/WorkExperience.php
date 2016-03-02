<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WorkExperience extends Model
{
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function resume()
    {
        return $this->belongsTo('App\Resume');
    }

    public function update_work_experience($input)
    {
    	$work_experience = new WorkExperience;
    	$work_experience->job_title = $input['job_title'];
    	$work_experience->company_name = $input['company_name'];
    	$work_experience->start_date = $input['start_date'];
    	$work_experience->end_date = $input['end_date'];
    	$work_experience->save();
    }
}
