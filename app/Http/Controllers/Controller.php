<?php

namespace App\Http\Controllers;

use App\Models\Simulado;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    public function home()
    {
        if(@$_REQUEST["busca"]){
            $simulados = Simulado::busca($_REQUEST["busca"]);
        } else {
            $simulados = Simulado::todos();
        }

        return view('home', [
            
            "simulados"=>$simulados
        ]);
    }

    public function simulado()
    {
        $simulado = Simulado::simuladocompleto($_REQUEST["id"]);
        return view('simulado', [
            "simulado"=>$simulado
        ]);
    }

    public function resultado()
    {
        $simulado = Simulado::simuladocompleto($_REQUEST["id"]);
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
            "notausuario"=> $notausuario,
            "simulado"=> $simulado,
            "respostas"=> $_REQUEST["respostas"]
        ]);
    }

}
