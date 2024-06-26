@extends('layouts.main')

@section('title', 'HDC Events')

@section('content')

<!-- Título principal da página -->
<h1>Título...</h1>

<!-- Imagem do banner -->
<img src="{{ asset('img/banner.jpg') }}" alt="Imagem">

<!-- Condicional que nunca será verdadeira -->
@if(5 > 15)
    <p>A condição é verdadeira!</p>
@endif

<!-- Exibição de uma variável -->
<p>{{ $nome }}</p>

<!-- Condicionais baseadas no valor da variável $nome -->
@if($nome == 'Lucas')
    <p>Eu sou o Lucas!</p>
@elseif($nome == 'Heitor')
    <p>Eu sou o {{ $nome }}, eu tenho {{ $idade }} anos, e trabalho como {{ $profissao }}!</p>
@else
    <p>Eu não sou o Lucas!</p>
@endif

<!-- Loop for para iterar sobre um array -->
@for($i = 0; $i < count($arr); $i++)
    <p>Valor: {{ $i }} - {{ $i }}</p>
    @if($i == 2)
        <p>Valor é 2!</p>
    @endif
@endfor

<!-- Loop foreach para iterar sobre uma coleção de nomes -->
@foreach($nomes as $nome)
    <p>{{ $loop->index }}</p>
    <p>{{ $nome }}</p>
@endforeach

<!-- Bloco PHP para definir e exibir uma variável -->
@php
    $name = 'Lucas';
    echo $name;
@endphp

<!-- Comentário em HTML -->
{{-- Comentário em Blade --}}

@endsection