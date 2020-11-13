<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Buyer extends Model
{
    public function diaries()
    {
    	return $this->hasMany('App\Models\DiaryTaken');
    }

    public function erasers()
    {
    	return $this->hasMany('App\Models\EraserTaken');
    }

    public function pens()
    {
    	return $this->hasMany('App\Models\PenTaken');
    }

}
