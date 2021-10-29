<?php

use App\Http\Controllers\ActividadController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AnuncioController;
use App\Http\Middleware\AuthCheck;
use Illuminate\Support\Facades\Log;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', HomeController::class ) ->name('home');
Route::get('/auth/logindocente', [LoginController::class, 'login_docente']) ->name('auth.login_docente');
Route::get('/auth/loginacudiente', [LoginController::class, 'login_acudiente']) ->name('auth.login_acudiente');
Route::get('/auth/loginadmin', [LoginController::class, 'login_admin']) ->name('auth.login_admin');
Route::post('/auth/check_docente', [LoginController::class, 'check_docente']) ->name('auth.check_docente');
Route::post('/auth/check_acudiente', [LoginController::class, 'check_acudiente']) ->name('auth.check_acudiente');
Route::post('/auth/check_admin', [LoginController::class, 'check_admin']) ->name('auth.check_admin');
Route::get('/auth/logout',[LoginController::class, 'logout'])->name('auth.logout');

Route::group(['middleware'=>['AuthCheck']],function(){

    
    Route::get('/anuncios/show',[AnuncioController::class,'show'])->name('anuncios.show');
    Route::get('/anuncios/create',[AnuncioController::class,'create'])->name('anuncios.create');
    Route::post('/anuncios/store',[AnuncioController::class, 'store'])->name('anuncios.store');
    Route::get('/actividades/show', [ActividadController::class, 'show'])->name('actividades.show');
    Route::get('/actividades/create', [ActividadController::class, 'create'])->name('actividades.create');
    Route::post('/actividades/store', [ActividadController::class, 'store'])->name('actividades.store');
    Route::get('/actividades/download{file}', [ActividadController::class, 'download'])->name('actividades.download');
        
});


Route::group(['middleware'=>['AuthCheckAdmin']], function(){
    Route::view('/admin', 'admin.register')->name('admin');
    Route::get('/admin/acudientes', [AdminController::class, 'show_acudientes' ]) ->name('show.acudientes');
    Route::get('/admin/docentes', [AdminController::class, 'show_docentes' ]) ->name('show.docentes');
    Route::get('/admin/register_docente', [AdminController::class, 'register_docente' ]) ->name('admin.register_docente');
    Route::get('/admin/register_acudiente', [AdminController::class, 'register_acudiente' ]) ->name('admin.register_acudiente');
    Route::post('/admin/save_docente', [AdminController::class, 'save_docente']) ->name('admin.save_docente');
    Route::post('/admin/save_acudiente', [AdminController::class, 'save_acudiente']) ->name('admin.save_acudiente');
    Route::get('/admin/edit_acudiente/{acudiente}', [AdminController::class, 'edit_acudiente' ]) ->name('admin.edit_acudiente');
    Route::put('/admin/acudientes/{acudiente}', [AdminController::class, 'update_acudiente' ]) ->name('admin.update_acudiente');
    Route::delete('/admin/acudientes/{acudiente}', [AdminController::class, 'destroy_acudiente' ]) ->name('admin.destroy_acudiente');
    Route::get('/admin/edit_docente/{docente}', [AdminController::class, 'edit_docente' ]) ->name('admin.edit_docente');
    Route::put('/admin/docentes/{docente}', [AdminController::class, 'update_docente' ]) ->name('admin.update_docente');
    Route::delete('/admin/docentes/{docente}', [AdminController::class, 'destroy_docente' ]) ->name('admin.destroy_docente');
});