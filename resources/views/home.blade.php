@extends('layout')

@section('conteudo')
<link rel="stylesheet" href="/css/home.css">
@for($i = 1; $i <=10; $i++)
    <div class="boxsimulado">
        <div class="nome">ENEM 2019</div>
        <div class="quantidade">20 questoes</div>
    </div>
@endfor
@endsection
