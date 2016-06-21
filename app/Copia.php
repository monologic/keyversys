<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Copia extends Model
{
    public $timestamps = false;
	
	public function sistema()
    {
    	return $this->belongsTo('App\Sistema');
    }
}
