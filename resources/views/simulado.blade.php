@extends('layout')

@section('conteudo')
<link rel="stylesheet" href="/css/simulado.css">
<div id="paginasimulado">
    <h1>{{$simulado->nome}}</h1>

    @foreach($simulado -> questoes as $q)
    <hr>
    <p>
        {!!$q->enunciado!!}
    </p>
        @foreach($q->alternativas as $a)
        <label>
            <input type="radio" name="resposta">
            <span>{{$a->Texto}}</span>
        </label>
        @endforeach
    @endforeach
    <hr>
    <div class="rowButtons">
        <a class="btn" href="/">Cancelar</a>
        <button class="btn">Finalizar</button>
    </div>
</div>
@endsection