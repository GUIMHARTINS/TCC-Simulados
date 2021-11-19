<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;

class Simulado {
    public static function todos () {
       $query = DB::table("simulado");
       $query -> select(DB::raw("*, (SELECT COUNT(questao_id) FROM questaodosimulado WHERE simulado_id = id) AS quant_questoes"));
       return $query->get(); 
    }
}