<?php use App\Models\Simulado; ?>

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
<?php 
    $cont_questoes = 1;
?>
<div class="box-all-questions">
    @foreach($simulado -> questoes as $q)
    <?php 
        $cont_alternativas="A"; 
        $respostacorreta = Simulado::verificarresposta($q -> id);
        $iddarespostadousuario = $respostas[$q -> id];
        if ($respostacorreta -> id == $iddarespostadousuario) {
            $corquestao = "verde";
        } else {
            $corquestao = "vermelho";
        }

    ?>
        <div class="box-question {{$corquestao}}">
            <h1>Questão {{$cont_questoes}}</h1>
            <div class="box-all-answers">
                @foreach($q -> alternativas as $a)
                <span class="box-answer">
                    <div>{{$cont_alternativas}}</div>
                    <?php
                    $colorir = ""; 
                    if($a -> id == $respostas[$q -> id]){
                        $colorir = "checked";
                    }
                    ?>
                    <input {{$colorir}} type="radio" name="" id="">

                </span>
                <?php $cont_alternativas++; ?>
                @endforeach
            </div>
        </div>
        <?php 
        $cont_questoes++;
        ?>
    @endforeach
</div>
<div class="box-buttons">
    <a class="btn" href="/">Fazer outro simulado</a>
</div>
@endsection
