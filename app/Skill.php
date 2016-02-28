<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function resume()
    {
        return $this->belongsTo('App\Resume');
    }

    public function update_skill($input)
    {
    	$skill = new Skill;
    	$skill->skill_name = $this->input->skill_name;
    	$skill->save();
    }
}
