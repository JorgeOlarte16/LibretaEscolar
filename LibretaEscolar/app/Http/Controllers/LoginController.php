<?php

namespace App\Http\Controllers;

use App\Models\Acudiente;
use App\Models\Admin;
use App\Models\Anuncio;
use Illuminate\Http\Request;
use App\Models\Docentes;
use App\Models\Usuario;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    function login_docente(){
        return view('auth.logindocente');
    }

    function check_docente(Request $request){
        $request->validate([
            'usuario'=>'required',
            'contraseña'=>'required'
        ]);

        $userInfo = Usuario::where([['usuario', '=', $request->usuario], ['tipousuario', '=', 'docente']])->first();

        if(!$userInfo){
            return back()->with('fail', 'No se encuentra el usuario ingresado');
        }else{
            if(Hash::check($request->contraseña, $userInfo->contraseña)){
                $request ->session()->put('LoggedDocente', $userInfo->id);
                return redirect('anuncios/show');
            }else{
                return back()->with('fail', 'Contraseña incorrecta');
            }
        }
    }

    function login_acudiente(){
        return view('auth.loginacudiente');
    }

    function check_acudiente(Request $request){
        $request->validate([
            'usuario'=>'required',
            'contraseña'=>'required'
        ]);

        $userInfo = Acudiente::where('usuario', '=', $request->usuario)->first();
        
        if(!$userInfo){
            return back()->with('fail', 'No se encuentra el usuario ingresado');
        }else{
            if(Hash::check($request->contraseña, $userInfo->contraseña)){
                $request ->session()->put('LoggedAcudiente', $userInfo->id);
                return redirect('acudientes/preview');
            }else{
                return back()->with('fail', 'Contraseña incorrecta');
            }
        }
    }

    function login_admin(){
        return view('auth.loginadmin');
    }

    function check_admin(Request $request){
        $request->validate([
            'usuario'=>'required',
            'contraseña'=>'required'
        ]);

        $userInfo = Admin::where('usuario', '=', $request->usuario)->first();

        if(!$userInfo){
            return back()->with('fail', 'No se encuentra el usuario ingresado');
        }else{
            if(Hash::check($request->contraseña, $userInfo->contraseña)){
                $request ->session()->put('LoggedAdmin', $userInfo->id);
                return redirect('admin');
            }else{
                return back()->with('fail', 'Contraseña incorrecta');
            }
        }
    }

    function logout(){
        if(session()->has('LoggedAdmin')){
            session()->pull('LoggedAdmin');
            return redirect('/');
        }
        if(session()->has('LoggedAcudiente')){
            session()->pull('LoggedAcudiente');
            return redirect('/');
        }
        if(session()->has('LoggedDocente')){
            session()->pull('LoggedDcudiente');
            return redirect('/');
        }
    }

/*     function tablon_docentes(){
        $data = ['LoggedUserInfo'=>Docentes::where('id', '=', session('LoggedUser'))->first()];
        return view('docente.tablon', $data);
    } */
}

