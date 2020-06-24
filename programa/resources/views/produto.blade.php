@extends('template')
@section('telasCadastro')

<h2>Cadastro de Produtos</h2>

<hr>

<form action="/produto" method="post">

    <input type="hidden" name="_token" value="{!! csrf_token() !!}">

    <label>Categoria</label><br>
    <select name="categoria" required>
        <option></option>
        <option value="1">teste</option>
    </select><br>

    <label>Produto</label><br>
    <input type="text" name="produto" required>&nbsp
    
    <button>Salvar</button>

</form>

@stop