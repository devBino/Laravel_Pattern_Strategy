<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Repositories\Cadastro\Cadastro as CAD;
use App\Http\Repositories\Cadastro\Produto as PROD;

class Produto{

    private $cadastro;
    private $produto;

    public function __construct(){
        $this->cadastro = new CAD();
        $this->produto = new PROD();
    }

    public function index(){
        return view('produto');
    }

    public function salvar(Request $request){
        $acao = $this->cadastro->salvar($request->all(),$this->produto);
        return view('produto');
    }

}