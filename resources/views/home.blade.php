@extends('layout')

@section('conteudo')
<link rel="stylesheet" href="/css/home.css">
@foreach($simulados as $s)
    <div class="boxsimulado">
        <div class="nome">{{ $s->nome}}</div>
        <div class="quantidade">{{ $s->quant_questoes}} questoes</div>
    </div>
@endforeach
@endsection
