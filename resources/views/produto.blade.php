@extends('layouts.app')

@section('title', 'Lista de Produtos')

@section('content')
<h1>Lista de produtos</h1>
<h2>Nenhum produto localizado</h2>
<h3>{{ $categoria ?? '' }}</h3>
@endsection