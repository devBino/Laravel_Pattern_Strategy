<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Repositories\Cadastro\Categoria as CAT;
use App\Http\Repositories\Cadastro\Cadastro as CAD;

class Categoria{

    private $categoria;
    private $cadastro;

    public function __construct(){
        $this->categoria = new CAT();
        $this->cadastro = new CAD();
    }

    public function index(){
        $lista = $this->categoria->pesquisar();
        return view('categoria')->with(['data'=>['lista'=>$lista]]);
    }

    public function salvar(Request $request){
        $arrInfo = $this->cadastro->salvar($request->all(),$this->categoria);        
        return redirect('categoria')->with('status',$arrInfo['msg']);
    }

    public function deletar($categoria){
        $arrInfo = $this->cadastro->deletar(['categoria'=>$categoria],$this->categoria);
        return redirect('categoria')->with('status',$arrInfo['msg']);
    }
    
}