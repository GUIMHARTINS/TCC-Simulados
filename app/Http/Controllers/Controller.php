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
        return view('resultado');
    }

}
