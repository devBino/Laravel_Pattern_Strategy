<?php
namespace App\Http\Repositories\Dados;

use App\Http\Interfaces\Crud as CD;
use Illuminate\Support\Facades\Redis;

/**
 * @author Fernando Bino
 * Operações Crud no Redis
 * para esse projeto rápido de aprendizados optamos pelo Redis
 * pela versatilidade, e nosso objetivo aqui é estudar Design Patterns - Strategy
*/
class Crud implements CD{

    public static function salvar($nomeChave,$param){

        $arrDados = Redis::get($nomeChave);
        
        //verifica se o array existe
        if( is_null($arrDados) ){
            $arrDados = [];
        }

        $arrDados = unserialize($arrDados);
        
        //$param não pode ser array
        if(is_array($param)){
            return false;
        }

        //verifica se $param já existe em array
        if( in_array($param,$arrDados) ){
            return false;
        }

        $arrDados[] = $param;

        Redis::set($nomeChave,serialize($arrDados));

        return true;

    }

    public static function pesquisar($nomeChave){
        $arrDados = unserialize(Redis::get($nomeChave));
        return $arrDados;
    }

    public static function pesquisarArray($nomeChave,$busca){

    }
    public static function deletar($nomeChave,$param){
        $arrDados   = unserialize(Redis::get($nomeChave));
        $novosDados = [];

        //$param não pode ser array
        if(is_array($param)){
            return false;
        }

        //prepara novo array
        for($i=0;$i<count($arrDados);$i++){
            
            if( $arrDados[$i] == $param ){
                continue;
            }

            $novosDados[] = $arrDados[$i];

        }

        Redis::set($nomeChave,serialize($novosDados));

        return true;
    }

}