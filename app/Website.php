<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Website extends Model
{
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function resume()
    {
        return $this->belongsTo('App\Resume');
    }

    public function update_website($input)
    {
    	$user = new User;
    	$user->website_name = $this->input->website_name;
    	$user->save();
    }
}
