<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Song extends Model
{
    //
    public $timestamps = false;

    public function genre(){
    	return $this->belongsTo('App\Genre');
    }

    public function labels()
    {
    	return $this->hasMany('App\Label');
    }

    public function lyric()
    {
    	return $this->hasOne('App\Lyric');
    }
}
