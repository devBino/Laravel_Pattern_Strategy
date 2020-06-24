<?php
namespace App\Http\Repositories\Cadastro;

class Cadastro{

    public function salvar(Array $params, $objeto){
        return $objeto->salvar($params);
    }
    public function alterar(Array $params){

    }
    public function deletar(Array $params,$objeto){
        return $objeto->deletar($params);
    }

}