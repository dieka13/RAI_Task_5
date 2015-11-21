<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class song extends Model
{
    //
    public $timestamps = false;

    public genre(){
    	return this->hasOne('App\Genre')	
    }
}
