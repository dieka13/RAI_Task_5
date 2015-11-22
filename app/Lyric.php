<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lyric extends Model
{
    public function song()
    {
    	return $this->belongsTo('App\Song');
    }
}
