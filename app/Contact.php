<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function resume()
    {
        return $this->belongsTo('App\Resume');
    }

    public function update_contact($input)
    {
    	$contact = new Contact;
    	$contact->phone_number = $input['phone_number'];

    	$contact->save();
    }
}
