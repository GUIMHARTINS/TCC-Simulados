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
    
    public static function um($simulado_id) 
    {
        return DB::table("simulado")->find($simulado_id);
    }

    public static function todasquestoes($simulado_id)
    {
        $query = DB::table("questao");
        $query->select(DB::raw("questao.id, questao.enunciado"));
        $query->join("questaodosimulado", "questao.id", "=", "questaodosimulado.questao_id");
        $query->where("questaodosimulado.simulado_id", "=", $simulado_id);
        return $query->get() -> toArray();
    }

    public static function todasalternativas($questao_id)
    {
        $query = DB::table("alternativas");
        $query->select(DB::raw("alternativas.id, alternativas.Texto, alternativas.Status"));
        $query->join("questao", "questao.id", "=", "alternativas.questao_id");
        $query->where("questao.id", "=", $questao_id);
        return $query->get() -> toArray();
    }

    public static function verificarresposta($questao_id) 
    {
        $query = DB::table("alternativas");
        $query -> where("alternativas.Status", "=", 1);
        $query -> where("alternativas.questao_id", "=", $questao_id);
        return $query -> first();
    }

    public static function simuladocompleto($simulado_id)
    {
        $simulado = Simulado::um($simulado_id);
        $simulado -> questoes = Simulado::todasquestoes($simulado_id);
        foreach($simulado -> questoes as $q)
        {
            $q -> alternativas = Simulado::todasalternativas($q -> id);
        }
        return $simulado;
    }

    public static function busca($nome_simulado){
        $query = DB::table("simulado");
        $query -> where("simulado.nome", "like", "%$nome_simulado%");
        $query->select(DB::raw("*, (SELECT COUNT(questao_id) FROM questaodosimulado WHERE simulado_id = id) AS quant_questoes"));
        return $query -> get() -> toArray();
    }
}


