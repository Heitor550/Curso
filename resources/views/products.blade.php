@extends('layouts.main')

@section('title', 'Produtos')

@section('content')

<!-- Título principal da página de produtos -->
<h1>Tela de Produtos...</h1>
@if($busca != '')
    <p>O usuário está buscando por: {{ $busca }}</p>
@endif
@endsection