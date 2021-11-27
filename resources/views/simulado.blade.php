@extends('layout')

@section('conteudo')
<link rel="stylesheet" href="/css/simulado.css">
<div id="paginasimulado">
    <h1>{{$simulado->nome}}</h1>
    <form action="/resultado" method="POST">
        @csrf
        <input type="hidden" name="id" value="{{$simulado->id}}">
        @foreach($simulado -> questoes as $q)
        <hr>
        <p>
            {!!$q->enunciado!!}
        </p>
        @foreach($q->alternativas as $a)
        <label>
            <input type="radio" name="respostas[{{$q->id}}]" value="{{$a->id}}" required>
            <span>{{$a->Texto}}</span>
        </label>
        @endforeach
        @endforeach
        <hr>
        <div class="rowButtons">
            <a class="btn" href="/">Cancelar</a>
            <button class="btn" type="submit">Finalizar</button>
        </div>
    </form>
</div>
@endsection