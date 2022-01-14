@extends('layouts.app')
@section('title', 'Novo Curso')

@section('content')
    
<form action="/curso" method="POST">
    @csrf
    
    <div class="mb-3">
      <label for="nomeInput" class="form-label">Nome</label>
      <input type="text" class="form-control" id="nomeInput"
      name="nome" >
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection