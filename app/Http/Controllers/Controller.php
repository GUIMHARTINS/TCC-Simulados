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
        return view('simulado');
    }

    public function resultado()
    {
        return view('resultado');
    }
}
