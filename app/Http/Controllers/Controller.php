<?php

namespace App\Http\Controllers;

use App\Models\Simulado;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    public function home()
    {
        $simulados = Simulado::todos();
        // dd($simulados);
        return view('home', [
            "simulados"=>$simulados
        ]);
    }

    public function simulado()
    {
        $simulado = Simulado::um($_REQUEST["id"]);
        $simulado -> questoes = Simulado::todasquestoes($_REQUEST["id"]);
        foreach($simulado -> questoes as $q)
        {
            $q -> alternativas = Simulado::todasalternativas($q -> id);
        }
        return view('simulado', [
            "simulado"=>$simulado
        ]);
    }

    public function resultado()
    {
        $todasquestoes = Simulado::todasquestoes($_REQUEST["id"]); 
        $quantidadequestoes = count($todasquestoes);
        $acertos = 0;
        foreach($_REQUEST["respostas"] as $idquestao => $idrespostadousuario)
        {
            $respostacorreta = Simulado::verificarresposta($idquestao);
            if($respostacorreta->id == $idrespostadousuario){
                $acertos ++;
            }
        }
        $notausuario = ($acertos/$quantidadequestoes)*10;
        return view('resultado', [
            "quantidadequestoes"=>$quantidadequestoes,
            "acertos"=>$acertos,
            "notausuario"=> $notausuario
        ]);
    }

}
