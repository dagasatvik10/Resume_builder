<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Achievement extends Model
{
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function resume()
    {
        return $this->belongsTo('App\Resume');
    }

    public function update_achievements($input)
    {
    	$achievements = new Achievement;
    	$achievements->achievement_name = $this->input->achievement_name;
    	$achievements->save();
    }
}
