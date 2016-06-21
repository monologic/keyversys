<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Copia;

class CopiaController extends Controller
{
    public function verification($nombre, $direccion, $ruta)
    {
    	$serial = $nombre . "|" . $direccion;
    	$serial = md5($serial);

    	$copia = Copia::where('serial', $serial)->get();

    	if (count($copia) > 0) {
            return redirect()->away('http://'.$ruta.':8000/admin#/');
            //return view('welcome')->with('ruta', $ruta);
            //dd('Ingresa');
    	}


    }
}
