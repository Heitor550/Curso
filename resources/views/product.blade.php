@extends('layouts.main')

@section('title', 'Produto')

@section('content')

<!-- Exibição do ID do produto -->
@if($id != null)
    <p>Exibindo produto ID: {{ $id }}</p>
@endif

@endsection