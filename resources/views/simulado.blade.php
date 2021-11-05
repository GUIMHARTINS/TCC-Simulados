@extends('layout')

@section('conteudo')
<link rel="stylesheet" href="simulado.css">
<div id="paginasimulado">
    <h1>Titulo do Simulado</h1>

    @for($i=1;$i<=5;$i++)
    <hr>
    <p>
        1. Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit natus suscipit quae voluptatibus placeat similique iure distinctio sed amet, deleniti sunt ratione perspiciatis beatae consequuntur error maiores aliquid minus ex.
    </p>
    <label>
        <input type="radio" name="resposta">
        <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias, nam enim, ut officia tempore</span>

    </label>
    <label>
        <input type="radio" name="resposta">
        <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias, nam enim, ut officia tempore</span>

    </label>
    <label>
        <input type="radio" name="resposta">
        <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias, nam enim, ut officia tempore</span>

    </label>
    <label>
        <input type="radio" name="resposta">
        <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias, nam enim, ut officia tempore</span>

    </label>
    @endfor
    <hr>
    <div class="rowButtons">
        <a class="btn"  href="/">Cancelar</a>
        <button class="btn"   >Finalizar</button>
    </div>
</div>
@endsection
