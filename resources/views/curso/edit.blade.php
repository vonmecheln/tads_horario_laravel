@extends('layouts.app')
@section('title', 'Novo Curso')

@section('content')
    
<form action="/curso/update/{{ $curso->id }}" method="POST">
    @csrf
    @method('PUT')
    
    <div class="mb-3">
      <label for="nomeInput" class="form-label">Nome</label>
      <input type="text" class="form-control" id="nomeInput"
      name="nome" value="{{ $curso->nome }}" >
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection