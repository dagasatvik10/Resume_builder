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
    	$work_experience->achievement_job_title = $this->input->achievement_job_title;
    	$work_experience->achievement_company_name = $this->input->achievement_company_name;
    	$work_experience->achievement_start_date = $this->input->achievement_start_date;
    	$work_experience->achievement_end_date = $this->input->achievement_end_date;
    	$work_experience->save();
    }
}
