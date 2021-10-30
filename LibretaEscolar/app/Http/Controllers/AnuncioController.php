<?php

namespace App\Http\Controllers;

use App\Models\Acudiente;
use App\Models\Anuncio;
use App\Models\Docentes;
use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\Usuario;

class AnuncioController extends Controller
{
    public function acudiente(){
        return $this->belongsTo(Acudiente::class);
    }

    public function docente(){
        return $this->belongsTo(Docentes::class);
    }

    public function show(){
        $anuncios = Anuncio::orderBy('created_at', 'desc')->get();
        if(session('LoggedAcudiente')){
            $data = ['LoggedUserInfo'=>Acudiente::where('id', '=', session('LoggedAcudiente'))->first()];
        }else if(session('LoggedDocente')){
            $data = ['LoggedUserInfo'=>Docentes::where('id', '=', session('LoggedDocente'))->first()];
        }

        return view('anuncios.show',$data , compact('anuncios'));
    }

    public function create(Usuario $usuario){
            return view('anuncios.create', compact('usuario'));
    }

    public function store(Request $request){
        $anuncio = new Anuncio();

        if(session('LoggedAcudiente')){
            $data = ['LoggedUserInfo'=>Acudiente::where('id', '=', session('LoggedAcudiente'))->first()];
        }else if(session('LoggedDocente')){
            $data = ['LoggedUserInfo'=>Docentes::where('id', '=', session('LoggedDocente'))->first()];
        }
        
        $anuncio->titulo = $request->titulo;
        $anuncio->body = $request ->body;
        $anuncio->usuario = $data['LoggedUserInfo']-> usuario;
        $anuncio->curso = $data['LoggedUserInfo']-> curso;

        $anuncio->save();

        return redirect()->route('anuncios.show');

    }

 
}
