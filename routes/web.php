<?php

use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [\App\Http\Controllers\HomeController::class, 'index'])->name('site.home');

Route::get('/ver/{id}', [\App\Http\Controllers\VerController::class, 'show'])->name('site.ver');


Route::get('/inserir', [\App\Http\Controllers\InserirController::class, 'inserir'])->name('site.inserir');
Route::post('/inserir', [\App\Http\Controllers\InserirController::class, 'inserir'])->name('site.inserir');

Route::get('/editar/{id}', [\App\Http\Controllers\EditarController::class, 'update'])->name('site.editar');

Route::post('/editar/{id}', [\App\Http\Controllers\EditarController::class, 'update'])->name('site.editar');

Route::get('/deletar/{id}',  [\App\Http\Controllers\DeletarController::class, 'deletar'])->name('site.deletar');
Route::delete('/deletar/{id}', [\App\Http\Controllers\EditarController::class, 'deletar'])->name('site.deletar');


Route::get('/sobre',  [\App\Http\Controllers\SobreController::class, 'sobre'])->name('site.sobre');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


