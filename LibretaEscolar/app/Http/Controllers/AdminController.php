<?php

namespace App\Http\Controllers;

use App\Models\Acudiente;
use Illuminate\Http\Request;
use App\Models\Docentes;
use App\Models\Usuario;
use App\Models\Estudiante;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    function register_docente(){
        return view('admin.register_docente');
     
    }

    function save_docente(Request $request){
        //validar request
        $request->validate([
            'nombre'=>'required',
            'curso'=>'required',
            'usuario'=>'required|unique:docentes',
            'contraseña'=>'required|min:5|max:12'
            
        ]);

        $docente = new Docentes;

        $docente->nombre = $request->nombre;
        $docente->curso = $request->curso;
        $docente->usuario = $request->usuario;
        $contraseñahash = Hash::make($request->contraseña);
        $docente->contraseña = $contraseñahash;
        $save = $docente->save();


        $usuario = new Usuario;

        $usuario->nombre = $request->nombre;
        $usuario->tipousuario = 'docente';
        $usuario->usuario = $request->usuario;
        $usuario->curso = $request->curso;
        $hash = Hash::make($request->contraseña);
        $usuario->contraseña = $hash;
        $saveu = $usuario->save();

        if($save && $saveu){
            return back()->with('success', 'Se ha registrado correctamente al docente');
        }else{
            return back()->with('fail', 'Algo salio mal');
        }
    }

    function register_acudiente(){
        return view('admin.register_acudiente');
     
    }

    function save_acudiente(Request $request){
        //validar request
        $request->validate([
            'nombre'=>'required',
            'telefono'=>'required',
            'usuario'=>'required|unique:acudientes',
            'contraseña'=>'required|min:5|max:12'
            
        ]);

        $acudiente = new Acudiente;

        $acudiente->nombre = $request->nombre;
        $acudiente->telefono = $request->telefono;
        $acudiente->usuario = $request->usuario;
        $contraseñahash = Hash::make($request->contraseña);
        $acudiente->contraseña = $contraseñahash;
        $save = $acudiente->save();

        $usuario = new Usuario;

        $usuario->nombre = $request->nombre;
        $usuario->tipousuario = 'acudiente';
        $usuario->usuario = $request->usuario;
        $hash = Hash::make($request->contraseña);
        $usuario->contraseña = $hash;
        $saveu = $usuario->save();

        if($save && $saveu){
            return back()->with('success', 'Se ha registrado correctamente al acudiente');
        }else{
            return back()->with('fail', 'Algo salio mal');
        }
        
    }

    public function show_acudientes(){
        $acudientes = Acudiente::orderBy('id', 'desc')->paginate();

        return view('admin.acudientes', compact('acudientes'));
    }

    public function show_docentes(){
        $docentes = Docentes::orderBy('nombre', 'desc')->paginate();

        return view('admin.docentes', compact('docentes'));
    }

    public function edit_acudiente(Acudiente $acudiente){
        return view('admin.edit_acudiente', compact('acudiente'));
    }

    public function update_acudiente(Request $request, Acudiente $acudiente){
        $request->validate([
            'nombre' => 'required',
            'telefono' => 'required',
            'usuario' => 'required'
        ]);

        $acudiente->update($request->all());

        return redirect()->route('show.acudientes');
    }

    public function destroy_acudiente(Acudiente $acudiente){

        $acudiente->delete();

        return redirect()->route('show.acudientes');
    }

    public function edit_docente(Docentes $docente){
        return view('admin.edit_docente', compact('docente'));
    }

    public function update_docente(Request $request, Docentes $docente){
        $request->validate([
            'nombre' => 'required',
            'curso' => 'required',
            'usuario' => 'required'
        ]);

        $docente->update($request->all());

        return redirect()->route('show.docentes');
    }

    public function destroy_docente(Docentes $docente){
        /* $usuario = new Usuario;
        $usuario = Usuario::where('usuarios.usuario', '=', 'docentes.usuario' );
        $usuario->delete(); */
        $docente->delete();

        return redirect()->route('show.docentes');
    }



    function register_estudiante(){
        return view('admin.register_estudiante');
     
    }

    function save_estudiante(Request $request){
        //validar request
        $request->validate([
            'nombre'=>'required',
            'curso'=>'required',
            'id_acudiente'=>'required'
            
        ]);

        $estudiante = new estudiante;

        $estudiante->nombre = $request->nombre;
        $estudiante->curso = $request->curso;
        $estudiante->id_acudiente = $request->id_acudiente;
        $save = $estudiante->save();

        if($save){
            return back()->with('success', 'Se ha registrado correctamente al docente');
        }else{
            return back()->with('fail', 'Algo salio mal');
        }
    }

    public function show_estudiantes(){
        $estudiantes = Estudiante::orderBy('nombre', 'desc')->paginate();

        return view('admin.estudiantes', compact('estudiantes'));
    }

    public function edit_estudiante(Estudiante $estudiante){
        return view('admin.edit_estudiante', compact('estudiante'));
    }

    public function update_estudiante(Request $request, Estudiante $estudiante){
        $request->validate([
            'nombre' => 'required',
            'telefono' => 'required',
            'usuario' => 'required'
        ]);

        $estudiante->update($request->all());

        return redirect()->route('show.acudientes');
    }

    public function destroy_estudiante(estudiante $estudiante){

        $estudiante->delete();

        return redirect()->route('show.estudiante');
    }



}
