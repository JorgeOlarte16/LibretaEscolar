<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AcudienteController extends Controller
{
    public function anuncio(){
        return $this->hasMany(Anuncio::class);
    }
}
