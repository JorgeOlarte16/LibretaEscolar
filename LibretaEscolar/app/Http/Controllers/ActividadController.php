<?php

namespace App\Http\Controllers;

use App\Models\actividad;
use App\Models\Usuario;
use App\Models\Docentes;
use App\Models\Acudiente;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ActividadController extends Controller
{
    public function show(){
        $actividades = actividad::orderBy('created_at', 'desc')->get();
        if(session('LoggedAcudiente')){
            $data = ['LoggedUserInfo'=>Acudiente::where('id', '=', session('LoggedAcudiente'))->first()];
        }else if(session('LoggedDocente')){
            $data = ['LoggedUserInfo'=>Docentes::where('id', '=', session('LoggedDocente'))->first()];
        }
        return view('actividades.show', $data, compact('actividades'));
    }

    public function create(Usuario $usuario){
        return view('actividades.create', compact('usuario'));
    }

    public function store(Request $request){
        
        $actividad = new Actividad();
        $data = ['LoggedUserInfo'=>Usuario::where('id', '=', session('LoggedUser'))->first()];
        $actividad->titulo = $request->titulo;
        $actividad->descripcion = $request->descripcion;
        $actividad->fecha_entrega = $request->fecha_entrega;
        $actividad->curso = $data['LoggedUserInfo']->curso;
        
        if($request->file()){
            $fileName = time().'_'.$request->file->getClientOriginalName();
            $filePath = $request->file('file')->storeAs('uploads', $fileName, 'public');
            
            $actividad->file_name = time().'_'.$request->file->getClientOriginalName();
            $actividad->file_path = '/storage/' . $filePath;
            
        }
        $actividad->save();

        return redirect()->route('actividades.show');
    
    }

    public function download(Request $request, $file){
        /*return Storage::download($file); */
        $headers = [
            'Content-Type' => 'application/pdf',
        ];

        return response()->download(storage_path('app/public/'.$file), $file, $headers);
    }
}
