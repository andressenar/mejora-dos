<?php

use App\Http\Controllers\ProyectoController;
use App\Http\Controllers\ColaboradorController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/index', function(){
    return view('index');
});
Route::post('/proyecto', [ProyectoController::class,'store'])->name('proyecto.store');
Route::get('/proyecto',[ProyectoController::class,'create']);

Route::get('proyecto/proyecto',[ProyectoController::class,'index'])->name('proyecto.index');
Route::get('proyecto/{proyecto}',[ProyectoController::class,'show'])->name('proyecto.show');
Route::delete('proyecto/{proyecto}',[ProyectoController::class,'destroy'])->name('proyecto.destroy');
Route::put('proyecto/{proyecto}',[ProyectoController::class,'update'])->name('proyecto.update');
Route::get('proyecto/{proyecto}/editar',[ProyectoController::class,'edit'])->name('proyecto.edit');

Route::post('/colaborador', [ColaboradorController::class,'store'])->name('colaborador.store');
Route::get('/colaborador',[ColaboradorController::class,'create']);

Route::get('colaborador/colaborador',[ColaboradorController::class,'index'])->name('colaborador.index');
Route::get('colaborador/{colaborador}',[ColaboradorController::class,'show'])->name('colaborador.show');
Route::delete('colaborador/{colaborador}',[ColaboradorController::class,'destroy'])->name('colaborador.destroy');
Route::put('colaborador/{colaborador}',[ColaboradorController::class,'update'])->name('colaborador.update');
Route::get('colaborador/{colaborador}/editar',[ColaboradorController::class,'edit'])->name('colaborador.edit');
