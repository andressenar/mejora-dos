<?php

use App\Http\Controllers\ClienteController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/index', function(){
    return view('index');
});
Route::post('/client', [ClienteController::class,'store'])->name('client.store');
Route::get('/client',[ClienteController::class,'create']);

Route::get('client/client',[ClienteController::class,'index'])->name('client.index');
Route::get('client/{client}',[ClienteController::class,'show'])->name('client.show');
Route::delete('client/{client}',[ClienteController::class,'destroy'])->name('client.destroy');
Route::put('client/{client}',[ClienteController::class,'update'])->name('client.update');
Route::get('client/{client}/editar',[ClienteController::class,'edit'])->name('client.edit');
