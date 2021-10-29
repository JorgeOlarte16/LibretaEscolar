<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DocenteController extends Controller
{
    public function anuncio(){
        return $this->hasMany(Anuncio::class);
    }
}
