<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class song extends Model
{
    //
    public $timestamps = false;

    public function genre(){
    	return $this->belongsTo('App\Genre');
    }
}
