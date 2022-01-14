<?php

use App\Models\Curso;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/curso/create', function () {
    return view('curso.create');
});

Route::post('/curso', function(Request $request){
    
    $curso = new Curso();
    $curso->nome = $request->nome;
    $curso->save();

    redirect("/");
});

Route::get('/curso/edit/{id}', function ($id) {
    $curso = Curso::findOrFail($id);
    return view('curso.edit', ['curso'=>$curso]);
});

Route::put('/curso/update/{id}', function ($id, Request $request) {
    $curso = Curso::findOrFail($id);
    $curso->nome = $request->nome;
    $curso->save();
});


Route::get('/cursos', function(){
    
    $curso = Curso::first();
    $turmas = $curso->turmas()->get();

    dd($turmas);

    return "<h1>Lista de Cursos</h1>";
});