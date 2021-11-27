<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;

class Simulado
{
    public static function todos()
    {
        $query = DB::table("simulado");
        $query->select(DB::raw("*, (SELECT COUNT(questao_id) FROM questaodosimulado WHERE simulado_id = id) AS quant_questoes"));
        return $query->get()  -> toArray();

    }
    
    public static function um($id) 
    {
        return DB::table("simulado")->find($id);
    }

    public static function todasquestoes($id)
    {
        $query = DB::table("questao");
        $query->select(DB::raw("questao.id, questao.enunciado"));
        $query->join("questaodosimulado", "questao.id", "=", "questaodosimulado.questao_id");
        $query->where("questaodosimulado.simulado_id", "=", $id);
        return $query->get() -> toArray();
    }

    public static function todasalternativas($id)
    {
        $query = DB::table("alternativas");
        $query->select(DB::raw("alternativas.id, alternativas.Texto, alternativas.Status"));
        $query->join("questao", "questao.id", "=", "alternativas.questao_id");
        $query->where("questao.id", "=", $id);
        return $query->get() -> toArray();
    }

    public static function verificarresposta($id) 
    {
        $query = DB::table("alternativas");
        $query -> where("alternativas.Status", "=", 1);
        $query -> where("alternativas.questao_id", "=", $id);
        return $query -> first();
    }
}


