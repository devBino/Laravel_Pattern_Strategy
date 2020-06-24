<?php
namespace App\Http\Interfaces;

/**
 * @author Fernando Bino
 * Interface para padronizar operações CRUD no Redis
*/
interface Crud{
    public static function salvar($nomeChave,$param);
    public static function pesquisar($nomeChave);
    public static function pesquisarArray($nomeChave,$busca);
    public static function deletar($nomeChave,$param);
}