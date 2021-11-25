<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ActividadController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\CursoController;
use App\Http\Controllers\EditorController;

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

Route::get('/', HomeController::class);

Route::view('/', 'home');

Route::view('login', 'login');

Route::view('dashboard', 'dashboard');

Route::post('login', [HomeController::class, 'login']);


Route::get('actividades', [ActividadController::class, 'index'])->name('actividades.index');

Route::get('actividades/create', [ActividadController::class, 'create'])->name('actividades.create');

Route::post('actividades/store', [ActividadController::class, 'store'])->name('actividades.store');

Route::get('actividades/{id}', [ActividadController::class, 'show'])->name('actividades.show');

Route::get('actividades/{actividad}/edit', [ActividadController::class, 'edit'])->name('actividades.edit');

Route::put('actividades/{actividad}', [ActividadController::class, 'update'])->name('actividades.update');

Route::delete('actividades/{actividad}',[ActividadController::class,'destroy'])->name('actividades.destroy');


Route::get('usuarios', [UsuarioController::class, 'index'])->name('usuarios.index');

Route::get('usuarios/create', [UsuarioController::class, 'create'])->name('usuarios.create');

Route::post('usuarios/store', [UsuarioController::class, 'store'])->name('usuarios.store');

Route::get('usuarios/{id}', [UsuarioController::class, 'show'])->name('usuarios.show');

Route::get('usuarios/{usuario}/edit', [UsuarioController::class, 'edit'])->name('usuarios.edit');

Route::put('usuarios/{usuario}', [UsuarioController::class, 'update'])->name('usuarios.update');

Route::delete('usuarios/{usuario}',[UsuarioController::class,'destroy'])->name('usuarios.destroy');


Route::get('cursos', [CursoController::class, 'index'])->name('cursos.index');

Route::get('cursos/create', [CursoController::class, 'create'])->name('cursos.create');

Route::post('cursos/store', [CursoController::class, 'store'])->name('cursos.store');

Route::get('cursos/{id}', [CursoController::class, 'show'])->name('cursos.show');

Route::get('cursos/{curso}/edit', [CursoController::class, 'edit'])->name('cursos.edit');

Route::put('cursos/{curso}', [CursoController::class, 'update'])->name('cursos.update');

Route::delete('cursos/{curso}',[CursoController::class,'destroy'])->name('cursos.destroy');


Route::get('editor', [EditorController::class, 'editor']);


