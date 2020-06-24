<?php
namespace App\Http\Repositories\Cadastro;

use App\Http\Interfaces\Cadastro;

class Produto implements Cadastro{
    public function salvar(Array $params){
        dd("salvar em produto");
    }
    public function alterar(Array $params){

    }
    public function deletar(Array $params){

    }
}