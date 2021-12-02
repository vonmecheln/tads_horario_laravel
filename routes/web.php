<?php

use App\Models\Curso;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/cursos', function(){
    
    $curso = Curso::first();
    $turmas = $curso->turmas()->get();

    dd($turmas);

    return "<h1>Lista de Cursos</h1>";
});