<?php
namespace App\Http\Repositories\Cadastro;

use App\Http\Interfaces\Cadastro;
use App\Http\Repositories\Dados\Crud as CD;

/**
 * @author Fernando Bino
 * Repositorio de Categoria que implementa Cadastro,
 * normalmente recebe os parametros num Array, faz verificações básicas
 * depois manda pro repositorio Crud as CD inserir ou Excluir do Redis
*/
class Categoria implements Cadastro{
    
    private $nomeChave;

    public function __construct(){
        $this->nomeChave = "categorias";
    }

    public function salvar(Array $params){
        
        $arrResponse = ['msg'=>'Favor informar categoria...','success'=>false];

        if( !isset($params['categoria']) || empty($params['categoria']) ){
            return $arrResponse;
        }

        $return = CD::salvar($this->nomeChave,$params['categoria']);

        $arrResponse = ['msg'=>'Não foi possível salvar a categoria...','success'=>false];

        if( $return ){
            $arrResponse = ['msg'=>'Categoria salva com sucesso!','success'=>true];
        }

        return $arrResponse;
    }

    public function pesquisar(){
        $arrDados = CD::pesquisar($this->nomeChave);
        return $arrDados;
    }

    public function alterar(Array $params){

    }
    
    public function deletar(Array $params){
        
        $arrResponse = ['msg'=>'Favor informar categoria...','success'=>false];

        if( !isset($params['categoria']) || empty($params['categoria']) ){
            return $arrResponse;
        }

        $return = CD::deletar($this->nomeChave, $params['categoria']);

        $arrResponse = ['msg'=>'Não foi possível salvar a categoria...','success'=>false];

        if( $return ){
            $arrResponse = ['msg'=>'Categoria salva com sucesso!','success'=>true];
        }

        return $arrResponse;
        
    }
}