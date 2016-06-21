<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sistema extends Model
{
    public $timestamps = false;
	
	public function copias()
    {
    	return $this->hasMany('App\Copia');
    }
}
