@extends('layout')

@section('conteudo')
<link rel="stylesheet" href="/css/resultados.css">
<div class="boxtop">
    <div>
        Simulado finalizado. Confira abaixo o seu desempenho
    </div>
    <div class="txtnota">
        Nota: {{$notausuario}}
    </div>
    <div>
        Acertou {{$acertos}} de {{$quantidadequestoes}} questões
    </div>
</div>

<hr>

<div class="box-all-questions">
    @for($i = 1; $i <=10; $i++)
        <div class="box-question">
            <h1>Questão 1</h1>
            <div class="box-all-answers">
                <span class="box-answer">
                    <div>A</div>
                    <input type="radio" name="" id="">
                </span>
                <span class="box-answer">
                    <div>B</div>
                    <input type="radio" name="" id="">
                </span>
                <span class="box-answer">
                    <div>C</div>
                    <input type="radio" name="" id="">
                </span>
                <span class="box-answer">
                    <div>D</div>
                    <input type="radio" name="" id="">
                </span>
                <span class="box-answer">
                    <div>E</div>
                    <input type="radio" name="" id="">
                </span>
            </div>
        </div>
    @endfor
</div>
<div class="box-buttons">
    <a class="btn" href="">Fazer outro simulado</a>
</div>
@endsection
