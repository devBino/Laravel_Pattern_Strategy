<?php
namespace App\Http\Interfaces;

/**
 * @author Fernando Bino
 * Interface para padronizar operações no cadastro
*/
interface Cadastro{

    public function salvar(Array $params);
    public function alterar(Array $params);
    public function deletar(Array $params);

}