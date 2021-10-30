<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Estudiante;
use App\Models\Acudiente;
use App\Models\Docentes;
use App\Models\Usuario;

class AcudienteController extends Controller
{
    public function anuncio(){
        return $this->hasMany(Anuncio::class);
    }

    public function show_estudiantes(){
        $estudiantes = Estudiante::orderBy('nombre', 'desc')->get();
        if(session('LoggedAcudiente')){
            $data = ['LoggedUserInfo'=>Acudiente::where('id', '=', session('LoggedAcudiente'))->first()];
        }else if(session('LoggedDocente')){
            $data = ['LoggedUserInfo'=>Docentes::where('id', '=', session('LoggedDocente'))->first()];
        }
        return view('preview', $data, compact('estudiantes'));
    }
}
