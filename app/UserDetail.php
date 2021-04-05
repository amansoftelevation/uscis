<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserDetail extends Model
{
    protected $table = 'user_details';
	
	protected $fillable = [
        'user_id',
        'mailing_address',
        'mailing_city',
        'mailing_state',
        'mailing_zip',
        'shiping_address',
        'shiping_city',
        'shiping_state',
        'shiping_zip',
        'card_rate'
    ];
	
}
